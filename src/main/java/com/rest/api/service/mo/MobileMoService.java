package com.rest.api.service.mo;


import com.amazonaws.services.qldbsession.model.Page;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.mm.CmnUserVO;
import com.rest.api.model.mo.FailAlarmVo;
import com.rest.api.model.mo.KpiSummaryVO;
import com.rest.api.model.mo.OperationsVO;
import com.rest.api.model.pp.*;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.mm.CmnUserMapper;
import com.rest.api.service.pp.PrjSiteMapper;
import com.rest.api.service.pp.PrjSiteService;
import com.rest.api.util.WeatherAPI;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;
import org.springframework.util.ObjectUtils;
import org.thymeleaf.util.StringUtils;

import javax.validation.Valid;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.*;


@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class MobileMoService {
    @Autowired
    private MobileMoMapper mapper;
    @Autowired
    private MoMapper moMapper;
    @Autowired
    private PrjSiteMapper psMapper;
    @Autowired
    private CommonService commonService;
    @Autowired
    private CmnUserMapper cmnUserMapper;

    @Autowired
    private PrjSiteService prjSiteService;

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    private final PasswordEncoder passwordEncoder;

    public HashMap mobPrjSiteList(PrjSiteVO prjSiteVO) throws Exception {
        Integer pagePer = 10;
        Integer start = (prjSiteVO.getPage() -1) * pagePer;
        prjSiteVO.setPageStart(start);
        prjSiteVO.setPagePer(pagePer);

        HashMap map = new HashMap();

        PageVo pageVo = mapper.mobOperationCnt(prjSiteVO);
        if (pageVo.getTotalCnt() == 0) {
            pageVo.setTotalPage(1);
        } else {
            pageVo.setTotalPage((int)Math.ceil( (double)pageVo.getTotalCnt() / 10));
        }
        pageVo.setPage(prjSiteVO.getPage());
        map.put("pagination", pageVo);
        List<MobileOperationVO> operationVo = mapper.mobOperationList(prjSiteVO);
        for(int i = 0 ; i < operationVo.size(); i++){
            String rescGubn = operationVo.get(i).getRescGubn();

            OperationsVO operationsKpiVo = new OperationsVO();
            operationsKpiVo.setSiteId(operationVo.get(i).getSiteId());
            operationsKpiVo.setRescGubn(rescGubn);
            String timeZone = "GMT";
            if (! "".equals(operationVo.get(i).getTimeZone()) && operationVo.get(i).getTimeZone() != null) {
                timeZone = operationVo.get(i).getTimeZone();
            }

            String localDate = commonService.convertLastMinute(timeZone);
            operationsKpiVo.setSearchDate(localDate);
            KpiSummaryVO nowPower = moMapper.kpiSummary(operationsKpiVo);
            if (nowPower != null) {
                operationVo.get(i).setTodayPower(commonService.convertWToKw(nowPower.getProduction(), true));
            } else {
                operationVo.get(i).setTodayPower("0");
            }

            SimpleDateFormat transFormat = new SimpleDateFormat("yyyyMMddHHmmss");
            Date localDate2 = transFormat.parse(localDate);
            Calendar cal = Calendar.getInstance();
            cal.setTime(localDate2);
            String bDate = transFormat.format(cal.getTime());
            operationsKpiVo.setSearchDate(bDate);

            KpiSummaryVO powerList = moMapper.kpiSummary(operationsKpiVo);
            if (powerList != null) {
                operationVo.get(i).setRealTimePower(commonService.convertWToKw(powerList.getProduction(), true));
            } else {
                operationVo.get(i).setRealTimePower("0");
            }

            if ("".equals(operationVo.get(i).getEqmtStatus()) || operationVo.get(i).getEqmtStatus() == null) {
                operationVo.get(i).setEqmtStatus("");
            }

            if ("".equals(operationVo.get(i).getEqmtStatus()) || operationVo.get(i).getEqmtStatus() == null) {
                operationVo.get(i).setEqmtStatus("");
            }
            if ("".equals(operationVo.get(i).getTimeZone()) || operationVo.get(i).getTimeZone() == null) {
                operationVo.get(i).setTimeZone("");
            }
            if ("".equals(operationVo.get(i).getSiteIds()) || operationVo.get(i).getSiteIds() == null) {
                String[] siteIds = new String[0];
                operationVo.get(i).setSiteIds(siteIds);
            }
        }

        map.put("operations", operationVo);

        return map ;
    }

    public MobileOperationDetail mobInspMng(PrjSiteVO prjSiteVO) throws Exception {
        MobileOperationDetail mobileOperationDetail = mapper.mobOperation(prjSiteVO);
        if(mobileOperationDetail.getLatd() != null && !"".equals(mobileOperationDetail.getLatd()) && mobileOperationDetail.getLgtd() != null && !"".equals(mobileOperationDetail.getLgtd())){
                WeatherAPI weatherAPI   = new WeatherAPI();
                HashMap<String, String> returnValue = (HashMap<String, String>) weatherAPI.weather(mobileOperationDetail.getLatd(),mobileOperationDetail.getLgtd());
                mobileOperationDetail.setWeatherMain(returnValue.get("weatherMain"));
                mobileOperationDetail.setWeatherTemp(returnValue.get("weatherTemp"));
                mobileOperationDetail.setWeatherId(returnValue.get("weatherId"));
        }

        OperationsVO operationsKpiVo = new OperationsVO();
        operationsKpiVo.setSiteId(mobileOperationDetail.getSiteId());
        operationsKpiVo.setRescGubn(mobileOperationDetail.getRescGubn());

        String timeZone = "GMT";
        if (! "".equals(mobileOperationDetail.getTimeZone()) && mobileOperationDetail.getTimeZone() != null) {
            timeZone = mobileOperationDetail.getTimeZone();
        }
        String localDate = commonService.convertLastMinute(timeZone);
        operationsKpiVo.setSearchDate(localDate);
        KpiSummaryVO nowPower = moMapper.kpiSummary(operationsKpiVo);
        if (nowPower != null) {
            mobileOperationDetail.setProduction(commonService.convertWToKw(nowPower.getProduction(), true));
            mobileOperationDetail.setEnergyYield(commonService.convertWToKw(nowPower.getEnergyYield(), true));
            Double ivtAc = Double.parseDouble(commonService.convertWToKw(nowPower.getIvtAc(), false));
            Double ivtDc = Double.parseDouble(commonService.convertWToKw(nowPower.getIvtDc(), false));
            if (ivtAc > 0 && ivtDc > 0) {
                String ivtEfficiency = Double.toString(Math.round(((ivtAc / ivtDc* 100) * 100d)) / 100d);
                mobileOperationDetail.setIvtEfficiency(ivtEfficiency);
            } else {
                mobileOperationDetail.setIvtEfficiency("0.00");
            }
        } else {
            mobileOperationDetail.setProduction("0.00");
            mobileOperationDetail.setEnergyYield("0.00");
            mobileOperationDetail.setIvtEfficiency("0.00");
        }
        mobileOperationDetail.setPpa("0.00");

        return mobileOperationDetail ;
    }

    public HashMap mobFaultList (FailAlarmVo failAlarmVo) throws Exception {
        HashMap map = new HashMap();
        PageVo pageVo = mapper.siteFaultCnt(failAlarmVo);

        Integer pagePer = 10;
        Integer start = (failAlarmVo.getPage() -1) * pagePer;
        failAlarmVo.setPageStart(start);
        failAlarmVo.setPagePer(pagePer);
        if (pageVo.getTotalCnt() == 0) {
            pageVo.setTotalPage(1);
        } else {
            pageVo.setTotalPage((int)Math.ceil( (double)pageVo.getTotalCnt() / 10));
        }
        pageVo.setPage(failAlarmVo.getPage());
        map.put("pagination", pageVo);

        List<FailAlarmVo> failAlarmVoList = mapper.siteFaultList(failAlarmVo);
        String[] siteIds = new String[0];
        for(int i = 0 ; i < failAlarmVoList.size(); i++){
            failAlarmVoList.get(i).setNotiStartDt("");
            failAlarmVoList.get(i).setNotiEndDt("");
            failAlarmVoList.get(i).setUnlockStartDt("");
            failAlarmVoList.get(i).setUnlockEndDt("");
            failAlarmVoList.get(i).setSiteIds(siteIds);
        }

        map.put("faultList", failAlarmVoList);
        return map;
    }

    public boolean  mobContractUpdate(@Valid ContractPlanUpdate contractPlanUpdate) throws Exception {
        // 로직처리

        PrjSiteUserVO prjSiteUserVO005 = new PrjSiteUserVO();
        prjSiteUserVO005.setSiteId(contractPlanUpdate.getSiteId());
        prjSiteUserVO005.setSiteUlvlCd("ACN005");
        List<PrjSiteUserVO> siteUser005 = psMapper.siteUser(prjSiteUserVO005);

        if(siteUser005.size() > 0){
            // 사이트별 사용자 수정
            ContractPlanUpdate siteUserUpdate = new ContractPlanUpdate();
            siteUserUpdate.setLastChngUseq(contractPlanUpdate.getLastChngUseq());
            siteUserUpdate.setUserSeq(contractPlanUpdate.getUserSeq());
            siteUserUpdate.setSiteId(contractPlanUpdate.getSiteId());
            siteUserUpdate.setSiteUlvlCd("ACN005");

            int prjSiteUserUpdate = psMapper.prjSiteUserUpdate(siteUserUpdate);

        }else{
            // 사이트별 사용자 등록
            ContractPlanInsert siteUserInsert = new ContractPlanInsert();
            siteUserInsert.setLastChngUseq(contractPlanUpdate.getLastChngUseq());
            siteUserInsert.setUserSeq(contractPlanUpdate.getUserSeq());
            siteUserInsert.setSiteId(contractPlanUpdate.getSiteId());
            siteUserInsert.setSiteUlvlCd("ACN005");
            int prjSiteUserInsert = psMapper.prjSiteUserInsert(siteUserInsert);
        }

        PrjSiteUserVO prjSiteUserVO003 = new PrjSiteUserVO();
        prjSiteUserVO003.setSiteId(contractPlanUpdate.getSiteId());
        prjSiteUserVO003.setSiteUlvlCd("ACN003");

        List<PrjSiteUserVO> siteUser003 = psMapper.siteUser(prjSiteUserVO003);
        if(siteUser003.size() > 0 ){
            // 사이트별 설치담당자 수정
            ContractPlanUpdate instPsnUpdate = new ContractPlanUpdate();
            instPsnUpdate.setLastChngUseq(contractPlanUpdate.getLastChngUseq());
            instPsnUpdate.setUserSeq(contractPlanUpdate.getInstPsnSeq());
            instPsnUpdate.setSiteId(contractPlanUpdate.getSiteId());
            instPsnUpdate.setSiteUlvlCd("ACN003");

            int instPsnUpdateCnt = psMapper.prjSiteUserUpdate(instPsnUpdate);

        }else{
            // 사이트별 설치담당자 등록
            ContractPlanInsert instPsnInsert = new ContractPlanInsert();
            instPsnInsert.setLastChngUseq(contractPlanUpdate.getLastChngUseq());
            instPsnInsert.setUserSeq(contractPlanUpdate.getInstPsnSeq());
            instPsnInsert.setSiteId(contractPlanUpdate.getSiteId());
            instPsnInsert.setSiteUlvlCd("ACN003");

            int instPsInsert = psMapper.prjSiteUserInsert(instPsnInsert);
        }

        // 계약정보 수정
        int contractUpdate = psMapper.contractUpdate(contractPlanUpdate);
        // 계약정보 특이사항
        NoteUpdate contractNoteUpdate = new NoteUpdate();
        contractNoteUpdate.setSiteId(contractPlanUpdate.getSiteId());
        contractNoteUpdate.setNoteGubn("1"); //임시 코드
        contractNoteUpdate.setNote(contractPlanUpdate.getContractNote());
        contractNoteUpdate.setLastChngUseq(contractPlanUpdate.getLastChngUseq());

        int contractNote = psMapper.noteUpdate(contractNoteUpdate);

        SiteFileVO fileIdCd1FileVO = new SiteFileVO();
        fileIdCd1FileVO.setSiteId(contractPlanUpdate.getSiteId());
        fileIdCd1FileVO.setFileSrcGubn("1");

        List<SiteFileVO> fileIdCd1FileList = psMapper.siteFileList(fileIdCd1FileVO);
        if(! ObjectUtils.isEmpty(contractPlanUpdate.getFileIdCd1())){
            commonService.insertSiteFile(
                    contractPlanUpdate.getSiteId(),
                    contractPlanUpdate.getFileIdCd1(),
                    "1",
                    contractPlanUpdate.getLastChngUseq(),
                    fileIdCd1FileList);
        }

        commonService.checkPrjSiteProcess(contractPlanUpdate.getSiteId(), "SP001");

        return true;
    }


    public boolean mobPlanUpdate(@Valid ContractPlanUpdate contractPlanUpdate) throws Exception {
        int planUpdate = psMapper.planUpdate(contractPlanUpdate);

        // 계약수립 특이사항
        NoteUpdate planNoteUpdate = new NoteUpdate();
        planNoteUpdate.setSiteId(contractPlanUpdate.getSiteId());
        planNoteUpdate.setNoteGubn("2"); //임시 코드
        planNoteUpdate.setNote(contractPlanUpdate.getPlanNote());
        planNoteUpdate.setLastChngUseq(contractPlanUpdate.getLastChngUseq());

        int planNote = psMapper.noteUpdate(planNoteUpdate);

        SiteFileVO fileIdCd2FileVO = new SiteFileVO();
        fileIdCd2FileVO.setSiteId(contractPlanUpdate.getSiteId());
        fileIdCd2FileVO.setFileSrcGubn("2");

        List<SiteFileVO> fileIdCd2FileList = psMapper.siteFileList(fileIdCd2FileVO);
        if(! ObjectUtils.isEmpty(contractPlanUpdate.getFileIdCd2())){
            commonService.insertSiteFile(
                    contractPlanUpdate.getSiteId(),
                    contractPlanUpdate.getFileIdCd2(),
                    "2",
                    contractPlanUpdate.getLastChngUseq(),
                    fileIdCd2FileList);
        }

        ArrayList<String> workGubnList = new ArrayList<String>();
        workGubnList.add("1");
        workGubnList.add("2");
        workGubnList.add("3");
        workGubnList.add("4");
        for(String workGubn : workGubnList){

            SiteGridTableUpdate siteGridTableUpdate = new SiteGridTableUpdate();
            siteGridTableUpdate.setSiteId(contractPlanUpdate.getSiteId());
            siteGridTableUpdate.setWorkGubn(workGubn); //임시 코드
            if("1".equals(workGubn)){
                siteGridTableUpdate.setWorkDudt(contractPlanUpdate.getApplDudt());
            }else if("2".equals(workGubn)){
                siteGridTableUpdate.setWorkDudt(contractPlanUpdate.getApprDudt());
            }else if("3".equals(workGubn)){
                siteGridTableUpdate.setWorkDudt(contractPlanUpdate.getMpDudt());
            }else if("4".equals(workGubn)){
                siteGridTableUpdate.setWorkDudt(contractPlanUpdate.getInsDudt());
            }

            siteGridTableUpdate.setLastChngUseq(contractPlanUpdate.getLastChngUseq());

            int gridWorkDudtCnt = psMapper.gridWorkDudtUpdate(siteGridTableUpdate);
        }

        if (! "".equals(contractPlanUpdate.getWkplCmplDt()) && contractPlanUpdate.getWkplCmplDt() != null ) {
            commonService.checkPrjSiteProcess(contractPlanUpdate.getSiteId(), "SP002");
        }

        return true;
    }


    public boolean mobGridUpdate(@Valid SiteGridUpdate siteGridUpdate) throws Exception {
        // 로직처리
        // 그리드신청 수정
        SiteGridTableUpdate applSiteGridUpdate = new SiteGridTableUpdate();
        applSiteGridUpdate.setSiteId(siteGridUpdate.getSiteId());
        applSiteGridUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());
        applSiteGridUpdate.setWorkGubn("1");
        applSiteGridUpdate.setWorkDudt(siteGridUpdate.getApplWorkDudt());
        applSiteGridUpdate.setWorkCmdt(siteGridUpdate.getApplWorkCmdt());
        applSiteGridUpdate.setAprvCmp(siteGridUpdate.getApplAprvCmp());

        int applCnt = psMapper.siteGridUpdate(applSiteGridUpdate);
        if(applCnt == 0){
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

        int apprCnt = psMapper.siteGridUpdate(apprSiteGridUpdate);
        if(apprCnt == 0){
            throw new Exception();
        }

        // 그리드신청 특이사항
        NoteUpdate applNoteUpdate = new NoteUpdate();
        applNoteUpdate.setSiteId(siteGridUpdate.getSiteId());
        applNoteUpdate.setNoteGubn("4"); //임시 코드
        applNoteUpdate.setNote(siteGridUpdate.getApplNote());
        applNoteUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());

        int applNote = psMapper.noteUpdate(applNoteUpdate);
        if(applNote == 0){
            throw new Exception();
        }

        // 그리드승인 특이사항
        NoteUpdate apprNoteUpdate = new NoteUpdate();
        apprNoteUpdate.setSiteId(siteGridUpdate.getSiteId());
        apprNoteUpdate.setNoteGubn("5"); //임시 코드
        apprNoteUpdate.setNote(siteGridUpdate.getApprNote());
        apprNoteUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());

        int apprNote = psMapper.noteUpdate(apprNoteUpdate);
        if(apprNote == 0){
            throw new Exception();
        }

        //신청
        SiteFileVO fileIdCd3FileVO = new SiteFileVO();
        fileIdCd3FileVO.setSiteId(siteGridUpdate.getSiteId());
        fileIdCd3FileVO.setFileSrcGubn("3");
        List<SiteFileVO> fileIdCd3FileList = psMapper.siteFileList(fileIdCd3FileVO);
        if(! ObjectUtils.isEmpty(siteGridUpdate.getFileIdCd3())){
            commonService.insertSiteFile(
                    siteGridUpdate.getSiteId(),
                    siteGridUpdate.getFileIdCd3(),
                    "3",
                    siteGridUpdate.getLastChngUseq(),
                    fileIdCd3FileList);
        }

        //승인
        SiteFileVO fileIdCd4FileVO = new SiteFileVO();
        fileIdCd4FileVO.setSiteId(siteGridUpdate.getSiteId());
        fileIdCd4FileVO.setFileSrcGubn("4");

        List<SiteFileVO> fileIdCd4FileList = psMapper.siteFileList(fileIdCd4FileVO);
        if(! ObjectUtils.isEmpty(siteGridUpdate.getFileIdCd4())){
            commonService.insertSiteFile(
                    siteGridUpdate.getSiteId(),
                    siteGridUpdate.getFileIdCd4(),
                    "4",
                    siteGridUpdate.getLastChngUseq(),
                    fileIdCd4FileList);
        }

        if (! "".equals(siteGridUpdate.getApprWorkCmdt ()) && siteGridUpdate.getApprWorkCmdt() != null ) {
            commonService.checkPrjSiteProcess(siteGridUpdate.getSiteId(), "SP004");
        }

        return true;
    }

    public boolean mobPurchaseUpdate(@Valid SiteGridUpdate siteGridUpdate) throws Exception {
        // 자재구매 수정
        SiteGridTableUpdate mpSiteGridUpdate = new SiteGridTableUpdate();
        mpSiteGridUpdate.setSiteId(siteGridUpdate.getSiteId());
        mpSiteGridUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());
        mpSiteGridUpdate.setWorkGubn("3");
        mpSiteGridUpdate.setWorkDudt(siteGridUpdate.getMpWorkDudt());
        mpSiteGridUpdate.setWorkCmdt(siteGridUpdate.getMpWorkCmdt());

        int mpCnt = psMapper.siteGridUpdate(mpSiteGridUpdate);
        if(mpCnt == 0){
            throw new Exception();
        }

        // 자재구매 특이사항
        NoteUpdate mpNoteUpdate = new NoteUpdate();
        mpNoteUpdate.setSiteId(siteGridUpdate.getSiteId());
        mpNoteUpdate.setNoteGubn("6"); //임시 코드
        mpNoteUpdate.setNote(siteGridUpdate.getMpNote());
        mpNoteUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());

        int mpNote = psMapper.noteUpdate(mpNoteUpdate);
        if(mpNote == 0){
            throw new Exception();
        }

        //자재구매
        SiteFileVO fileIdCd5FileVO = new SiteFileVO();
        fileIdCd5FileVO.setSiteId(siteGridUpdate.getSiteId());
        fileIdCd5FileVO.setFileSrcGubn("5");

        List<SiteFileVO> fileIdCd5FileList = psMapper.siteFileList(fileIdCd5FileVO);
        if(! ObjectUtils.isEmpty(siteGridUpdate.getFileIdCd5())){
            commonService.insertSiteFile(
                    siteGridUpdate.getSiteId(),
                    siteGridUpdate.getFileIdCd5(),
                    "5",
                    siteGridUpdate.getLastChngUseq(),
                    fileIdCd5FileList);
        }

        if (! "".equals(siteGridUpdate.getMpWorkCmdt()) && siteGridUpdate.getMpWorkCmdt() != null ) {
            commonService.checkPrjSiteProcess(siteGridUpdate.getSiteId(), "SP005");
        }

        return true;

    }

    public boolean mobInstallUpdate(@Valid SiteGridUpdate siteGridUpdate) throws Exception {

        // 설치 수정
        SiteGridTableUpdate insSiteGridUpdate = new SiteGridTableUpdate();
        insSiteGridUpdate.setSiteId(siteGridUpdate.getSiteId());
        insSiteGridUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());
        insSiteGridUpdate.setWorkGubn("4");
        insSiteGridUpdate.setWorkDudt(siteGridUpdate.getInsWorkDudt());
        insSiteGridUpdate.setWorkCmdt(siteGridUpdate.getInsWorkCmdt());

        int insCnt = psMapper.siteGridUpdate(insSiteGridUpdate);
        if(insCnt == 0){
            throw new Exception();
        }

        // 설치 특이사항
        NoteUpdate insNoteUpdate = new NoteUpdate();
        insNoteUpdate.setSiteId(siteGridUpdate.getSiteId());
        insNoteUpdate.setNoteGubn("7"); //임시 코드
        insNoteUpdate.setNote(siteGridUpdate.getInsNote());
        insNoteUpdate.setLastChngUseq(siteGridUpdate.getLastChngUseq());

        int insNote = psMapper.noteUpdate(insNoteUpdate);
        if(insNote == 0){
            throw new Exception();
        }

        //설치
        SiteFileVO fileIdCd6FileVO = new SiteFileVO();
        fileIdCd6FileVO.setSiteId(siteGridUpdate.getSiteId());
        fileIdCd6FileVO.setFileSrcGubn("6");

        List<SiteFileVO> fileIdCd6FileList = psMapper.siteFileList(fileIdCd6FileVO);
        if(! ObjectUtils.isEmpty(siteGridUpdate.getFileIdCd6())){
            commonService.insertSiteFile(
                    siteGridUpdate.getSiteId(),
                    siteGridUpdate.getFileIdCd6(),
                    "6",
                    siteGridUpdate.getLastChngUseq(),
                    fileIdCd6FileList);
        }

        if (! "".equals(siteGridUpdate.getInsWorkCmdt()) && siteGridUpdate.getInsWorkCmdt() != null ) {
            commonService.checkPrjSiteProcess(siteGridUpdate.getSiteId(), "SP006");
        }

        return true;

    }

    public boolean mobInspUpdate(@Valid InspMngUpdate inspMngUpdate) throws Exception {

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

        if(StringUtils.isEmpty(inspMngUpdate.getChkCmplDt())){
            nowDt = format.format(dt);
        }else{
            nowDt = format.format(dateFormat.parse(inspMngUpdate.getChkCmplDt()));
        }

        if("N".equals(inspMngUpdate.getChkPassYn())){
            if(!StringUtils.isEmpty(inspMngUpdate.getChkHist())){
                siteInspUpdate.setChkHist(inspMngUpdate.getChkHist()+"/ ("+nowDt+") "+inspMngUpdate.getChkFailRsn());
            }else{
                siteInspUpdate.setChkHist("("+nowDt+") "+inspMngUpdate.getChkFailRsn());
            }

            siteInspUpdate.setChkCmplDt(null);

            SiteGridVO siteGridVO = new SiteGridVO();
            siteGridVO.setSiteId(inspMngUpdate.getSiteId());
            Map map = prjSiteService.gridList(siteGridVO);
            List<SiteGridVO> siteGridList =(List<SiteGridVO>)map.get("mainData");

            // 설치 수정
            SiteGridTableUpdate insSiteGridUpdate = new SiteGridTableUpdate();
            insSiteGridUpdate.setSiteId(inspMngUpdate.getSiteId());
            insSiteGridUpdate.setLastChngUseq(inspMngUpdate.getLastChngUseq());
            insSiteGridUpdate.setWorkGubn("4");
            insSiteGridUpdate.setWorkDudt(siteGridList.get(0).getInsWorkDudt());
            insSiteGridUpdate.setWorkCmdt(null);

            int insCnt = psMapper.siteGridUpdate(insSiteGridUpdate);
            commonService.checkPrjSiteProcess(inspMngUpdate.getSiteId(), "SP006");
        }else{
            siteInspUpdate.setChkHist(inspMngUpdate.getChkHist());

            commonService.checkPrjSiteProcess(inspMngUpdate.getSiteId(), "SP007");
        }
        // 로직처리
        int inspCnt = psMapper.inspUpdate(siteInspUpdate);

        // inspection 특이사항
        NoteUpdate inspNoteUpdate = new NoteUpdate();
        inspNoteUpdate.setSiteId(inspMngUpdate.getSiteId());
        inspNoteUpdate.setNoteGubn("8"); //임시 코드
        inspNoteUpdate.setNote(inspMngUpdate.getInspNote());
        inspNoteUpdate.setLastChngUseq(inspMngUpdate.getLastChngUseq());

        int inspNoteCnt = psMapper.noteUpdate(inspNoteUpdate);



        return true;
    }

    public boolean mobMngUpdate(@Valid InspMngUpdate inspMngUpdate) throws Exception {

        SiteMngUpdate siteMngUpdate = new SiteMngUpdate();
        siteMngUpdate.setSiteId(inspMngUpdate.getSiteId());
        siteMngUpdate.setLastChngUseq(inspMngUpdate.getLastChngUseq());
        siteMngUpdate.setMngStrtDt(inspMngUpdate.getMngStrtDt());

        // 로직처리
        int mngCnt = psMapper.mngUpdate(siteMngUpdate);

        // 운영 특이사항
        NoteUpdate mngNoteUpdate = new NoteUpdate();
        mngNoteUpdate.setSiteId(inspMngUpdate.getSiteId());
        mngNoteUpdate.setNoteGubn("9"); //임시 코드
        mngNoteUpdate.setNote(inspMngUpdate.getMngNote());
        mngNoteUpdate.setLastChngUseq(inspMngUpdate.getLastChngUseq());

        int mngNoteCnt = psMapper.noteUpdate(mngNoteUpdate);

        PrjSiteUserVO prjSiteUserVO004 = new PrjSiteUserVO();
        prjSiteUserVO004.setSiteId(inspMngUpdate.getSiteId());
        prjSiteUserVO004.setSiteUlvlCd("ACN004");

        List<PrjSiteUserVO> siteUser004 = psMapper.siteUser(prjSiteUserVO004);
        if(siteUser004.size() > 0 ){
            // 사이트별 운영담당자 수정
            ContractPlanUpdate instPsnUpdate = new ContractPlanUpdate();
            instPsnUpdate.setLastChngUseq(inspMngUpdate.getLastChngUseq());
            instPsnUpdate.setUserSeq(inspMngUpdate.getMngUserSeq());
            instPsnUpdate.setSiteId(inspMngUpdate.getSiteId());
            instPsnUpdate.setSiteUlvlCd("ACN004");

            if("N".equals(inspMngUpdate.getChkPassYn())){
                if(!"".equals(inspMngUpdate.getMngUserSeq()) && inspMngUpdate.getMngUserSeq() != null ){
                    int instPsnUpdateCnt = psMapper.prjSiteUserUpdate(instPsnUpdate);
                }
            }else{
                int instPsnUpdateCnt = psMapper.prjSiteUserUpdate(instPsnUpdate);
            }

        }else{
            if(!StringUtils.isEmpty(inspMngUpdate.getMngUserSeq())){
                // 사이트별 운영담당자 등록
                ContractPlanInsert mngUserInsert = new ContractPlanInsert();
                mngUserInsert.setLastChngUseq(inspMngUpdate.getLastChngUseq());
                mngUserInsert.setUserSeq(inspMngUpdate.getMngUserSeq());
                mngUserInsert.setSiteId(inspMngUpdate.getSiteId());
                mngUserInsert.setSiteUlvlCd("ACN004");
                if("N".equals(inspMngUpdate.getChkPassYn())){
                    if(!"".equals(inspMngUpdate.getMngUserSeq()) && inspMngUpdate.getMngUserSeq() != null ){
                        int instPsInsert = psMapper.prjSiteUserInsert(mngUserInsert);
                    }
                }else{
                    int instPsInsert = psMapper.prjSiteUserInsert(mngUserInsert);
                }

            }
        }
        //운영
        if(! ObjectUtils.isEmpty(inspMngUpdate.getFileIdCd7())) {
            SiteFileVO fileIdCd7FileVO = new SiteFileVO();
            fileIdCd7FileVO.setSiteId(inspMngUpdate.getSiteId());
            fileIdCd7FileVO.setFileSrcGubn("7");

            List<SiteFileVO> fileIdCd7List = psMapper.siteFileList(fileIdCd7FileVO);

            commonService.insertSiteFile(
                    inspMngUpdate.getSiteId(),
                    inspMngUpdate.getFileIdCd7(),
                    "7",
                    inspMngUpdate.getLastChngUseq(),
                    fileIdCd7List);
        }

        if (inspMngUpdate.getMngStrtDt() != null && ! "".equals(inspMngUpdate.getMngStrtDt())) {
            commonService.checkPrjSiteProcess(inspMngUpdate.getSiteId(), "SP008");
        }

        return true;
    }

    public Map mobPrjSites(@Valid PrjSiteVO prjSiteVO) throws Exception {
        HashMap map = new HashMap();
        Integer pagePer = 10;
        Integer start = (prjSiteVO.getPage() -1) * pagePer;
        prjSiteVO.setPageStart(start);
        prjSiteVO.setPagePer(pagePer);

        PageVo pageVo = mapper.mobPrjSiteCnt(prjSiteVO);
        if (pageVo == null || pageVo.getTotalCnt() == 0) {
            pageVo.setTotalPage(1);
        } else {
            pageVo.setTotalPage((int)Math.ceil((double)pageVo.getTotalCnt() / 10));
        }

        pageVo.setPage(prjSiteVO.getPage());
        map.put("pagination", pageVo);

        List<MobilePrjSiteVo> mobPrjSiteVo = mapper.mobPrjSiteList(prjSiteVO);
        for (int i = 0 ; i < mobPrjSiteVo.size() ; i++) {
            if ("".equals(mobPrjSiteVo.get(i).getUserSeq()) || mobPrjSiteVo.get(i).getUserSeq() == null) {
                mobPrjSiteVo.get(i).setUserSeq("");
            }
            if ("".equals(mobPrjSiteVo.get(i).getUserId()) || mobPrjSiteVo.get(i).getUserId() == null) {
                mobPrjSiteVo.get(i).setUserId("");
            }
            if ("".equals(mobPrjSiteVo.get(i).getUserName()) || mobPrjSiteVo.get(i).getUserName() == null) {
                mobPrjSiteVo.get(i).setUserName("");
            }
            if ("".equals(mobPrjSiteVo.get(i).getAddr()) || mobPrjSiteVo.get(i).getAddr() == null) {
                mobPrjSiteVo.get(i).setAddr("");
            }
            if ("".equals(mobPrjSiteVo.get(i).getProcess()) || mobPrjSiteVo.get(i).getProcess() == null) {
                mobPrjSiteVo.get(i).setProcess("");
            }
        }

        map.put("prjSiteList", mobPrjSiteVo);

        return map;
    }

    public PrjSitesVO mobPrjSiteProcess (@Valid PrjSiteVO prjSiteVO) throws Exception {
        List<PrjSitesVO> prjSitesVo = psMapper.prjSiteList(prjSiteVO);

        if (prjSitesVo.size() > 0) {
            return prjSitesVo.get(0);
        } else {
            return new PrjSitesVO();
        }
    }

    public Map mobSiteContract(@Valid ContractPlanVO contractPlanVO) throws Exception {
        HashMap map = new HashMap();

        List<ContractPlanVO> contractPlanList = psMapper.contractPlan(contractPlanVO);
        if(contractPlanList.size() > 0){
            MobileContractVo contractVo = new MobileContractVo();
            contractVo.setSiteId(contractPlanList.get(0).getSiteId());
            contractVo.setUserSeq(contractPlanList.get(0).getUserSeq());
            contractVo.setUserId(contractPlanList.get(0).getUserId());
            contractVo.setUserName(contractPlanList.get(0).getUserName());
            contractVo.setEmail(contractPlanList.get(0).getEmail());
            contractVo.setTelNo(contractPlanList.get(0).getTelNo());
            contractVo.setRegnGubn(contractPlanList.get(0).getRegnGubn());
            contractVo.setCurrUnit(contractPlanList.get(0).getCurrUnit());
            contractVo.setCnrtStrtDt(contractPlanList.get(0).getCnrtStrtDt());
            contractVo.setCnrtEndDt(contractPlanList.get(0).getCnrtEndDt());
            contractVo.setPpaUnitPrce(contractPlanList.get(0).getPpaUnitPrce());
            contractVo.setRescGubn(contractPlanList.get(0).getRescGubn());
            contractVo.setInstPsnId(contractPlanList.get(0).getInstPsnId());
            contractVo.setInstPsnSeq(contractPlanList.get(0).getInstPsnSeq());
            contractVo.setInstPsnName(contractPlanList.get(0).getInstPsnName());
            contractVo.setLatd(contractPlanList.get(0).getLatd());
            contractVo.setAddr(contractPlanList.get(0).getAddr());
            contractVo.setLgtd(contractPlanList.get(0).getLgtd());
            map.put("mainData",contractVo);
        }else{
            map.put("mainData",null);
        }
        if (contractPlanVO.getSiteId() == null) {
            map.put("contractFileListData","");
        } else {
            SiteFileVO siteFileVO = new SiteFileVO();
            siteFileVO.setSiteId(contractPlanVO.getSiteId());
            siteFileVO.setFileSrcGubn("1");
            List<SiteFileVO> fileList = psMapper.siteFileList(siteFileVO);

            map.put("contractFileListData", fileList);
        }


        return map;
    }

    public Map mobSitePlan(@Valid ContractPlanVO contractPlanVO) throws Exception {
        HashMap map = new HashMap();

        List<ContractPlanVO> contractPlanList = psMapper.contractPlan(contractPlanVO);
        if(contractPlanList.size() > 0){
            MobilePlanVo planVo = new MobilePlanVo();
            planVo.setSiteId(contractPlanList.get(0).getSiteId());
            planVo.setUserSeq(contractPlanList.get(0).getUserSeq());
            planVo.setModlMnftGubn(contractPlanList.get(0).getModlMnftGubn());
            planVo.setModlCapa(contractPlanList.get(0).getModlCapa());
            planVo.setInvtMnftGubn(contractPlanList.get(0).getInvtMnftGubn());
            planVo.setInvtCapa(contractPlanList.get(0).getInvtCapa());
            planVo.setBtryMnftGubn(contractPlanList.get(0).getBtryMnftGubn());
            planVo.setBtryCapa(contractPlanList.get(0).getBtryCapa());
            planVo.setComuEqmtGubn(contractPlanList.get(0).getComuEqmtGubn());
            planVo.setComuMthdGubn(contractPlanList.get(0).getComuMthdGubn());
            planVo.setApplDudt(contractPlanList.get(0).getApplDudt());
            planVo.setApprDudt(contractPlanList.get(0).getApprDudt());
            planVo.setMpDudt(contractPlanList.get(0).getMpDudt());
            planVo.setInsDudt(contractPlanList.get(0).getInsDudt());
            planVo.setPlanNote(contractPlanList.get(0).getPlanNote());
            map.put("mainData",planVo);
        }else{
            map.put("mainData",null);
        }
        if (contractPlanVO.getSiteId() == null) {
            map.put("contractFileListData","");
        } else {
            SiteFileVO siteFileVO = new SiteFileVO();
            siteFileVO.setSiteId(contractPlanVO.getSiteId());
            siteFileVO.setFileSrcGubn("2");
            List<SiteFileVO> fileList = psMapper.siteFileList(siteFileVO);

            map.put("planFileListData", fileList);
        }
        return map;
    }

    public Map mobSiteInsp(@Valid InspMngVO inspMngVO) throws Exception {
        HashMap map = new HashMap();

        CmnUserVO cmnUserVO = new CmnUserVO();
        String[] userLvCdList = {"ACN006","ACN002"};    // invoice, DE Operator
        cmnUserVO.setUserLvlCdList(userLvCdList);
        List<CmnUserVO> userList = cmnUserMapper.userList(cmnUserVO);

        map.put("invoiceUserData", userList);

        List<InspMngVO> inspMngList = psMapper.inspMng(inspMngVO);

        if(inspMngList.size() > 0) {
            MobileInspVO inspVo = new MobileInspVO();
            inspVo.setSiteId(inspMngList.get(0).getSiteId());
            inspVo.setInspUserSeq(inspMngList.get(0).getInspUserSeq());
            inspVo.setInspUserId(inspMngList.get(0).getInspUserId());
            inspVo.setInspUserName(inspMngList.get(0).getInspUserName());
            inspVo.setInspEmail(inspMngList.get(0).getInspEmail());
            inspVo.setChkPassYn(inspMngList.get(0).getChkPassYn());
            inspVo.setChkCmplDt(inspMngList.get(0).getChkCmplDt());
            inspVo.setChkFailRsn(inspMngList.get(0).getChkFailRsn());
            inspVo.setChkHist(inspMngList.get(0).getChkHist());
            inspVo.setInspNote(inspMngList.get(0).getInspNote());

            map.put("mainData",inspVo);

        } else {
            map.put("mainData",null);
        }

        SiteFileVO siteFileVO = new SiteFileVO();
        siteFileVO.setSiteId(inspMngVO.getSiteId());

        List<SiteFileVO> siteFileList = psMapper.siteFileList(siteFileVO);
        map.put("siteFileList", siteFileList);


        return map;
    }

    public Map mobSiteMng(@Valid InspMngVO inspMngVO) throws Exception {
        HashMap map = new HashMap();

        List<InspMngVO> inspMngList = psMapper.inspMng(inspMngVO);

        if(inspMngList.size() > 0) {
            MobileMngVO mngVo = new MobileMngVO();
            mngVo.setSiteId(inspMngList.get(0).getSiteId());
            mngVo.setMngUserSeq(inspMngList.get(0).getMngUserSeq());
            mngVo.setMngUserName(inspMngList.get(0).getMngUserName());
            mngVo.setMngUserId(inspMngList.get(0).getMngUserId());
            mngVo.setMngEmail(inspMngList.get(0).getMngEmail());
            mngVo.setMngStrtDt(inspMngList.get(0).getMngStrtDt());
            mngVo.setMngNote(inspMngList.get(0).getMngNote());


            map.put("mainData",mngVo);

        } else {
            map.put("mainData",null);
        }

        SiteFileVO fileIdCd7VO = new SiteFileVO();
        fileIdCd7VO.setSiteId(inspMngVO.getSiteId());
        fileIdCd7VO.setFileSrcGubn("7");

        List<SiteFileVO> fileIdCd7List = psMapper.siteFileList(fileIdCd7VO);
        map.put("mngFileList", fileIdCd7List);

        return map;
    }
}
