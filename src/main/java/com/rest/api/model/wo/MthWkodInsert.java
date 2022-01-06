package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class MthWkodInsert {
	@ApiModelProperty(value = "사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5))")
	private String siteId;             /* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "작업지시형태 (GRP_CD : CDK-00009 (고장/통신장애/특별점검 등))")
	private String workOrdTyp;         /* 작업지시형태 (GRP_CD : CDK-00009 (고장/통신장애/특별점검 등)) */
	@ApiModelProperty(value = "담당자사용자번호 (해당사이트의 O&M담당자사용자번호)")
	private String userSeq;            /* 담당자사용자번호 (해당사이트의 O&M담당자사용자번호) */
	@ApiModelProperty(value = "완료요청일 (발행일 + 3일로 default 설정)")
	private String cmplReqDt;          /* 완료요청일 (발행일 + 3일로 default 설정) */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;       /* 최종작업자번호 */
	@ApiModelProperty(value = "SMS내용")
	private String smsCntn;            /* SMS내용 */
	@ApiModelProperty(value = "메일내용 (메일내용 또는 Work Order내용)")
	private String mailCntn;          /* 메일내용 (메일내용 또는 Work Order내용) */
	@ApiModelProperty(value = "워크오더발행구분")
	private String workOrdPublGubn;    /* 워크오더발행구분 */
	@ApiModelProperty(value = "지역구분")
	private String regnGubn;           /* 지역구분 */
	@ApiModelProperty(value = "작업지시ID")
	private String workOrdId;           /* 작업지시ID */
	@ApiModelProperty(value = "첨부파일ID")
	private String fileId;           /* 첨부파일ID */


}
