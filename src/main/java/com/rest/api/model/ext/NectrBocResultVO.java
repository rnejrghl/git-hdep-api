package com.rest.api.model.ext;


import io.swagger.annotations.ApiModelProperty;
import io.swagger.annotations.ApiParam;
import lombok.Data;


import com.fasterxml.jackson.annotation.JsonPropertyOrder;


@Data 
public class NectrBocResultVO {

	@ApiModelProperty(value = "이력 번호")
	private String histId;
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;

	@ApiModelProperty(value = "outDate")
	private String outDate;	/*outDate */
	@ApiModelProperty(value = "DC Output(kW")
	private String dcPwr;	/* DC Output(kW */
	@ApiModelProperty(value = "Battery Charging power ")
	private String batCharPwr;	/* Battery Charging power */
	@ApiModelProperty(value = "Battery Discharging power")
	private String batDiscPwr;	/* Battery Discharging power */
	@ApiModelProperty(value = "Battery SOC (%)")
	private String batSOC;	/* Battery SOC (%) */	

}
