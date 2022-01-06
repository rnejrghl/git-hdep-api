package com.rest.api.model.mm;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class CmnNotiUpdate {

    @ApiModelProperty(value = "공지ID")
    private String notiId;
    @ApiModelProperty(value = "공지명")
    private String notiName;
    @ApiModelProperty(value = "SMS내용")
    private String smsCntn;
    @ApiModelProperty(value = "메일제목")
    private String mailTitl;
    @ApiModelProperty(value = "메일머리말")
    private String mailHead;
    @ApiModelProperty(value = "메일내용")
    private String mailCntn;
    @ApiModelProperty(value = "메일꼬리말")
    private String mailFter;
    @ApiModelProperty(value = "최종작업자번호")
    private String lastChngUseq;

}
