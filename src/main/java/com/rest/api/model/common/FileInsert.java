package com.rest.api.model.common;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;
import lombok.NoArgsConstructor;

@Data
@NoArgsConstructor
public class FileInsert {

    @ApiModelProperty(value = "파일아이디")
    private String fileId;   /*   파일아이디 */
    @ApiModelProperty(value = "최종수정자")
    private String lastChngUseq;   /* 최종수정자 */
    @ApiModelProperty(value = "실제 파일명")
    private String realFileName;   /* 실제 파일명  */
    @ApiModelProperty(value = "실제 파일URL")
    private String filePath;   /* 실제 파일URL  */
}
