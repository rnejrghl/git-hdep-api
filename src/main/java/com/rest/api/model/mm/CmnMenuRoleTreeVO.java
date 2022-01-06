package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

import java.util.List;


@Data
public class CmnMenuRoleTreeVO {
	@ApiModelProperty(value = "메뉴권한id")
	private String menuRoleId;      /* 메뉴권한id */
	@ApiModelProperty(value = "메뉴id")
	private String menuId;          /* 메뉴id */
	@ApiModelProperty(value = "활성화여부")
	private String useYn;			/* 활성화여부 */
	@ApiModelProperty(value = "조회여부")
	private String inqYn;           /* 조회여부 */
	@ApiModelProperty(value = "등록여부")
	private String regYn; 		    /* 등록여부 */
	@ApiModelProperty(value = "수정여부")
	private String modYn; 			/* 수정여부 */
	@ApiModelProperty(value = "삭제여부")
	private String delYn; 			/* 삭제여부 */
	@ApiModelProperty(value = "정렬기준")
	private String level; 			/* 정렬기준 */
	@ApiModelProperty(value = "메뉴명ko")
	private String menuKoName; 		/* 메뉴명ko */
	@ApiModelProperty(value = "메뉴명en")
	private String menuEnName; 		/* 메뉴명en */
	@ApiModelProperty(value = "메뉴명jp")
	private String menuJpName; 		/* 메뉴명jp */
	@ApiModelProperty(value = "메뉴뎁스")
	private String menuChk;	        /* 메뉴뎁스 */
	@ApiModelProperty(value = "부모ID")
	private String uperMenuId;	    /* 부모ID */
	@ApiModelProperty(value = "sub_Deph리스트")
	private List<CmnMenuRoleTreeVO> subDeph;
}

