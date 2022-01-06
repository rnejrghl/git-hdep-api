package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class ReNotiSendVO {
	@ApiModelProperty(value = "사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5))")
	private String siteId; 				/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq; 			/* 사용자번호 */
	@ApiModelProperty(value = "건수")
	private String cnt; 			/* 건수 */
	@ApiModelProperty(value = "주소")
	private String addr; 			/* 주소 */

}
