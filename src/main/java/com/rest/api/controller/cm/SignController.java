package com.rest.api.controller.cm;

import com.rest.api.advice.exception.CLoginSigninFailedException;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.common.CmnCmcdVO;
import com.rest.api.model.common.CommonVO;
import com.rest.api.model.mm.CmnInqRoleVO;
import com.rest.api.model.mm.CmnMenuRoleMngVO;
import com.rest.api.model.mm.CmnMenuVO;
import com.rest.api.model.mm.MenuTreeVO;
import com.rest.api.model.response.CommonResult;
import com.rest.api.model.response.SingleResult;
import com.rest.api.model.security.SecurityVO;
import com.rest.api.service.ResponseService;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.mm.CmnInqService;
import com.rest.api.service.mm.CmnMenuService;
import com.rest.api.service.security.SecurityService;
import io.swagger.annotations.ApiOperation;
import io.swagger.annotations.ApiParam;
import lombok.RequiredArgsConstructor;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.servlet.ModelAndView;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;



@RequiredArgsConstructor
@RestController
@Controller
public class SignController {
    private final JwtTokenProvider jwtTokenProvider;
    private final ResponseService responseService;
    private final PasswordEncoder passwordEncoder;
    @Autowired
    private SecurityService securityService;

    @Autowired
    private CmnMenuService cmnMenuService;

    @Autowired
    private CommonService commonService;

    @Autowired
    private CmnInqService cmnInqService;


    @ApiOperation(value = "로그인", notes = "회원 로그인을 한다.")
    @PostMapping(value = "/cm/signin")
    public SingleResult<Map> signin(@ApiParam(value = "회원ID", required = true) @RequestParam String userId,
                                    @ApiParam(value = "비밀번호", required = true) @RequestParam String password) throws Exception {

        SecurityVO userInfo =  securityService.login(userId);
        if(userInfo == null){
            throw new CLoginSigninFailedException();
        }

        if (!passwordEncoder.matches(password, userInfo.getPassword())){
            throw new CLoginSigninFailedException();
        }

        HashMap map= new HashMap();
        MenuTreeVO menuRoles = cmnMenuService.authMenu(userInfo.getMenuRoleId());
        CmnCmcdVO cmnCmcdVO =  new CmnCmcdVO();
        List<CmnCmcdVO> codes = commonService.codeMainList(cmnCmcdVO);

        List<CmnMenuRoleMngVO> menuRoleMngList = cmnMenuService.menuRoleMng();
        List<CmnInqRoleVO> inqRoleList = cmnInqService.inqRoleList();

        map.put("X-AUTH-TOKEN", jwtTokenProvider.createToken(userInfo.getUserSeq()));
        map.put("AUTH-MENU", menuRoles);
        map.put("CMN-CODES", codes);
        map.put("MENU-ROLE",menuRoleMngList);
        map.put("INQ-ROLE",inqRoleList);
        map.put("USER",userInfo);
        return responseService.getSingleResult(map);
    }

    @ApiOperation(value = "토큰 발급", notes = "토큰을 발급받는다.")
    @PostMapping(value = "/cm/getToken")
    public SingleResult<Map> getToken(@ApiParam(value = "회원ID", required = true) @RequestParam String userId,
                                    @ApiParam(value = "비밀번호", required = true) @RequestParam String password) throws Exception {

        SecurityVO userInfo =  securityService.login(userId);
        if(userInfo == null){
            throw new CLoginSigninFailedException();
        }

        if (!passwordEncoder.matches(password, userInfo.getPassword())){
            throw new CLoginSigninFailedException();
        }

        HashMap map= new HashMap();

        map.put("AccessToken", jwtTokenProvider.createToken(userInfo.getUserSeq()));

        return responseService.getSingleResult(map);
    }

    @ApiOperation(value = "start", notes = "API")
    @GetMapping(value ="/")
    public String hello() {
        return "START";
    }


    @ApiOperation(value = "healthz", notes = "API")
    @GetMapping(value ="/healthz")
    public CommonResult healthz() {
        CommonResult result = new CommonResult();
        result.setSuccess(true);
        result.setCode(200);
        result.setMsg("OK");
        return result;
    }

}
