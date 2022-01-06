package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class ExpnVO {
	@ApiModelProperty(value = "사이트ID")
	private String siteId;				/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "Nectr회원여부")
	private String nctrMemYn; 			/* Nectr회원여부 */
	@ApiModelProperty(value = "사업비승인일")
	private String expnDt; 				/* 사업비승인일 */
	@ApiModelProperty(value = "특이사항")
	private String note;			 	/* 특이사항 */

}