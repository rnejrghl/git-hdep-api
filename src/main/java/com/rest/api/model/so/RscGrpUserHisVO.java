package com.rest.api.model.so;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class RscGrpUserHisVO {
	@ApiModelProperty(value = "자원그룹ID")
	private String rscGrpId;	/* 자원그룹ID */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;		/* 사용자번호 */
	@ApiModelProperty(value = "계약종료일")
	private String cnrtEndDt;	/* 계약종료일 */
	@ApiModelProperty(value = "계약시작일")
	private String cnrtStrtDt;	/* 계약시작일 */
	@ApiModelProperty(value = "사이트ID")
	private String siteId;	/* 사이트ID */
	@ApiModelProperty(value = "사용자명")
	private String userName;	/* 사용자명 */


}
