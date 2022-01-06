package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class MthWkodHdtlWt0003Insert {
	@ApiModelProperty(value = "작업사항")
	private String jobItem; 	/* 작업사항 */
	@ApiModelProperty(value = "점검항목")
	private String chkItem;		/* 점검항목 */
	@ApiModelProperty(value = "점검내용")
	private String chkCntn; 	/* 점검내용 */
	@ApiModelProperty(value = "상태구분 (01: 양호/02:불량/99:해당없음)")
	private String statGubn; 	/* 상태구분 (01: 양호/02:불량/99:해당없음) */
	@ApiModelProperty(value = "특이사항")
	private String note; 		/* 특이사항 */
}
