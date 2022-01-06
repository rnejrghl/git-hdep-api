package com.rest.api.model.db;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class RscGrpInfoVO {
	@ApiModelProperty(value = "자원그룹ID")
	private String rscGrpId;	/* 자원그룹ID */
	@ApiModelProperty(value = "합계건수")
	private String totCnt;	/* 합계건수 */
	@ApiModelProperty(value = "PV합계")
	private String totPvInstCapa;	/* PV합계 */
	@ApiModelProperty(value = "BAT합계")
	private String totBtryCapa;	/* BAT합계 */

	@ApiModelProperty(value = "사이트ID조건조회")
	private String[] siteIds; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq; 			/* 사용자번호 */
}