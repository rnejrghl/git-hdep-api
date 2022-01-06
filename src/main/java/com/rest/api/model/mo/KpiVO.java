package com.rest.api.model.mo;


import io.swagger.annotations.ApiModelProperty;
import io.swagger.annotations.ApiParam;
import lombok.Data;
import org.springframework.web.bind.annotation.RequestParam;


@Data
public class KpiVO {
	@ApiModelProperty(value = "사이트ID")
	private String siteId;			/* 사이트ID */
	@ApiModelProperty(value = "목표일자")
	private String goalDt;			/* 목표일자 */
	@ApiModelProperty(value = "목표발전량")
	private String goalGenrCapa;	/* 목표발전량 */
	@ApiModelProperty(value = "PPA거래량")
	private String ppa;				/* PPA거래량 */
	@ApiModelProperty(value = "pr")
	private String pr;				/* pr */
	@ApiModelProperty(value = "매출")
	private String sale;			/* 매출 */
	@ApiModelProperty(value = "조회시작년월")
	private String statYm;			/* 조회시작년월 */
	@ApiModelProperty(value = "조회종료년월")
	private String endYm;			/* 조회종료년월 */
	@ApiModelProperty(value = "검색구분")
	private String searchType;			/* 조회종료년월 */
}
