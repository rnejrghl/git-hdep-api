package com.rest.api.model.mm;


import io.swagger.annotations.ApiModelProperty;
import lombok.Data;

import java.util.List;


@Data
public class CmnMenuVO {
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
	@ApiModelProperty(value = "url")
	private String url; 			/* url */
	@ApiModelProperty(value = "정렬기준")
	private String inqOrd; 			/* 정렬기준 */
	@ApiModelProperty(value = "메뉴뎁스")
	private String level;	        /* 메뉴뎁스 */
	@ApiModelProperty(value = "부모ID */")
	private String uperMenuId;	    /* 부모ID */
	@ApiModelProperty(value = "sub_Deph리스트")
	private List<CmnMenuVO> subDeph;
	@ApiModelProperty(value = "메뉴명힌국어")
	private String menuKoName; 		/* 메뉴명힌국어 */
	@ApiModelProperty(value = "메뉴명영어")
	private String menuEnName; 		/* 메뉴명영어 */
	@ApiModelProperty(value = "메뉴명일어")
	private String menuJpName; 		/* 메뉴명일어 */
}

