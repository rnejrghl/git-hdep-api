package com.rest.api.model.st;

import io.swagger.annotations.ApiModelProperty;
import lombok.AllArgsConstructor;
import lombok.NoArgsConstructor;
import lombok.Data;

@AllArgsConstructor
@NoArgsConstructor
@Data
public class GenGraphsVO {
    @ApiModelProperty(value = "사이트ID")
    private String siteId; /* 사이트ID */
    @ApiModelProperty(value = "사용자명")
    private String userName; /* 사용자명 */
    @ApiModelProperty(value = "자원구분")
    private String rescGubn; /* 자원구분 */
    @ApiModelProperty(value = "시간")
    private String nowDate; /* 시간 */
    @ApiModelProperty(value = "설치용량")
    private String instCapa; /* 설치용량 */
    @ApiModelProperty(value = "전년도")
    private String lastTotPwAmt; /* 전년도 */
    @ApiModelProperty(value = "목표")
    private String goalGenrCapa; /* 목표 */
    @ApiModelProperty(value = "실적")
    private String nowTotPwAmt; /* 실적 */
    @ApiModelProperty(value = "인버터효율")
    private String ivtEfficiency; /* 인버터효율 */
    @ApiModelProperty(value = "발전시간")
    private String energyYield; /* 발전시간 */
    @ApiModelProperty(value = "날씨")
    private String weather; /* 발전시간 */
    @ApiModelProperty(value = "온도")
    private String temperature; /* 발전시간 */
}
