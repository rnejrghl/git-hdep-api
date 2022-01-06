package com.rest.api.model.db;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class AlarmOverviewCntVO {

	@ApiModelProperty(value = "총건수")
	private String totalCnt; /* 총건수 */
	@ApiModelProperty(value = "정상건수")
	private String normalCnt; /* 정상건수 */
	@ApiModelProperty(value = "고장건수")
	private String faultCnt; /* 고장건수 */
	@ApiModelProperty(value = "통신장애건수")
	private String offlineCnt; /* 통신장애건수 */

}