package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;
import org.springframework.web.multipart.MultipartFile;


@Data
public class ContractPlanInsert {
	@ApiModelProperty(value = "사이트ID")
	private String siteId;				/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "신규사용자여부")
	private String newUserYn;			/* 신규사용자여부 */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;				/* 사용자번호 */
	@ApiModelProperty(value = "주소")
	private String addr;				/* 주소 */
	@ApiModelProperty(value = "지역구분")
	private String regnGubn;			/* 지역구분 */
	@ApiModelProperty(value = "TimeZone")
	private String timeZone;			/* TimeZone */
	@ApiModelProperty(value = "SPC")
	private String spc;					/* SPC */
	@ApiModelProperty(value = "통화단위")
	private String currUnit;			/* 통화단위 (코드ID : CDK-00013, 보통 3자리로 쓰는데 여기는 2자리로 쓰는 듯.) */
	@ApiModelProperty(value = "계약시작일")
	private String cnrtStrtDt;			/* 계약시작일 */
	@ApiModelProperty(value = "계약종료일")
	private String cnrtEndDt;			/* 계약종료일 */
	@ApiModelProperty(value = "PPA단가")
	private String ppaUnitPrce;			/* PPA단가 */
	@ApiModelProperty(value = "인센티브")
	private String ictv;				/* 인센티브 */
	@ApiModelProperty(value = "TotalCost")
	private String totlCost;			/* TotalCost */
	@ApiModelProperty(value = "STC")
	private String stc;					/* STC */
	@ApiModelProperty(value = "자원구분")
	private String rescGubn;			/* 자원구분 (코드ID : CDK-00011( A:PV/B:PV+ESS )) */

	@ApiModelProperty(value = "설치담당자")
	private String instPsnSeq;			/* 설치담당자 */
	@ApiModelProperty(value = "PV설치용량")
	private String pvInstCapa;			/* PV설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "ESS설치용량")
	private String essInstCapa;			/* ESS설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */

	@ApiModelProperty(value = "특이사항구분코드")
	private String noteGubn;			/* 특이사항구분코드 (계약정보/계획수립/계약확정/그리드신청/그리드승인/자재구매/설치 등) */
	@ApiModelProperty(value = "특이사항")
	private String note;				/* 특이사항 */
	@ApiModelProperty(value = "계약특이사항")
	private String contractNote; 		/* 계약특이사항 */
	@ApiModelProperty(value = "계획특이사항")
	private String planNote; 			/* 계획특이사항 */

	@ApiModelProperty(value = "모듈제조사구분")
	private String modlMnftGubn;		/* 모듈제조사구분 (코드ID : CDK-00006) */
	@ApiModelProperty(value = "모듈용량")
	private String modlCapa;            /* 모듈용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "인버터제조사구분")
	private String invtMnftGubn;		/* 인버터제조사구분 (코드ID : CDK-00007) */
	@ApiModelProperty(value = "인버터용량")
	private String invtCapa;            /* 인버터용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "배터리제조사구분")
	private String btryMnftGubn;		/* 배터리제조사구분 (코드iD : CDK-00008) */
	@ApiModelProperty(value = "배터리용량")
	private String btryCapa;            /* 배터리용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "통신장비제조사구분")
	private String comuEqmtGubn;		/* 통신장비제조사구분 (코드ID : CDK-00014) */
	@ApiModelProperty(value = "통신방식구분")
	private String comuMthdGubn;		/* 통신방식구분 (코드ID : CDK-00015) */
	@ApiModelProperty(value = "작업계획수립완료일")
	private String wkplCmplDt;			/* 작업계획수립완료일 */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;	 	/* 최종작업자번호 */

	@ApiModelProperty(value = "사용자명")
	private String userName;
	@ApiModelProperty(value = "전화번호")
	private String telNo; 				/* 전화번호 */
	@ApiModelProperty(value = "이메일")
	private String email; 				/* 이메일 */

	@ApiModelProperty(value = "신청예정일")
	private String applDudt; 			/* 신청예정일 */
	@ApiModelProperty(value = "승인예정일")
	private String apprDudt; 			/* 승인완료일 */
	@ApiModelProperty(value = "자재구매예정일")
	private String mpDudt; 				/* 자재구매예정일 */
	@ApiModelProperty(value = "설치예정일")
	private String insDudt; 			/* 설치예정일 */

	@ApiModelProperty(value = "사이트별사용자등급코드")
	private String siteUlvlCd;        	/* 사이트별사용자등급코드 */

	@ApiModelProperty(value = "계약파일ID")
	private String[] fileIdCd1;
	@ApiModelProperty(value = "계획파일ID")
	private String[] fileIdCd2;
	
	@ApiModelProperty(value = "작업계획수립 TotalCost")
	private String planTotlCost;	 	/* 작업계획수립 TotalCost */

	@ApiModelProperty(value = "위도")
	private String latd;
	@ApiModelProperty(value = "경도")
	private String lgtd;

	@ApiModelProperty(value = "Nectr회원여부")
	private String nctrMemYn; 			/* Nectr회원여부 */
}
