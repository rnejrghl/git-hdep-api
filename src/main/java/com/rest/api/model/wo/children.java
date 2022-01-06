package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class children {

	@ApiModelProperty(value = "상위코드")
	private String upprCd;			/* 상위코드 */
	@ApiModelProperty(value = "매핑코드")
	private String jobItem; 		/* 매핑코 */

	@ApiModelProperty(value = "점검항목")
	private String nameKo;		/* 점검항목 */
	@ApiModelProperty(value = "점검항목 영문")
	private String nameEn;		/* 점검항목 영문 */
	@ApiModelProperty(value = "점검내용")
	private String contentKo;		/* 점검내용 */
	@ApiModelProperty(value = "점검내용 영문")
	private String contentEn;		/* 점검내용 영 */
	@ApiModelProperty(value = "체크순서")
	private String chkSeq;		/* 체크순서 */
	@ApiModelProperty(value = "완료여부")
	private String statGubn;		/* 완료여부 */
	@ApiModelProperty(value = "특이사항")
	private String note;		/* 특이사항 */


}
