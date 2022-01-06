package com.rest.api.service.so;


import com.rest.api.model.so.*;
import com.rest.api.model.wo.*;
import org.apache.ibatis.annotations.Mapper;

import java.util.List;


@Mapper
public interface RscGrpMapper {
    List<RscGrpVO> rscGrps(RscGrpVO rscGrpVO) throws Exception;
    List<RscGrpVO> rscGrpsExcel(RscGrpVO rscGrpVO) throws Exception;
    List<SiteRscGrpVO> siteRscGrpsList(SiteRscGrpVO siteRscGrpVO) throws Exception;
    List<RscGrpUserHisVO> rscGrpUserHisList(RscGrpUserHisVO rscGrpUserHisVO) throws Exception;
    List<RscGrpUserHisVO> rscGrpUserList() throws Exception;
    int rscGrpInsert(RscGrpInsert rscGrpInsert) throws Exception;
    int rscGrpUpdate(RscGrpUpdate rscGrpUpdate) throws Exception;
    int rscGrpDelete(RscGrpDelete rscGrpDelete) throws Exception;
    int rscGrpUserInsert(RscGrpUserInsert rscGrpUserInsert) throws Exception;
    int rscGrpUserHisUpdate(RscGrpUserUpdate rscGrpUserUpdate) throws Exception;
    int rscGrpIdChk(String rscGrpId) throws Exception;
}
