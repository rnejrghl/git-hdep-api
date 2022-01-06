package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class WoNoticeVO {
    @ApiModelProperty(value = "공지ID")
    private String notiId;		/* 공지ID */
    @ApiModelProperty(value = "작업지시형태 ")
    private String workOrdTyp;	/* 작업지시형태  */
    @ApiModelProperty(value = "자원구분 ")
    private String rescGubn;	/* 자원구분  */
    @ApiModelProperty(value = "SMS내용")
    private String smsCntn;		/* SMS내용 */
    @ApiModelProperty(value = "본문")
    private String mailCntn;	/* 본문 */

}

