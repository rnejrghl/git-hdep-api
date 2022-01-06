package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;
import org.springframework.web.multipart.MultipartFile;


@Data
public class SiteFileDelete {

	@ApiModelProperty(required = true, value = "사이트ID")
	private String siteId;			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(required = true,value = "파일원천구분")
	private String fileSrcGubn;		/* 파일원천구분 (계약정보/계획수립/GRID신청/GRID승인/자재구매/설치 등) */
	@ApiModelProperty(required = true,value = "파일일련번호")
	private String fileSeq; 		/* 파일일련번호 */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;	/* 최종작업자번호 */

}