package com.rest.api.model.db;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class AssetOverviewSiteDtlVO {
	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq; 			/* 사용자번호 */
	@ApiModelProperty(value = "사용자ID")
	private String userId; 			/* 사용자ID */
	@ApiModelProperty(value = "사용자명")
	private String userName; 			/* 사용자명 */
	@ApiModelProperty(value = "메일")
	private String email; 			/* 메일 */
	@ApiModelProperty(value = "전화번호")
	private String telNo; 			/* 전화번호 */
	@ApiModelProperty(value = "주소")
	private String addr; 			/* 주소 */
	@ApiModelProperty(value = "지역구분")
	private String regnGubn; 			/* 지역구분 */
	@ApiModelProperty(value = "자원구분 (코드ID : CDK-00011( A:PV/B:PV+ESS ))")
	private String rescGubn; 			/* 자원구분 (코드ID : CDK-00011( A:PV/B:PV+ESS )) */
	@ApiModelProperty(value = "설치담당자번호")
	private String instPsnSeq; 			/* 설치담당자번호 */
	@ApiModelProperty(value = "설치담당자ID")
	private String instPsnId; 			/* 설치담당자ID */
	@ApiModelProperty(value = "설치담당자명")
	private String instPsnName; 			/* 설치담당자명 */
	@ApiModelProperty(value = "설치담당자메일")
	private String instEmail; 			/* 설치담당자메일 */
	@ApiModelProperty(value = "설치담당자전화번호")
	private String instTelNo; 			/* 설치담당자전화번호 */
	@ApiModelProperty(value = "PV설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 ))")
	private String pvInstCapa; 			/* PV설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "ESS설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 ))")
	private String essInstCapa; 			/* ESS설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "Q&M사용자번호")
	private String mngUserSeq; 			/* Q&M사용자번호 */
	@ApiModelProperty(value = "Q&M사용자ID")
	private String mngUserId; 			/* Q&M사용자ID */
	@ApiModelProperty(value = "Q&M사용자명")
	private String mngUserName; 			/* Q&M사용자명 */
	@ApiModelProperty(value = "Q&M메일")
	private String mngEmail; 			/* Q&M메일 */
	@ApiModelProperty(value = "Q&M전화번호")
	private String mngTelNo; 			/* Q&M전화번호 */
	@ApiModelProperty(value = "위도")
	private String latd;	/* 위도 */
	@ApiModelProperty(value = "경도")
	private String lgtd;	/* 경도 */

	@ApiModelProperty(value = "날씨상태")
	private String weatherMain;	/* 날씨상태 */
	@ApiModelProperty(value = "온도")
	private String weatherTemp;	/* 온도 */
	@ApiModelProperty(value = "날씨아이디")
	private String weatherId;	/* 날씨아이디 */
}
