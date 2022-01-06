package com.rest.api.model.mo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class OperationsVO {
	@ApiModelProperty(value = "사이트ID")
	private String siteId ;			/* 사이트ID */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;		/* 사용자번호 */
	@ApiModelProperty(value = "사용자명")
	private String userName;		/* 사용자명 */
	@ApiModelProperty(value = "자원구분")
	private String rescGubn;		/* 자원구분 */
	@ApiModelProperty(value = "PR")
	private String pr;				/* PR */
	@ApiModelProperty(value = "PPA거래량 (기본단위 : kWh ( 코드ID : CDK-00018.TUN007 ))")
	private String ppa;				/* PPA거래량 (기본단위 : kWh ( 코드ID : CDK-00018.TUN007 )) */
	@ApiModelProperty(value = "목표발전량 (기본단위 : kWh ( 코드ID : CDK-00018.TUN007 ))")
	private String goalGenrCapa;	/* 목표발전량 (기본단위 : kWh ( 코드ID : CDK-00018.TUN007 )) */
	@ApiModelProperty(value = "WorkOrder 미처리건수")
	private String workOrderCnt;	/* WorkOrder 미처리건수 */
	@ApiModelProperty(value = "위도")
	private String latd;	/* 위도 */
	@ApiModelProperty(value = "경도")
	private String lgtd;	/* 경도 */
	@ApiModelProperty(value = "주소")
	private String addr;	/* 주소 */
	@ApiModelProperty(value = "날씨상태")
	private String weatherMain;	/* 날씨상태 */
	@ApiModelProperty(value = "온도")
	private String weatherTemp;	/* 온도 */
	@ApiModelProperty(value = "날싸아이디")
	private String weatherId;	/* 날싸아이디 */
	@ApiModelProperty(value = "날씨아이콘")
	private String weatherIcon;	/* 날씨아이콘 */

	@ApiModelProperty(value = "사이트ID 리스트")
	private String[] siteIds;		/* 사이트ID 리스트 */

	@ApiModelProperty(value = "site 설비상태")
	private String eqmtStatus;	/* site 설비상태 */
	@ApiModelProperty(value = "pv 운전상태")
	private String pvOperationStatus;	/* pv 운전상태 */
	@ApiModelProperty(value = "pv 발전량")
	private String generation;	/* pv 발전량 */
	@ApiModelProperty(value = "ess 운전상태 ")
	private String essOperationStatus;	/* ess 운전상태  */
	@ApiModelProperty(value = "ess 거래가능량 ")
	private String tradingVolume;	/* ess 거래가능량 */
	@ApiModelProperty(value = "미해제건수")
	private String unrReleCnt;	/* 미해제건수 */
	@ApiModelProperty(value = "특별점검 Work Order 발행 여부")
	private String workOrderPushYn;	/* 특별점검 Work Order 발행 여부 */
	@ApiModelProperty(value = "데이터 최종수신일")
	private String dataLastDate;	/* 데이터 최종수신일 */
	@ApiModelProperty(value = "PR(목표대비)")
	private String prVsGoal;	/* PR(목표대비) */
	@ApiModelProperty(value = "PPA거래량(목표대비) ")
	private String ppaVsGoal;	/* PPA거래량(목표대비) */
	@ApiModelProperty(value = " 목표발전량(목표대비)")
	private String goalGenrCapaVsGoal;	/* 목표발전량(목표대비) */
	@ApiModelProperty(value = "Energy Yield(목표량)")
	private String goalEnergyYield ;				    /*Energy Yield(AC 기준 발전량(kWh))*/
	@ApiModelProperty(value = "IVT Efficiency(목표대비)")
	private String goalIvt ;				    /*IVT Efficiency(목표대비)*/

	@ApiModelProperty(value = "사용자")
	private String user;		/* 사용자 */


	@ApiModelProperty(value = "O&M담당자사용자번호")
	private String workOrdUserSeq;		/* O&M담당자사용자번호 */

	@ApiModelProperty(value = "O&M담당자사용자")
	private String workOrdUserName;		/* O&M담당자사용자 */

	@ApiModelProperty(value = "모듈용량")
	private String modlCapa;            /* 모듈용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */

	@ApiModelProperty(value = "time zone")
	private String timeZone ;				/*발전소 timeZone*/
	@ApiModelProperty(value = "kpi search date")
	private String dayDate ;				/*발전소 history data 가져올 날짜(지정시간)*/
	@ApiModelProperty(value = "kpi search date")
	private String searchDate ;				/*발전소 history data 가져올 날짜(일별)*/
	@ApiModelProperty(value = "kpi month date")
	private String monthDate ;				/*발전소 history data 가져올 날짜(월별)*/
	@ApiModelProperty(value = "Production(kWh)")
	private String production ;				/*발젼량(Ac)*/
	@ApiModelProperty(value = "Energy Yield(AC 기준 발전량(kWh))")
	private String energyYield ;				    /*Energy Yield(AC 기준 발전량(kWh))*/
	@ApiModelProperty(value = "IVT Efficiency()")
	private String ivtEfficiency ;						/*IVT Efficiency(DC)*/
	@ApiModelProperty(value = "Consumption meter")
	private String consumption ;					/*Consumption meter */

	@ApiModelProperty(value = "포인트 addr 리스트")
	private String[] pntAddrs;		/* 포인트 addr 리스트 */

	@ApiModelProperty(value = "페이지번호")
	private Integer page;		/* 페이지 번호 */
	@ApiModelProperty(value = "시작 rownum")
	private Integer pageStart;		/* 시작 rownum */
	@ApiModelProperty(value = "1페이지당 노출할 갯수")
	private Integer pagePer;		/* 1페이지당 노출할 갯수 */
}


