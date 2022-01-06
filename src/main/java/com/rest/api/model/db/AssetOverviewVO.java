package com.rest.api.model.db;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class AssetOverviewVO {

	@ApiModelProperty(value = "합계")
	private String totalCnt; 			/* 합계 */

	@ApiModelProperty(value = "PV소계")
	private String aTotalCnt; 			/* PV소계 */
	@ApiModelProperty(value = "PV계약건수")
	private String aPscCnt; 			/* PV계약건수 */
	@ApiModelProperty(value = "PV설치건수")
	private String aInsCnt; 			/* PV설치건수 */
	@ApiModelProperty(value = "PV운영건수")
	private String aMngCnt; 			/* PV운영건수 */
	@ApiModelProperty(value = "PV종료건수")
	private String aEndCnt; 			/* PV종료건수 */

	@ApiModelProperty(value = "PVESS소계")
	private String bTotalCnt; 			/* PVESS소계 */
	@ApiModelProperty(value = "PVESS계약건수")
	private String bPscCnt; 			/* PVESS계약건수 */
	@ApiModelProperty(value = "PVESS설치건수")
	private String bInsCnt; 			/* PVESS설치건수 */
	@ApiModelProperty(value = "PVESS운영건수")
	private String bMngCnt; 			/* PVESS운영건수 */
	@ApiModelProperty(value = "PVESS종료건수")
	private String bEndCnt; 			/* PVESS종료건수 */

	@ApiModelProperty(value = "사이트ID조건조회")
	private String[] siteIds; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq; 			/* 사용자번호 */

}