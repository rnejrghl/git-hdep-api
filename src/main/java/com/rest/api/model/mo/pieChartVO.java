package com.rest.api.model.mo;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class pieChartVO {
	@ApiModelProperty(value = "시간")
	private String timeStamp; 
	@ApiModelProperty(value = "siteId")
	private String siteId; 
	@ApiModelProperty(value = "PV 전체 발전량")
    private String totalPV;
    @ApiModelProperty(value = "PV 자가발전 사용량")
    private String selfConsumpt;
    @ApiModelProperty(value = "PV 배터리 충전량")
    private String batCharge;
    @ApiModelProperty(value = "LOAD 총 사용량")
    private String totalLoad;
    @ApiModelProperty(value = "LOAD 전기 구매량")
    private String purEnergy;
    @ApiModelProperty(value = "PV Only 전체 발전량")
    private String pvToHome;
}
