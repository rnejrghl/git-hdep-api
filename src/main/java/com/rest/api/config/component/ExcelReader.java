package com.rest.api.config.component;


import com.rest.api.config.constant.ExcelConstant;
import org.apache.poi.hssf.usermodel.HSSFWorkbook;
import org.apache.poi.openxml4j.exceptions.InvalidFormatException;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.Sheet;
import org.apache.poi.ss.usermodel.Workbook;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.stereotype.Component;
import org.springframework.web.multipart.MultipartFile;

import java.io.IOException;
import java.util.List;
import java.util.function.Function;
import java.util.stream.Collectors;
import java.util.stream.IntStream;

@Component
public class ExcelReader {

	Logger logger = LoggerFactory.getLogger(ExcelReader.class);

	public <T> List<T> readFileToList(final MultipartFile multipartFile,
									  final Function<Row, T> rowFunc) throws IOException, InvalidFormatException {

		final Workbook workbook = readWorkbook(multipartFile);
		final Sheet sheet = workbook.getSheetAt(0);
		final int rowCount = sheet.getPhysicalNumberOfRows();
		
		int lasRownum = sheet.getLastRowNum();
		
		int realRowCount = -1;

		for (int rowIndex = 1 ; rowIndex < rowCount ; rowIndex ++) {
			Row row = sheet.getRow(rowIndex);
			if (row != null) {
				realRowCount++;
				int cellCount = row.getPhysicalNumberOfCells();				
				for (int cellIndex = 0 ; cellIndex<=cellCount; cellIndex ++) {
					Cell cell = row.getCell(cellIndex);
					String value = "";
					if(cell==null){
						continue;
					}else{						
						value = this.getStringValue(cell);
					}
					sheet.getRow(rowIndex).getCell(cellIndex).setCellValue(value);
				}
			}
		}				
		return IntStream
				.range(0, realRowCount)
				.mapToObj(rowIndex -> rowFunc.apply(sheet.getRow(rowIndex)))
				.collect(Collectors.toList());
	}

	private String getStringValue(Cell cell) {
		String rtnValue = "";
		try {
			rtnValue = cell.getStringCellValue();
		} catch(IllegalStateException e) {
			rtnValue = Double.toString(cell.getNumericCellValue());
		}

		return rtnValue;
	}

	private Workbook readWorkbook(MultipartFile multipartFile) throws IOException, InvalidFormatException {
		verifyFileExtension(multipartFile);
		return multipartFileToWorkbook(multipartFile);
	}

	private void verifyFileExtension(MultipartFile multipartFile) throws InvalidFormatException {
		final String originalFilename = multipartFile.getOriginalFilename();
		logger.info(originalFilename);
		if (!isExcelExtension(originalFilename)) {
			throw new InvalidFormatException("This file extension is not verify");
		}
	}

	private boolean isExcelExtension(String fileName) {
		return fileName.endsWith(ExcelConstant.XLS) || fileName.endsWith(ExcelConstant.XLSX);
	}

	private boolean isExcelXls(String fileName) {
		return fileName.endsWith(ExcelConstant.XLS);
	}

	private boolean isExcelXlsx(String fileName) {
		return fileName.endsWith(ExcelConstant.XLSX);
	}

	private Workbook multipartFileToWorkbook(MultipartFile multipartFile)
			throws IOException {
		if (isExcelXls(multipartFile.getOriginalFilename())) {
			return new HSSFWorkbook(multipartFile.getInputStream());
		} else {
			return new XSSFWorkbook(multipartFile.getInputStream());
		}
	}
}
