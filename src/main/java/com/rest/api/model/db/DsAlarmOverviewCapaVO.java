package com.rest.api.model.db;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class DsAlarmOverviewCapaVO {

	@ApiModelProperty(value = "pv")
	private String pv; 			/* pv */

	@ApiModelProperty(value = "배터리")
	private String battery; 			/* 배터리 */







}
