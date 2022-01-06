package com.rest.api.model.mo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class KpiSummaryVO {
	@ApiModelProperty(value = "사이트ID")
	private String siteId;			/* 사이트ID */


	@ApiModelProperty(value = "발전량")
	private String production;			/* 포인트 주소 */
	@ApiModelProperty(value = "ivtEfficiency")
	private String ivtEfficiency;			/* ivtEfficiency */
	@ApiModelProperty(value = "energyYield")
	private String energyYield;			/* energyYield */
	@ApiModelProperty(value = "ivtAc")
	private String ivtAc;			/* ivtAc */
	@ApiModelProperty(value = "ivtDc")
	private String ivtDc;			/* ivtDc */
	
	@ApiModelProperty(value = "batPower")
	private String batPower;			/* batPower */	
	@ApiModelProperty(value = "batHealth")
	private String batHealth;			/* batHealth */
	
	@ApiModelProperty(value = "loadPower")
	private String loadPower;			/* loadPower */
	@ApiModelProperty(value = "gridPower")
	private String gridPower;			/* gridPower */
	@ApiModelProperty(value = "batChar")
	private String batChar;			/* batChar */
	@ApiModelProperty(value = "batDisc")
	private String batDisc;			/* batDisc */
	@ApiModelProperty(value = "othEnergy")
	private String othEnergy;			/* othEnergy */
	
	
	
	
	
	@ApiModelProperty(value = "ppa")
	private String ppa;			/* ppa */
	@ApiModelProperty(value = "timeStamp")
	private String timeStamp;			/* timeStamp */


}
