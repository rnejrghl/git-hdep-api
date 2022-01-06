package com.rest.api.model.mo;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class FailAlarmVo {
    @ApiModelProperty(value = "사이트 id")
    private String siteId ;			/* 사이트ID */
    @ApiModelProperty(value = "사이트 id")
    private String userName ;			/* 사이트ID */
    @ApiModelProperty(value = "사이트 id")
    private String userSeq ;			/* 사이트ID */
    @ApiModelProperty(value = "회원연락처")
    private String userPhone; 				/* 회원연락처 */
    @ApiModelProperty(value = "이메일")
    private String userEmail; 				/* 지역구분*/
    @ApiModelProperty(value = "주소")
    private String addr; 	    			/* 주소 */

    @ApiModelProperty(value = "발전소 실패 상태")
    private String status ;			/* 발전소 실패 상태 */
    @ApiModelProperty(value = "발전소 실패 구분")
    private String faultType ;			/* 발전소 실패 구분 */
    @ApiModelProperty(value = "알림발생시작일")
    private String notiStartDt ;	 /*알림발생시작일*/
    @ApiModelProperty(value = "알림발생종료일")
    private String notiEndDt ;	     /*알림발생종료일*/
    @ApiModelProperty(value = "알림해제시작일")
    private String unlockStartDt ;	 /*알림해제시작일*/
    @ApiModelProperty(value = "알림해제종료일")
    private String unlockEndDt ;	 /*알림해제종료일*/

    @ApiModelProperty(value = "알림발생일")
    private String notiDt ;	        /*알림발생일*/
    @ApiModelProperty(value = "알림해제일")
    private String unlockDt ;	    /*알림해제일*/
    @ApiModelProperty(value = "알림내용")
    private String contents ;	    /*알림내용*/

    @ApiModelProperty(value = "권한 사이트 리스트")
    private String[] siteIds ;	    /*권한 사이트 리스트*/

    @ApiModelProperty(value = "담당자사용자번호 (해당사이트의 O&M담당자사용자번호)")
    private String workOrdUserSeq; 		/* 담당자사용자번호 (해당사이트의 O&M담당자사용자번호) */
    @ApiModelProperty(value = "담당자사용자명")
    private String workOrdUserName;		/* 담당자사용자명 */

    @ApiModelProperty(value = "페이지번호")
    private Integer page;		/* 페이지 번호 */
    @ApiModelProperty(value = "시작 rownum")
    private Integer pageStart;		/* 시작 rownum */
    @ApiModelProperty(value = "1페이지당 노출할 갯수")
    private Integer pagePer;		/* 1페이지당 노출할 갯수 */
}

