package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class SiteFileVO {
	@ApiModelProperty(value = "사이트ID")
	private String siteId;        	/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "파일일련번호")
	private String fileSeq;        	/* 파일일련번호 */
	@ApiModelProperty(value = "파일ID")
	private String fileId;        	/* 파일ID */
	@ApiModelProperty(value = "파일원천구분")
	private String fileSrcGubn;     /* 파일원천구분 */

	@ApiModelProperty(value = "실제파일명")
    private String realFileName;	/* 실제파일명 */
	@ApiModelProperty(value = "파일경로")
	private String filePath; 		/* 파일경로 */


}