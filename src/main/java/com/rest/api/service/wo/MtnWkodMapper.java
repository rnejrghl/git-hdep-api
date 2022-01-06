package com.rest.api.service.wo;



import com.rest.api.model.wo.*;
import org.apache.ibatis.annotations.Mapper;

import java.util.List;


@Mapper
public interface MtnWkodMapper {

    List<MthWkodVO> workOrderList(MthWkodVO mthWkodVO) throws Exception;
    List<MthWkodVO> workOrderListExcel(MthWkodVO mthWkodVO) throws Exception;
    List<MthWkodCntVO> workOrderCnt(MthWkodVO mthWkodVO) throws Exception;
    List<MthWkodOverdueVO> workOrderOverdue(MthWkodVO mthWkodVO) throws Exception;
    MthWkodCntVO workOrderPage(MthWkodVO mthWkodVO) throws Exception;

    List<MthWkodHdtlVO> wkodHdtl(MthWkodHdtlVO mthWkodHdtlVO) throws Exception;
    List<MthWkodVO> workOrder(MthWkodVO mthWkodVO) throws Exception;
    List<MthWkodFileVO> wkodFile(MthWkodFileVO mthWkodFileVO) throws Exception;
    List<CmnNotiVO> cmnNotiList() throws Exception;
    List<ReNotiSendVO> reNotiSendSite() throws Exception;
    List<MthWkodVO> unWorkOrderList(MthWkodVO mthWkodVO) throws Exception;
    List<WorkOrderPrjSiteVO> workOrderprjSiteList(WorkOrderPrjSiteVO workOrderPrjSiteVO) throws Exception;
    String workOrderprjSiteSeq(String siteId) throws Exception;

    int workOrderInsert(MthWkodInsert mthWkodInsert) throws Exception;
    int mthWkodHdtlInsert(MthWkodHdtlInsert mthWkodHdtlInsert) throws Exception;
    int workOrderHdtlUpdate(MthWkodHdtlUpdate mthWkodHdtlUpdate) throws Exception;
    int workOrderRejectInsert(MthWkodHdtlUpdate mthWkodHdtlUpdate) throws Exception;
    int workOrderUpdate(MthWkodUpdate mthWkodUpdate) throws Exception;
    int wkodFileInsert(MthWkodFileInsert mthWkodFileInsert) throws Exception;
    int wkodFileUpdate(MthWkodFileUpdate mthWkodFileUpdate) throws Exception;

    int workOrderDelete(MthWkodDelete mthWkodDelete) throws Exception;
    int workFileDelete(WorkFileDelete mthWkodDelete) throws Exception;
    int cmplReqDtUpdate(MthWkodUpdate mthWkodUpdate) throws Exception;

    List<WT0003VO> workOrderWT0003() throws Exception;
    List<children> workOrderWT0003children() throws Exception;
}
