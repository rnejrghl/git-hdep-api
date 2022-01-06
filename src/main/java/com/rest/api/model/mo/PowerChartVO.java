package com.rest.api.model.mo;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class PowerChartVO {
	@ApiModelProperty(value = "날짜")
	private String date; /* 사이트ID */
	@ApiModelProperty(value = "발전량")
	private String amount; /* 발전량 */
	@ApiModelProperty(value = "AC출력")
	private String ivtAc; /* AC출력 */
	@ApiModelProperty(value = "DC발전출력")
	private String ivtDc; /* DC발전출력 */
	@ApiModelProperty(value = "DC충전출력")
	private String batChar; /* DC충전출력 */
	@ApiModelProperty(value = "DC방전")
	private String batDisc; /* DC방전 */
	@ApiModelProperty(value = "배터리 SOC")
	private String batPower; /* 배터리 SOC */
	@ApiModelProperty(value = "LOAD 출력")
	private String loadPower; /* Load 출력 */
	@ApiModelProperty(value = "DC방전출력")
	private String production; /* DC방전출력 (Total PV energy generation) */
	@ApiModelProperty(value = "gridPower")
	private String gridPower;			/* gridPower */
}
