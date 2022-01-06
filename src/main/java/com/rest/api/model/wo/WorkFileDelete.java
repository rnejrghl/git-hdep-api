package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class WorkFileDelete {
	@ApiModelProperty(value = "사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5))")
	private String siteId;			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;			/* 사용자번호 */
	@ApiModelProperty(value = "작업지시ID")
	private String workOrdId;		/* 작업지시ID */
	@ApiModelProperty(value = "파일일련번호")
	private String fileSeq; 		/* 파일일련번호 */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;	/* 최종작업자번호 */

}
