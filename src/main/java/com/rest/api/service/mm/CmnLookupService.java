package com.rest.api.service.mm;

import java.util.List;
import java.util.Random;
import java.util.UUID;
import java.util.stream.Collectors;

import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.model.common.CmnOtp;
import com.rest.api.model.common.CmnOtpDTO;
import com.rest.api.model.common.CmnPswdUpdate;
import com.rest.api.model.mm.CmnUserVO;
import com.rest.api.service.common.CommonMapper;
import com.rest.api.service.common.CommonService;
import com.rest.api.util.AmazonSES;
import com.rest.api.util.AmazonSNS;

import org.apache.logging.log4j.util.Strings;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

@Service
public class CmnLookupService {

    @Autowired
    private CommonMapper commonMapper;

    @Autowired
    private CommonService commonService;

    @Autowired
    private CmnUserService cmnUserService;

    @Value("${cloud.aws.credentials.accessKey}")
    private String accessKey;

    @Value("${cloud.aws.credentials.secretKey}")
    private String secretKey;

    private static Random r = new Random();

    public boolean sendOtp(final CmnOtpDTO.CmnOtpVO checkOtpVO) throws Exception {
        // User 체크
        final List<CmnUserVO> users = cmnUserService.findUser(checkOtpVO.toCmnUserVO());
        // OTP 코드 생성
        final int tempOtp = r.nextInt(899999 + 1) + 100000; // 100000~999999

        final CmnOtp cmnOtp = new CmnOtp();
        cmnOtp.setVerificationCode(String.valueOf(tempOtp));
        if (Strings.isNotBlank(checkOtpVO.getUserId())) {
            cmnOtp.setUserSeq(users.get(0).getUserSeq());
        }

        // OTP 코드 발송
        if (checkOtpVO.getTelNo() != null) {
            final String result = AmazonSNS.sendSMSMessage(accessKey, secretKey,
                    "H-" + tempOtp + " is your HDEP verification code.", checkOtpVO.getTelNo());
            cmnOtp.setReceiver(checkOtpVO.getTelNo());
            cmnOtp.setMsgId(result);
        } else {
            final String result = AmazonSES.send(accessKey, secretKey, checkOtpVO.getEmail(), "HDEP Verification Code",
                    "<code style=\"font-size:2.5em;line-height:2em\">" + "H-" + tempOtp
                            + "</code><br>is your HDEP verification code.");
            cmnOtp.setReceiver(checkOtpVO.getEmail());
            cmnOtp.setMsgId(result);
        }

        // OTP 코드 기록
        commonMapper.insertOtp(cmnOtp);

        return true;
    }

    public List<CmnOtpDTO.CmnOtpVO> checkOtp(final CmnOtpDTO.CmnOtpVO checkOtpVO) throws Exception {
        // User 체크
        final List<CmnUserVO> users = cmnUserService.findUser(checkOtpVO.toCmnUserVO());

        // checkOtpVO -> cmnOtp 로 변환
        final CmnOtp checkedOtp = commonMapper.selectOtp(checkOtpVO.toCmnOtp());

        if (checkedOtp != null) {
            // otp 검증 성공이니까 사용했다로 표시.
            checkedOtp.setUseYn("Y");
            if (Strings.isNotBlank(checkedOtp.getUserSeq())) {
                if (Strings.isBlank(checkOtpVO.getUserId())) {
                    throw new CResourceNotExistException();
                }
                // PW라면 RESET_TOKEN생성해야 함.
                checkedOtp.setResetToken(UUID.randomUUID().toString());
            }
            commonMapper.updateOtp(checkedOtp);
        } else {
            throw new CResourceNotExistException();
        }

        // return 가공
        final List<CmnOtpDTO.CmnOtpVO> result = users.stream().map(u -> {
            final CmnOtpDTO.CmnOtpVO temp = new CmnOtpDTO.CmnOtpVO();
            temp.setUserId(u.getUserId());
            temp.setResetToken(checkedOtp.getResetToken());
            return temp;
        }).collect(Collectors.toList());

        return result;
    }

    @Transactional
    public boolean updatePassword(final String resetToken, final CmnOtpDTO.UpdatePasswordReq updatePasswordReq)
            throws Exception {
        // resetToken 으로 userSeq 가져오기
        CmnOtp lCmnOtp = new CmnOtp();
        lCmnOtp.setResetToken(resetToken);
        final CmnOtp checkedOtp = commonMapper.selectOtp(lCmnOtp);

        if (checkedOtp == null || Strings.isBlank(checkedOtp.getUserSeq())) {
            throw new CResourceNotExistException();
        }
        // userSeq 로 패스워드 업데이트
        final CmnPswdUpdate lCmnPswdUpdate = new CmnPswdUpdate();
        lCmnPswdUpdate.setNewPswd(updatePasswordReq.getNewPassword());
        lCmnPswdUpdate.setUserSeq(checkedOtp.getUserSeq());
        commonService.newPassword(lCmnPswdUpdate);

        // restToken 클리어
        checkedOtp.setResetToken(Strings.EMPTY);
        commonMapper.updateOtp(checkedOtp);

        return true;

    }

}
