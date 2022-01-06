package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnMenuRoleMngInsert {
	@ApiModelProperty(required = true,value = "메뉴권한명")
	private String menuRoleName;	 /* 메뉴권한명 */
	@ApiModelProperty(value = "마지막수정자")
	private String lastChngUseq;	 /* 마지막수정자 */


}

