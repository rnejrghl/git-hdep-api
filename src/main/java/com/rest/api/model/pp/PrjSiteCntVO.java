package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class PrjSiteCntVO {
	@ApiModelProperty(value = "계약정보COUNT")
	private String pscCnt;	        /* 계약정보COUNT */
	@ApiModelProperty(value = "계획수립COUNT")
	private String pspCnt; 			/* 계획수립COUNT */
	@ApiModelProperty(value = "사업비승인COUNT")
	private String wkplCmplCnt;	    /* 사업비승인COUNT */
	@ApiModelProperty(value = "그리드신청완료COUNT")
	private String applCnt;			/* 그리드신청완료COUNT */
	@ApiModelProperty(value = "그리드승인완료COUNT")
	private String apprCnt;			/* 그리드승인완료COUNT */
	@ApiModelProperty(value = "그리드자재구매완료COUNT")
	private String mpCnt;			/* 그리드자재구매완료COUNT */
	@ApiModelProperty(value = "그리드설치완료COUNT")
	private String insCnt;			/* 그리드설치완료COUNT */
	@ApiModelProperty(value = "점검완료COUNT")
	private String inspCnt;			/* 점검완료COUNT  */
	@ApiModelProperty(value = "운영완료COUNT")
	private String mngCnt;			/* 운영완료COUNT  */
	@ApiModelProperty(value = "TOTALCOUNT")
	private String totCnt;			/* TOTALCOUNT  */
	@ApiModelProperty(value = "종료COUNT")
	private String endCnt;			/* 종료COUNT */
	@ApiModelProperty(value = "전체 COUNT")
	private Integer totalCnt;			/* 종료COUNT */
	@ApiModelProperty(value = "페이지")
	private Integer page;			/* 종료COUNT */
	@ApiModelProperty(value = "총 페이지")
	private Integer totalPage;			/* 종료COUNT */
}