package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class MthWkodCntVO {

	/* Work order 발생현황건수 */
	private String wt0001Cnt;
	private String wt0002Cnt;
	private String wt0003Cnt;
	private String wt0004Cnt;

	/* Work order 상태 현황 건수 */
	private String ws0001Cnt;
	private String ws0002Cnt;
	private String ws0003Cnt;
	private String ws0004Cnt;

	@ApiModelProperty(value = "전체 COUNT")
	private Integer totalCnt;			/* 종료COUNT */
	@ApiModelProperty(value = "페이지")
	private Integer page;			/* 종료COUNT */
}