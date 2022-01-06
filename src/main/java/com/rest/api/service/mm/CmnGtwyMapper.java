package com.rest.api.service.mm;


import com.rest.api.model.mm.*;
import org.apache.ibatis.annotations.Mapper;

import java.util.List;


@Mapper
public interface CmnGtwyMapper {
    List<CmnGtwyVO> gtwyGroupList() throws Exception;
    List<CmnGtwyDvceVO> gtwyDvceList(CmnGtwyDvceVO cmnGtwyDvceVO) throws Exception;
    List<CmnDvceVO> pntMapList(CmnGtwyDvceVO cmnGtwyDvceVO) throws Exception;

    int gtwyDvceInsert(CmnGtwyDvceInsert cmnGtwyDvceInsert) throws Exception;
    int gtwyDvceUpdate(CmnGtwyDvceUpdate cmnGtwyDvceUpdate) throws Exception;
//    int gtwyDvceDelete(CmnGtwyDvceVO cmnGtwyDvceVO) throws Exception;

    int gtwyGrpInsert(CmnGtwyInsert cmnGtwyInsert) throws Exception;
    int gtwyGrpDvceInsert(CmnGtwyInsert cmnGtwyInsert) throws Exception;


}
