package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class MobilePlanVo {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;			/* 사용자번호 */
	@ApiModelProperty(value = "모듈제조사구분")
	private String modlMnftGubn; 	/* 모듈제조사구분 (코드ID : CDK-00006)*/
	@ApiModelProperty(value = "모듈용량")
	private String modlCapa; 		/* 모듈용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "인버터제조사구분")
	private String invtMnftGubn; 	/* 인버터제조사구분 (코드ID : CDK-00007) */
	@ApiModelProperty(value = "인버터용량")
	private String invtCapa; 		/* 인버터용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "배터리제조사구분")
	private String btryMnftGubn; 	/* 배터리제조사구분 (코드ID : CDK-00008) */
	@ApiModelProperty(value = "배터리용량")
	private String btryCapa; 		/* 배터리용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "통신장비제조사구분")
	private String comuEqmtGubn; 	/* 통신장비제조사구분 (코드ID : CDK-00014) */
	@ApiModelProperty(value = "통신방식구분")
	private String comuMthdGubn; 	/* 통신방식구분 (코드ID : CDK-00015) */
	@ApiModelProperty(value = "신청예정일")
	private String applDudt; 		/* 신청예정일 */
	@ApiModelProperty(value = "승인예정일")
	private String apprDudt; 		/* 승인예정일 */
	@ApiModelProperty(value = "자재구매예정일")
	private String mpDudt;			/* 자재구매예정일 */
	@ApiModelProperty(value = "설치예정일")
	private String insDudt; 		/* 설치예정일 */
	@ApiModelProperty(value = "계획수립 특이사항 ")
	private String planNote; 		/* 계획수립 특이사항 */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;	 	/* 최종작업자번호 */
}
