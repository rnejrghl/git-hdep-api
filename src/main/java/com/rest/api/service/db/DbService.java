package com.rest.api.service.db;

import java.text.DecimalFormat;
import java.time.ZoneId;
import java.time.ZonedDateTime;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.common.CommonPpVO;
import com.rest.api.model.db.AlarmConfYnUpdate;
import com.rest.api.model.db.AlarmOverviewCntVO;
import com.rest.api.model.db.AlarmOverviewDtlVO;
import com.rest.api.model.db.AlarmOverviewSiteDtlVO;
import com.rest.api.model.db.AlarmOverviewVO;
import com.rest.api.model.db.AssetOverviewSiteDtlVO;
import com.rest.api.model.db.AssetOverviewVO;
import com.rest.api.model.db.DbVO;
import com.rest.api.model.db.DsAlarmOverviewCapaVO;
import com.rest.api.model.db.DsAlarmOverviewRegnVO;
import com.rest.api.model.db.RegnSiteCntVO;
import com.rest.api.model.db.RegnSiteVO;
import com.rest.api.model.db.RscGrpInfoVO;
import com.rest.api.model.db.SiteOpeStaDtlVO;
import com.rest.api.model.ext.PdResultVO;
import com.rest.api.model.mm.CmnDvceVO;
import com.rest.api.model.mo.FailAlarmVo;
import com.rest.api.model.mo.KpiListVO;
import com.rest.api.model.mo.pieChartVO;
import com.rest.api.model.mo.KpiPowersVO;
import com.rest.api.model.mo.KpiSummaryVO;
import com.rest.api.model.mo.KpiVO;
import com.rest.api.model.mo.OperationsVO;
import com.rest.api.model.mo.PowerChartVO;
import com.rest.api.model.mo.PowerVo;
import com.rest.api.model.mo.PowersVO;
import com.rest.api.model.pp.PrjSitePsInfoVo;
import com.rest.api.model.pp.PrjSiteSpecVO;
import com.rest.api.model.wo.MthWkodVO;
import com.rest.api.service.common.CommonMapper;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.mm.CmnDvceMapper;
import com.rest.api.service.mo.MoMapper;
import com.rest.api.service.wo.MtnWkodMapper;
import com.rest.api.util.WeatherAPI;

import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;

@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class DbService {

    @Autowired
    private DbMapper mapper;
    @Autowired
    private MoMapper moMapper;
    @Autowired
    private CmnDvceMapper cdMapper;
    @Autowired
    private CommonMapper commonmapper;

    @Autowired
    private MtnWkodMapper mtnWkodMapper;

    @Autowired
    private CommonService commonService;

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    public Map siteOpeStas(@Valid DbVO dbVO) throws Exception {

        HashMap map = new HashMap();
        String[] sites = jwtTokenProvider.getSiteAuth();
        String userSeq = jwtTokenProvider.resolveTokenUser();
        if (sites.length > 0) {
            dbVO.setSites(sites);
        }
        dbVO.setUserSeq(userSeq);

        List<DbVO> siteOpeStas = mapper.siteOpeStas(dbVO);
        // if(siteOpeStas.size() == 0){
        // throw new CResourceNotExistException();
        // }

        map.put("siteOpeStas", siteOpeStas);

        return map;
    }

    public DbVO siteOpeStaDtl(@Valid DbVO dbVO) throws Exception {

        String[] sites = jwtTokenProvider.getSiteAuth();
        String userSeq = jwtTokenProvider.resolveTokenUser();
        if (sites.length > 0) {
            dbVO.setSites(sites);
        }
        dbVO.setUserSeq(userSeq);

        DbVO siteOpeStas = mapper.siteOpeStasInfo(dbVO);

        return siteOpeStas;
    }

    public Map siteOpeStaAlarm(@Valid SiteOpeStaDtlVO siteOpeStaDtlVO) throws Exception {

        HashMap map = new HashMap();

        MthWkodVO mthWkodVO = new MthWkodVO();
        mthWkodVO.setPublStartDt(siteOpeStaDtlVO.getPublStatDt());
        mthWkodVO.setPublEndDt(siteOpeStaDtlVO.getPublEndDt());
        mthWkodVO.setWorkOrdTyp(siteOpeStaDtlVO.getWorkOrdTyp());
        mthWkodVO.setWorkOrdStat(siteOpeStaDtlVO.getWorkOrdStat());
        mthWkodVO.setSiteId(siteOpeStaDtlVO.getSiteId());

        String[] sites = jwtTokenProvider.getSiteAuth();
        String userSeq = jwtTokenProvider.resolveTokenUser();
        if (sites.length > 0) {
            mthWkodVO.setSiteIds(sites);
        }
        mthWkodVO.setSiteUserSeq(userSeq);

        List<MthWkodVO> workOrderList = mtnWkodMapper.workOrderList(mthWkodVO);

        map.put("alarmList", null);
        map.put("workOrderList", workOrderList);

        return map;
    }

    public Map assetOverview() throws Exception {

        HashMap map = new HashMap();

        AssetOverviewVO assetOverviewVO = new AssetOverviewVO();
        String[] sites = jwtTokenProvider.getSiteAuth();
        String userSeq = jwtTokenProvider.resolveTokenUser();

        if (sites.length > 0) {
            assetOverviewVO.setSiteIds(sites);
        }
        assetOverviewVO.setUserSeq(userSeq);

        AssetOverviewVO assetOverviewList = mapper.assetOverviewCnt(assetOverviewVO);

        map.put("assetOverviewCnt", assetOverviewList);

        CommonPpVO commonPpVO = commonmapper.codePpNow();
        map.put("goalCnt", commonPpVO);
        return map;
    }

    public Map assetOverviewSiteDtl(AssetOverviewSiteDtlVO assetOverviewSiteDtlVO) throws Exception {

        HashMap map = new HashMap();
        AssetOverviewSiteDtlVO assetOverviewSiteDtl = mapper.assetOverviewSiteDtl(assetOverviewSiteDtlVO);
        if (assetOverviewSiteDtl.getLatd() != null && !"".equals(assetOverviewSiteDtl.getLatd())
                && assetOverviewSiteDtl.getLgtd() != null && !"".equals(assetOverviewSiteDtl.getLgtd())) {
            WeatherAPI weatherAPI = new WeatherAPI();
            HashMap<String, String> returnValue = (HashMap<String, String>) weatherAPI
                    .weather(assetOverviewSiteDtl.getLatd(), assetOverviewSiteDtl.getLgtd());
            assetOverviewSiteDtl.setWeatherMain(returnValue.get("weatherMain"));
            assetOverviewSiteDtl.setWeatherTemp(returnValue.get("weatherTemp"));
            assetOverviewSiteDtl.setWeatherId(returnValue.get("weatherId"));
        }

        map.put("assetOverviewSiteDtl", assetOverviewSiteDtl);
        return map;
    }

    public List<RegnSiteCntVO> regnSiteCnt() throws Exception {

        String[] sites = jwtTokenProvider.getSiteAuth();
        String userSeq = jwtTokenProvider.resolveTokenUser();

        RegnSiteCntVO regnSiteCntVO = new RegnSiteCntVO();
        if (sites.length > 0) {
            regnSiteCntVO.setSiteIds(sites);
        }
        regnSiteCntVO.setUserSeq(userSeq);

        List<RegnSiteCntVO> regnSiteCntList = mapper.regnSiteCnt(regnSiteCntVO);

        // dsAlarmOverviewCnt
        for (int i = 0; i < regnSiteCntList.size(); i++) {
            DsAlarmOverviewRegnVO dsAlarmOverviewRegnVO = new DsAlarmOverviewRegnVO();
            DsAlarmOverviewCapaVO dsAlarmOverviewCapaVO = new DsAlarmOverviewCapaVO();
            dsAlarmOverviewCapaVO.setBattery("0");
            dsAlarmOverviewCapaVO.setPv("0");
            dsAlarmOverviewRegnVO.setRegnGubn(regnSiteCntList.get(i).getRegnGubn());
            if (sites.length > 0) {
                dsAlarmOverviewRegnVO.setSiteIds(sites);
            }

            dsAlarmOverviewRegnVO.setUserSeq(userSeq);
            regnSiteCntList.get(i).setSiteCnt(mapper.dsAlarmOverviewCnt(dsAlarmOverviewRegnVO));
            regnSiteCntList.get(i).setCapacity(dsAlarmOverviewCapaVO);

        }

        return regnSiteCntList;
    }

    public List<RegnSiteVO> regnSiteList(RegnSiteCntVO rgnSiteCntVO) throws Exception {
        String[] sites = jwtTokenProvider.getSiteAuth();
        String userSeq = jwtTokenProvider.resolveTokenUser();
        if (sites.length > 0) {
            rgnSiteCntVO.setSiteIds(sites);
        }

        rgnSiteCntVO.setUserSeq(userSeq);

        List<RegnSiteVO> regnSiteList = mapper.regnSiteList(rgnSiteCntVO);

        return regnSiteList;
    }

    public List<RscGrpInfoVO> rscGrpInfo() throws Exception {
        String[] sites = jwtTokenProvider.getSiteAuth();
        String userSeq = jwtTokenProvider.resolveTokenUser();

        RscGrpInfoVO rscGrpInfoVO = new RscGrpInfoVO();

        if (sites.length > 0) {
            rscGrpInfoVO.setSiteIds(sites);
        }
        rscGrpInfoVO.setUserSeq(userSeq);

        List<RscGrpInfoVO> rscGrpInfoList = mapper.rscGrpInfo(rscGrpInfoVO);

        return rscGrpInfoList;
    }

    public Map siteOpeStaInfo(@Valid DbVO dbVO) throws Exception {

        HashMap map = new HashMap();
        DbVO siteOpeStas = mapper.siteOpeStasInfo(dbVO);
        MthWkodVO mthWkodVO = new MthWkodVO();
        mthWkodVO.setSiteId(dbVO.getSiteId());
        mthWkodVO.setSiteUserSeq(dbVO.getUserSeq());
        if (dbVO.getSites().length > 0) {
            mthWkodVO.setSiteIds(dbVO.getSites());
        }

        List<MthWkodVO> workOrderList = mtnWkodMapper.workOrderList(mthWkodVO);
        KpiVO kpiVO = new KpiVO();
        kpiVO.setSiteId(dbVO.getSiteId());
        List<KpiVO> kpiList = moMapper.kpiList(kpiVO);
        List<DbVO> rawList = new ArrayList<DbVO>();
        List<DbVO> alarmList = new ArrayList<DbVO>();
        map.put("siteOpeStas", siteOpeStas);
        map.put("alarmList", alarmList);
        map.put("workOrderList", workOrderList);
        map.put("kpiList", kpiList);
        map.put("rawList", rawList);
        return map;
    }

    public List<DbVO> cmnAlarmList(@Valid DbVO dbVO) throws Exception {

        List<DbVO> alarmList = new ArrayList<DbVO>();
        return alarmList;
    }

    public Map cmnRawList(@Valid PowersVO powersVO) throws Exception {
        HashMap map = new HashMap();
        List<KpiPowersVO> rowList = moMapper.realPowerList(powersVO);
        if (rowList.size() > 0) {
            DecimalFormat formatter = new DecimalFormat("###,###.####");
            double[] power = new double[rowList.size()];
            double totalAmt = 0.0000;
            for (int i = 0; i < rowList.size(); i++) {
                if (!map.containsKey("pntAddrName")) {
                    map.put("pntAddrName", rowList.get(i).getPntAddrName());
                }
                String accAmt = "0.0000";
                double cTotalAmt = 0.0000;
                if (!"".equals(rowList.get(i).getAccAmount()) && rowList.get(i).getAccAmount() != null) {
                    double amount = Double.parseDouble(rowList.get(i).getAccAmount());
                    cTotalAmt = Math.round((amount / 1000 * 10000d)) / 10000d;
                    accAmt = formatter.format(cTotalAmt);
                }
                rowList.get(i).setAccAmount(accAmt);
                power[i] = cTotalAmt;
                totalAmt += cTotalAmt;
            }

            map.put("rowList", rowList);

            Arrays.sort(power);
            double avgAmount = 0.0000;
            if (totalAmt > 0) {
                avgAmount = Math.round(totalAmt / power.length * 10000d) / 10000d;

            }
            map.put("minAmount", formatter.format(power[0]));
            map.put("maxAmount", formatter.format(power[power.length - 1]));
            map.put("avgAmount", formatter.format(avgAmount));
        }

        return map;
    }

    public List<CmnDvceVO> cmnRawTagList(@Valid DbVO dbVO) throws Exception {
        DbVO siteOper = mapper.siteOpeStasInfo(dbVO);
        CmnDvceVO dvceVO = new CmnDvceVO();

        dvceVO.setEqmtGubnCd("IV0001");

        if (siteOper != null) {

            // System.out.println(siteOper.getRescGubn());

            if (siteOper.getRescGubn().equalsIgnoreCase("A")) {
                dvceVO.setEqmtGubnCd("IV0001");
            } else if (siteOper.getRescGubn().equalsIgnoreCase("B")) {
                dvceVO.setEqmtGubnCd("IV0003");
            }

            dvceVO.setRescGubn(siteOper.getRescGubn());
        }

        List<CmnDvceVO> dvceTags = cdMapper.dvceList(dvceVO);
        return dvceTags;
    }

    public List<KpiListVO> cmnKpiList(@Valid KpiVO kpiVO) throws Exception {
        List<KpiListVO> kpiList = moMapper.kpiCompareList(kpiVO);
        if (kpiList != null) {
            String userSeq = jwtTokenProvider.resolveTokenUser();
            String[] sites = jwtTokenProvider.getSiteAuth();

            DbVO dbVO = new DbVO();
            dbVO.setSiteId(kpiVO.getSiteId());
            dbVO.setUserSeq(userSeq);
            if (sites.length > 0) {
                dbVO.setSites(sites);
            }
            DbVO siteOpeStas = mapper.siteOpeStasInfo(dbVO);

            String pvInstCapa = "0";
            if (siteOpeStas != null) {
                pvInstCapa = siteOpeStas.getPvInstCapa();
            }
            DecimalFormat formatter = new DecimalFormat("###,###.##");
            for (int i = 0; i < kpiList.size(); i++) {
                KpiVO energyKpiVo = new KpiVO();
                energyKpiVo.setSearchType(kpiVO.getSearchType());
                energyKpiVo.setSiteId(kpiVO.getSiteId());
                energyKpiVo.setStatYm(kpiList.get(i).getNowDate());
                KpiListVO energy = moMapper.kpiCompareEnergy(energyKpiVo);
                if (energy != null) {
                    String nowEnergy = commonService.convertWToKw(energy.getNowTotEnergy(), false);
                    String lastEnergy = commonService.convertWToKw(energy.getLastTotEnergy(), false);
                    if (!"".equals(pvInstCapa) && pvInstCapa != null) {
                        if (!"".equals(nowEnergy) && nowEnergy != null) {
                            double dNowEnergy = Math.round(
                                    (Double.parseDouble(nowEnergy) / Double.parseDouble(pvInstCapa)) * 100d) / 100d;
                            kpiList.get(i).setNowTotEnergy(formatter.format(dNowEnergy));
                        } else {
                            kpiList.get(i).setNowTotEnergy("0.00");
                        }

                        if (!"".equals(lastEnergy) && lastEnergy != null) {
                            double dLastEnergy = Math.round(
                                    (Double.parseDouble(lastEnergy) / Double.parseDouble(pvInstCapa) * 100d)) / 100d;
                            kpiList.get(i).setLastTotEnergy(formatter.format(dLastEnergy));
                        } else {
                            kpiList.get(i).setLastTotEnergy("0.00");
                        }
                    } else {
                        kpiList.get(i).setNowTotEnergy("0.00");
                        kpiList.get(i).setLastTotEnergy("0.00");
                    }
                } else {
                    kpiList.get(i).setNowTotEnergy("0.00");
                    kpiList.get(i).setLastTotEnergy("0.00");
                }

                kpiList.get(i).setLastTotPwAmt(commonService.convertWToKw(kpiList.get(i).getLastTotPwAmt(), true));
                kpiList.get(i).setLastTotIvt(formatter.format(Double.parseDouble(kpiList.get(i).getLastTotIvt())));
                kpiList.get(i).setLastTotPpa(commonService.convertWToKw(kpiList.get(i).getLastTotPpa(), true));
                kpiList.get(i).setNowTotPwAmt(commonService.convertWToKw(kpiList.get(i).getNowTotPwAmt(), true));
                kpiList.get(i).setNowTotIvt(formatter.format(Double.parseDouble(kpiList.get(i).getNowTotIvt())));
                kpiList.get(i).setNowTotPpa(commonService.convertWToKw(kpiList.get(i).getNowTotPpa(), true));
                kpiList.get(i).setGoalGenrCapa(commonService.convertNullValue(kpiList.get(i).getGoalGenrCapa()));
                kpiList.get(i).setGoalEnergy(commonService.convertNullValue(kpiList.get(i).getGoalEnergy()));
                kpiList.get(i).setGoalIvt(commonService.convertNullValue(kpiList.get(i).getGoalIvt()));
                kpiList.get(i).setGoalPpa(commonService.convertNullValue(kpiList.get(i).getGoalPpa()));
            }

            return kpiList;
        }

        return kpiList;
    }

    public List<MthWkodVO> cmnWorkOrderList(@Valid MthWkodVO mthWkodVO) throws Exception {
        List<MthWkodVO> workOrderList = mtnWkodMapper.workOrderList(mthWkodVO);
        return workOrderList;
    }

    public List<FailAlarmVo> cmnPlantFailList(@Valid FailAlarmVo failListVo) throws Exception {
        List<FailAlarmVo> failList = moMapper.plantFailList(failListVo);
        return failList;
    }

    public Map alarmOverview(@Valid AlarmOverviewVO alarmOverviewVO) throws Exception {
        HashMap map = new HashMap();

        List<AlarmOverviewVO> alarmOverviewList = mapper.alarmOverview(alarmOverviewVO);
        map.put("mainData", alarmOverviewList);

        AlarmOverviewCntVO alarmOverviewCnt = mapper.alarmOverviewCnt(alarmOverviewVO);
        map.put("mainCntData", alarmOverviewCnt);

        return map;
    }

    public Map alarmOverviewDtl(@Valid AlarmOverviewDtlVO alarmOverviewDtlVO) throws Exception {
        HashMap map = new HashMap();

        List<AlarmOverviewDtlVO> alarmOverviewDtlList = mapper.alarmOverviewDtl(alarmOverviewDtlVO);
        map.put("mainData", alarmOverviewDtlList);

        AlarmOverviewVO alarmOverviewVO = new AlarmOverviewVO();
        alarmOverviewVO.setSiteId(alarmOverviewDtlVO.getSiteId());

        MthWkodVO mthWkodVO = new MthWkodVO();
        mthWkodVO.setSiteId(alarmOverviewDtlVO.getSiteId());

        String[] sites = jwtTokenProvider.getSiteAuth();
        String userSeq = jwtTokenProvider.resolveTokenUser();
        if (sites.length > 0) {
            mthWkodVO.setSiteIds(sites);
            alarmOverviewVO.setSiteIds(sites);
        }
        mthWkodVO.setSiteUserSeq(userSeq);
        alarmOverviewVO.setUserSeq(userSeq);

        List<AlarmOverviewVO> alarmOverviewList = mapper.alarmOverview(alarmOverviewVO);

        List<MthWkodVO> unWorkorderList = mtnWkodMapper.unWorkOrderList(mthWkodVO);
        map.put("unWorkorderList", unWorkorderList);

        AlarmOverviewSiteDtlVO alarmOverviewSiteDtlVO = new AlarmOverviewSiteDtlVO();
        alarmOverviewSiteDtlVO.setSiteId(alarmOverviewDtlVO.getSiteId());
        AlarmOverviewSiteDtlVO alarmOverviewSiteDtl = mapper.alarmOverviewSiteDtl(alarmOverviewSiteDtlVO);

        if (alarmOverviewSiteDtl.getLatd() != null && !"".equals(alarmOverviewSiteDtl.getLatd())
                && alarmOverviewSiteDtl.getLgtd() != null && !"".equals(alarmOverviewSiteDtl.getLgtd())) {
            WeatherAPI weatherAPI = new WeatherAPI();
            HashMap<String, String> returnValue = (HashMap<String, String>) weatherAPI
                    .weather(alarmOverviewSiteDtl.getLatd(), alarmOverviewSiteDtl.getLgtd());
            alarmOverviewSiteDtl.setWeatherMain(returnValue.get("weatherMain"));
            alarmOverviewSiteDtl.setWeatherTemp(returnValue.get("weatherTemp"));
            alarmOverviewSiteDtl.setWeatherId(returnValue.get("weatherId"));
        }

        if (alarmOverviewList.size() == 1) {
            alarmOverviewSiteDtl.setAlrtTypCd(alarmOverviewList.get(0).getAlrtTypCd());
        }

        map.put("siteInfo", alarmOverviewSiteDtl);

        return map;
    }

    public DbVO cmnSiteOpeStas(@Valid DbVO dbVO) throws Exception {

        DbVO siteOpeStas = mapper.siteOpeStasInfo(dbVO);

        return siteOpeStas;
    }

    public Map cmnSiteOperList(@Valid OperationsVO operationsVO) throws Exception {
        HashMap map = new HashMap();
        OperationsVO plantInfo = moMapper.sitePlantInfo(operationsVO);

         // 해당 사이트 PS_ID / FAC_ID 가져오기
         PrjSitePsInfoVo prjSitePsInfoVo = new PrjSitePsInfoVo();
         prjSitePsInfoVo.setSiteId(operationsVO.getSiteId());
         PrjSitePsInfoVo psId_facId = moMapper.get_PsId_FacId(prjSitePsInfoVo);
        
        // System.out.println(plantInfo);

        if (plantInfo == null || "".equals(plantInfo) || "".equals(plantInfo.getTimeZone())) {
        	//없을시 0을넣음
        	map.put("psId", "0");
            map.put("facId", "0");
            return map;
        }

        String rescGubn = plantInfo.getRescGubn();
        String timeZone = plantInfo.getTimeZone();
        String localDate = commonService.convertLastMinute(timeZone);

        OperationsVO powersVO = new OperationsVO();
        powersVO.setDayDate(localDate);
        powersVO.setSiteId(plantInfo.getSiteId());

        // 이상한데 ...
        KpiSummaryVO rtData = moMapper.realFlow(powersVO);

        // System.out.println("1-------------------------");
        // System.out.println(localDate);
        // System.out.println(rtData);

        if (rtData == null) {

            ZonedDateTime nowDate = ZonedDateTime.now(ZoneId.of(timeZone));
            nowDate = nowDate.minusMinutes(5);
            int minute = nowDate.getMinute();
            int oneMinute = minute % 10;
            int tenMinute = minute / 10;
            int convMinute = 0;
            if (oneMinute >= 0 && oneMinute < 5) {
                convMinute = (tenMinute * 10) + 0;
            } else {
                convMinute = (tenMinute * 10) + 5;
            }
            String setMinute = Integer.toString(convMinute);
            if (convMinute < 10) {
                setMinute = "0" + setMinute;
            }

            localDate = nowDate.format(DateTimeFormatter.ofPattern("yyyyMMddHH" + setMinute + "00"));

            powersVO.setDayDate(localDate);
            rtData = moMapper.realFlow(powersVO);

            // System.out.println("2-------------------------");
            // System.out.println(localDate);
            // System.out.println(rtData);

        }

        if (rtData != null) {

            PowerVo pVo = new PowerVo();
            pVo.setPvPower(commonService.convertWToKwLongDec(rtData.getIvtDc(), false));
            pVo.setOpPower(commonService.convertWToKwLongDec(rtData.getIvtAc(), false)); // PV 24, 13011

            pVo.setBatPower(rtData.getBatPower()); // BatPower //13141
            // SOH 추가요청
            pVo.setBatHealth(rtData.getBatHealth()); // batHealth //13142

            pVo.setLoadPower(commonService.convertWToKwLongDec(rtData.getLoadPower(), false)); // Load //13119
            pVo.setGridPower(commonService.convertWToKwLongDec(rtData.getGridPower(), false)); // ToGRID //13121
            pVo.setOthEnergy(commonService.convertWToKwLongDec(rtData.getOthEnergy(), false));// FromGRID //13149
            pVo.setBatChar(commonService.convertWToKwLongDec(rtData.getBatChar(), false));// CharBat //13126
            pVo.setBatDisc(commonService.convertWToKwLongDec(rtData.getBatDisc(), false));// DiscBat //13150
                      
            map.put("powerData", pVo);

        }

        powersVO.setDayDate("");
        powersVO.setSearchDate(localDate);
        List<KpiSummaryVO> chartData = moMapper.kpiSummaryList(powersVO);
        List<PowerChartVO> realPower = new ArrayList<>();

        if (chartData.size() > 0) {
            for (int i = 0; i < chartData.size(); i++) {
                String ivtAc = "0.00";
                String ivtDc = "0.00";
                String batPower = "0.00";
                String loadPower = "0.00";
                String gridPower = "0.00";
                String production = "0.00";
                if (!"".equals(chartData.get(i).getIvtAc()) && chartData.get(i).getIvtAc() != null)
                    ivtAc = commonService.convertWToKw(chartData.get(i).getIvtAc(), false);
                if (!"".equals(chartData.get(i).getIvtDc()) && chartData.get(i).getIvtDc() != null)
                    ivtDc = commonService.convertWToKw(chartData.get(i).getIvtDc(), false);
                if (!"".equals(chartData.get(i).getBatPower()) && chartData.get(i).getBatPower() != null)
                    batPower = commonService.convertWToKw(chartData.get(i).getBatPower(), false);
                if (!"".equals(chartData.get(i).getLoadPower()) && chartData.get(i).getLoadPower() != null)
                    loadPower = commonService.convertWToKw(chartData.get(i).getLoadPower(), false);
                if (!"".equals(chartData.get(i).getGridPower()) && chartData.get(i).getGridPower() != null)
                gridPower = commonService.convertWToKw(chartData.get(i).getGridPower(), false);
                if (!"".equals(chartData.get(i).getProduction()) && chartData.get(i).getProduction() != null)
                    production = commonService.convertWToKw(chartData.get(i).getProduction(), false);

                PowerChartVO pcVo2 = new PowerChartVO();
                pcVo2.setDate(chartData.get(i).getTimeStamp());
                pcVo2.setAmount(ivtAc);
                pcVo2.setIvtAc(ivtAc);
                pcVo2.setIvtDc(ivtDc);
                pcVo2.setBatPower(batPower);
                pcVo2.setLoadPower(loadPower);
                pcVo2.setGridPower(gridPower);
                pcVo2.setProduction(production);

                realPower.add(pcVo2);
            }
        }

        List<KpiSummaryVO> outputData = moMapper.realPowerSumList(powersVO);
        List<PowerChartVO> realOutput = new ArrayList<>();
        if (outputData.size() > 0) {
            for (int i = 0; i < outputData.size(); i++) {
                String production = "0.00";
//                if (!"".equals(chartData.get(i).getProduction()) && outputData.get(i).getProduction() != null) {
                    production = commonService.convertWToKw(outputData.get(i).getProduction(), false);
//                }

                PowerChartVO pcVo1 = new PowerChartVO();
                pcVo1.setDate(outputData.get(i).getTimeStamp());
                pcVo1.setAmount(production);
                realOutput.add(pcVo1);
            }
        }

        //제어탭 Spec 부분 추가  
        PrjSiteSpecVO prjSiteSpecVO = new PrjSiteSpecVO();
        prjSiteSpecVO.setSiteId(operationsVO.getSiteId());
        PrjSiteSpecVO prjSiteSpec = moMapper.getSiteSpec(prjSiteSpecVO);

        pieChartVO pieChartOutput = new pieChartVO();

        PowersVO pieChartInput = new PowersVO();
        pieChartInput.setSiteId(operationsVO.getSiteId());

        pieChartOutput = moMapper.pieChart(pieChartInput);

        if (pieChartOutput==null) {
            throw new CResourceNotExistException();
        }
        
        
         map.put("psId", psId_facId.getPlantKey()); // plantKey -> ps_id임
         map.put("facId", psId_facId.getFacId()); 
         map.put("realOutput", realOutput);
         map.put("realPower", realPower);
         map.put("prjSiteSpec", prjSiteSpec);
         map.put("pieChartData", pieChartOutput);

        return map;
    }

    public Map<String, Object> cmnHourlyOperList(PowersVO powersVO) {
        HashMap<String, Object> map = new HashMap<>();

        List<PowerChartVO> realOutput = new ArrayList<>();
        realOutput = moMapper.hourlyOperList(powersVO);

        if (realOutput.isEmpty()) {
            throw new CResourceNotExistException();
        }
        map.put("hourly", realOutput);

        return map;
    }

    public Map<String, Object> cmnHourlyPowerList(PowersVO powersVO) throws Exception {
        HashMap<String, Object> map = new HashMap<>();

        List<KpiSummaryVO> chartData = moMapper.powerHourlyList(powersVO);
        List<PowerChartVO> realPower = new ArrayList<>();

        if (chartData.size() > 0) {
            for (int i = 0; i < chartData.size(); i++) {
                String ivtAc = "0.00";
                String ivtDc = "0.00";
                String batPower = "0.00";
                String loadPower = "0.00";
                String batChar = "0.00";
                String batDisc = "0.00";
                String production = "0.00";
                if (!"".equals(chartData.get(i).getIvtAc()) && chartData.get(i).getIvtAc() != null)
                    ivtAc = commonService.convertWToKw(chartData.get(i).getIvtAc(), false);
                if (!"".equals(chartData.get(i).getIvtDc()) && chartData.get(i).getIvtDc() != null)
                    ivtDc = commonService.convertWToKw(chartData.get(i).getIvtDc(), false);
                if (!"".equals(chartData.get(i).getBatChar()) && chartData.get(i).getBatChar() != null)
                    batChar = commonService.convertWToKw(chartData.get(i).getBatChar(), false);
                if (!"".equals(chartData.get(i).getBatDisc()) && chartData.get(i).getBatDisc() != null)
                    batDisc = commonService.convertWToKw(chartData.get(i).getBatDisc(), false);
                if (!"".equals(chartData.get(i).getBatPower()) && chartData.get(i).getBatPower() != null)
                    batPower = chartData.get(i).getBatPower();
                if (!"".equals(chartData.get(i).getLoadPower()) && chartData.get(i).getLoadPower() != null)
                    loadPower = commonService.convertWToKw(chartData.get(i).getLoadPower(), false);
                if (!"".equals(chartData.get(i).getProduction()) && chartData.get(i).getProduction() != null)
                    production = commonService.convertWToKw(chartData.get(i).getProduction(), false);

                PowerChartVO pcVo2 = new PowerChartVO();
                pcVo2.setDate(chartData.get(i).getTimeStamp());
                pcVo2.setAmount(ivtAc);
                pcVo2.setIvtAc(ivtAc);
                pcVo2.setIvtDc(ivtDc);
                pcVo2.setLoadPower(loadPower);
                pcVo2.setBatPower(batPower);
                pcVo2.setBatChar(batChar);
                pcVo2.setBatDisc(batDisc);
                pcVo2.setProduction(production);

                realPower.add(pcVo2);
            }
        }
        map.put("realPower", realPower);

        return map;
    }

    public Boolean alarmConfYnUpdate(@Valid AlarmConfYnUpdate alarmConfYnUpdate) throws Exception {

        mapper.alarmConfYnUpdate(alarmConfYnUpdate);

        return true;
    }
    
    public Map<String, Object> getSpotPriceGraph() throws Exception {
        HashMap<String, Object> map = new HashMap<>();

        List<PdResultVO> chartData = moMapper.getSpotPriceGraph();
                       
        map.put("spotChartData", chartData);

        return map;
    }

}
