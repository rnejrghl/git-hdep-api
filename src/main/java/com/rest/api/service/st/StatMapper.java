package com.rest.api.service.st;

import com.rest.api.model.st.*;

import org.apache.ibatis.annotations.Mapper;

import java.util.List;

@Mapper
public interface StatMapper {
    List<GenGraphsVO> genStatListExcel(GenGraphVO genGraphVO) throws Exception;

    List<GenGraphsVO> genStatList(GenListVO genListVO) throws Exception;

    GenCntVO genStatCnt(GenListVO genListVO) throws Exception;

}
