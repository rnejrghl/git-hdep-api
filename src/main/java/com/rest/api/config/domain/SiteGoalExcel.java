package com.rest.api.config.domain;

import lombok.Data;
import org.apache.poi.ss.usermodel.Row;

@Data
public class SiteGoalExcel {

	private String goalYy;

	private String goalMm;

	private String goalGenrCapa;

	private String pr;

	private String ppa;

	private String sale;

	private String energy;

	private String ivt;

	protected SiteGoalExcel() { }

	public SiteGoalExcel(String goalYy, String goalMm, String goalGenrCapa, String energy, String ivt, String ppa, String sale) {
		this.goalYy = goalYy;
		this.goalMm = goalMm;
		this.goalGenrCapa = goalGenrCapa;
		this.energy = energy;
		this.ivt = ivt;
		this.ppa = ppa;
		this.sale = sale;
	}

	public static SiteGoalExcel from(Row row) {
		return new SiteGoalExcel(
				row.getCell(0).getStringCellValue(), // 년도
				row.getCell(1).getStringCellValue(), // 월
				row.getCell(2).getStringCellValue(), // KPI
				row.getCell(3).getStringCellValue(), // energy yield
				row.getCell(4).getStringCellValue(), // IVT Efficiency
				row.getCell(5).getStringCellValue(), // PPA
				row.getCell(6).getStringCellValue()  // sale
		);
	}
}


