package com.rest.api.model.st;

import io.swagger.annotations.ApiModelProperty;
import lombok.AllArgsConstructor;
import lombok.NoArgsConstructor;
import lombok.Data;

@AllArgsConstructor
@NoArgsConstructor
@Data
public class GenGraphVO {
    @ApiModelProperty(value = "사이트ID")
    private String siteId; /* 사이트ID */
    @ApiModelProperty(value = "조회시작년월")
    private String startDt; /* 조회시작년월 */
    @ApiModelProperty(value = "조회종료년월")
    private String endDt; /* 조회종료년월 */
    @ApiModelProperty(value = "검색구분")
    private String type; /* 검색구분 */
}
