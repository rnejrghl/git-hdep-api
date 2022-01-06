package com.rest.api.service.mm;


import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.common.CommonVO;
import com.rest.api.model.mm.*;
import com.rest.api.service.common.CommonMapper;
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
public class CmnGtwyService {


    @Autowired
    private CmnGtwyMapper mapper;

    @Autowired
    private CommonMapper commonmapper;

    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    public Map gtwyGroupList() throws Exception {
        HashMap map= new HashMap();

        List<CmnGtwyVO> gtwyGroupList = mapper.gtwyGroupList();

        CommonVO commonVO= new CommonVO();
        String[] grpCds = {"CDK-00006","CDK-00007","CDK-00008"};
        commonVO.setGrpCds(grpCds);
        List<CommonVO> codeList = commonmapper.codeList(commonVO);

        map.put("gtwyGroupList", gtwyGroupList);
        map.put("ptnMapCdData", codeList);

        return map;
    }

    public List<CmnGtwyDvceVO> gtwyDvceList(CmnGtwyDvceVO cmnGtwyDvceVO) throws Exception {

        List<CmnGtwyDvceVO> gtwyDvceList = mapper.gtwyDvceList(cmnGtwyDvceVO);
     /*   if(gtwyDvceList.size() == 0){
            throw new CResourceNotExistException();
        }*/

        return gtwyDvceList;
    }


    public Map gtwyGrpInsert(@Valid CmnGtwyInsert cmnGtwyInsert) throws Exception {
        mapper.gtwyGrpInsert(cmnGtwyInsert);
        HashMap map= new HashMap();
        for(int i = 0 ;  i< cmnGtwyInsert.getEqmtGubnCds().size();i++){
            if(!"".equals(cmnGtwyInsert.getEqmtGubnCds().get(i))){
                cmnGtwyInsert.setEqmtGubnCd(cmnGtwyInsert.getEqmtGubnCds().get(i));
                try{
                    mapper.gtwyGrpDvceInsert(cmnGtwyInsert);
                }catch (Exception e){
                    System.out.println(e);
                }


            }

        }

        map.put("gtwyId", cmnGtwyInsert.getGtwyId());
        return map;
    }

    public boolean gtwyDvceUpdate(@Valid CmnGtwyDvceUpdate cmnGtwyDvceUpdate) throws Exception {

        // 로직처리
        mapper.gtwyDvceUpdate(cmnGtwyDvceUpdate);

        return true;
    }

    public boolean pntMapInsert(PtnMapInsertVO ptnMapInsertVO) throws Exception {

        CmnGtwyDvceVO cmnGtwyDvceVO = new CmnGtwyDvceVO();
        cmnGtwyDvceVO.setEqmtGubnCd(ptnMapInsertVO.getCd());
        cmnGtwyDvceVO.setGtwyId(ptnMapInsertVO.getGtwyId());
        String  userSeq = jwtTokenProvider.resolveTokenUser();

        List<CmnDvceVO> pntMapList = mapper.pntMapList(cmnGtwyDvceVO);
        for(CmnDvceVO cmnDvceVO :pntMapList){

            CmnGtwyDvceInsert cmnGtwyDvceInsert = new CmnGtwyDvceInsert();
            cmnGtwyDvceInsert.setUserSeq(userSeq);
            cmnGtwyDvceInsert.setDvceId(cmnDvceVO.getDvceId());
            cmnGtwyDvceInsert.setGtwyId(ptnMapInsertVO.getGtwyId());
            mapper.gtwyDvceInsert(cmnGtwyDvceInsert);
        }

        return true;
    }


//    public boolean gtwyDvceDelete(@Valid CmnGtwyDvceVO cmnGtwyDvceVO) throws Exception {
//
//        // 로직처리
//        mapper.gtwyDvceDelete(cmnGtwyDvceVO);
//
//        return true;
//    }





}
