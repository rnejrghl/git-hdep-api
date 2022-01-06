package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CommonCountryVO {

    @ApiModelProperty(value = "코드")
    private String cd;
    @ApiModelProperty(value = "코드명")
    private String cdName;
    @ApiModelProperty(value = "코드영문명")
    private String cdEngName;
    @ApiModelProperty(value = "통화코드")
    private String currUnit;


}
