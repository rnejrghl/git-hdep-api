package com.rest.api.model.db;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class DsAlarmOverviewVO {

	@ApiModelProperty(value = "총건수")
	private String total; 			/* 총건수 */

	@ApiModelProperty(value = "정상")
	private String al0001; 			/* 정상 */
	@ApiModelProperty(value = "고장")
	private String al0002; 			/* 고장 */
	@ApiModelProperty(value = "통신장애")
	private String al0003; 			/* 통신장애 */






}
