package com.rest.api.model.pp;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class PrjSiteSpecVO {
		
		@ApiModelProperty(value = "siteId")
		private String siteId;			/* siteId */		
		@ApiModelProperty(value = "modlCapa")
		private String modlCapa;			/* 모듈용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */  
		@ApiModelProperty(value = "invtCapa")
		private String invtCapa;			/* 인버터용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
		@ApiModelProperty(value = "btryCapa")
		private String btryCapa;			/* 배터리용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
		
		
}
