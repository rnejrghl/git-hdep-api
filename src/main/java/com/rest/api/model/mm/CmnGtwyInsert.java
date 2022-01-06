package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

import java.util.List;


@Data
public class CmnGtwyInsert {
	@ApiModelProperty(value = "게이트웨이ID")
	private String gtwyId; 				/* 게이트웨이ID */
	@ApiModelProperty(value = "게이트웨이명")
	private String gtwyName; 			/* 게이트웨이명 */
	@ApiModelProperty(value = "사용자SEQ")
	private String userSeq; 			/* 사용자SEQ */
	@ApiModelProperty(value = "상품코드")
	private String eqmtGubnCd; 			/* 상품코드 */
	@ApiModelProperty(value = "상품코드 리스트")
	private List<String> eqmtGubnCds; 		/* 상품코드 */
}
