package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnDvceCalcVO {
	@ApiModelProperty(value = "디바이스ID")
	private String dvceId;			/* 디바이스ID */
	@ApiModelProperty(value = "계산식순서")
	private String calcSeq;			/* 계산식순서*/
	@ApiModelProperty(value = "이하식")
	private String blowCalc;		/* 이하식*/
	@ApiModelProperty(value = "초과식")
	private String excsCalc;		/* 초과식*/
	@ApiModelProperty(value = "수식결과")
	private String calcRslt;		/* 수식결과*/
	@ApiModelProperty(value = "사용자ID")
	private String userId;			/* 사용자ID */
	@ApiModelProperty(value = "최종작업자번호")
	private String userSeq;			/* 최종작업자번호 */

}