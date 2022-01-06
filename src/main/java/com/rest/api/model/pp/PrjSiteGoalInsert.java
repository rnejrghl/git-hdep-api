package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class PrjSiteGoalInsert {
	@ApiModelProperty(required = true ,value = "사이트ID")
	private String siteId; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(required = true ,value = "목표일자")
	private String goalDt;			/* 목표일자 */
	@ApiModelProperty(value = "목표발전량")
	private String goalGenrCapa;	/* 목표발전량 (기본단위 : kWh ( 코드ID : CDK-00018.TUN007 )) */
	@ApiModelProperty(value = "PR")
	private String pr;				/* PR (%) */
	@ApiModelProperty(value = "Energy Yield")
	private String energy;				/* Energy Yield (Wh/Wp) */
	@ApiModelProperty(value = "IVT Efficiency")
	private String ivt;				/* IVT Efficiency(%) */
	@ApiModelProperty(value = "PPA거래량")
	private String ppa;				/* PPA거래량 (기본단위 : kWh ( 코드ID : CDK-00018.TUN007 )) */
	@ApiModelProperty(value = "매출")
	private String sale;			/* 매출 */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;	/* 최종작업자번호 */


}


