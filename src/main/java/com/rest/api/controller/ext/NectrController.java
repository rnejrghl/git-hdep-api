package com.rest.api.controller.ext;


import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.access.AccessDeniedException;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;

import com.rest.api.config.security.JwtTokenProvider;

import com.rest.api.model.ext.NectrBocResultVO;
import com.rest.api.model.ext.NectrHpcResultVO;
import com.rest.api.model.ext.NectrPfResultVO;
import com.rest.api.model.ext.NectrResultVO;
import com.rest.api.model.response.SingleResult;
import com.rest.api.service.ResponseService;
import com.rest.api.service.ext.NectrService;

import io.swagger.annotations.ApiImplicitParam;
import io.swagger.annotations.ApiImplicitParams;
import io.swagger.annotations.ApiOperation;
import io.swagger.annotations.ApiParam;
import lombok.RequiredArgsConstructor;

import java.time.format.DateTimeFormatter;
import java.time.LocalDateTime;
import java.time.ZoneId;
import java.text.SimpleDateFormat;
import java.util.Date;

@RequiredArgsConstructor
@RestController
@RequestMapping(value = "/ext")
public class NectrController {
	
	private final ResponseService responseService; // 결과를 처리할 Service	

	@Autowired
    private NectrService nectrService;

	@Autowired
    private JwtTokenProvider jwtTokenProvider;
	
	@ApiImplicitParams(value = {
	        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
	    })
	@ApiOperation(value = "getPowerFlow", notes = "전력흐름도 및 SOC , SOH 값 조회")
	@GetMapping(value = "/getPowerFlow")
	@ResponseBody
	public SingleResult<NectrPfResultVO> getPowerFlow(@ApiParam(value = "사이트ID") @RequestParam String siteId) throws Exception {		
		
		String  userSeq  = jwtTokenProvider.resolveTokenUser();
		String	histId=nectrService.getHistId();
		// 파라미터로 넘어로 siteId 로 해당 site가 있는지 유효성 검사
		boolean isExist= nectrService.checkSite(siteId);
		
		//siteId가 존재하지 않을때
		NectrPfResultVO nectrPfResultVO=new NectrPfResultVO();
		NectrBocResultVO nectrBocResultVO=new NectrBocResultVO();
		NectrHpcResultVO nectrHpcResultVO=new NectrHpcResultVO();
		if(!isExist) {
			Boolean Insert=nectrService.nectrResult(nectrPfResultVO,nectrBocResultVO,nectrHpcResultVO, userSeq, siteId, null, "-9999","P");
			throw new AccessDeniedException("SiteId Resource not found. User Sequence :"+userSeq+", History ID : "+histId);
		};

        //해당사이트 아이디로 전력흐름도 data , 및 SOC, SOH 값조회
        Map<String,String> pData = nectrService.getPowerFlow(siteId);
        
        //위의 값으로 데이터 가공 ( pData 로 조건문으로인해 데이터 반환)               
        nectrPfResultVO = nectrService.convertData(pData);		

		if(nectrPfResultVO==null){
			Boolean Insert=nectrService.nectrResult(nectrPfResultVO,nectrBocResultVO,nectrHpcResultVO, userSeq, siteId, null, "-9999","P");
			throw new Exception("Something went wrong! User Sequence :"+userSeq+", History ID : "+histId);
		}
		
		Boolean Insert=nectrService.nectrResult(nectrPfResultVO,nectrBocResultVO,nectrHpcResultVO, userSeq, siteId, null, "0","P");

		nectrPfResultVO.setHistId(histId);
		nectrPfResultVO.setUserSeq(userSeq);
        
		return responseService.getSingleResult(nectrPfResultVO);
	}	
	
	
	
	@ApiImplicitParams(value = {
	        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
	    })
	@ApiOperation(value = "getBatteryChart", notes = "실시간 출력 (kW) 조회")
	@GetMapping(value = "/getBatteryChart")
	@ResponseBody
	public SingleResult<NectrBocResultVO> getBatteryChart(@ApiParam(value = "사이트ID") @RequestParam String siteId,@ApiParam(value = "조회시간") @RequestParam String inputDate) throws Exception {
		
		String  userSeq  = jwtTokenProvider.resolveTokenUser();
		String	histId=nectrService.getHistId();
		// 파라미터로 넘어로 siteId 로 해당 site가 있는지 유효성 검사
		boolean isExist= nectrService.checkSite(siteId);
				
		//siteId가 존재하지 않을때
		NectrPfResultVO nectrPfResultVO=new NectrPfResultVO();
		NectrBocResultVO nectrBocResultVO=new NectrBocResultVO();
		NectrHpcResultVO nectrHpcResultVO=new NectrHpcResultVO();
		if(!isExist) {
			Boolean Insert=nectrService.nectrResult(nectrPfResultVO,nectrBocResultVO,nectrHpcResultVO, userSeq, siteId, inputDate, "-9999","B");
			throw new AccessDeniedException("SiteId Resource not found. User Sequence :"+userSeq+", History ID : "+histId);
		};
		//inputDate가 미래일 때
		String localDate = LocalDateTime.now(ZoneId.of("Australia/Sydney")).format(DateTimeFormatter.ofPattern("yyyyMMddHHmmss"));
		SimpleDateFormat transFormat = new SimpleDateFormat("yyyyMMddHHmmss");
		Date to = transFormat.parse(inputDate);
		Date now=transFormat.parse(localDate);

		if(inputDate.length()!=14||now.before(to)){
			Boolean Insert=nectrService.nectrResult(nectrPfResultVO,nectrBocResultVO,nectrHpcResultVO,userSeq, siteId, inputDate, "-9999","B");
			throw new Exception("Check your format of InputDate Parameter. User Sequence :"+userSeq+", History ID : "+histId);
		};
		nectrBocResultVO =nectrService.getBatteryChart(siteId,inputDate);

		if(nectrBocResultVO==null){
			Boolean Insert=nectrService.nectrResult(nectrPfResultVO,nectrBocResultVO,nectrHpcResultVO, userSeq, siteId, inputDate, "-9999","B");
			throw new Exception("Something went wrong! User Sequence :"+userSeq+", History ID : "+histId);
		}

		Boolean Insert=nectrService.nectrResult(nectrPfResultVO,nectrBocResultVO,nectrHpcResultVO, userSeq, siteId, inputDate, "0","B");

		nectrBocResultVO.setHistId(histId);
		nectrBocResultVO.setUserSeq(userSeq);
				
        return responseService.getSingleResult(nectrBocResultVO);
	}
	
	
	@ApiImplicitParams(value = {
	        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header")
	    })
	@ApiOperation(value = "getProductionsChart", notes = "시간별 발전량 (kWh) 조회")
	@GetMapping(value = "/getProductionsChart")
	@ResponseBody
	public SingleResult<NectrHpcResultVO> getProductionsChart(@ApiParam(value = "사이트ID") @RequestParam String siteId,@ApiParam(value = "조회시간") @RequestParam String inputDate) throws Exception {
		
		String  userSeq  = jwtTokenProvider.resolveTokenUser();
		String	histId=nectrService.getHistId();

		// 파라미터로 넘어로 siteId 로 해당 site가 있는지 유효성 검사
		boolean isExist= nectrService.checkSite(siteId);
		//siteId가 존재하지 않을때
		NectrPfResultVO nectrPfResultVO=new NectrPfResultVO();
		NectrBocResultVO nectrBocResultVO=new NectrBocResultVO();
		NectrHpcResultVO nectrHpcResultVO=new NectrHpcResultVO();
		if(!isExist) {
			Boolean Insert=nectrService.nectrResult(nectrPfResultVO,nectrBocResultVO,nectrHpcResultVO, userSeq, siteId, inputDate, "-9999","H");
			throw new AccessDeniedException("SiteId Resource not found. User Sequence :"+userSeq+", History ID : "+histId);
		};
		
		//inputDate가 미래일 때
		String localDate = LocalDateTime.now(ZoneId.of("Australia/Sydney")).format(DateTimeFormatter.ofPattern("yyyyMMddHHmmss"));
		SimpleDateFormat transFormat = new SimpleDateFormat("yyyyMMddHHmmss");
		Date to = transFormat.parse(inputDate);
		Date now=transFormat.parse(localDate);

		if(inputDate.length()!=14||now.before(to)){
			Boolean Insert=nectrService.nectrResult(nectrPfResultVO,nectrBocResultVO,nectrHpcResultVO,userSeq, siteId, inputDate, "-9999","H");
			throw new Exception("Check your format of InputDate Parameter. User Sequence :"+userSeq+", History ID : "+histId);
		};
		nectrHpcResultVO =nectrService.getProductionsChart(siteId,inputDate);

		if(nectrHpcResultVO==null){
			Boolean Insert=nectrService.nectrResult(nectrPfResultVO,nectrBocResultVO,nectrHpcResultVO, userSeq, siteId, inputDate, "-9999","H");
			throw new Exception("Something went wrong! User Sequence :"+userSeq+", History ID : "+histId);
		}

		Boolean Insert=nectrService.nectrResult(nectrPfResultVO,nectrBocResultVO,nectrHpcResultVO, userSeq, siteId, inputDate, "0","H");

		nectrHpcResultVO.setHistId(histId);
		nectrHpcResultVO.setUserSeq(userSeq);
				
        return responseService.getSingleResult(nectrHpcResultVO);
	}
	
}
