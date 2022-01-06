package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class MthWkodVO {
	@ApiModelProperty(value = "사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5))")
	private String siteId; 				/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "발행일시")
	private String publDtti; 			/* 발행일시 */
	@ApiModelProperty(value = "발행자번호")
	private String publUserSeq; 			/* 발행자번호 */
	@ApiModelProperty(value = "발생자명")
	private String publUserName; 			/* 발생자명 */
	@ApiModelProperty(value = "작업지시ID")
	private String workOrdId; 			/* 작업지시ID */
	@ApiModelProperty(value = "작업지시형태 (GRP_CD : CDK-00009 (고장/통신장애/특별점검 등))")
	private String workOrdTyp; 			/* 작업지시형태 (GRP_CD : CDK-00009 (고장/통신장애/특별점검 등)) */
	@ApiModelProperty(value = "작업지시상태 (GRP_CD : CDK-00010)")
	private String workOrdStat; 		/* 작업지시상태 (GRP_CD : CDK-00010) */
	@ApiModelProperty(value = "사이트사용자번호")
	private String siteUserSeq;			/* 사이트사용자번호 */
	@ApiModelProperty(value = "사이트사용자명")
	private String siteUserName;		/* 사이트사용자명 */
	@ApiModelProperty(value = "담당자사용자번호 (해당사이트의 O&M담당자사용자번호)")
	private String workOrdUserSeq; 		/* 담당자사용자번호 (해당사이트의 O&M담당자사용자번호) */
	@ApiModelProperty(value = "담당자사용자명")
	private String workOrdUserName;		/* 담당자사용자명 */
	@ApiModelProperty(value = "담당자사용자전화번호 ")
	private String workOrdUserTelNo;	/* 담당자사용자전화번호 */
	@ApiModelProperty(value = "완료요청일 (발행일 + 3일로 default 설정)")
	private String cmplReqDt;			/* 완료요청일 (발행일 + 3일로 default 설정) */
	@ApiModelProperty(value = "확인일")
	private String cnfmDt; 				/* 확인일 */
	@ApiModelProperty(value = "완료예정일")
	private String cmplPredDt; 			/* 완료예정일 */
	@ApiModelProperty(value = "처리완료일")
	private String prcsCmplDt; 			/* 처리완료일 */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq; 		/* 최종작업자번호 */
	@ApiModelProperty(value = "조회발행시작일")
	private String publStartDt; 		/* 조회발행시작일 */
	@ApiModelProperty(value = "조회발행종료일")
	private String publEndDt; 			/* 조회발행종료일 */
	@ApiModelProperty(value = "결과등록여부")
	private String rsltRegYn; 			/* 결과등록여부 */
	@ApiModelProperty(value = "첨부파일ID")
	private String fileId; 			/* 첨부파일ID */
	@ApiModelProperty(value = "사용자번호")
	private String siteUserTelNo; 			/* 사용자번호 */
	@ApiModelProperty(value = "주소")
	private String addr; 			/* 주소 */

	@ApiModelProperty(value = "사용자")
	private String user; 			/* 사용자 */
	@ApiModelProperty(value = "사이트ID조건조회")
	private String[] siteIds; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */

	@ApiModelProperty(value = "페이지번호")
	private Integer page;		/* 페이지 번호 */
	@ApiModelProperty(value = "시작 rownum")
	private Integer pageStart;		/* 시작 rownum */
	@ApiModelProperty(value = "1페이지당 노출할 갯수")
	private Integer pagePer;		/* 1페이지당 노출할 갯수 */

	@ApiModelProperty(value = "Qa 리젝사유")
	private String qaNote; 		/* 특이사항 */
	@ApiModelProperty(value = "Qa 완료일")
	private String qaCmplDt; 		/* 특이사항 */

    @ApiModelProperty(value = "모바일접속 여부")
    private boolean mobile;
	
}
