package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class LangUpdate {

    @ApiModelProperty(value = "메뉴아이디")
    private String menuId;
    @ApiModelProperty(value = "내용")
    private String menuName;
    @ApiModelProperty(value = "언어코드")
    private String langCd;

    @ApiModelProperty(value = "호주")
    private String nameAu;
    @ApiModelProperty(value = "독일")
    private String nameDe;
    @ApiModelProperty(value = "스페인")
    private String nameEs;
    @ApiModelProperty(value = "영국")
    private String nameGb;
    @ApiModelProperty(value = "일본")
    private String nameJa;
    @ApiModelProperty(value = "한국")
    private String nameKo;
    @ApiModelProperty(value = "멕시코")
    private String nameMx;
    @ApiModelProperty(value = "말레이시아")
    private String nameMy;
    @ApiModelProperty(value = "포르루칼")
    private String namePt;
    @ApiModelProperty(value = "미국")
    private String nameEn;
    @ApiModelProperty(value = "베트남")
    private String nameVi;

}

