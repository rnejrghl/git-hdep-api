package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class RscGrpVO {
	@ApiModelProperty(value = "자원그룹ID")
	private String rscGrpId; 			/* 자원그룹ID */
	@ApiModelProperty(value = "자원그룹명")
	private String rscGrpName;			/* 자원그룹명 */

}