package com.rest.api.service.common;

import com.amazonaws.auth.AWSCredentials;
import com.amazonaws.auth.AWSStaticCredentialsProvider;
import com.amazonaws.auth.BasicAWSCredentials;
import com.amazonaws.services.s3.AmazonS3;
import com.amazonaws.services.s3.AmazonS3ClientBuilder;
import com.amazonaws.services.s3.model.CannedAccessControlList;
import com.amazonaws.services.s3.model.PutObjectRequest;
import com.rest.api.advice.exception.CDuplicateException;
import com.rest.api.advice.exception.CRequiredException;
import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.config.constant.ExcelConstant;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.common.*;
import com.rest.api.model.mm.CmnInqRoleVO;
import com.rest.api.model.mm.CmnInrlSiteInsert;
import com.rest.api.model.mm.CmnUserVO;
import com.rest.api.model.mm.ReSendHistInsert;
import com.rest.api.model.mo.KpiPowersVO;
import com.rest.api.model.pp.*;
import com.rest.api.model.wo.MthWkodVO;
import com.rest.api.model.wo.ReNotiSendVO;
import com.rest.api.service.mm.CmnInqMapper;
import com.rest.api.service.mm.CmnUserMapper;
import com.rest.api.service.pp.PrjSiteMapper;
import com.rest.api.service.wo.MtnWkodMapper;
import com.rest.api.util.AmazonSES;
import com.rest.api.util.AmazonSNS;
import com.rest.api.util.UAgentInfo;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;
import org.springframework.util.ObjectUtils;
import org.springframework.util.StringUtils;
import org.springframework.web.multipart.MultipartFile;

import javax.annotation.PostConstruct;
import javax.servlet.http.HttpServletRequest;
import javax.validation.Valid;
import java.text.DateFormat;
import java.text.DecimalFormat;
import java.text.SimpleDateFormat;
import java.time.LocalDateTime;
import java.time.ZoneId;
import java.time.ZonedDateTime;
import java.time.format.DateTimeFormatter;
import java.util.*;

@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class CommonService {

    @Autowired
    private CommonMapper mapper;

    @Autowired
    private PrjSiteMapper psMapper;

    @Autowired
    private CmnUserMapper cuMapper;

    @Autowired
    private MtnWkodMapper mtnWkodmapper;

    @Autowired
    private CmnInqMapper ciMapper;

    private final PasswordEncoder passwordEncoder;

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    private AmazonS3 s3Client;

    @Value("${cloud.aws.credentials.accessKey}")
    private String accessKey;

    @Value("${cloud.aws.credentials.secretKey}")
    private String secretKey;

    @Value("${cloud.aws.s3.bucket}")
    private String bucket;

    @Value("${cloud.aws.region.static}")
    private String region;

    public List<CommonVO> codeList(@Valid CommonVO commonVO) throws Exception {
        String[] grpCds = { "CDK-00001", "CDK-00002", "CDK-00003" };
        commonVO.setGrpCds(grpCds);
        List<CommonVO> codeList = mapper.codeList(commonVO);
        if (codeList.size() == 0) {
            throw new CResourceNotExistException();
        }
        return codeList;
    }

    public List<CmnCmcdVO> codeMainList(CmnCmcdVO cmnCmcdVO) throws Exception {

        List<CmnCmcdVO> codeMainList = mapper.codeMainList(cmnCmcdVO);
        List<CmnCmcdSubVO> codeSubList = mapper.codeSubList(cmnCmcdVO);
        List<CmnCmcdSubVO> subCodes = new ArrayList<>();
        if (codeMainList.size() > 0) {
            for (int i = 0; i < codeMainList.size(); i++) {
                subCodes = new ArrayList<>();
                for (int j = 0; j < codeSubList.size(); j++) {
                    if (codeMainList.get(i).getGrpCd().equals(codeSubList.get(j).getGrpCd())) {
                        subCodes.add(codeSubList.get(j));
                    }

                }
                codeMainList.get(i).setCodes(subCodes);

            }
        }
        return codeMainList;
    }

    public CommonVO codeDtl(@Valid CommonVO commonVO) throws Exception {

        CommonVO codeDtl = mapper.codeDtl(commonVO);
        return codeDtl;
    }

    public boolean codeInsert(@Valid CommonInsert commonVO) throws Exception {
        mapper.codeInsert(commonVO);
        if (commonVO.getCd() == null || commonVO.getGrpCd() == null) {
            throw new CRequiredException();
        }
        return true;
    }

    public boolean codeDelete(@Valid CommonVO commonVO) throws Exception {
        mapper.codeDelete(commonVO);
        if (commonVO.getCd() == null || commonVO.getGrpCd() == null) {
            throw new CRequiredException();
        }
        return true;
    }

    public boolean codeUpdate(@Valid CommonUpdate commonVO) throws Exception {

        if (commonVO.getCd() == null || commonVO.getGrpCd() == null) {
            throw new CRequiredException();
        }
        mapper.codeUpdate(commonVO);
        return true;
    }

    public boolean codeUpdateList(@Valid List<CommonUpdate> commonVO) throws Exception {

        for (int i = 0; i < commonVO.size(); i++) {
            mapper.codeUpdate(commonVO.get(i));
        }

        return true;
    }

    public Map dashboard() throws Exception {
        // 토큰 사용자ID 가져오기
        String userId = jwtTokenProvider.resolveTokenUser();

        String[] sites = jwtTokenProvider.getSiteAuth();
        // System.out.println("[TOKEN]|sites::"+sites);
        // 기존 USER_ID --> USER_SEQ로 변경
        // 사용자ID 변경이 가능 함으로 KEY(USER_SEQ)로 변경
        // System.out.println("[TOKEN]|USER_SEQ::"+userId);

        HashMap map = new HashMap();
        CommonVO commonVO = new CommonVO();
        List<CommonVO> codeList = mapper.codeList(commonVO);
        List<CommonVO> codeList2 = mapper.codeList(commonVO);
        map.put("sub1data", codeList);
        map.put("sub2data", codeList2);
        return map;
    }

    @PostConstruct
    public void setS3Client() {
        AWSCredentials credentials = new BasicAWSCredentials(this.accessKey, this.secretKey);

        s3Client = AmazonS3ClientBuilder.standard().withCredentials(new AWSStaticCredentialsProvider(credentials))
                .withRegion(this.region).build();
    }

    public String fileUpload(MultipartFile file) throws Exception {
        // 고유한 key 값을 갖기위해 현재 시간을 postfix로 붙여줌
        SimpleDateFormat date = new SimpleDateFormat("yyyymmddHHmmss");
        String fileName = date.format(new Date()) + "-" + file.getOriginalFilename();
        String reFileId = "";

        s3Client.putObject(new PutObjectRequest(bucket, fileName, file.getInputStream(), null)
                .withCannedAcl(CannedAccessControlList.PublicRead));
        FileInsert fileInsert = new FileInsert();
        fileInsert.setFilePath(s3Client.getUrl(bucket, fileName).toString());
        fileInsert.setRealFileName(fileName);

        mapper.newFileInsert(fileInsert);
        reFileId = fileInsert.getFileId();

        return reFileId;

    }

    public String fileUpload2(String fileId, MultipartFile[] files) throws Exception {
        String reFileId = "";

        if (!"".equals(fileId) && fileId != null) {
            reFileId = fileId;
        }

        FileInsert fileInsert = new FileInsert();
        for (int i = 0; i < files.length; i++) {
            // 고유한 key 값을 갖기위해 현재 시간을 postfix로 붙여줌
            SimpleDateFormat date = new SimpleDateFormat("yyyymmddHHmmss");
            String fileName = date.format(new Date()) + "-" + files[i].getOriginalFilename();

            s3Client.putObject(new PutObjectRequest(bucket, fileName, files[i].getInputStream(), null)
                    .withCannedAcl(CannedAccessControlList.PublicRead));
            fileInsert.setFileId(reFileId);
            fileInsert.setFilePath(s3Client.getUrl(bucket, fileName).toString());
            fileInsert.setRealFileName(fileName);

            mapper.newFileInsert(fileInsert);
            reFileId = fileInsert.getFileId();
        }
        return reFileId;

    }

    public boolean fileDelete(@Valid String fileSeq) throws Exception {
    	SiteFileVO siteFileVO = new SiteFileVO();
		siteFileVO.setFileSeq(fileSeq);
		SiteFileVO siteFileId =mapper.selectFileId(siteFileVO);
		siteFileVO.setFileId(siteFileId.getFileId());
		
		// 이전에는 CMN_FILE 에만 삭제해줬다.하지만
		// CMN_SITE_FILE 에도 삭제해줘야함.. 
        mapper.fileDelete(siteFileVO);
        mapper.siteFileDelete(siteFileVO);
        
        if (fileSeq == null || "".equals(fileSeq)) {
            throw new CRequiredException();
        }
        return true;
    }

    public boolean smsSendHistInsert(String siteId, String messageId, String userSeq, String messageCntn)
            throws Exception {

        // 로직처리
        SendHistInsert sendHistInsert = new SendHistInsert();
        String sendRsltCd = "S";
        String message = "";
        String result = "";

        NoticeVO noticeVO = new NoticeVO();
        noticeVO.setNotiId(messageId);
        List<NoticeVO> notice = mapper.notice(noticeVO);

        if (!"Y".equals(notice.get(0).getSmsYn())) {
            return true;
        }

        if ("notice006".equals(messageId)) {
            List<ReNotiSendVO> reNotiSendList = mtnWkodmapper.reNotiSendSite();

            for (ReNotiSendVO reNotiSendVO : reNotiSendList) {

                CmnUserVO cmnUserVO = new CmnUserVO();
                cmnUserVO.setUserSeq(reNotiSendVO.getUserSeq());
                List<CmnUserVO> userList = cuMapper.userList(cmnUserVO);
                if (userList.size() == 0) {
                    return true;
                }
                for (CmnUserVO cmnUser : userList) {
                	if("Y".equals(cmnUser.getSmsAlrmYn())) {
		                    try {
		                        result = AmazonSNS.sendSMSMessage(this.accessKey, this.secretKey, notice.get(0).getSmsCntn(),
		                                cmnUser.getTelNo());
		                        // result = AmazonSNS.sendSMSMessage(this.accessKey,this.secretKey, message,
		                        // "+821091195421");
		                    } catch (Exception e) {
		                        sendRsltCd = "F";
		                        System.out.println("SMS_sendRsltCd : " + sendRsltCd);
		                    }
		                    String lastChngUseq = jwtTokenProvider.resolveTokenUser();
		                    sendHistInsert.setAlrmName(notice.get(0).getNotiName()); /* 알람명 */
		                    sendHistInsert.setLastChngUseq(lastChngUseq); /* 최종작업자번호 */
		                    sendHistInsert.setSendGubn("SMS"); /* 발송구분 (SMS/MAIL) */
		                    sendHistInsert.setRecvSeq(cmnUser.getUserSeq()); /* 수신자번호 */
		                    sendHistInsert.setSendCntn(notice.get(0).getSmsCntn()); /* 발송내역 */
		                    sendHistInsert.setMsgId(result); /* 발송메시지ID */
		                    sendHistInsert.setSendGubnCntn(cmnUser.getTelNo()); /* 발송구분내용 (발송구분에 따른 전화번호 또는 메일주소) */
		
		                    if (!"F".equals(sendRsltCd)) {
		                        if (StringUtils.isEmpty(sendRsltCd)) {
		                            sendRsltCd = "F"; /* 발송결과코드 (S(Success)/F(Fail)) */
		                        } else {
		                            sendRsltCd = "S"; /* 발송결과코드 (S(Success)/F(Fail)) */
		                        }
		                    }
		
		                    sendHistInsert.setSendRsltCd(sendRsltCd); /* 발송결과코드 (S(Success)/F(Fail)) */
		
		                    mapper.cmnSendHistInsert(sendHistInsert);
                	}
                }
            }

        } else {
            if (StringUtils.isEmpty(messageCntn)) {

                if (notice.get(0).getSmsCntn().indexOf("{Site ID}") > 0) {
                    String[] noticeSpl = notice.get(0).getSmsCntn().split("\\{Site ID}");
                    for (int i = 0; i < noticeSpl.length; i++) {
                        if (i == 1) {
                            message += siteId;
                            message += noticeSpl[i];
                        } else {
                            message += noticeSpl[i];
                        }
                    }
                } else {
                    message = notice.get(0).getSmsCntn();
                }

            } else {
                if (messageCntn.indexOf("{Site ID}") > 0) {
                    String[] noticeSpl = messageCntn.split("\\{Site ID}");
                    for (int i = 0; i < noticeSpl.length; i++) {
                        if (i == 1) {
                            message += siteId;
                            message += noticeSpl[i];
                        } else {
                            message += noticeSpl[i];
                        }
                    }
                } else {
                    message = messageCntn;
                }

            }

            CmnUserVO cmnUserVO = new CmnUserVO();

            ContractPlanVO contractPlanVO = new ContractPlanVO();
            contractPlanVO.setSiteId(siteId);

            List<ContractPlanVO> contractPlanList = psMapper.contractPlan(contractPlanVO);
            if (contractPlanList.size() == 0) {
                return true;
            }

            if ("notice001".equals(messageId)) {
                cmnUserVO.setUserSeq(userSeq); // O&M 담당자
            } else if ("notice002".equals(messageId)) {
                cmnUserVO.setUserSeq(userSeq); // O&M 담당자
            } else if ("notice003".equals(messageId)) {
                cmnUserVO.setUserSeq(userSeq); // O&M 담당자
            } else if ("notice004".equals(messageId)) {
                cmnUserVO.setUserSeq(userSeq); // O&M 담당자
            } else if ("notice005".equals(messageId)) {
                cmnUserVO.setUserSeq(userSeq); // O&M 담당자
            } else if ("notice007".equals(messageId)) {
                String[] userLvCdList = { "ACN002" }; // DE Operator
                cmnUserVO.setUserLvlCdList(userLvCdList);
            } else if ("notice008".equals(messageId)) {
                cmnUserVO.setUserSeq(contractPlanList.get(0).getInstPsnSeq());// installer
            } else if ("notice009".equals(messageId)) {
                String[] userLvCdList = { "ACN006", "ACN002" }; // invoice, DE Operator
                cmnUserVO.setUserLvlCdList(userLvCdList);
            } else if ("notice010".equals(messageId)) {
                String[] userLvCdList = { "ACN006", "ACN002" }; // invoice, DE Operator
                cmnUserVO.setUserLvlCdList(userLvCdList);
            } else if ("notice011".equals(messageId)) {
                cmnUserVO.setUserSeq(contractPlanList.get(0).getInstPsnSeq()); // installer
            }

            List<CmnUserVO> userList = cuMapper.userList(cmnUserVO);
            if (userList.size() == 0) {
                return true;
            }

            for (CmnUserVO cmnUser : userList) {
            	if("Y".equals(cmnUser.getSmsAlrmYn())) {
		                try {
		                    result = AmazonSNS.sendSMSMessage(this.accessKey, this.secretKey, message, cmnUser.getTelNo());
		                    // result = AmazonSNS.sendSMSMessage(this.accessKey,this.secretKey, message,
		                    // "+821091195421");
		                } catch (Exception e) {
		                    sendRsltCd = "F";
		                    System.out.println("SMS_sendRsltCd : " + sendRsltCd);
		                }
		                String lastChngUseq = jwtTokenProvider.resolveTokenUser();
		                sendHistInsert.setAlrmName(notice.get(0).getNotiName()); /* 알람명 */
		                sendHistInsert.setLastChngUseq(lastChngUseq); /* 최종작업자번호 */
		                sendHistInsert.setSendGubn("SMS"); /* 발송구분 (SMS/MAIL) */
		                sendHistInsert.setRecvSeq(cmnUser.getUserSeq()); /* 수신자번호 */
		                sendHistInsert.setSendCntn(message); /* 발송내역 */
		                sendHistInsert.setMsgId(result); /* 발송메시지ID */
		                sendHistInsert.setSendGubnCntn(cmnUser.getTelNo()); /* 발송구분내용 (발송구분에 따른 전화번호 또는 메일주소) */
		                if (!"F".equals(sendRsltCd)) {
		                    if (StringUtils.isEmpty(sendRsltCd)) {
		                        sendRsltCd = "F"; /* 발송결과코드 (S(Success)/F(Fail)) */
		                    } else {
		                        sendRsltCd = "S"; /* 발송결과코드 (S(Success)/F(Fail)) */
		                    }
		                }
		
		                sendHistInsert.setSendRsltCd(sendRsltCd); /* 발송결과코드 (S(Success)/F(Fail)) */
		
		                mapper.cmnSendHistInsert(sendHistInsert);
            	}
            }
        }
        return true;
    }
    
    public boolean reSendHistInsert(ReSendHistInsert reSendHistInsert) throws Exception {

        // 로직처리       
        String sendRsltCd = "S";
        String result = "";
                             
	        if ("SMS".equals(reSendHistInsert.getSendGubn()) && "Y".equals(reSendHistInsert.getSmsAlrmYn())) {
	            try {
	                result = AmazonSNS.sendSMSMessage(this.accessKey, this.secretKey, reSendHistInsert.getSendCntn(),
	                        reSendHistInsert.getSendGubnCntn());
	                // result = AmazonSNS.sendSMSMessage(this.accessKey,this.secretKey, message,
	                // "+821091195421");
	            } catch (Exception e) {
	                sendRsltCd = "F";
	                System.out.println("RESMS_sendRsltCd : " + sendRsltCd);
	            }
	            
	            // History저장
	            sendHistInsert(reSendHistInsert , result , sendRsltCd);
	            
	        } else if("EMAIL".equals(reSendHistInsert.getSendGubn()) &&  "Y".equals(reSendHistInsert.getEmailAlrmYn())){
	            // 메일
	            try {
	                AmazonSES sender = new AmazonSES();
	
	                result = sender.send(this.accessKey, this.secretKey, reSendHistInsert.getSendGubnCntn(),
	                        reSendHistInsert.getAlrmName(), reSendHistInsert.getSendCntn());
	                // System.out.println(result);
	            } catch (Exception e) {
	                sendRsltCd = "F";
	                System.out.println("RESMS_sendRsltCd : " + sendRsltCd);	
	            }
	            
	         // History저장
	            sendHistInsert(reSendHistInsert , result , sendRsltCd);
	            
	        }
		              
        return true;
    }
    
    public void sendHistInsert(ReSendHistInsert reSendHistInsert,String result ,String sendRsltCd) throws Exception {
    	 
    	SendHistInsert sendHistInsert = new SendHistInsert();
    	 
    	String lastChngUseq = jwtTokenProvider.resolveTokenUser();
        sendHistInsert.setAlrmName(reSendHistInsert.getAlrmName()); /* 알람명 */
        sendHistInsert.setLastChngUseq(lastChngUseq); /* 최종작업자번호 */
        sendHistInsert.setSendGubn(reSendHistInsert.getSendGubn()); /* 발송구분 (SMS/MAIL) */
        sendHistInsert.setRecvSeq(reSendHistInsert.getRecvSeq()); /* 수신자번호 */
        sendHistInsert.setSendCntn(reSendHistInsert.getSendCntn()); /* 발송내역 */
        sendHistInsert.setMsgId(result); /* 발송메시지ID */
        sendHistInsert.setSendGubnCntn(reSendHistInsert.getSendGubnCntn()); /* 발송구분내용 (발송구분에 따른 전화번호 또는 메일주소) */

        if (!"F".equals(sendRsltCd)) {
            if (StringUtils.isEmpty(sendRsltCd)) {
                sendRsltCd = "F"; /* 발송결과코드 (S(Success)/F(Fail)) */
            } else {
                sendRsltCd = "S"; /* 발송결과코드 (S(Success)/F(Fail)) */
            }
        }

        sendHistInsert.setSendRsltCd(sendRsltCd); /* 발송결과코드 (S(Success)/F(Fail)) */

        mapper.cmnSendHistInsert(sendHistInsert);
    	
    }

    public boolean emailSendHistInsert(String siteId, String workOrdId, String messageId, String userSeq,
            String messageCntn) throws Exception {

        // 로직처리
        SendHistInsert sendHistInsert = new SendHistInsert();
        String sendRsltCd = "S";
        String message = "";
        String result = "";
        String lastChngUseq = jwtTokenProvider.resolveTokenUser();
        String noticeCtnt = "";
        DateFormat format = new SimpleDateFormat("yyyy-MM-dd");
        DateFormat dateFormat = new SimpleDateFormat("yyyyMMdd");

        NoticeVO noticeVO = new NoticeVO();
        noticeVO.setNotiId(messageId);
        List<NoticeVO> notice = mapper.notice(noticeVO);

        if (!"Y".equals(notice.get(0).getMailYn())) {
            return true;
        }

        if ("notice006".equals(messageId)) {
            List<ReNotiSendVO> reNotiSendList = mtnWkodmapper.reNotiSendSite();

            noticeCtnt += notice.get(0).getMailHead();
            noticeCtnt += notice.get(0).getMailCntn();

            noticeCtnt += "<br/><br/>";
            noticeCtnt += "<table border='1' style='border-collapse: collapse;'>";
            noticeCtnt += "<tr> <th style='padding: 10px; text-align:center;' >Site ID</th> <th style='padding: 10px; text-align:center;' >Site 주소</th> <th style='padding: 10px; text-align:center;'>WorkOrder 지연건수</th>";

            for (ReNotiSendVO reNotiSendVO : reNotiSendList) {
                noticeCtnt += "<tr> <td style='padding: 10px; text-align:center;'>" + reNotiSendVO.getSiteId()
                        + "</td> <td style='padding: 10px; text-align:center;'>" + reNotiSendVO.getAddr()
                        + "</td> <td style='padding: 10px; text-align:center;'>" + reNotiSendVO.getCnt() + "</td>";
            }
            noticeCtnt += "</table>";
            message += noticeCtnt;
            message += notice.get(0).getMailFter();
            for (ReNotiSendVO reNotiSendVO : reNotiSendList) {
                CmnUserVO cmnUserVO = new CmnUserVO();
                cmnUserVO.setUserSeq(reNotiSendVO.getUserSeq());
                List<CmnUserVO> userList = cuMapper.userList(cmnUserVO);

                if (userList.size() == 0) {
                    return true;
                }
                for (CmnUserVO cmnUser : userList) {
                	
                	if("Y".equals(cmnUser.getEmailAlrmYn())) {
                	
		                    try {
		                        AmazonSES sender = new AmazonSES();
		
		                        result = sender.send(this.accessKey, this.secretKey, cmnUser.getEmail(),
		                                notice.get(0).getMailTitl(), message);
		                        // System.out.println(result);
		                    } catch (Exception e) {
		                        sendRsltCd = "F";
		                        System.out.println("EMAIL_sendRsltCd : " + sendRsltCd);
		                    }
		                    sendHistInsert.setAlrmName(notice.get(0).getNotiName()); /* 알람명 */
		                    sendHistInsert.setLastChngUseq(lastChngUseq); /* 최종작업자번호 */
		                    sendHistInsert.setSendGubn("MAIL"); /* 발송구분 (SMS/MAIL) */
		                    sendHistInsert.setRecvSeq(cmnUser.getUserSeq()); /* 수신자번호 */
		                    sendHistInsert.setSendCntn(message); /* 발송내역 */
		                    sendHistInsert.setMsgId(result); /* 발송메시지ID */
		                    sendHistInsert.setSendGubnCntn(cmnUser.getEmail()); /* 발송구분내용 (발송구분에 따른 전화번호 또는 메일주소) */
		
		                    if (!"F".equals(sendRsltCd)) {
		                        if (StringUtils.isEmpty(sendRsltCd)) {
		                            sendRsltCd = "F"; /* 발송결과코드 (S(Success)/F(Fail)) */
		                        } else {
		                            sendRsltCd = "S"; /* 발송결과코드 (S(Success)/F(Fail)) */
		                        }
		                    }
		
		                    sendHistInsert.setSendRsltCd(sendRsltCd); /* 발송결과코드 (S(Success)/F(Fail)) */
		
		                    mapper.cmnSendHistInsert(sendHistInsert);
		             }
                }

            }

        } else {

            CmnUserVO cmnUserVO = new CmnUserVO();

            ContractPlanVO contractPlanVO = new ContractPlanVO();
            contractPlanVO.setSiteId(siteId);
            List<ContractPlanVO> contractPlanList = psMapper.contractPlan(contractPlanVO);
            if (contractPlanList.size() == 0) {
                return true;
            }

            SiteGridVO siteGridVO = new SiteGridVO();
            siteGridVO.setSiteId(siteId);
            List<SiteGridVO> gridList = psMapper.gridList(siteGridVO);
            if (gridList.size() == 0) {
                return true;
            }

            MthWkodVO mthWkodVO = new MthWkodVO();
            mthWkodVO.setSiteId(siteId);
            mthWkodVO.setWorkOrdUserSeq(userSeq);
            mthWkodVO.setWorkOrdId(workOrdId);

            List<MthWkodVO> workOrder = mtnWkodmapper.workOrder(mthWkodVO);

            if ("notice001".equals(messageId)) {
                cmnUserVO.setUserSeq(userSeq); // O&M 담당자
            } else if ("notice002".equals(messageId)) {
                cmnUserVO.setUserSeq(userSeq); // O&M 담당자
            } else if ("notice003".equals(messageId)) {
                cmnUserVO.setUserSeq(userSeq); // O&M 담당자
            } else if ("notice004".equals(messageId)) {
                cmnUserVO.setUserSeq(userSeq); // O&M 담당자
            } else if ("notice005".equals(messageId)) {
                cmnUserVO.setUserSeq(userSeq); // O&M 담당자
            } else if ("notice007".equals(messageId)) {
                String[] userLvCdList = { "ACN002" }; // DE Operator
                cmnUserVO.setUserLvlCdList(userLvCdList);
            } else if ("notice008".equals(messageId)) {
                cmnUserVO.setUserSeq(contractPlanList.get(0).getInstPsnSeq());// installer
            } else if ("notice009".equals(messageId)) {
                String[] userLvCdList = { "ACN006", "ACN002" }; // invoice, DE Operator
                cmnUserVO.setUserLvlCdList(userLvCdList);
            } else if ("notice010".equals(messageId)) {
                String[] userLvCdList = { "ACN006", "ACN002" }; // invoice, DE Operator
                cmnUserVO.setUserLvlCdList(userLvCdList);
            } else if ("notice011".equals(messageId)) {
                cmnUserVO.setUserSeq(contractPlanList.get(0).getInstPsnSeq()); // installer
            }
            List<CmnUserVO> userList = cuMapper.userList(cmnUserVO);
            if (userList.size() == 0) {
                return true;
            }

            CmnUserVO omCmnUserVO = new CmnUserVO();
            omCmnUserVO.setUserSeq(lastChngUseq);
            List<CmnUserVO> omUserList = cuMapper.userList(omCmnUserVO);

            InspMngVO inspMngVO = new InspMngVO();
            inspMngVO.setSiteId(siteId);
            List<InspMngVO> inspMng = psMapper.inspMng(inspMngVO);
            noticeCtnt += notice.get(0).getMailHead();

            if (StringUtils.isEmpty(messageCntn)) {

                if (contractPlanList.get(0).getUserName() == null) {
                    noticeCtnt += notice.get(0).getMailCntn().replace("{사용자명}", "");
                } else {
                    noticeCtnt += notice.get(0).getMailCntn().replace("{사용자명}", contractPlanList.get(0).getUserName());
                }
            } else {
                if (contractPlanList.get(0).getUserName() == null) {
                    noticeCtnt += messageCntn.replace("{사용자명}", "");
                } else {
                    noticeCtnt += messageCntn.replace("{사용자명}", contractPlanList.get(0).getUserName());
                }

            }
            if ("notice001".equals(messageId) || "notice002".equals(messageId) || "notice003".equals(messageId)
                    || "notice004".equals(messageId) || "notice005".equals(messageId)) {
                if (contractPlanList.get(0).getUserId() == null) {
                    noticeCtnt = noticeCtnt.replace("{사용자ID}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{사용자ID}", contractPlanList.get(0).getUserId());
                }
                if (contractPlanList.get(0).getAddr() == null) {
                    noticeCtnt = noticeCtnt.replace("{사이트주소}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{사이트주소}", contractPlanList.get(0).getAddr());
                }

                if (userList.get(0).getUserName() == null) {
                    noticeCtnt = noticeCtnt.replace("{O&M담당자명}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{O&M담당자명}", userList.get(0).getUserName());
                }

                if (omUserList.get(0).getUserName() == null) {
                    noticeCtnt = noticeCtnt.replace("{W/O발행자}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{W/O발행자}", omUserList.get(0).getUserName());
                }

                if (workOrder.get(0).getCmplReqDt() != null && !"".equals(workOrder.get(0).getCmplReqDt())) {
                    noticeCtnt = noticeCtnt.replace("{YYYY-MM-DD}",
                            format.format(dateFormat.parse(workOrder.get(0).getCmplReqDt())));
                } else {
                    noticeCtnt = noticeCtnt.replace("{YYYY-MM-DD}", "");
                }
                message = noticeCtnt;

            } else if ("notice006".equals(messageId)) {
                // ??
            } else if ("notice007".equals(messageId)) {
                if (contractPlanList.get(0).getUserId() == null) {
                    noticeCtnt = noticeCtnt.replace("{사용자ID}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{사용자ID}", contractPlanList.get(0).getUserId());
                }
                if (contractPlanList.get(0).getAddr() == null) {
                    noticeCtnt = noticeCtnt.replace("{사이트주소}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{사이트주소}", contractPlanList.get(0).getAddr());
                }
                if (contractPlanList.get(0).getInstPsnName() == null) {
                    noticeCtnt = noticeCtnt.replace("{Installer담당자명}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{Installer담당자명}", contractPlanList.get(0).getInstPsnName());
                }
                if (contractPlanList.get(0).getWkplCmplDt() != null
                        && !"".equals(contractPlanList.get(0).getWkplCmplDt())) {
                    noticeCtnt = noticeCtnt.replace("{YYYY-MM-DD}",
                            format.format(dateFormat.parse(contractPlanList.get(0).getWkplCmplDt())));
                } else {
                    noticeCtnt = noticeCtnt.replace("{YYYY-MM-DD}", "");
                }
                message = noticeCtnt;

            } else if ("notice008".equals(messageId)) {
                if (contractPlanList.get(0).getUserId() == null) {
                    noticeCtnt = noticeCtnt.replace("{사용자ID}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{사용자ID}", contractPlanList.get(0).getUserId());
                }
                if (contractPlanList.get(0).getAddr() == null) {
                    noticeCtnt = noticeCtnt.replace("{사이트주소}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{사이트주소}", contractPlanList.get(0).getAddr());
                }
                if (contractPlanList.get(0).getInstPsnName() == null) {
                    noticeCtnt = noticeCtnt.replace("{Installer담당자명}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{Installer담당자명}", contractPlanList.get(0).getInstPsnName());
                }

                if (contractPlanList.get(0).getExpnDt() != null && !"".equals(contractPlanList.get(0).getExpnDt())) {
                    noticeCtnt = noticeCtnt.replace("{YYYY-MM-DD}",
                            format.format(dateFormat.parse(contractPlanList.get(0).getExpnDt())));
                } else {
                    noticeCtnt = noticeCtnt.replace("{YYYY-MM-DD}", "");
                }
                noticeCtnt = noticeCtnt.replace("{승인담당자명}", omUserList.get(0).getUserName());
                message = noticeCtnt;

            } else if ("notice009".equals(messageId)) {

                if (contractPlanList.get(0).getUserId() == null) {
                    noticeCtnt = noticeCtnt.replace("{사용자ID}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{사용자ID}", contractPlanList.get(0).getUserId());
                }
                if (contractPlanList.get(0).getAddr() == null) {
                    noticeCtnt = noticeCtnt.replace("{사이트주소}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{사이트주소}", contractPlanList.get(0).getAddr());
                }
                if (contractPlanList.get(0).getInstPsnName() == null) {
                    noticeCtnt = noticeCtnt.replace("{Installer담당자명}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{Installer담당자명}", contractPlanList.get(0).getInstPsnName());
                }
                if (gridList.get(0).getApprWorkCmdt() != null && !"".equals(gridList.get(0).getApprWorkCmdt())) {
                    noticeCtnt = noticeCtnt.replace("{YYYY-MM-DD}",
                            format.format(dateFormat.parse(gridList.get(0).getApprWorkCmdt())));
                } else {
                    noticeCtnt = noticeCtnt.replace("{YYYY-MM-DD}", "");
                }
                noticeCtnt = noticeCtnt.replace("{승인담당자명}", omUserList.get(0).getUserName());
                message = noticeCtnt;

            } else if ("notice010".equals(messageId)) {
                if (contractPlanList.get(0).getUserId() == null) {
                    noticeCtnt = noticeCtnt.replace("{사용자ID}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{사용자ID}", contractPlanList.get(0).getUserId());
                }
                if (contractPlanList.get(0).getAddr() == null) {
                    noticeCtnt = noticeCtnt.replace("{사이트주소}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{사이트주소}", contractPlanList.get(0).getAddr());
                }
                if (contractPlanList.get(0).getInstPsnName() == null) {
                    noticeCtnt = noticeCtnt.replace("{Installer담당자명}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{Installer담당자명}", contractPlanList.get(0).getInstPsnName());
                }
                if (gridList.get(0).getApprWorkCmdt() != null && !"".equals(gridList.get(0).getApprWorkCmdt())) {
                    noticeCtnt = noticeCtnt.replace("{YYYY-MM-DD}",
                            format.format(dateFormat.parse(gridList.get(0).getApprWorkCmdt())));
                } else {
                    noticeCtnt = noticeCtnt.replace("{YYYY-MM-DD}", "");
                }
                noticeCtnt = noticeCtnt.replace("{승인담당자명}", omUserList.get(0).getUserName());
                message = noticeCtnt;

            } else if ("notice011".equals(messageId)) {
                if (contractPlanList.get(0).getUserId() == null) {
                    noticeCtnt = noticeCtnt.replace("{사용자ID}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{사용자ID}", contractPlanList.get(0).getUserId());
                }
                if (contractPlanList.get(0).getAddr() == null) {
                    noticeCtnt = noticeCtnt.replace("{사이트주소}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{사이트주소}", contractPlanList.get(0).getAddr());
                }
                if (contractPlanList.get(0).getInstPsnName() == null) {
                    noticeCtnt = noticeCtnt.replace("{Installer담당자명}", "");
                } else {
                    noticeCtnt = noticeCtnt.replace("{Installer담당자명}", contractPlanList.get(0).getInstPsnName());
                }
                noticeCtnt = noticeCtnt.replace("{결과등록한 담당자}", omUserList.get(0).getUserName());

                if (inspMng.get(0).getChkCmplDt() != null && !"".equals(inspMng.get(0).getChkCmplDt())) {
                    noticeCtnt = noticeCtnt.replace("{점검완료일}",
                            format.format(dateFormat.parse(inspMng.get(0).getChkCmplDt())));
                } else {
                    noticeCtnt = noticeCtnt.replace("{점검완료일}", "");
                }
                noticeCtnt = noticeCtnt.replace("{불합격사유}", inspMng.get(0).getChkFailRsn());
                noticeCtnt = noticeCtnt.replace("{점검이력}", inspMng.get(0).getChkHist());

                message = noticeCtnt;

            }

            message += notice.get(0).getMailFter();

            for (CmnUserVO cmnUser : userList) {
            	if("Y".equals(cmnUser.getEmailAlrmYn())) {
		                try {
		                	
		                    AmazonSES sender = new AmazonSES();
		                    result = sender.send(this.accessKey, this.secretKey, cmnUser.getEmail(),
		                            notice.get(0).getMailTitl(), message);
		                    // System.out.println(result);
		                } catch (Exception e) {
		                    sendRsltCd = "F";
		                    System.out.println("EMAIL_sendRsltCd : " + sendRsltCd);
		
		                }
		                sendHistInsert.setAlrmName(notice.get(0).getNotiName()); /* 알람명 */
		                sendHistInsert.setLastChngUseq(lastChngUseq); /* 최종작업자번호 */
		                sendHistInsert.setSendGubn("MAIL"); /* 발송구분 (SMS/MAIL) */
		                sendHistInsert.setRecvSeq(cmnUser.getUserSeq()); /* 수신자번호 */
		                sendHistInsert.setSendCntn(message); /* 발송내역 */
		                sendHistInsert.setMsgId(result); /* 발송메시지ID */
		                sendHistInsert.setSendGubnCntn(cmnUser.getEmail()); /* 발송구분내용 (발송구분에 따른 전화번호 또는 메일주소) */
		
		                if (!"F".equals(sendRsltCd)) {
		                    if (StringUtils.isEmpty(sendRsltCd)) {
		                        sendRsltCd = "F"; /* 발송결과코드 (S(Success)/F(Fail)) */
		                    } else {
		                        sendRsltCd = "S"; /* 발송결과코드 (S(Success)/F(Fail)) */
		                    }
		                }
		
		                sendHistInsert.setSendRsltCd(sendRsltCd); /* 발송결과코드 (S(Success)/F(Fail)) */
		
		                mapper.cmnSendHistInsert(sendHistInsert);
		            }
            }
        }
        return true;
    }
    
    
    
    public boolean  emailUploadSendHistInsert(String userName ,String tabTitleName,String noticeId) throws Exception {
    	    	    	
    	SendHistInsert sendHistInsert = new SendHistInsert();
        String sendRsltCd = "S"; //메시지 성공 = S / 실패 =F
        String emailTitle = ""; // 제목내용
        String message = ""; //메시지내용
        String result = "";  // 결과
        
        String lastChngUseq = jwtTokenProvider.resolveTokenUser();
    	
        // notice에서 어떤 알람인지 조회
        NoticeVO noticeVO = new NoticeVO();
        noticeVO.setNotiId(noticeId);
        List<NoticeVO> notice = mapper.notice(noticeVO);
        
    	// 관리자권한 과 Operator 권한 사용자들 조회
    	CmnUserVO cmnUserVO = new CmnUserVO();
    	String[] userLvCdList = { "ACN001","ACN002" }; // 관리자 및 Operator 권한 사용자들 불러오기
        cmnUserVO.setUserLvlCdList(userLvCdList);
        List<CmnUserVO> userList = cuMapper.userList(cmnUserVO);
                
        // 메일제목 변환        
        emailTitle = notice.get(0).getMailTitl().replace("{userName}", userName);
        
        // 메일내용 변환
        message += notice.get(0).getMailCntn().replace("{userName}", userName);
        message = message.replace("{tabTitleName}", tabTitleName);
        
    	// email 발송
        for (CmnUserVO cmnUser : userList) {
        	if("Y".equals(cmnUser.getEmailAlrmYn())) {
		            try {
		            	
		                AmazonSES sender = new AmazonSES();
		                result = sender.send(this.accessKey, this.secretKey, cmnUser.getEmail(),
		                		emailTitle, message);
		                // System.out.println(result);
		            } catch (Exception e) {
		                sendRsltCd = "F";
		                System.out.println("EMAIL_sendRsltCd : " + sendRsltCd);
		
		            }
		            sendHistInsert.setAlrmName(notice.get(0).getNotiName()); /* 알람명 */
		            sendHistInsert.setLastChngUseq(lastChngUseq); /* 최종작업자번호 */
		            sendHistInsert.setSendGubn("MAIL"); /* 발송구분 (SMS/MAIL) */
		            sendHistInsert.setRecvSeq(cmnUser.getUserSeq()); /* 수신자번호 */
		            sendHistInsert.setSendCntn(message); /* 발송내역 */
		            sendHistInsert.setMsgId(result); /* 발송메시지ID */
		            sendHistInsert.setSendGubnCntn(cmnUser.getEmail()); /* 발송구분내용 (발송구분에 따른 전화번호 또는 메일주소) */
		
		            if (!"F".equals(sendRsltCd)) {
		                if (StringUtils.isEmpty(sendRsltCd)) {
		                    sendRsltCd = "F"; /* 발송결과코드 (S(Success)/F(Fail)) */
		                } else {
		                    sendRsltCd = "S"; /* 발송결과코드 (S(Success)/F(Fail)) */
		                }
		            }
		
		            sendHistInsert.setSendRsltCd(sendRsltCd); /* 발송결과코드 (S(Success)/F(Fail)) */
		            
		            //메일 이력 저장
		            mapper.cmnSendHistInsert(sendHistInsert);
        	}
        }
    	
    	return true;
    }

    public String[] siteAuthList(String userSeq) throws Exception {
        String[] authSiteIds = null;
        String adminChk = mapper.adminChk(userSeq);
        if ("Y".equals(adminChk)) {
            authSiteIds = mapper.siteAuthAdminList();
        } else {
            authSiteIds = mapper.siteAuthList(userSeq);
        }

        return authSiteIds;

    }

    public List<CommonPpVO> codePpList() throws Exception {

        List<CommonPpVO> codePpList = mapper.codePpList();

        return codePpList;
    }

    public boolean codePpInsert(@Valid CommonPpInsert commonPpInsert) throws Exception {
        mapper.codePpInsert(commonPpInsert);

        return true;
    }

    public boolean codePpUpdate(@Valid CommonPpUpdate commonPpUpdate) throws Exception {
        mapper.codePpUpdate(commonPpUpdate);

        return true;
    }

    public Map countryInfo() throws Exception {
        HashMap map = new HashMap();

        CommonCountryVO CommonCountryVO = mapper.country();
        List<CommonCityVO> cityList = mapper.cityList();

        map.put("countryInfo", CommonCountryVO);
        map.put("cityList", cityList);

        return map;
    }

    public boolean cityInsert(@Valid CommonCityInsert commonCityInsert) throws Exception {
        int cnt = mapper.cityChk(commonCityInsert.getCd());
        if (cnt == 0) {
            throw new CDuplicateException();
        }
        mapper.cityInsert(commonCityInsert);

        return true;
    }

    public boolean cityUpdate(@Valid CommonCityUpdate commonCityUpdate) throws Exception {
        mapper.cityUpdate(commonCityUpdate);

        return true;
    }

    public List<CmnMsgVO> fileInfo(@Valid String fileId) throws Exception {

        List<CmnMsgVO> fileInfo = mapper.fileInfo(fileId);

        return fileInfo;
    }

    public boolean langInsert(@Valid LangInsert langInsert) throws Exception {
        String userId = jwtTokenProvider.resolveTokenUser();
        langInsert.setLastChngUseq(userId);
        if (langInsert.getNameAu() != null && !"".equals(langInsert.getNameAu())) {
            langInsert.setLangCd("AU");
            langInsert.setMenuName(langInsert.getNameAu());
        } else {
            langInsert.setLangCd("AU");
            langInsert.setMenuName("");
        }
        mapper.langInsert(langInsert);
        if (langInsert.getNameDe() != null && !"".equals(langInsert.getNameDe())) {
            langInsert.setLangCd("DE");
            langInsert.setMenuName(langInsert.getNameDe());
        } else {
            langInsert.setLangCd("DE");
            langInsert.setMenuName("");
        }
        mapper.langInsert(langInsert);
        if (langInsert.getNameEs() != null && !"".equals(langInsert.getNameEs())) {
            langInsert.setLangCd("ES");
            langInsert.setMenuName(langInsert.getNameEs());
        } else {
            langInsert.setLangCd("ES");
            langInsert.setMenuName("");
        }
        mapper.langInsert(langInsert);
        if (langInsert.getNameGb() != null && !"".equals(langInsert.getNameGb())) {
            langInsert.setLangCd("GB");
            langInsert.setMenuName(langInsert.getNameGb());
        } else {
            langInsert.setLangCd("GB");
            langInsert.setMenuName("");
        }
        mapper.langInsert(langInsert);
        if (langInsert.getNameJa() != null && !"".equals(langInsert.getNameJa())) {
            langInsert.setLangCd("JP");
            langInsert.setMenuName(langInsert.getNameJa());
        } else {
            langInsert.setLangCd("JP");
            langInsert.setMenuName("");
        }
        mapper.langInsert(langInsert);
        if (langInsert.getNameKo() != null && !"".equals(langInsert.getNameKo())) {
            langInsert.setLangCd("KR");
            langInsert.setMenuName(langInsert.getNameKo());
        } else {
            langInsert.setLangCd("KR");
            langInsert.setMenuName("");
        }
        mapper.langInsert(langInsert);
        if (langInsert.getNameMx() != null && !"".equals(langInsert.getNameMx())) {
            langInsert.setLangCd("MX");
            langInsert.setMenuName(langInsert.getNameMx());
        } else {
            langInsert.setLangCd("MX");
            langInsert.setMenuName("");
        }
        mapper.langInsert(langInsert);
        if (langInsert.getNameMy() != null && !"".equals(langInsert.getNameMy())) {
            langInsert.setLangCd("MY");
            langInsert.setMenuName(langInsert.getNameMy());
        } else {
            langInsert.setLangCd("MY");
            langInsert.setMenuName("");
        }
        mapper.langInsert(langInsert);
        if (langInsert.getNamePt() != null && !"".equals(langInsert.getNamePt())) {
            langInsert.setLangCd("PT");
            langInsert.setMenuName(langInsert.getNamePt());
        } else {
            langInsert.setLangCd("PT");
            langInsert.setMenuName("");
        }
        mapper.langInsert(langInsert);

        if (langInsert.getNameEn() != null && !"".equals(langInsert.getNameEn())) {
            langInsert.setLangCd("US");
            langInsert.setMenuName(langInsert.getNameEn());
        } else {
            langInsert.setLangCd("US");
            langInsert.setMenuName("");
        }
        mapper.langInsert(langInsert);
        if (langInsert.getNameVi() != null && !"".equals(langInsert.getNameVi())) {
            langInsert.setLangCd("VN");
            langInsert.setMenuName(langInsert.getNameVi());
        } else {
            langInsert.setLangCd("VN");
            langInsert.setMenuName("");
        }
        mapper.langInsert(langInsert);

        return true;
    }

    public boolean langUpdate(@Valid LangUpdate langUpdate) throws Exception {

        if (langUpdate.getNameAu() != null) {
            langUpdate.setLangCd("AU");
            langUpdate.setMenuName(langUpdate.getNameAu());
            mapper.langUpdate(langUpdate);
        }

        if (langUpdate.getNameDe() != null) {
            langUpdate.setLangCd("DE");
            langUpdate.setMenuName(langUpdate.getNameDe());
            mapper.langUpdate(langUpdate);
        }

        if (langUpdate.getNameEs() != null) {
            langUpdate.setLangCd("ES");
            langUpdate.setMenuName(langUpdate.getNameEs());
            mapper.langUpdate(langUpdate);
        }

        if (langUpdate.getNameGb() != null) {
            langUpdate.setLangCd("GB");
            langUpdate.setMenuName(langUpdate.getNameGb());
            mapper.langUpdate(langUpdate);
        }

        if (langUpdate.getNameJa() != null) {
            langUpdate.setLangCd("JP");
            langUpdate.setMenuName(langUpdate.getNameJa());
            mapper.langUpdate(langUpdate);
        }

        if (langUpdate.getNameKo() != null) {
            langUpdate.setLangCd("KR");
            langUpdate.setMenuName(langUpdate.getNameKo());
            mapper.langUpdate(langUpdate);
        }

        if (langUpdate.getNameMx() != null) {
            langUpdate.setLangCd("MX");
            langUpdate.setMenuName(langUpdate.getNameMx());
            mapper.langUpdate(langUpdate);
        }

        if (langUpdate.getNameMy() != null) {
            langUpdate.setLangCd("MY");
            langUpdate.setMenuName(langUpdate.getNameMy());
            mapper.langUpdate(langUpdate);
        }

        if (langUpdate.getNamePt() != null) {
            langUpdate.setLangCd("PT");
            langUpdate.setMenuName(langUpdate.getNamePt());
            mapper.langUpdate(langUpdate);
        }

        if (langUpdate.getNameEn() != null) {
            langUpdate.setLangCd("US");
            langUpdate.setMenuName(langUpdate.getNameEn());
            mapper.langUpdate(langUpdate);
        }

        if (langUpdate.getNameVi() != null) {
            langUpdate.setLangCd("VN");
            langUpdate.setMenuName(langUpdate.getNameVi());
            mapper.langUpdate(langUpdate);
        }

        return true;
    }

    public List<LangVO> langList() throws Exception {

        List<LangVO> langList = mapper.langList();

        return langList;
    }

    public Map<String, Object> langListExcel() throws Exception {

        List<LangVO> langList = mapper.langList();
        if (langList.size() == 0) {
            throw new CResourceNotExistException();
        }

        List<List<String>> bodyList = new ArrayList<List<String>>();

        for (int i = 0; i < langList.size(); i++) {
            List<String> body = new ArrayList<String>();
            body.add(langList.get(i).getMenuId());
            body.add(langList.get(i).getNameKo());
            body.add(langList.get(i).getNameEn());
            body.add(langList.get(i).getNameJa());
            body.add(langList.get(i).getNameEs());
            body.add(langList.get(i).getNameVi());
            body.add(langList.get(i).getNameDe());
            bodyList.add(body);

        }

        Map<String, Object> map = new HashMap<>();
        map.put(ExcelConstant.FILE_NAME, "lang_excel");
        map.put(ExcelConstant.HEAD, Arrays.asList("Code", "한국어", "영어", "일어", "스페인어", "베트남어", "독일어"));
        map.put(ExcelConstant.BODY, bodyList);
        return map;

    }

    public boolean newPassword(@Valid CmnPswdUpdate cmnPswdUpdate) throws Exception {

        if (!StringUtils.isEmpty(cmnPswdUpdate.getNewPswd())) {
            String enNewPswd = passwordEncoder.encode(cmnPswdUpdate.getNewPswd());
            cmnPswdUpdate.setPswd(enNewPswd);
        }

        mapper.newPassword(cmnPswdUpdate);
        return true;
    }

    public List<WoNoticeVO> noticeList() throws Exception {

        List<WoNoticeVO> notice = mapper.woNotice();

        return notice;
    }

    public List<SearchSite.Res> searchSiteList(SearchSite.SearchDTO searchDTO) throws Exception {

        List<SearchSite.Res> result = mapper.searchSiteList(searchDTO);

        return result;
    }

    public String convertLastMinute(@Valid String timeZone) throws Exception {
        ZonedDateTime nowDate = ZonedDateTime.now(ZoneId.of(timeZone));
        int minute = nowDate.getMinute();
        int oneMinute = minute % 10;
        int tenMinute = minute / 10;
        int convMinute = 0;
        if (oneMinute >= 0 && oneMinute < 5) {
            convMinute = (tenMinute * 10) + 0;
        } else {
            convMinute = (tenMinute * 10) + 5;
        }
        String setMinute = Integer.toString(convMinute);
        if (convMinute < 10) {
            setMinute = "0" + setMinute;
        }

        String localDate = nowDate.format(DateTimeFormatter.ofPattern("yyyyMMddHH" + setMinute + "00"));

        return localDate;
    }

    public HashMap<String, String> calPlantPower(@Valid List<KpiPowersVO> powerList, @Valid String rescGubn)
            throws Exception {
        HashMap map = new HashMap();
        double ivtAc = 0;
        double ivtDc = 0;
        for (int j = 0; j < powerList.size(); j++) {
            String pntAddr = powerList.get(j).getPntAddr();
            double accTotAmt = 0;
            String amount = "0.00";
            String accAmount = "0.00";
            if (!"".equals(powerList.get(j).getTotalAmt()) && powerList.get(j).getTotalAmt() != null) {
                amount = convertWToKw(powerList.get(j).getTotalAmt(), true);
            }
            if (!"".equals(powerList.get(j).getAccAmount()) && powerList.get(j).getAccAmount() != null) {
                accAmount = convertWToKw(powerList.get(j).getAccAmount(), true);
            }
            if (!"".equals(powerList.get(j).getAccTotalAmt()) && powerList.get(j).getAccTotalAmt() != null) {
                accTotAmt = Math.round(Double.parseDouble(powerList.get(j).getAccTotalAmt()) / 1000 * 100d) / 100d;
            }

            if ("A".equals(rescGubn)) { // PV
                if ("2".equals(pntAddr)) {
                    map.put("production", amount);
                } else if ("24".equals(pntAddr)) {
                    ivtAc = accTotAmt;
                    map.put("ivtAc", accAmount); // 유지보수 tab > 전력흐름도에서 사용
                } else if ("14".equals(pntAddr)) {
                    ivtDc = accTotAmt;
                    map.put("ivtDc", accAmount); // 유지보수 tab > 전력흐름도에서 사용
                } else if ("1".equals(pntAddr)) {
                    map.put("energyYield", accAmount);
                }
            } else if ("B".equals(rescGubn)) { // Ess
                if ("13134".equals(pntAddr)) {
                    map.put("production", amount);
                } else if ("13011".equals(pntAddr)) {
                    ivtAc = accTotAmt;
                    map.put("ivtAc", accAmount);
                } else if ("13003".equals(pntAddr)) {
                    ivtDc = accTotAmt;
                    map.put("ivtDc", accAmount);
                } else if ("13116".equals(pntAddr)) {
                    map.put("consumption", amount);
                } else if ("13112".equals(pntAddr)) {
                    map.put("energyYield", accAmount);
                }
            }
        }
        if (ivtAc > 0 && ivtDc > 0) {
            double ivt = Math.round(((ivtAc / ivtDc * 100) * 100d)) / 100d;
            map.put("ivtEfficiency", Double.toString(ivt));
        }

        return map;
    }

    public String convertWToKw(@Valid String amount, @Valid Boolean isFormat) throws Exception {
        if ("".equals(amount) || amount == null) {
            return "0";
        }
        double totalAmt = Double.parseDouble(amount);
        double cTotalAmt = Math.round((totalAmt / 1000 * 100d)) / 100d;
        // String convAmount = Double.toString(cTotalAmt);

        if (isFormat) {
            DecimalFormat formatter = new DecimalFormat("###,###.##");
            return formatter.format(cTotalAmt);
        } else {
            return Double.toString(cTotalAmt);
        }
    }

    public String convertWToKwLongDec(@Valid String amount, @Valid Boolean isFormat) throws Exception {
        if ("".equals(amount) || amount == null) {
            return "0";
        }
        double totalAmt = Double.parseDouble(amount);
        double cTotalAmt = (totalAmt / 1000d);
        // String convAmount = Double.toString(cTotalAmt);

        if (isFormat) {
            DecimalFormat formatter = new DecimalFormat("###,###.###");
            return formatter.format(cTotalAmt);
        } else {
            return Double.toString(cTotalAmt);
        }
    }
  
    public Integer insertSiteFile(@Valid String siteId, @Valid String[] fileList, @Valid String srcGubn,
            @Valid String userSeq, @Valid List<SiteFileVO> siteFiles) throws Exception {
        int fileCnt = 0;
        for (String file : fileList) {
            boolean isOverlay = false;
            if (!siteFiles.isEmpty()) {
                for (int i = 0; i < siteFiles.size(); i++) {
                    if (file.equals(siteFiles.get(i).getFileId())) {
                        isOverlay = true;
                    }
                }
            }

            if (!isOverlay) {
                SiteFileInsert siteFileInsert = new SiteFileInsert();
                siteFileInsert.setSiteId(siteId);
                siteFileInsert.setFileId(file);
                siteFileInsert.setFileSrcGubn(srcGubn); // 임시코드
                siteFileInsert.setLastChngUseq(userSeq);

                fileCnt += psMapper.siteFileInsert(siteFileInsert);
            }
        }

        return fileCnt;
    }

    public String convertNullValue(@Valid String amount) throws Exception {
        if (!"".equals(amount) && amount != null) {
            DecimalFormat formatter = new DecimalFormat("###,###.##");
            return formatter.format(Double.parseDouble(amount));
        }
        return "0";
    }

    public boolean checkPrjSiteProcess(@Valid String siteId, @Valid String process) throws Exception {
        String lastChngUseq = jwtTokenProvider.resolveTokenUser();
        PrjSiteVO prjProcess = new PrjSiteVO();
        prjProcess.setSiteId(siteId);
        prjProcess.setLastChngUseq(lastChngUseq);

        PrjSiteVO prjSiteVO = psMapper.getPrjProcess(prjProcess);
        String oldProcess = prjSiteVO.getProcess();

        prjProcess.setProcess(process);

        if ("".equals(oldProcess) || oldProcess == null) {
            int prjUpdate = psMapper.prjProcessUpdate(prjProcess);
            return true;
        }

        if (oldProcess.equals(process)) {
            return false;
        }

        switch (process) {
            case "SP002":
                if (!"SP001".equals(oldProcess)) {
                    return false;
                }
                break;
            case "SP003":
                if (!"SP001".equals(oldProcess) && !"SP002".equals(oldProcess)) {
                    return false;
                }
            case "SP004":
                if (!"SP001".equals(oldProcess) && !"SP002".equals(oldProcess) && !"SP003".equals(oldProcess)) {
                    return false;
                }
                break;
            case "SP005":
                if (!"SP001".equals(oldProcess) && !"SP002".equals(oldProcess) && !"SP003".equals(oldProcess)
                        && !"SP004".equals(oldProcess)) {
                    return false;
                }
                break;
            case "SP006":
                if ("SP008".equals(oldProcess)) {
                    return false;
                }
                break;
            case "SP007":
                if (!"SP001".equals(oldProcess) && !"SP002".equals(oldProcess) && !"SP003".equals(oldProcess)
                        && !"SP004".equals(oldProcess) && !"SP005".equals(oldProcess) && !"SP006".equals(oldProcess)) {
                    return false;
                }
                break;
            case "SP008":
                if (!"SP001".equals(oldProcess) && !"SP002".equals(oldProcess) && !"SP003".equals(oldProcess)
                        && !"SP004".equals(oldProcess) && !"SP005".equals(oldProcess) && !"SP006".equals(oldProcess)
                        && !"SP007".equals(oldProcess)) {
                    return false;
                }
                break;
            default:
                return false;
        }

        int prjUpdate = psMapper.prjProcessUpdate(prjProcess);

        return true;
    }

    public boolean prjSiteAccessUpdate(@Valid String siteId, @Valid String newUserSeq, @Valid String oldUserSeq)
            throws Exception {

        if (newUserSeq.equals(oldUserSeq)) {
            return true;
        }

        if (!"".equals(oldUserSeq) && oldUserSeq != null) {
            String[] siteIds = mapper.siteAuthList(oldUserSeq);

            boolean isDelete = false;
            for (String site : siteIds) {
                if (siteId.equals(site)) {
                    isDelete = true;
                }
            }

            if (isDelete) {
                CmnUserVO userVo1 = new CmnUserVO();
                userVo1.setUserSeq(oldUserSeq);

                List<CmnUserVO> oldUser = cuMapper.userList(userVo1);
                if (oldUser != null) {
                    CmnInqRoleVO cmnInqRoleVO1 = new CmnInqRoleVO();
                    cmnInqRoleVO1.setSiteId(siteId);
                    cmnInqRoleVO1.setInqGrpId(oldUser.get(0).getInqGrpId());
                    ciMapper.inrlSiteDelete(cmnInqRoleVO1);
                }
            }
        }

        CmnUserVO userVo2 = new CmnUserVO();
        userVo2.setUserSeq(newUserSeq);
        List<CmnUserVO> newUser = cuMapper.userList(userVo2);
        if (newUser != null) {
            CmnInqRoleVO cmnInqRoleVO3 = new CmnInqRoleVO();
            cmnInqRoleVO3.setInqGrpId(newUser.get(0).getInqGrpId());

            List<CmnInqRoleVO> ingRole = ciMapper.inrlSiteList(cmnInqRoleVO3);
            boolean isExist = false;
            if (ingRole.size() > 0) {
                for (int i = 0; i < ingRole.size(); i++) {
                    if (siteId.equals(ingRole.get(i).getSiteId())) {
                        isExist = true;
                    }
                }
            }

            if (isExist) {
                return true;
            }

            CmnInrlSiteInsert cmnInrlSiteInsert = new CmnInrlSiteInsert();
            cmnInrlSiteInsert.setLastChngUseq(newUserSeq);
            cmnInrlSiteInsert.setInqGrpId(newUser.get(0).getInqGrpId());
            cmnInrlSiteInsert.setSiteId(siteId);
            ciMapper.inrlSiteInsert(cmnInrlSiteInsert);
        }
        return true;
    }

    public boolean isMobile(HttpServletRequest request) {

        String userAgent = request.getHeader("User-Agent");
        String httpAccept = request.getHeader("Accept");

        UAgentInfo detector = new UAgentInfo(userAgent, httpAccept);

        return detector.detectMobileQuick();
    }

    public List<EssControlVO> essControlList(String siteId) throws Exception {

        List<EssControlVO> essControl = mapper.essControlList(siteId);

        return essControl;
    }

    public Map essControlHistoryList(@Valid PageCountVO pageCountVO) throws Exception {

        HashMap map = new HashMap();

        Integer pagePer = 10;
        Integer start = (pageCountVO.getPage() - 1) * pagePer;
        pageCountVO.setPageStart(start);
        pageCountVO.setPagePer(pagePer);

        List<EssControlVO> essControlHistoryList = mapper.essControlHistoryList(pageCountVO);
        PageCountVO pageCnt = mapper.essControlHistoryCnt(pageCountVO);
        pageCnt.setPage(pageCountVO.getPage());

        map.put("essControlHistoryList", essControlHistoryList);
        map.put("essCnt", pageCnt);

        return map;
    }

    public boolean essControlInsert(@Valid EssControlVO essControlVO) throws Exception {
        mapper.essControlInsert(essControlVO);

        return true;
    }

    public boolean essControlUpdate(@Valid EssControlVO essControlVO) throws Exception {
        mapper.essControlUpdate(essControlVO);

        return true;
    }

}
