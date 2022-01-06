package com.rest.api.model.mo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class KpiPowersVO {
	@ApiModelProperty(value = "사이트ID")
	private String siteId;			/* 사이트ID */
	@ApiModelProperty(value = "포인트 주소")
	private String pntAddr;			/* 포인트 주소 */
	@ApiModelProperty(value = "디바이스 ID")
	private String dvceId;			/* 디바이스 ID */
	@ApiModelProperty(value = "포인트 명")
	private String pntAddrName;			/* 포인트 명 */
	@ApiModelProperty(value = "시간")
	private String time;			/* 포인트 주소 */
	@ApiModelProperty(value = "총 발전량")
	private String totalAmt;			/* 발전량 */
	@ApiModelProperty(value = "총 누적 발전량")
	private String accTotalAmt;			/* 발전량 */
	@ApiModelProperty(value = "5분단위 발젼량")
	private String realAmt;			/* 5분단위발전량 */
	@ApiModelProperty(value = "누적")
	private String accAmount;			/* 5분단위발전량 */
}
