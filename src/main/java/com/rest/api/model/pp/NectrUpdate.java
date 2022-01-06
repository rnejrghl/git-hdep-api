package com.rest.api.model.pp;


import javax.validation.constraints.NotBlank;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class NectrUpdate {
	@ApiModelProperty(value = "NectrID")
	private String nectrId;
	@ApiModelProperty(required = true, value = "사이트ID")
	@NotBlank
	private String siteId;				
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;				/* 사용자번호 */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;	 	/* 최종작업자번호 */
	@ApiModelProperty(value = "주소")
	private String addr;				/* 주소 */
	@ApiModelProperty(required = true, value = "지역구분")
	private String regnGubn;
	@ApiModelProperty(value = "계약시작일")
	private String ppaStrtDt;			/* 계약시작일 */
	@ApiModelProperty(value = "계약종료일")
	private String ppaEndDt;			/* 계약종료일 */
	// @ApiModelProperty(value = "PPA단가")
	// private String ppaPrice;			/* PPA단가 */
	// @ApiModelProperty(value = "STC")
	// private String stc;					/* STC */
	@ApiModelProperty(value = "자원구분")
	private String rescGubn;			/* 자원구분 (코드ID : CDK-00011( A:PV/B:PV+ESS )) */

	@ApiModelProperty(value = "설치담당자")
	private String installerName;			/* 설치담당자 */
	@ApiModelProperty(value = "모듈용량")
	private String modlCapa;            /* 모듈용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "배터리용량")
	private String btryCapa;            /* 배터리용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */

	@ApiModelProperty(value = "사용자명")
	private String userName;
	@ApiModelProperty(value = "전화번호")
	private String telNo; 				/* 전화번호 */
	@ApiModelProperty(value = "이메일")
	private String email; 				/* 이메일 */
	@ApiModelProperty(value = "특이시항")
	private String note; 				/* 특이사항 */

}