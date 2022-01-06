package com.rest.api.service.ext;



import java.util.List;

import org.apache.ibatis.annotations.Mapper;
import org.apache.ibatis.annotations.Param;
import com.rest.api.model.ext.NectrBocResultVO;
import com.rest.api.model.ext.NectrHpcResultVO;
import com.rest.api.model.ext.PdResultVO;


@Mapper
public interface PdMapper {
	
    int insertCurrentData(PdResultVO pdResultVO) throws Exception;       
    
    int insertForcastingData(List<PdResultVO> pdResultListVO) throws Exception;       

    
}
