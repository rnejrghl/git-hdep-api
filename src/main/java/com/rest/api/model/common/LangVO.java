package com.rest.api.model.common;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class LangVO {

    @ApiModelProperty(value = "메뉴아이디")
    private String menuId;
    @ApiModelProperty(value = "독일")
    private String nameDe;
    @ApiModelProperty(value = "스페인")
    private String nameEs;
    @ApiModelProperty(value = "일본")
    private String nameJa;
    @ApiModelProperty(value = "한국")
    private String nameKo;
    @ApiModelProperty(value = "미국")
    private String nameEn;
    @ApiModelProperty(value = "베트남")
    private String nameVi;

}
