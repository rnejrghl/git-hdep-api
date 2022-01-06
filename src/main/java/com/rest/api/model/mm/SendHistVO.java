package com.rest.api.model.mm;

  
import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class SendHistVO {

	@ApiModelProperty(value = "발송번호")
	private String sendNo;          /* 발송번호 (일련번호 1 ~ 9999999999까지 1씩 증가하는 일련번호) */
	@ApiModelProperty(value = "발송구분")
	private String sendDt;          /* 발송구분 */
	@ApiModelProperty(value = "발송구분")
	private String sendGubn;        /* 발송구분 (SMS/MAIL) */
	@ApiModelProperty(value = "알람명")
	private String alrmName;        /* 알람명 */

	@ApiModelProperty(value = "수신자번호")
	private String recvSeq;         /* 수신자번호 */
	@ApiModelProperty(value = "사용자명")
	private String userName;        /* 사용자명 */
	@ApiModelProperty(value = "발송구분내용")
	private String sendGubnCntn;    /* 발송구분내용 (발송구분에 따른 전화번호 또는 메일주소) */
	@ApiModelProperty(value = "발송결과코드")
	private String sendRsltCd;      /* 발송결과코드 (S(Success)/F(Fail)) */
	@ApiModelProperty(value = "발송내역")
	private String sendCntn;        /* 발송내역 */
	@ApiModelProperty(value = "발송메시지ID")
	private String msgId;           /* 발송메시지ID */
	
	@ApiModelProperty(value = "SMS 알람여부")
	private String smsAlrmYn;           /* SMS 알람여부 */
	@ApiModelProperty(value = "EMAIL 알람여부")
	private String emailAlrmYn;           /* EMAIL 알람여부 */

	@ApiModelProperty(value = "페이지번호")
	private Integer page;		/* 페이지 번호 */
	@ApiModelProperty(value = "시작 rownum")
	private Integer pageStart;		/* 시작 rownum */
	@ApiModelProperty(value = "1페이지당 노출할 갯수")
	private Integer pagePer;		/* 1페이지당 노출할 갯수 */

}
