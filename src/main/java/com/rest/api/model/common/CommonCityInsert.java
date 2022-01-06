package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CommonCityInsert {

    @ApiModelProperty(value = "코드")
    private String cd;
    @ApiModelProperty(value = "코드명")
    private String cdName;
    @ApiModelProperty(value = "코드설명")
    private String cdDesc;
    @ApiModelProperty(value = "정렬순서")
    private String inqOrd;
}
