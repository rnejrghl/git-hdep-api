package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class SiteInspUpdate {
	@ApiModelProperty(required = true,value = "사이트ID")
	private String siteId;                /* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;        /* 최종작업자번호 */
	@ApiModelProperty(value = "점검합격여부")
	private String chkPassYn;            /* 점검합격여부 */
	@ApiModelProperty(value = "점검완료일")
	private String chkCmplDt;            /* 점검완료일 */
	@ApiModelProperty(value = "점검불합격사유")
	private String chkFailRsn;            /* 점검불합격사유 */
	@ApiModelProperty(value = "점검이력")
	private String chkHist;            /* 점검이력 (점검합격여부가 n인 경우 점검불합격사유를 저장할때마다 add) */
}