package com.rest.api.service.mo;


import com.amazonaws.services.qldbsession.model.Page;
import com.rest.api.model.mo.FailAlarmVo;
import com.rest.api.model.pp.*;
import org.apache.ibatis.annotations.Mapper;

import java.util.List;


@Mapper
public interface MobileMoMapper {
    List<MobileOperationVO> mobOperationList(PrjSiteVO prjSiteVO) throws Exception;
    PageVo mobOperationCnt(PrjSiteVO prjSiteVO) throws Exception;
    MobileOperationDetail mobOperation(PrjSiteVO prjSiteVO) throws Exception;
    List<FailAlarmVo> siteFaultList(FailAlarmVo failAlarmVo) throws Exception;
    PageVo siteFaultCnt(FailAlarmVo failAlarmVo) throws Exception;
    List<MobilePrjSiteVo> mobPrjSiteList(PrjSiteVO prjSiteVO) throws Exception;
    PageVo mobPrjSiteCnt(PrjSiteVO prjSiteVO) throws Exception;
}
