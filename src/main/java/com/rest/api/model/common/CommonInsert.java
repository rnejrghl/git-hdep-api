package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;

import lombok.Data;
import lombok.NoArgsConstructor;

import javax.validation.constraints.NotEmpty;
import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;

@Data
@NoArgsConstructor
public class CommonInsert {

    @ApiModelProperty(value = "그룹코드")
    private String grpCd;
    @ApiModelProperty(value = "그룹코드명")
    private String grpCdName;
    @ApiModelProperty(value = "코드")
    private String cd;
    @ApiModelProperty(value = "코드명")
    private String cdName;
    @ApiModelProperty(value = "상위그룹코드")
    private String upprGrpCd;
    @ApiModelProperty(value = "코드설명")
    private String cdDesc;
    @ApiModelProperty(value = "정렬순서")
    private String inqOrd;

}
