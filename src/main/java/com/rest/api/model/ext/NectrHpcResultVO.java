package com.rest.api.model.ext;


import io.swagger.annotations.ApiModelProperty;
import io.swagger.annotations.ApiParam;
import lombok.Data;


import com.fasterxml.jackson.annotation.JsonPropertyOrder;


@Data
public class NectrHpcResultVO {

	@ApiModelProperty(value = "이력 번호")
	private String histId;
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;

	@ApiModelProperty(value = "outDate")
	private String outDate;	/*outDate */
	@ApiModelProperty(value = "amount")
	private String amount;	/*amount */
	

}
