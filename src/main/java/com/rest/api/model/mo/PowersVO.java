package com.rest.api.model.mo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class PowersVO {
	@ApiModelProperty(value = "사이트ID")
	private String siteId ;			/* 사이트ID */
	@ApiModelProperty(value = "time zone")
	private String timeZone ;				/*발전소 timeZone*/
	@ApiModelProperty(value = "지정날짜 검색")
	private String searchDate ;				/*지정날짜 검색*/
	@ApiModelProperty(value = "기간 시작")
	private String startDate ;				/*기간 시작*/
	@ApiModelProperty(value = "기간 종료일")
	private String endDate ;				/*기간 종료일*/
	@ApiModelProperty(value = "데이터 datetime")
	private String date ;				/*데이터 datetime*/
	@ApiModelProperty(value = "발전량")
	private String amount ;				/*발전량*/
	@ApiModelProperty(value = "포인트 주소")
	private String pntAddr ;				/*포인트 주소*/
	@ApiModelProperty(value = "디바이스 ID")
	private String dvceId ;				/*디바이스 ID*/

	@ApiModelProperty(value = "PV Power")
	private String pvPower ;				/*PV Power*/
	@ApiModelProperty(value = "output power")
	private String opPower ;				/*output power*/
	@ApiModelProperty(value = "Load Power")
	private String loadPower ;				/*Load power*/

}


