package com.rest.api.model.mo;


import io.swagger.annotations.ApiModelProperty;
import io.swagger.annotations.ApiParam;
import lombok.Data;
import org.springframework.web.bind.annotation.RequestParam;


@Data
public class AlarmVO {
	@ApiModelProperty(value = "발행시작일자")
	private String publStatDt;	/* 발행시작일자 */
	@ApiModelProperty(value = "발행종료일자")
	private String publEndDt;		/* 발행종료일자 */
	@ApiModelProperty(value = "O&M담당자")
	private String workOrdUserName;	/* O&M담당자 */
	@ApiModelProperty(value = "작업지시형태 (GRP_CD : CDK-00009 (고장/통신장애/특별점검 등))")
	private String workOrdTyp;	/* 작업지시형태 (GRP_CD : CDK-00009 (고장/통신장애/특별점검 등)) */
	@ApiModelProperty(value = "작업지시상태 (GRP_CD : CDK-00010)")
	private String workOrdStat;	/* 작업지시상태 (GRP_CD : CDK-00010) */
	@ApiModelProperty(value = "결과등록여부")
	private String rsltRegYn;	/* 결과등록여부 */
	@ApiModelProperty(value = "사이트ID")
	private String siteId;	/* 사이트ID */

}
