package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnSiteGtwyInfoVO {
	@ApiModelProperty(value = "사이트ID")
	private String siteId; 				/* 사이트ID */
	@ApiModelProperty(value = "자원그룹ID")
	private String rscGrpId;			/* 자원그룹ID */
	@ApiModelProperty(value = "게이트웨이ID")
	private String gtwyId;				/* 게이트웨이ID */

}