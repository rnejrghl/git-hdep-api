package com.rest.api.controller.db;

import com.rest.api.advice.exception.CLoginSigninFailedException;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.db.*;
import com.rest.api.model.mm.*;
import com.rest.api.model.mo.AlarmVO;
import com.rest.api.model.response.CommonResult;
import com.rest.api.model.response.ListResult;
import com.rest.api.model.response.SingleResult;
import com.rest.api.model.security.SecurityVO;
import com.rest.api.service.ResponseService;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.db.DbService;
import com.rest.api.service.mm.*;
import com.rest.api.service.security.SecurityService;
import io.swagger.annotations.ApiImplicitParam;
import io.swagger.annotations.ApiImplicitParams;
import io.swagger.annotations.ApiOperation;
import io.swagger.annotations.ApiParam;
import lombok.RequiredArgsConstructor;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;

import javax.validation.Valid;



import java.util.HashMap;
import java.util.List;
import java.util.Map;


@RequiredArgsConstructor
@RestController
@Controller
@RequestMapping(value = "/db")
public class DbController {

    private final ResponseService responseService; // 결과를 처리할 Service

    @Autowired
    private DbService dbService;

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트별 운전현황조회", notes = "사이트별 운전현황을 조회한다")
    @GetMapping(value ="/siteOpeStas")
    @ResponseBody
    public SingleResult<Map> siteOpeStas(@ApiParam(value = "자원구분코드") @RequestParam(required = false) String rescGubn
                                          ,@ApiParam(value = "사용자명") @RequestParam(required = false) String userName  ) throws Exception {
        String  userSeq  = jwtTokenProvider.resolveTokenUser();
        DbVO dbVO = new DbVO();
        dbVO.setUserName(userName);
        dbVO.setRescGubn(rescGubn);
        dbVO.setUserSeq(userSeq);
        return responseService.getSingleResult(dbService.siteOpeStas(dbVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트 운전현황 상세조회", notes = "사이트 운전현황 상세조회한다")
    @GetMapping(value ="/siteOpeStaDtl")
    @ResponseBody
    public SingleResult<DbVO> siteOpeStaDtl(
                                           @ApiParam(value="사이트ID", required = true) @RequestParam String siteId
    ) throws Exception {
        String  userSeq  = jwtTokenProvider.resolveTokenUser();
        DbVO dbVO = new DbVO();
        dbVO.setSiteId(siteId);
        dbVO.setUserSeq(userSeq);
        return responseService.getSingleResult(dbService.siteOpeStaDtl(dbVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "사이트 운전현황 알람탭", notes = "사이트 운전현황  알람탭조회한다")
    @GetMapping(value ="/siteOpeStaAlarm")
    @ResponseBody
    public SingleResult<Map> siteOpeStaAlarm(@ApiParam(value="발행시작일자") @RequestParam(required = false) String publStatDt,
                                           @ApiParam(value="발행종료일자") @RequestParam(required = false) String publEndDt,
                                           @ApiParam(value="작업지시형태 (GRP_CD : CDK-00009 (고장/통신장애/특별점검 등))") @RequestParam(required = false) String workOrdTyp,
                                           @ApiParam(value="작업지시상태 (GRP_CD : CDK-00010)") @RequestParam(required = false) String workOrdStat,
                                           @ApiParam(value="사이트ID", required = true) @RequestParam String siteId
                                           ) throws Exception {
        SiteOpeStaDtlVO siteOpeStaDtlVO = new SiteOpeStaDtlVO();
        siteOpeStaDtlVO.setPublStatDt(publStatDt);
        siteOpeStaDtlVO.setPublEndDt(publEndDt);
        siteOpeStaDtlVO.setWorkOrdTyp(workOrdTyp);
        siteOpeStaDtlVO.setWorkOrdStat(workOrdStat);
        siteOpeStaDtlVO.setSiteId(siteId);

        return responseService.getSingleResult(dbService.siteOpeStaAlarm(siteOpeStaDtlVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "자원현황조회", notes = "자원현황을 조회한다")
    @GetMapping(value ="/assetOverview")
    @ResponseBody
    public SingleResult<Map> assetOverview() throws Exception {

        return responseService.getSingleResult(dbService.assetOverview());

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "자원현황사이트상세조회", notes = "해당 사이트의 정보를 조회한다")
    @GetMapping(value ="/assetOverviewSiteDtl")
    @ResponseBody
    public SingleResult<Map> assetOverviewSiteDtl(@ApiParam(value="사이트ID", required = true) @RequestParam String siteId) throws Exception {

        AssetOverviewSiteDtlVO assetOverviewSiteDtlVO = new AssetOverviewSiteDtlVO();
        assetOverviewSiteDtlVO.setSiteId(siteId);
        return responseService.getSingleResult(dbService.assetOverviewSiteDtl(assetOverviewSiteDtlVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "지역별사이트건수조회", notes = "지역별 해당하는 사이트의 건수를 조회한다")
    @GetMapping(value ="/regnSiteCnt")
    @ResponseBody
    public ListResult<RegnSiteCntVO> regnSiteCnt() throws Exception {

        return responseService.getListResult(dbService.regnSiteCnt());

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "지역별사이트조회", notes = "지역별 해당하는 사이트를 조회한다")
    @GetMapping(value ="/regnSiteList")
    @ResponseBody
    public ListResult<RegnSiteVO> regnSiteList(@ApiParam(value="지역구분", required = true) @RequestParam String regnGubn) throws Exception {


        RegnSiteCntVO regnSiteCntVO =  new RegnSiteCntVO();
        regnSiteCntVO.setRegnGubn(regnGubn);
        return responseService.getListResult(dbService.regnSiteList(regnSiteCntVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "자원그룹별정보조회", notes = "금일 자원그룹별 정보를 조회한다")
    @GetMapping(value ="/rscGrpInfo")
    @ResponseBody
    public ListResult<RscGrpInfoVO> rscGrpInfo() throws Exception {

        return responseService.getListResult(dbService.rscGrpInfo());

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "알람현황 조회", notes = "알람현황 정보를 조회한다")
    @GetMapping(value ="/alarmOverview")
    @ResponseBody
    public SingleResult<Map> alarmOverview(@ApiParam(value="자원구분") @RequestParam(required = false) String rescGubn,
                                           @ApiParam(value="사용자명") @RequestParam(required = false) String userName,
                                           @ApiParam(value="알람확인여부") @RequestParam(required = false) String alrtConfYn) throws Exception {

        AlarmOverviewVO alarmOverviewVO = new AlarmOverviewVO();
        alarmOverviewVO.setRescGubn(rescGubn);
        alarmOverviewVO.setUserName(userName);
        alarmOverviewVO.setAlrtConfYn(alrtConfYn);

        String[]  sites  = jwtTokenProvider.getSiteAuth();
        String  userSeq  = jwtTokenProvider.resolveTokenUser();
        if(sites.length > 0){
            alarmOverviewVO.setSiteIds(sites);
        }
        alarmOverviewVO.setUserSeq(userSeq);



        return responseService.getSingleResult(dbService.alarmOverview(alarmOverviewVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "알람현황상세 조회", notes = "알람현황상세 정보를 조회한다")
    @GetMapping(value ="/alarmOverviewDtl")
    @ResponseBody
    public SingleResult<Map> alarmOverviewDtl(@ApiParam(value="사이트ID",required = true) @RequestParam String siteId) throws Exception {

        AlarmOverviewDtlVO alarmOverviewDtlVO = new AlarmOverviewDtlVO();
        alarmOverviewDtlVO.setSiteId(siteId);

        String[]  sites  = jwtTokenProvider.getSiteAuth();
        String  userSeq  = jwtTokenProvider.resolveTokenUser();
        if(sites.length > 0){
            alarmOverviewDtlVO.setSiteIds(sites);
        }
        alarmOverviewDtlVO.setUserSeq(userSeq);

        return responseService.getSingleResult(dbService.alarmOverviewDtl(alarmOverviewDtlVO));

    }

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
    })
    @ApiOperation(value = "알람확인 처리", notes = "단건 알람확인 유무를 수정한다")
    @PostMapping(value ="/alarmConfYnUpdate")
    @ResponseBody
    public CommonResult alarmConfYnUpdate(@RequestBody @Valid AlarmConfYnUpdate alarmConfYnUpdate ) throws Exception {

        String  userSeq  = jwtTokenProvider.resolveTokenUser();
        alarmConfYnUpdate.setLastChngUseq(userSeq);
        dbService.alarmConfYnUpdate(alarmConfYnUpdate);

        return responseService.getSuccessResult();

    }
    
    
    @ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "spot price 조회", notes = "5분 , 30분 spot price , demand 를 조회한다")
	@GetMapping("/spotPriceGraph")
	public SingleResult<Map<String, Object>> cmnHourlyPowerList() throws Exception {

		final Map<String, Object> result = dbService.getSpotPriceGraph();

		return responseService.getSingleResult(result);
	}





}

