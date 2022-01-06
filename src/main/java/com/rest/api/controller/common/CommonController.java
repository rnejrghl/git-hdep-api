package com.rest.api.controller.common;

import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.Arrays;
import java.util.List;
import java.util.Map;

import javax.validation.Valid;

import com.rest.api.advice.exception.CLoginSigninFailedException;
import com.rest.api.advice.exception.CPswdException;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.common.CmnCmcdVO;
import com.rest.api.model.common.CmnMsgVO;
import com.rest.api.model.common.CmnPswdUpdate;
import com.rest.api.model.common.CommonCityInsert;
import com.rest.api.model.common.CommonCityUpdate;
import com.rest.api.model.common.CommonInsert;
import com.rest.api.model.common.CommonPpInsert;
import com.rest.api.model.common.CommonPpUpdate;
import com.rest.api.model.common.CommonPpVO;
import com.rest.api.model.common.CommonUpdate;
import com.rest.api.model.common.CommonVO;
import com.rest.api.model.common.EssControlVO;
import com.rest.api.model.common.LangInsert;
import com.rest.api.model.common.LangUpdate;
import com.rest.api.model.common.LangVO;
import com.rest.api.model.common.PageCountVO;
import com.rest.api.model.common.SearchSite;
import com.rest.api.model.common.WoNoticeVO;
import com.rest.api.model.db.DbVO;
import com.rest.api.model.mm.CmnDvceVO;
import com.rest.api.model.mo.FailAlarmVo;
import com.rest.api.model.mo.KpiListVO;
import com.rest.api.model.mo.KpiVO;
import com.rest.api.model.mo.OperationsVO;
import com.rest.api.model.mo.PowersVO;
import com.rest.api.model.response.CommonResult;
import com.rest.api.model.response.ListResult;
import com.rest.api.model.response.SingleResult;
import com.rest.api.model.security.SecurityVO;
import com.rest.api.model.wo.MthWkodVO;
import com.rest.api.service.ResponseService;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.db.DbService;
import com.rest.api.service.security.SecurityService;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.format.annotation.DateTimeFormat;
import org.springframework.security.access.AccessDeniedException;
import org.springframework.security.crypto.password.PasswordEncoder;
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

import io.swagger.annotations.ApiImplicitParam;
import io.swagger.annotations.ApiImplicitParams;
import io.swagger.annotations.ApiOperation;
import io.swagger.annotations.ApiParam;
import lombok.RequiredArgsConstructor;

@RequiredArgsConstructor
@RestController
@Controller
@RequestMapping("/common")
public class CommonController {

	private final ResponseService responseService; // 결과를 처리할 Service

	@Autowired
	private CommonService commonService;

	@Autowired
	private DbService dbService;

	@Autowired
	private JwtTokenProvider jwtTokenProvider;

	private final PasswordEncoder passwordEncoder;

	@Autowired
	private SecurityService securityService;

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "코드 리스트 조회", notes = "모든 코드를 조회한다")
	@GetMapping(value = "/codes")
	@ResponseBody
	public ListResult<CmnCmcdVO> codeMainList(@ApiParam(value = "그룹아이디") @RequestParam(required = false) String grpCd)
			throws Exception {
		CmnCmcdVO cmnCmcdVO = new CmnCmcdVO();
		cmnCmcdVO.setGrpCd(grpCd);
		return responseService.getListResult(commonService.codeMainList(cmnCmcdVO));

	}

	/*
	 * @ApiImplicitParams(value = {
	 * 
	 * @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token",
	 * required = true, dataType = "String", paramType = "header") })
	 * 
	 * @ApiOperation(value = "코드 단건 조회", notes = "단일 코드를 조회한다")
	 * 
	 * @GetMapping(value ="/code/{cd}")
	 * 
	 * @ResponseBody public SingleResult<CommonVO> codeDtl(@PathVariable String cd)
	 * throws Exception { CommonVO commonVO = new CommonVO(); commonVO.setCd(cd);
	 * return responseService.getSingleResult(commonService.codeDtl(commonVO));
	 * 
	 * }
	 */

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "코드 단건 등록", notes = "단일 코드를 등록한다")
	@PostMapping(value = "/code")
	@ResponseBody
	public CommonResult codeInsert(@RequestBody @Valid CommonInsert commonVO) throws Exception {
		commonService.codeInsert(commonVO);
		return responseService.getSuccessResult();

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "코드 단건 삭제", notes = "단일 코드를 삭제한다")
	@PostMapping(value = "/dCodeDel")
	@ResponseBody
	public CommonResult codeDel(@RequestParam String grpCd, @RequestParam String cd) throws Exception {
		CommonVO commonVO = new CommonVO();
		commonVO.setGrpCd(grpCd);
		commonVO.setCd(cd);
		commonService.codeDelete(commonVO);
		return responseService.getSuccessResult();

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "코드 단건 수정", notes = "단일 코드를 수정한다")
	@PostMapping(value = "/uCode")
	@ResponseBody
	public CommonResult codeUpdate(@RequestBody @Valid CommonUpdate commonVO) throws Exception {
		commonService.codeUpdate(commonVO);
		return responseService.getSuccessResult();

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "코드 수정", notes = "코드를 수정한다")
	@PostMapping(value = "/uCodeList")
	@ResponseBody
	public CommonResult codeUpdateList(@RequestBody @Valid List<CommonUpdate> commonVO) throws Exception {
		commonService.codeUpdateList(commonVO);
		return responseService.getSuccessResult();

	}

	/*
	 * @ApiImplicitParams(value = {
	 * 
	 * @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token",
	 * required = true, dataType = "String", paramType = "header") })
	 * 
	 * @ApiOperation(value = "대시보드 조회", notes = "대시보드 조회한다")
	 * 
	 * @GetMapping(value ="/dashboard")
	 * 
	 * @ResponseBody public SingleResult<Map> dashboard() throws Exception { return
	 * responseService.getSingleResult(commonService.dashboard());
	 * 
	 * }
	 */
	@ApiOperation(value = "파일 등록", notes = "파일을 등록한다.")
	@PostMapping("/upload")
	public ListResult<CmnMsgVO> fileUpload(@ApiParam(value = "파일아이디") @RequestParam(required = false) String fileId,
			@RequestParam("file") MultipartFile[] multipartFile) throws Exception {

		String reFileId = commonService.fileUpload2(fileId, multipartFile);
		System.out.println(reFileId);
		List<CmnMsgVO> cmnMsgVO = null;
		if (reFileId != null && !"".equals(reFileId)) {
			cmnMsgVO = commonService.fileInfo(reFileId);
		}

		return responseService.getListResult(cmnMsgVO);
	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "단일 파일 삭제", notes = "단일 파일을 삭제 한다.")
	@PostMapping("/fileDelete")
	public CommonResult fileUpload(@ApiParam(value = "파일SEQ") @RequestParam(required = false) String fileSeq)
			throws Exception {

		commonService.fileDelete(fileSeq);

		return responseService.getSuccessResult();
	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "연도별사업현황 조회", notes = "연도별사업현황를 조회한다")
	@GetMapping(value = "/codePps")
	@ResponseBody
	public ListResult<CommonPpVO> codePpList() throws Exception {

		return responseService.getListResult(commonService.codePpList());

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "연도별사업현황 등록", notes = "연도별사업현황를 등록한다")
	@PostMapping(value = "/codePp")
	@ResponseBody
	public CommonResult codePpInsert(@RequestBody @Valid CommonPpInsert commonPpInsert) throws Exception {
		commonService.codePpInsert(commonPpInsert);
		return responseService.getSuccessResult();

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "연도별사업현황 수정", notes = "연도별사업현황를 수정한다")
	@PostMapping(value = "/uCodePp")
	@ResponseBody
	public CommonResult codePpUpdate(@RequestBody @Valid CommonPpUpdate commonPpUpdate) throws Exception {
		commonService.codePpUpdate(commonPpUpdate);
		return responseService.getSuccessResult();

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "사용국가 조회", notes = "사용국가를 조회한다")
	@GetMapping(value = "/country")
	@ResponseBody
	public SingleResult<Map> country() throws Exception {

		return responseService.getSingleResult(commonService.countryInfo());

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "CITY코드 등록", notes = "CITY코드 등록한다")
	@PostMapping(value = "/city")
	@ResponseBody
	public CommonResult city(@RequestBody @Valid CommonCityInsert commonCityInsert) throws Exception {
		commonService.cityInsert(commonCityInsert);
		return responseService.getSuccessResult();

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "CITY코드 수정", notes = "CITY코드 수정한다")
	@PostMapping(value = "/uCity")
	@ResponseBody
	public CommonResult uCity(@RequestBody @Valid CommonCityUpdate commonCityUpdate) throws Exception {
		commonService.cityUpdate(commonCityUpdate);
		return responseService.getSuccessResult();

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "다국어 조회", notes = "다국어를 조회한다")
	@GetMapping(value = "/langList")
	@ResponseBody
	public ListResult<LangVO> langList() throws Exception {

		return responseService.getListResult(commonService.langList());

	}

	@ApiOperation(value = "다국어 조회(EXCEL)", notes = "다국어 조회한다(EXCEL)")
	@GetMapping(value = "langList/excel")
	@ResponseBody
	public ModelAndView langListExcel() throws Exception {

		return new ModelAndView("excelXlsView", commonService.langListExcel());

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "다국어 단건 등록", notes = "다국어 단건 등록한다")
	@PostMapping(value = "/langInsert")
	@ResponseBody
	public CommonResult langInsert(@RequestBody @Valid LangInsert langInsert) throws Exception {
		commonService.langInsert(langInsert);
		return responseService.getSuccessResult();

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "다국어 단건 수정", notes = "다국어 단건 수정한다")
	@PostMapping(value = "/langUpdate")
	@ResponseBody
	public CommonResult langUpdate(@RequestBody @Valid LangUpdate langUpdate) throws Exception {
		commonService.langUpdate(langUpdate);
		return responseService.getSuccessResult();

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "사이트 운전현황 정보조회", notes = "사이트 운전현황 정보를 조회 한다")
	@GetMapping(value = "/dashboard")
	@ResponseBody
	public SingleResult<Map> siteOpeStaDtl(@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId)
			throws Exception {
		String userSeq = jwtTokenProvider.resolveTokenUser();
		String[] sites = jwtTokenProvider.getSiteAuth();
		DbVO dbVO = new DbVO();
		dbVO.setSiteId(siteId);
		dbVO.setUserSeq(userSeq);
		if (sites.length > 0) {
			dbVO.setSites(sites);
		}
		return responseService.getSingleResult(dbService.siteOpeStaInfo(dbVO));

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "사이트 운전현황 알람리스트", notes = "사이트 운전현황 알람정보를 조회 한다")
	@GetMapping(value = "/cmnAlarmList")
	@ResponseBody
	public ListResult<DbVO> cmnAlarmList(@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId)
			throws Exception {
		String userSeq = jwtTokenProvider.resolveTokenUser();
		DbVO dbVO = new DbVO();
		dbVO.setSiteId(siteId);
		dbVO.setUserSeq(userSeq);
		return responseService.getListResult(dbService.cmnAlarmList(dbVO));

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "사이트 운전현황 raw정보", notes = "사이트 운전현황 raw정보 조회 한다")
	@GetMapping(value = "/cmnRawTagList")
	@ResponseBody
	public ListResult<CmnDvceVO> cmnRawTagList(@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId)
			throws Exception {
		String userSeq = jwtTokenProvider.resolveTokenUser();
		String[] sites = jwtTokenProvider.getSiteAuth();
		DbVO dbVO = new DbVO();
		dbVO.setSiteId(siteId);
		dbVO.setUserSeq(userSeq);
		if (sites.length > 0) {
			dbVO.setSites(sites);
		}
		return responseService.getListResult(dbService.cmnRawTagList(dbVO));

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "사이트 운전현황 raw정보", notes = "사이트 운전현황 raw정보 조회 한다")
	@GetMapping(value = "/cmnRawList")
	@ResponseBody
	public SingleResult<Map> cmnRawList(@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId,
			@ApiParam(value = "조회일", required = true) @RequestParam String date,
			@ApiParam(value = "디바이스 ID", required = true) @RequestParam String dvceId) throws Exception {
		String userSeq = jwtTokenProvider.resolveTokenUser();
		PowersVO powersVO = new PowersVO();
		powersVO.setSiteId(siteId);
		powersVO.setDvceId(dvceId);
		powersVO.setStartDate(date);
		powersVO.setEndDate(date);
		return responseService.getSingleResult(dbService.cmnRawList(powersVO));

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "사이트 운전현황 KPI리스트", notes = "사이트 운전현황 KPI정보 조회 한다")
	@GetMapping(value = "/cmnKpiList")
	@ResponseBody
	public ListResult<KpiListVO> cmnKpiList(@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId,
			@ApiParam(value = "구분", required = true) @RequestParam String type,
			@ApiParam(value = "조회시작일", required = true) @RequestParam String startDt,
			@ApiParam(value = "조회종료일", required = true) @RequestParam String endDt) throws Exception {
		String userSeq = jwtTokenProvider.resolveTokenUser();
		KpiVO kpiVO = new KpiVO();
		kpiVO.setSiteId(siteId);
		kpiVO.setStatYm(startDt);
		kpiVO.setEndYm(endDt);
		kpiVO.setSearchType(type);
		return responseService.getListResult(dbService.cmnKpiList(kpiVO));

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "사이트 운전현황 WorkOrder리스트", notes = "사이트 운전현황 WorkOrder정보 조회 한다")
	@GetMapping(value = "/cmnWorkOrderList")
	@ResponseBody
	public ListResult<MthWkodVO> cmnWorkOrderList(
			@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId,
			@ApiParam(value = "작업지시형태 (GRP_CD : CDK-00009 (고장/통신장애/특별점검 등))") @RequestParam(required = false) String workOrdTyp,
			@ApiParam(value = "작업지시상태 (GRP_CD : CDK-00010)") @RequestParam(required = false) String workOrdStat,
			@ApiParam(value = "완료여부") @RequestParam(required = false) String rsltRegYn,
			@ApiParam(value = "발행시작일") @RequestParam(required = false) String publStartDt,
			@ApiParam(value = "발행종료일") @RequestParam(required = false) String publEndDt,
			@ApiParam(value = "담당자") @RequestParam(required = false) String userSeq) throws Exception {
		MthWkodVO mthWkodVO = new MthWkodVO();

		mthWkodVO.setPublStartDt(publStartDt);
		mthWkodVO.setPublEndDt(publEndDt);
		mthWkodVO.setRsltRegYn(rsltRegYn);
		mthWkodVO.setWorkOrdTyp(workOrdTyp);
		mthWkodVO.setWorkOrdStat(workOrdStat);
		mthWkodVO.setSiteUserSeq(userSeq);
		mthWkodVO.setSiteId(siteId);
		return responseService.getListResult(dbService.cmnWorkOrderList(mthWkodVO));

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "사이트 운전현황 발전소 실패 리스트", notes = "사이트 운전현황 발전소 실패 정보를 조회 한다")
	@GetMapping(value = "/cmnFailAlarmList")
	@ResponseBody
	public ListResult<FailAlarmVo> cmnPlantFailList(
			@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId,
			@ApiParam(value = "발전소 실패상태 (GRP_CD : CDK-00028)") @RequestParam(required = false) String status,
			@ApiParam(value = "알림발생시작일") @RequestParam(required = false) String notiStartDt,
			@ApiParam(value = "알림발생종료일") @RequestParam(required = false) String notiEndDt,
			@ApiParam(value = "알림해제시작일") @RequestParam(required = false) String unlockStartDt,
			@ApiParam(value = "알림해제종료일") @RequestParam(required = false) String unlockEndDt

	) throws Exception {
		String userSeq = jwtTokenProvider.resolveTokenUser();
		FailAlarmVo failListVo = new FailAlarmVo();
		failListVo.setSiteId(siteId);
		failListVo.setStatus(status);
		failListVo.setNotiStartDt(notiStartDt);
		failListVo.setNotiEndDt(notiEndDt);
		failListVo.setUnlockStartDt(unlockStartDt);
		failListVo.setUnlockEndDt(unlockEndDt);

		return responseService.getListResult(dbService.cmnPlantFailList(failListVo));
	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "사이트 운전현황 사이트정보 상세", notes = "사이트 운전현황 사이트정보 상세정보를 조회 한다")
	@GetMapping(value = "/cmnSiteOpeStas")
	@ResponseBody
	public SingleResult<DbVO> cmnSiteOpeStas(@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId)
			throws Exception {
		String userSeq = jwtTokenProvider.resolveTokenUser();
		String[] sites = jwtTokenProvider.getSiteAuth();
		DbVO dbVO = new DbVO();
		dbVO.setSiteId(siteId);
		dbVO.setUserSeq(userSeq);
		if (sites.length > 0) {
			dbVO.setSites(sites);
		}

		return responseService.getSingleResult(dbService.cmnSiteOpeStas(dbVO));
	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "사이트 운전현황 운전상태 조회", notes = "사이트 운전현황 사이트정보 운전상태를 조회 한다")
	@GetMapping(value = "/cmnOperList")
	@ResponseBody
	public SingleResult<Map> cmnSiteOpeList(@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId)
			throws Exception {
		String userSeq = jwtTokenProvider.resolveTokenUser();
		String[] sites = jwtTokenProvider.getSiteAuth();
		OperationsVO operationsVO = new OperationsVO();
		operationsVO.setSiteId(siteId);

		return responseService.getSingleResult(dbService.cmnSiteOperList(operationsVO));
	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "사이트 발전량 기간 조회", notes = "")
	@GetMapping("/sites/{siteId}/productions")
	public SingleResult<Map<String, Object>> cmnHourlyOperList(@PathVariable final String siteId,
			@RequestParam(required = true) @DateTimeFormat(pattern = "yyyyMMdd") final LocalDate startDate,
			@RequestParam(required = true) @DateTimeFormat(pattern = "yyyyMMdd") final LocalDate endDate)
			throws Exception {
		final String[] sites = jwtTokenProvider.getSiteAuth();

		// site 접근 권한 확인
		final boolean hasSiteAuth = Arrays.stream(sites).anyMatch(siteId::equals);
		if (!hasSiteAuth) {
			throw new AccessDeniedException("Resource not found");
		}

		final PowersVO powersVO = new PowersVO();
		powersVO.setSiteId(siteId);
		powersVO.setStartDate(startDate.format(DateTimeFormatter.ofPattern("yyyyMMdd")));
		powersVO.setEndDate(endDate.format(DateTimeFormatter.ofPattern("yyyyMMdd")));
		final Map<String, Object> result = dbService.cmnHourlyOperList(powersVO);
		result.put("siteId", siteId);

		return responseService.getSingleResult(result);
	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "사이트 발전량 기간 조회", notes = "")
	@GetMapping("/sites/{siteId}/{rescGubn}/productions")
	public SingleResult<Map<String, Object>> cmnHourlyPowerList(@PathVariable final String siteId,
			@RequestParam(required = true) @DateTimeFormat(pattern = "yyyyMMdd") final LocalDate startDate,
			@RequestParam(required = true) @DateTimeFormat(pattern = "yyyyMMdd") final LocalDate endDate)
			throws Exception {
		final String[] sites = jwtTokenProvider.getSiteAuth();

		// site 접근 권한 확인
		final boolean hasSiteAuth = Arrays.stream(sites).anyMatch(siteId::equals);
		if (!hasSiteAuth) {
			throw new AccessDeniedException("Resource not found");
		}

		final PowersVO powersVO = new PowersVO();
		powersVO.setSiteId(siteId);
		powersVO.setStartDate(startDate.format(DateTimeFormatter.ofPattern("yyyyMMdd")));
		powersVO.setEndDate(endDate.format(DateTimeFormatter.ofPattern("yyyyMMdd")));
		final Map<String, Object> result = dbService.cmnHourlyPowerList(powersVO);

		return responseService.getSingleResult(result);
	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "회원비밀번호 변경", notes = "회원비밀번호를 변경한다.")
	@PostMapping(value = "/newPassword")
	@ResponseBody
	public CommonResult newPassword(@RequestBody @Valid CmnPswdUpdate cmnPswdUpdate) throws Exception {
		SecurityVO userInfo = securityService.login(cmnPswdUpdate.getUserId());
		if (userInfo == null) {
			throw new CLoginSigninFailedException();
		}

		if (!passwordEncoder.matches(cmnPswdUpdate.getPswd(), userInfo.getPassword())) {
			throw new CPswdException();
		}
		cmnPswdUpdate.setUserSeq(userInfo.getUserSeq());
		commonService.newPassword(cmnPswdUpdate);
		return responseService.getSuccessResult();

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "NOTICE 리스트", notes = "NOTICE 조회한다")
	@GetMapping(value = "/noticeList")
	@ResponseBody
	public ListResult<WoNoticeVO> noticeList() throws Exception {

		return responseService.getListResult(commonService.noticeList());

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "사이트 검색", notes = "사이트를 검색한다")
	@GetMapping(value = "/searchSite")
	@ResponseBody
	public ListResult<SearchSite.Res> searchSiteList(
			@ApiParam(value = "사이트ID") @RequestParam(required = false) String q) throws Exception {
		String[] sites = jwtTokenProvider.getSiteAuth();
		String userSeq = jwtTokenProvider.resolveTokenUser();

		SearchSite.SearchDTO searchDTO = new SearchSite.SearchDTO(userSeq, sites, q);

		return responseService.getListResult(commonService.searchSiteList(searchDTO));

	}

	@ApiOperation(value = "ESS CONTROL 리스트", notes = "ESS CONTROL 조회한다")
	@GetMapping(value = "/essControlList")
	@ResponseBody
	public ListResult<EssControlVO> essControlList(
			@ApiParam(value = "그룹아이디") @RequestParam(required = false) String siteId) throws Exception {

		return responseService.getListResult(commonService.essControlList(siteId));

	}

	@ApiImplicitParams(value = {
			@ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
	@ApiOperation(value = "ESS CONTROL HISTORY 리스트", notes = "ESS CONTROL 이력을 조회한다")
	@GetMapping(value = "/essControlHistoryList")
	@ResponseBody
	public SingleResult<Map> genStatList(@ApiParam(value = "사이트ID", required = false) @RequestParam String siteId,
			@ApiParam(value = "페이지 번호", required = false) @RequestParam Integer page) throws Exception {

		PageCountVO pageCountVO = new PageCountVO();
		pageCountVO.setSiteId(siteId);
		if (page == null) {
			page = 1;
		}
		pageCountVO.setPage(page);

		return responseService.getSingleResult(commonService.essControlHistoryList(pageCountVO));
	}

	@ApiOperation(value = "ESS CONTROL 등록", notes = "ESS CONTROL 등록한다")
	@PostMapping(value = "/essControlInsert")
	@ResponseBody
	public CommonResult essControlInsert(@RequestBody @Valid EssControlVO essControlVO) throws Exception {
		String userSeq = jwtTokenProvider.resolveTokenUser();
		essControlVO.setUserSeq(userSeq);

		commonService.essControlInsert(essControlVO);
		return responseService.getSuccessResult();

	}

	@ApiOperation(value = "ESS CONTROL 업데이트", notes = "ESS CONTROL 업데이트 한다")
	@PostMapping(value = "/essControlUpdate")
	@ResponseBody
	public CommonResult essControlUpdate(@RequestBody @Valid EssControlVO essControlVO) throws Exception {
		commonService.essControlUpdate(essControlVO);
		return responseService.getSuccessResult();

	}

}
