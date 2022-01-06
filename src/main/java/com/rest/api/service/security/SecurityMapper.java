package com.rest.api.service.security;


import com.rest.api.model.security.SecurityVO;
import org.apache.ibatis.annotations.Mapper;


@Mapper
public interface SecurityMapper {
   SecurityVO userInfo(String userId);

   SecurityVO userInfoSeq(String userSeq);

}
