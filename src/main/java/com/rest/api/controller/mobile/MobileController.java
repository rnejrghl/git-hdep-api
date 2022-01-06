package com.rest.api.controller.mobile;

import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.mo.FailAlarmVo;
import com.rest.api.model.pp.*;
import com.rest.api.model.response.CommonResult;
import com.rest.api.model.response.SingleResult;
import com.rest.api.model.response.ListResult;
import com.rest.api.service.ResponseService;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.mo.MobileMoService;
import com.rest.api.service.pp.PrjSiteService;
import io.swagger.annotations.ApiImplicitParam;
import io.swagger.annotations.ApiImplicitParams;
import io.swagger.annotations.ApiOperation;
import io.swagger.annotations.ApiParam;
import lombok.RequiredArgsConstructor;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;
import org.thymeleaf.util.StringUtils;

import javax.validation.Valid;
import java.util.HashMap;
import java.util.List;
import java.util.Map;


@RequiredArgsConstructor
@RestController
@Controller
@RequestMapping(value = "/mobile")
public class MobileController {
    private final ResponseService responseService; // 결과를 처리할 Service

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    @Autowired
    private MobileMoService prjService;

    @Autowired
    private PrjSiteService prjSiteService;

    @Autowired
    private CommonService commonService;


    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트 리스트 조회", notes = "사이트별 리스트를 조회한다")
    @GetMapping(value ="/operations")
    @ResponseBody
    public SingleResult<Map> mobOperations  (@ApiParam(value="검색키워드") @RequestParam(required = false) String keyword,
                                                 @ApiParam(value="설비상태") @RequestParam(required = false) String eqmtStatus,
                                                 @ApiParam(value="페이지") @RequestParam(required = false) Integer page
                                                 ) throws Exception {
        String[]  sites  = jwtTokenProvider.getSiteAuth();
        String  userSeq  = jwtTokenProvider.resolveTokenUser();

        PrjSiteVO prjSiteVO = new PrjSiteVO();
        prjSiteVO.setUserName(keyword);
        prjSiteVO.setAddr(keyword);
        prjSiteVO.setSiteId(keyword);
        if(sites.length > 0){
            prjSiteVO.setSiteIds(sites);
        }
        prjSiteVO.setUserSeq(userSeq);
        prjSiteVO.setEqmtStatus(eqmtStatus);

        if (page == 0) {
            page = 1;
        }
        prjSiteVO.setPage(page);

        return responseService.getSingleResult(prjService.mobPrjSiteList(prjSiteVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트 상세정보 조회", notes = "사이트별 리스트를 조회한다")
    @GetMapping(value ="/operation")
    @ResponseBody
    public SingleResult<MobileOperationDetail> mobOperation  (@ApiParam(value="사이트 ID") @RequestParam(required = true) String siteId) throws Exception {

        String  userSeq  = jwtTokenProvider.resolveTokenUser();

        PrjSiteVO prjSiteVO = new PrjSiteVO();
        prjSiteVO.setUserSeq(userSeq);
        prjSiteVO.setSiteId(siteId);

        return responseService.getSingleResult(prjService.mobInspMng(prjSiteVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "실패 리스트 알림", notes = "실패 리스트 알림")
    @GetMapping(value ="/faultList")
    @ResponseBody
    public SingleResult<Map> mobFaultAlarm
            (@ApiParam(value="상태값") @RequestParam(required = false) String status,
             @ApiParam(value="검색키워드") @RequestParam(required = false) String keyword,
             @ApiParam(value="페이지") @RequestParam(required = false) Integer page ) throws Exception {

        String[]  sitesIds  = jwtTokenProvider.getSiteAuth();
        String  userSeq  = jwtTokenProvider.resolveTokenUser();


        FailAlarmVo failListVo = new FailAlarmVo();
        failListVo.setSiteId(keyword);
        failListVo.setUserName(keyword);
        failListVo.setUserSeq(userSeq);
        failListVo.setStatus(status);
        failListVo.setSiteIds(sitesIds);

        if (page == 0) {
            page = 1;
        }
        failListVo.setPage(page);

        return responseService.getSingleResult(prjService.mobFaultList(failListVo));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "계약 수정", notes = "계약정보을 수정한다")
    @PostMapping(value ="/uContract")
    @ResponseBody
    public CommonResult mobContractUpdate(@RequestBody @Valid ContractPlanUpdate contractPlanUpdate) throws Exception {
        String  userSeq = jwtTokenProvider.resolveTokenUser();
        contractPlanUpdate.setLastChngUseq(userSeq);
        prjService.mobContractUpdate(contractPlanUpdate);
        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "작업계획 수정", notes = "작업계획을 수정한다")
    @PostMapping(value ="/uPlan")
    @ResponseBody
    public CommonResult mobPlanUpdate(@RequestBody @Valid ContractPlanUpdate contractPlanUpdate) throws Exception {
        String  userSeq = jwtTokenProvider.resolveTokenUser();
        contractPlanUpdate.setLastChngUseq(userSeq);
        prjService.mobPlanUpdate(contractPlanUpdate);
        return responseService.getSuccessResult();
    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "그리드 정보 수정", notes = "그리드 정보를 수정한다")
    @PostMapping(value ="/uGrid")
    @ResponseBody
    public CommonResult mobGridUpdate(@RequestBody @Valid SiteGridUpdate siteGridUpdate) throws Exception {
        SiteGridVO siteGridVO = new SiteGridVO();
        siteGridVO.setSiteId(siteGridUpdate.getSiteId());
        Map map = prjSiteService.gridList(siteGridVO);
        List<SiteGridVO> siteGridList =(List<SiteGridVO>)map.get("mainData");

        String userSeq = jwtTokenProvider.resolveTokenUser();
        siteGridUpdate.setLastChngUseq(userSeq);

        prjService.mobGridUpdate(siteGridUpdate);

        if(StringUtils.isEmpty(siteGridList.get(0).getApprWorkCmdt()) && !StringUtils.isEmpty(siteGridUpdate.getApprWorkCmdt())&& "Y".equals(siteGridUpdate.getApprAprvYn())){
            commonService.smsSendHistInsert( siteGridUpdate.getSiteId(),"notice009", "","");
            commonService.emailSendHistInsert(siteGridUpdate.getSiteId(), "","notice009","","");
        }
        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "자재구매 정보 수정", notes = "자재구매 정보를 수정한다")
    @PostMapping(value ="/uPurchase")
    @ResponseBody
    public CommonResult mobPurchaseUpdate(@RequestBody @Valid SiteGridUpdate siteGridUpdate) throws Exception {
        SiteGridVO siteGridVO = new SiteGridVO();
        siteGridVO.setSiteId(siteGridUpdate.getSiteId());
        Map map = prjSiteService.gridList(siteGridVO);
        List<SiteGridVO> siteGridList =(List<SiteGridVO>)map.get("mainData");

        String userSeq = jwtTokenProvider.resolveTokenUser();
        siteGridUpdate.setLastChngUseq(userSeq);

        prjService.mobPurchaseUpdate(siteGridUpdate);

        return responseService.getSuccessResult();
    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "설치 정보 수정", notes = "설치 정보를 수정한다")
    @PostMapping(value ="/uInstall")
    @ResponseBody
    public CommonResult mobInstallUpdate(@RequestBody @Valid SiteGridUpdate siteGridUpdate) throws Exception {
        SiteGridVO siteGridVO = new SiteGridVO();
        siteGridVO.setSiteId(siteGridUpdate.getSiteId());
        Map map = prjSiteService.gridList(siteGridVO);
        List<SiteGridVO> siteGridList =(List<SiteGridVO>)map.get("mainData");

        String userSeq = jwtTokenProvider.resolveTokenUser();
        siteGridUpdate.setLastChngUseq(userSeq);

        prjService.mobInstallUpdate(siteGridUpdate);

        return responseService.getSuccessResult();
    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트 inspection 수정", notes = "사이트의 inspection을 수정한다")
    @PostMapping(value ="/uInsp")
    @ResponseBody
    public CommonResult mobInspUpdate(@RequestBody @Valid InspMngUpdate inspMngUpdate) throws Exception {

        InspMngVO inspMngVO = new InspMngVO();
        inspMngVO.setSiteId(inspMngUpdate.getSiteId());

        Map map = prjSiteService.inspMng(inspMngVO);
        List<InspMngVO> inspMngList = (List<InspMngVO>) map.get("mainData");


        String userSeq = jwtTokenProvider.resolveTokenUser();
        inspMngUpdate.setLastChngUseq(userSeq);

        prjService.mobInspUpdate(inspMngUpdate);

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
        return responseService.getSuccessResult();
    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트 운영 수정", notes = "사이트의 운영을 수정한다")
    @PostMapping(value ="/uMng")
    @ResponseBody
    public CommonResult mobMngUpdate(@RequestBody @Valid InspMngUpdate inspMngUpdate) throws Exception {

        InspMngVO inspMngVO = new InspMngVO();
        inspMngVO.setSiteId(inspMngUpdate.getSiteId());

        Map map = prjSiteService.inspMng(inspMngVO);
        List<InspMngVO> inspMngList = (List<InspMngVO>) map.get("mainData");


        String userSeq = jwtTokenProvider.resolveTokenUser();
        inspMngUpdate.setLastChngUseq(userSeq);

        prjService.mobMngUpdate(inspMngUpdate);

        return responseService.getSuccessResult();
    }


    // 사업관리 시작
    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사업관리 사이트 조회", notes = "모든 사업관리의 사이트를 조회한다")
    @GetMapping(value ="/prjSites")
    @ResponseBody
    public SingleResult<Map> prjSiteList(@ApiParam(value = "프로세스 구분") @RequestParam(required = false) String process,
                                         @ApiParam(value = "검색 키워드") @RequestParam(required = false) String keyword,
                                                   @ApiParam(value="페이지") @RequestParam(required = false) Integer page
    ) throws Exception {
        String[]  sites  = jwtTokenProvider.getSiteAuth();
        String  userSeq  = jwtTokenProvider.resolveTokenUser();
        PrjSiteVO prjSiteVO = new PrjSiteVO();

        if(sites.length > 0){
            prjSiteVO.setSiteIds(sites);
        }
        prjSiteVO.setUserSeq(userSeq);                        /* 사이트ID */
        prjSiteVO.setProcess(process);
        prjSiteVO.setSiteId(keyword);
        prjSiteVO.setUserName(keyword);
        if (page == 0 || page == null) {
            page = 1;
        }
        prjSiteVO.setPage(page);

        return responseService.getSingleResult(prjService.mobPrjSites(prjSiteVO));

    }
    // 사업관리 시작
    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사업관리 사이트 진행상황 조회", notes = "사업관리의 사이트의 진행상황을 조회한다")
    @GetMapping(value ="/prjProcess")
    @ResponseBody
    public SingleResult<PrjSitesVO> prjSiteList(@ApiParam(value = "사이트 ID") @RequestParam(required = true) String siteId) throws Exception {

        String  userSeq  = jwtTokenProvider.resolveTokenUser();
        PrjSiteVO prjSiteVO = new PrjSiteVO();

        String[]  sites  = new String[1];
        sites[0] = siteId;

        prjSiteVO.setSiteIds(sites);

        return responseService.getSingleResult(prjService.mobPrjSiteProcess(prjSiteVO));

    }
    // 사업관리 시작
    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사업관리 계약정보 조회", notes = "사업관리의 계약정보를 조회한다")
    @GetMapping(value ="/contract")
    @ResponseBody
    public SingleResult<Map> prjSiteContract(@ApiParam(value = "siteId") @RequestParam(required = true) String siteId

    ) throws Exception {
        String[]  sites  = jwtTokenProvider.getSiteAuth();
        String  userSeq  = jwtTokenProvider.resolveTokenUser();
        ContractPlanVO contractPlanVO = new ContractPlanVO();

        contractPlanVO.setSiteId(siteId);
        contractPlanVO.setUserSeq(userSeq);                        /* 사이트ID */

        return responseService.getSingleResult(prjService.mobSiteContract(contractPlanVO));
    }

    // 사업관리 시작
    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사업관리 계획정보 조회", notes = "사업관리의 계획정보 조회한다")
    @GetMapping(value ="/plan")
    @ResponseBody
    public SingleResult<Map> prjSitePlan(@ApiParam(value = "siteId") @RequestParam(required = true) String siteId

    ) throws Exception {
        String[]  sites  = jwtTokenProvider.getSiteAuth();
        String  userSeq  = jwtTokenProvider.resolveTokenUser();
        ContractPlanVO contractPlanVO = new ContractPlanVO();

        contractPlanVO.setSiteId(siteId);
        contractPlanVO.setUserSeq(userSeq);                        /* 사이트ID */

        return responseService.getSingleResult(prjService.mobSitePlan(contractPlanVO));
    }

    // 사업관리 시작
    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사업관리 insp 조회", notes = "사업관리의 계획정보 조회한다")
    @GetMapping(value ="/insp")
    @ResponseBody
    public SingleResult<Map> prjSiteInsp(@ApiParam(value = "siteId") @RequestParam(required = true) String siteId

    ) throws Exception {
        String[]  sites  = jwtTokenProvider.getSiteAuth();
        String  userSeq  = jwtTokenProvider.resolveTokenUser();

        InspMngVO inspMngVO = new InspMngVO();
        inspMngVO.setSiteId(siteId);
        return responseService.getSingleResult(prjService.mobSiteInsp(inspMngVO));
    }

    // 사업관리 시작
    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사업관리 msg 조회", notes = "사업관리의 운영정보를 조회한다")
    @GetMapping(value ="/mng")
    @ResponseBody
    public SingleResult<Map> prjSiteMng(@ApiParam(value = "siteId") @RequestParam(required = true) String siteId

    ) throws Exception {
        String[]  sites  = jwtTokenProvider.getSiteAuth();
        String  userSeq  = jwtTokenProvider.resolveTokenUser();

        InspMngVO inspMngVO = new InspMngVO();
        inspMngVO.setSiteId(siteId);
        return responseService.getSingleResult(prjService.mobSiteMng(inspMngVO));
    }
}
