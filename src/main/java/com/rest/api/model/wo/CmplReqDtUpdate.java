package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

import java.util.List;


@Data
public class CmplReqDtUpdate {
	@ApiModelProperty(value = "완료요청일")
	private String cmplReqDt;       /* 완료요청일 */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;       /* 최종작업자번호 */

	private List<MthWkodUpdate>  mthWkodListUpdate;



}
