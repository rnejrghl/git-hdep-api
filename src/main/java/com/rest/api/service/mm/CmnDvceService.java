package com.rest.api.service.mm;


import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.model.mm.*;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import javax.validation.Valid;
import java.util.List;


@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class CmnDvceService {


    @Autowired
    private CmnDvceMapper mapper;



    public List<CmnDvceVO> dvceList(@Valid CmnDvceVO CmnDvceVO) throws Exception {

        List<CmnDvceVO> dvceList = mapper.dvceList(CmnDvceVO);
    /*    if(dvceList.size() == 0){
            throw new CResourceNotExistException();
        }*/

        return dvceList;
    }

    public List<CmnDvceCalcVO> dvceCalcList(@Valid CmnDvceCalcVO cmnDvceClacVO) throws Exception {

        List<CmnDvceCalcVO> dvceCalcList = mapper.dvceCalcList(cmnDvceClacVO);
       /* if(dvceCalcList.size() == 0){
            throw new CResourceNotExistException();
        }*/

        return dvceCalcList;
    }
    
    public boolean dvceInsert(@Valid CmnDvceInsert cmnDvceInsert) throws Exception {
    // 로직처리
        int cnt = mapper.dvceInsert(cmnDvceInsert);
        if(cnt == 0){
            throw new Exception();
        }
        return true;
    }

    public boolean dvceCalcDelete(@Valid CmnDvceCalcVO cmnDvceCalcVO) throws Exception {
        // 로직처리
        int cnt = mapper.dvceCalcDelete(cmnDvceCalcVO);
        if(cnt == 0){
            throw new Exception();
        }

        return true;
    }

    public boolean dvceUpdate(@Valid List<CmnDvceUpdate> cmnDvceUpdate, String userSeq) throws Exception {
        // 로직처리

        for(int  i = 0 ; i < cmnDvceUpdate.size();i++){
            cmnDvceUpdate.get(i).setUserSeq(userSeq);
            mapper.dvceUpdate(cmnDvceUpdate.get(i));
        }


        return true;
    }

    public boolean dvceCalcInsert(@Valid List<CmnDvceCalcInsert> cmnDvceCalcInsert, String userSeq) throws Exception {

         for(int i = 0 ; i < cmnDvceCalcInsert.size(); i++){
             cmnDvceCalcInsert.get(i).setUserSeq(userSeq);
             mapper.dvceCalcInsert(cmnDvceCalcInsert.get(i));
         }
        return true;
    }

    public boolean dvceCalcUpdate(@Valid CmnDvceCalcVO cmnDvceCalcVO) throws Exception {
        // 로직처리
        int cnt = mapper.dvceCalcUpdate(cmnDvceCalcVO);
        if(cnt == 0){
            throw new Exception();
        }
        return true;
    }


    public List<CmnDvceAlrmVO> dvceAlrmsList(@Valid CmnDvceAlrmVO cmnDvceAlrmVO) throws Exception {

        List<CmnDvceAlrmVO> dvceAlrmsList = mapper.dvceAlrmsList(cmnDvceAlrmVO);


        return dvceAlrmsList;
    }

    public List<CmnDvalCalcVO> dvalCalcList(@Valid CmnDvalCalcVO cmnDvalCalcVO) throws Exception {

        List<CmnDvalCalcVO> dvalCalcList = mapper.dvalCalcList(cmnDvalCalcVO);


        return dvalCalcList;
    }


    public boolean dvalCalcInsert(@Valid List<CmnDvalCalcInsert> cmnDvalCalcInsert, String userSeq) throws Exception {
        // 로직처리

        for(int i = 0 ;  i < cmnDvalCalcInsert.size(); i++){
            cmnDvalCalcInsert.get(i).setUserSeq(userSeq);
            mapper.dvalCalcInsert(cmnDvalCalcInsert.get(i));
        }

        return true;
    }

    public boolean dvalCalcDelete(@Valid CmnDvalCalcVO cmnDvalCalcVO) throws Exception {
        // 로직처리
        int cnt = mapper.dvalCalcDelete(cmnDvalCalcVO);
        if(cnt == 0){
            throw new Exception();
        }
        return true;
    }

    public boolean dvalCalcUpdate(@Valid List<CmnDvalCalcVO> cmnDvalCalcVO, String userSeq) throws Exception {


        for(int i = 0 ;  i < cmnDvalCalcVO.size(); i++){
            cmnDvalCalcVO.get(i).setUserSeq(userSeq);
            mapper.dvalCalcUpdate(cmnDvalCalcVO.get(i));
        }
        return true;
    }

    public boolean dvceAlrmUpdate(@Valid List<CmnDvceAlrmVO> cmnDvceAlrmVO, String userSeq) throws Exception {
        // 로직처리

        for(int i = 0 ;  i < cmnDvceAlrmVO.size(); i++){
            cmnDvceAlrmVO.get(i).setUserSeq(userSeq);
            mapper.dvceAlrmUpdate(cmnDvceAlrmVO.get(i));
        }
        return true;
    }

}
