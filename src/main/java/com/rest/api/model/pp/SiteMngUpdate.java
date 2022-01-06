package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class SiteMngUpdate {
	@ApiModelProperty(required = true,value = "사이트ID")
	private String siteId;				/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;	 	/* 최종작업자번호 */
	@ApiModelProperty(value = "운영시작일")
	private String mngStrtDt; 			/* 운영시작일 */

}