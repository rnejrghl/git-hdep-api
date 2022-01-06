package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnGtwyDvceInsert {
	@ApiModelProperty(value = "사용자ID")
	private String userId;
	@ApiModelProperty(value = "최종작업자번호")
	private String userSeq;				/* 최종작업자번호 */
	@ApiModelProperty(required = true,value = "게이트웨이ID")
	private String gtwyId; 				/* 게이트웨이ID */
	@ApiModelProperty(required = true,value = "디바이스ID")
	private String dvceId; 				/* 디바이스ID */


}