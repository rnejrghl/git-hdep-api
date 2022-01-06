package com.rest.api.controller.wo;

import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.pp.*;
import com.rest.api.model.response.CommonResult;
import com.rest.api.model.response.ListResult;
import com.rest.api.model.response.SingleResult;
import com.rest.api.model.wo.*;
import com.rest.api.service.ResponseService;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.pp.PrjSiteService;
import com.rest.api.service.wo.MtnWkodService;
import io.swagger.annotations.ApiImplicitParam;
import io.swagger.annotations.ApiImplicitParams;
import io.swagger.annotations.ApiOperation;
import io.swagger.annotations.ApiParam;
import lombok.RequiredArgsConstructor;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.servlet.ModelAndView;

import javax.servlet.http.HttpServletRequest;
import javax.validation.Valid;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;


@RequiredArgsConstructor
@RestController
@Controller
@RequestMapping(value = "/wo")
public class WoController {

    private final ResponseService responseService; // 결과를 처리할 Service

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    @Autowired
    private MtnWkodService mtnWkodService;

    @Autowired
    private CommonService commonService;

    @Autowired
    private PrjSiteService prjSiteService;


// Work Order 시작
    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "WORK ORDER 현황 조회", notes = "모든 워크오더를 조회한다")
    @GetMapping(value ="/workOrders")
    @ResponseBody
    public SingleResult<Map> workOrders(@ApiParam(value="발행일시") @RequestParam(required = false) String publDtti,
                                        @ApiParam(value="작업지시ID") @RequestParam(required = false) String workOrdId,
                                        @ApiParam(value="작업지시형태 (GRP_CD : CDK-00009 (고장/통신장애/특별점검 등))") @RequestParam(required = false) String workOrdTyp,
                                        @ApiParam(value="작업지시상태 (GRP_CD : CDK-00010)") @RequestParam(required = false) String workOrdStat,
                                        @ApiParam(value="사이트사용자번호") @RequestParam(required = false) String siteId,
                                        @ApiParam(value="사이트사용자명") @RequestParam(required = false) String siteUserName,
                                        @ApiParam(value="담당자사용자명") @RequestParam(required = false) String workOrdUserName,
                                        @ApiParam(value="담당자사용자전화번호") @RequestParam(required = false) String workOrdUserTelNo,
                                        @ApiParam(value="완료요청일 (발행일 + 3일로 default 설정)") @RequestParam(required = false) String cmplReqDt,
                                        @ApiParam(value="예정일") @RequestParam(required = false) String cmplPredDt,
                                        @ApiParam(value="확인일") @RequestParam(required = false) String cnfmDt,
                                        @ApiParam(value="처리완료일") @RequestParam(required = false) String prcsCmplDt,
                                        @ApiParam(value="페이지") @RequestParam(required = false) Integer page,
                                        HttpServletRequest request ) throws Exception {


        MthWkodVO mthWkodVO = new MthWkodVO();
        
        mthWkodVO.setMobile(commonService.isMobile(request));
        mthWkodVO.setPublDtti(publDtti);
        mthWkodVO.setWorkOrdId(workOrdId);
        mthWkodVO.setWorkOrdTyp(workOrdTyp);
        mthWkodVO.setWorkOrdStat(workOrdStat);
        mthWkodVO.setSiteId(siteId);
        mthWkodVO.setSiteUserName(siteUserName);
        mthWkodVO.setWorkOrdUserName(workOrdUserName);
        mthWkodVO.setWorkOrdUserTelNo(workOrdUserTelNo);
        mthWkodVO.setCmplReqDt(cmplReqDt);
        mthWkodVO.setCnfmDt(cnfmDt);
        mthWkodVO.setCmplPredDt(cmplPredDt);
        mthWkodVO.setPrcsCmplDt(prcsCmplDt);
        if (page == null) {
            page = 1;
        }
        mthWkodVO.setPage(page);

        return responseService.getSingleResult(mtnWkodService.workOrders(mthWkodVO));

    }

    @ApiOperation(value = "WORK ORDER 현황 조회(excel)", notes = "모든 워크오더를 조회한다(excel)")
    @GetMapping(value ="/workOrders/excel")
    @ResponseBody
    public ModelAndView workOrdersExcel(@ApiParam(value="발행일시") @RequestParam(required = false) String publDtti,
                                        @ApiParam(value="작업지시ID") @RequestParam(required = false) String workOrdId,
                                        @ApiParam(value="작업지시형태 (GRP_CD : CDK-00009 (고장/통신장애/특별점검 등))") @RequestParam(required = false) String workOrdTyp,
                                        @ApiParam(value="작업지시상태 (GRP_CD : CDK-00010)") @RequestParam(required = false) String workOrdStat,
                                        @ApiParam(value="사이트사용자번호") @RequestParam(required = false) String siteId,
                                        @ApiParam(value="사이트사용자명") @RequestParam(required = false) String siteUserName,
                                        @ApiParam(value="담당자사용자명") @RequestParam(required = false) String workOrdUserName,
                                        @ApiParam(value="담당자사용자전화번호") @RequestParam(required = false) String workOrdUserTelNo,
                                        @ApiParam(value="완료요청일 (발행일 + 3일로 default 설정)") @RequestParam(required = false) String cmplReqDt,
                                        @ApiParam(value="확인일") @RequestParam(required = false) String cnfmDt,
                                        @ApiParam(value="처리완료일") @RequestParam(required = false) String prcsCmplDt,
                                        @ApiParam(value = "사용자") @RequestParam(required = true) String user
    ) throws Exception {


        MthWkodVO mthWkodVO = new MthWkodVO();

        mthWkodVO.setPublDtti(publDtti);
        mthWkodVO.setWorkOrdId(workOrdId);
        mthWkodVO.setWorkOrdTyp(workOrdTyp);
        mthWkodVO.setWorkOrdStat(workOrdStat);
        mthWkodVO.setSiteId(siteId);
        mthWkodVO.setSiteUserName(siteUserName);
        mthWkodVO.setWorkOrdUserName(workOrdUserName);
        mthWkodVO.setWorkOrdUserTelNo(workOrdUserTelNo);
        mthWkodVO.setCmplReqDt(cmplReqDt);
        mthWkodVO.setCnfmDt(cnfmDt);
        mthWkodVO.setPrcsCmplDt(prcsCmplDt);
        mthWkodVO.setUser(user);

        return new ModelAndView("excelXlsView", mtnWkodService.workOrdersExcel(mthWkodVO));

    }


    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "단건 WORK ORDER 조회", notes = "단건 WORK ORDER를 조회한다")
    @GetMapping(value ="/workOrder")
    @ResponseBody
    public SingleResult<Map> workOrder(@ApiParam(value="사이트ID", required = true) @RequestParam String siteId,
                                       @ApiParam(value="작업지시ID", required = true) @RequestParam String workOrdId,
                                       @ApiParam(value="workOrder사용자SEQ", required = true) @RequestParam String workOrdUserSeq) throws Exception {


        MthWkodVO mthWkodVO = new MthWkodVO();

        mthWkodVO.setSiteId(siteId);
        mthWkodVO.setWorkOrdId(workOrdId);
        mthWkodVO.setWorkOrdUserSeq(workOrdUserSeq);

        return responseService.getSingleResult(mtnWkodService.workOrder(mthWkodVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "WORK ORDER 발행 등록", notes = "WORK ORDER 를 등록한다")
    @PostMapping(value ="/workOrder")
    @ResponseBody
    public CommonResult workOrderHdtlInsert(@RequestBody @Valid WkodInsert wkodInsert) throws Exception {
        ContractPlanVO contractPlanVO = new ContractPlanVO();
        contractPlanVO.setSiteId(wkodInsert.getSiteId());                        /* 사이트ID */
        Map map = prjSiteService.contractPlan(contractPlanVO);
        ContractPlanVO list = (ContractPlanVO)map.get("mainData");

        String  userSeq = jwtTokenProvider.resolveTokenUser();
        wkodInsert.setLastChngUseq(userSeq);

        wkodInsert.setRegnGubn(list.getRegnGubn());

        wkodInsert.setUserSeq(mtnWkodService.workOrderprjSiteSeq(wkodInsert.getSiteId()));

        Map woMap = mtnWkodService.workOrderInsert(wkodInsert);

        String messageId = "";

        if("WT0001".equals(wkodInsert.getWorkOrdTyp())){
            if("A".equals(list.getRescGubn())){
                messageId = "notice001";
            }else{
                messageId = "notice002";
            }
        } else if("WT0002".equals(wkodInsert.getWorkOrdTyp())){
            messageId = "notice003";
        } else if("WT0004".equals(wkodInsert.getWorkOrdTyp())){
            messageId = "notice005";
        } else if ("WT0003".equals(wkodInsert.getWorkOrdTyp())) {
            messageId = "notice004";
        }

        commonService.smsSendHistInsert( wkodInsert.getSiteId(),messageId,wkodInsert.getUserSeq(),wkodInsert.getSmsCntn());
        commonService.emailSendHistInsert(wkodInsert.getSiteId(), woMap.get("workOrdId").toString(),messageId,wkodInsert.getUserSeq(),wkodInsert.getMailCntn());

        return responseService.getSuccessResult();
    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "WORK ORDER 미발행 특별점검 등록", notes = "WORK ORDER 미발행 특별점검을 등록한다")
    @PostMapping(value ="/workOrderWt0003")
    @ResponseBody
    public CommonResult workOrderWt0003Insert(@RequestBody @Valid WkodWt0003Insert wkodWt0003Insert) throws Exception {

        ContractPlanVO contractPlanVO = new ContractPlanVO();
        contractPlanVO.setSiteId(wkodWt0003Insert.getSiteId());                        /* 사이트ID */
        Map map = prjSiteService.contractPlan(contractPlanVO);
        ContractPlanVO list = (ContractPlanVO)map.get("mainData");

        String  userSeq = jwtTokenProvider.resolveTokenUser();
        wkodWt0003Insert.setLastChngUseq(userSeq);

        wkodWt0003Insert.setRegnGubn(list.getRegnGubn());



        List<children> childrenList = new ArrayList<>();
        for(children children : wkodWt0003Insert.getBatteries().getChildren()){
            childrenList.add(children);
        }
        for(children children : wkodWt0003Insert.getInverters().getChildren()){
            childrenList.add(children);
        }
        for(children children : wkodWt0003Insert.getPanels().getChildren()){
            childrenList.add(children);
        }
        for(children children : wkodWt0003Insert.getCommunications().getChildren()){
            childrenList.add(children);
        }
        for(children children : wkodWt0003Insert.getMonitoring().getChildren()){
            childrenList.add(children);
        }



        Map woMap = mtnWkodService.workOrderWt0003Insert(wkodWt0003Insert,childrenList);

        String messageId = "";

        if("WT0001".equals(wkodWt0003Insert.getWorkOrdTyp())){
            if("A".equals(list.getRescGubn())){
                messageId = "notice001";
            }else{
                messageId = "notice002";
            }
        }else if("WT0002".equals(wkodWt0003Insert.getWorkOrdTyp())){
            messageId = "notice003";
        }else if("WT0004".equals(wkodWt0003Insert.getWorkOrdTyp())){
            messageId = "notice005";
        }

        commonService.smsSendHistInsert( wkodWt0003Insert.getSiteId(),messageId,wkodWt0003Insert.getUserSeq(),wkodWt0003Insert.getSmsCntn());
        commonService.emailSendHistInsert(wkodWt0003Insert.getSiteId(), woMap.get("workOrdId").toString(),messageId,wkodWt0003Insert.getUserSeq(),wkodWt0003Insert.getMailCntn());

        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "WORK ORDER 미발행 등록", notes = "WORK ORDER 미발행 고장점검, 통신장애, 철거 등록한다")
    @PostMapping(value ="/workOrderUnPubl")
    @ResponseBody
    public CommonResult workOrderUnPubl(@RequestBody @Valid WkodUnPublInsert wkodUnPublInsert) throws Exception {

        ContractPlanVO contractPlanVO = new ContractPlanVO();
        contractPlanVO.setSiteId(wkodUnPublInsert.getSiteId());                        /* 사이트ID */
        Map map = prjSiteService.contractPlan(contractPlanVO);
        ContractPlanVO list = (ContractPlanVO)map.get("mainData");

        String  userSeq = jwtTokenProvider.resolveTokenUser();
        wkodUnPublInsert.setLastChngUseq(userSeq);

        wkodUnPublInsert.setRegnGubn(list.getRegnGubn());

        Map woMap = mtnWkodService.workOrderUnPubl(wkodUnPublInsert);

        String messageId = "";

        if("WT0001".equals(wkodUnPublInsert.getWorkOrdTyp())){
            if("A".equals(list.getRescGubn())){
                messageId = "notice001";
            }else{
                messageId = "notice002";
            }
        }else if("WT0002".equals(wkodUnPublInsert.getWorkOrdTyp())){
            messageId = "notice003";
        }else if("WT0004".equals(wkodUnPublInsert.getWorkOrdTyp())){
            messageId = "notice005";
        }

        commonService.smsSendHistInsert( wkodUnPublInsert.getSiteId() , messageId , wkodUnPublInsert.getUserSeq() , wkodUnPublInsert.getSmsCntn());
        commonService.emailSendHistInsert(wkodUnPublInsert.getSiteId() , woMap.get("workOrdId").toString() , messageId , wkodUnPublInsert.getUserSeq() , wkodUnPublInsert.getMailCntn());

        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "WORK ORDER 결과등록 수정", notes = "해당하는 WorkOrder에 등록된 결과를 수정한다")
    @PostMapping(value ="/uWorkOrder")
    @ResponseBody
    public CommonResult workOrderUpdate(@RequestBody @Valid WkodUpdate wkodUpdate) throws Exception {

        mtnWkodService.workOrderUpdate(wkodUpdate);

        return responseService.getSuccessResult();
    }


    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "WORK ORDER 리젝", notes = "해당하는 WorkOrder를 이전상태로 변경한다.")
    @PostMapping(value ="/rWorkOrder")
    @ResponseBody
    public CommonResult workOrderReject(@RequestBody @Valid WkodUpdate wkodUpdate) throws Exception {

        mtnWkodService.workOrderReject(wkodUpdate);

        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "WORK ORDER 결과등록", notes = "등록된 WORK ORDER 의 결과를 등록한다")
    @PostMapping(value ="/wkodHdtl")
    @ResponseBody
    public CommonResult wkodHdtlInsert(@RequestBody @Valid WkodHdtlInsert wkodHdtlInsert) throws Exception {

        mtnWkodService.wkodHdtlInsert(wkodHdtlInsert);

        return responseService.getSuccessResult();

    }


    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "WORK ORDER 특별점검 결과등록 수정", notes = "해당하는 WorkOrder 특별점검에 등록된 결과를 수정한다")
    @PostMapping(value ="/uWorkOrderWt0003")
    @ResponseBody
    public CommonResult workOrderWt0003Update(@RequestBody @Valid WkodWt0003Update wkodWt0003Update) throws Exception {
        List<children> childrenList = new ArrayList<>();
        for(children children : wkodWt0003Update.getBatteries().getChildren()){
            childrenList.add(children);
        }
        for(children children : wkodWt0003Update.getInverters().getChildren()){
            childrenList.add(children);
        }
        for(children children : wkodWt0003Update.getPanels().getChildren()){
            childrenList.add(children);
        }
        for(children children : wkodWt0003Update.getCommunications().getChildren()){
            childrenList.add(children);
        }
        for(children children : wkodWt0003Update.getMonitoring().getChildren()){
            childrenList.add(children);
        }

        mtnWkodService.workOrderWt0003Update(wkodWt0003Update,childrenList);

        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "WORK ORDER 특별점검 결과등록", notes = "등록된 WORK ORDER 의 특별점검 결과를 등록한다")
    @PostMapping(value ="/wkodHdtlWt0003")
    @ResponseBody
    public CommonResult wkodHdtlWt0003Insert(@RequestBody @Valid WkodHdtlWt0003Insert wkodHdtlWt0003Insert) throws Exception {

        List<children> childrenList = new ArrayList<>();
        for(children children : wkodHdtlWt0003Insert.getBatteries().getChildren()){
            childrenList.add(children);
        }
        for(children children : wkodHdtlWt0003Insert.getInverters().getChildren()){
            childrenList.add(children);
        }
        for(children children : wkodHdtlWt0003Insert.getPanels().getChildren()){
            childrenList.add(children);
        }
        for(children children : wkodHdtlWt0003Insert.getCommunications().getChildren()){
            childrenList.add(children);
        }
        for(children children : wkodHdtlWt0003Insert.getMonitoring().getChildren()){
            childrenList.add(children);
        }
        mtnWkodService.wkodHdtlWt0003Insert(wkodHdtlWt0003Insert,childrenList);

        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "WORK ORDER 일괄 발행 등록", notes = "WORK ORDER 일괄 등록한다")
    @PostMapping(value ="/workOrdeList")
    @ResponseBody
    public CommonResult workOrderListInsert(@RequestBody @Valid List<MthWkodInsert> mthWkodListInsert) throws Exception {


        for(MthWkodInsert mthWkodInsert : mthWkodListInsert){

            ContractPlanVO contractPlanVO = new ContractPlanVO();

            contractPlanVO.setSiteId(mthWkodInsert.getSiteId());                        /* 사이트ID */
            Map map = prjSiteService.contractPlan(contractPlanVO);

            ContractPlanVO list = (ContractPlanVO)map.get("mainData");
            mthWkodInsert.setRegnGubn(list.getRegnGubn());

            Map woMap = mtnWkodService.workOrderListInsert(mthWkodInsert);



            String messageId = "";

            if("WT0001".equals(mthWkodInsert.getWorkOrdTyp())){
                if("A".equals(list.getRescGubn())){
                    messageId = "notice001";
                }else{
                    messageId = "notice002";
                }
            }else if("WT0002".equals(mthWkodInsert.getWorkOrdTyp())){
                messageId = "notice003";
            }else if("WT0003".equals(mthWkodInsert.getWorkOrdTyp())){
                messageId = "notice004";
            }else if("WT0004".equals(mthWkodInsert.getWorkOrdTyp())){
                messageId = "notice005";
            }
            commonService.smsSendHistInsert( mthWkodInsert.getSiteId(),messageId,mthWkodInsert.getUserSeq(),mthWkodInsert.getSmsCntn());
            commonService.emailSendHistInsert(mthWkodInsert.getSiteId(), woMap.get("workOrdId").toString(),messageId,mthWkodInsert.getUserSeq(),mthWkodInsert.getMailCntn());
        }
        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "WORK ORDER 완료 처리", notes = "해당 WORK ORDER를 완료처리한다")
    @PostMapping(value ="/uWorkOrderCmpl")
    @ResponseBody
    public CommonResult workOrderCmplUpdate(@RequestBody @Valid MthWkodCmplUpdate mthWkodCmplUpdate) throws Exception {

        mtnWkodService.workOrderCmplUpdate(mthWkodCmplUpdate);

        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "WORK ORDER 확인 처리", notes = "해당 WORK ORDER를 확인처리한다")
    @PostMapping(value ="/uWorkOrderCnfm")
    @ResponseBody
    public CommonResult workOrderCnfmUpdate(@RequestBody @Valid MthWkodUpdate mthWkodUpdate) throws Exception {

        mtnWkodService.workOrderCnfmUpdate(mthWkodUpdate);

        return responseService.getSuccessResult();

    }


    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "WORK ORDER 삭제", notes = "해당 WORK ORDER를 삭제 처리한다")
    @PostMapping(value ="/dWorkOrder")
    @ResponseBody
    public CommonResult workOrderDelete(@RequestBody @Valid MthWkodDelete mthWkodDelete) throws Exception {
        String  userSeq = jwtTokenProvider.resolveTokenUser();
        mthWkodDelete.setLastChngUseq(userSeq);

        mtnWkodService.workOrderDelete(mthWkodDelete);

        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "완료요청일 일괄 수정", notes = "선택한 WORK ORDER의 완료요청일을 수정한다")
    @PostMapping(value ="/uCmplReqDt")
    @ResponseBody
    public CommonResult cmplReqDtUpdate(@RequestBody @Valid CmplReqDtUpdate cmplReqDtUpdate) throws Exception {
        String  userSeq = jwtTokenProvider.resolveTokenUser();
        cmplReqDtUpdate.setLastChngUseq(userSeq);

        mtnWkodService.cmplReqDtUpdate(cmplReqDtUpdate);

        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "지연 WorkOrder 재발송", notes = "처리가 지연되고 있는 Work Order 건에 대해 각 담당자에게 독촉문자/메일 발송한다")
    @GetMapping(value ="/reNotiSend")
    @ResponseBody
    public CommonResult reNotiSend() throws Exception {

        mtnWkodService.reNotiSend();

        return responseService.getSuccessResult();

    }


    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "처리가 지연되고 있는 W/O 통계반환", notes = "리가 지연되고 있는 W/O 통계를 반환한다.")
    @GetMapping(value ="/wkodOverdues")
    @ResponseBody
    public ListResult<MthWkodOverdueVO> wkodOverdueList() throws Exception {

        return responseService.getListResult(mtnWkodService.getWkodOverdueList());

    }


}
