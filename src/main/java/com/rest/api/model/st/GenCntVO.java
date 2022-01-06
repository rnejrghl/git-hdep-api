package com.rest.api.model.st;

import io.swagger.annotations.ApiModelProperty;
import lombok.AllArgsConstructor;
import lombok.NoArgsConstructor;
import lombok.Data;

@AllArgsConstructor
@NoArgsConstructor
@Data
public class GenCntVO {
    @ApiModelProperty(value = "전체 COUNT")
    private Integer totalCnt; /* 총 조회건수 */
    @ApiModelProperty(value = "페이지")
    private Integer page; /* 시작 페이지 */
}