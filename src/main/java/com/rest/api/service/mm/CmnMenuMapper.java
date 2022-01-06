package com.rest.api.service.mm;

import com.rest.api.model.mm.*;
import org.apache.ibatis.annotations.Mapper;

import java.util.List;


@Mapper
public interface CmnMenuMapper {
    List<CmnMenuVO> authMenu(String MenuRoleId) throws Exception;
    List<CmnMenuRoleMngVO> menuRoleMng() throws Exception;
    int menuRoleMngUpdate(CmnMenuRoleMngUpdate cmnMenuRoleMngUpdate) throws Exception;
    int menuRoleMngInsert(CmnMenuRoleMngInsert cmnMenuRoleMngInsert) throws Exception;
    int menuRoleMngDelete(CmnMenuRoleMngVO cmnMenuRoleMngVO) throws Exception;
    List<CmnMenuRoleTreeVO> authMenuRole(String menuRoleId) throws Exception;
    int authMenuRoleDelete(String menuRoleId) throws Exception;
    int cmnMenuRoleInsert(CmnMenuRoleInsert cmnMenuRoleInsert) throws Exception;
    int menuLangUpdate(CmnMenuLangInsert cmnMenuLangInsert) throws Exception;

  }
