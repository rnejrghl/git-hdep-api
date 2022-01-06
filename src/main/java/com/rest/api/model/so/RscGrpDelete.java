package com.rest.api.model.so;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class RscGrpDelete {
	@ApiModelProperty(required = true,value = "자원그룹ID")
	private String rscGrpId;	 /* 자원그룹ID */
	@ApiModelProperty(value = "자원그룹명")
	private String rscGrpName;	 /* 자원그룹명 */
	@ApiModelProperty(value = "거래가능시작일")
	private String trdbStrtDt;	 /* 거래가능시작일 */
	@ApiModelProperty(value = "거래가능종료일")
	private String trdbEndDt;	 /* 거래가능종료일 */
	@ApiModelProperty(value = "자원상태구분 (개시 : I(Initiate) / 말소 : C(Cancellation))")
	private String rscStatCd;	 /* 자원상태구분 (개시 : I(Initiate) / 말소 : C(Cancellation)) */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq; /* 최종작업자번호 */
	
	
}
