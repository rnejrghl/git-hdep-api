package com.rest.api.model.wo;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;


@Data
public class WorkOrderPrjSiteVO {

	@ApiModelProperty(value = "사이트ID")
	private String siteId; 			/* 사이트ID (국가코드(2)+City코드(5)+년도(4)+월(2)+일련번호(5)) */
	@ApiModelProperty(value = "사용자번호")
	private String userSeq;			/* 사용자번호 */
	@ApiModelProperty(value = "사용자명")
	private String userName; 		/* 사용자명 */

	@ApiModelProperty(value = "설치담당자번호")
	private String instPsnSeq;		/* 설치담당자번호 */
	@ApiModelProperty(value = "설치담당자명")
	private String instPsnName;		/* 설치담당자명 */
	@ApiModelProperty(value = "설치담당자전화번호")
	private String instPsnTelNo;		/* 설치담당자전화번호 */
	@ApiModelProperty(value = "자원구분")
	private String rescGubn;		/* 자원구분 */

	@ApiModelProperty(value = "사이트ID 리스트")
	private String[] siteIds;		/* 사이트ID 리스트 */

}
