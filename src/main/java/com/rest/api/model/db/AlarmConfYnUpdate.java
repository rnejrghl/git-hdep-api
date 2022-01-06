package com.rest.api.model.db;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class AlarmConfYnUpdate {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID */
	@ApiModelProperty(value = "발생번호")
	private String occrSeq; 			/* 발생번호 */

	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq; /* 최종작업자번호 */

}