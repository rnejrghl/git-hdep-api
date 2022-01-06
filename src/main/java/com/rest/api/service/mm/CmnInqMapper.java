package com.rest.api.service.mm;


import com.rest.api.model.mm.*;
import org.apache.ibatis.annotations.Mapper;

import java.util.List;


@Mapper
public interface CmnInqMapper {
    List<CmnInqRoleVO> inqRoleList() throws Exception;
    List<CmnInqRoleVO> inrlSiteList(CmnInqRoleVO cmnInqRoleVO) throws Exception;
    List<CmnInqRoleVO> prjSiteList(CmnInqRoleVO cmnInqRoleVO) throws Exception;
    int inqRoleInsert(CmnInqRoleInsert cmnInqRoleInsert) throws Exception;
    int inrlSiteDelete(CmnInqRoleVO cmnInqRoleVO) throws Exception;
    int inrlSiteInsert(CmnInrlSiteInsert cmnInrlSiteInsert) throws Exception;
    int siteDelinrlSiteDelete(CmnInqRoleVO cmnInqRoleVO) throws Exception;


    String inqGrpYn(String inqGrpId) throws Exception;
    int inqRoleDelete(String inqGrpId) throws Exception;
    int inqGrpRoleDelete(String inqGrpId) throws Exception;
}
