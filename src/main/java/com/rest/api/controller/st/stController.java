package com.rest.api.controller.st;

import java.util.Map;

import javax.validation.Valid;

import com.rest.api.config.component.ExcelReader;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.response.ListResult;
import com.rest.api.model.response.SingleResult;
import com.rest.api.service.ResponseService;
import lombok.RequiredArgsConstructor;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.servlet.ModelAndView;

import io.swagger.annotations.ApiImplicitParam;
import io.swagger.annotations.ApiImplicitParams;
import io.swagger.annotations.ApiOperation;
import io.swagger.annotations.ApiParam;

import com.rest.api.model.st.*;
import com.rest.api.service.st.StatService;

@RequiredArgsConstructor
@RestController
@Controller
@RequestMapping(value = "/st")
public class stController {

    private final ResponseService responseService; // 결과를 처리할 Service

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    @Autowired
    private StatService StatService;

    @Autowired
    private ExcelReader excelReader;

    @ApiImplicitParams(value = {
            @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
    @ApiOperation(value = "발전량 분석 테이블", notes = "해당 사이트의 발전량 분석 결과를 조회한다")
    @GetMapping(value = "/genStatList")
    @ResponseBody
    public SingleResult<Map> genStatList(@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId,
            @ApiParam(value = "조회시작년월", required = true) @RequestParam String startDt,
            @ApiParam(value = "조회종료년월", required = true) @RequestParam String endDt,
            @ApiParam(value = "구분", required = true) @RequestParam String type,
            @ApiParam(value = "페이지 번호", required = true) @RequestParam Integer page) throws Exception {

        GenListVO genListVO = new GenListVO();

        genListVO.setSiteId(siteId);
        genListVO.setStartDt(startDt);
        genListVO.setEndDt(endDt);
        genListVO.setType(type);
        if (page == null) {
            page = 1;
        }
        genListVO.setPage(page);

        return responseService.getSingleResult(StatService.genStatList(genListVO));
    }

    @ApiOperation(value = "발전량 분석 테이블(EXCEL)", notes = "해당 사이트의 발전량 분석 테이블을 조회한다(EXCEL)")
    @GetMapping(value = "/genStatList/excel")
    @ResponseBody
    public ModelAndView genStatListExcel(@ApiParam(value = "사이트ID", required = true) @RequestParam String siteId,
            @ApiParam(value = "조회시작년월", required = true) @RequestParam String startDt,
            @ApiParam(value = "조회종료년월", required = true) @RequestParam String endDt,
            @ApiParam(value = "구분", required = true) @RequestParam String type) throws Exception {
        GenGraphVO genGraphVO = new GenGraphVO();

        genGraphVO.setSiteId(siteId);
        genGraphVO.setStartDt(startDt);
        genGraphVO.setEndDt(endDt);
        genGraphVO.setType(type);

        return new ModelAndView("excelXlsView", StatService.genStatListExcel(genGraphVO));
    }
}
