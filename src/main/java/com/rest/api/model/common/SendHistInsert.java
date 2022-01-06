package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;
import lombok.NoArgsConstructor;

import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;

@Data
@NoArgsConstructor
public class SendHistInsert {
    @ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;		/* 최종작업자번호 */
    @ApiModelProperty(value = "발송구분 (SMS/MAIL)")
    private String sendGubn;			/* 발송구분 (SMS/MAIL) */
    @ApiModelProperty(value = "알람명")
    private String alrmName;			/* 알람명 */
    @ApiModelProperty(value = "수신자번호")
    private String recvSeq;			    /* 수신자번호 */
    @ApiModelProperty(value = "발송구분내용 (발송구분에 따른 전화번호 또는 메일주소)")
    private String sendGubnCntn;		/* 발송구분내용 (발송구분에 따른 전화번호 또는 메일주소) */
    @ApiModelProperty(value = "발송결과코드 (S(Success)/F(Fail))")
    private String sendRsltCd;		    /* 발송결과코드 (S(Success)/F(Fail)) */
    @ApiModelProperty(value = "발송내역")
    private String sendCntn;			/* 발송내역 */
    @ApiModelProperty(value = "발송메시지ID")
    private String msgId;			    /* 발송메시지ID */

}
