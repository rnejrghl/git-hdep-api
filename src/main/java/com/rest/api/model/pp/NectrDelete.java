package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class NectrDelete {
	@ApiModelProperty(required = true, value = "사이트ID")
	private String siteId;		
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;	 	/* 최종작업자번호 */
    @ApiModelProperty(required = true, value = "계약해지일")
	private String termDt;	 	
    @ApiModelProperty(value = "계약해지사유")
	private String termRsn;	 	
}
