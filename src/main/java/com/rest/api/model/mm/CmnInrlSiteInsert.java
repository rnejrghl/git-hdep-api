package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnInrlSiteInsert {
	@ApiModelProperty(required = true,value = "조회그룹ID")
	private String inqGrpId;  		/* 조회그룹ID */
	@ApiModelProperty(required = true,value = "최종작업자번호")
	private String siteId;			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;			/* 최종작업자번호 */
}