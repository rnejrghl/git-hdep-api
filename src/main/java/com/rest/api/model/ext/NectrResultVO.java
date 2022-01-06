package com.rest.api.model.ext;


import io.swagger.annotations.ApiModelProperty;
import io.swagger.annotations.ApiParam;
import lombok.Data;

import com.fasterxml.jackson.annotation.JsonPropertyOrder;


@Data
@JsonPropertyOrder(alphabetic = true)
public class NectrResultVO {

	@ApiModelProperty(value = "이력 번호")
	private String histId;
    @ApiModelProperty(value = "사용자번호")
	private String userSeq;
    @ApiModelProperty(value = "사이트 ID")
	private String siteId;
    @ApiModelProperty(value = "호출API TYPE")
	private String type;	
    @ApiModelProperty(value = "성공여부")
	private String code;
    @ApiModelProperty(value = "입력시간")
    private String timeStamp;


    @ApiModelProperty(value = "Output of Solar (kW)")
	private String P_solarPower;	/* Output of Solar (kW) */
	@ApiModelProperty(value = "Output of Grid (kW)")
	private String P_gridPower;	/* Output of Grid (kW)) */
	@ApiModelProperty(value = "Output of Battery (kW)")
	private String P_batteryPower;	/* Output of Battery (kW) */
	@ApiModelProperty(value = "Output of Home (kW)")
	private String P_homePower;	/* Output of Home (kW) */
	

	@ApiModelProperty(value = "Whether Solar to Grid flow exists ( true / false")
	private boolean FL_solarToGrid;	/*Whether Solar to Grid flow exists ( true / false) */
	@ApiModelProperty(value = "Whether Grid to Solar flow exists ( true / false)")
	private boolean FL_gridToSolar;	/*Whether Grid to Solar flow exists ( true / false) */
	@ApiModelProperty(value = "Whether Grid to Battery flow exists ( true / false)")
	private boolean FL_gridToBattery;	/*Whether Grid to Battery flow exists ( true / false)*/
	@ApiModelProperty(value = "Whether Battery to Grid flow exists ( true / false)")
	private boolean FL_batteryToGrid;	/*Whether Battery to Grid flow exists ( true / false)*/
	@ApiModelProperty(value = "Whether Battery to Home flow exists ( true / false)")
	private boolean FL_batteryToHome;	/*Whether Battery to Home flow exists ( true / false)*/
	@ApiModelProperty(value = "Whether Home to Battery flow exists ( true / false)")
	private boolean FL_homeToBattery;	/*Whether Home to Battery flow exists ( true / false*/
	@ApiModelProperty(value = "Whether Home to Solar flow exists ( true / false)")
	private boolean FL_homeToSolar;	/*Whether Home to Solar flow exists ( true / false)*/
	@ApiModelProperty(value = "Whether Solar to Home flow exists ( true / false)")
	private boolean FL_solarToHome;	/*Whether Solar to Home flow exists ( true / false)*/
	@ApiModelProperty(value = "Whether Solar to Battery flow exists ( true / false)")
	private boolean FL_solarToBattery;	/*Whether Solar to Battery flow exists ( true / false)*/
	@ApiModelProperty(value = "Whether Battery to Solar flow exists ( true / false)")
	private boolean FL_batteryToSolar;	/*Whether Battery to Solar flow exists ( true / false)*/	
	@ApiModelProperty(value = "Whether Home to Grid flow exists ( true / false)")
	private boolean FL_homeToGrid;	/*Whether Home to Grid flow exists ( true / false)*/	
	@ApiModelProperty(value = "Whether Grid to Home flow exists ( true / false)")
	private boolean FL_gridToHome;	/*Whether Grid to Home flow exists ( true / false)*/
	
	
	
	@ApiModelProperty(value = "Whether Grid to Home flow exists ( true / false)")
	private String FLV_solar_grid;	/*Power of Solar to Grid (kW) or Grid to Solar (kW)*/	
	@ApiModelProperty(value = "Power of Grid to Battery (kW) or Battery to Grid (kW)")
	private String FLV_grid_battery;	/*Power of Grid to Battery (kW) or Battery to Grid (kW)*/	
	@ApiModelProperty(value = "Power of Battery to Home (kW) or Home to Battery(kW)")
	private String FLV_battery_home;	/*Power of Battery to Home (kW) or Home to Battery(kW)*/	
	@ApiModelProperty(value = "Power of Home to Solar (kW) or Solar to Home (kW)")
	private String FLV_home_solar;	/*Power of Home to Solar (kW) or Solar to Home (kW)*/	
	@ApiModelProperty(value = "Power of Solar to Battery (kW) or Battery to Solar (kW)")
	private String FLV_solar_battery;	/*Power of Solar to Battery (kW) or Battery to Solar (kW)*/	
	@ApiModelProperty(value = "Power of Home to Grid (kW) or Grid to Home (kW)")
	private String FLV_home_grid;	/*Power of Home to Grid (kW) or Grid to Home (kW)*/
	
	
	@ApiModelProperty(value = "Battery SOC (%)")
	private String Battery_SOC;	/*Battery SOC (%)*/	
	@ApiModelProperty(value = "Battery_SOH (%)")
	private String Battery_SOH;	/*Battery_SOH (%)*/

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

    @ApiModelProperty(value = "amount")
	private String amount;	/*amount */

}