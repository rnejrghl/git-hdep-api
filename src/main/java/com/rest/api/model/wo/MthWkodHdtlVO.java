package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class MthWkodHdtlVO {
	@ApiModelProperty(value = "사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5))")
	private String siteId; 		/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "작업지시ID")
	private String workOrdId; 	/* 작업지시ID */
	@ApiModelProperty(value = "사용자번호 (일련번호 1 ~ 9999999999까지 1씩 증가하는 일련번호 해당사이트의 O&M담당자사용자번호)")
	private String userSeq;		/* 사용자번호 (일련번호 1 ~ 9999999999까지 1씩 증가하는 일련번호 해당사이트의 O&M담당자사용자번호) */
	@ApiModelProperty(value = "점검SEQ")
	private String chkSeq;		/* 점검SEQ */
	@ApiModelProperty(value = "작업사항")
	private String jobItem; 	/* 작업사항 */
	@ApiModelProperty(value = "점검항목")
	private String chkItem;		/* 점검항목 */
	@ApiModelProperty(value = "점검내용")
	private String chkCntn; 	/* 점검내용 */
	@ApiModelProperty(value = "상태구분 (01: 양호/02:불량/99:해당없음)")
	private String statGubn; 	/* 상태구분 (01: 양호/02:불량/99:해당없음) */
	@ApiModelProperty(value = "특이사항")
	private String note; 		/* 특이사항 */
	
}
