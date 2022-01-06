package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class SiteGridTableUpdate {

	@ApiModelProperty(required = true, value = "사이트ID")
	private String siteId;				/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "작업예정일")
	private String workDudt;			/* 작업예정일 */
	@ApiModelProperty(value = "작업완료일")
	private String workCmdt;			/* 작업완료일 */
	@ApiModelProperty(value = "작업구분")
	private String workGubn;			/* 작업구분 (GRID신청/GRID승인/자재구매/설치예정) */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;	 	/* 최종작업자번호 */
	@ApiModelProperty(value = "승인회사")
	private String aprvCmp;				/* 승인회사 (코드ID : CDK-00016 ( 이게 맞는지는 잘 모르겠음 )) */
	@ApiModelProperty(value = "그리드승인여부")
	private String aprvYn;				/* 그리드승인여부 */
	@ApiModelProperty(value = "불합격사유")
	private String failRsn;				/* 불합격사유 */
}