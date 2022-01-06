package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnMsgVO {

    @ApiModelProperty(value = "파일SEQ")
    private String fileSeq;
    @ApiModelProperty(value = "파일아이디")
    private String fileId;
    @ApiModelProperty(value = "파일명")
    private String realFileName;
    @ApiModelProperty(value = "파일경로")
    private String filePath;


}
