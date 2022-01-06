package com.rest.api.service.mm;


import com.rest.api.model.mm.*;
import org.apache.ibatis.annotations.Mapper;

import java.util.List;


@Mapper
public interface CmnDvceMapper {
    List<CmnDvceVO> dvceList(CmnDvceVO cmnDvceVO) throws Exception;
    List<CmnDvceCalcVO> dvceCalcList(CmnDvceCalcVO cmnDvceCalcVO) throws Exception;
    List<CmnDvceAlrmVO> dvceAlrmsList(CmnDvceAlrmVO cmnDvceAlrmVO) throws Exception;
    List<CmnDvalCalcVO> dvalCalcList(CmnDvalCalcVO cmnDvalCalcVO) throws Exception;
    int dvceInsert(CmnDvceInsert cmnDvceInsert) throws Exception;
    int dvceCalcInsert(CmnDvceCalcInsert cmnDvceCalcInsert) throws Exception;
    int dvceCalcUpdate(CmnDvceCalcVO CmnDvceCalcVO) throws Exception;
    int dvceCalcDelete(CmnDvceCalcVO cmnDvceCalcVO) throws Exception;
    int dvceUpdate(CmnDvceUpdate cmnDvceUpdate) throws Exception;
    int dvalCalcInsert(CmnDvalCalcInsert cmnDvalCalcInsert) throws Exception;
    int dvalCalcDelete(CmnDvalCalcVO cmnDvalCalcVO) throws Exception;
    int dvalCalcUpdate(CmnDvalCalcVO cmnDvalCalcVO) throws Exception;
    int dvceAlrmUpdate(CmnDvceAlrmVO cmnDvceAlrmVO) throws Exception;


}
