package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

import java.util.List;


@Data
public class CmnCmcdSubVO {
	@ApiModelProperty(value = "코드")
	private String cd;
	@ApiModelProperty(value = "그룹코드")
	private String grpCd;
	@ApiModelProperty(value = "그룹코드명")
	private String grpCdName;
	@ApiModelProperty(value = "코드명")
	private String cdName;
	@ApiModelProperty(value = "상위그룹코드")
	private String upprGrpCd;
	@ApiModelProperty(value = "코드설명")
	private String cdDesc;
	@ApiModelProperty(value = "정렬순서")
	private String inqOrd;

}
