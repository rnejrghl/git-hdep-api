package com.rest.api.controller.cm;

import java.util.List;

import javax.servlet.http.HttpServletResponse;
import javax.validation.Valid;

import com.rest.api.model.common.CmnOtpDTO;
import com.rest.api.model.mm.CmnUserVO;
import com.rest.api.model.response.CommonResult;
import com.rest.api.model.response.ListResult;
import com.rest.api.service.ResponseService;
import com.rest.api.service.mm.CmnLookupService;
import com.rest.api.service.mm.CmnUserService;
import com.rest.api.util.RegexUtil;
import com.rest.api.util.RegexUtil.PatternEnum;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/_/lookup")
public class LookupController {
    @Autowired
    private ResponseService responseService;

    @Autowired
    private CmnUserService cmnUserService;

    @Autowired
    private CmnLookupService cmnLookupService;

    @GetMapping("/checkUserId")
    public CommonResult checkUserId(@RequestParam String userId) throws Exception {
        CmnUserVO lCmnUserVO = new CmnUserVO();
        lCmnUserVO.setUserId(userId);

        cmnUserService.findUser(lCmnUserVO);

        return responseService.getSuccessResult();
    }

    @GetMapping("/requestOtp")
    public CommonResult reqeustOtp(@RequestParam String userName, @RequestParam String receiver,
            @RequestParam(required = false) String userId) throws Exception {
        CmnOtpDTO.CmnOtpVO lCmnOtpVO = new CmnOtpDTO.CmnOtpVO();

        if (RegexUtil.findMatches(PatternEnum.EMAIL, receiver)) {
            lCmnOtpVO.setEmail(receiver);
        } else {
            lCmnOtpVO.setTelNo(receiver.replaceAll("[^0-9]", ""));
        }
        lCmnOtpVO.setUserId(userId);
        lCmnOtpVO.setUserName(userName);

        cmnLookupService.sendOtp(lCmnOtpVO);

        return responseService.getSuccessResult();
    }

    @PostMapping("/checkOtp")
    public ListResult<CmnOtpDTO.CmnOtpVO> checkOtp(@RequestBody @Valid CmnOtpDTO.CheckOtpReq checkOtpReq,
            HttpServletResponse response) throws Exception {
        CmnOtpDTO.CmnOtpVO lCmnOtpVO = new CmnOtpDTO.CmnOtpVO();

        if (RegexUtil.findMatches(PatternEnum.EMAIL, checkOtpReq.getReceiver())) {
            lCmnOtpVO.setEmail(checkOtpReq.getReceiver());
        } else {
            lCmnOtpVO.setTelNo(checkOtpReq.getReceiver().replaceAll("[^0-9]", ""));
        }
        lCmnOtpVO.setUserId(checkOtpReq.getUserId());
        lCmnOtpVO.setUserName(checkOtpReq.getUserName());
        lCmnOtpVO.setVerificationCode(checkOtpReq.getOtpNumber());

        List<CmnOtpDTO.CmnOtpVO> result = cmnLookupService.checkOtp(lCmnOtpVO);

        // pw를 변경하려는 거라면, custom header를 포함하여 return.
        response.addHeader("pw-reset-token", result.get(0).getResetToken());

        return responseService.getListResult(result);

    }

    @PostMapping("/updatePassword/{resetToken}")
    public CommonResult updatePassword(@PathVariable String resetToken,
            @RequestBody CmnOtpDTO.UpdatePasswordReq updatePasswordReq) throws Exception {
        cmnLookupService.updatePassword(resetToken, updatePasswordReq);

        return responseService.getSuccessResult();
    }
}
