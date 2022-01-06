package com.rest.api.service.mm;

import com.rest.api.model.mm.*;
import com.rest.api.model.mm.CmnNotiUpdate;
import org.apache.ibatis.annotations.Mapper;

import java.util.List;

@Mapper
public interface CmnSendHistMapper {
  List<SendHistVO> sendHists(SendHistVO sendHistVO) throws Exception;

  SendHistCntVO sendHistsCnt(SendHistVO sendHistVO) throws Exception;

  int notiInsert(CmnNotiUpdate cmnNotiUpdate) throws Exception;

  int notiUpdate(CmnNotiUpdate cmnNotiUpdate) throws Exception;

  int notiDelete(CmnNotiDelete cmnNotiDelete) throws Exception;

  List<CmnMenuVO> authMenu(String MenuRoleId) throws Exception;

  int menuRoleMngUpdate(CmnMenuRoleMngUpdate cmnMenuRoleMngUpdate) throws Exception;

}
