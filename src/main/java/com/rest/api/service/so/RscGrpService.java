package com.rest.api.service.so;


import com.rest.api.advice.exception.CDuplicateException;
import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.config.constant.ExcelConstant;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.common.CommonVO;
import com.rest.api.model.pp.PrjSiteVO;
import com.rest.api.model.so.*;
import com.rest.api.model.wo.*;
import com.rest.api.service.common.CommonMapper;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import javax.validation.Valid;
import java.util.*;


@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class RscGrpService {


    @Autowired
    private RscGrpMapper mapper;

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    @Autowired
    private CommonMapper commonmapper;


    public List<RscGrpVO> rscGrps(@Valid RscGrpVO rscGrpVO) throws Exception {
        List<RscGrpVO> rscGrpList = mapper.rscGrps(rscGrpVO);


        return rscGrpList;
    }


    public Map<String, Object> rscGrpsExcel(@Valid RscGrpVO rscGrpVO) throws Exception {
        List<RscGrpVO> rscGrpList = mapper.rscGrpsExcel(rscGrpVO);

        List<List<String>> bodyList = new ArrayList<List<String>>();

        for(int i  = 0 ; i < rscGrpList.size() ; i++){
            List<String> body = new ArrayList<String>();
            body.add(rscGrpList.get(i).getRscGrpId());
            body.add(rscGrpList.get(i).getRscGrpName());
            body.add(rscGrpList.get(i).getTrdbStrtDt() +"-"+ rscGrpList.get(0).getTrdbEndDt());
            body.add(rscGrpList.get(i).getRscStatCd());

            bodyList.add(body);

        }

        Map<String, Object> map = new HashMap<>();
        map.put(ExcelConstant.FILE_NAME, "rscGrps_excel");
        map.put(ExcelConstant.HEAD, Arrays.asList("자원그룹코드", "자원그룹명", "거래가능 기간","자원상태"));
        map.put(ExcelConstant.BODY,bodyList);
        return map;
    }


    public Map siteRscGrpsList(@Valid SiteRscGrpVO siteRscGrpVO) throws Exception {
        HashMap map = new HashMap();

        String[]  sites  = jwtTokenProvider.getSiteAuth();
        String  userSeq = jwtTokenProvider.resolveTokenUser();

        if(sites.length > 0){
            siteRscGrpVO.setSiteIds(sites);
        }

        siteRscGrpVO.setUserSeq(userSeq);

        List<SiteRscGrpVO> siteRscGrpsList = mapper.siteRscGrpsList(siteRscGrpVO);

        map.put("mainData", siteRscGrpsList);
        RscGrpVO rscGrpVO = new RscGrpVO();

        List<RscGrpVO> rscGrpList = mapper.rscGrps(rscGrpVO);
        map.put("rscGrpList", rscGrpList);

        CommonVO commonVO= new CommonVO();
        String[] grpCds = {"CDK-00011","CDK-00005"};
        commonVO.setGrpCds(grpCds);
        List<CommonVO> codeList = commonmapper.codeList(commonVO);
        map.put("codeData",codeList);

        return map;
    }
    public List<RscGrpUserHisVO> rscGrpUserHisList(@Valid RscGrpUserHisVO rscGrpUserHisVO) throws Exception {

        List<RscGrpUserHisVO> rscGrpUserHisList = mapper.rscGrpUserHisList(rscGrpUserHisVO);

      /*  if(rscGrpUserHisList.size() == 0){
            throw new CResourceNotExistException();
        }*/

        return rscGrpUserHisList;
    }

    public List<RscGrpUserHisVO> rscGrpUserList() throws Exception {

        List<RscGrpUserHisVO> rscGrpUserList = mapper.rscGrpUserList();

     /*   if(rscGrpUserList.size() == 0){
            throw new CResourceNotExistException();
        }*/

        return rscGrpUserList;
    }

    public boolean rscGrpInsert(@Valid RscGrpInsert rscGrpInsert) throws Exception {

        int chkCnt  = mapper.rscGrpIdChk(rscGrpInsert.getRscGrpId());

        if(chkCnt > 0 ){
           throw new CDuplicateException();
        }
        int cnt = mapper.rscGrpInsert(rscGrpInsert);
        if(cnt == 0){
            throw new Exception();
        }

        return true;
    }

    public boolean rscGrpUpdate(@Valid RscGrpUpdate rscGrpUpdate) throws Exception {

        int cnt = mapper.rscGrpUpdate(rscGrpUpdate);
        if(cnt == 0){
            throw new Exception();
        }


        return true;
    }

    public boolean rscGrpDelete(@Valid RscGrpDelete rscGrpDelete) throws Exception {

        int cnt = mapper.rscGrpDelete(rscGrpDelete);
        if(cnt == 0){
            throw new Exception();
        }


        return true;
    }
    public boolean rscGrpUserHisUpdate(@Valid RscGrpUserUpdate rscGrpUserUpdate) throws Exception {

        int cnt = mapper.rscGrpUserHisUpdate(rscGrpUserUpdate);
        if(cnt == 0){
            throw new Exception();
        }


        return true;
    }



}
