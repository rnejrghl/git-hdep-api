package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class PrjSitesVO {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;			/* 사용자번호 */
	@ApiModelProperty(value = "사용자ID")
	private String userId;			/* 사용자ID */
	@ApiModelProperty(value = "사용자명")
	private String userName; 		/* 사용자명 */
	@ApiModelProperty(value = "지역구분")
	private String regnGubn; 		/* 지역구분*/
	@ApiModelProperty(value = "자원구분")
	private String rescGubn; 		/* 지역구분*/
	@ApiModelProperty(value = "PV설치용량")
	private String pvInstCapa; 		/* PV설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "ESS설치용량")
	private String essInstCapa; 	/* ESS설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "목표등록여부명")
	private String goalYnNm;	    /* 목표등록여부명 */
	@ApiModelProperty(value = "설치담당자번호")
	private String instPsnSeq;		/* 설치담당자번호 */
	@ApiModelProperty(value = "설치담당자ID")
	private String instPsnId;		/* 설치담당자ID */
	@ApiModelProperty(value = "설치담당자명")
	private String instPsnName;		/* 설치담당자명 */
	@ApiModelProperty(value = "설치담당자전화번호")
	private String instPsnTelNo;		/* 설치담당자전화번호 */
	@ApiModelProperty(value = "계약시작일")
	private String cnrtStrtDt; 		/* 계약시작일*/
	@ApiModelProperty(value = "계약종료일")
	private String cnrtEndDt; 		/* 계약종료일 */
	@ApiModelProperty(value = "작업계획수립완료")
	private String wkplCmplDt; 		/* 작업계획수립완료 */
	@ApiModelProperty(value = "사업비승인일")
	private String expnDt; 			/* 사업비승인일 */
	@ApiModelProperty(value = "신청완료일")
	private String applCmdt; 		/* 신청완료일 */
	@ApiModelProperty(value = "승인완료일")
	private String apprCmdt; 		/* 승인완료일 */
	@ApiModelProperty(value = "자재구매완료일")
	private String mpCmdt; 			/* 자재구매완료일 */
	@ApiModelProperty(value = "설치완료일")
	private String insCmdt; 		/* 설치완료일 */
	@ApiModelProperty(value = "점검일")
	private String chkCmplDt;	    /* 점검일 */
	@ApiModelProperty(value = "운영시작일")
	private String mngStrtDt;    	/* 운영시작일 */
	@ApiModelProperty(value = "해지일")
	private String termDt; 			/* 해지일 */
	@ApiModelProperty(value = "위도")
	private String latd;
	@ApiModelProperty(value = "경도")
	private String lgtd;

	@ApiModelProperty(value = "신청예정일")
	private String applDudt; 		/* 신청예정일 */
	@ApiModelProperty(value = "승인예정일")
	private String apprDudt; 		/* 승인예정일 */
	@ApiModelProperty(value = "자재구매예정일")
	private String mpDudt; 			/* 자재구매예정일 */
	@ApiModelProperty(value = "설치예정일")
	private String insDudt; 		/* 설치예정일 */
	@ApiModelProperty(value = "주소")
	private String addr;			/* 주소 */
}
