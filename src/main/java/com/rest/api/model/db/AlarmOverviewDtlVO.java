package com.rest.api.model.db;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class AlarmOverviewDtlVO {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID */

	@ApiModelProperty(value = "알람유형코드 (통신장애/고장...등)")
	private String alrtTypCd; 			/* 알람유형코드 (통신장애/고장...등) */
	@ApiModelProperty(value = "Alert발행일시")
	private String alertPublDtti; 			/* Alert발행일시 */
	@ApiModelProperty(value = "알람확인여부")
	private String alrtConfYn; 			/* 알람확인여부 */

	@ApiModelProperty(value = "발생번호")
	private String occrSeq; 			/* 발생번호 */
	@ApiModelProperty(value = "알람내용")
	private String alrtCntn; 			/* 알람내용 */

	@ApiModelProperty(value = "사이트ID조건조회")
	private String[] siteIds; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq; 			/* 사용자번호 */





}