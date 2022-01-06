package com.rest.api.controller.pp;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.multipart.MultipartFile;
import org.springframework.web.servlet.ModelAndView;
import org.thymeleaf.util.StringUtils;

import com.rest.api.config.component.ExcelReader;
import com.rest.api.config.domain.SiteGoalExcel;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.pp.ContractPlanInsert;
import com.rest.api.model.pp.NectrInsert;
import com.rest.api.model.pp.NectrUpdate;
import com.rest.api.model.pp.NectrDelete;
import com.rest.api.model.pp.ContractPlanUpdate;
import com.rest.api.model.pp.ContractPlanVO;
import com.rest.api.model.pp.ExpnUpdate;
import com.rest.api.model.pp.ExpnVO;
import com.rest.api.model.pp.InspMngUpdate;
import com.rest.api.model.pp.InspMngVO;
import com.rest.api.model.pp.PrjSiteGoalInsert;
import com.rest.api.model.pp.PrjSiteGoalMsgVO;
import com.rest.api.model.pp.PrjSiteGoalUpdate;
import com.rest.api.model.pp.PrjSiteGoalVO;
import com.rest.api.model.pp.PrjSiteTermVO;
import com.rest.api.model.pp.PrjSiteVO;
import com.rest.api.model.pp.SiteDelUpdate;
import com.rest.api.model.pp.SiteGridUpdate;
import com.rest.api.model.pp.SiteGridVO;
import com.rest.api.model.pp.TermUpdate;
import com.rest.api.model.response.CommonResult;
import com.rest.api.model.response.ListResult;
import com.rest.api.model.response.SingleResult;
import com.rest.api.service.ResponseService;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.pp.PrjSiteService;

import io.swagger.annotations.ApiImplicitParam;
import io.swagger.annotations.ApiImplicitParams;
import io.swagger.annotations.ApiOperation;
import io.swagger.annotations.ApiParam;
import lombok.RequiredArgsConstructor;



@RequiredArgsConstructor
@RestController
@Controller
@RequestMapping(value = "/pp")
public class PpController {

    private final ResponseService responseService; // 결과를 처리할 Service

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    @Autowired
    private PrjSiteService  prjSiteService;

    @Autowired
    private CommonService  commonService;

    @Autowired
    private ExcelReader excelReader;



    // 사업관리 시작
    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사업관리 사이트 조회", notes = "모든 사업관리의 사이트를 조회한다")
    @GetMapping(value ="/prjSites")
    @ResponseBody
    public SingleResult<Map> prjSiteList(@ApiParam(value = "사이트ID") @RequestParam(required = false) String siteId,
                                         @ApiParam(value = "사용자명") @RequestParam(required = false) String userName,
                                         @ApiParam(value = "설치담당자명") @RequestParam(required = false) String instPsnName,
                                         @ApiParam(value = "지역구분") @RequestParam(required = false) String regnGubn,
                                         @ApiParam(value = "작업계획수립완료일 조회시작일") @RequestParam(required = false) String wkplStrtDt,
                                         @ApiParam(value = "작업계획수립완료일 조회종료일") @RequestParam(required = false) String wkplEndDt,
                                         @ApiParam(value = "사업비승인일 조회시작일") @RequestParam(required = false) String expnStrtDt,
                                         @ApiParam(value = "사업비승인일 조회종료일") @RequestParam(required = false) String expnEndDt,
                                         @ApiParam(value = "GRID신청완료일 조회시작일") @RequestParam(required = false) String applStrtCmdt,
                                         @ApiParam(value = "GRID신청완료일 조회종료일") @RequestParam(required = false) String applEndCmdt,
                                         @ApiParam(value = "GRID승인완료일 조회시작일") @RequestParam(required = false) String apprStrtCmdt,
                                         @ApiParam(value = "GRID승인완료일 조회종료일") @RequestParam(required = false) String apprEndCmdt,
                                         @ApiParam(value = "자재구매완료일 조회시작일") @RequestParam(required = false) String mpStrtCmdt,
                                         @ApiParam(value = "자재구매완료일 조회종료일") @RequestParam(required = false) String mpEndCmdt,
                                         @ApiParam(value = "설치완료일 조회시작일") @RequestParam(required = false) String insStrtCmdt,
                                         @ApiParam(value = "설치완료일 조회종료일") @RequestParam(required = false) String insEndCmdt,
                                         @ApiParam(value = "계약시작일 조회시작일") @RequestParam(required = false) String cnrtStrtSrcStrtDt,
                                         @ApiParam(value = "계약시작일 조회종료일") @RequestParam(required = false) String cnrtStrtSrcEndDt,
                                         @ApiParam(value = "계약종료일 조회시작일") @RequestParam(required = false) String cnrtEndSrcStrtDt,
                                         @ApiParam(value = "계약종료일 조회종료일") @RequestParam(required = false) String cnrtEndSrcEndDt,
                                         @ApiParam(value = "운영시작일 조회시작일") @RequestParam(required = false) String mngSrcStrtDt,
                                         @ApiParam(value = "운영시작일 조회종료일") @RequestParam(required = false) String mngSrcEndDt,
                                         @ApiParam(value = "점검일 조회시작일") @RequestParam(required = false) String chkCmplSrcStrtDt,
                                         @ApiParam(value = "점검일 조회종료일") @RequestParam(required = false) String chkCmplSrcEndDt,
                                         @ApiParam(value = "계획수립일 미완료 데이터 노출") @RequestParam(required = false) String wkplCmplDt,
                                         @ApiParam(value = "사업비승인 미완료 데이터 노출") @RequestParam(required = false) String expnDt,
                                         @ApiParam(value = "Grid 신청 미완료 데이터 노출") @RequestParam(required = false) String applCmdt,
                                         @ApiParam(value = "Grid 승인 미완료 데이터 노출") @RequestParam(required = false) String apprCmdt,
                                         @ApiParam(value = "자재구매 미완료 데이터 노출") @RequestParam(required = false) String mpCmdt,
                                         @ApiParam(value = "설치 미완료 데이터 노출") @RequestParam(required = false) String insCmdt,
                                         @ApiParam(value = "Inspecition 미완료 데이터 노출") @RequestParam(required = false) String chkCmplDt,
                                         @ApiParam(value = "운영 미완료 데이터 노출") @RequestParam(required = false) String mngStrtDt,
                                         @ApiParam(value = "종료 미완료 데이터 노출") @RequestParam(required = false) String termDt,
                                         @ApiParam(value = "페이지 번호") @RequestParam(required = false) Integer page

                                          ) throws Exception {

        PrjSiteVO prjSiteVO = new PrjSiteVO();

        prjSiteVO.setSiteId(siteId);                        /* 사이트ID */
        prjSiteVO.setUserName(userName);                    /* 사용자명 */
        prjSiteVO.setInstPsnName(instPsnName);              /* 설치담당자명 */
        prjSiteVO.setWkplStrtDt(wkplStrtDt);                /* 작업계획수립완료일 조회시작일 */
        prjSiteVO.setWkplEndDt(wkplEndDt);                  /* 작업계획수립완료일 조회종료일 */
        prjSiteVO.setExpnStrtDt(expnStrtDt);                /* 사업비승인일 조회시작일 */
        prjSiteVO.setExpnEndDt(expnEndDt);                  /* 사업비승인일 조회종료일 */
        prjSiteVO.setWkplStrtDt(applStrtCmdt);              /* 신청완료일 조회시작일 */
        prjSiteVO.setWkplStrtDt(applEndCmdt);               /* 신청완료일 조회종료일 */
        prjSiteVO.setWkplStrtDt(apprStrtCmdt);              /* 승인완료일 조회시작일 */
        prjSiteVO.setWkplStrtDt(apprEndCmdt);               /* 승인완료일 조회종료일 */
        prjSiteVO.setMpStrtCmdt(mpStrtCmdt);                /* 자재구매완료일 조회시작일 */
        prjSiteVO.setMpEndCmdt(mpEndCmdt);                  /* 자재구매완료일 조회종료일 */
        prjSiteVO.setInsStrtCmdt(insStrtCmdt);              /* 설치완료일 조회시작일 */
        prjSiteVO.setInsEndCmdt(insEndCmdt);                /* 설치완료일 조회종료일 */
        prjSiteVO.setCnrtStrtSrcStrtDt(cnrtStrtSrcStrtDt);  /* 계약시작일 조회시작일 */
        prjSiteVO.setCnrtStrtSrcEndDt(cnrtStrtSrcEndDt);    /* 계약시작일 조회종료일 */
        prjSiteVO.setCnrtEndSrcStrtDt(cnrtEndSrcStrtDt);    /* 계약종료일 조회시작일 */
        prjSiteVO.setCnrtEndSrcEndDt(cnrtEndSrcEndDt);      /* 계약종료일 조회종료일 */

        prjSiteVO.setMngSrcStrtDt(mngSrcStrtDt);            /* 운영시작일 조회시작일 */
        prjSiteVO.setMngSrcEndDt(mngSrcEndDt);              /* 운영시작일 조회종료일 */
        prjSiteVO.setChkCmplSrcStrtDt(chkCmplSrcStrtDt);    /* 점검일 조회시작일 */
        prjSiteVO.setChkCmplSrcEndDt(chkCmplSrcEndDt);      /* 점검일 조회종료일 */
        prjSiteVO.setRegnGubn(regnGubn);                    /* 지역구분 */

        prjSiteVO.setWkplCmplDtYN(wkplCmplDt);                /* 계획수립일 미완료 데이터 노출 */
        prjSiteVO.setExpnDtYN(expnDt);                        /* 사업비승인 미완료 데이터 노출 */
        prjSiteVO.setApplCmdtYN(applCmdt);                    /* Grid 신청 미완료 데이터 노출 */
        prjSiteVO.setApprCmdtYN(apprCmdt);                    /* Grid 승인 미완료 데이터 노출 */
        prjSiteVO.setMpCmdtYN(mpCmdt);                        /* 자재구매 미완료 데이터  노출 */
        prjSiteVO.setInsCmdtYN(insCmdt);                      /* 설치 미완료 데이터 노출 */
        prjSiteVO.setChkCmplDtYN(chkCmplDt);                  /* Inspecition 미완료 데이터 노출 */
        prjSiteVO.setMngStrtDtYN(mngStrtDt);                  /* 운영 미완료 데이터 노출 */
        prjSiteVO.setTermDtYN(termDt);                        /* 종료 미완료 데이터 노출 */
        if (page == null) {
            page = 1;
        }
        prjSiteVO.setPage(page);                              /* 페이지 번호 */

        return responseService.getSingleResult(prjSiteService.prjSite(prjSiteVO));

    }



    @ApiOperation(value = "사업관리 사이트 조회(EXCEL)", notes = "모든 사업관리의 사이트를 조회한다(EXCEL)")
    @GetMapping(value ="prjSites/excel")
    @ResponseBody
    public ModelAndView prjSitesExcel(@ApiParam(value = "사이트ID") @RequestParam(required = false) String siteId,
                                      @ApiParam(value = "사용자명") @RequestParam(required = false) String userName,
                                      @ApiParam(value = "설치담당자명") @RequestParam(required = false) String instPsnName,
                                      @ApiParam(value = "작업계획수립완료일 조회시작일") @RequestParam(required = false) String wkplStrtDt,
                                      @ApiParam(value = "작업계획수립완료일 조회종료일") @RequestParam(required = false) String wkplEndDt,
                                      @ApiParam(value = "사업비승인일 조회시작일") @RequestParam(required = false) String expnStrtDt,
                                      @ApiParam(value = "사업비승인일 조회종료일") @RequestParam(required = false) String expnEndDt,
                                      @ApiParam(value = "GRID신청완료일 조회시작일") @RequestParam(required = false) String applStrtCmdt,
                                      @ApiParam(value = "GRID신청완료일 조회종료일") @RequestParam(required = false) String applEndCmdt,
                                      @ApiParam(value = "GRID승인완료일 조회시작일") @RequestParam(required = false) String apprStrtCmdt,
                                      @ApiParam(value = "GRID승인완료일 조회종료일") @RequestParam(required = false) String apprEndCmdt,
                                      @ApiParam(value = "자재구매완료일 조회시작일") @RequestParam(required = false) String mpStrtCmdt,
                                      @ApiParam(value = "자재구매완료일 조회종료일") @RequestParam(required = false) String mpEndCmdt,
                                      @ApiParam(value = "설치완료일 조회시작일") @RequestParam(required = false) String insStrtCmdt,
                                      @ApiParam(value = "설치완료일 조회종료일") @RequestParam(required = false) String insEndCmdt,
                                      @ApiParam(value = "계약시작일 조회시작일") @RequestParam(required = false) String cnrtStrtSrcStrtDt,
                                      @ApiParam(value = "계약시작일 조회종료일") @RequestParam(required = false) String cnrtStrtSrcEndDt,
                                      @ApiParam(value = "계약종료일 조회시작일") @RequestParam(required = false) String cnrtEndSrcStrtDt,
                                      @ApiParam(value = "계약종료일 조회종료일") @RequestParam(required = false) String cnrtEndSrcEndDt,
                                      @ApiParam(value = "운영시작일 조회시작일") @RequestParam(required = false) String mngSrcStrtDt,
                                      @ApiParam(value = "운영시작일 조회종료일") @RequestParam(required = false) String mngSrcEndDt,
                                      @ApiParam(value = "점검일 조회시작일") @RequestParam(required = false) String chkCmplSrcStrtDt,
                                      @ApiParam(value = "점검일 조회종료일") @RequestParam(required = false) String chkCmplSrcEndDt,
                                      @ApiParam(value = "사용자") @RequestParam(required = true) String user
    ) throws Exception {


        PrjSiteVO prjSiteVO = new PrjSiteVO();

        prjSiteVO.setSiteId(siteId);                        /* 사이트ID */
        prjSiteVO.setUserName(userName);                    /* 사용자명 */
        prjSiteVO.setInstPsnName(instPsnName);              /* 설치사용자명 */
        prjSiteVO.setWkplStrtDt(wkplStrtDt);                /* 작업계획수립완료일 조회시작일 */
        prjSiteVO.setWkplEndDt(wkplEndDt);                  /* 작업계획수립완료일 조회종료일 */
        prjSiteVO.setExpnStrtDt(expnStrtDt);                /* 사업비승인일 조회시작일 */
        prjSiteVO.setExpnEndDt(expnEndDt);                  /* 사업비승인일 조회종료일 */
        prjSiteVO.setWkplStrtDt(applStrtCmdt);              /* 신청완료일 조회시작일 */
        prjSiteVO.setWkplStrtDt(applEndCmdt);               /* 신청완료일 조회종료일 */
        prjSiteVO.setWkplStrtDt(apprStrtCmdt);              /* 승인완료일 조회시작일 */
        prjSiteVO.setWkplStrtDt(apprEndCmdt);               /* 승인완료일 조회종료일 */
        prjSiteVO.setMpStrtCmdt(mpStrtCmdt);                /* 자재구매완료일 조회시작일 */
        prjSiteVO.setMpEndCmdt(mpEndCmdt);                  /* 자재구매완료일 조회종료일 */
        prjSiteVO.setInsStrtCmdt(insStrtCmdt);              /* 설치완료일 조회시작일 */
        prjSiteVO.setInsEndCmdt(insEndCmdt);                /* 설치완료일 조회종료일 */
        prjSiteVO.setCnrtStrtSrcStrtDt(cnrtStrtSrcStrtDt);  /* 계약시작일 조회시작일 */
        prjSiteVO.setCnrtStrtSrcEndDt(cnrtStrtSrcEndDt);    /* 계약시작일 조회종료일 */
        prjSiteVO.setCnrtEndSrcStrtDt(cnrtEndSrcStrtDt);    /* 계약종료일 조회시작일 */
        prjSiteVO.setCnrtEndSrcEndDt(cnrtEndSrcEndDt);      /* 계약종료일 조회종료일 */
        prjSiteVO.setMngSrcStrtDt(mngSrcStrtDt);            /* 운영시작일 조회시작일 */
        prjSiteVO.setMngSrcEndDt(mngSrcEndDt);              /* 운영시작일 조회종료일 */
        prjSiteVO.setChkCmplSrcStrtDt(chkCmplSrcStrtDt);    /* 점검일 조회시작일 */
        prjSiteVO.setChkCmplSrcEndDt(chkCmplSrcEndDt);      /* 점검일 조회종료일 */
        prjSiteVO.setUser(user);
        return new ModelAndView("excelXlsView", prjSiteService.prjSiteExcel(prjSiteVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트 계약/계획 조회", notes = "단일 사이트 계약/계획를 조회한다")
    @GetMapping(value ="contractPlan")
    @ResponseBody
    public SingleResult<Map> contractPlan(@ApiParam(value = "사이트ID") @RequestParam(required = false) String siteId) throws Exception {


        ContractPlanVO contractPlanVO = new ContractPlanVO();

        contractPlanVO.setSiteId(siteId);                        /* 사이트ID */

        return responseService.getSingleResult(prjSiteService.contractPlan(contractPlanVO));

    }


    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "계약/계획 등록", notes = "계약정보/ 계획수립을 등록한다")
    @PostMapping(value ="/contractPlan")
    @ResponseBody
    public SingleResult<Map> contractPlanInsert(@RequestBody @Valid ContractPlanInsert contractPlanInsert) throws Exception {
        String  userSeq = jwtTokenProvider.resolveTokenUser();
        contractPlanInsert.setLastChngUseq(userSeq);
        Map map = prjSiteService.contractPlanInsert(contractPlanInsert);

        return responseService.getSingleResult(map);

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "계약/계획 수정", notes = "계약정보/ 계획수립을 수정한다")
    @PostMapping(value ="/uContractPlan")
    @ResponseBody
    public CommonResult contractPlanUpdate(@RequestBody @Valid ContractPlanUpdate contractPlanUpdate) throws Exception {
        String  userSeq = jwtTokenProvider.resolveTokenUser();
        contractPlanUpdate.setLastChngUseq(userSeq);
        prjSiteService.contractPlanUpdate(contractPlanUpdate);
        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사업비승인 조회", notes = "사업비승인을 조회한다")
    @GetMapping(value ="/expn")
    @ResponseBody
    public ListResult<ExpnVO> expnList(@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId) throws Exception {
        ExpnVO expnVO = new ExpnVO();
        expnVO.setSiteId(siteId);
        return responseService.getListResult(prjSiteService.expnList(expnVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사업비승인일 저장/수정", notes = "사업비승인일을 저장/수정한다")
    @PostMapping(value ="/uExpn")
    @ResponseBody
    public CommonResult expnUpdate(@RequestBody @Valid ExpnUpdate expnUpdate) throws Exception {
        String userSeq = jwtTokenProvider.resolveTokenUser();
        expnUpdate.setLastChngUseq(userSeq);

        prjSiteService.expnUpdate(expnUpdate);

        commonService.smsSendHistInsert( expnUpdate.getSiteId(),"notice008", "","");
        commonService.emailSendHistInsert(expnUpdate.getSiteId(), "","notice008","","");
        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사업관리 계약정보 삭제", notes = "사업관리 계약정보를 삭제한다")
    @PostMapping(value ="/contract/{siteId}")
    @ResponseBody
    public CommonResult contractDelete(@PathVariable String siteId) throws Exception {

        ContractPlanVO contractPlanVO = new ContractPlanVO();

        String userSeq = jwtTokenProvider.resolveTokenUser();
        contractPlanVO.setLastChngUseq(userSeq);
        contractPlanVO.setSiteId(siteId);

        prjSiteService.contractDelete(contractPlanVO);

        return responseService.getSuccessResult();

    }


    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "그리드/구매/설치 조회", notes = "그리드/구매/설치를 조회한다")
    @GetMapping(value ="/grid")
    @ResponseBody
    public SingleResult<Map> gridList(@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId) throws Exception {
        SiteGridVO siteGridVO = new SiteGridVO();
        siteGridVO.setSiteId(siteId);
        return responseService.getSingleResult(prjSiteService.gridList(siteGridVO));
    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "그리드/구매/설치 정보 수정", notes = "그리드/구매/설치 정보를 수정한다")
    @PostMapping(value ="/uGrid")
    @ResponseBody
    public CommonResult gridUpdate(@RequestBody @Valid SiteGridUpdate siteGridUpdate) throws Exception {
        SiteGridVO siteGridVO = new SiteGridVO();
        siteGridVO.setSiteId(siteGridUpdate.getSiteId());
        Map map = prjSiteService.gridList(siteGridVO);
        List<SiteGridVO> siteGridList =(List<SiteGridVO>)map.get("mainData");

        String userSeq = jwtTokenProvider.resolveTokenUser();
        siteGridUpdate.setLastChngUseq(userSeq);

        prjSiteService.gridUpdate(siteGridUpdate);

        if(StringUtils.isEmpty(siteGridList.get(0).getApprWorkCmdt()) && !StringUtils.isEmpty(siteGridUpdate.getApprWorkCmdt())&& "Y".equals(siteGridUpdate.getApprAprvYn())){
            commonService.smsSendHistInsert( siteGridUpdate.getSiteId(),"notice009", "","");
            commonService.emailSendHistInsert(siteGridUpdate.getSiteId(), "","notice009","","");
        }
        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "종료처리", notes = "사이트의 종료처리 - 해지일, 해지사유를 수정한다")
    @PostMapping(value ="/uTerm")
    @ResponseBody
    public CommonResult termUpdate(@RequestBody @Valid TermUpdate termUpdate) throws Exception {
        String userSeq = jwtTokenProvider.resolveTokenUser();
        termUpdate.setLastChngUseq(userSeq);

        prjSiteService.termUpdate(termUpdate);

        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트 해지일 조회", notes = "사이트의 해지일,해지사유를 조회한다")
    @GetMapping(value ="/term")
    @ResponseBody
    public ListResult<PrjSiteTermVO> termList(@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId) throws Exception {
        PrjSiteTermVO prjSiteTermVO = new PrjSiteTermVO();
        prjSiteTermVO.setSiteId(siteId);
        return responseService.getListResult(prjSiteService.termList(prjSiteTermVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "종료일괄처리", notes = "다건의 사이트를 일괄 종료처리한다")
    @PostMapping(value ="/uTermList")
    @ResponseBody
    public CommonResult termListUpdate(@RequestBody @Valid List<TermUpdate> termListUpdate) throws Exception {
        String userSeq = jwtTokenProvider.resolveTokenUser();

        if(termListUpdate.size() > 0) {
            for (TermUpdate termUpdate : termListUpdate) {
                termUpdate.setLastChngUseq(userSeq);

                prjSiteService.termUpdate(termUpdate);
            }


        }
        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "삭제일괄등록", notes = "다건의 사이트를 일괄 종료처리한다")
    @PostMapping (value ="/dSiteDelList")
    @ResponseBody
    public CommonResult siteDelListUpdate(@RequestBody @Valid List<SiteDelUpdate> siteIdList) throws Exception {
        String userSeq = jwtTokenProvider.resolveTokenUser();

        if(siteIdList.size() > 0) {
            for (SiteDelUpdate siteDelUpdate : siteIdList) {

                ContractPlanVO contractPlanVO = new ContractPlanVO();
                contractPlanVO.setLastChngUseq(userSeq);
                contractPlanVO.setSiteId(siteDelUpdate.getSiteId());
                prjSiteService.contractDelete(contractPlanVO);
            }


        }
        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트 목표 조회", notes = "사이트의 목표를 조회한다")
    @GetMapping(value ="/goal")
    @ResponseBody
    public ListResult<PrjSiteGoalVO> goalList(@ApiParam(value = "사이트ID",required = true) @RequestParam String siteId) throws Exception {
        PrjSiteGoalVO prjSiteGoalVO = new PrjSiteGoalVO();
        prjSiteGoalVO.setSiteId(siteId);
        return responseService.getListResult(prjSiteService.goalList(prjSiteGoalVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트 목표일괄등록", notes = "사이트의 목표를 일괄등록한다")
    @PostMapping(value ="/goal")
    @ResponseBody
    public SingleResult<Map> goalExcel(@RequestParam("file") MultipartFile multipartFile, @RequestParam List<String> siteIds) throws Exception {

        List<SiteGoalExcel> siteGoalExcel = excelReader.readFileToList(multipartFile, SiteGoalExcel::from);
        String userSeq = jwtTokenProvider.resolveTokenUser();
        HashMap map= new HashMap();
        List<PrjSiteGoalMsgVO> prjSiteGoalMsgList = new ArrayList<PrjSiteGoalMsgVO>();
        for(int j  = 0 ; j < siteIds.size(); j++){
            for(int i = 1 ; i < siteGoalExcel.size(); i++ ){
                PrjSiteGoalInsert prjSiteGoalInsert = new PrjSiteGoalInsert();
                String goalMonth = "";
                String year = Integer.toString((int)Double.parseDouble(siteGoalExcel.get(i).getGoalYy()));
                int month = (int)Double.parseDouble(siteGoalExcel.get(i).getGoalMm());
                if (month < 10) {
                    goalMonth = String.format("%02d", month);
                } else {
                    goalMonth = Integer.toString(month);
                }
                prjSiteGoalInsert.setSiteId(siteIds.get(j));
                prjSiteGoalInsert.setGoalDt(year+""+goalMonth);
                prjSiteGoalInsert.setGoalGenrCapa(siteGoalExcel.get(i).getGoalGenrCapa());
                prjSiteGoalInsert.setEnergy(siteGoalExcel.get(i).getEnergy());
                prjSiteGoalInsert.setIvt(siteGoalExcel.get(i).getIvt());
                prjSiteGoalInsert.setPpa(siteGoalExcel.get(i).getPpa());
                prjSiteGoalInsert.setSale(siteGoalExcel.get(i).getSale());
                prjSiteGoalInsert.setLastChngUseq(userSeq);
                try{
                    prjSiteService.goalListInsert(prjSiteGoalInsert);
                }catch (Exception e){
                    PrjSiteGoalMsgVO prjSiteGoalMsgVO = new PrjSiteGoalMsgVO();
                    prjSiteGoalMsgVO.setRow(i+"");
                    prjSiteGoalMsgVO.setGoalDt(prjSiteGoalInsert.getGoalDt());
                    prjSiteGoalMsgVO.setSiteId(prjSiteGoalInsert.getSiteId());
                    prjSiteGoalMsgList.add(prjSiteGoalMsgVO);
                }

            }
        }
        map.put("failList",prjSiteGoalMsgList);

        return responseService.getSingleResult(map);
    }


    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트 목표 수정", notes = "사이트의 목표를 수정한다")
    @PostMapping(value ="/uGoalList")
    @ResponseBody
    public CommonResult goalListUpdate(@RequestBody @Valid List<PrjSiteGoalUpdate> goalList) throws Exception {
        String userSeq = jwtTokenProvider.resolveTokenUser();
        for(PrjSiteGoalUpdate prjSiteGoalUpdate : goalList){
            prjSiteGoalUpdate.setLastChngUseq(userSeq);

            prjSiteService.goalListUpdate(prjSiteGoalUpdate);
        }
        return responseService.getSuccessResult();
    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "inspection/운영 조회", notes = "사이트의 inspection/운영을 조회한다")
    @GetMapping(value ="/inspMng")
    @ResponseBody
    public SingleResult<Map> inspMng(@ApiParam(value = "사이트ID",required = true) @RequestParam String siteId) throws Exception {
        InspMngVO inspMngVO = new InspMngVO();
        inspMngVO.setSiteId(siteId);
        return responseService.getSingleResult(prjSiteService.inspMng(inspMngVO));
    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트 inspection/운영 수정", notes = "사이트의 inspection/운영을 수정한다")
    @PostMapping(value ="/uInspMng")
    @ResponseBody
    public CommonResult inspMngUpdate(@RequestBody @Valid InspMngUpdate inspMngUpdate) throws Exception {

        InspMngVO inspMngVO = new InspMngVO();
        inspMngVO.setSiteId(inspMngUpdate.getSiteId());

        Map map = prjSiteService.inspMng(inspMngVO);
        List<InspMngVO> inspMngList = (List<InspMngVO>) map.get("mainData");


        String userSeq = jwtTokenProvider.resolveTokenUser();
        inspMngUpdate.setLastChngUseq(userSeq);

        prjSiteService.inspMngUpdate(inspMngUpdate);

        if("Y".equals(inspMngUpdate.getChkPassYn())){
        //if(StringUtils.isEmpty(inspMngList.get(0).getChkCmplDt()) && !StringUtils.isEmpty(inspMngUpdate.getChkCmplDt()) && "Y".equals(inspMngUpdate.getChkPassYn())){
            commonService.smsSendHistInsert( inspMngUpdate.getSiteId(),"notice010", "","");
            commonService.emailSendHistInsert(inspMngUpdate.getSiteId(), "","notice010","","");
        }

        if("N".equals(inspMngUpdate.getChkPassYn())){
        //if(StringUtils.isEmpty(inspMngList.get(0).getChkCmplDt()) && StringUtils.isEmpty(inspMngUpdate.getChkCmplDt()) && "N".equals(inspMngUpdate.getChkPassYn())){
            commonService.smsSendHistInsert( inspMngUpdate.getSiteId(),"notice011", "","");
            commonService.emailSendHistInsert(inspMngUpdate.getSiteId(), "","notice011","","");
        }
        
        // 해당기기의 ps_id (PLANT_KEY) 로 ps_key(FAC_KEY) 를 찾아 (CMN_PLANT ,CMN_PLANT_FAC 테이블에 해당 KEY들 INSERT 작업 )
        prjSiteService.insertSiteRegister(inspMngUpdate.getSiteId(),inspMngUpdate.getPsId());
        
        return responseService.getSuccessResult();
    }
    
    @ApiImplicitParams(value = {
        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "Nectr 고객 등록", notes = "Nectr고객을 등록한다")
    @PostMapping(value ="/newContract")
    @ResponseBody
    public SingleResult<Map> newContract(@RequestBody @Valid NectrInsert nectrInsert) throws Exception {

        String  userSeq = jwtTokenProvider.resolveTokenUser();
        nectrInsert.setLastChngUseq(userSeq);

        Map map = prjSiteService.nectrInsert(nectrInsert);


        return responseService.getSingleResult(map);

    }

    @ApiImplicitParams(value = {
        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "Nectr 고객정보 수정", notes = "Nectr 고객정보를 수정한다")
    @PostMapping(value ="/updateContract")
    @ResponseBody
    public CommonResult nectrUpdate(@RequestBody @Valid NectrUpdate nectrUpdate) throws Exception {

        String  userSeq = jwtTokenProvider.resolveTokenUser();
        nectrUpdate.setLastChngUseq(userSeq);

        prjSiteService.nectrUpdate(nectrUpdate);
        
        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "Nectr 고객정보 삭제", notes = "Nectr 고객정보를 삭제한다")
    @PostMapping(value ="/deleteContract")
    @ResponseBody
    public CommonResult nectrDelete(@RequestBody @Valid NectrDelete nectrDelete) throws Exception {

        String userSeq = jwtTokenProvider.resolveTokenUser();
        nectrDelete.setLastChngUseq(userSeq);

        prjSiteService.nectrDelete(nectrDelete);

        return responseService.getSuccessResult();

    }

}


