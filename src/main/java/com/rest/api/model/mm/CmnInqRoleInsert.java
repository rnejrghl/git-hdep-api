package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnInqRoleInsert {
	@ApiModelProperty(required = true, value = "조회그룹ID")
	private String inqGrpId;  		/* 조회그룹ID */
	@ApiModelProperty(value = "조회그룹명")
	private String inqGrpName;		/* 조회그룹명 */
	@ApiModelProperty(value = "조회순서")
	private String inqOrd;			/* 조회순서 */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;			/* 최종작업자번호 */
}