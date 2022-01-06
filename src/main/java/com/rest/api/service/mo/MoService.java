package com.rest.api.service.mo;


import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.config.constant.ExcelConstant;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.common.CommonVO;
import com.rest.api.model.common.NoticeVO;
import com.rest.api.model.mm.CmnUserInsert;
import com.rest.api.model.mm.CmnUserVO;
import com.rest.api.model.mo.*;
import com.rest.api.model.pp.*;
import com.rest.api.model.security.SecurityVO;
import com.rest.api.model.wo.MthWkodVO;
import com.rest.api.service.common.CommonMapper;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.mm.CmnUserMapper;
import com.rest.api.service.security.SecurityMapper;
import com.rest.api.service.wo.MtnWkodMapper;
import com.rest.api.util.WeatherAPI;
import io.swagger.annotations.ApiParam;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.parameters.P;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;
import org.springframework.util.StringUtils;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.multipart.MultipartFile;

import javax.validation.Valid;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.*;
import java.util.Calendar;


@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class MoService {


    @Autowired
    private MoMapper mapper;
    @Autowired
    private MtnWkodMapper mtnWkodMapper;

    @Autowired
    private CommonMapper commonmapper;

    @Autowired
    private JwtTokenProvider jwtTokenProvider;


    @Autowired
    private SecurityMapper securityMapper;

    @Autowired
    private CommonService commonService;

    private final PasswordEncoder passwordEncoder;

    public Map alarm(@Valid AlarmVO alarmVO) throws Exception {

        String[]  sites  = jwtTokenProvider.getSiteAuth();
        String  userSeq  = jwtTokenProvider.resolveTokenUser();

        HashMap map = new HashMap();

        MthWkodVO mthWkodVO = new MthWkodVO();
        mthWkodVO.setPublStartDt(alarmVO.getPublStatDt());
        mthWkodVO.setPublEndDt(alarmVO.getPublEndDt());
        mthWkodVO.setWorkOrdUserName(alarmVO.getWorkOrdUserName());
        mthWkodVO.setWorkOrdTyp(alarmVO.getWorkOrdTyp());
        mthWkodVO.setWorkOrdStat(alarmVO.getWorkOrdStat());
        mthWkodVO.setRsltRegYn(alarmVO.getRsltRegYn());
        mthWkodVO.setSiteId(alarmVO.getSiteId());
        mthWkodVO.setSiteUserSeq(userSeq);
        if(sites.length > 0){
            mthWkodVO.setSiteIds(sites);
        }

        List<MthWkodVO> workOrderList = mtnWkodMapper.workOrderList(mthWkodVO);

        map.put("workOrderList",workOrderList);

        CommonVO commonVO= new CommonVO();
        String[] grpCds = {"CDK-00009","CDK-00010"};
        commonVO.setGrpCds(grpCds);
        List<CommonVO> codeList = commonmapper.codeList(commonVO);
        map.put("codeData",codeList);

        NoticeVO noticeVO = new NoticeVO();
        List<NoticeVO> notice = commonmapper.notice(noticeVO);
        map.put("noticeData",notice);

        map.put("workOrderListCnt", workOrderList.size());

        return map;
    }
    public Map operations(@Valid OperationsVO operationsVO) throws Exception {
        HashMap map = new HashMap();
        OperationsCntVO operationsPage = mapper.operationsPageCnt(operationsVO);
        operationsPage.setPage(operationsVO.getPage());

        Integer pagePer = 10;
        Integer start = (operationsVO.getPage() -1) * pagePer;
        operationsVO.setPageStart(start);
        operationsVO.setPagePer(pagePer);

        List<OperationsVO> operationsList = mapper.operations(operationsVO);
        for(int i = 0 ; i < operationsList.size(); i++){
//            if(operationsList.get(i).getLatd() != null && !"".equals(operationsList.get(i).getLatd()) && operationsList.get(i).getLgtd() != null && !"".equals(operationsList.get(i).getLgtd())){
//                WeatherAPI weatherAPI   = new WeatherAPI();
//                HashMap<String, String> returnValue = (HashMap<String, String>) weatherAPI.weather(operationsList.get(i).getLatd(),operationsList.get(i).getLgtd());
//                operationsList.get(i).setWeatherMain(returnValue.get("weatherMain"));
//                operationsList.get(i).setWeatherTemp(returnValue.get("weatherTemp"));
//                operationsList.get(i).setWeatherId(returnValue.get("weatherId"));
//            }
            String rescGubn = operationsList.get(i).getRescGubn();
            OperationsVO operationsKpiVo = new OperationsVO();
            operationsKpiVo.setSiteId(operationsList.get(i).getSiteId());
            operationsKpiVo.setRescGubn(rescGubn);
            String timeZone = "GMT";
            if (! "".equals(operationsList.get(i).getTimeZone()) && operationsList.get(i).getTimeZone() != null) {
                timeZone = operationsList.get(i).getTimeZone();
            }
            String localDate = commonService.convertLastMinute(timeZone);
//            operationsKpiVo.setSearchDate(localDate);
//            KpiSummaryVO nowPower = mapper.kpiSummary(operationsKpiVo);
//            if (nowPower != null) {
//                operationsList.get(i).setGeneration(commonService.convertWToKw(nowPower.getProduction(), true));
//            }

            SimpleDateFormat transFormat = new SimpleDateFormat("yyyyMMddHHmmss");
            Date localDate2 = transFormat.parse(localDate);
            Calendar cal = Calendar.getInstance();
            cal.setTime(localDate2);
            cal.add(Calendar.DATE, -1);
            String bDate = transFormat.format(cal.getTime());
            operationsKpiVo.setSearchDate(bDate);
            KpiSummaryVO powerList = mapper.kpiHistSummary(operationsKpiVo);
            if (powerList != null) {
                operationsList.get(i).setProduction(commonService.convertWToKw(powerList.getProduction(), true));
                operationsList.get(i).setEnergyYield(commonService.convertWToKw(powerList.getEnergyYield(), true));
                operationsList.get(i).setPpa(commonService.convertWToKw(powerList.getPpa(), true));
                //operationsList.get(i).setTradingVolume(commonService.convertWToKw(powerList.getEnergyYield(), true));
                Double ivtAc = Double.parseDouble(commonService.convertWToKw(powerList.getIvtAc(), false));
                Double ivtDc = Double.parseDouble(commonService.convertWToKw(powerList.getIvtDc(), false));
                if (ivtAc > 0 && ivtDc > 0) {
                    String ivtEfficiency = Double.toString(Math.round(((ivtAc / ivtDc* 100) * 100d)) / 100d);
                    operationsList.get(i).setIvtEfficiency(ivtEfficiency);
                } else {
                    operationsList.get(i).setIvtEfficiency("0.00");
                }

            }
        }
        map.put("operationsList",operationsList);
        map.put("operationsPage",operationsPage);


        return map;
    }

    public Map operationCnt(@Valid OperationsVO operationsVO) throws Exception  {
        HashMap map = new HashMap();
        OperationsCntVO operationsCntVO = mapper.operationsCnt(operationsVO);

        LocalDate currentDate = LocalDate.now();
        operationsVO.setSearchDate(currentDate.format(DateTimeFormatter.BASIC_ISO_DATE));
        double totalModlCapa = 0;
        if (! "".equals(operationsCntVO.getTotalModlCapa()) && operationsCntVO.getTotalModlCapa() != null) {
            totalModlCapa = Double.parseDouble(operationsCntVO.getTotalModlCapa());
        }
        KpiSummaryVO dayPowerAmt = mapper.kpiSummary(operationsVO);
        if (dayPowerAmt != null) {
            operationsCntVO.setTodayGnrt(commonService.convertWToKw(dayPowerAmt.getProduction(), true));
            double dayEnergy = Double.parseDouble(commonService.convertWToKw(dayPowerAmt.getEnergyYield(), false));
            if (dayEnergy != 0 ) {
                if (totalModlCapa == 0) {
                    operationsCntVO.setTodayEnergy(Double.toString(dayEnergy));
                } else {
                    operationsCntVO.setTodayEnergy(Double.toString(Math.round(dayEnergy / totalModlCapa * 100d) / 100d));
                }
            } else {
                operationsCntVO.setTodayEnergy(Double.toString(dayEnergy));
            }
        }

        operationsVO.setSearchDate("");
        operationsVO.setMonthDate(currentDate.format(DateTimeFormatter.BASIC_ISO_DATE));
        KpiSummaryVO monthPowerAmt = mapper.kpiSummary(operationsVO);
        if (monthPowerAmt != null) {
            operationsCntVO.setMonthGnrt(commonService.convertWToKw(monthPowerAmt.getProduction(), true));
            double monthEnergy = Double.parseDouble(commonService.convertWToKw(monthPowerAmt.getEnergyYield(), false));
            if (monthEnergy != 0 ) {
                if (totalModlCapa == 0) {
                    operationsCntVO.setMonthEnergy(Double.toString(monthEnergy));
                } else {
                    operationsCntVO.setMonthEnergy(Double.toString(Math.round(monthEnergy / totalModlCapa * 100d) / 100d));
                }
            } else {
                operationsCntVO.setMonthEnergy(Double.toString(monthEnergy));
            }
        }

        map.put("operationsCnt",operationsCntVO);
        return map;
    }


    public Map<String, Object> operationsExcel(@Valid OperationsVO operationsVO) throws Exception {

        SecurityVO securityVO =  securityMapper.userInfo(operationsVO.getUser());
        String[] sites = commonService.siteAuthList(securityVO.getUserSeq());
        operationsVO.setUserSeq(securityVO.getUserSeq());
        if(sites.length > 0){
            operationsVO.setSiteIds(sites);
        }

        List<OperationsVO> operationsList = mapper.operationsExcel(operationsVO);
        for(int i = 0 ; i < operationsList.size(); i++){
            if(operationsList.get(i).getLatd() != null && !"".equals(operationsList.get(i).getLatd()) && operationsList.get(i).getLgtd() != null && !"".equals(operationsList.get(i).getLgtd())){
                WeatherAPI weatherAPI   = new WeatherAPI();
                HashMap<String, String> returnValue = (HashMap<String, String>) weatherAPI.weather(operationsList.get(i).getLatd(),operationsList.get(i).getLgtd());
                operationsList.get(i).setWeatherMain(returnValue.get("weatherMain"));
                operationsList.get(i).setWeatherTemp(returnValue.get("weatherTemp"));
            }
        }

        List<List<String>> bodyList = new ArrayList<List<String>>();


        for(int i  = 0 ; i < operationsList.size() ; i++){
            List<String> body = new ArrayList<String>();
            body.add(operationsList.get(i).getSiteId());
            body.add(operationsList.get(i).getUserName());
            body.add(operationsList.get(i).getRescGubn());
            body.add(operationsList.get(i).getEqmtStatus());
            body.add(operationsList.get(i).getPvOperationStatus());
            body.add(operationsList.get(i).getGeneration());
            body.add(operationsList.get(i).getEssOperationStatus());
            body.add(operationsList.get(i).getTradingVolume());

            body.add(operationsList.get(i).getPr());
            body.add(operationsList.get(i).getPrVsGoal());
            body.add(operationsList.get(i).getGoalGenrCapa());
            body.add(operationsList.get(i).getGoalGenrCapaVsGoal());
            body.add(operationsList.get(i).getPpa());
            body.add(operationsList.get(i).getPpaVsGoal());

            body.add(operationsList.get(i).getWeatherTemp());

            body.add(operationsList.get(i).getUnrReleCnt());
            body.add(operationsList.get(i).getWorkOrderCnt());
            body.add(operationsList.get(i).getWorkOrderPushYn());

            body.add(operationsList.get(i).getDataLastDate());
            bodyList.add(body);

        }




        Map<String, Object> map = new HashMap<>();
        map.put(ExcelConstant.FILE_NAME, "operations_excel");
        map.put(ExcelConstant.HEAD, Arrays.asList("사용자ID","사용자명","자원구분","설비상태","PV운전상태","PV발전량(kwh)","ESS운전상태","ESS거래가능량","KPI PR(%)","KPI 목표대비 PR(%)","KPI 발전량(kwh)","KPI 목표대비 발전량(kwh)", "KPI PPA거래량(kwh)", "KPI 목표대비 PPA거래량(kwh)","날씨","미해제 알람건수","미처리 Work Order건수","특별점검 Work Order발행","데이터 최종 수신일"));
        map.put(ExcelConstant.BODY,bodyList);
        return map;
    }





    public List<KpiVO> kpiList(@Valid KpiVO kpiVO) throws Exception {

        List<KpiVO> kpiList = mapper.kpiList(kpiVO);

    /*    if(kpiList.size() == 0){
            throw new CResourceNotExistException();
        }*/

        return kpiList;
    }

    public Map<String, Object> kpiListExcel(@Valid KpiVO kpiVO)  throws Exception {



        List<KpiVO> kpiList = mapper.kpiList(kpiVO);
        if(kpiList.size() == 0){
            throw new CResourceNotExistException();
        }

        List<List<String>> bodyList = new ArrayList<List<String>>();

        for(int i  = 0 ; i < kpiList.size() ; i++){
            List<String> body = new ArrayList<String>();
            body.add(kpiList.get(i).getEndYm()+""+kpiList.get(i).getGoalDt());
            body.add(kpiList.get(i).getGoalGenrCapa());
            body.add(kpiList.get(i).getPpa());
            body.add(kpiList.get(i).getPr());
            body.add(kpiList.get(i).getSale());

            bodyList.add(body);

        }

        Map<String, Object> map = new HashMap<>();
        map.put(ExcelConstant.FILE_NAME, "work_orders_excel");
        map.put(ExcelConstant.HEAD, Arrays.asList("목표일", "발전량", "PPA거래량","PR","매출"));
        map.put(ExcelConstant.BODY,bodyList);
        return map;

    }

}
