package com.rest.api.model.common;

import io.swagger.annotations.ApiModelProperty;
import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.Setter;

public class SearchSite {
    @Getter
    @AllArgsConstructor
    public static class Res {
        @ApiModelProperty(value = "사이트ID")
        private String siteId; /* 사이트ID */
        @ApiModelProperty(value = "사이트명")
        private String userName; /* 사용자명 */
    }

    @Getter
    @AllArgsConstructor
    public static class SearchDTO {
        private String userSeq; /* 사용자번호 */
        private String[] siteIds; /* 사이트ID 리스트 */
        private String q; /* 검색쿼리 */

    }

}
