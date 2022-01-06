package com.rest.api.model.ext;


import io.swagger.annotations.ApiModelProperty;
import io.swagger.annotations.ApiParam;
import lombok.Data;

import com.fasterxml.jackson.annotation.JsonProperty;
import com.fasterxml.jackson.annotation.JsonPropertyOrder;


@Data
public class PdResultVO {
	@ApiModelProperty(value = "regionId")
	private String regionId;	/* regionId */
	@ApiModelProperty(value = "lastChngDtti")
	private String lastChngDtti;	/* lastChngDtti */	
	@ApiModelProperty(value = "rrp")
	private String rrp;	/* rrp */
	@ApiModelProperty(value = "demand")
	private String demand;	/* demand */
	@ApiModelProperty(value = "currentYn")
	private String currentYn;	/* demand */

}
