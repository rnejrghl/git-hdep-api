package com.rest.api.service.mo;

import java.util.List;

import org.apache.ibatis.annotations.Mapper;

import com.rest.api.model.ext.PdResultVO;
import com.rest.api.model.mo.FailAlarmVo;
import com.rest.api.model.mo.pieChartVO;
import com.rest.api.model.mo.KpiListVO;
import com.rest.api.model.mo.KpiPowersVO;
import com.rest.api.model.mo.KpiSummaryVO;
import com.rest.api.model.mo.KpiVO;
import com.rest.api.model.mo.OperationsCntVO;
import com.rest.api.model.mo.OperationsVO;
import com.rest.api.model.mo.PowerChartVO;
import com.rest.api.model.mo.PowersVO;
import com.rest.api.model.pp.PrjSitePsInfoVo;
import com.rest.api.model.pp.PrjSiteSpecVO;

@Mapper
public interface MoMapper {
    List<OperationsVO> operations(OperationsVO operationsVO) throws Exception;

    OperationsCntVO operationsPageCnt(OperationsVO operationsVO) throws Exception;

    List<KpiPowersVO> kpiPowerList(OperationsVO operationsVO) throws Exception;

    KpiSummaryVO kpiSummary(OperationsVO operationsVO) throws Exception;

    KpiSummaryVO realFlow(OperationsVO operationsVO) throws Exception;

    KpiSummaryVO kpiHistSummary(OperationsVO operationsVO) throws Exception;

    List<KpiSummaryVO> kpiSummaryList(OperationsVO operationsVO) throws Exception;

    List<KpiPowersVO> kpiPowerSumList(OperationsVO operationsVO) throws Exception;

    List<OperationsVO> operationsExcel(OperationsVO operationsVO) throws Exception;

    List<KpiVO> kpiList(KpiVO kpiVO) throws Exception;

    List<KpiListVO> kpiCompareList(KpiVO kpiVO) throws Exception;

    KpiListVO kpiCompareEnergy(KpiVO kpiVO) throws Exception;

    OperationsCntVO operationsCnt(OperationsVO operationsVO) throws Exception;

    OperationsVO sitePlantInfo(OperationsVO operationsVO) throws Exception;

    List<KpiPowersVO> realPowerList(PowersVO powersVO) throws Exception;

    List<KpiSummaryVO> realPowerSumList(OperationsVO powersVO) throws Exception;

    List<PowerChartVO> hourlyOperList(PowersVO powersVO);

    pieChartVO pieChart(PowersVO powersVO);

    List<KpiSummaryVO> powerHourlyList(PowersVO powersVO);

    List<FailAlarmVo> plantFailList(FailAlarmVo failListVo);

    PrjSitePsInfoVo get_PsId_FacId(PrjSitePsInfoVo prjSitePsInfoVo);
    
    PrjSiteSpecVO getSiteSpec(PrjSiteSpecVO prjSiteSpecVO);
    
    List<PdResultVO>  getSpotPriceGraph();
}
