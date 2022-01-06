package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnMenuLangInsert {

	@ApiModelProperty(required = true,value = "메뉴id")
	private String menuId;          /* 메뉴id */
	@ApiModelProperty(value = "언어코드")
	private String langCd;			/* 언어코드 */
	@ApiModelProperty(value = "메뉴명")
	private String menuName; 		/* 메뉴명 */
	@ApiModelProperty(value = "마지막수정자")
	private String lastChngUseq;	 /* 마지막수정자 */
	@ApiModelProperty(value = "권한 ID")
	private String menuRoleId;	 /* 권한 ID */
}

