package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnDvceAlrmVO {
	@ApiModelProperty(value = "알람코드")
	private String alrtCd;			/* 알람코드 */
	@ApiModelProperty(value = "알람명")
	private String alrtName;		/* 알람명 */
	@ApiModelProperty(value = "알람유형코드")
	private String alrtTypCd;		/* 알람유형코드 (통신장애/고장...등) */
	@ApiModelProperty(value = "알람등급코드")
	private String alrtGrdCd;		/* 알람등급코드 (상/중/하) */
	@ApiModelProperty(value = "알람내용식")
	private String alrtCntn;		/* 알람내용식 */
	@ApiModelProperty(value = "시스템알림여부")
	private String sysAlrtYn; 		/* 시스템알림여부 (Y/N) */
	@ApiModelProperty(value = "SMS여부")
	private String smsYn;			/* SMS여부 (Y/N) */
	@ApiModelProperty(value = "이메일여부")
	private String emailYn;			/* 이메일여부 (Y/N) */
	@ApiModelProperty(value = "지속시간")
	private String contTime;		/* 지속시간 (초단위로 저장(10초간 지속)) */
	@ApiModelProperty(value = "발송주기")
	private String sendCycl;		/* 발송주기 (분단위로 저장(5분간격)) */
	@ApiModelProperty(value = "비고")
	private String note;			/* 비고 */
	@ApiModelProperty(value = "건수")
	private String cnt;				/* 건수 */
	@ApiModelProperty(value = "최종작업자번호")
	private String userSeq;			/* 최종작업자번호 */
	@ApiModelProperty(value = "디바이스ID")
	private String dvceId;			/* 디바이스ID */


}