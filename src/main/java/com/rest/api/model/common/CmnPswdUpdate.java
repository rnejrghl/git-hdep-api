package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnPswdUpdate {
	@ApiModelProperty(value = "사용자SEQ")
	private String userSeq;
	@ApiModelProperty(value = "기본비밀번호")
	private String pswd;
	@ApiModelProperty(value = "신규비밀번호")
	private String newPswd;
	@ApiModelProperty(value = "사용자ID")
	private String userId;

}
