package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;
import lombok.NoArgsConstructor;

@Data
@NoArgsConstructor
public class CommonPpInsert {

    @ApiModelProperty(value = "연도")
    private String yyyyVal;
    @ApiModelProperty(value = "PV")
    private String fildPv;
    @ApiModelProperty(value = "PVESS")
    private String fildPvEss;


}
