package com.rest.api.model.db;

import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

@Data
public class RegnSiteVO {
	@ApiModelProperty(value = "지역구분 (CDK-00005)")
	private String regnGubn; /* 지역구분 (CDK-00005) */
	@ApiModelProperty(value = "위도")
	private String latd; /* 위도 */
	@ApiModelProperty(value = "경도")
	private String lgtd; /* 경도 */
	@ApiModelProperty(value = "지역명")
	private String regnName; /* 지역명 */
	@ApiModelProperty(value = "사이트ID")
	private String SiteId; /* 사이트ID */
	@ApiModelProperty(value = "site 설비상태")
	private String eqmtStatus; /* site 설비상태 */
	@ApiModelProperty(value = "주소")
	private String addr; /* 주소 */
	@ApiModelProperty(value = "사용자")
	private String userName; /* 사용자 */
	@ApiModelProperty(value = "O&M담당자사용자번호")
	private String workOrdUserSeq; /* O&M담당자사용자번호 */

}
