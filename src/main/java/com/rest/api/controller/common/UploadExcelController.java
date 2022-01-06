package com.rest.api.controller.common;

import com.rest.api.model.response.CommonResult;
import com.rest.api.config.component.ExcelReader;
import com.rest.api.config.domain.SiteGoalExcel;
import com.rest.api.service.ResponseService;
import org.apache.poi.openxml4j.exceptions.InvalidFormatException;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.multipart.MultipartFile;
import java.io.IOException;
import java.util.List;

@Controller
@RestController
@RequestMapping("/upload")
public class UploadExcelController {

	@Autowired
	private ExcelReader excelReader;

	@Autowired
	private ResponseService responseService; // 결과를 처리할 Service



	@PostMapping("/excel")
	public CommonResult siteGoalExcel(@RequestParam("file") MultipartFile multipartFile) throws IOException, InvalidFormatException {

		List<SiteGoalExcel> siteGoalExcel = excelReader.readFileToList(multipartFile, SiteGoalExcel::from);


		for(int i = 1 ; i < siteGoalExcel.size(); i++ ){
			System.out.println("=========="+i+"=============");
			System.out.println(siteGoalExcel.get(i).getGoalYy());
			System.out.println(siteGoalExcel.get(i).getGoalMm());
			System.out.println(siteGoalExcel.get(i).getGoalGenrCapa());
			System.out.println(siteGoalExcel.get(i).getPr());
			System.out.println(siteGoalExcel.get(i).getPpa());
			System.out.println(siteGoalExcel.get(i).getSale());
			System.out.println("------------------------");
		}

		return responseService.getSuccessResult();
	}

}

