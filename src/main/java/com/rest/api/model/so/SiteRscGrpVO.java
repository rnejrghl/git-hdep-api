package com.rest.api.model.so;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class SiteRscGrpVO {
	@ApiModelProperty(value = "자원그룹ID")
	private String rscGrpId;	/* 자원그룹ID */
	@ApiModelProperty(value = "사이트ID")
	private String siteId;		/* 사이트ID */
	@ApiModelProperty(value = "사용자명")
	private String userName;	/* 사용자명 */
	@ApiModelProperty(value = "사용자번호")		/* 사용자번호 */
	private String userSeq;	/* 사용자번호 */
	@ApiModelProperty(value = "자원구분")
	private String rescGubn;	/* 자원구분 */
	@ApiModelProperty(value = "지역구분")
	private String regnGubn;	/* 지역구분 */
	@ApiModelProperty(value = "PV설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 ))")
	private String pvInstCapa;  /*PV설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "ESS설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 ))")
	private String essInstCapa; /*ESS설치용량 (기본단위 : kWp ( 코드ID : CDK-00018.TUN004 )) */
	@ApiModelProperty(value = "계약조회일자")
	private String cnrtDt;		/* 계약조회일자 */

	@ApiModelProperty(value = "계약시작일")
	private String cnrtStrtDt;		/* 계약시작일 */
	@ApiModelProperty(value = "계약종료일")
	private String cnrtEndDt;		/* 계약종료일 */

	@ApiModelProperty(value = "조회권한사이트ID")
	private String[] siteIds;

}
