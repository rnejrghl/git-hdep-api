package com.rest.api.service.pp;


import com.rest.api.model.pp.*;
import org.apache.ibatis.annotations.Mapper;

import java.util.List;


@Mapper
public interface PrjSiteMapper {
    List<PrjSitesVO> prjSiteList(PrjSiteVO prjSiteVO) throws Exception;
    List<PrjSitesVO> prjSiteListExcel(PrjSiteVO prjSiteVO) throws Exception;
    List<ContractPlanVO> contractPlan(ContractPlanVO contractPlanVO) throws Exception;
    List<ExpnVO> expnList(ExpnVO expnVO) throws Exception;
    List<SiteGridVO> gridList(SiteGridVO siteGridVO) throws Exception;
    List<PrjSiteTermVO> termList(PrjSiteTermVO prjSiteTermVO) throws Exception;
    List<PrjSiteGoalVO> goalList(PrjSiteGoalVO prjSiteGoalVO) throws Exception;
    List<PrjSiteCntVO> prjSiteCnt(PrjSiteVO prjSiteVO) throws Exception;
    PrjSiteCntVO prjSitePageCnt(PrjSiteVO prjSiteVO) throws Exception;
    List<InspMngVO> inspMng(InspMngVO inspMngVO) throws Exception;
    List<PrjSiteUserVO> siteUser(PrjSiteUserVO prjSiteUserVO) throws Exception;
    List<SiteFileVO> siteFileList(SiteFileVO siteFileVO) throws Exception;

    int prjSiteUserInsert(ContractPlanInsert contractPlanInsert) throws Exception;
    int nectrInsert(NectrInsert nectrInsert) throws Exception;
    int contractInsert(ContractPlanInsert contractPlanInsert) throws Exception;
    int planInsert(ContractPlanInsert contractPlanInsert) throws Exception;
    int noteInsert(NoteInsert noteInsert) throws Exception;
    int siteGridInsert(SiteGridInsert siteGridInsert) throws Exception;
    int siteInspInsert(SiteInspInsert siteInspInsert) throws Exception;
    int siteFileInsert(SiteFileInsert siteFileInsert) throws Exception;
    int insertCmnPlant(PrjSitePsInfoVo prjSitePsInfoVo) throws Exception;
    int insertCmnPlantFac(PrjSitePsInfoVo prjSitePsInfoVo) throws Exception;
    
    int noteUpdate(NoteUpdate noteUpdate) throws Exception;
    int expnUpdate(ExpnUpdate expnUpdate) throws Exception;
    int mngUpdate(SiteMngUpdate siteMngUpdate) throws Exception;
    int inspUpdate(SiteInspUpdate siteInspUpdate) throws Exception;
    int prjSiteUserUpdate(ContractPlanUpdate contractPlanUpdate) throws Exception;
    int nectrUpdate(NectrUpdate nectrUpdate) throws Exception;
    int nectrPSCUpdate(NectrUpdate nectrUpdate) throws Exception;
    int nectrPSUUpdate(NectrUpdate nectrUpdate) throws Exception;
    int nectrCUUpdate(NectrUpdate nectrUpdate) throws Exception;
    int contractUpdate(ContractPlanUpdate contractPlanUpdate) throws Exception;
    int planUpdate(ContractPlanUpdate contractPlanUpdate) throws Exception;
    int siteGridUpdate(SiteGridTableUpdate siteGridTableUpdate) throws Exception;
    int termUpdate(TermUpdate termUpdate) throws Exception;
    int goalListUpdate(PrjSiteGoalUpdate prjSiteGoalUpdate) throws Exception;
    int goalListInsert(PrjSiteGoalInsert prjSiteGoalInsert) throws Exception;
    int gridWorkDudtUpdate(SiteGridTableUpdate siteGridTableUpdate) throws Exception;
    int contractDelete(ContractPlanVO contractPlanVO) throws Exception;
    int nectrDelete(NectrDelete nectrDelete) throws Exception;
    int siteFileDelete(SiteFileDelete siteFileDelete) throws Exception;
    int plantTypeUpdate(PrjSitePsInfoVo prjSitePsInfoVo) throws Exception;
    int facTypeUpdate(PrjSitePsInfoVo prjSitePsInfoVo) throws Exception;

    int prjProcessUpdate(PrjSiteVO prjSiteVO) throws Exception;
    PrjSiteVO getPrjProcess(PrjSiteVO prjSiteVO) throws Exception;
    
    
}
