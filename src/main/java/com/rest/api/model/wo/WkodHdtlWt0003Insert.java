package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

import java.util.List;


@Data
public class WkodHdtlWt0003Insert {

	// private MthWkodUpdate mthWkodUpdate;


	@ApiModelProperty(value = "사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5))")
	private String siteId; 		/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "작업지시ID")
	private String workOrdId; 	/* 작업지시ID */
	@ApiModelProperty(value = "사용자번호 (일련번호 1 ~ 9999999999까지 1씩 증가하는 일련번호 해당사이트의 O&M담당자사용자번호)")
	private String userSeq;		/* 사용자번호 (일련번호 1 ~ 9999999999까지 1씩 증가하는 일련번호 해당사이트의 O&M담당자사용자번호) */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;/* 최종작업자번호 */
	@ApiModelProperty(value = "완료예정일")
	private String cmplPredDt;	/* 완료예정일 */
	@ApiModelProperty(value = "처리완료일")
	private String prcsCmplDt;	/* 처리완료일 */
	@ApiModelProperty(value = "확인일")
	private String cnfmDt;		/* 확인일 */
	@ApiModelProperty(value = "작업지시상태 (GRP_CD : CDK-00010)")
	private String workOrdStat; /* 작업지시상태 (GRP_CD : CDK-00010) */

	@ApiModelProperty(value = "완료요청일")
	private String cmplReqDt;	/* 완료요청일 */

	@ApiModelProperty(value = "첨부파일ID")
	private String fileId;           /* 첨부파일ID */



	WT0003VO batteries;
	WT0003VO inverters;
	WT0003VO panels;
	WT0003VO communications;
	WT0003VO monitoring;

}
