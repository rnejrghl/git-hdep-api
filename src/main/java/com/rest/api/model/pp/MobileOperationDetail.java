package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class MobileOperationDetail {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; 					/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "자원구분코드")
	private String rescGubn; 				/* 자원구분코드 */
	@ApiModelProperty(value = "사용자명")
	private String userName;				/* 사용자명 */
	@ApiModelProperty(value = "회원연락처")
	private String userPhone; 				/* 실시간 5분단위 발전량 */
	@ApiModelProperty(value = "이메일")
	private String userEmail; 				/* 지역구분*/
	@ApiModelProperty(value = "주소")
	private String addr; 	    			/* 주소 */
	@ApiModelProperty(value = "PV설치용량")
	private String pvCapa ;					/* PV설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "ESS설치용량")
	private String essCapa; 				/* ESS설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */

	@ApiModelProperty(value = "운영시작일")
	private String mngStrtDt;						/* 운영시작일 */

	@ApiModelProperty(value = "모듈제조사구분")
	private String modlMnftGubn;					/* 모듈제조사구분 (코드ID : CDK-00006) */
	@ApiModelProperty(value = "인버터제조사구분")
	private String invtMnftGubn;					/* 인버터제조사구분 (코드ID : CDK-00007) */
	@ApiModelProperty(value = "통신장비제조사구분")
	private String comuEqmtGubn;					/* 통신장비제조사구분 (코드ID : CDK-00014) */
	@ApiModelProperty(value = "O/M 담당자 명")
	private String mngUserName;						/* O/M 담당자 명 */


	@ApiModelProperty(value = " 목표발전량")
	private String goalGenrCapa;	/* 목표발전량 */
	@ApiModelProperty(value = "Energy Yield(목표량)")
	private String goalEnergyYield ;				    /*Energy Yield(AC 기준 발전량(kWh))*/
	@ApiModelProperty(value = "IVT Efficiency(목표대비)")
	private String goalIvt ;				    /*IVT Efficiency(목표대비)*/
	@ApiModelProperty(value = "IVT Efficiency(목표대비)")
	private String goalPpa ;				    /*IVT Efficiency(목표대비)*/

	@ApiModelProperty(value = "날씨상태")
	private String weatherMain;	/* 날씨상태 */
	@ApiModelProperty(value = "온도")
	private String weatherTemp;	/* 온도 */
	@ApiModelProperty(value = "날씨아이디")
	private String weatherId;	/* 날씨아이디 */

	@ApiModelProperty(value = "위도")
	private String latd;	/* 위도 */
	@ApiModelProperty(value = "경도")
	private String lgtd;	/* 경도 */

	@ApiModelProperty(value = "timezone")
	private String timeZone;			/* timezone */
	@ApiModelProperty(value = "발전량")
	private String production;			/* 발전량 */
	@ApiModelProperty(value = "ivtEfficiency")
	private String ivtEfficiency;			/* ivtEfficiency */
	@ApiModelProperty(value = "energyYield")
	private String energyYield;			/* energyYield */
	@ApiModelProperty(value = "ppa")
	private String ppa;			/* ppa */
}
