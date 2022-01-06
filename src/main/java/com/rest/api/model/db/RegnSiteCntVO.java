package com.rest.api.model.db;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class RegnSiteCntVO {
	@ApiModelProperty(value = "지역구분 (CDK-00005)")
	private String regnGubn;	/* 지역구분 (CDK-00005) */
	@ApiModelProperty(value = "위도")
	private String latd;	/* 위도 */
	@ApiModelProperty(value = "경도")
	private String lgtd;	/* 경도 */
	@ApiModelProperty(value = "지역명")
	private String regnName;	/* 지역명 */



	@ApiModelProperty(value = "사이트ID조건조회")
	private String[] siteIds; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq; 			/* 사용자번호 */

	DsAlarmOverviewCapaVO capacity;
	DsAlarmOverviewVO siteCnt;

}
