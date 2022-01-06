package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnSiteGtwyUpdate {
	@ApiModelProperty(required = true, value = "사이트ID")
	private String siteId; 				/* 사이트ID */

	@ApiModelProperty(value = "자원그룹ID")
	private String rscGrpId;			/* 자원그룹ID */
	@ApiModelProperty(value = "게이트웨이ID")
	private String gtwyId;				/* 게이트웨이ID */
	@ApiModelProperty(value = "수신값")
	private String recvVal;				/* 수신값 */
	@ApiModelProperty(value = "수신일시")
	private String recvDtti;			/* 수신일시 */

	@ApiModelProperty(value = "사용자ID")
	private String userId;				/* 사용자ID */
	@ApiModelProperty(value = "최종작업자번호")
	private String userSeq;			/* 최종작업자번호 */

}