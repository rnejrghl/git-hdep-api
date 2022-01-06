package com.rest.api.service.mm;


import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.mm.*;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import javax.validation.Valid;
import java.util.ArrayList;
import java.util.List;


@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class CmnMenuService {



    @Autowired
    private CmnMenuMapper cmnMenuMapper;


    @Autowired
    private JwtTokenProvider jwtTokenProvider;

    public MenuTreeVO authMenu(@Valid String menuRoleId) throws Exception {

        List<CmnMenuVO> authMenuList = cmnMenuMapper.authMenu(menuRoleId);
        List<CmnMenuVO> listTreeDeph1 = new ArrayList<>();
        List<CmnMenuVO> listTreeDeph2 = new ArrayList<>();
        List<CmnMenuVO> subDeph2 = new ArrayList<>();
        for(int i = 0 ; i <authMenuList.size() ; i ++){
            if("1".equals(authMenuList.get(i).getLevel())){
                listTreeDeph1.add(authMenuList.get(i));
            }
            if("2".equals(authMenuList.get(i).getLevel())){
                listTreeDeph2.add(authMenuList.get(i));
            }

        }
        for(int i = 0 ; i <listTreeDeph1.size() ; i ++){
            subDeph2 = new ArrayList<>();
            for(int k = 0 ; k <listTreeDeph2.size() ; k ++) {
                if (listTreeDeph1.get(i).getMenuId().equals(listTreeDeph2.get(k).getUperMenuId())) {
                    subDeph2.add(listTreeDeph2.get(k));
                }
            }
            listTreeDeph1.get(i).setSubDeph(subDeph2);
        }

        MenuTreeVO menuTree = new MenuTreeVO();
        menuTree.setMainDeph(listTreeDeph1);

        return menuTree;
    }


    public List<CmnMenuRoleMngVO> menuRoleMng() throws Exception {

        List<CmnMenuRoleMngVO> menuRoleMngList = cmnMenuMapper.menuRoleMng();

        return menuRoleMngList;
    }



    public boolean menuRoleMngUpdate(@Valid CmnMenuRoleMngUpdate cmnMenuRoleMngUpdate) throws Exception {

        cmnMenuMapper.menuRoleMngUpdate(cmnMenuRoleMngUpdate);
        return true;
    }


    public boolean menuRoleMngInsert(@Valid CmnMenuRoleMngInsert cmnMenuRoleMngInsert) throws Exception {

        cmnMenuMapper.menuRoleMngInsert(cmnMenuRoleMngInsert);
        return true;
    }


    public boolean menuRoleMngDelete(@Valid CmnMenuRoleMngVO cmnMenuRoleMngVO) throws Exception {

        cmnMenuMapper.menuRoleMngDelete(cmnMenuRoleMngVO);
        return true;
    }



    public MenuTreeRoleVO authMenuRole(@Valid String menuRoleId) throws Exception {


        List<CmnMenuRoleTreeVO> authMenuRoleList = cmnMenuMapper.authMenuRole(menuRoleId);
        if(authMenuRoleList.size() == 0){
            throw new CResourceNotExistException();
        }


        List<CmnMenuRoleTreeVO> listTreeDeph1 = new ArrayList<>();
        List<CmnMenuRoleTreeVO> listTreeDeph2 = new ArrayList<>();
        List<CmnMenuRoleTreeVO> subDeph2 = new ArrayList<>();
        for(int i = 0 ; i <authMenuRoleList.size() ; i ++){
            if("1".equals(authMenuRoleList.get(i).getLevel())){
                listTreeDeph1.add(authMenuRoleList.get(i));
            }
            if("2".equals(authMenuRoleList.get(i).getLevel())){
                listTreeDeph2.add(authMenuRoleList.get(i));
            }

        }


        for(int i = 0 ; i <listTreeDeph1.size() ; i ++){
            subDeph2 = new ArrayList<>();
            for(int k = 0 ; k <listTreeDeph2.size() ; k ++) {
                if (listTreeDeph1.get(i).getMenuId().equals(listTreeDeph2.get(k).getUperMenuId())) {
                    subDeph2.add(listTreeDeph2.get(k));
                }
            }
            listTreeDeph1.get(i).setSubDeph(subDeph2);
        }

        MenuTreeRoleVO menuTreeRole = new MenuTreeRoleVO();
        menuTreeRole.setMainDeph(listTreeDeph1);

        return menuTreeRole;
    }
    public boolean mauthMenuRoleUpdate(@Valid String menuRoleId, @Valid List<CmnMenuRoleInsert> cmnMenuRoleInsert) throws Exception {

        String  userSeq = jwtTokenProvider.resolveTokenUser();

        cmnMenuMapper.authMenuRoleDelete(menuRoleId);

        for(int i = 0 ; i  < cmnMenuRoleInsert.size(); i++){
          //  if("Y".equals(cmnMenuRoleInsert.get(i).getMenuChk())){
                CmnMenuRoleInsert cmnMenuRole = new CmnMenuRoleInsert();
                cmnMenuRole.setMenuRoleId(menuRoleId);
                cmnMenuRole.setMenuId(cmnMenuRoleInsert.get(i).getMenuId());
                cmnMenuRole.setUseYn(cmnMenuRoleInsert.get(i).getUseYn());
                cmnMenuRole.setInqYn(cmnMenuRoleInsert.get(i).getInqYn());
                cmnMenuRole.setRegYn(cmnMenuRoleInsert.get(i).getRegYn());
                cmnMenuRole.setModYn(cmnMenuRoleInsert.get(i).getModYn());
                cmnMenuRole.setDelYn(cmnMenuRoleInsert.get(i).getDelYn());
                cmnMenuRole.setLastChngUseq(userSeq);
                CmnMenuLangInsert cmnMenuLangInsert = new CmnMenuLangInsert();
                cmnMenuLangInsert.setMenuId(cmnMenuRoleInsert.get(i).getMenuId());
                cmnMenuLangInsert.setLangCd("KO");
                if(cmnMenuRoleInsert.get(i).getMenuKoName() != null){
                    cmnMenuLangInsert.setMenuName(cmnMenuRoleInsert.get(i).getMenuKoName());
                    cmnMenuLangInsert.setLastChngUseq(userSeq);
                    cmnMenuLangInsert.setMenuRoleId(menuRoleId);
                    cmnMenuMapper.menuLangUpdate(cmnMenuLangInsert);
                }

                cmnMenuLangInsert = new CmnMenuLangInsert();
                cmnMenuLangInsert.setMenuId(cmnMenuRoleInsert.get(i).getMenuId());
                cmnMenuLangInsert.setLangCd("EN");
                if(cmnMenuRoleInsert.get(i).getMenuEnName() != null){
                    cmnMenuLangInsert.setMenuName(cmnMenuRoleInsert.get(i).getMenuEnName());
                    cmnMenuLangInsert.setLastChngUseq(userSeq);
                    cmnMenuLangInsert.setMenuRoleId(menuRoleId);
                    cmnMenuMapper.menuLangUpdate(cmnMenuLangInsert);
                }

                cmnMenuLangInsert = new CmnMenuLangInsert();
                cmnMenuLangInsert.setMenuId(cmnMenuRoleInsert.get(i).getMenuId());
                cmnMenuLangInsert.setLangCd("JP");
                if(cmnMenuRoleInsert.get(i).getMenuJpName() != null){
                    cmnMenuLangInsert.setMenuName(cmnMenuRoleInsert.get(i).getMenuJpName());
                    cmnMenuLangInsert.setLastChngUseq(userSeq);
                    cmnMenuLangInsert.setMenuRoleId(menuRoleId);
                    cmnMenuMapper.menuLangUpdate(cmnMenuLangInsert);
                }


                cmnMenuMapper.cmnMenuRoleInsert(cmnMenuRole);
       //     }

        }




        return true;
    }

}

