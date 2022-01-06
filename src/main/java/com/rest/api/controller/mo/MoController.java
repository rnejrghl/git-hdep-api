package com.rest.api.controller.mo;

import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.mo.AlarmVO;
import com.rest.api.model.mo.KpiVO;
import com.rest.api.model.mo.OperationsVO;
import com.rest.api.model.pp.ContractPlanVO;
import com.rest.api.model.pp.PrjSiteTermVO;
import com.rest.api.model.response.CommonResult;
import com.rest.api.model.response.ListResult;
import com.rest.api.model.response.SingleResult;
import com.rest.api.model.wo.*;
import com.rest.api.service.ResponseService;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.mo.MoService;
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

import javax.validation.Valid;
import java.util.List;
import java.util.Map;


@RequiredArgsConstructor
@RestController
@Controller
@RequestMapping(value = "/mo")
public class MoController {

    private final ResponseService responseService; // 결과를 처리할 Service

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    @Autowired
    private MoService moService;


// 유지보수 시작

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "유지보수 사이트별 리스트 조회", notes = "사이트별 리스트를 조회한다")
    @GetMapping(value ="/operations")
    @ResponseBody
    public SingleResult<Map> operations  (@ApiParam(value="사이트ID") @RequestParam(required = false) String siteId,
                                     @ApiParam(value="사용자명") @RequestParam(required = false) String userName,
                                      @ApiParam(value="설비상태") @RequestParam(required = false) String eqmtStatus,
                                      @ApiParam(value="PV 운전상태") @RequestParam(required = false) String pvOperationStatus,
                                      @ApiParam(value="ESS 운전상태") @RequestParam(required = false) String essOperationStatus,
                                      @ApiParam(value="최종수신일") @RequestParam(required = false) String dataLastDate,
                                     @ApiParam(value="자원구분") @RequestParam(required = false) String rescGubn ,
                                     @ApiParam(value="페이지 번호") @RequestParam(required = false) Integer page   ) throws Exception {
        String[]  sites  = jwtTokenProvider.getSiteAuth();
        String  userSeq  = jwtTokenProvider.resolveTokenUser();

        OperationsVO operationsVO = new OperationsVO();
        operationsVO.setSiteId(siteId);
        operationsVO.setRescGubn(rescGubn);
        operationsVO.setUserName(userName);

        if(sites.length > 0){
            operationsVO.setSiteIds(sites);
        }
        operationsVO.setUserSeq(userSeq);

        operationsVO.setEqmtStatus(eqmtStatus);
        operationsVO.setPvOperationStatus(pvOperationStatus);
        operationsVO.setEssOperationStatus(essOperationStatus);
        operationsVO.setDataLastDate(dataLastDate);
        if (page == null) {
            page = 1;
        }
        operationsVO.setPage(page);                              /* 페이지 번호 */


        return responseService.getSingleResult(moService.operations(operationsVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "유지보수 사이트 summary 조회", notes = "사이트 summary를 조회한다.")
    @GetMapping(value ="/operations/summary")
    @ResponseBody
    public SingleResult<Map> operationsCount  () throws Exception {
        String[]  sites  = jwtTokenProvider.getSiteAuth();
        String  userSeq  = jwtTokenProvider.resolveTokenUser();

        OperationsVO operationsVO = new OperationsVO();
        if(sites.length > 0){
            operationsVO.setSiteIds(sites);
        }
        operationsVO.setUserSeq(userSeq);
                          /* 페이지 번호 */


        return responseService.getSingleResult(moService.operationCnt(operationsVO));

    }

    @ApiOperation(value = "유지보수 사이트별 리스트 조회(EXCEL)", notes = "사이트별 리스트를 조회한다(EXCEL)")
    @GetMapping(value ="/operations/excel")
    @ResponseBody
    public ModelAndView operationsExcel (@ApiParam(value="사용자") @RequestParam String user,
                                          @ApiParam(value="사이트ID") @RequestParam(required = false) String siteId,
                                          @ApiParam(value="사용자명") @RequestParam(required = false) String userName,
                                          @ApiParam(value="자원구분") @RequestParam(required = false) String rescGubn   ) throws Exception {


        OperationsVO operationsVO = new OperationsVO();
        operationsVO.setSiteId(siteId);
        operationsVO.setRescGubn(rescGubn);
        operationsVO.setUserName(userName);

        operationsVO.setUser(user);


        return new ModelAndView("excelXlsView", moService.operationsExcel(operationsVO));


    }



    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "알람 탭 조회", notes = "알람탭을 조회한다")
    @GetMapping(value ="/alarm")
    @ResponseBody
    public SingleResult<Map> alarm  (@ApiParam(value="발행시작일자") @RequestParam(required = false) String publStatDt,
                                     @ApiParam(value="발행종료일자") @RequestParam(required = false) String publEndDt,
                                        @ApiParam(value="O&M담당자") @RequestParam(required = false) String workOrdUserName,
                                        @ApiParam(value="작업지시형태 (GRP_CD : CDK-00009 (고장/통신장애/특별점검 등))") @RequestParam(required = false) String workOrdTyp,
                                        @ApiParam(value="작업지시상태 (GRP_CD : CDK-00010)") @RequestParam(required = false) String workOrdStat,
                                        @ApiParam(value="결과등록여부") @RequestParam(required = false) String rsltRegYn,
                                        @ApiParam(value="사이트ID",required = true) @RequestParam String siteId
                                          ) throws Exception {

        AlarmVO alarmVO = new AlarmVO();
        alarmVO.setPublStatDt(publStatDt);
        alarmVO.setPublEndDt(publEndDt);
        alarmVO.setWorkOrdUserName(workOrdUserName);
        alarmVO.setWorkOrdTyp(workOrdTyp);
        alarmVO.setWorkOrdStat(workOrdStat);
        alarmVO.setRsltRegYn(rsltRegYn);
        alarmVO.setSiteId(siteId);


        return responseService.getSingleResult(moService.alarm(alarmVO));

    }


    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "KPI 조회", notes = "해당 사이트의 KPI 을 조회한다")
    @GetMapping(value ="/kpiList")
    @ResponseBody
    public ListResult<KpiVO> kpiList  (@ApiParam(value="사이트ID", required = true) @RequestParam String siteId
                                        , @ApiParam(value="조회시작년월") @RequestParam(required = false) String statYm
                                        , @ApiParam(value="조회종료년월") @RequestParam(required = false) String endYm) throws Exception {

        KpiVO kpiVO = new KpiVO();
        kpiVO.setSiteId(siteId);
        kpiVO.setStatYm(statYm);
        kpiVO.setEndYm(endYm);

        return responseService.getListResult(moService.kpiList(kpiVO));

    }



    @ApiOperation(value = "KPI 조회(excel)", notes = "해당 사이트의 KPI 을 조회한다(excel)")
    @GetMapping(value ="/kpiList/excel")
    @ResponseBody
    public ModelAndView kpiListExcel  (@ApiParam(value="사이트ID", required = true) @RequestParam String siteId
            , @ApiParam(value="조회시작년월") @RequestParam(required = false) String statYm
            , @ApiParam(value="조회종료년월") @RequestParam(required = false) String endYm) throws Exception {

        KpiVO kpiVO = new KpiVO();
        kpiVO.setSiteId(siteId);
        kpiVO.setStatYm(statYm);
        kpiVO.setEndYm(endYm);

        return new ModelAndView("excelXlsView", moService.kpiListExcel(kpiVO));

    }

}
