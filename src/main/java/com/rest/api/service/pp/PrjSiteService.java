package com.rest.api.service.pp;

import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.config.constant.ExcelConstant;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.common.CommonVO;
import com.rest.api.model.mm.CmnInqRoleVO;
import com.rest.api.model.mm.CmnUserInsert;
import com.rest.api.model.mm.CmnUserVO;
import com.rest.api.model.pp.*;
import com.rest.api.model.security.SecurityVO;
import com.rest.api.model.so.RscGrpUserInsert;
import com.rest.api.service.common.CommonMapper;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.mm.CmnInqMapper;
import com.rest.api.service.mm.CmnUserMapper;
import com.rest.api.service.security.SecurityMapper;
import com.rest.api.service.so.RscGrpMapper;
import com.rest.api.util.DateUtil;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;
import org.springframework.util.ObjectUtils;
import org.springframework.web.multipart.MultipartFile;
import org.thymeleaf.util.StringUtils;

import javax.validation.Valid;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.io.UnsupportedEncodingException;
import java.net.HttpURLConnection;
import java.net.URL;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.*;

//자체 로그 찍기 import
import org.apache.logging.log4j.Logger;
import org.apache.logging.log4j.LogManager;
import org.apache.commons.lang.builder.ToStringBuilder;

@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class PrjSiteService {

    @Autowired
    private PrjSiteMapper mapper;

    @Autowired
    private CmnUserMapper cmnUserMapper;

    @Autowired
    private CommonMapper commonmapper;
    @Autowired
    private CmnInqMapper cmnInqMapper;

    @Autowired
    private CommonService commonService;

    @Autowired
    private SecurityMapper securityMapper;

    @Autowired
    private RscGrpMapper rscGrpMapper;

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    private final PasswordEncoder passwordEncoder;

    public Map prjSite(@Valid PrjSiteVO prjSiteVO) throws Exception {

        HashMap map = new HashMap();

        String[] sites = jwtTokenProvider.getSiteAuth();
        String userSeq = jwtTokenProvider.resolveTokenUser();
        if (sites.length > 0) {
            prjSiteVO.setSiteIds(sites);
        }

        prjSiteVO.setUserSeq(userSeq);

        Integer pagePer = 10;
        Integer start = (prjSiteVO.getPage() - 1) * pagePer;
        prjSiteVO.setPageStart(start);
        prjSiteVO.setPagePer(pagePer);

        List<PrjSitesVO> prjSiteList = mapper.prjSiteList(prjSiteVO);

         //VO 로그 찍기(by 구덕회)
        Logger logger = LogManager.getLogger(getClass());
        logger.info("-----------------------------------------------------------------------");
        String tt = ToStringBuilder.reflectionToString(prjSiteVO);
        logger.info(tt);
        
        List<PrjSiteCntVO> prjSiteCnt = mapper.prjSiteCnt(prjSiteVO);
        PrjSiteCntVO prjSitePage = mapper.prjSitePageCnt(prjSiteVO);
        prjSitePage.setPage(prjSiteVO.getPage());

        map.put("prjSiteCnt", prjSiteCnt);
        map.put("prjSitePage", prjSitePage);
        map.put("prjSiteList", prjSiteList);

        CommonVO commonVO = new CommonVO();
        String[] grpCds = { "CDK-00005" };
        commonVO.setGrpCds(grpCds);
        List<CommonVO> codeList = commonmapper.codeList(commonVO);
        map.put("codeData", codeList);

        return map;
    }

    public Map contractPlan(@Valid ContractPlanVO contractPlanVO) throws Exception {
        HashMap map = new HashMap();

        CommonVO commonVO = new CommonVO();
        String[] grpCds = { "CDK-00011", "CDK-00006", "CDK-00007", "CDK-00008", "CDK-00014", "CDK-00015" };
        commonVO.setGrpCds(grpCds);
        List<CommonVO> codeList = commonmapper.codeList(commonVO);
        map.put("codeData", codeList);

        CmnUserVO cmnUserVO = new CmnUserVO();
        String[] userLvCdList = { "ACN003", "ACN004" }; // O&M 유저, installer
        cmnUserVO.setUserLvlCdList(userLvCdList);
        List<CmnUserVO> userList = cmnUserMapper.userList(cmnUserVO);
        map.put("InstallerUserList", userList);

        if (contractPlanVO.getSiteId() == null) {
            map.put("mainData", "");
            map.put("contractFileListData", "");
            map.put("planFileListData", "");

        } else {
            List<ContractPlanVO> contractPlanList = mapper.contractPlan(contractPlanVO);
            if (contractPlanList.size() > 0) {
                map.put("mainData", contractPlanList.get(0));
            } else {
                map.put("mainData", null);
            }

            ArrayList<String> fileSrcGubnList = new ArrayList<String>();
            fileSrcGubnList.add("1");
            fileSrcGubnList.add("2");

            for (String fileSrcGubn : fileSrcGubnList) {
                SiteFileVO siteFileVO = new SiteFileVO();
                siteFileVO.setSiteId(contractPlanVO.getSiteId());
                siteFileVO.setFileSrcGubn(fileSrcGubn);
                List<SiteFileVO> fileList = mapper.siteFileList(siteFileVO);

                if ("1".equals(fileSrcGubn)) {
                    map.put("contractFileListData", fileList);
                } else if ("2".equals(fileSrcGubn)) {
                    map.put("planFileListData", fileList);
                }
            }

        }

        return map;
    }

    public Map<String, Object> prjSiteExcel(@Valid PrjSiteVO prjSiteVO) throws Exception {

        SecurityVO securityVO = securityMapper.userInfo(prjSiteVO.getUser());
        String[] siteIds = commonService.siteAuthList(securityVO.getUserSeq());
        if (siteIds.length > 0) {
            prjSiteVO.setSiteIds(siteIds);
        }

        List<PrjSitesVO> prjSiteList = mapper.prjSiteListExcel(prjSiteVO);
        if (prjSiteList.size() == 0) {
            throw new CResourceNotExistException();
        }

        List<List<String>> bodyList = new ArrayList<List<String>>();

        for (int i = 0; i < prjSiteList.size(); i++) {
            List<String> body = new ArrayList<String>();
            body.add(prjSiteList.get(i).getSiteId());
            body.add(prjSiteList.get(i).getUserName());
            body.add(prjSiteList.get(i).getRegnGubn());
            body.add(prjSiteList.get(i).getRescGubn());
            String pv = prjSiteList.get(i).getPvInstCapa();
            if (pv == null) {
                pv = "";
            }
            String ess = prjSiteList.get(i).getEssInstCapa();
            if (ess == null) {
                ess = "";
            }
            body.add("PV: " + pv + " ESS: " + ess);
            body.add(prjSiteList.get(i).getGoalYnNm());
            body.add(prjSiteList.get(i).getInstPsnName());
            body.add(prjSiteList.get(i).getCnrtStrtDt());
            body.add(prjSiteList.get(i).getWkplCmplDt());
            body.add(prjSiteList.get(i).getExpnDt());
            body.add(prjSiteList.get(i).getApplCmdt());
            body.add(prjSiteList.get(i).getApprCmdt());
            body.add(prjSiteList.get(i).getMpCmdt());
            body.add(prjSiteList.get(i).getInsCmdt());
            body.add(prjSiteList.get(i).getChkCmplDt());
            body.add(prjSiteList.get(i).getMngStrtDt());
            body.add(prjSiteList.get(i).getTermDt());
            bodyList.add(body);

        }

        Map<String, Object> map = new HashMap<>();
        map.put(ExcelConstant.FILE_NAME, "project_site_excel");
        map.put(ExcelConstant.HEAD,
                Arrays.asList("Site ID", "User Name", "Region", "Type", "Capacity", "KPI", "Installer",
                        "Contract Info.", "Planning", "Expense Approval", "Grid Application", "Grid Approval",
                        "Purchasing", "Installation", "Inspection", "Operation", "Termination"));
        map.put(ExcelConstant.BODY, bodyList);
        return map;

    }

    public List<ExpnVO> expnList(@Valid ExpnVO expnVO) throws Exception {

        List<ExpnVO> expnList = mapper.expnList(expnVO);
        if (expnList.size() == 0) {
            throw new CResourceNotExistException();
        }

        return expnList;
    }

    public Map gridList(@Valid SiteGridVO siteGridVO) throws Exception {
        HashMap map = new HashMap();

        CommonVO commonVO = new CommonVO();
        String[] grpCds = { "CDK-00016" };
        commonVO.setGrpCds(grpCds);
        List<CommonVO> codeList = commonmapper.codeList(commonVO);
        map.put("codeData", codeList);

        if (siteGridVO.getSiteId() != null) {
            List<SiteGridVO> gridList = mapper.gridList(siteGridVO);
            if (gridList.size() == 0) {
                throw new CResourceNotExistException();
            }
            map.put("mainData", gridList);

            ArrayList<String> fileSrcGubnList = new ArrayList<String>();
            fileSrcGubnList.add("3");
            fileSrcGubnList.add("4");
            fileSrcGubnList.add("5");
            fileSrcGubnList.add("6");

            for (String fileSrcGubn : fileSrcGubnList) {
                SiteFileVO siteFileVO = new SiteFileVO();
                siteFileVO.setSiteId(siteGridVO.getSiteId());
                siteFileVO.setFileSrcGubn(fileSrcGubn);
                List<SiteFileVO> fileList = mapper.siteFileList(siteFileVO);

                if ("3".equals(fileSrcGubn)) {
                    map.put("applFileListData", fileList);
                } else if ("4".equals(fileSrcGubn)) {
                    map.put("apprFileListData", fileList);
                } else if ("5".equals(fileSrcGubn)) {
                    map.put("mpFileListData", fileList);
                } else if ("6".equals(fileSrcGubn)) {
                    map.put("insFileListData", fileList);
                }
            }

        } else {
            map.put("mainData", "");
            map.put("applFileListData", "");
            map.put("apprFileListData", "");
            map.put("mpFileListData", "");
            map.put("insFileListData", "");
        }

        return map;
    }

    public Map contractPlanInsert(@Valid ContractPlanInsert contractPlanInsert) throws Exception {
        // 로직처리
        HashMap map = new HashMap();
        // 사이트별 사용자 등록
        if ("Y".equals(contractPlanInsert.getNewUserYn())) {
            // 사용자등록 사용자 시퀀스;;

            CmnUserInsert cmnUserInsert = new CmnUserInsert();
            cmnUserInsert.setEmail(contractPlanInsert.getEmail());
            cmnUserInsert.setUserName(contractPlanInsert.getUserName());
            cmnUserInsert.setTelNo(contractPlanInsert.getTelNo());
            cmnUserInsert.setUserLvlCd("ACN005");

            int cnt = cmnUserMapper.join(cmnUserInsert);
            if (cnt > 0) {
                CmnUserVO cmnUserVo = new CmnUserVO();
                cmnUserVo.setUserId(cmnUserInsert.getUserId());

                List<CmnUserVO> cmnUserList = cmnUserMapper.userList(cmnUserVo);

                if (cmnUserList.size() > 0) {
                    cmnUserInsert.setUserSeq(cmnUserList.get(0).getUserSeq());
                }

                String enPswd = passwordEncoder.encode(cmnUserInsert.getUserId() + "!");
                cmnUserInsert.setPswd(enPswd);
                cmnUserMapper.userPassSet(cmnUserInsert);

                contractPlanInsert.setUserSeq(cmnUserInsert.getUserSeq());

            }

        }

        String userSeq = contractPlanInsert.getUserSeq();
        // 계약정보 등록
        int cnt = mapper.contractInsert(contractPlanInsert);
        if (cnt == 0) {
            throw new Exception();
        }

        commonService.checkPrjSiteProcess(contractPlanInsert.getSiteId(), "SP001");

        List<String> dates = DateUtil.dates(contractPlanInsert.getCnrtStrtDt(), contractPlanInsert.getCnrtEndDt());
        RscGrpUserInsert rscGrpUserInsert = new RscGrpUserInsert();

        rscGrpUserInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());
        rscGrpUserInsert.setSiteId(contractPlanInsert.getSiteId());
        rscGrpUserInsert.setUserSeq(contractPlanInsert.getUserSeq());
        for (String date : dates) {
            rscGrpUserInsert.setCnrtStrtDt(date);
            rscGrpUserInsert.setCnrtEndDt(date);
            rscGrpMapper.rscGrpUserInsert(rscGrpUserInsert);
        }

        map.put("siteId", contractPlanInsert.getSiteId());

        // 사이트별 사용자 등록
        ContractPlanInsert siteUserInsert = new ContractPlanInsert();
        siteUserInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());
        siteUserInsert.setUserSeq(userSeq);
        siteUserInsert.setSiteId(contractPlanInsert.getSiteId());
        siteUserInsert.setSiteUlvlCd("ACN005");

        int prjSiteUserInsert = mapper.prjSiteUserInsert(siteUserInsert);
        if (prjSiteUserInsert == 0) {
            throw new Exception();
        }

        // 사이트 조회그룹 등록
        commonService.prjSiteAccessUpdate(contractPlanInsert.getSiteId(), contractPlanInsert.getInstPsnSeq(), "");

        // 사이트별 설치담당자 등록
        ContractPlanInsert instPsnInsert = new ContractPlanInsert();
        instPsnInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());
        instPsnInsert.setUserSeq(contractPlanInsert.getInstPsnSeq());
        instPsnInsert.setSiteId(contractPlanInsert.getSiteId());
        instPsnInsert.setSiteUlvlCd("ACN003");

        int instPsInsert = mapper.prjSiteUserInsert(instPsnInsert);
        if (instPsInsert == 0) {
            throw new Exception();
        }

        // 계약수립 등록
        int planInsert = mapper.planInsert(contractPlanInsert);
        if (planInsert == 0) {
            throw new Exception();
        }

        // 사이트 상태 정보 변경
        if (!"".equals(contractPlanInsert.getWkplCmplDt()) && contractPlanInsert.getWkplCmplDt() != null) {
            commonService.checkPrjSiteProcess(contractPlanInsert.getSiteId(), "SP002");
        }

        ArrayList<String> noteGubnCdList = new ArrayList<String>();
        noteGubnCdList.add("1");
        noteGubnCdList.add("2");
        noteGubnCdList.add("3");
        noteGubnCdList.add("4");
        noteGubnCdList.add("5");
        noteGubnCdList.add("6");
        noteGubnCdList.add("7");
        noteGubnCdList.add("8");
        noteGubnCdList.add("9");

        for (String noteGubn : noteGubnCdList) {

            NoteInsert noteInsert = new NoteInsert();
            noteInsert.setSiteId(contractPlanInsert.getSiteId());
            noteInsert.setNoteGubn(noteGubn); // 임시 코드
            if ("1".equals(noteGubn)) {
                noteInsert.setNote(contractPlanInsert.getContractNote());
            } else if ("2".equals(noteGubn)) {
                noteInsert.setNote(contractPlanInsert.getPlanNote());
            } else {
                noteInsert.setNote("");
            }

            noteInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());

            int contractNote = mapper.noteInsert(noteInsert);
            if (contractNote == 0) {
                throw new Exception();
            }
        }

        // GRID 신청
        SiteGridInsert applSiteGridInsert = new SiteGridInsert();
        applSiteGridInsert.setSiteId(contractPlanInsert.getSiteId());
        applSiteGridInsert.setWorkGubn("1"); // 임시 코드
        applSiteGridInsert.setWorkDudt(contractPlanInsert.getApplDudt());
        applSiteGridInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());

        int applGrid = mapper.siteGridInsert(applSiteGridInsert);
        if (applGrid == 0) {
            throw new Exception();
        }
        // GRID 승인
        SiteGridInsert apprSiteGridInsert = new SiteGridInsert();
        apprSiteGridInsert.setSiteId(contractPlanInsert.getSiteId());
        apprSiteGridInsert.setWorkGubn("2"); // 임시 코드
        apprSiteGridInsert.setWorkDudt(contractPlanInsert.getApprDudt());
        apprSiteGridInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());

        int apprGrid = mapper.siteGridInsert(apprSiteGridInsert);
        if (apprGrid == 0) {
            throw new Exception();
        }
        // 자재구매
        SiteGridInsert mpSiteGridInsert = new SiteGridInsert();
        mpSiteGridInsert.setSiteId(contractPlanInsert.getSiteId());
        mpSiteGridInsert.setWorkGubn("3"); // 임시 코드
        mpSiteGridInsert.setWorkDudt(contractPlanInsert.getMpDudt());
        mpSiteGridInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());

        int mpGrid = mapper.siteGridInsert(mpSiteGridInsert);
        if (mpGrid == 0) {
            throw new Exception();
        }

        // 설치
        SiteGridInsert insSiteGridInsert = new SiteGridInsert();
        insSiteGridInsert.setSiteId(contractPlanInsert.getSiteId());
        insSiteGridInsert.setWorkGubn("4"); // 임시 코드
        insSiteGridInsert.setWorkDudt(contractPlanInsert.getInsDudt());
        insSiteGridInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());

        int insGrid = mapper.siteGridInsert(insSiteGridInsert);
        if (insGrid == 0) {
            throw new Exception();
        }

        // 점검
        SiteInspInsert siteInspInsert = new SiteInspInsert();
        siteInspInsert.setSiteId(contractPlanInsert.getSiteId());
        siteInspInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());
        int inspCnt = mapper.siteInspInsert(siteInspInsert);
        if (inspCnt == 0) {
            throw new Exception();
        }

        List<SiteFileVO> fileIdCdFileList = new ArrayList<>();
        
        if (!ObjectUtils.isEmpty(contractPlanInsert.getFileIdCd1())) {
        	int saveFileCnt =  commonService.insertSiteFile(contractPlanInsert.getSiteId(), contractPlanInsert.getFileIdCd1(), "1",
                    contractPlanInsert.getLastChngUseq(), fileIdCdFileList);           
        	// 파일이 저장되는경우 위에 로직에서보면 같은파일을 저장하면 isOverlay => true가되서 파일저장안됨
	        // 즉 같은파일을 저장하는경우 saveFileCnt = 0 , 파일을 저장하거나 다른파일저장한경우에  saveFileCnt 0보다커짐. 
	        // 그러므로 그때 메일을 전송한다.
	        if(saveFileCnt > 0) {
	        	String userName = contractPlanInsert.getUserName();
	        	String tabTitleName = "Contract Info";
	        	commonService.emailUploadSendHistInsert(userName,tabTitleName,"notice012");
	       }  
        }

        if (!ObjectUtils.isEmpty(contractPlanInsert.getFileIdCd2())) {
           int saveFileCnt = commonService.insertSiteFile(contractPlanInsert.getSiteId(), contractPlanInsert.getFileIdCd2(), "2",
                    contractPlanInsert.getLastChngUseq(), fileIdCdFileList);
           
	        if(saveFileCnt > 0) {
	        	String userName = contractPlanInsert.getUserName();
	        	String tabTitleName = "Planning";
	        	commonService.emailUploadSendHistInsert(userName,tabTitleName,"notice012");
	       }     
        }

        commonService.smsSendHistInsert(contractPlanInsert.getSiteId(), "notice007", "", "");
        commonService.emailSendHistInsert(contractPlanInsert.getSiteId(), "", "notice007", "", "");
        
        
        

        return map;
    }

    public boolean contractPlanUpdate(@Valid ContractPlanUpdate contractPlanUpdate) throws Exception {
        // 로직처리

        // 사이트별사용자 수정
        // int prjSiteUserUpdate = mapper.prjSiteUserUpdate(contractPlanUpdate);
        // if(prjSiteUserUpdate == 0){
        // throw new Exception();
        // }

        PrjSiteUserVO prjSiteUserVO005 = new PrjSiteUserVO();
        prjSiteUserVO005.setSiteId(contractPlanUpdate.getSiteId());
        prjSiteUserVO005.setSiteUlvlCd("ACN005");
        List<PrjSiteUserVO> siteUser005 = mapper.siteUser(prjSiteUserVO005);

        if (siteUser005.size() > 0) {
            // 사이트별 사용자 수정
            ContractPlanUpdate siteUserUpdate = new ContractPlanUpdate();
            siteUserUpdate.setLastChngUseq(contractPlanUpdate.getLastChngUseq());
            siteUserUpdate.setUserSeq(contractPlanUpdate.getUserSeq());
            siteUserUpdate.setSiteId(contractPlanUpdate.getSiteId());
            siteUserUpdate.setSiteUlvlCd("ACN005");

            int prjSiteUserUpdate = mapper.prjSiteUserUpdate(siteUserUpdate);

        } else {
            // 사이트별 사용자 등록
            ContractPlanInsert siteUserInsert = new ContractPlanInsert();
            siteUserInsert.setLastChngUseq(contractPlanUpdate.getLastChngUseq());
            siteUserInsert.setUserSeq(contractPlanUpdate.getUserSeq());
            siteUserInsert.setSiteId(contractPlanUpdate.getSiteId());
            siteUserInsert.setSiteUlvlCd("ACN005");
            int prjSiteUserInsert = mapper.prjSiteUserInsert(siteUserInsert);
        }

        PrjSiteUserVO prjSiteUserVO003 = new PrjSiteUserVO();
        prjSiteUserVO003.setSiteId(contractPlanUpdate.getSiteId());
        prjSiteUserVO003.setSiteUlvlCd("ACN003");

        List<PrjSiteUserVO> siteUser003 = mapper.siteUser(prjSiteUserVO003);
        if (siteUser003.size() > 0) {
            // 사이트별 설치담당자 수정
            ContractPlanUpdate instPsnUpdate = new ContractPlanUpdate();
            instPsnUpdate.setLastChngUseq(contractPlanUpdate.getLastChngUseq());
            instPsnUpdate.setUserSeq(contractPlanUpdate.getInstPsnSeq());
            instPsnUpdate.setSiteId(contractPlanUpdate.getSiteId());
            instPsnUpdate.setSiteUlvlCd("ACN003");

            int instPsnUpdateCnt = mapper.prjSiteUserUpdate(instPsnUpdate);

            // 사이트 조회그룹 수정
            commonService.prjSiteAccessUpdate(contractPlanUpdate.getSiteId(), contractPlanUpdate.getInstPsnSeq(),
                    siteUser003.get(0).getUserSeq());

        } else {
            // 사이트별 설치담당자 등록
            ContractPlanInsert instPsnInsert = new ContractPlanInsert();
            instPsnInsert.setLastChngUseq(contractPlanUpdate.getLastChngUseq());
            instPsnInsert.setUserSeq(contractPlanUpdate.getInstPsnSeq());
            instPsnInsert.setSiteId(contractPlanUpdate.getSiteId());
            instPsnInsert.setSiteUlvlCd("ACN003");

            int instPsInsert = mapper.prjSiteUserInsert(instPsnInsert);
            // 사이트 조회그룹 등록
            commonService.prjSiteAccessUpdate(contractPlanUpdate.getSiteId(), contractPlanUpdate.getInstPsnSeq(), "");
        }

        // 계약정보 수정
        int contractUpdate = mapper.contractUpdate(contractPlanUpdate);

        // 계약수립 수정
        int planUpdate = mapper.planUpdate(contractPlanUpdate);

        // 사이트 상태 정보 변경
        if (!"".equals(contractPlanUpdate.getWkplCmplDt()) && contractPlanUpdate.getWkplCmplDt() != null) {
            commonService.checkPrjSiteProcess(contractPlanUpdate.getSiteId(), "SP002");
        }

        // 계약정보 특이사항
        NoteUpdate contractNoteUpdate = new NoteUpdate();
        contractNoteUpdate.setSiteId(contractPlanUpdate.getSiteId());
        contractNoteUpdate.setNoteGubn("1"); // 임시 코드
        contractNoteUpdate.setNote(contractPlanUpdate.getContractNote());
        contractNoteUpdate.setLastChngUseq(contractPlanUpdate.getLastChngUseq());

        int contractNote = mapper.noteUpdate(contractNoteUpdate);

        // 계약수립 특이사항
        NoteUpdate planNoteUpdate = new NoteUpdate();
        planNoteUpdate.setSiteId(contractPlanUpdate.getSiteId());
        planNoteUpdate.setNoteGubn("2"); // 임시 코드
        planNoteUpdate.setNote(contractPlanUpdate.getPlanNote());
        planNoteUpdate.setLastChngUseq(contractPlanUpdate.getLastChngUseq());

        int planNote = mapper.noteUpdate(planNoteUpdate);

        SiteFileVO fileIdCd1FileVO = new SiteFileVO();
        fileIdCd1FileVO.setSiteId(contractPlanUpdate.getSiteId());
        fileIdCd1FileVO.setFileSrcGubn("1");

        List<SiteFileVO> fileIdCd1FileList = mapper.siteFileList(fileIdCd1FileVO);
                
        
        if (!ObjectUtils.isEmpty(contractPlanUpdate.getFileIdCd1())) {
            int saveFileCnt = commonService.insertSiteFile(contractPlanUpdate.getSiteId(), contractPlanUpdate.getFileIdCd1(), "1",
                    contractPlanUpdate.getLastChngUseq(), fileIdCd1FileList);           
            
            if(saveFileCnt > 0) {
	        	String userName = contractPlanUpdate.getUserName();
	        	String tabTitleName = "Contract Info";
	        	commonService.emailUploadSendHistInsert(userName,tabTitleName,"notice012");
	       }  
        }

        SiteFileVO fileIdCd2FileVO = new SiteFileVO();
        fileIdCd2FileVO.setSiteId(contractPlanUpdate.getSiteId());
        fileIdCd2FileVO.setFileSrcGubn("2");
  
        List<SiteFileVO> fileIdCd2FileList = mapper.siteFileList(fileIdCd2FileVO);
        if (!ObjectUtils.isEmpty(contractPlanUpdate.getFileIdCd2())) {
	        int saveFileCnt  =   commonService.insertSiteFile(contractPlanUpdate.getSiteId(), contractPlanUpdate.getFileIdCd2(), "2",
	                    contractPlanUpdate.getLastChngUseq(), fileIdCd2FileList);
	        
		        if(saveFileCnt > 0) {
		        	String userName = contractPlanUpdate.getUserName();
		        	String tabTitleName = "Planning";
		        	commonService.emailUploadSendHistInsert(userName,tabTitleName,"notice012");
		       }  
        }

        ArrayList<String> workGubnList = new ArrayList<String>();
        workGubnList.add("1");
        workGubnList.add("2");
        workGubnList.add("3");
        workGubnList.add("4");
        for (String workGubn : workGubnList) {

            SiteGridTableUpdate siteGridTableUpdate = new SiteGridTableUpdate();
            siteGridTableUpdate.setSiteId(contractPlanUpdate.getSiteId());
            siteGridTableUpdate.setWorkGubn(workGubn); // 임시 코드
            if ("1".equals(workGubn)) {
                siteGridTableUpdate.setWorkDudt(contractPlanUpdate.getApplDudt());
            } else if ("2".equals(workGubn)) {
                siteGridTableUpdate.setWorkDudt(contractPlanUpdate.getApprDudt());
            } else if ("3".equals(workGubn)) {
                siteGridTableUpdate.setWorkDudt(contractPlanUpdate.getMpDudt());
            } else if ("4".equals(workGubn)) {
                siteGridTableUpdate.setWorkDudt(contractPlanUpdate.getInsDudt());
            }

            siteGridTableUpdate.setLastChngUseq(contractPlanUpdate.getLastChngUseq());

            int gridWorkDudtCnt = mapper.gridWorkDudtUpdate(siteGridTableUpdate);
        }           
        return true;
    }

    public boolean expnUpdate(@Valid ExpnUpdate expnUpdate) throws Exception {
        // 로직처리

        int cnt = mapper.expnUpdate(expnUpdate);
        if (cnt == 0) {
            throw new Exception();
        }

        // 사업비승인 특이사항
        NoteUpdate noteUpdate = new NoteUpdate();
        noteUpdate.setSiteId(expnUpdate.getSiteId());
        noteUpdate.setNoteGubn("3"); // 임시 코드
        noteUpdate.setNote(expnUpdate.getNote());
        noteUpdate.setLastChngUseq(expnUpdate.getLastChngUseq());

        int note = mapper.noteUpdate(noteUpdate);
        if (note == 0) {
            throw new Exception();
        }

        if (!"".equals(expnUpdate.getExpnDt()) && expnUpdate.getExpnDt() != null) {
            commonService.checkPrjSiteProcess(expnUpdate.getSiteId(), "SP003");
        }

        return true;
    }

    public boolean contractDelete(@Valid ContractPlanVO contractPlanVO) throws Exception {
        // 로직처리

        CmnInqRoleVO cmnInqRoleVO = new CmnInqRoleVO();
        cmnInqRoleVO.setSiteId(contractPlanVO.getSiteId());

        cmnInqMapper.siteDelinrlSiteDelete(cmnInqRoleVO);

        int cnt = mapper.contractDelete(contractPlanVO);

        return true;
    }

    public boolean gridUpdate(@Valid SiteGridUpdate siteGridUpdate) throws Exception {
        // 로직처리
        // 그리드신청 수정
        SiteGridTableUpdate applSiteGridUpdate = new SiteGridTableUpdate();
        applSiteGridUpdate.setSiteId(siteGridUpdate.getSiteId());
        applSiteGridUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());
        applSiteGridUpdate.setWorkGubn("1");
        applSiteGridUpdate.setWorkDudt(siteGridUpdate.getApplWorkDudt());
        applSiteGridUpdate.setWorkCmdt(siteGridUpdate.getApplWorkCmdt());
        applSiteGridUpdate.setAprvCmp(siteGridUpdate.getApplAprvCmp());

        int applCnt = mapper.siteGridUpdate(applSiteGridUpdate);
        if (applCnt == 0) {
            throw new Exception();
        }
        // 그리드승인 수정
        SiteGridTableUpdate apprSiteGridUpdate = new SiteGridTableUpdate();
        apprSiteGridUpdate.setSiteId(siteGridUpdate.getSiteId());
        apprSiteGridUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());
        apprSiteGridUpdate.setWorkGubn("2");
        apprSiteGridUpdate.setWorkDudt(siteGridUpdate.getApprWorkDudt());
        apprSiteGridUpdate.setWorkCmdt(siteGridUpdate.getApprWorkCmdt());
        apprSiteGridUpdate.setAprvCmp(siteGridUpdate.getApprAprvCmp());
        apprSiteGridUpdate.setAprvYn(siteGridUpdate.getApprAprvYn());
        apprSiteGridUpdate.setFailRsn(siteGridUpdate.getApprFailRsn());

        int apprCnt = mapper.siteGridUpdate(apprSiteGridUpdate);
        if (apprCnt == 0) {
            throw new Exception();
        }

        if (!"".equals(siteGridUpdate.getApprWorkCmdt()) && siteGridUpdate.getApprWorkCmdt() != null) {
            commonService.checkPrjSiteProcess(siteGridUpdate.getSiteId(), "SP004");
        }

        // 자재구매 수정
        SiteGridTableUpdate mpSiteGridUpdate = new SiteGridTableUpdate();
        mpSiteGridUpdate.setSiteId(siteGridUpdate.getSiteId());
        mpSiteGridUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());
        mpSiteGridUpdate.setWorkGubn("3");
        mpSiteGridUpdate.setWorkDudt(siteGridUpdate.getMpWorkDudt());
        mpSiteGridUpdate.setWorkCmdt(siteGridUpdate.getMpWorkCmdt());

        int mpCnt = mapper.siteGridUpdate(mpSiteGridUpdate);
        if (mpCnt == 0) {
            throw new Exception();
        }

        if (!"".equals(siteGridUpdate.getMpWorkCmdt()) && siteGridUpdate.getMpWorkCmdt() != null) {
            commonService.checkPrjSiteProcess(siteGridUpdate.getSiteId(), "SP005");
        }

        // 설치 수정
        SiteGridTableUpdate insSiteGridUpdate = new SiteGridTableUpdate();
        insSiteGridUpdate.setSiteId(siteGridUpdate.getSiteId());
        insSiteGridUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());
        insSiteGridUpdate.setWorkGubn("4");
        insSiteGridUpdate.setWorkDudt(siteGridUpdate.getInsWorkDudt());
        insSiteGridUpdate.setWorkCmdt(siteGridUpdate.getInsWorkCmdt());

        int insCnt = mapper.siteGridUpdate(insSiteGridUpdate);
        if (insCnt == 0) {
            throw new Exception();
        }

        if (!"".equals(siteGridUpdate.getInsWorkCmdt()) && siteGridUpdate.getInsWorkCmdt() != null) {
            commonService.checkPrjSiteProcess(siteGridUpdate.getSiteId(), "SP006");
        }

        // 그리드신청 특이사항
        NoteUpdate applNoteUpdate = new NoteUpdate();
        applNoteUpdate.setSiteId(siteGridUpdate.getSiteId());
        applNoteUpdate.setNoteGubn("4"); // 임시 코드
        applNoteUpdate.setNote(siteGridUpdate.getApplNote());
        applNoteUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());

        int applNote = mapper.noteUpdate(applNoteUpdate);
        if (applNote == 0) {
            throw new Exception();
        }

        // 그리드승인 특이사항
        NoteUpdate apprNoteUpdate = new NoteUpdate();
        apprNoteUpdate.setSiteId(siteGridUpdate.getSiteId());
        apprNoteUpdate.setNoteGubn("5"); // 임시 코드
        apprNoteUpdate.setNote(siteGridUpdate.getApprNote());
        apprNoteUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());

        int apprNote = mapper.noteUpdate(apprNoteUpdate);
        if (apprNote == 0) {
            throw new Exception();
        }

        // 자재구매 특이사항
        NoteUpdate mpNoteUpdate = new NoteUpdate();
        mpNoteUpdate.setSiteId(siteGridUpdate.getSiteId());
        mpNoteUpdate.setNoteGubn("6"); // 임시 코드
        mpNoteUpdate.setNote(siteGridUpdate.getMpNote());
        mpNoteUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());

        int mpNote = mapper.noteUpdate(mpNoteUpdate);
        if (mpNote == 0) {
            throw new Exception();
        }

        // 설치 특이사항
        NoteUpdate insNoteUpdate = new NoteUpdate();
        insNoteUpdate.setSiteId(siteGridUpdate.getSiteId());
        insNoteUpdate.setNoteGubn("7"); // 임시 코드
        insNoteUpdate.setNote(siteGridUpdate.getInsNote());
        insNoteUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());

        int insNote = mapper.noteUpdate(insNoteUpdate);
        if (insNote == 0) {
            throw new Exception();
        }
        // 신청
        SiteFileVO fileIdCd3FileVO = new SiteFileVO();
        fileIdCd3FileVO.setSiteId(siteGridUpdate.getSiteId());
        fileIdCd3FileVO.setFileSrcGubn("3");
        List<SiteFileVO> fileIdCd3FileList = mapper.siteFileList(fileIdCd3FileVO);
        if (!ObjectUtils.isEmpty(siteGridUpdate.getFileIdCd3())) {
        	int saveFileCnt =  commonService.insertSiteFile(siteGridUpdate.getSiteId(), siteGridUpdate.getFileIdCd3(), "3",
                    siteGridUpdate.getLastChngUseq(), fileIdCd3FileList);
        	
        	if(saveFileCnt > 0) {
	        	String userName = siteGridUpdate.getUserName();
	        	String tabTitleName = "Grid Application";
	        	commonService.emailUploadSendHistInsert(userName,tabTitleName,"notice012");
	       }  
        }

        // 승인
        SiteFileVO fileIdCd4FileVO = new SiteFileVO();
        fileIdCd4FileVO.setSiteId(siteGridUpdate.getSiteId());
        fileIdCd4FileVO.setFileSrcGubn("4");

        List<SiteFileVO> fileIdCd4FileList = mapper.siteFileList(fileIdCd4FileVO);
        if (!ObjectUtils.isEmpty(siteGridUpdate.getFileIdCd4())) {
        	int saveFileCnt =  commonService.insertSiteFile(siteGridUpdate.getSiteId(), siteGridUpdate.getFileIdCd4(), "4",
                    siteGridUpdate.getLastChngUseq(), fileIdCd4FileList);
        	
        	if(saveFileCnt > 0) {
	        	String userName = siteGridUpdate.getUserName();
	        	String tabTitleName = "Grid Approval"; 
	        	commonService.emailUploadSendHistInsert(userName,tabTitleName,"notice012");
        	}
        }
        // 자재구매
        SiteFileVO fileIdCd5FileVO = new SiteFileVO();
        fileIdCd5FileVO.setSiteId(siteGridUpdate.getSiteId());
        fileIdCd5FileVO.setFileSrcGubn("5");

        List<SiteFileVO> fileIdCd5FileList = mapper.siteFileList(fileIdCd5FileVO);
        if (!ObjectUtils.isEmpty(siteGridUpdate.getFileIdCd5())) {
        	int saveFileCnt = commonService.insertSiteFile(siteGridUpdate.getSiteId(), siteGridUpdate.getFileIdCd5(), "5",
                    siteGridUpdate.getLastChngUseq(), fileIdCd5FileList);
        	
        	if(saveFileCnt > 0) {
	        	String userName = siteGridUpdate.getUserName();
	        	String tabTitleName = "Purchasing";
	        	commonService.emailUploadSendHistInsert(userName,tabTitleName,"notice012");
	       }  
        }
        // 설치
        SiteFileVO fileIdCd6FileVO = new SiteFileVO();
        fileIdCd6FileVO.setSiteId(siteGridUpdate.getSiteId());
        fileIdCd6FileVO.setFileSrcGubn("6");

        List<SiteFileVO> fileIdCd6FileList = mapper.siteFileList(fileIdCd6FileVO);
        if (!ObjectUtils.isEmpty(siteGridUpdate.getFileIdCd6())) {
        	int saveFileCnt =  commonService.insertSiteFile(siteGridUpdate.getSiteId(), siteGridUpdate.getFileIdCd6(), "6",
                    siteGridUpdate.getLastChngUseq(), fileIdCd6FileList);
        	
        	if(saveFileCnt > 0) {
	        	String userName = siteGridUpdate.getUserName();
	        	String tabTitleName = "Installation";
	        	commonService.emailUploadSendHistInsert(userName,tabTitleName,"notice012");
	       }  
        }

        return true;
    }

    public boolean termUpdate(@Valid TermUpdate termUpdate) throws Exception {
        // 로직처리

        int cnt = mapper.termUpdate(termUpdate);
        if (cnt == 0) {
            throw new Exception();
        }

        return true;
    }

    public List<PrjSiteTermVO> termList(@Valid PrjSiteTermVO prjSiteTermVO) throws Exception {

        List<PrjSiteTermVO> termList = mapper.termList(prjSiteTermVO);

        return termList;
    }

    public List<PrjSiteGoalVO> goalList(@Valid PrjSiteGoalVO prjSiteGoalVO) throws Exception {

        List<PrjSiteGoalVO> goalList = mapper.goalList(prjSiteGoalVO);

        return goalList;
    }

    public boolean goalListUpdate(@Valid PrjSiteGoalUpdate prjSiteGoalUpdate) throws Exception {
        // 로직처리

        int cnt = mapper.goalListUpdate(prjSiteGoalUpdate);
        if (cnt == 0) {
            throw new Exception();
        }

        return true;
    }

    public boolean goalListInsert(@Valid PrjSiteGoalInsert prjSiteGoalInsert) throws Exception {
        // 로직처리

        int cnt = mapper.goalListInsert(prjSiteGoalInsert);
        if (cnt == 0) {
            throw new Exception();
        }

        return true;
    }

    public Map inspMng(@Valid InspMngVO inspMngVO) throws Exception {
        HashMap map = new HashMap();

        // 운영자리스트, 첨부파일
        List<InspMngVO> inspMngList = mapper.inspMng(inspMngVO);
        // if(inspMngList.size() == 0){
        // throw new CResourceNotExistException();
        // }
        map.put("mainData", inspMngList);

        CmnUserVO cmnUserVO = new CmnUserVO();
        String[] userLvCdList = { "ACN006", "ACN002" }; // invoice, DE Operator
        cmnUserVO.setUserLvlCdList(userLvCdList);
        List<CmnUserVO> userList = cmnUserMapper.userList(cmnUserVO);

        map.put("invoiceUserData", userList);

        CmnUserVO omUserVO = new CmnUserVO();
        String[] omUserLvCdList = { "ACN003", "ACN004" }; // O&M 유저, installer
        omUserVO.setUserLvlCdList(omUserLvCdList);
        List<CmnUserVO> omUserList = cmnUserMapper.userList(omUserVO);
        map.put("omUserList", omUserList);

        SiteFileVO siteFileVO = new SiteFileVO();
        siteFileVO.setSiteId(inspMngVO.getSiteId());

        List<SiteFileVO> siteFileList = mapper.siteFileList(siteFileVO);

        map.put("siteFileList", siteFileList);

        SiteFileVO fileIdCd7VO = new SiteFileVO();
        fileIdCd7VO.setSiteId(inspMngVO.getSiteId());
        fileIdCd7VO.setFileSrcGubn("7");

        List<SiteFileVO> fileIdCd7List = mapper.siteFileList(fileIdCd7VO);

        map.put("mngFileList", fileIdCd7List);
        
        // 전체 ps_id 를 sungrowsApi를 통해 리스트 가져오기
        List<Integer> ps_id_list = getPsIdApi();
        
        map.put("psidList", ps_id_list);
        
        return map;
    }

    public boolean inspMngUpdate(@Valid InspMngUpdate inspMngUpdate) throws Exception {

        SiteInspUpdate siteInspUpdate = new SiteInspUpdate();
        siteInspUpdate.setSiteId(inspMngUpdate.getSiteId());
        siteInspUpdate.setLastChngUseq(inspMngUpdate.getLastChngUseq());
        siteInspUpdate.setChkPassYn(inspMngUpdate.getChkPassYn());
        siteInspUpdate.setChkCmplDt(inspMngUpdate.getChkCmplDt());
        siteInspUpdate.setChkFailRsn(inspMngUpdate.getChkFailRsn());

        DateFormat format = new SimpleDateFormat("yyyy-MM-dd");
        DateFormat dateFormat = new SimpleDateFormat("yyyyMMdd");

        Date dt = new Date();

        String nowDt = "";

        if (StringUtils.isEmpty(inspMngUpdate.getChkCmplDt())) {
            nowDt = format.format(dt);
        } else {
            nowDt = format.format(dateFormat.parse(inspMngUpdate.getChkCmplDt()));
        }

        if ("N".equals(inspMngUpdate.getChkPassYn())) {
            if (!StringUtils.isEmpty(inspMngUpdate.getChkHist())) {
                siteInspUpdate
                        .setChkHist(inspMngUpdate.getChkHist() + "/ (" + nowDt + ") " + inspMngUpdate.getChkFailRsn());
            } else {
                siteInspUpdate.setChkHist("(" + nowDt + ") " + inspMngUpdate.getChkFailRsn());
            }

            siteInspUpdate.setChkCmplDt(null);

            SiteGridVO siteGridVO = new SiteGridVO();
            siteGridVO.setSiteId(inspMngUpdate.getSiteId());
            Map map = this.gridList(siteGridVO);
            List<SiteGridVO> siteGridList = (List<SiteGridVO>) map.get("mainData");

            // 설치 수정
            SiteGridTableUpdate insSiteGridUpdate = new SiteGridTableUpdate();
            insSiteGridUpdate.setSiteId(inspMngUpdate.getSiteId());
            insSiteGridUpdate.setLastChngUseq(inspMngUpdate.getLastChngUseq());
            insSiteGridUpdate.setWorkGubn("4");
            insSiteGridUpdate.setWorkDudt(siteGridList.get(0).getInsWorkDudt());
            insSiteGridUpdate.setWorkCmdt(null);

            int insCnt = mapper.siteGridUpdate(insSiteGridUpdate);

            commonService.checkPrjSiteProcess(inspMngUpdate.getSiteId(), "SP006");
        } else {
            siteInspUpdate.setChkHist(inspMngUpdate.getChkHist());
            commonService.checkPrjSiteProcess(inspMngUpdate.getSiteId(), "SP007");
        }
        // 로직처리
        int inspCnt = mapper.inspUpdate(siteInspUpdate);

        // inspection 특이사항
        NoteUpdate inspNoteUpdate = new NoteUpdate();
        inspNoteUpdate.setSiteId(inspMngUpdate.getSiteId());
        inspNoteUpdate.setNoteGubn("8"); // 임시 코드
        inspNoteUpdate.setNote(inspMngUpdate.getInspNote());
        inspNoteUpdate.setLastChngUseq(inspMngUpdate.getLastChngUseq());

        int inspNoteCnt = mapper.noteUpdate(inspNoteUpdate);

        SiteMngUpdate siteMngUpdate = new SiteMngUpdate();
        siteMngUpdate.setSiteId(inspMngUpdate.getSiteId());
        siteMngUpdate.setLastChngUseq(inspMngUpdate.getLastChngUseq());
        siteMngUpdate.setMngStrtDt(inspMngUpdate.getMngStrtDt());

        // 로직처리
        int mngCnt = mapper.mngUpdate(siteMngUpdate);

        // 운영 특이사항
        NoteUpdate mngNoteUpdate = new NoteUpdate();
        mngNoteUpdate.setSiteId(inspMngUpdate.getSiteId());
        mngNoteUpdate.setNoteGubn("9"); // 임시 코드
        mngNoteUpdate.setNote(inspMngUpdate.getMngNote());
        mngNoteUpdate.setLastChngUseq(inspMngUpdate.getLastChngUseq());

        int mngNoteCnt = mapper.noteUpdate(mngNoteUpdate);

        PrjSiteUserVO prjSiteUserVO004 = new PrjSiteUserVO();
        prjSiteUserVO004.setSiteId(inspMngUpdate.getSiteId());
        prjSiteUserVO004.setSiteUlvlCd("ACN004");

        PrjSiteUserVO prjSiteUserVO003 = new PrjSiteUserVO();
        prjSiteUserVO003.setSiteId(inspMngUpdate.getSiteId());
        prjSiteUserVO003.setSiteUlvlCd("ACN003");

        List<PrjSiteUserVO> siteUser004 = mapper.siteUser(prjSiteUserVO004);
        List<PrjSiteUserVO> siteUser003 = mapper.siteUser(prjSiteUserVO003);
        if (siteUser004.size() > 0) {
            // 사이트별 운영담당자 수정
            ContractPlanUpdate instPsnUpdate = new ContractPlanUpdate();
            instPsnUpdate.setLastChngUseq(inspMngUpdate.getLastChngUseq());
            instPsnUpdate.setUserSeq(inspMngUpdate.getMngUserSeq());
            instPsnUpdate.setSiteId(inspMngUpdate.getSiteId());
            instPsnUpdate.setSiteUlvlCd("ACN004");

            if ("N".equals(inspMngUpdate.getChkPassYn())) {
                if (!"".equals(inspMngUpdate.getMngUserSeq()) && inspMngUpdate.getMngUserSeq() != null) {
                    int instPsnUpdateCnt = mapper.prjSiteUserUpdate(instPsnUpdate);
                }
            } else {
                int instPsnUpdateCnt = mapper.prjSiteUserUpdate(instPsnUpdate);
            }

            if (siteUser004.get(0).getUserSeq().equals(siteUser003.get(0).getUserSeq())) {
                if (!siteUser004.get(0).getUserSeq().equals(inspMngUpdate.getMngUserSeq())) {
                    // 사이트 조회그룹 수정
                    commonService.prjSiteAccessUpdate(inspMngUpdate.getSiteId(), inspMngUpdate.getMngUserSeq(),
                            siteUser004.get(0).getUserSeq());
                }
            } else {
                commonService.prjSiteAccessUpdate(inspMngUpdate.getSiteId(), inspMngUpdate.getMngUserSeq(),
                        siteUser004.get(0).getUserSeq());
            }

        } else {
            if (!StringUtils.isEmpty(inspMngUpdate.getMngUserSeq())) {
                // 사이트별 운영담당자 등록
                ContractPlanInsert mngUserInsert = new ContractPlanInsert();
                mngUserInsert.setLastChngUseq(inspMngUpdate.getLastChngUseq());
                mngUserInsert.setUserSeq(inspMngUpdate.getMngUserSeq());
                mngUserInsert.setSiteId(inspMngUpdate.getSiteId());
                mngUserInsert.setSiteUlvlCd("ACN004");
                if ("N".equals(inspMngUpdate.getChkPassYn())) {
                    if (!"".equals(inspMngUpdate.getMngUserSeq()) && inspMngUpdate.getMngUserSeq() != null) {
                        int instPsInsert = mapper.prjSiteUserInsert(mngUserInsert);
                    }
                } else {
                    int instPsInsert = mapper.prjSiteUserInsert(mngUserInsert);
                }
                if (!siteUser003.get(0).getUserSeq().equals(inspMngUpdate.getMngUserSeq())) {
                    // 사이트 조회그룹 등록
                    commonService.prjSiteAccessUpdate(inspMngUpdate.getSiteId(), inspMngUpdate.getMngUserSeq(), "");
                }
            }
        }
        // 운영
        if (!ObjectUtils.isEmpty(inspMngUpdate.getFileIdCd7())) {
            SiteFileVO fileIdCd7FileVO = new SiteFileVO();
            fileIdCd7FileVO.setSiteId(inspMngUpdate.getSiteId());
            fileIdCd7FileVO.setFileSrcGubn("7");

            List<SiteFileVO> fileIdCd7List = mapper.siteFileList(fileIdCd7FileVO);

            int saveFileCnt =  commonService.insertSiteFile(inspMngUpdate.getSiteId(), inspMngUpdate.getFileIdCd7(), "7",
                    inspMngUpdate.getLastChngUseq(), fileIdCd7List);
            
            if(saveFileCnt > 0) {
	        	String userName = inspMngUpdate.getUserName();
	        	String tabTitleName = "Operation";
	        	commonService.emailUploadSendHistInsert(userName,tabTitleName,"notice012");
	       }
        }

        if (inspMngUpdate.getMngStrtDt() != null && !"".equals(inspMngUpdate.getMngStrtDt())) {
            commonService.checkPrjSiteProcess(inspMngUpdate.getSiteId(), "SP008");
        }

        return true;
    }
    
    
    /*
     * 모든  PS_ID 를 Return 
     */    
    private List getPsIdApi() throws IOException, JSONException {
    	    	                	
    	List<Map<String,Object>> resultPsidList = new ArrayList<Map<String,Object>>();
    	
    	// https://augateway.isolarcloud.com/v1/userService/login 접속으로 token, user_id 구함
    	JSONObject data1   = new JSONObject();
    	data1.put("appkey", "8E3C8D5EA073CAA8B0C18B6C92AF7AF4");
    	data1.put("lang", "_en_US");
    	data1.put("service", "login");
    	data1.put("user_account", "swpark1223@hanwha.com");
    	data1.put("user_password", "hdep2020");            	
    	data1.put("sys_code", "901");
    	data1.put("login_type", "1");
    	
    	JSONObject resultData1 = apiConnect("https://augateway.isolarcloud.com/v1/userService/login",data1);
    	        	        	  
    	String getToken =(String) resultData1.getJSONObject("result_data").get("token");
    	String getUser_id =(String) resultData1.getJSONObject("result_data").get("user_id");
    	
	    	//https://augateway.isolarcloud.com/v1/powerStationService/getPsList 접속으로 기기들 ps_id  구함
	    	 if(!"".equals(getToken) && !"".equals(getUser_id)) {
	    		   JSONObject data2   = new JSONObject();    		   
	    		   data2.put("appkey", data1.get("appkey").toString());
	    		   data2.put("token", getToken);	    		   
	    		   data2.put("user_id",getUser_id);
	    		   data2.put("sys_code","901");
	    		   data2.put("share_type","0,1,2");
	    	
	    		   JSONObject resultData2 = apiConnect("https://augateway.isolarcloud.com/v1/powerStationService/getPsList",data2);    		   
	    		   JSONArray  ps_id_list =  resultData2.getJSONObject("result_data").getJSONArray("pageList");    		   
	    		   
	    		    for(int i = 0; i < ps_id_list .length(); i++) {
	    		    	Map<String, Object> map = new HashMap<String, Object>();
	    		    	int ps_id = (int)ps_id_list.getJSONObject(i).get("ps_id");
	    		    	String ps_name = (String)ps_id_list.getJSONObject(i).get("ps_name");
	    		    	String location = (String)ps_id_list.getJSONObject(i).get("location");
	    		    	map.put("ps_id", ps_id);
	    		    	map.put("ps_name", ps_name);
	    		    	map.put("location", location);	    		    	
	    		    	resultPsidList.add(map);
	    		    }
	    	 }	    	 	    	 	    
	    	 return resultPsidList;
    }
    
    
    /*
     * PS_ID 로 PS_KEY 찾음 (CMN_PLANT ,CMN_PLANT_FAC 테이블에 해당 KEY들 INSERT 작업 )
     */    
    public void insertSiteRegister(String siteId, String sendPsId) throws Exception {
    	
    	// SITE_ID로 CMN_PLANT 에서 찾아서 있으면 가져온 PS_ID와 비교하여 같으면 종료
	    	InspMngVO inspMngVO = new InspMngVO();
	    	inspMngVO.setSiteId(siteId);
	    	List<InspMngVO> inspMngList = mapper.inspMng(inspMngVO);
	    	String prvPsId = inspMngList.get(0).getPsId();
    	
    	if(sendPsId.equals(prvPsId)) {
    		// 테이블에 저장된값과 현재 보낸값(sendPsId)과 일치하여 종료
    		return;
    	}else if(!sendPsId.equals(prvPsId) && prvPsId != null){    		    	
    		
    		// 테이블에 저장된값과 현재 보낸값(sendPsId)이 다르면 수정
    		PrjSitePsInfoVo prjSitePsInfoVo = new PrjSitePsInfoVo();
    		prjSitePsInfoVo.setSiteId(siteId);
    		prjSitePsInfoVo.setPlantKey(sendPsId);
    		int cnt = mapper.plantTypeUpdate(prjSitePsInfoVo);
    		
    		//보낸 sendPsId로 ps_key 가져오는 api
    		String psKey = getPsKey( sendPsId);
    		prjSitePsInfoVo.setFacKey(psKey);
    		int cnt1 = mapper.facTypeUpdate(prjSitePsInfoVo);
    		
    	}else{
    		// prvPsId null 일시 
    		 // 보낸 sendPsId로 ps_key 가져오는 api
    		  String psKey = getPsKey(sendPsId);    		    		  			      		    					 
			  
    		  //CMN_PLANT 테이블에 INSERT			  
	    	   PrjSitePsInfoVo prjSitePsInfoVo = new PrjSitePsInfoVo();
	    	   prjSitePsInfoVo.setPlantKey(sendPsId);		    	   
	    	   prjSitePsInfoVo.setSiteId(siteId);
	    	   String plantType = "IV0003";
	    	   prjSitePsInfoVo.setPlantType(plantType);
	    	   
	    	   int cnt = mapper.insertCmnPlant(prjSitePsInfoVo);
	    	   
	    	   System.out.println("FAC_KEY==>"+psKey);
	    	   	    	   
	    	   // CMN_PLANT_FAC 테이블에 INSERT
	    	   prjSitePsInfoVo.setFacKey(psKey);
	    	   int cnt1 = mapper.insertCmnPlantFac(prjSitePsInfoVo);
	    	   
	    	   
    	}    	    	               			    	
    }    
    
    
    private String getPsKey (String ps_id) throws UnsupportedEncodingException, IOException {
    	
    	//return 되는 psKey
    	String resultPsKey = "";
    	
    	// https://augateway.isolarcloud.com/v1/userService/login 접속으로 token, user_id 구함
    	JSONObject data1   = new JSONObject();
    	data1.put("appkey", "8E3C8D5EA073CAA8B0C18B6C92AF7AF4");
    	data1.put("lang", "_en_US");
    	data1.put("service", "login");
    	data1.put("user_account", "swpark1223@hanwha.com");
    	data1.put("user_password", "hdep2020");        
    	data1.put("sys_code", "901");
    	data1.put("login_type", "1");
    	
    	JSONObject resultData1 = apiConnect("https://augateway.isolarcloud.com/v1/userService/login",data1);
    	        	        	  
    	String getToken =(String) resultData1.getJSONObject("result_data").get("token");
    	String getUser_id =(String) resultData1.getJSONObject("result_data").get("user_id");
    	
	    	 if(!"".equals(getToken) && !"".equals(getUser_id)) {    		    	    
	    	//https://augateway.isolarcloud.com/v1/devService/getDeviceList 접속으로 ps_id 로 -> 해당 ps_key  구함	    		    	
		    	   JSONObject data2   = new JSONObject();    		   
		    	   data2.put("appkey", data1.get("appkey").toString());
		    	   data2.put("token", getToken);	    		    	   	    		    	  
		    	   data2.put("ps_id",ps_id);
		    	   data2.put("lang","_en_US");	    		    	   
		    	   data2.put("sys_code","901");
	    		    	   
		    	   System.out.println("PLANT_KEY==>"+ps_id);		    	   		    	   		    	  
		    	   		    	   
    		       JSONObject resultData3 = apiConnect("https://augateway.isolarcloud.com/v1/devService/getDeviceList",data2);
    		       JSONArray  ps_key_list =  resultData3.getJSONObject("result_data").getJSONArray("pageList");
		    		    	
    		    	for(int i = 0; i < ps_key_list .length(); i++) {    		    		
    		    		
    		    		int device_type = (int) ps_key_list.getJSONObject(i).get("device_type");
    		    		
    		    		 //  device == 14 ==>PV+ESS 		    		    		    		    	    
    		    		if( device_type == 14) {    		    			      		    			 
    		    			resultPsKey = (String)ps_key_list.getJSONObject(i).get("ps_key");    				    	       		    			    		    			
    		    		}else {
    		    		   // 일단  device_type == 14 일때만 해줌..   		    		
    		    		}
    		    	}	    		    	
	    	 }    	     	    
	    	 
    	return resultPsKey;
    }
    
    //api 통신 함수  
    private JSONObject apiConnect(String in_url,JSONObject param) throws UnsupportedEncodingException, IOException {
    	
    	JSONObject resultData =null;
    	//접속 url
    	URL url = new URL(in_url);    	
    	HttpURLConnection con = (HttpURLConnection)url.openConnection();    			
    	con.setDoOutput(true);
    	con.setDoInput(true);
    	con.setRequestProperty("Content-Type", "application/json");
    	con.setRequestProperty("Accept", "application/json");
    	con.setRequestMethod("POST");
    	    	
    	OutputStreamWriter wr = new OutputStreamWriter(con.getOutputStream());
    	//전송할데이터 
    	wr.write(param.toString());
    	wr.flush();
    	
    	StringBuilder sb = new StringBuilder();   
    	int HttpResult = con.getResponseCode(); 
    	if (HttpResult == HttpURLConnection.HTTP_OK) {
    	    BufferedReader br = new BufferedReader(new InputStreamReader(con.getInputStream(), "utf-8"));
    	    String line = null;  
    	    while ((line = br.readLine()) != null) {  
    	        sb.append(line + "\n");  
    	    }
    	    br.close();
    	    //System.out.println("" + sb.toString());      	    
    	     resultData = new JSONObject(sb.toString());    	        	   
    	}    	    
    	return resultData;
    }
    
    public Map nectrInsert(@Valid NectrInsert nectrInsert) throws Exception {
        // 로직처리
        HashMap map = new HashMap();
        // 사이트별 사용자 등록

            CmnUserInsert cmnUserInsert = new CmnUserInsert();
            cmnUserInsert.setEmail(nectrInsert.getEmail());
            cmnUserInsert.setUserName(nectrInsert.getUserName());
            cmnUserInsert.setTelNo(nectrInsert.getTelNo());
            cmnUserInsert.setUserLvlCd("ACN005");

            int cnt1 = cmnUserMapper.join(cmnUserInsert);
            if (cnt1 > 0) {
                CmnUserVO cmnUserVo = new CmnUserVO();
                cmnUserVo.setUserId(cmnUserInsert.getUserId());

                List<CmnUserVO> cmnUserList = cmnUserMapper.userList(cmnUserVo);

                if (cmnUserList.size() > 0) {
                    cmnUserInsert.setUserSeq(cmnUserList.get(0).getUserSeq());
                }

                String enPswd = passwordEncoder.encode(cmnUserInsert.getUserId() + "!");
                cmnUserInsert.setPswd(enPswd);
                cmnUserMapper.userPassSet(cmnUserInsert);

                nectrInsert.setUserSeq(cmnUserInsert.getUserSeq());

            }

        String userSeq = nectrInsert.getUserSeq();
        // 계약정보 등록
        ContractPlanInsert contractPlanInsert = new ContractPlanInsert();

        contractPlanInsert.setUserName(nectrInsert.getUserName());
        contractPlanInsert.setLastChngUseq(nectrInsert.getLastChngUseq());
        contractPlanInsert.setTelNo(nectrInsert.getTelNo());
        contractPlanInsert.setEmail(nectrInsert.getEmail());
        contractPlanInsert.setUserSeq(nectrInsert.getUserSeq());
        contractPlanInsert.setAddr(nectrInsert.getAddr());
        contractPlanInsert.setRegnGubn(nectrInsert.getRegnGubn());
        if (!"".equals(nectrInsert.getPpaStrtDt()) && nectrInsert.getPpaStrtDt() != null) {
            contractPlanInsert.setCnrtStrtDt(nectrInsert.getPpaStrtDt());
        } else {
            contractPlanInsert.setCnrtStrtDt("19990101");
        }
        if (!"".equals(nectrInsert.getPpaEndDt()) && nectrInsert.getPpaEndDt() != null) {
            contractPlanInsert.setCnrtEndDt(nectrInsert.getPpaEndDt());
        } else {
            contractPlanInsert.setCnrtEndDt("19991231");
        }
        contractPlanInsert.setRescGubn(nectrInsert.getRescGubn());
        contractPlanInsert.setContractNote(nectrInsert.getNote());
        contractPlanInsert.setInstPsnSeq(nectrInsert.getInstallerName());
        contractPlanInsert.setNewUserYn("Y");
        contractPlanInsert.setPvInstCapa(nectrInsert.getModlCapa());
        contractPlanInsert.setEssInstCapa(nectrInsert.getBtryCapa());
        contractPlanInsert.setNctrMemYn("Y");

        int cnt = mapper.contractInsert(contractPlanInsert);
        if (cnt == 0) {
            throw new Exception();
        }

        commonService.checkPrjSiteProcess(contractPlanInsert.getSiteId(), "SP001");

        List<String> dates = DateUtil.dates(contractPlanInsert.getCnrtStrtDt(), contractPlanInsert.getCnrtEndDt());
        RscGrpUserInsert rscGrpUserInsert = new RscGrpUserInsert();

        rscGrpUserInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());
        rscGrpUserInsert.setSiteId(contractPlanInsert.getSiteId());
        rscGrpUserInsert.setUserSeq(contractPlanInsert.getUserSeq());
        // for (String date : dates) {
        rscGrpUserInsert.setCnrtStrtDt(contractPlanInsert.getCnrtStrtDt());
        rscGrpUserInsert.setCnrtEndDt(contractPlanInsert.getCnrtEndDt());
        rscGrpMapper.rscGrpUserInsert(rscGrpUserInsert);
        // }

        nectrInsert.setSiteId(contractPlanInsert.getSiteId());
        int nectrcnt = mapper.nectrInsert(nectrInsert);
        if (nectrcnt == 0) {
            throw new Exception();
        }

        map.put("Site ID(H.DEP)", contractPlanInsert.getSiteId());

        // 사이트별 사용자 등록
        ContractPlanInsert siteUserInsert = new ContractPlanInsert();
        siteUserInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());
        siteUserInsert.setUserSeq(userSeq);
        siteUserInsert.setSiteId(contractPlanInsert.getSiteId());
        siteUserInsert.setSiteUlvlCd("ACN005");

        int prjSiteUserInsert = mapper.prjSiteUserInsert(siteUserInsert);
        if (prjSiteUserInsert == 0) {
            throw new Exception();
        }

        // 사이트 조회그룹 등록
        commonService.prjSiteAccessUpdate(contractPlanInsert.getSiteId(), contractPlanInsert.getInstPsnSeq(), "");

        // 사이트별 설치담당자 등록
        ContractPlanInsert instPsnInsert = new ContractPlanInsert();
        instPsnInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());
        instPsnInsert.setUserSeq(contractPlanInsert.getInstPsnSeq());
        instPsnInsert.setSiteId(contractPlanInsert.getSiteId());
        instPsnInsert.setSiteUlvlCd("ACN003");

        int instPsInsert = mapper.prjSiteUserInsert(instPsnInsert);
        if (instPsInsert == 0) {
            throw new Exception();
        }

        // 계약수립 등록
        int planInsert = mapper.planInsert(contractPlanInsert);
        if (planInsert == 0) {
            throw new Exception();
        }

        // 사이트 상태 정보 변경
        if (!"".equals(contractPlanInsert.getWkplCmplDt()) && contractPlanInsert.getWkplCmplDt() != null) {
            commonService.checkPrjSiteProcess(contractPlanInsert.getSiteId(), "SP002");
        }

        ArrayList<String> noteGubnCdList = new ArrayList<String>();
        noteGubnCdList.add("1");
        noteGubnCdList.add("2");
        noteGubnCdList.add("3");
        noteGubnCdList.add("4");
        noteGubnCdList.add("5");
        noteGubnCdList.add("6");
        noteGubnCdList.add("7");
        noteGubnCdList.add("8");
        noteGubnCdList.add("9");

        for (String noteGubn : noteGubnCdList) {

            NoteInsert noteInsert = new NoteInsert();
            noteInsert.setSiteId(contractPlanInsert.getSiteId());
            noteInsert.setNoteGubn(noteGubn); // 임시 코드
            if ("1".equals(noteGubn)) {
                noteInsert.setNote(contractPlanInsert.getContractNote());
            } else if ("2".equals(noteGubn)) {
                noteInsert.setNote(contractPlanInsert.getPlanNote());
            } else {
                noteInsert.setNote("");
            }

            noteInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());

            int contractNote = mapper.noteInsert(noteInsert);
            if (contractNote == 0) {
                throw new Exception();
            }
        }

        // GRID 신청
        SiteGridInsert applSiteGridInsert = new SiteGridInsert();
        applSiteGridInsert.setSiteId(contractPlanInsert.getSiteId());
        applSiteGridInsert.setWorkGubn("1"); // 임시 코드
        applSiteGridInsert.setWorkDudt(contractPlanInsert.getApplDudt());
        applSiteGridInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());

        int applGrid = mapper.siteGridInsert(applSiteGridInsert);
        if (applGrid == 0) {
            throw new Exception();
        }
        // GRID 승인
        SiteGridInsert apprSiteGridInsert = new SiteGridInsert();
        apprSiteGridInsert.setSiteId(contractPlanInsert.getSiteId());
        apprSiteGridInsert.setWorkGubn("2"); // 임시 코드
        apprSiteGridInsert.setWorkDudt(contractPlanInsert.getApprDudt());
        apprSiteGridInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());

        int apprGrid = mapper.siteGridInsert(apprSiteGridInsert);
        if (apprGrid == 0) {
            throw new Exception();
        }
        // 자재구매
        SiteGridInsert mpSiteGridInsert = new SiteGridInsert();
        mpSiteGridInsert.setSiteId(contractPlanInsert.getSiteId());
        mpSiteGridInsert.setWorkGubn("3"); // 임시 코드
        mpSiteGridInsert.setWorkDudt(contractPlanInsert.getMpDudt());
        mpSiteGridInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());

        int mpGrid = mapper.siteGridInsert(mpSiteGridInsert);
        if (mpGrid == 0) {
            throw new Exception();
        }

        // 설치
        SiteGridInsert insSiteGridInsert = new SiteGridInsert();
        insSiteGridInsert.setSiteId(contractPlanInsert.getSiteId());
        insSiteGridInsert.setWorkGubn("4"); // 임시 코드
        insSiteGridInsert.setWorkDudt(contractPlanInsert.getInsDudt());
        insSiteGridInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());

        int insGrid = mapper.siteGridInsert(insSiteGridInsert);
        if (insGrid == 0) {
            throw new Exception();
        }

        // 점검
        SiteInspInsert siteInspInsert = new SiteInspInsert();
        siteInspInsert.setSiteId(contractPlanInsert.getSiteId());
        siteInspInsert.setLastChngUseq(contractPlanInsert.getLastChngUseq());
        int inspCnt = mapper.siteInspInsert(siteInspInsert);
        if (inspCnt == 0) {
            throw new Exception();
        }

    //     List<SiteFileVO> fileIdCdFileList = new ArrayList<>();
        
    //     if (!ObjectUtils.isEmpty(contractPlanInsert.getFileIdCd1())) {
    //     int saveFileCnt =  commonService.insertSiteFile(contractPlanInsert.getSiteId(), contractPlanInsert.getFileIdCd1(), "1",
    //                 contractPlanInsert.getLastChngUseq(), fileIdCdFileList);           
    //     	// 파일이 저장되는경우 위에 로직에서보면 같은파일을 저장하면 isOverlay => true가되서 파일저장안됨
	//         // 즉 같은파일을 저장하는경우 saveFileCnt = 0 , 파일을 저장하거나 다른파일저장한경우에  saveFileCnt 0보다커짐. 
	//         // 그러므로 그때 메일을 전송한다.
    //     if(saveFileCnt > 0) {
    //         String userName = contractPlanInsert.getUserName();
    //         String tabTitleName = "Contract Info";
    //         commonService.emailUploadSendHistInsert(userName,tabTitleName,"notice012");
    //     }  
    //     }

    //     if (!ObjectUtils.isEmpty(contractPlanInsert.getFileIdCd2())) {
    //     int saveFileCnt = commonService.insertSiteFile(contractPlanInsert.getSiteId(), contractPlanInsert.getFileIdCd2(), "2",
    //                 contractPlanInsert.getLastChngUseq(), fileIdCdFileList);
        
    //     if(saveFileCnt > 0) {
    //         String userName = contractPlanInsert.getUserName();
    //         String tabTitleName = "Planning";
    //         commonService.emailUploadSendHistInsert(userName,tabTitleName,"notice012");
    //     }     
    // }

    //     commonService.smsSendHistInsert(contractPlanInsert.getSiteId(), "notice007", "", "");
    //     commonService.emailSendHistInsert(contractPlanInsert.getSiteId(), "", "notice007", "", "");

        return map;
    }

    public boolean nectrUpdate(@Valid NectrUpdate nectrUpdate) throws Exception {

        
        int cnt = mapper.nectrUpdate(nectrUpdate);
        if (cnt == 0) {
            throw new Exception();
        }

        int nectrPSCUpdate = mapper.nectrPSCUpdate(nectrUpdate);
        if (nectrPSCUpdate == 0) {
            throw new Exception();
        }

        int nectrPSUUpdate = mapper.nectrPSUUpdate(nectrUpdate);
        if (nectrPSUUpdate == 0) {
            throw new Exception();
        }

        int nectrCUUpdate = mapper.nectrCUUpdate(nectrUpdate);
        if (nectrCUUpdate == 0) {
            throw new Exception();
        }

        NoteUpdate contractNoteUpdate = new NoteUpdate();
        contractNoteUpdate.setSiteId(nectrUpdate.getSiteId());
        contractNoteUpdate.setNoteGubn("1"); // 임시 코드
        contractNoteUpdate.setNote(nectrUpdate.getNote());
        contractNoteUpdate.setLastChngUseq(nectrUpdate.getLastChngUseq());

        int contractNote = mapper.noteUpdate(contractNoteUpdate);

        return true;
    }

    public boolean nectrDelete(@Valid NectrDelete nectrDelete) throws Exception {
        // 로직처리

        int cnt1 = mapper.nectrDelete(nectrDelete);
        if (cnt1 == 0) {
            throw new Exception();
        }

        ContractPlanVO contractPlanVO = new ContractPlanVO();

        contractPlanVO.setSiteId(nectrDelete.getSiteId());
        contractPlanVO.setLastChngUseq(nectrDelete.getLastChngUseq());

        CmnInqRoleVO cmnInqRoleVO = new CmnInqRoleVO();
        cmnInqRoleVO.setSiteId(contractPlanVO.getSiteId());

        cmnInqMapper.siteDelinrlSiteDelete(cmnInqRoleVO);

        int cnt = mapper.contractDelete(contractPlanVO);
        if (cnt == 0) {
            throw new Exception();
        }

        return true;
    }
}
