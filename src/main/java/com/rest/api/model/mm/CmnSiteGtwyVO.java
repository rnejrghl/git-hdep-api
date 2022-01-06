package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnSiteGtwyVO {
	@ApiModelProperty(value = "사이트ID")
	private String siteId; 				/* 사이트ID */

	@ApiModelProperty(value = "자원구분")
	private String rescGubn;			/* 자원구분 (코드ID : CDK-00011( A:PV/B:PV+ESS )) */
	@ApiModelProperty(value = "PV설치용량")
	private String pvInstCapa;			/* PV설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "ESS설치용량")
	private String essInstCapa;			/* ESS설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */

	@ApiModelProperty(value = "자원그룹ID")
	private String rscGrpId;			/* 자원그룹ID */
	@ApiModelProperty(value = "게이트웨이ID")
	private String gtwyId;				/* 게이트웨이ID */

	@ApiModelProperty(value = "사용자ID")
	private String userId;				/* 사용자ID */
	@ApiModelProperty(value = "사용자명")
	private String userName;			/* 사용자명 */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;				/* 사용자번호 */

}