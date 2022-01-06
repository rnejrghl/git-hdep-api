package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnUserUpdate {

    @ApiModelProperty(value = "사용자명")
    private String userName;
    @ApiModelProperty(value = "비밀번호")
    private String pswd;
    @ApiModelProperty(value = "사용자ID")
    private String userId;
    @ApiModelProperty(value = "사용자번호")
    private String userSeq;
    @ApiModelProperty(value = "최종작업자번호")
    private String lastChngUseq;
    @ApiModelProperty(value = "전화번호")
    private String telNo;
    @ApiModelProperty(value = "이메일")
    private String email;
    @ApiModelProperty(value = "SMS알람여부 ")
    private String smsAlrmYn;
    @ApiModelProperty(value = "Email알람여부 ")
    private String emailAlrmYn;
    @ApiModelProperty(value = "사용자등급코드 ")
    private String userLvlCd;
    @ApiModelProperty(value = "메뉴권한ID")
    private String menuRoleId;
    @ApiModelProperty(value = "조회그룹ID")
    private String inqGrpId;
    @ApiModelProperty(value = "사용여부")
    private String useYn;
    @ApiModelProperty(value = "신규비밀번호")
    private String newPswd;



}
