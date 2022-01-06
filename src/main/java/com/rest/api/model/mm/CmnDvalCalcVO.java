package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnDvalCalcVO {
	@ApiModelProperty(value = "알람코드")
	private String alrtCd;			/* 알람코드 */
	@ApiModelProperty(value = "계산식순서")
	private String calcSeq;			/* 계산식순서*/
	@ApiModelProperty(value = "조건구분코드")
	private String cndtGubnCd;		/* 조건구분코드 (and/or)*/
	@ApiModelProperty(value = "시스템태그")
	private String sysTag;			/* 시스템태그*/
	@ApiModelProperty(value = "연산자구분코드")
	private String calcGubnCd;		/* 연산자구분코드 ( =/</>/<=/>=) */
	@ApiModelProperty(value = "비교값")
	private String cmprVal;			/* 비교값 */
	@ApiModelProperty(value = "최종작업자번호")
	private String userSeq;			/* 최종작업자번호 */
}