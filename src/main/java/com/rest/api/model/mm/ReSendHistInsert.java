package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;
  

@Data
public class ReSendHistInsert {

	@ApiModelProperty(required = true, value = "발송구분 (SMS/MAIL)")
	private String sendGubn;        /* 발송구분 (SMS/MAIL) */
	@ApiModelProperty(required = true, value = "알람명")
	private String alrmName;        /* 알람명 */
	@ApiModelProperty(required = true, value = "수신자번호")
	private String recvSeq;         /* 수신자번호 */
	@ApiModelProperty(required = true, value = "발송구분내용 (발송구분에 따른 전화번호 또는 메일주소)")
	private String sendGubnCntn;    /* 발송구분내용 (발송구분에 따른 전화번호 또는 메일주소) */
	@ApiModelProperty(required = true, value = "발송내역")
	private String sendCntn;        /* 발송내역 */
	
	@ApiModelProperty(required = true, value = "SMS 알람여부")
	private String smsAlrmYn;        /* SMS 알람여부 */
	@ApiModelProperty(required = true, value = "EMAIL 알람여부")
	private String emailAlrmYn;        /* EMAIL 알람여부*/


}
