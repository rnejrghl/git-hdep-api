package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class MthWkodOverdueVO {

	@ApiModelProperty(value = "월")
	private String month;				/* 월 */
	@ApiModelProperty(value = "전체 COUNT")
	private Integer totalCnt;			/* 종료COUNT */
	@ApiModelProperty(value = "미완료 cnt")
	private Integer overDueCnt;			/* 미완료 cnt */
}