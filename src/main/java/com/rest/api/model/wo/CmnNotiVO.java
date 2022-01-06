package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnNotiVO {
	@ApiModelProperty(value = "공지ID")
	private String notiId; 		/* 공지ID */
	@ApiModelProperty(value = "공지알람명")
	private String notiName; 	/* 공지알람명 */
	@ApiModelProperty(value = "SMS여부")
	private String smsYn; 		/* SMS여부 */
	@ApiModelProperty(value = "SMS내용")
	private String smsCntn; 	/* SMS내용 */
	@ApiModelProperty(value = "MAIL여부")
	private String mailYn;		/* MAIL여부 */
	@ApiModelProperty(value = "제목")
	private String mailTitl; 	/* 제목 */
	@ApiModelProperty(value = "머릿말")
	private String mailHead; 	/* 머릿말 */
	@ApiModelProperty(value = "본문")
	private String mailCntn;	/* 본문 */
	@ApiModelProperty(value = "꼬리말")
	private String mailFter;	/* 꼬리말 */
	@ApiModelProperty(value = "사용자등급코드 (코드ID : CDK-00017)")
	private String userLvlCd;	/* 사용자등급코드 (코드ID : CDK-00017) */

}
