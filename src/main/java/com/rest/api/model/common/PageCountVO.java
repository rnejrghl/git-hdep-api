package com.rest.api.model.common;

import io.swagger.annotations.ApiModelProperty;
import lombok.AllArgsConstructor;
import lombok.NoArgsConstructor;
import lombok.Data;

@AllArgsConstructor
@NoArgsConstructor
@Data
public class PageCountVO {
    @ApiModelProperty(value = "전체 COUNT")
    private Integer totalCnt; /* 총 조회건수 */
    @ApiModelProperty(value = "페이지 번호")
    private Integer page; /* 페이지 번호 */
    @ApiModelProperty(value = "시작 rownum")
    private Integer pageStart; /* 시작 rownum */
    @ApiModelProperty(value = "1페이지당 노출할 갯수")
    private Integer pagePer; /* 1페이지당 노출할 갯수 */
    
    @ApiModelProperty(value = "사이트ID")
    private String siteId; /* 사이트ID */
    
    
}
