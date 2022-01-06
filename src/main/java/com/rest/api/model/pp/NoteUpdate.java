package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class NoteUpdate {
	@ApiModelProperty(required = true, value = "사이트ID")
	private String siteId;				/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(required = true, value = "특이사항구분코드")
	private String noteGubn; 			/* 특이사항구분코드 (계약정보/계획수립/계약확정/그리드신청/그리드승인/자재구매/설치 등) */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq; 		/* 최종작업자번호 */
	@ApiModelProperty(value = "특이사항")
	private String note;			 	/* 특이사항 */

}