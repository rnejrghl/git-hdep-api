package com.rest.api.model.pp;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;
import org.springframework.web.multipart.MultipartFile;

import java.util.List;


@Data
public class SiteGridUpdate {

	@ApiModelProperty(required = true, value = "사이트ID")
	private String siteId;			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "그리드신청 승인회사")
	private String applAprvCmp;		/* 그리드신청 승인회사 (코드ID : CDK-00016 ( 이게 맞는지는 잘 모르겠음 )) */
	@ApiModelProperty(value = "그리드신청 신청예정일")
	private String applWorkDudt; 	/* 그리드신청 신청예정일 */
	@ApiModelProperty(value = "그리드신청 신청완료일")
	private String applWorkCmdt; 	/* 그리드신청 신청완료일 */
	@ApiModelProperty(value = "그리드신청 특이사항")
	private String applNote; 		/* 그리드신청 특이사항 */

	@ApiModelProperty(value = "그리드승인 승인회사")
	private String apprAprvCmp;		/* 그리드승인 승인회사 (코드ID : CDK-00016 ( 이게 맞는지는 잘 모르겠음 )) */
	@ApiModelProperty(value = "그리드승인 승인예정일")
	private String apprWorkDudt; 	/* 그리드승인 승인예정일 */
	@ApiModelProperty(value = "그리드승인 승인완료일")
	private String apprWorkCmdt; 	/* 그리드승인 승인완료일 */
	@ApiModelProperty(value = "그리드승인 그리드승인여부")
	private String apprAprvYn; 		/* 그리드승인 그리드승인여부 */
	@ApiModelProperty(value = "그리드승인 불합격여부")
	private String apprFailRsn;		/* 그리드승인 불합격여부 */
	@ApiModelProperty(value = "그리드승인 특이사항")
	private String apprNote; 		/* 그리드승인 특이사항 */

	@ApiModelProperty(value = "그리드자재구매예정일")
	private String mpWorkDudt; 		/* 그리드자재구매예정일 */
	@ApiModelProperty(value = "그리드자재구매완료일")
	private String mpWorkCmdt; 		/* 그리드자재구매완료일 */
	@ApiModelProperty(value = "그리드자재구매 특이사항")
	private String mpNote; 			/* 그리드자재구매 특이사항 */

	@ApiModelProperty(value = "그리드 설치 예정일")
	private String insWorkDudt; 	/* 그리드 설치 예정일 */
	@ApiModelProperty(value = "그리드 설치 완료일")
	private String insWorkCmdt; 	/* 그리드 설치 완료일 */
	@ApiModelProperty(value = "그리드설치 특이사항")
	private String insNote; 		/* 그리드설치 특이사항 */

	@ApiModelProperty(value = "최종작업자번호")
	private String lastChngUseq;	/* 최종작업자번호 */
	
	@ApiModelProperty(value = "해당사이트 userName")
	private String userName;	/* 해당사이트 userName */


	@ApiModelProperty(value = "Grid신청첨부파일ID")
	private String[] fileIdCd3;
	@ApiModelProperty(value = "Grid승인첨부계획파일ID")
	private String[] fileIdCd4;
	@ApiModelProperty(value = "자재구매첨부파일ID")
	private String[] fileIdCd5;
	@ApiModelProperty(value = "설치첨부파일ID")
	private String[] fileIdCd6;


}