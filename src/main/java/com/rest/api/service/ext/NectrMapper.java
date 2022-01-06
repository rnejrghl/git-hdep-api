package com.rest.api.service.ext;



import org.apache.ibatis.annotations.Mapper;
import org.apache.ibatis.annotations.Param;
import com.rest.api.model.ext.NectrBocResultVO;
import com.rest.api.model.ext.NectrHpcResultVO;
import com.rest.api.model.ext.NectrResultVO;


@Mapper
public interface NectrMapper {
	
    int checkSite(String siteId) throws Exception;
    
    NectrBocResultVO getBatteryChart(@Param("siteId") String siteId,@Param("inputDate") String inputDate) throws Exception;
    
    NectrHpcResultVO getProductionsChart(@Param("siteId") String siteId,@Param("inputDate") String inputDate) throws Exception;

    boolean nectrResultInsert(NectrResultVO nectrResultVO) throws Exception;

    String getHistId() throws Exception;

}
