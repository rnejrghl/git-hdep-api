package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class MobileContractVo {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;			/* 사용자번호 */
	@ApiModelProperty(value = "사용자ID")
	private String userId;			/* 사용자ID */
	@ApiModelProperty(value = "사용자명")
	private String userName; 		/* 사용자명 */
	@ApiModelProperty(value = "메일")
	private String email; 			/* 메일 */
	@ApiModelProperty(value = "전화번호")
	private String telNo; 			/* 전화번호 */
	@ApiModelProperty(value = "주소")
	private String addr; 			/* 주소 */
	@ApiModelProperty(value = "지역구분")
	private String regnGubn; 		/* 지역구분*/
	@ApiModelProperty(value = "통화단위")
	private String currUnit; 		/* 통화단위 (코드ID : CDK-00013, 보통 3자리로 쓰는데 여기는 2자리로 쓰는 듯.) */
	@ApiModelProperty(value = "계약시작일")
	private String cnrtStrtDt; 		/* 계약시작일*/
	@ApiModelProperty(value = "계약종료일")
	private String cnrtEndDt; 		/* 계약종료일*/
	@ApiModelProperty(value = "PPA단가")
	private String ppaUnitPrce; 	/* PPA단가 */
	@ApiModelProperty(value = "자원구분")
	private String rescGubn;  		/* 자원구분 (코드ID : CDK-00011( A:PV/B:PV+ESS )) */
	@ApiModelProperty(value = "설치담당자ID")
	private String instPsnId;		/* 설치담당자ID */
	@ApiModelProperty(value = "설치담당자번호")
	private String instPsnSeq;		/* 설치담당자번호 */
	@ApiModelProperty(value = "설치담당자명")
	private String instPsnName;		/* 설치담당자명 */
	@ApiModelProperty(value = "위도")
	private String latd;
	@ApiModelProperty(value = "경도")
	private String lgtd;
}
