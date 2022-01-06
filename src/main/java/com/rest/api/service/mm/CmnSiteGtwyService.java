package com.rest.api.service.mm;


import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.mm.*;
import com.rest.api.model.pp.ContractPlanVO;
import com.rest.api.model.so.RscGrpUserInsert;
import com.rest.api.service.pp.PrjSiteMapper;
import com.rest.api.service.so.RscGrpMapper;
import com.rest.api.util.DateUtil;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import javax.validation.Valid;
import java.text.DateFormat;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.*;


@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class CmnSiteGtwyService {


    @Autowired
    private CmnSiteGtwyMapper mapper;

    @Autowired
    private CmnInqMapper cmnInqMapper;

    @Autowired
    private CmnGtwyMapper cmnGtwymapper;

    @Autowired
    private PrjSiteMapper prjSiteMapper;

    @Autowired
    private RscGrpMapper rscGrpMapper;

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    public Map siteGtwyList() throws Exception {
        HashMap map = new HashMap();


        List<CmnSiteGtwyVO> siteGtwyList = mapper.siteGtwyList();

        map.put("mainData",siteGtwyList);

        List<CmnInqRoleVO> inqRoleList = cmnInqMapper.inqRoleList();
        map.put("inqRoleData",inqRoleList);

        List<CmnGtwyVO> gtwyGroupList = cmnGtwymapper.gtwyGroupList();
        map.put("gtwyGroupData",gtwyGroupList);
        return map;
    }

    public Map siteInfo(CmnSiteGtwyVO cmnSiteGtwyVO ) throws Exception {
        HashMap map = new HashMap();

        List<CmnSiteGtwyVO> siteInfo = mapper.siteInfo(cmnSiteGtwyVO);

        List<RscGrpVO> rscGrpList = mapper.rscGrpList();
        List<CmnGtwyVO> cmnGtwyList = mapper.cmnGtwyList();
        CmnSiteGtwyInfoVO cmnSiteGtwyInfoVO = new CmnSiteGtwyInfoVO();
        cmnSiteGtwyInfoVO.setSiteId(cmnSiteGtwyVO.getSiteId());

        List<CmnSiteGtwyInfoVO> cmnSiteGtwyInfo = mapper.siteGtwyInfo(cmnSiteGtwyInfoVO);

        CmnGtwyDvceVO cmnGtwyDvceVO = new CmnGtwyDvceVO();
        cmnGtwyDvceVO.setGtwyId(siteInfo.get(0).getGtwyId());
        cmnGtwyDvceVO.setSiteId(cmnSiteGtwyVO.getSiteId());
        List<CmnGtwyDvceVO> siteGtwyDvceList = mapper.siteGtwyDvceList(cmnGtwyDvceVO);


        map.put("siteInfo",siteInfo);
        map.put("cmnSiteGtwyInfo",cmnSiteGtwyInfo);
        map.put("rscGrpList",rscGrpList);
        map.put("cmnGtwyList",cmnGtwyList);
        map.put("siteGtwyDvceList",siteGtwyDvceList);

        return map;
    }
    public List<CmnGtwyDvceVO> siteGtwyDvceList(CmnGtwyDvceVO cmnGtwyDvceVO) throws Exception {

        List<CmnGtwyDvceVO> siteGtwyDvceList = mapper.siteGtwyDvceList(cmnGtwyDvceVO);


        return siteGtwyDvceList;
    }

    public boolean siteGtwyInsert(@Valid CmnSiteGtwyInsert cmnSiteGtwyInsert) throws Exception {
        // 로직처리
        int cnt = mapper.siteGtwyInsert(cmnSiteGtwyInsert);
        if(cnt == 0){
            throw new Exception();
        }
        ContractPlanVO contractPlanVO = new ContractPlanVO();
        contractPlanVO.setSiteId(cmnSiteGtwyInsert.getSiteId());
        List<ContractPlanVO> contractPlan= prjSiteMapper.contractPlan(contractPlanVO);

//        List<String> dates = DateUtil.dates(contractPlan.get(0).getCnrtStrtDt(),contractPlan.get(0).getCnrtEndDt());
//        RscGrpUserInsert rscGrpUserInsert = new RscGrpUserInsert();
//
//        rscGrpUserInsert.setLastChngUseq(cmnSiteGtwyInsert.getUserSeq());
//        rscGrpUserInsert.setSiteId(cmnSiteGtwyInsert.getSiteId());
//        rscGrpUserInsert.setRscGrpId(cmnSiteGtwyInsert.getRscGrpId());
//        rscGrpUserInsert.setUserSeq(contractPlan.get(0).getUserSeq());
//        for(String date : dates){
//            rscGrpUserInsert.setCnrtStrtDt(date);
//            rscGrpUserInsert.setCnrtEndDt(date);
//            rscGrpMapper.rscGrpUserInsert(rscGrpUserInsert);
//        }

        return true;
    }

    public boolean siteGtwyUpdate(@Valid CmnSiteGtwyUpdate cmnSiteGtwyUpdate) throws Exception {
        // 로직처리
        int cnt = mapper.siteGtwyUpdate(cmnSiteGtwyUpdate);

        return true;
    }




}
