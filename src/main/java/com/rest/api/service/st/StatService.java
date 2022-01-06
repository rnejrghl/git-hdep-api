package com.rest.api.service.st;

import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.service.st.StatMapper;
import com.rest.api.config.constant.ExcelConstant;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.st.*;
import com.rest.api.model.security.SecurityVO;
import com.rest.api.model.wo.MthWkodVO;
import com.rest.api.service.common.CommonMapper;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.security.SecurityMapper;
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

@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class StatService {

    @Autowired
    private StatMapper statmapper;

    @Autowired
    private CommonMapper commonmapper;

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    @Autowired
    private SecurityMapper securityMapper;

    @Autowired
    private CommonService commonService;

    public Map<String, Object> genStatListExcel(@Valid GenGraphVO genGraphVO) throws Exception {

        List<GenGraphsVO> genExcelList = statmapper.genStatListExcel(genGraphVO);
        if (genExcelList.size() == 0) {
            throw new CResourceNotExistException();
        }

        List<List<String>> bodyList = new ArrayList<List<String>>();

        for (int i = 0; i < genExcelList.size(); i++) {
            List<String> body = new ArrayList<String>();
            body.add(genExcelList.get(i).getSiteId());
            body.add(genExcelList.get(i).getUserName());
            body.add(genExcelList.get(i).getRescGubn());
            body.add(genExcelList.get(i).getNowDate());
            body.add(genExcelList.get(i).getInstCapa());
            body.add(genExcelList.get(i).getLastTotPwAmt());
            body.add(genExcelList.get(i).getGoalGenrCapa());
            body.add(genExcelList.get(i).getNowTotPwAmt());
            body.add(genExcelList.get(i).getIvtEfficiency());
            body.add(genExcelList.get(i).getEnergyYield());
            body.add(genExcelList.get(i).getWeather());
            body.add(genExcelList.get(i).getTemperature());
            bodyList.add(body);
        }

        Map<String, Object> map = new HashMap<>();
        map.put(ExcelConstant.FILE_NAME, "gen_stat_excel");
        map.put(ExcelConstant.HEAD,
                Arrays.asList("SITE ID", "UserName", "Type", "Time", "Capacity (kWh)", "Previous Year (kWh)",
                        "KPI (kWh)", "Performance (kWh)", "IVT efficiency (%)", "Energy Yield (kWh/kWp)", "Weather",
                        "Temperature(C)"));
        map.put(ExcelConstant.BODY, bodyList);
        return map;
    }

    public Map genStatList(@Valid GenListVO genListVO) throws Exception {

        HashMap map = new HashMap();

        Integer pagePer = 10;
        Integer start = (genListVO.getPage() - 1) * pagePer;
        genListVO.setPageStart(start);
        genListVO.setPagePer(pagePer);

        List<GenGraphsVO> genList = statmapper.genStatList(genListVO);
        GenCntVO genCnt = statmapper.genStatCnt(genListVO);
        genCnt.setPage(genListVO.getPage());

        map.put("genList", genList);
        map.put("genCnt", genCnt);

        return map;
    }
}
