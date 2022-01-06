package com.rest.api.model.mm;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class CmnNotiDelete {

    @ApiModelProperty(value = "공지ID")
    private String notiId;

}
