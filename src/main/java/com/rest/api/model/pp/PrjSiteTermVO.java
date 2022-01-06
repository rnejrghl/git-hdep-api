package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class PrjSiteTermVO {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "해지일")
	private String termDt; 				/* 해지일 */
	@ApiModelProperty(value = "해지사유")
	private String termRsn; 			/* 해지사유 */

	
}
