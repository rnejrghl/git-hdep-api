package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class MobilePrjSiteVo {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;			/* 사용자번호 */
	@ApiModelProperty(value = "사용자ID")
	private String userId;			/* 사용자ID */
	@ApiModelProperty(value = "사용자 명")
	private String userName;			/* 사용자 */
	@ApiModelProperty(value = "주소")
	private String addr;			/* 주소 */
	@ApiModelProperty(value = "사이트 등록단계(CDK-00030)")
	private String process;			/* 사이트 등록단계 CDK-00030 */
}
