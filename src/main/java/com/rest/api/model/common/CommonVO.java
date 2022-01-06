package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

import javax.validation.constraints.NotEmpty;


@Data
public class CommonVO {

    @ApiModelProperty(value = "코드")
    private String cd;
    @ApiModelProperty(value = "그룹코드")
    private String grpCd;
    @ApiModelProperty(value = "그룹코드명")
    private String grpCdName;
    @ApiModelProperty(value = "코드명")
    private String cdName;
    @ApiModelProperty(value = "상위그룹코드")
    private String upprGrpCd;
    @ApiModelProperty(value = "그룹코드 배열")
    private String[] grpCds;
    @ApiModelProperty(value = "정렬순서")
    private String inqOrd;
}
