package com.rest.api.model.mo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class KpiListVO {
	@ApiModelProperty(value = "사이트ID")
	private String siteId;			/* 사이트ID */
	@ApiModelProperty(value = "현재일자")
	private String nowDate;			/* 현재일자 */
	@ApiModelProperty(value = "현재 발전량")
	private String nowTotPwAmt;			/* 현재 발전량 */
	@ApiModelProperty(value = "현재 energy yield")
	private String nowTotEnergy;			/* 현재 energy yield */
	@ApiModelProperty(value = "현재 ivt Efficiency")
	private String nowTotIvt;			/* 현재 ivt Efficiency */
	@ApiModelProperty(value = "현재 ppa")
	private String nowTotPpa;			/* 현재 ppa */

	@ApiModelProperty(value = "과거일자")
	private String lastDate;			/* 과거일자 */
	@ApiModelProperty(value = "과거 발전량")
	private String lastTotPwAmt;			/* 과거 발전량 */
	@ApiModelProperty(value = "과거 energy yield")
	private String lastTotEnergy;			/* 과거 energy yield */
	@ApiModelProperty(value = "과거 ivt Efficiency")
	private String lastTotIvt;			/* 과거ivt Efficiency */
	@ApiModelProperty(value = "과거 ppa")
	private String lastTotPpa;			/* 과거 ppa */



	@ApiModelProperty(value = "목표일자")
	private String goalDt;			/* 목표일자 */
	@ApiModelProperty(value = "목표발전량")
	private String goalGenrCapa;	/* 목표발전량 */
	@ApiModelProperty(value = "PPA거래량")
	private String goalPpa;				/* PPA거래량 */
	@ApiModelProperty(value = "pr")
	private String goalPr;				/* pr */
	@ApiModelProperty(value = "매출")
	private String goalSale;			/* 매출 */

	@ApiModelProperty(value = "Energy Yield")
	private String goalEnergy;				/* Energy Yield (Wh/Wp) */
	@ApiModelProperty(value = "IVT Efficiency")
	private String goalIvt;				/* IVT Efficiency(%) */

	@ApiModelProperty(value = "조회시작년월일")
	private String startDate;			/* 조회시작년월일 */
	@ApiModelProperty(value = "조회종료년월일")
	private String endDate;			/* 조회종료년월일 */
}
