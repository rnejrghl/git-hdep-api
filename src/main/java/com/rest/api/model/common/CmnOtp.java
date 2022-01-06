package com.rest.api.model.common;

import java.time.LocalDate;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

// 임시 검증 코드
@Data
public class CmnOtp {
  @ApiModelProperty(value = "OTP ID")
  private Integer otpId;

  @ApiModelProperty(value = "EMAIL/TEL")
  private String receiver;

  @ApiModelProperty(value = "검증코드")
  private String verificationCode;

  @ApiModelProperty(value = "사용자번호")
  private String userSeq;

  @ApiModelProperty(value = "reset Token UUID")
  private String resetToken;

  @ApiModelProperty(value = "AWS SNS 발송ID")
  private String msgId;

  @ApiModelProperty(value = "사용여부")
  private String useYn;

  @ApiModelProperty(value = "생성일")
  private LocalDate timeStamp;

  @ApiModelProperty(value = "최종작업일시")
  private LocalDate lastChngDtti;
}
