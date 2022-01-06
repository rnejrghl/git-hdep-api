package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnGtwyVO {
	@ApiModelProperty(value = "게이트웨이ID")
	private String gtwyId; 				/* 게이트웨이ID */
	@ApiModelProperty(value = "게이트웨이명")
	private String gtwyName; 			/* 게이트웨이명 */

}