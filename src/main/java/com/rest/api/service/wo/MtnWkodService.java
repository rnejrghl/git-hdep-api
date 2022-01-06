package com.rest.api.service.wo;


import com.rest.api.advice.exception.CAuthenticationEntryPointException;
import com.rest.api.advice.exception.CCompletionException;
import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.config.constant.ExcelConstant;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.common.CommonVO;
import com.rest.api.model.common.NoticeVO;
import com.rest.api.model.common.WoNoticeVO;
import com.rest.api.model.pp.PrjSiteVO;
import com.rest.api.model.pp.PrjSitesVO;
import com.rest.api.model.pp.SiteFileInsert;
import com.rest.api.model.pp.SiteFileVO;
import com.rest.api.model.security.SecurityVO;
import com.rest.api.model.wo.*;
import com.rest.api.service.common.CommonMapper;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.pp.PrjSiteMapper;
import com.rest.api.service.security.SecurityMapper;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;
import org.springframework.util.ObjectUtils;
import org.springframework.util.StringUtils;

import javax.servlet.http.HttpServletRequest;
import javax.validation.Valid;
import java.text.SimpleDateFormat;
import java.util.*;


@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class MtnWkodService {


    @Autowired
    private MtnWkodMapper mapper;

    @Autowired
    private CommonMapper commonmapper;

    @Autowired
    private PrjSiteMapper prjSitemapper;

    @Autowired
    private CommonService commonService;

    @Autowired
    private SecurityMapper securityMapper;

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    public Map workOrders(@Valid MthWkodVO mthWkodVO) throws Exception {


        String[]  sites  = jwtTokenProvider.getSiteAuth();
        MthWkodVO mthWkodCntVO = new MthWkodVO();
        String  userSeq = jwtTokenProvider.resolveTokenUser();
        if(sites.length > 0){
            mthWkodCntVO.setSiteIds(sites);
            mthWkodVO.setSiteIds(sites);
        }
        mthWkodCntVO.setSiteUserSeq(userSeq);
        mthWkodVO.setSiteUserSeq(userSeq);
        
        mthWkodCntVO.setMobile(mthWkodVO.isMobile());
        
        if(mthWkodVO.getWorkOrdUserName() != null) mthWkodCntVO.setWorkOrdUserName(mthWkodVO.getWorkOrdUserName());
        if(mthWkodVO.getWorkOrdId() != null) mthWkodCntVO.setWorkOrdId(mthWkodVO.getWorkOrdId());
        if(mthWkodVO.getSiteUserName() != null) mthWkodCntVO.setSiteUserName(mthWkodVO.getSiteUserName());
        if(mthWkodVO.getSiteId() != null) mthWkodCntVO.setSiteId(mthWkodVO.getSiteId());
        if(mthWkodVO.getWorkOrdStat() != null) mthWkodCntVO.setWorkOrdStat(mthWkodVO.getWorkOrdStat());

        Integer pagePer = 10;
        Integer start = (mthWkodVO.getPage() -1) * pagePer;
        mthWkodVO.setPageStart(start);
        mthWkodVO.setPagePer(pagePer);

        HashMap map = new HashMap();
        List<MthWkodCntVO> workOrderCnt = mapper.workOrderCnt(mthWkodCntVO);
        MthWkodCntVO workOrderPage = mapper.workOrderPage(mthWkodCntVO);
        workOrderPage.setPage(mthWkodVO.getPage());
        List<MthWkodVO> workOrderList = mapper.workOrderList(mthWkodVO);

        map.put("workOrderCnt",workOrderCnt);
        map.put("workOrderList",workOrderList);
        map.put("workOrderPage",workOrderPage);
        map.put("workOrderListCnt",workOrderPage.getTotalCnt()); //

        CommonVO commonVO= new CommonVO();
        String[] grpCds = {"CDK-00009","CDK-00010"};
        commonVO.setGrpCds(grpCds);
        List<CommonVO> codeList = commonmapper.codeList(commonVO);
        map.put("codeData",codeList);

        List<WoNoticeVO> notice = commonmapper.woNotice();
        map.put("noticeData",notice);

        WorkOrderPrjSiteVO workOrderPrjSiteVO = new WorkOrderPrjSiteVO();

        if(sites.length > 0){
            workOrderPrjSiteVO.setSiteIds(sites);
        }

        workOrderPrjSiteVO.setUserSeq(userSeq);

        List<WorkOrderPrjSiteVO> workOrderPrjSiteList = mapper.workOrderprjSiteList(workOrderPrjSiteVO);
        map.put("siteListData",workOrderPrjSiteList);


        return map;
    }

    public Map<String, Object> workOrdersExcel(@Valid MthWkodVO mthWkodVO) throws Exception {
        SecurityVO securityVO =  securityMapper.userInfo(mthWkodVO.getUser());
        String[] sites = commonService.siteAuthList(securityVO.getUserSeq());
        mthWkodVO.setSiteUserSeq(securityVO.getUserSeq());
        if(sites.length > 0){
            mthWkodVO.setSiteIds(sites);
        }

        List<MthWkodVO> workOrderList = mapper.workOrderListExcel(mthWkodVO);
        if(workOrderList.size() == 0){
            throw new CResourceNotExistException();
        }

        List<List<String>> bodyList = new ArrayList<List<String>>();

        for(int i  = 0 ; i < workOrderList.size() ; i++){
            List<String> body = new ArrayList<String>();
            body.add(workOrderList.get(i).getPublDtti());
            body.add(workOrderList.get(i).getWorkOrdId());
            body.add(workOrderList.get(i).getWorkOrdTyp());
            body.add(workOrderList.get(i).getWorkOrdStat());
            body.add(workOrderList.get(i).getSiteId());
            body.add(workOrderList.get(i).getSiteUserName());
            body.add(workOrderList.get(i).getWorkOrdUserName());
            body.add(workOrderList.get(i).getWorkOrdUserTelNo());
            body.add(workOrderList.get(i).getCmplReqDt());
            body.add(workOrderList.get(i).getCnfmDt());
            body.add(workOrderList.get(i).getPrcsCmplDt());
             bodyList.add(body);

        }

        Map<String, Object> map = new HashMap<>();
        map.put(ExcelConstant.FILE_NAME, "work_orders_excel");
        map.put(ExcelConstant.HEAD, Arrays.asList("발행일자", "Work Order 번호", "Work Order 타입","Work Order 상태","사이트ID","사용자명","담당자명","담당자전화번호","완료요청일","확인일","완료일"));
        map.put(ExcelConstant.BODY,bodyList);
        return map;

    }


    public Map workOrder(@Valid MthWkodVO mthWkodVO) throws Exception {

        List<CmnNotiVO> cmnNotiList = mapper.cmnNotiList();

        HashMap map = new HashMap();
        LinkedHashMap wt0003map = new LinkedHashMap();
        MthWkodHdtlVO mthWkodHdtlVO = new MthWkodHdtlVO();
        mthWkodHdtlVO.setSiteId(mthWkodVO.getSiteId());
        mthWkodHdtlVO.setUserSeq(mthWkodVO.getWorkOrdUserSeq());
        mthWkodHdtlVO.setWorkOrdId(mthWkodVO.getWorkOrdId());

        List<MthWkodHdtlVO> wkodHdtl = mapper.wkodHdtl(mthWkodHdtlVO);

        MthWkodFileVO mthWkodFileVO = new MthWkodFileVO();
        mthWkodFileVO.setSiteId(mthWkodVO.getSiteId());
        mthWkodFileVO.setUserSeq(mthWkodVO.getWorkOrdUserSeq());
        mthWkodFileVO.setWorkOrdId(mthWkodVO.getWorkOrdId());
        List<MthWkodFileVO> wkodFile = mapper.wkodFile(mthWkodFileVO);

        List<MthWkodVO> workOrder = mapper.workOrder(mthWkodVO);
        /*
        if(workOrder.size() > 0){

            if("WT0003".equals(workOrder.get(0).getWorkOrdTyp())){
                List<WT0003VO> wt0003List = mapper.workOrderWT0003();
                List<children> wt0003CjiList = mapper.workOrderWT0003children();
                WT0003VO  batteries = new WT0003VO();
                WT0003VO  inverters = new WT0003VO();
                WT0003VO  panels = new WT0003VO();
                WT0003VO  communications = new WT0003VO();
                WT0003VO  monitoring = new WT0003VO();

                List<children> batteriesSub = new ArrayList<>();
                List<children> invertersSub = new ArrayList<>();
                List<children> panelsSub = new ArrayList<>();
                List<children> communicationsSub = new ArrayList<>();
                List<children> monitoringSub = new ArrayList<>();


                for(int i = 0 ; i < wt0003List.size(); i++){
                      if("WORK01".equals(wt0003List.get(i).getUpprCd())){

                          for(int j = 0 ;  j < wt0003CjiList.size();  j++){

                              if(wt0003List.get(i).getUpprCd().equals(wt0003CjiList.get(j).getUpprCd())){
                                  batteriesSub.add(wt0003CjiList.get(j));
                              }
                          }

                          batteries.setUpprCd(wt0003List.get(i).getUpprCd());
                          batteries.setNameEn(wt0003List.get(i).getNameEn());
                          batteries.setNameKo(wt0003List.get(i).getNameKo());
                          batteries.setChildren(batteriesSub);
                          wt0003map.put("batteries",batteries);
                      }
                    else if("WORK02".equals(wt0003List.get(i).getUpprCd())){

                        for(int j = 0 ;  j < wt0003CjiList.size();  j++){

                            if(wt0003List.get(i).getUpprCd().equals(wt0003CjiList.get(j).getUpprCd())){
                                invertersSub.add(wt0003CjiList.get(j));
                            }
                        }

                        inverters.setUpprCd(wt0003List.get(i).getUpprCd());
                        inverters.setNameEn(wt0003List.get(i).getNameEn());
                        inverters.setNameKo(wt0003List.get(i).getNameKo());
                        inverters.setChildren(invertersSub);
                        wt0003map.put("inverters",inverters);
                    }
                   else if("WORK03".equals(wt0003List.get(i).getUpprCd())){

                        for(int j = 0 ;  j < wt0003CjiList.size();  j++){

                            if(wt0003List.get(i).getUpprCd().equals(wt0003CjiList.get(j).getUpprCd())){
                                panelsSub.add(wt0003CjiList.get(j));
                            }
                        }

                        panels.setUpprCd(wt0003List.get(i).getUpprCd());
                        panels.setNameEn(wt0003List.get(i).getNameEn());
                        panels.setNameKo(wt0003List.get(i).getNameKo());
                        panels.setChildren(panelsSub);
                        wt0003map.put("panels",panels);
                    }
                   else if("WORK04".equals(wt0003List.get(i).getUpprCd())){

                        for(int j = 0 ;  j < wt0003CjiList.size();  j++){

                            if(wt0003List.get(i).getUpprCd().equals(wt0003CjiList.get(j).getUpprCd())){
                                communicationsSub.add(wt0003CjiList.get(j));
                            }
                        }

                        communications.setUpprCd(wt0003List.get(i).getUpprCd());
                        communications.setNameEn(wt0003List.get(i).getNameEn());
                        communications.setNameKo(wt0003List.get(i).getNameKo());
                        communications.setChildren(communicationsSub);
                        wt0003map.put("communications",communications);
                    }
                    else if("WORK05".equals(wt0003List.get(i).getUpprCd())){

                        for(int j = 0 ;  j < wt0003CjiList.size();  j++){

                            if(wt0003List.get(i).getUpprCd().equals(wt0003CjiList.get(j).getUpprCd())){
                                monitoringSub.add(wt0003CjiList.get(j));
                            }
                        }

                        monitoring.setUpprCd(wt0003List.get(i).getUpprCd());
                        monitoring.setNameEn(wt0003List.get(i).getNameEn());
                        monitoring.setNameKo(wt0003List.get(i).getNameKo());
                        monitoring.setChildren(monitoringSub);
                        wt0003map.put("monitoring",monitoring);
                    }
                }
            }
        }

        if("WT0003".equals(workOrder.get(0).getWorkOrdTyp())){
            map.put("wkodHdtlData",wt0003map);
        }else{
            map.put("wkodHdtlData",wkodHdtl);
        }
        */
        map.put("wkodHdtlData",wkodHdtl);


        map.put("wkodFileData",wkodFile);
        if(workOrder.size() > 0 ){
            map.put("workOrderData",workOrder.get(0));
        }else{
            map.put("workOrderData",null);
        }

        //map.put("cmnNotiData",cmnNotiList);

        return map;
    }
    public Map workOrderInsert(@Valid WkodInsert wkodInsert ) throws Exception {

        HashMap map = new HashMap();

        String  userSeq = jwtTokenProvider.resolveTokenUser();
        wkodInsert.setLastChngUseq(userSeq);

        MthWkodInsert mthWkodInsert = new MthWkodInsert();
        mthWkodInsert.setSiteId(wkodInsert.getSiteId());
        mthWkodInsert.setWorkOrdTyp(wkodInsert.getWorkOrdTyp());
        mthWkodInsert.setUserSeq(wkodInsert.getUserSeq());

        if ("".equals(wkodInsert.getCmplReqDt()) || wkodInsert.getCmplReqDt() == null) {
            Date date = new Date();
            SimpleDateFormat sdformat = new SimpleDateFormat("yyyyMMdd");

            Calendar cal = Calendar.getInstance();
            cal.setTime(date);
            cal.add(Calendar.DATE, 3);

            mthWkodInsert.setCmplReqDt(sdformat.format(cal.getTime()));
        } else {
            mthWkodInsert.setCmplReqDt(wkodInsert.getCmplReqDt());
        }

        mthWkodInsert.setSmsCntn(wkodInsert.getSmsCntn());
        mthWkodInsert.setMailCntn(wkodInsert.getMailCntn());
        mthWkodInsert.setWorkOrdPublGubn(wkodInsert.getWorkOrdPublGubn());
        mthWkodInsert.setRegnGubn(wkodInsert.getRegnGubn());
        mthWkodInsert.setLastChngUseq(userSeq);
        int workOrderInsertCnt = mapper.workOrderInsert(mthWkodInsert);
        if(workOrderInsertCnt == 0){
            throw new Exception();
        }
        wkodInsert.setWorkOrdId(mthWkodInsert.getWorkOrdId());
        map.put("workOrdId",mthWkodInsert.getWorkOrdId());

        if(!"".equals(wkodInsert.getFileId())){

            MthWkodFileInsert mfi = new MthWkodFileInsert();
            mfi.setFileId(wkodInsert.getFileId());
            mfi.setLastChngUseq(userSeq);
            mfi.setSiteId(wkodInsert.getSiteId());
            mfi.setUserSeq(wkodInsert.getUserSeq());
            mfi.setWorkOrdId(wkodInsert.getWorkOrdId());
            mapper.wkodFileInsert(mfi);
        }

        return map;
    }
    public Map workOrderUnPubl(@Valid WkodUnPublInsert wkodUnPublInsert ) throws Exception {

        HashMap map = new HashMap();

        String  userSeq = jwtTokenProvider.resolveTokenUser();
        wkodUnPublInsert.setLastChngUseq(userSeq);

        MthWkodInsert mthWkodInsert = new MthWkodInsert();
        mthWkodInsert.setSiteId(wkodUnPublInsert.getSiteId());
        mthWkodInsert.setWorkOrdTyp(wkodUnPublInsert.getWorkOrdTyp());
        mthWkodInsert.setUserSeq(wkodUnPublInsert.getUserSeq());
        mthWkodInsert.setCmplReqDt(wkodUnPublInsert.getCmplReqDt());
        mthWkodInsert.setSmsCntn(wkodUnPublInsert.getSmsCntn());
        mthWkodInsert.setMailCntn(wkodUnPublInsert.getMailCntn());
        mthWkodInsert.setWorkOrdPublGubn("B");
        mthWkodInsert.setRegnGubn(wkodUnPublInsert.getRegnGubn());
        mthWkodInsert.setLastChngUseq(userSeq);

        int workOrderInsertCnt = mapper.workOrderInsert(mthWkodInsert);
        if(workOrderInsertCnt == 0){
            throw new Exception();
        }
        wkodUnPublInsert.setWorkOrdId(mthWkodInsert.getWorkOrdId());
        map.put("workOrdId",mthWkodInsert.getWorkOrdId());

        MthWkodHdtlInsert mthWkodHdtlInsert = new MthWkodHdtlInsert();

        mthWkodHdtlInsert.setSiteId(wkodUnPublInsert.getSiteId());
        mthWkodHdtlInsert.setWorkOrdId(wkodUnPublInsert.getWorkOrdId());
        mthWkodHdtlInsert.setUserSeq(wkodUnPublInsert.getUserSeq());
        mthWkodHdtlInsert.setNote(wkodUnPublInsert.getNote());
        mthWkodHdtlInsert.setLastChngUseq(userSeq);

        mapper.mthWkodHdtlInsert(mthWkodHdtlInsert);

        if(!"".equals(wkodUnPublInsert.getFileId())){

            MthWkodFileInsert mfi = new MthWkodFileInsert();
            mfi.setFileId(wkodUnPublInsert.getFileId());
            mfi.setLastChngUseq(userSeq);
            mfi.setSiteId(wkodUnPublInsert.getSiteId());
            mfi.setUserSeq(wkodUnPublInsert.getUserSeq());
            mfi.setWorkOrdId(wkodUnPublInsert.getWorkOrdId());
            mapper.wkodFileInsert(mfi);
        }

        return map;
    }
    public Map workOrderWt0003Insert(@Valid WkodWt0003Insert wkodWt0003Insert, List<children> childrenList ) throws Exception {

        HashMap map = new HashMap();

        String  userSeq = jwtTokenProvider.resolveTokenUser();
        wkodWt0003Insert.setLastChngUseq(userSeq);
        MthWkodInsert mthWkodInsert = new MthWkodInsert();
        mthWkodInsert.setSiteId(wkodWt0003Insert.getSiteId());
        mthWkodInsert.setWorkOrdTyp(wkodWt0003Insert.getWorkOrdTyp());
        mthWkodInsert.setUserSeq(wkodWt0003Insert.getUserSeq());
        mthWkodInsert.setCmplReqDt(wkodWt0003Insert.getCmplReqDt());
        mthWkodInsert.setSmsCntn(wkodWt0003Insert.getSmsCntn());
        mthWkodInsert.setMailCntn(wkodWt0003Insert.getMailCntn());
        mthWkodInsert.setWorkOrdPublGubn(wkodWt0003Insert.getWorkOrdPublGubn());
        mthWkodInsert.setRegnGubn(wkodWt0003Insert.getRegnGubn());
        mthWkodInsert.setLastChngUseq(userSeq);

        int workOrderInsertCnt = mapper.workOrderInsert(mthWkodInsert);
        if(workOrderInsertCnt == 0){
            throw new Exception();
        }
        wkodWt0003Insert.setWorkOrdId(mthWkodInsert.getWorkOrdId());
        map.put("workOrdId",mthWkodInsert.getWorkOrdId());

        if(childrenList != null && childrenList.size() > 0){

                for(children childrenUpdate :childrenList){
                MthWkodHdtlInsert mthWkodHdtlInsert = new MthWkodHdtlInsert();
                mthWkodHdtlInsert.setSiteId(wkodWt0003Insert.getSiteId());
                mthWkodHdtlInsert.setUserSeq(wkodWt0003Insert.getUserSeq());
                mthWkodHdtlInsert.setWorkOrdId(wkodWt0003Insert.getWorkOrdId());
                mthWkodHdtlInsert.setJobItem(childrenUpdate.getJobItem());
                mthWkodHdtlInsert.setNote(childrenUpdate.getNote());
                mthWkodHdtlInsert.setStatGubn(childrenUpdate.getStatGubn());
                mthWkodHdtlInsert.setLastChngUseq(userSeq);

                mapper.mthWkodHdtlInsert(mthWkodHdtlInsert);
            }

        }

        if(!"".equals(wkodWt0003Insert.getFileId())){

            MthWkodFileInsert mfi = new MthWkodFileInsert();
            mfi.setFileId(wkodWt0003Insert.getFileId());
            mfi.setLastChngUseq(userSeq);
            mfi.setSiteId(wkodWt0003Insert.getSiteId());
            mfi.setUserSeq(wkodWt0003Insert.getUserSeq());
            mfi.setWorkOrdId(wkodWt0003Insert.getWorkOrdId());
            mapper.wkodFileInsert(mfi);
        }

        return map;
    }


    public boolean workOrderUpdate(@Valid WkodUpdate wkodUpdate) throws Exception {
        String  userSeq = jwtTokenProvider.resolveTokenUser();
        MthWkodHdtlUpdate mthWkodHdtlUpdate = new MthWkodHdtlUpdate();
        mthWkodHdtlUpdate.setSiteId(wkodUpdate.getSiteId());
        mthWkodHdtlUpdate.setUserSeq(wkodUpdate.getUserSeq());
        mthWkodHdtlUpdate.setWorkOrdId(wkodUpdate.getWorkOrdId());
        mthWkodHdtlUpdate.setChkSeq("1");
        mthWkodHdtlUpdate.setNote(wkodUpdate.getNote());
        mthWkodHdtlUpdate.setLastChngUseq(userSeq);
        int workOrderHdtlUpdate = mapper.workOrderHdtlUpdate(mthWkodHdtlUpdate);
        if(workOrderHdtlUpdate == 0){
            throw new Exception();
        }

        if(!"".equals(wkodUpdate.getCmplPredDt()) && !"".equals(wkodUpdate.getCnfmDt()) && !"".equals(wkodUpdate.getPrcsCmplDt())){
            wkodUpdate.setLastChngUseq(userSeq);
            if(!"".equals(wkodUpdate.getPrcsCmplDt())){
                wkodUpdate.setWorkOrdStat("WS0003");
            }else if(!"".equals(wkodUpdate.getCmplPredDt()) && "".equals(wkodUpdate.getPrcsCmplDt())){
                wkodUpdate.setWorkOrdStat("WS0002");
            }else{
                wkodUpdate.setWorkOrdStat(null);
            }


            MthWkodUpdate mthWkodUpdate = new MthWkodUpdate();
            mthWkodUpdate.setLastChngUseq(userSeq);
            mthWkodUpdate.setWorkOrdStat(wkodUpdate.getWorkOrdStat());
            mthWkodUpdate.setCmplPredDt(wkodUpdate.getCmplPredDt());
            mthWkodUpdate.setCmplReqDt(wkodUpdate.getCmplReqDt());
            mthWkodUpdate.setSiteId(wkodUpdate.getSiteId());
            mthWkodUpdate.setPrcsCmplDt(wkodUpdate.getPrcsCmplDt());
            mthWkodUpdate.setWorkOrdId(wkodUpdate.getWorkOrdId());
            mthWkodUpdate.setUserSeq(wkodUpdate.getUserSeq());
            mthWkodUpdate.setCnfmDt(wkodUpdate.getCnfmDt());


            int workOrderUpdate = mapper.workOrderUpdate(mthWkodUpdate);
            if(workOrderUpdate == 0){
                throw new Exception();
            }
        }

        MthWkodFileVO mthWkodFileVO = new MthWkodFileVO();
        mthWkodFileVO.setSiteId(wkodUpdate.getSiteId());
        mthWkodFileVO.setUserSeq(wkodUpdate.getUserSeq());
        mthWkodFileVO.setWorkOrdId(wkodUpdate.getWorkOrdId());

        List<MthWkodFileVO> mthWkodFileVOList = mapper.wkodFile(mthWkodFileVO);
        if(! ObjectUtils.isEmpty(wkodUpdate.getFileId())){
            for (String file : wkodUpdate.getFileId()) {
                boolean isOverlay = false;
                if (! mthWkodFileVOList.isEmpty()) {
                    for (int i = 0 ; i < mthWkodFileVOList.size() ; i++) {
                        if (file.equals(mthWkodFileVOList.get(i).getFileId())) {
                            isOverlay = true;
                        }
                    }
                }

                if (! isOverlay) {
                    MthWkodFileInsert mfi = new MthWkodFileInsert();
                    mfi.setFileId(file);
                    mfi.setFileSeq("1");
                    mfi.setLastChngUseq(userSeq);
                    mfi.setSiteId(wkodUpdate.getSiteId());
                    mfi.setUserSeq(wkodUpdate.getUserSeq());
                    mfi.setWorkOrdId(wkodUpdate.getWorkOrdId());
                    mapper.wkodFileInsert(mfi);
                }
            }
        }


        return true;
    }

    public boolean workOrderReject(@Valid WkodUpdate wkodUpdate) throws Exception {
        String  userSeq = jwtTokenProvider.resolveTokenUser();
        MthWkodHdtlUpdate mthWkodHdtlUpdate = new MthWkodHdtlUpdate();
        mthWkodHdtlUpdate.setSiteId(wkodUpdate.getSiteId());
        mthWkodHdtlUpdate.setUserSeq(wkodUpdate.getUserSeq());
        mthWkodHdtlUpdate.setWorkOrdId(wkodUpdate.getWorkOrdId());
        mthWkodHdtlUpdate.setChkSeq("1");
        mthWkodHdtlUpdate.setNote(wkodUpdate.getQaNote());
        mthWkodHdtlUpdate.setLastChngUseq(userSeq);

        int workOrderHdtlUpdate = mapper.workOrderRejectInsert(mthWkodHdtlUpdate);
        if(workOrderHdtlUpdate == 0){
            throw new Exception();
        }

        MthWkodUpdate mthWkodUpdate = new MthWkodUpdate();
        mthWkodUpdate.setLastChngUseq(userSeq);
        mthWkodUpdate.setWorkOrdStat("WS0002");
        mthWkodUpdate.setSiteId(wkodUpdate.getSiteId());
        mthWkodUpdate.setQaCmplDt(wkodUpdate.getQaCmplDt());
        mthWkodUpdate.setWorkOrdId(wkodUpdate.getWorkOrdId());
        mthWkodUpdate.setUserSeq(wkodUpdate.getUserSeq());

        int workOrderUpdate = mapper.workOrderUpdate(mthWkodUpdate);
        if(workOrderUpdate == 0){
            throw new Exception();
        }

        return true;
    }

     public boolean wkodHdtlInsert(WkodHdtlInsert wkodHdtlInsert) throws Exception {
         String  userSeq = jwtTokenProvider.resolveTokenUser();
         MthWkodHdtlInsert mthWkodHdtlInsert = new MthWkodHdtlInsert();
         mthWkodHdtlInsert.setSiteId(wkodHdtlInsert.getSiteId());
         mthWkodHdtlInsert.setUserSeq(wkodHdtlInsert.getUserSeq());
         mthWkodHdtlInsert.setWorkOrdId(wkodHdtlInsert.getWorkOrdId());
         mthWkodHdtlInsert.setNote(wkodHdtlInsert.getNote());
         mthWkodHdtlInsert.setLastChngUseq(userSeq);

         mapper.mthWkodHdtlInsert(mthWkodHdtlInsert);


         if(!"".equals(wkodHdtlInsert.getCmplPredDt()) && !"".equals(wkodHdtlInsert.getCnfmDt()) && !"".equals(wkodHdtlInsert.getPrcsCmplDt())){

             wkodHdtlInsert.setLastChngUseq(userSeq);
             if(!"".equals(wkodHdtlInsert.getPrcsCmplDt())){
                 wkodHdtlInsert.setWorkOrdStat("WS0003");
             }else if(!"".equals(wkodHdtlInsert.getCmplPredDt()) && "".equals(wkodHdtlInsert.getPrcsCmplDt())){
                 wkodHdtlInsert.setWorkOrdStat("WS0002");
             }else{
                 wkodHdtlInsert.setWorkOrdStat(null);
             }
             MthWkodUpdate mthWkodUpdate = new MthWkodUpdate();
             mthWkodUpdate.setLastChngUseq(wkodHdtlInsert.getLastChngUseq());
             mthWkodUpdate.setWorkOrdStat(wkodHdtlInsert.getWorkOrdStat());
             mthWkodUpdate.setCmplPredDt(wkodHdtlInsert.getCmplPredDt());
             mthWkodUpdate.setCmplReqDt(wkodHdtlInsert.getCmplReqDt());
//             mthWkodUpdate.setFileId(wkodHdtlInsert.getFileId());
             mthWkodUpdate.setSiteId(wkodHdtlInsert.getSiteId());
             mthWkodUpdate.setPrcsCmplDt(wkodHdtlInsert.getPrcsCmplDt());
             mthWkodUpdate.setWorkOrdId(wkodHdtlInsert.getWorkOrdId());
             mthWkodUpdate.setUserSeq(wkodHdtlInsert.getUserSeq());
             mthWkodUpdate.setCnfmDt(wkodHdtlInsert.getCnfmDt());

             int workOrderUpdate = mapper.workOrderUpdate(mthWkodUpdate);

             if(workOrderUpdate == 0){
                 throw new Exception();
             }
         }


         if(! ObjectUtils.isEmpty(wkodHdtlInsert.getFileId())){
             for (String file : wkodHdtlInsert.getFileId()) {
                 MthWkodFileInsert mfi = new MthWkodFileInsert();
                 mfi.setFileId(file);
                 mfi.setLastChngUseq(userSeq);
                 mfi.setSiteId(wkodHdtlInsert.getSiteId());
                 mfi.setUserSeq(wkodHdtlInsert.getUserSeq());
                 mfi.setWorkOrdId(wkodHdtlInsert.getWorkOrdId());
                 mapper.wkodFileInsert(mfi);
             }
         }

        return true;
    }

    public boolean workOrderWt0003Update(@Valid WkodWt0003Update wkodWt0003Update, List<children> childrenList) throws Exception {
        String  userSeq = jwtTokenProvider.resolveTokenUser();

        if(childrenList.size() > 0){
            for(children childrenUpdate :childrenList){
                MthWkodHdtlUpdate mthWkodHdtlUpdate = new MthWkodHdtlUpdate();

                mthWkodHdtlUpdate.setLastChngUseq(userSeq);
                mthWkodHdtlUpdate.setSiteId(wkodWt0003Update.getSiteId());
                mthWkodHdtlUpdate.setUserSeq(wkodWt0003Update.getUserSeq());
                mthWkodHdtlUpdate.setWorkOrdId(wkodWt0003Update.getWorkOrdId());
                mthWkodHdtlUpdate.setChkSeq(childrenUpdate.getChkSeq());

                mthWkodHdtlUpdate.setNote(childrenUpdate.getNote());
                mthWkodHdtlUpdate.setStatGubn(childrenUpdate.getStatGubn());
                mthWkodHdtlUpdate.setJobItem(childrenUpdate.getJobItem());
                mthWkodHdtlUpdate.setLastChngUseq(userSeq);

                int workOrderHdtlUpdate = mapper.workOrderHdtlUpdate(mthWkodHdtlUpdate);
                if(workOrderHdtlUpdate == 0){
                    throw new Exception();
                }
            }
        }



        if(!"".equals(wkodWt0003Update.getCmplPredDt()) && !"".equals(wkodWt0003Update.getCnfmDt()) && !"".equals(wkodWt0003Update.getPrcsCmplDt())){
            wkodWt0003Update.setLastChngUseq(userSeq);
            if(!"".equals(wkodWt0003Update.getPrcsCmplDt())){
                wkodWt0003Update.setWorkOrdStat("WS0003");
            }else if(!"".equals(wkodWt0003Update.getCmplPredDt()) && "".equals(wkodWt0003Update.getPrcsCmplDt())){
                wkodWt0003Update.setWorkOrdStat("WS0002");
            }else{
                wkodWt0003Update.setWorkOrdStat(null);
            }


            MthWkodUpdate mthWkodUpdate = new MthWkodUpdate();
            mthWkodUpdate.setLastChngUseq(userSeq);
            mthWkodUpdate.setWorkOrdStat(wkodWt0003Update.getWorkOrdStat());
            mthWkodUpdate.setCmplPredDt(wkodWt0003Update.getCmplPredDt());
            mthWkodUpdate.setCmplReqDt(wkodWt0003Update.getCmplReqDt());
            mthWkodUpdate.setFileId(wkodWt0003Update.getFileId());
            mthWkodUpdate.setSiteId(wkodWt0003Update.getSiteId());
            mthWkodUpdate.setPrcsCmplDt(wkodWt0003Update.getPrcsCmplDt());
            mthWkodUpdate.setWorkOrdId(wkodWt0003Update.getWorkOrdId());
            mthWkodUpdate.setUserSeq(wkodWt0003Update.getUserSeq());
            mthWkodUpdate.setCnfmDt(wkodWt0003Update.getCnfmDt());


            int workOrderUpdate = mapper.workOrderUpdate(mthWkodUpdate);
            if(workOrderUpdate == 0){
                throw new Exception();
            }
        }

        MthWkodFileVO mthWkodFileVO = new MthWkodFileVO();
        mthWkodFileVO.setSiteId(wkodWt0003Update.getSiteId());
        mthWkodFileVO.setUserSeq(wkodWt0003Update.getUserSeq());
        mthWkodFileVO.setWorkOrdId(wkodWt0003Update.getWorkOrdId());

        List<MthWkodFileVO> mthWkodFileVOList = mapper.wkodFile(mthWkodFileVO);

        if(!"".equals(wkodWt0003Update.getFileId())){

            MthWkodFileUpdate mfu = new MthWkodFileUpdate();
            mfu.setFileId(wkodWt0003Update.getFileId());
            mfu.setFileSeq("1");
            mfu.setLastChngUseq(userSeq);
            mfu.setSiteId(wkodWt0003Update.getSiteId());
            mfu.setUserSeq(wkodWt0003Update.getUserSeq());
            mfu.setWorkOrdId(wkodWt0003Update.getWorkOrdId());
            mapper.wkodFileUpdate(mfu);
        }

        return true;
    }

    public boolean wkodHdtlWt0003Insert(WkodHdtlWt0003Insert wkodHdtlWt0003Insert, List<children> childrenList) throws Exception {


                String  userSeq = jwtTokenProvider.resolveTokenUser();
        for(children mthWkodHdtlWt0003Insert : childrenList){
            MthWkodHdtlInsert mthWkodHdtlInsert = new MthWkodHdtlInsert();
            mthWkodHdtlInsert.setSiteId(wkodHdtlWt0003Insert.getSiteId());
            mthWkodHdtlInsert.setWorkOrdId(wkodHdtlWt0003Insert.getWorkOrdId());
            mthWkodHdtlInsert.setUserSeq(wkodHdtlWt0003Insert.getUserSeq());
            mthWkodHdtlInsert.setNote(mthWkodHdtlWt0003Insert.getNote());
            mthWkodHdtlInsert.setStatGubn(mthWkodHdtlWt0003Insert.getStatGubn());
            mthWkodHdtlInsert.setJobItem(mthWkodHdtlWt0003Insert.getJobItem());
            mthWkodHdtlInsert.setLastChngUseq(userSeq);
            mapper.mthWkodHdtlInsert(mthWkodHdtlInsert);

        }


        if(!"".equals(wkodHdtlWt0003Insert.getCmplPredDt()) && !"".equals(wkodHdtlWt0003Insert.getCnfmDt()) && !"".equals(wkodHdtlWt0003Insert.getPrcsCmplDt())){

            wkodHdtlWt0003Insert.setLastChngUseq(userSeq);
            if(!"".equals(wkodHdtlWt0003Insert.getPrcsCmplDt())){
                wkodHdtlWt0003Insert.setWorkOrdStat("WS0003");
            }else if(!"".equals(wkodHdtlWt0003Insert.getCmplPredDt()) && "".equals(wkodHdtlWt0003Insert.getPrcsCmplDt())){
                wkodHdtlWt0003Insert.setWorkOrdStat("WS0002");
            }else{
                wkodHdtlWt0003Insert.setWorkOrdStat(null);
            }
            MthWkodUpdate mthWkodUpdate = new MthWkodUpdate();
            mthWkodUpdate.setLastChngUseq(wkodHdtlWt0003Insert.getLastChngUseq());
            mthWkodUpdate.setWorkOrdStat(wkodHdtlWt0003Insert.getWorkOrdStat());
            mthWkodUpdate.setCmplPredDt(wkodHdtlWt0003Insert.getCmplPredDt());
            mthWkodUpdate.setCmplReqDt(wkodHdtlWt0003Insert.getCmplReqDt());
            mthWkodUpdate.setFileId(wkodHdtlWt0003Insert.getFileId());
            mthWkodUpdate.setSiteId(wkodHdtlWt0003Insert.getSiteId());
            mthWkodUpdate.setPrcsCmplDt(wkodHdtlWt0003Insert.getPrcsCmplDt());
            mthWkodUpdate.setWorkOrdId(wkodHdtlWt0003Insert.getWorkOrdId());
            mthWkodUpdate.setUserSeq(wkodHdtlWt0003Insert.getUserSeq());
            mthWkodUpdate.setCnfmDt(wkodHdtlWt0003Insert.getCnfmDt());

            int workOrderUpdate = mapper.workOrderUpdate(mthWkodUpdate);

            if(workOrderUpdate == 0){
                throw new Exception();
            }
        }


        if(!"".equals(wkodHdtlWt0003Insert.getFileId())){
            MthWkodFileInsert mfi = new MthWkodFileInsert();
            mfi.setFileId(wkodHdtlWt0003Insert.getFileId());
            mfi.setLastChngUseq(userSeq);
            mfi.setSiteId(wkodHdtlWt0003Insert.getSiteId());
            mfi.setUserSeq(wkodHdtlWt0003Insert.getUserSeq());
            mfi.setWorkOrdId(wkodHdtlWt0003Insert.getWorkOrdId());
            mapper.wkodFileInsert(mfi);
        }


        return true;
    }

    public Map workOrderListInsert(@Valid MthWkodInsert mthWkodInsert) throws Exception {

        HashMap map = new HashMap();

         String  userSeq = jwtTokenProvider.resolveTokenUser();
         mthWkodInsert.setLastChngUseq(userSeq);
         mapper.workOrderInsert(mthWkodInsert);
         map.put("workOrdId",mthWkodInsert.getWorkOrdId());

        return map;
    }

    public boolean workOrderCmplUpdate(@Valid MthWkodCmplUpdate mthWkodCmplUpdate) throws Exception {
         String  userSeq = jwtTokenProvider.resolveTokenUser();


        MthWkodUpdate mthWkodUpdate = new MthWkodUpdate();
        mthWkodUpdate.setLastChngUseq(userSeq);
        mthWkodUpdate.setWorkOrdStat("WS0004");
        mthWkodUpdate.setSiteId(mthWkodCmplUpdate.getSiteId());
        mthWkodUpdate.setUserSeq(mthWkodCmplUpdate.getUserSeq());
        mthWkodUpdate.setWorkOrdId(mthWkodCmplUpdate.getWorkOrdId());

        int workOrderCmplUpdateCnt = mapper.workOrderUpdate(mthWkodUpdate);
        if(workOrderCmplUpdateCnt == 0){
            throw new Exception();
        }
        return true;
    }

    public boolean workOrderCnfmUpdate(@Valid MthWkodUpdate mthWkodUpdate) throws Exception {
        String  userSeq = jwtTokenProvider.resolveTokenUser();

        mthWkodUpdate.setLastChngUseq(userSeq);
        mthWkodUpdate.setWorkOrdStat("WS0002");

        int workOrderCmplUpdateCnt = mapper.workOrderUpdate(mthWkodUpdate);
        if(workOrderCmplUpdateCnt == 0){
            throw new Exception();
        }
        return true;
    }

    public boolean workOrderDelete(@Valid MthWkodDelete mthWkodDelete) throws Exception {

        MthWkodVO mthWkodVO = new MthWkodVO();

        mthWkodVO.setSiteId(mthWkodDelete.getSiteId());
        mthWkodVO.setWorkOrdUserSeq(mthWkodDelete.getUserSeq());
        mthWkodVO.setWorkOrdId(mthWkodDelete.getWorkOrdId());

        List<MthWkodVO> mthWkodList = mapper.workOrder(mthWkodVO);
        if(mthWkodList.size() ==0 || !"WS0001".equals(mthWkodList.get(0).getWorkOrdStat())){
            throw new CCompletionException();
        }else {
            int workOrderDeleteCnt = mapper.workOrderDelete(mthWkodDelete);
            if (workOrderDeleteCnt == 0) {
                throw new Exception();
            }
        }
        return true;
    }

    public boolean cmplReqDtUpdate(@Valid CmplReqDtUpdate cmplReqDtUpdate) throws Exception {

        for(MthWkodUpdate mthWkodUpdate : cmplReqDtUpdate.getMthWkodListUpdate()){
            mthWkodUpdate.setLastChngUseq(cmplReqDtUpdate.getLastChngUseq());
            mthWkodUpdate.setCmplReqDt(cmplReqDtUpdate.getCmplReqDt());
            mapper.cmplReqDtUpdate(mthWkodUpdate);
        }

        return true;
    }
    public boolean reNotiSend() throws Exception {

        commonService.smsSendHistInsert( "","notice006","","");
        commonService.emailSendHistInsert("","","notice006","","");

        return true;
    }

    public String workOrderprjSiteSeq(@Valid String siteId) throws Exception {
        String userSeq = mapper.workOrderprjSiteSeq(siteId);

        return userSeq;
    }


    public List<MthWkodOverdueVO> getWkodOverdueList() throws Exception {
        String[]  sites  = jwtTokenProvider.getSiteAuth();
        MthWkodVO mthWkodVO = new MthWkodVO();
        String  userSeq = jwtTokenProvider.resolveTokenUser();

        mthWkodVO.setSiteUserSeq(userSeq);
        if(sites.length > 0){
            mthWkodVO.setSiteIds(sites);
        }

        return mapper.workOrderOverdue(mthWkodVO);
    }


}
