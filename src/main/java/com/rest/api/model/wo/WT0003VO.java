package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

import java.util.List;


@Data
public class WT0003VO {

	@ApiModelProperty(value = "상위코드")
	private String upprCd;			/* 상위코드 */
	@ApiModelProperty(value = "점검항목")
	private String nameKo;		/* 점검항목 */
	@ApiModelProperty(value = "점검항목 영문")
	private String nameEn;		/* 점검항목 영문 */


	private List<children>  children;
}
