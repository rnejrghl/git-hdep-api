package com.rest.api.model.mo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class OperationsCntVO {
	@ApiModelProperty(value = "Work Order 미처리 총 건수")
	private String workOrderTotCnt;	/* Work Order 미처리 총 건수 */


	@ApiModelProperty(value = "금일 발전량")
	private String todayGnrt;	/* 금일 발전량 */
	@ApiModelProperty(value = "금일 발전량 (목표대비)")
	private String todayGnrtVsGoal;	/* 금일 발전량 (목표대비) */
	@ApiModelProperty(value = "금일 energy yield")
	private String todayEnergy;	/* energy yield */
	@ApiModelProperty(value = "금일 energy yield 목표")
	private String todayEnergyVsGoal;	/* 금일 energy yield 목표*/
	@ApiModelProperty(value = "금일 PPA거래량")
	private String todayPpa;	/* 금일 PPA거래량 */
	@ApiModelProperty(value = "금일 PPA거래량(목표대비)")
	private String todayPpaVsGoal;	/* 금일 PPA거래량(목표대비  */
	@ApiModelProperty(value = "금월 발전량")
	private String monthGnrt;	/* 금월 발전량 */
	@ApiModelProperty(value = "금월 발전량(목표대비)")
	private String monthGnrtVsGoal;	/* 금월 발전량(목표대비)  */
	@ApiModelProperty(value = "금월 PPA거래량")
	private String monthPpa;	/* 금월 PPA거래량 */
	@ApiModelProperty(value = "금일 energy yield")
	private String monthEnergy;	/* energy yield */
	@ApiModelProperty(value = "금일 energy yield 목표")
	private String monthEnergyVsGoal;	/* 금일 energy yield 목표*/
	@ApiModelProperty(value = "금월 PPA거래량(목표대비)")
	private String monthPpaVsGoal;	/* 금월 PPA거래량(목표대비) */
	@ApiModelProperty(value = "미해제 알람 건수")
	private String unrReleCnt;	/* 미해제 알람 건수 */

	@ApiModelProperty(value = "전체 모듈설치용량")
	private String totalModlCapa;	/* 미해제 알람 건수 */

	@ApiModelProperty(value = "전체 COUNT")
	private Integer totalCnt;			/* 종료COUNT */
	@ApiModelProperty(value = "페이지")
	private Integer page;			/* 종료COUNT */
	@ApiModelProperty(value = "총 페이지")
	private Integer totalPage;			/* 종료COUNT */
}

