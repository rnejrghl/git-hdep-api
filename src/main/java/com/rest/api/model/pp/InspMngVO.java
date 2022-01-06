package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class InspMngVO {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "inspection 담당자번호")
	private String inspUserSeq;		/* inspection 담당자번호 */
	@ApiModelProperty(value = "inspection 담당자ID")
	private String inspUserId;		/* inspection 담당자ID */
	@ApiModelProperty(value = "inspection 담당자명")
	private String inspUserName;	/* inspection 담당자명 */
	@ApiModelProperty(value = "inspection 이메일")
	private String inspEmail;		/* inspection 이메일 */
	@ApiModelProperty(value = "점검합격여부")
	private String chkPassYn;		/* 점검합격여부*/
	@ApiModelProperty(value = "점검완료일")
	private String chkCmplDt;		/* 점검완료일*/
	@ApiModelProperty(value = "점검불합격사유")
	private String chkFailRsn; 		/* 점검불합격사유*/
	@ApiModelProperty(value = "점검이력")
	private String chkHist;			/* 점검이력 (점검합격여부가 N인 경우 점검불합격사유를 저장할때마다 ADD)*/
	@ApiModelProperty(value = "inspection 특이사항")
	private String inspNote; 		/* inspection 특이사항 */
	@ApiModelProperty(value = "운영 담당자 번호")
	private String mngUserSeq;		/* 운영 담당자 번호 */
	@ApiModelProperty(value = "운영 담당자ID")
	private String mngUserId;		/* 운영 담당자ID */
	@ApiModelProperty(value = "운영 담당자명")
	private String mngUserName;		/* 운영 담당자명 */
	@ApiModelProperty(value = "이메일")
	private String mngEmail;		/* 이메일 */
	@ApiModelProperty(value = "운영시작일")
	private String mngStrtDt;		/* 운영시작일 */
	@ApiModelProperty(value = "운영 특이사항")
	private String mngNote;  		/* 운영 특이사항 */
	
	@ApiModelProperty(value = "psId(plant_key =>해당 사이트 ps_id)")
	private String psId;  		/* psId(plant_key =>해당 사이트 ps_id)*/
	
	
}
