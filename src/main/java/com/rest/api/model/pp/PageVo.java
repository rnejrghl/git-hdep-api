package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class PageVo {

	@ApiModelProperty(value = "총 페이지 갯수")
	private Integer totalPage;		/* 페이지 번호 */

	@ApiModelProperty(value = "총 페이지 갯수")
	private Integer totalCnt;		/* 페이지 번호 */
	@ApiModelProperty(value = "페이지번호")
	private Integer page;		/* 페이지 번호 */
}
