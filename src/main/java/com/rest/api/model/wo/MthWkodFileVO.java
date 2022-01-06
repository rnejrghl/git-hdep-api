package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class MthWkodFileVO {
	@ApiModelProperty(value = "사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5))")
	private String siteId;        	/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "작업지시ID")
	private String workOrdId;    	/* 작업지시ID */
	@ApiModelProperty(value = "사용자번호 (일련번호 1 ~ 9999999999까지 1씩 증가하는 일련번호 해당사이트의 O&M담당자사용자번호)")
	private String userSeq;        	/* 사용자번호 (일련번호 1 ~ 9999999999까지 1씩 증가하는 일련번호 해당사이트의 O&M담당자사용자번호) */
	@ApiModelProperty(value = "파일일련번호")
	private String fileSeq;        	/* 파일일련번호 */
	@ApiModelProperty(value = "파일ID")
	private String fileId;        	/* 파일ID */
	@ApiModelProperty(value = "실제파일명")
    private String realFileName;	/* 실제파일명 */
	@ApiModelProperty(value = "파일경로")
	private String filePath; 		/* 파일경로 */

}
