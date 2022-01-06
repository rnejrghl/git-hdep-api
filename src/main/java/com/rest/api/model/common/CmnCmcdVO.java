package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

import java.util.List;


@Data
public class CmnCmcdVO {
	@ApiModelProperty(value = "그룹코드")
	private String grpCd;
	@ApiModelProperty(value = "그룹코드명")
	private String grpCdName;
	@ApiModelProperty(value = "코드설명")
	private String cdDesc;
	@ApiModelProperty(value = "코드")
	private List<CmnCmcdSubVO> codes;

}
