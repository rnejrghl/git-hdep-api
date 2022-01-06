package com.rest.api.model.common;

import java.time.LocalDateTime;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class EssControlVO {
    @ApiModelProperty(value = "태스크 ID")
    private String taskId;
    @ApiModelProperty(value = "태스크 위치")
    private String taskFrom;

    @ApiModelProperty(value = "상태")
    private String status;
    @ApiModelProperty(value = "파워")
    private String power;
    @ApiModelProperty(value = "SOC 상한")
    private String lmtUSoc;
    @ApiModelProperty(value = "SOC 하한")
    private String lmtLSoc;
    @ApiModelProperty(value = "목표치")
    private String goal;
    @ApiModelProperty(value = "예상시간")
    private String calTime;

    @ApiModelProperty(value = "정지플래그")
    private String isStop;

    @ApiModelProperty(value = "시간")
    private String timeStamp;
    @ApiModelProperty(value = "사용자번호")
    private String userSeq;
    @ApiModelProperty(value = "사용자이름")
    private String userName;
    @ApiModelProperty(value = "테스트")
    private String test;
    
    @ApiModelProperty(value = "사이트ID")
    private String siteId; /* 사이트ID */
    @ApiModelProperty(value = "사이트uuId")
    private String uuid; /* 사이트uuId */ 
    @ApiModelProperty(value = "facId")
    private String facId; /* facId */
        
}
