package com.rest.api.model.db;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class AlarmOverviewVO {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID */

	@ApiModelProperty(value = "알람유형코드 (통신장애/고장...등)")
	private String alrtTypCd; 			/* 알람유형코드 (통신장애/고장...등) */
	@ApiModelProperty(value = "자원구분")
	private String rescGubn; 			/* 자원구분 */
	@ApiModelProperty(value = "사용자명")
	private String userName; 			/* 사용자명 */
	@ApiModelProperty(value = "알람건수")
	private String alrtCnt; 			/* 알람건수 */
	@ApiModelProperty(value = "워크오더건수")
	private String workOrderCnt; 			/* 워크오더건수 */
	@ApiModelProperty(value = "Alert발행일시")
	private String alertPublDtti; 			/* Alert발행일시 */

	@ApiModelProperty(value = "알람확인여부")
	private String alrtConfYn; 			/* 알람확인여부 */



	@ApiModelProperty(value = "사이트ID조건조회")
	private String[] siteIds; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq; 			/* 사용자번호 */





}