package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;
import lombok.NoArgsConstructor;

@Data
@NoArgsConstructor
public class CommonPpVO {

    @ApiModelProperty(value = "연도")
    private String yyyyVal;
    @ApiModelProperty(value = "PV")
    private String fildPv;
    @ApiModelProperty(value = "PVESS")
    private String fildPvEss;
    @ApiModelProperty(value = "코드명")
    private String cdName;
    @ApiModelProperty(value = "코드설명")
    private String cdDesc;
}
