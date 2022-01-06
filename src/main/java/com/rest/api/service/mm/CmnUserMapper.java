package com.rest.api.service.mm;

 import com.rest.api.model.mm.CmnUserInsert;
 import com.rest.api.model.mm.CmnUserUpdate;
 import com.rest.api.model.mm.CmnUserVO;
 import org.apache.ibatis.annotations.Mapper;

 import java.util.List;


@Mapper
public interface CmnUserMapper {
    List<CmnUserVO> userList(CmnUserVO cmnUserVO) throws Exception;
    List<CmnUserVO> userListExcel(CmnUserVO cmnUserVO) throws Exception;
    int userPassSet(CmnUserInsert cmnUserInsert);

    int userUpdate(CmnUserUpdate cmnUserUpdate);

    CmnUserVO pswdChk(CmnUserVO securityVO);

    int join(CmnUserInsert cmnUserInsert);

    int userDelete(CmnUserVO cmnUserVO);

    CmnUserVO userSeq(String userSeq);

}
