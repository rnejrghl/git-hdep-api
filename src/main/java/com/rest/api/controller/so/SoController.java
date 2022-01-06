package com.rest.api.controller.so;

import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.pp.ContractPlanVO;
import com.rest.api.model.response.CommonResult;
import com.rest.api.model.response.ListResult;
import com.rest.api.model.response.SingleResult;
import com.rest.api.model.so.*;
import com.rest.api.model.wo.*;
import com.rest.api.service.ResponseService;
import com.rest.api.service.so.RscGrpService;
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
@RequestMapping(value = "/so")
public class SoController {

    private final ResponseService responseService; // 결과를 처리할 Service

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    @Autowired
    private RscGrpService rscGrpService;


// 자원그룹 시작
    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "자원그룹 조회", notes = "모든 자원그룹을 조회한다")
    @GetMapping(value ="/rscGrps")
    @ResponseBody
    public ListResult<RscGrpVO> rscGrps(@ApiParam(value="자원그룹ID") @RequestParam(required = false) String rscGrpId,
                                        @ApiParam(value="자원그룹명") @RequestParam(required = false) String rscGrpName,
                                        @ApiParam(value="거래가능시작일") @RequestParam(required = false) String trdbStrtDt,
                                        @ApiParam(value="거래가능종료일") @RequestParam(required = false) String trdbEndDt,
                                        @ApiParam(value="자원상태구분 (개시 : I(Initiate) / 말소 : C(Cancellation))") @RequestParam(required = false) String rscStatCd
                                          ) throws Exception {

        RscGrpVO rscGrpVO = new RscGrpVO();

        rscGrpVO.setRscGrpId(rscGrpId);
        rscGrpVO.setRscGrpName(rscGrpName);
        rscGrpVO.setTrdbStrtDt(trdbStrtDt);
        rscGrpVO.setTrdbEndDt(trdbEndDt);
        rscGrpVO.setRscStatCd(rscStatCd);

        return responseService.getListResult(rscGrpService.rscGrps(rscGrpVO));
    }


    @ApiOperation(value = "자원그룹 조회(EXCEL)", notes = "모든 자원그룹을 조회한다(EXCEL)")
    @GetMapping(value ="/rscGrps/excel")
    @ResponseBody
    public ModelAndView rscGrpsExcel(@ApiParam(value="자원그룹ID") @RequestParam(required = false) String rscGrpId,
                                        @ApiParam(value="자원그룹명") @RequestParam(required = false) String rscGrpName,
                                        @ApiParam(value="거래가능시작일") @RequestParam(required = false) String trdbStrtDt,
                                        @ApiParam(value="거래가능종료일") @RequestParam(required = false) String trdbEndDt,
                                        @ApiParam(value="자원상태구분 (개시 : I(Initiate) / 말소 : C(Cancellation))") @RequestParam(required = false) String rscStatCd
    ) throws Exception {

        RscGrpVO rscGrpVO = new RscGrpVO();

        rscGrpVO.setRscGrpId(rscGrpId);
        rscGrpVO.setRscGrpName(rscGrpName);
        rscGrpVO.setTrdbStrtDt(trdbStrtDt);
        rscGrpVO.setTrdbEndDt(trdbEndDt);
        rscGrpVO.setRscStatCd(rscStatCd);

        return new ModelAndView("excelXlsView", rscGrpService.rscGrpsExcel(rscGrpVO));

    }


    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "단건 자원그룹 조회", notes = "단건 자원그룹을 조회한다")
    @GetMapping(value ="/rscGrp")
    @ResponseBody
    public ListResult<RscGrpVO> workOrder(@ApiParam(value="자원그룹ID") @RequestParam(required = true) String rscGrpId) throws Exception {


        RscGrpVO rscGrpVO = new RscGrpVO();

        rscGrpVO.setRscGrpId(rscGrpId);

        return responseService.getListResult(rscGrpService.rscGrps(rscGrpVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "자원그룹 등록", notes = "자원그룹을 등록한다")
    @PostMapping(value ="/rscGrp")
    @ResponseBody
    public CommonResult rscGrpInsert(@RequestBody @Valid RscGrpInsert rscGrpInsert) throws Exception {

        String  userSeq = jwtTokenProvider.resolveTokenUser();
        rscGrpInsert.setLastChngUseq(userSeq);

        rscGrpService.rscGrpInsert(rscGrpInsert);

        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "자원그룹 수정", notes = "등록된 자원그룹을 수정한다")
    @PostMapping(value ="/uRscGrp")
    @ResponseBody
    public CommonResult rscGrpUpdate(@RequestBody @Valid RscGrpUpdate rscGrpUpdate) throws Exception {
        String  userSeq = jwtTokenProvider.resolveTokenUser();
        rscGrpUpdate.setLastChngUseq(userSeq);

        rscGrpService.rscGrpUpdate(rscGrpUpdate);

        return responseService.getSuccessResult();

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "자원그룹 삭제", notes = "등록된 자원그룹을 삭제한다.")
    @PostMapping(value ="/dRscGrp")
    @ResponseBody
    public CommonResult rscGrpDelete(@RequestBody @Valid RscGrpDelete rscGrpDelete) throws Exception {
        String  userSeq = jwtTokenProvider.resolveTokenUser();
        rscGrpDelete.setLastChngUseq(userSeq);

        rscGrpService.rscGrpDelete(rscGrpDelete);

        return responseService.getSuccessResult();

    }


    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트별 자원그룹 조회", notes = "모든 사이트별 자원그룹을 조회한다")
    @GetMapping(value ="/siteRscGrps")
    @ResponseBody
    public SingleResult<Map> siteRscGrpsList(@ApiParam(value="자원그룹ID") @RequestParam(required = false) String rscGrpId,
                                                    @ApiParam(value="사이트ID") @RequestParam(required = false) String siteId,
                                                    @ApiParam(value="사용자명") @RequestParam(required = false) String userName,
                                                    @ApiParam(value="자원구분") @RequestParam(required = false) String rescGubn,
                                                    @ApiParam(value="지역구분") @RequestParam(required = false) String regnGubn,
                                                    @ApiParam(value="계약조회일자") @RequestParam(required = false) String cnrtDt) throws Exception {

        SiteRscGrpVO siteRscGrpVO = new SiteRscGrpVO();

        siteRscGrpVO.setRscGrpId(rscGrpId);
        siteRscGrpVO.setSiteId(siteId);
        siteRscGrpVO.setUserName(userName);
        siteRscGrpVO.setRescGubn(rescGubn);
        siteRscGrpVO.setRegnGubn(regnGubn);
        siteRscGrpVO.setCnrtDt(cnrtDt);

        return responseService.getSingleResult(rscGrpService.siteRscGrpsList(siteRscGrpVO));
    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트별 자원그룹 참여이력 조회", notes = "사이트별 자원그룹 참여이력을 조회한다")
    @GetMapping(value ="/rscGrpUserHis")
    @ResponseBody
    public ListResult<RscGrpUserHisVO> rscGrpUserHisList(@ApiParam(value="사용자SEQ", required = true) @RequestParam String userSeq
                                                        , @ApiParam(value="사이트ID", required = true) @RequestParam String siteId
                                                        , @ApiParam(value="자원그룹ID") @RequestParam(required = false) String rscGrpId
                                                        , @ApiParam(value="계약시작일자") @RequestParam(required = false) String cnrtStrtDt
                                                        , @ApiParam(value="계약종료일자") @RequestParam(required = false) String cnrtEndDt) throws Exception {



        RscGrpUserHisVO rscGrpUserHisVO = new RscGrpUserHisVO();
        rscGrpUserHisVO.setUserSeq(userSeq);
        rscGrpUserHisVO.setSiteId(siteId);
        rscGrpUserHisVO.setRscGrpId(rscGrpId);
        rscGrpUserHisVO.setCnrtStrtDt(cnrtStrtDt);
        rscGrpUserHisVO.setCnrtEndDt(cnrtEndDt);

        return responseService.getListResult(rscGrpService.rscGrpUserHisList(rscGrpUserHisVO));
    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "자원그룹 사용자 조회", notes = "자원그룹 사용자를 조회한다")
    @GetMapping(value ="/rscGrpUser")
    @ResponseBody
    public ListResult<RscGrpUserHisVO> rscGrpUserList() throws Exception {

        return responseService.getListResult(rscGrpService.rscGrpUserList());
    }


    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트별 자원그룹 참여이력 수정", notes = "사이트별 자원그룹 참여이력을 수정한다")
    @PostMapping(value ="/uRscGrpUserHis")
    @ResponseBody
    public CommonResult rscGrpUserHisUpdate(@RequestBody @Valid RscGrpUserUpdate rscGrpUserUpdate) throws Exception {
        String  userSeq = jwtTokenProvider.resolveTokenUser();
        rscGrpUserUpdate.setLastChngUseq(userSeq);
        rscGrpService.rscGrpUserHisUpdate(rscGrpUserUpdate);

      return responseService.getSuccessResult();
    }

}
