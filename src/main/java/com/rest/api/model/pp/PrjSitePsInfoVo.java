package com.rest.api.model.pp;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class PrjSitePsInfoVo {
		
		@ApiModelProperty(value = "siteId")
		private String siteId;			/* siteId */		
		@ApiModelProperty(value = "plantId")
		private String plantId;			/* plantId */		
		@ApiModelProperty(value = "사이트 Type")
		private String plantType;			/* 사이트 Typ */
		@ApiModelProperty(value = "해당사이트 ps_id")
		private String plantKey;			/* 해당사이트 ps_id */		
		@ApiModelProperty(value = " ps_id 에대한 ps_key")
		private String facKey;			/* ps_id 에대한 ps_key */
		
		@ApiModelProperty(value = " fac_id")
		private String facId;			/* fac_idy */
}
