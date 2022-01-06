package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class MobileOperationVO {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;			/* 사용자번호 */
	@ApiModelProperty(value = "사용자ID")
	private String userId;			/* 사용자ID */
	@ApiModelProperty(value = "실시간 5분단위 발전량")
	private String realTimePower; 		/* 실시간 5분단위 발전량 */
	@ApiModelProperty(value = "당일발전량")
	private String todayPower; 		/* 지역구분*/
	@ApiModelProperty(value = "설비상태")
	private String eqmtStatus; 	    /* 설비상태 ( 코드ID : CDK-00001 ) */
	@ApiModelProperty(value = "time zone")
	private String timeZone ;				/*발전소 timeZone*/
	@ApiModelProperty(value = "설비구분")
	private String rescGubn; 		/* 설비구분*/

	@ApiModelProperty(value = "사이트ID조건조회")
	private String[] siteIds; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */

	@ApiModelProperty(value = "사용자 명")
	private String userName;			/* 사용자 */
	@ApiModelProperty(value = "주소")
	private String addr;			/* 주소 */

}
