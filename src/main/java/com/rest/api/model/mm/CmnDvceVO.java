package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnDvceVO {
	@ApiModelProperty(value = "디바이스ID")
	private String dvceId;			/* 디바이스ID */
	@ApiModelProperty(value = "설비구분코드")
	private String eqmtGubnCd;		/* 설비구분코드 (인버터/PCS/배터리) */
	@ApiModelProperty(value = "설비상품코드")
	private String eqmtPrdtCd;		/* 설비상품코드 */
	@ApiModelProperty(value = "포인트주소")
	private String pntAddr;			/* 포인트주소 */
	@ApiModelProperty(value = "포인트주소명")
	private String pntAddrName;		/* 포인트주소명 */
	@ApiModelProperty(value = "포인트주소설명")
	private String pntAddrDesc; 	/* 포인트주소설명 */
	@ApiModelProperty(value = "데이터형식")
	private String dataTyp;			/* 데이터형식 */
	@ApiModelProperty(value = "아이템구분")
	private String itemGubn;		/* 아이템구분 */
	@ApiModelProperty(value = "스케일팩터")
	private String scleFctr;		/* 스케일팩터 (NUMBER만 넣나?) */
	@ApiModelProperty(value = "단위코드")
	private String unitCd;			/* 단위코드 (GRP_CD : CDK-00018) */
	@ApiModelProperty(value = "시스템태그")
	private String sysTag;			/* 시스템태그 */
	@ApiModelProperty(value = "원본디바이스ID")
	private String orgDvceId;		/* 원본디바이스ID */
	@ApiModelProperty(value = "건수")
	private String cnt;				/* 건수 */
	@ApiModelProperty(value = "자원구분")
	private String rescGubn;		/* 자원구분 */
}