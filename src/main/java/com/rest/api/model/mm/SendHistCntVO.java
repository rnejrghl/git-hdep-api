package com.rest.api.model.mm;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class SendHistCntVO {
	
	@ApiModelProperty(value = "전체 COUNT")
	private Integer totalCnt;			/* 종료COUNT */
	@ApiModelProperty(value = "페이지")
	private Integer page;			/* 종료COUNT */
	@ApiModelProperty(value = "총 페이지")
	private Integer totalPage;			/* 종료COUNT */

}
