package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;
import org.springframework.web.multipart.MultipartFile;

import java.util.List;


@Data
public class InspMngUpdate {

	@ApiModelProperty(required = true, value = "사이트ID")
	private String siteId; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
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
	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;	/* 최종작업자번호 */
	
	@ApiModelProperty(value = "해당사이트 userName")
	private String userName;	/* 해당사이트 userName */
	
	@ApiModelProperty(value = "해당사이트 ps_id")
	private String psId;	/* 해당사이트 ps_id */


	@ApiModelProperty(value = "운영첨부파일ID")
	private String[] fileIdCd7;

}
