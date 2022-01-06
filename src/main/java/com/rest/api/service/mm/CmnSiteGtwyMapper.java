package com.rest.api.service.mm;


import com.rest.api.model.mm.*;
import org.apache.ibatis.annotations.Mapper;

import java.util.List;


@Mapper
public interface CmnSiteGtwyMapper {
    List<CmnSiteGtwyVO> siteGtwyList() throws Exception;
    List<CmnSiteGtwyVO> siteInfo(CmnSiteGtwyVO cmnSiteGtwyVO) throws Exception;
    List<CmnSiteGtwyInfoVO> siteGtwyInfo(CmnSiteGtwyInfoVO cmnSiteGtwyInfoVO) throws Exception;

    List<RscGrpVO> rscGrpList() throws Exception;
    List<CmnGtwyVO> cmnGtwyList() throws Exception;
    List<CmnGtwyDvceVO> siteGtwyDvceList(CmnGtwyDvceVO cmnGtwyDvceVO) throws Exception;

    int siteGtwyInsert(CmnSiteGtwyInsert cmnSiteGtwyInsert) throws Exception;
    int siteGtwyUpdate(CmnSiteGtwyUpdate cmnSiteGtwyUpdate) throws Exception;



}
