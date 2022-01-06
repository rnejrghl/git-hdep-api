package com.rest.api.model.db;


import io.swagger.annotations.ApiModelProperty;
import io.swagger.annotations.ApiParam;
import lombok.Data;
import org.springframework.web.bind.annotation.RequestParam;


@Data
public class DbVO {
	@ApiModelProperty(value = "자원구분코드")
	private String rescGubn; 			/* 자원구분코드 */
	@ApiModelProperty(value = "지역구분코드")
	private String regnGubn; 			/* 지역구분코드 */
	@ApiModelProperty(value = "사이트ID")
	private String siteId; 				/* 사이트ID */
	@ApiModelProperty(value = "사이트 주소")
	private String addr; 				/* 사이트 주소 */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq; 			/* 사용자번호 */
	@ApiModelProperty(value = "사용자명")
	private String userName; 			/* 사용자명 */
	@ApiModelProperty(value = "PV설치용량")
	private String pvInstCapa;		/*PV설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 ))*/
	@ApiModelProperty(value = "ESS설치용량")
	private String essInstCapa;		/* ESS설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "모듈제조사구분")
	private String modlMnftGubn;	    /* 모듈제조사구분 (코드ID : CDK-00006) */
	@ApiModelProperty(value = "인버터제조사구분")
	private String invtMnftGubn;	    /* 인버터제조사구분 (코드ID : CDK-00007) */
	@ApiModelProperty(value = "배터리제조사구분")
	private String btryMnftGubn;	    /* 배터리제조사구분 (코드ID : CDK-00008) */
	@ApiModelProperty(value = "미처리워크오더건수")
	private String workOrderUcmplCnt;	/* 미처리워크오더건수 */

	@ApiModelProperty(value = "조회권한사이트")
	private String[]  sites;	/* 조회권한사이트 */

	@ApiModelProperty(value = "미해제건수")
	private String unrReleCnt;	/* 미해제건수 */

	@ApiModelProperty(value = "위도")
	private String latd;	/* 위 */

	@ApiModelProperty(value = "경도")
	private String lgtd;	/* 경도 */

}
