package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class PtnMapInsertVO {
    @ApiModelProperty(required = true, value = "게이트웨이ID")
    private String gtwyId;
    @ApiModelProperty(required = true, value = "설비구분코드")
    private String cd;

}
