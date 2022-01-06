package com.rest.api.model.so;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class RscGrpUserInsert {
	@ApiModelProperty(required = true,value = "자원그룹ID")
	private String rscGrpId;	 /* 자원그룹ID */
	@ApiModelProperty(required = true,value = "사용자번호")
	private String userSeq;	 /* 사용자번호 */
	@ApiModelProperty(required = true,value = "사이트ID")
	private String siteId;	 /* 사이트ID */
	@ApiModelProperty(value = "계약종료일")
	private String cnrtEndDt;	 /* 계약종료일 */
	@ApiModelProperty(required = true,value = "계약시작일")
	private String cnrtStrtDt;	 /* 계약시작일 */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq; /* 최종작업자번호 */
	
	
	
}