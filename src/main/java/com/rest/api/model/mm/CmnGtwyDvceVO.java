package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnGtwyDvceVO {
	@ApiModelProperty(value = "사이트ID")
	private String siteId;

	@ApiModelProperty(value = "사용자ID")
	private String userId;
	@ApiModelProperty(value = "최종작업자번호")
	private String userSeq;				/* 최종작업자번호 */
	@ApiModelProperty(value = "게이트웨이ID")
	private String gtwyId; 				/* 게이트웨이ID */
	@ApiModelProperty(value = "게이트웨이명")
	private String gtwyName; 			/* 게이트웨이명 */
	@ApiModelProperty(value = "디바이스ID")
	private String dvceId; 				/* 디바이스ID */

	@ApiModelProperty(value = "설비구분코드")
	private String eqmtGubnCd;			/* 설비구분코드 (인버터/PCS/배터리) */
	@ApiModelProperty(value = "포인트주소")
	private String pntAddr;				/* 포인트주소 */
	@ApiModelProperty(value = "포인트주소명")
	private String pntAddrName;			/* 포인트주소명 */
	@ApiModelProperty(value = "포인트주소설명")
	private String pntAddrDesc; 		/* 포인트주소설명 */
	@ApiModelProperty(value = "데이터형식")
	private String dataTyp;				/* 데이터형식 */
	@ApiModelProperty(value = "아이템구분")
	private String itemGubn;			/* 아이템구분 */
	@ApiModelProperty(value = "스케일팩터")
	private String scleFctr;			/* 스케일팩터 (NUMBER만 넣나?) */
	@ApiModelProperty(value = "단위코드")
	private String unitCd;				/* 단위코드 (GRP_CD : CDK-00018) */
	@ApiModelProperty(value = "시스템태그")
	private String sysTag;				/* 시스템태그 */
	@ApiModelProperty(value = "계산식 갯수")
	private String CNT;					/* 계산식 갯수 */
	@ApiModelProperty(value = "데이터기록여부")
	private String dataRcrdYn; 			/* 데이터기록여부 */
	@ApiModelProperty(value = "주소1")
	private String addr1; 				/* 주소1 */
	@ApiModelProperty(value = "주소2")
	private String addr2; 				/* 주소2 */
	@ApiModelProperty(value = "수신값")
	private String recvVal; 			/* 수신값*/
	@ApiModelProperty(value = "수신시각")
	private String recvDtti;			/* 수신시각 */
}