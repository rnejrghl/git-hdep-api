package com.rest.api.service.mm;


import com.rest.api.advice.exception.CCompletionException;
import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.mm.*;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import javax.validation.Valid;
import java.util.HashMap;
import java.util.List;
import java.util.Map;


@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class CmnInqService {


    @Autowired
    private CmnInqMapper mapper;

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    public List<CmnInqRoleVO> inqRoleList() throws Exception {

        List<CmnInqRoleVO> inqRoleList = mapper.inqRoleList();


        return inqRoleList;
    }

    public List<CmnInqRoleVO> inrlSiteList(CmnInqRoleVO cmnInqRoleVO) throws Exception {

        List<CmnInqRoleVO> inrlSiteList = mapper.inrlSiteList(cmnInqRoleVO);

        return inrlSiteList;
    }

    public List<CmnInqRoleVO> prjSiteList(CmnInqRoleVO cmnInqRoleVO) throws Exception {

        List<CmnInqRoleVO> prjSiteList = mapper.prjSiteList(cmnInqRoleVO);

        return prjSiteList;
    }

    public Map manageDeveloperOption(CmnInqRoleVO cmnInqRoleVO) throws Exception {

        HashMap map= new HashMap();

        List<CmnInqRoleVO> inrlSiteList = mapper.inrlSiteList(cmnInqRoleVO);
        List<CmnInqRoleVO> prjSiteList = mapper.prjSiteList(cmnInqRoleVO);
        map.put("prjSiteList", prjSiteList);
        map.put("inrlSiteList", inrlSiteList);

        return map;
    }

    
    public boolean inqRoleInsert(@Valid CmnInqRoleInsert cmnInqRoleInsert) throws Exception {
    // 로직처리
        int cnt = mapper.inqRoleInsert(cmnInqRoleInsert);

        return true;
    }

    public boolean inqRoleDelete(@Valid CmnInqRoleInsert cmnInqRoleInsert) throws Exception {
        // 로직처리


        String inqRoleYn = mapper.inqGrpYn(cmnInqRoleInsert.getInqGrpId());

        if("Y".equals(inqRoleYn)){
            throw new CCompletionException();
        }

        int cnt = mapper.inqRoleDelete(cmnInqRoleInsert.getInqGrpId());
        if(cnt == 0){
            return false;
        }

        mapper.inqGrpRoleDelete(cmnInqRoleInsert.getInqGrpId());
        return true;
    }

    public boolean inrlSiteInsert(@Valid List<CmnInrlSiteInsert> cmnInrlSiteInsertList) throws Exception {

        String  userSeq = jwtTokenProvider.resolveTokenUser();

        CmnInqRoleVO cmnInqRoleVO = new CmnInqRoleVO();
        cmnInqRoleVO.setInqGrpId(cmnInrlSiteInsertList.get(0).getInqGrpId());
        cmnInqRoleVO.setLastChngUseq(userSeq);
        mapper.inrlSiteDelete(cmnInqRoleVO);


        //inqGrpId
        // 로직처리
        for (CmnInrlSiteInsert cmnInrlSiteInsert :cmnInrlSiteInsertList){
            if(cmnInrlSiteInsert.getSiteId() != null && !"".equals(cmnInrlSiteInsert.getSiteId()) ){
                cmnInrlSiteInsert.setLastChngUseq(userSeq);
                mapper.inrlSiteInsert(cmnInrlSiteInsert);
            }
        }

        return true;
    }



}
