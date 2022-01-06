package com.rest.api.model.mo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class PowerVo {
	@ApiModelProperty(value = "PV Power")
	private String pvPower ;				/*PV Power*/
	@ApiModelProperty(value = "output power")
	private String opPower ;				/*output power*/
	
	@ApiModelProperty(value = "battery Power")
	private String batPower ;		
	@ApiModelProperty(value = "Battery Health")
	private String batHealth ;	
	
	@ApiModelProperty(value = "Load Power")
	private String loadPower ;				/*Load power*/
	@ApiModelProperty(value = "grid Power")
	private String gridPower ;				/*grid power*/
	@ApiModelProperty(value = "Battery charging") /*Battery charging power*/
	private String batChar ;	
	@ApiModelProperty(value = "Battery discharging")/*Battery discharging power*/
	private String batDisc ;	
	@ApiModelProperty(value = "P-energy get from grid")/*P-energy get from grid*/
	private String othEnergy ;	

	

}


