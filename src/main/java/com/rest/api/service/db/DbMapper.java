package com.rest.api.service.db;


import com.rest.api.model.common.*;
import com.rest.api.model.db.*;
import com.rest.api.model.pp.NoteUpdate;
import org.apache.ibatis.annotations.Mapper;

import java.util.List;


@Mapper
public interface DbMapper {

    List<DbVO> siteOpeStas(DbVO dbVO) throws Exception;
    List<RegnSiteCntVO> regnSiteCnt(RegnSiteCntVO regnSiteCntVO) throws Exception;
    List<RscGrpInfoVO> rscGrpInfo(RscGrpInfoVO rscGrpInfoVO) throws Exception;
    AssetOverviewVO assetOverviewCnt(AssetOverviewVO assetOverviewVO) throws Exception;
    AssetOverviewSiteDtlVO assetOverviewSiteDtl(AssetOverviewSiteDtlVO assetOverviewSiteDtlVO) throws Exception;
    DbVO siteOpeStasInfo(DbVO dbVO) throws Exception;

    List<AlarmOverviewVO> alarmOverview(AlarmOverviewVO alarmOverviewVO) throws Exception;
    List<AlarmOverviewDtlVO> alarmOverviewDtl(AlarmOverviewDtlVO alarmOverviewDtlVO) throws Exception;
    AlarmOverviewSiteDtlVO alarmOverviewSiteDtl(AlarmOverviewSiteDtlVO alarmOverviewSiteDtlVO) throws Exception;
    AlarmOverviewCntVO alarmOverviewCnt(AlarmOverviewVO alarmOverviewVO) throws Exception;
    DsAlarmOverviewVO dsAlarmOverviewCnt(DsAlarmOverviewRegnVO dsAlarmOverviewRegnVO) throws Exception;
    int alarmConfYnUpdate(AlarmConfYnUpdate alarmConfYnUpdate) throws Exception;

    List<RegnSiteVO> regnSiteList(RegnSiteCntVO regnSiteCntVO) throws Exception;
}
