package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class CmnUserVO {
	@ApiModelProperty(value = "사용자ID")
	private String userId;
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;				/* 사용자번호 */
	@ApiModelProperty(value = "사용자명")
	private String userName;
	@ApiModelProperty(value = "비밀번호")
	private String pswd; 				/* 비밀번호 (암호화하여 저장) */
	@ApiModelProperty(value = "비밀번호오류횟수")
	private String pswdErrCnt; 			/* 비밀번호오류횟수 (5회까지 제한) */
	@ApiModelProperty(value = "전화번호")
	private String telNo; 				/* 전화번호 */
	@ApiModelProperty(value = "이메일")
	private String email; 				/* 이메일 */
	@ApiModelProperty(value = "사용여부")
	private String useYn; 				/* 사용여부 */
	@ApiModelProperty(value = "SMS알람여부")
	private String smsAlrmYn; 			/* SMS알람여부 (default:Y) */
	@ApiModelProperty(value = "Email알람여부")
	private String emailAlrmYn; 		/* Email알람여부 (default:Y) */
	@ApiModelProperty(value = "사용자등급코드")
	private String userLvlCd; 			/* 사용자등급코드 (코드ID : CDK-00017) */
	@ApiModelProperty(value = "메뉴권한ID")
	private String menuRoleId; 			/* 메뉴권한ID */
	@ApiModelProperty(value = "조회그룹ID")
	private String inqGrpId; 			/* 조회그룹ID */
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq; 		/* 최종작업자번호 */
	@ApiModelProperty(value = "사용자등급코드")
	private String[] userLvlCdList; 	/* 사용자등급코드*/
}
