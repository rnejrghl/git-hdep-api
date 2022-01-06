package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnInqRoleVO {
	@ApiModelProperty(value = "조회그룹ID")
	private String inqGrpId;			/* 조회그룹ID */
	@ApiModelProperty(value = "조회그룹명")
	private String inqGrpName;			/* 조회그룹명*/
	@ApiModelProperty(value = "조회순서")
	private String inqOrd;				/* 조회순서*/
	@ApiModelProperty(value = "사용자ID")
	private String userId;				/* 사용자ID */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;				/* 최종작업자번호 */

	@ApiModelProperty(value = "사이트ID")
	private String siteId;				/* 사이트ID */

}