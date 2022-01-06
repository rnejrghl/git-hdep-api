package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class MobileMngVO {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "운영 담당자 번호")
	private String mngUserSeq;		/* 운영 담당자 번호 */
	@ApiModelProperty(value = "운영 담당자ID")
	private String mngUserId;		/* 운영 담당자ID */
	@ApiModelProperty(value = "운영 담당자명")
	private String mngUserName;		/* 운영 담당자명 */
	@ApiModelProperty(value = "이메일")
	private String mngEmail;		/* 이메일 */
	@ApiModelProperty(value = "운영시작일")
	private String mngStrtDt;		/* 운영시작일 */
	@ApiModelProperty(value = "운영 특이사항")
	private String mngNote;  		/* 운영 특이사항 */
	
	
}
