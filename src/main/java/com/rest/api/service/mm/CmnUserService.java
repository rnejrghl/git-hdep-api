package com.rest.api.service.mm;


import java.util.ArrayList;
import java.util.Arrays;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import javax.validation.Valid;

import com.rest.api.advice.exception.CLoginSigninFailedException;
import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.config.constant.ExcelConstant;
import com.rest.api.model.common.CommonVO;
import com.rest.api.model.mm.CmnInqRoleVO;
import com.rest.api.model.mm.CmnMenuRoleMngVO;
import com.rest.api.model.mm.CmnUserInsert;
import com.rest.api.model.mm.CmnUserUpdate;
import com.rest.api.model.mm.CmnUserVO;
import com.rest.api.service.common.CommonMapper;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;
import org.thymeleaf.util.StringUtils;

import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;


@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class CmnUserService {


    @Autowired
    private CmnUserMapper mapper;
    private final PasswordEncoder passwordEncoder;

    @Autowired
    private CommonMapper commonmapper;

    @Autowired
    private CmnInqMapper cmnInqMapper;

    @Autowired
    private CmnMenuMapper cmnMenuMapper;

    public Map userList(@Valid CmnUserVO cmnUserVO) throws Exception {
        HashMap map = new HashMap();
        List<CmnUserVO> userList = mapper.userList(cmnUserVO);

        map.put("userData", userList);
        CommonVO commonVO= new CommonVO();
        String[] grpCds = {"CDK-00017"};
        commonVO.setGrpCds(grpCds);
        List<CommonVO> codeList = commonmapper.codeList(commonVO);
        map.put("codeData",codeList);

        List<CmnMenuRoleMngVO> menuRoleMngList = cmnMenuMapper.menuRoleMng();
        map.put("menuRoleData",menuRoleMngList);

        List<CmnInqRoleVO> inqRoleList = cmnInqMapper.inqRoleList();
        map.put("inqRoleData",inqRoleList);

        return map;
    }


    public Map<String, Object> userListExcel(@Valid CmnUserVO cmnUserVO) throws Exception {

        List<CmnUserVO> userList = mapper.userListExcel(cmnUserVO);
        if(userList.size() == 0){
            throw new CResourceNotExistException();
        }
        List<List<String>> bodyList = new ArrayList<List<String>>();


        for(int i  = 0 ; i < userList.size() ; i++){
            List<String> body = new ArrayList<String>();
            body.add(userList.get(i).getUserId());
            body.add(userList.get(i).getUserLvlCd());
            body.add(userList.get(i).getUserName());
            body.add(userList.get(i).getTelNo());
            body.add(userList.get(i).getEmail());
            body.add(userList.get(i).getUseYn());
            body.add(userList.get(i).getMenuRoleId());
            body.add(userList.get(i).getInqGrpId());
            bodyList.add(body);

        }




        Map<String, Object> map = new HashMap<>();
        map.put(ExcelConstant.FILE_NAME, "user_excel");
        map.put(ExcelConstant.HEAD, Arrays.asList("사용자ID","사용자등급","사용자명","전화번호","이메일","사용여부","메뉴권한","조회권한"));
        map.put(ExcelConstant.BODY,bodyList);
        return map;
    }

    public Map user(@Valid CmnUserVO cmnUserVO) throws Exception {
        HashMap map = new HashMap();

        CommonVO commonVO= new CommonVO();
        String[] grpCds = {"CDK-00017"};
        commonVO.setGrpCds(grpCds);
        List<CommonVO> codeList = commonmapper.codeList(commonVO);
        map.put("codeData",codeList);

        List<CmnMenuRoleMngVO> menuRoleMngList = cmnMenuMapper.menuRoleMng();
        map.put("menuRoleData",menuRoleMngList);

        List<CmnInqRoleVO> inqRoleList = cmnInqMapper.inqRoleList();
        map.put("inqRoleData",inqRoleList);

        if(!StringUtils.isEmpty(cmnUserVO.getUserId())){
            List<CmnUserVO> user = mapper.userList(cmnUserVO);

            map.put("userData", user.get(0));
        }else{
            map.put("userData", "");
        }
        return map;
    }
    
    public boolean userInsert(@Valid CmnUserInsert cmnUserInsert) throws Exception {
        int cnt =  mapper.join(cmnUserInsert);
        if(cnt > 0){

            CmnUserVO cmnUserVo = new CmnUserVO();
            cmnUserVo.setUserId(cmnUserInsert.getUserId());

            List<CmnUserVO> cmnUserList=  mapper.userList(cmnUserVo);

            if(cmnUserList.size() > 0){
                cmnUserInsert.setUserSeq(cmnUserList.get(0).getUserSeq());
            }

            String enPswd = passwordEncoder.encode(cmnUserInsert.getUserId()+"!");
            cmnUserInsert.setPswd(enPswd);
            mapper.userPassSet(cmnUserInsert);

        }
        return true;
    }

    public boolean userDelete(@Valid CmnUserVO cmnUserVO) throws Exception {
        mapper.userDelete(cmnUserVO);
        return true;
    }

    public boolean userUpdate(@Valid CmnUserUpdate cmnUserUpdate) throws Exception {

       /* if(!StringUtils.isEmpty(cmnUserUpdate.getNewPswd())){
            String enNewPswd = passwordEncoder.encode(cmnUserUpdate.getNewPswd());
            cmnUserUpdate.setPswd(enNewPswd);
        }*/

        mapper.userUpdate(cmnUserUpdate);
        return true;
    }
    public String pswdChk(CmnUserVO cmnUserVO){

        CmnUserVO userInfo =  mapper.pswdChk(cmnUserVO);
        if(userInfo == null){
            throw new CLoginSigninFailedException();
        }

        if (!passwordEncoder.matches(cmnUserVO.getPswd(), userInfo.getPswd())){
            throw new CLoginSigninFailedException();
        }

        return "Y";
    }

    public List<CmnUserVO> findUser(CmnUserVO cmnUserVO) throws Exception {
        List<CmnUserVO> userList = mapper.userList(cmnUserVO);

        if(userList.size() == 0){
            throw new CResourceNotExistException();
        }
        return userList;
    }
    
}
