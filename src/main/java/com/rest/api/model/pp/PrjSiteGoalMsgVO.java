package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class PrjSiteGoalMsgVO {
	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "목표일자")
	private String goalDt;			/* 목표일자 */
	@ApiModelProperty(value = "ROW")
	private String row;			/* ROW */
}
