package com.rest.api.model.pp;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class PrjSiteVO {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; /* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq; /* 사용자번호 */
	@ApiModelProperty(value = "사용자ID")
	private String userId; /* 사용자ID */
	@ApiModelProperty(value = "사용자명")
	private String userName; /* 사용자명 */
	@ApiModelProperty(value = "지역구분")
	private String regnGubn; /* 지역구분 */
	@ApiModelProperty(value = "자원구분")
	private String rescGubn; /* 자원구분 */
	@ApiModelProperty(value = "PV설치용량")
	private String pvInstCapa; /* PV설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "ESS설치용량")
	private String essInstCapa; /* ESS설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "설비상태")
	private String eqmtStatus; /* 설비상태 ( 코드ID : CDK-00001 ) */

	@ApiModelProperty(value = "목표일자")
	private String goalDt; /* 목표일자 */
	@ApiModelProperty(value = "목표발전량")
	private String goalGenrCapa; /* 목표발전량 (기본단위 : kWh ( 코드ID : CDK-00018.TUN007 )) */
	@ApiModelProperty(value = "PR")
	private String pr; /* PR (%) */
	@ApiModelProperty(value = "PPA거래량")
	private String ppa; /* PPA거래량 (기본단위 : kWh ( 코드ID : CDK-00018.TUN007 )) */
	@ApiModelProperty(value = "매출")
	private String sale; /* 매출 */
	@ApiModelProperty(value = "목표등록여부명")
	private String goalYnNm; /* 목표등록여부명 */
	@ApiModelProperty(value = "설치담당자번호")
	private String instPsnSeq; /* 설치담당자번호 */
	@ApiModelProperty(value = "설치담당자ID")
	private String instPsnId; /* 설치담당자ID */
	@ApiModelProperty(value = "설치담당자")
	private String instPsnName; /* 설치담당자 */
	@ApiModelProperty(value = "계약시작일")
	private String cnrtStrtDt; /* 계약시작일 */
	@ApiModelProperty(value = "계약종료일")
	private String cnrtEndDt; /* 계약종료일 */
	@ApiModelProperty(value = "작업계획수립완료")
	private String wkplCmplDt; /* 작업계획수립완료 */
	@ApiModelProperty(value = "사업비승인일")
	private String expnDt; /* 사업비승인일 */
	@ApiModelProperty(value = "신청완료일")
	private String applCmdt; /* 신청완료일 */
	@ApiModelProperty(value = "승인완료일")
	private String apprCmdt; /* 승인완료일 */
	@ApiModelProperty(value = "자재구매완료일")
	private String mpCmdt; /* 자재구매완료일 */
	@ApiModelProperty(value = "설치완료일")
	private String insCmdt; /* 설치완료일 */
	@ApiModelProperty(value = "운영시작일")
	private String mngStrtDt; /* 운영시작일 */
	@ApiModelProperty(value = "점검일")
	private String chkCmplDt; /* 점검일 */

	@ApiModelProperty(value = "작업계획수립완료일 조회시작일")
	private String wkplStrtDt; /* 작업계획수립완료일 조회시작일 */
	@ApiModelProperty(value = "작업계획수립완료 조회종료일")
	private String wkplEndDt; /* 작업계획수립완료 조회종료일 */
	@ApiModelProperty(value = "사업비승인일 조회시작일")
	private String expnStrtDt; /* 사업비승인일 조회시작일 */
	@ApiModelProperty(value = "사업비승인일 조회종료일")
	private String expnEndDt; /* 사업비승인일 조회종료일 */
	@ApiModelProperty(value = "신청완료일 조회시작일")
	private String applStrtCmdt; /* 신청완료일 조회시작일 */
	@ApiModelProperty(value = "신청완료일 조회종료일")
	private String applEndCmdt; /* 신청완료일 조회종료일 */
	@ApiModelProperty(value = "승인완료일 조회시작일")
	private String apprStrtCmdt; /* 승인완료일 조회시작일 */
	@ApiModelProperty(value = "승인완료일 조회종료일")
	private String apprEndCmdt; /* 승인완료일 조회종료일 */
	@ApiModelProperty(value = "자재구매완료일 조회시작일")
	private String mpStrtCmdt; /* 자재구매완료일 조회시작일 */
	@ApiModelProperty(value = "자재구매완료일 조회종료일")
	private String mpEndCmdt; /* 자재구매완료일 조회종료일 */
	@ApiModelProperty(value = "설치완료일 조회시작일")
	private String insStrtCmdt; /* 설치완료일 조회시작일 */
	@ApiModelProperty(value = "설치완료일 조회종료일")
	private String insEndCmdt; /* 설치완료일 조회종료일 */
	@ApiModelProperty(value = "계약시작일 조회시작일")
	private String cnrtStrtSrcStrtDt; /* 계약시작일 조회시작일 */
	@ApiModelProperty(value = "계약시작일 조회종료일")
	private String cnrtStrtSrcEndDt; /* 계약시작일 조회종료일 */
	@ApiModelProperty(value = "계약종료일 조회시작일")
	private String cnrtEndSrcStrtDt; /* 계약종료일 조회시작일 */
	@ApiModelProperty(value = "계약종료일 조회종료일")
	private String cnrtEndSrcEndDt; /* 계약종료일 조회종료일 */

	@ApiModelProperty(value = "운영시작일 조회시작일")
	private String mngSrcStrtDt; /* 운영시작일 조회시작일 */
	@ApiModelProperty(value = "운영시작일 조회종료일")
	private String mngSrcEndDt; /* 운영시작일 조회종료일 */
	@ApiModelProperty(value = "점검일 조회시작일")
	private String chkCmplSrcStrtDt; /* 점검일 조회시작일 */
	@ApiModelProperty(value = "점검일 조회종료일")
	private String chkCmplSrcEndDt; /* 점검일 조회종료일 */

	@ApiModelProperty(value = "해지일")
	private String termDt; /* 해지일 */
	@ApiModelProperty(value = "해지사유")
	private String termRsn; /* 해지사유 */

	@ApiModelProperty(value = "사이트ID조건조회")
	private String[] siteIds; /* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */

	@ApiModelProperty(value = "사용자")
	private String user; /* 사용자 */
	@ApiModelProperty(value = "주소")
	private String addr; /* 주소 */

	@ApiModelProperty(value = "작업계획수립완료 여부")
	private String wkplCmplDtYN; /* 작업계획수립완료 여부 */
	@ApiModelProperty(value = "사업비승인일 여부")
	private String expnDtYN; /* 사업비승인일 여부 */
	@ApiModelProperty(value = "신청완료일 여부")
	private String applCmdtYN; /* 신청완료일 여부 */
	@ApiModelProperty(value = "승인완료일 여부")
	private String apprCmdtYN; /* 승인완료일 여부 */
	@ApiModelProperty(value = "자재구매완료일 여부")
	private String mpCmdtYN; /* 자재구매완료일 여부 */
	@ApiModelProperty(value = "설치완료일 여부")
	private String insCmdtYN; /* 설치완료일 여부 */
	@ApiModelProperty(value = "운영시작일 여부")
	private String mngStrtDtYN; /* 운영시작일 여부 */
	@ApiModelProperty(value = "점검일 여부")
	private String chkCmplDtYN; /* 점검일 여부 */
	@ApiModelProperty(value = "종료일 여부")
	private String TermDtYN; /* 종료일 여부 */

	@ApiModelProperty(value = "사이트정보 진행상태(CDK-00030)")
	private String process; /* 사이트정보 진행상태 */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq; /* 최종작업자번호 */

	@ApiModelProperty(value = "페이지번호")
	private Integer page; /* 페이지 번호 */
	@ApiModelProperty(value = "시작 rownum")
	private Integer pageStart; /* 시작 rownum */
	@ApiModelProperty(value = "1페이지당 노출할 갯수")
	private Integer pagePer; /* 1페이지당 노출할 갯수 */
}
