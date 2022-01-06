package com.rest.api.controller.mm;

import com.rest.api.advice.exception.CLoginSigninFailedException;
import com.rest.api.config.security.JwtTokenProvider;
import com.rest.api.model.mm.*;
import com.rest.api.model.response.CommonResult;
import com.rest.api.model.response.ListResult;
import com.rest.api.model.response.SingleResult;
import com.rest.api.model.security.SecurityVO;
import com.rest.api.service.ResponseService;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.mm.*;
import com.rest.api.service.security.SecurityService;
import io.swagger.annotations.ApiImplicitParam;
import io.swagger.annotations.ApiImplicitParams;
import io.swagger.annotations.ApiOperation;
import io.swagger.annotations.ApiParam;
import lombok.RequiredArgsConstructor;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.servlet.ModelAndView;

import javax.validation.Valid;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

@RequiredArgsConstructor
@RestController
@Controller
@RequestMapping(value = "/mm")
public class MmController {

        private final ResponseService responseService; // 결과를 처리할 Service

        @Autowired
        private CmnUserService cmnUserService;

        @Autowired
        private CmnDvceService cmnDvceService;

        @Autowired
        private CmnInqService cmnInqService;

        @Autowired
        private JwtTokenProvider jwtTokenProvider;

        @Autowired
        private CmnGtwyService cmnGtwyService;

        @Autowired
        private CmnSiteGtwyService cmnSiteGtwyService;

        @Autowired
        private CmnMenuService cmnMenuService;

        @Autowired
        private CmnSendHistService cmnSendHistService;

        private final PasswordEncoder passwordEncoder;

        @Autowired
        private SecurityService securityService;

        @Autowired
        private CommonService commonService;

        // 사용자 시작
        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "사용자 리스트 조회", notes = "모든 사용자를 조회한다")
        @GetMapping(value = "/users")
        @ResponseBody
        public SingleResult<Map> userList(@ApiParam(value = "사용자ID") @RequestParam(required = false) String userId,
                        @ApiParam(value = "사용자등급코드") @RequestParam(required = false) String userLvlCd,
                        @ApiParam(value = "사용자명") @RequestParam(required = false) String userName,
                        @ApiParam(value = "전화번호") @RequestParam(required = false) String telNo,
                        @ApiParam(value = "이메일") @RequestParam(required = false) String email,
                        @ApiParam(value = "사용자여부") @RequestParam(required = false) String useYn,
                        @ApiParam(value = "메뉴권한ID") @RequestParam(required = false) String menuRoleId,
                        @ApiParam(value = "조회그룹ID") @RequestParam(required = false) String inqGrpId) throws Exception {

                CmnUserVO cmnUserVO = new CmnUserVO();

                cmnUserVO.setUserId(userId);
                cmnUserVO.setUserLvlCd(userLvlCd);
                cmnUserVO.setUserName(userName);
                cmnUserVO.setTelNo(telNo);
                cmnUserVO.setEmail(email);
                cmnUserVO.setUseYn(useYn);
                cmnUserVO.setInqGrpId(inqGrpId);
                cmnUserVO.setMenuRoleId(menuRoleId);

                return responseService.getSingleResult(cmnUserService.userList(cmnUserVO));

        }

        @ApiOperation(value = "사용자 리스트 조회(EXCEL)", notes = "모든 사용자를 조회한다(EXCEL)")
        @GetMapping(value = "/users/excel")
        @ResponseBody
        public ModelAndView userListExcel(@ApiParam(value = "사용자ID") @RequestParam(required = false) String userId,
                        @ApiParam(value = "사용자등급코드") @RequestParam(required = false) String userLvlCd,
                        @ApiParam(value = "사용자명") @RequestParam(required = false) String userName,
                        @ApiParam(value = "전화번호") @RequestParam(required = false) String telNo,
                        @ApiParam(value = "이메일") @RequestParam(required = false) String email,
                        @ApiParam(value = "사용자여부") @RequestParam(required = false) String useYn,
                        @ApiParam(value = "메뉴권한ID") @RequestParam(required = false) String menuRoleId,
                        @ApiParam(value = "조회그룹ID") @RequestParam(required = false) String inqGrpId) throws Exception {

                CmnUserVO cmnUserVO = new CmnUserVO();

                cmnUserVO.setUserId(userId);
                cmnUserVO.setUserLvlCd(userLvlCd);
                cmnUserVO.setUserName(userName);
                cmnUserVO.setTelNo(telNo);
                cmnUserVO.setEmail(email);
                cmnUserVO.setUseYn(useYn);
                cmnUserVO.setInqGrpId(inqGrpId);
                cmnUserVO.setMenuRoleId(menuRoleId);
                return new ModelAndView("excelXlsView", cmnUserService.userListExcel(cmnUserVO));

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "사용자 단건 조회", notes = "단건 사용자를 조회한다")
        @GetMapping(value = "/user")
        @ResponseBody
        public SingleResult<Map> user(@ApiParam(value = "사용자ID") @RequestParam(required = false) String userId)
                        throws Exception {

                CmnUserVO cmnUserVO = new CmnUserVO();

                cmnUserVO.setUserId(userId);

                return responseService.getSingleResult(cmnUserService.user(cmnUserVO));

        }

        @ApiOperation(value = "사용자 단건 등록", notes = "단일 사용자를 등록한다")
        @PostMapping(value = "/user")
        @ResponseBody
        public CommonResult userInsert(@RequestBody @Valid CmnUserInsert cmnUserInsert) throws Exception {

                cmnUserService.userInsert(cmnUserInsert);
                return responseService.getSuccessResult();

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "회원 수정", notes = "회원를 수정한다")
        @PostMapping(value = "/uUser")
        public CommonResult userUpdate(@RequestBody @Valid CmnUserUpdate cmnUserUpdate) throws Exception {

                String lastChngUseq = jwtTokenProvider.resolveTokenUser();
                cmnUserUpdate.setLastChngUseq(lastChngUseq);
                /*
                 * SecurityVO userInfo = securityService.login(cmnUserUpdate.getUserId());
                 * if(userInfo == null){ throw new CLoginSigninFailedException(); }
                 * 
                 * if (!passwordEncoder.matches(cmnUserUpdate.getPswd(),
                 * userInfo.getPassword())){ throw new CLoginSigninFailedException(); }
                 */

                cmnUserService.userUpdate(cmnUserUpdate);

                return responseService.getSuccessResult();
        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "사용자 단건 삭제", notes = "단일 사용자를 삭제한다")
        @PostMapping(value = "/user/{userSeq}")
        @ResponseBody
        public CommonResult userDel(@PathVariable String userSeq) throws Exception {

                String lastChngUseq = jwtTokenProvider.resolveTokenUser();

                CmnUserVO cmnUserVO = new CmnUserVO();
                cmnUserVO.setUserSeq(userSeq);
                cmnUserVO.setLastChngUseq(lastChngUseq);
                cmnUserService.userDelete(cmnUserVO);
                return responseService.getSuccessResult();

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "회원비번 확인", notes = "회원정보를 조회한다.")
        @GetMapping(value = "/pswdChk")
        @ResponseBody
        public SingleResult<Map> pswdChk(@ApiParam(value = "사용자ID") @RequestParam String userSeq,
                        @ApiParam(value = "비밀번호") @RequestParam String pswd) throws Exception {
                HashMap map = new HashMap();
                CmnUserVO cmnUserVO = new CmnUserVO();
                cmnUserVO.setUserSeq(userSeq);
                cmnUserVO.setPswd(pswd);
                map.put("pswdOkYn", cmnUserService.pswdChk(cmnUserVO));
                return responseService.getSingleResult(map);

        }

        // 사용자 종료

        // 디바이스 시작

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "디바이스 리스트 조회", notes = "모든 디바이스를 조회한다")
        @GetMapping(value = "/dvces")
        @ResponseBody
        public ListResult<CmnDvceVO> dvceList(
                        @ApiParam(value = "설비구분코드", required = true) @RequestParam String eqmtGubnCd,
                        @ApiParam(value = "포인트주소") @RequestParam(required = false) String pntAddr,
                        @ApiParam(value = "포인트주소명") @RequestParam(required = false) String pntAddrName,
                        @ApiParam(value = "시스템태그") @RequestParam(required = false) String sysTag) throws Exception {

                CmnDvceVO CmnDvceVO = new CmnDvceVO();
                CmnDvceVO.setEqmtGubnCd(eqmtGubnCd);
                CmnDvceVO.setPntAddr(pntAddr);
                CmnDvceVO.setPntAddrName(pntAddrName);
                CmnDvceVO.setSysTag(sysTag);

                return responseService.getListResult(cmnDvceService.dvceList(CmnDvceVO));

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "디바이스 계산식 리스트 조회", notes = "디바이스의 모든 계산식을 조회한다")
        @GetMapping(value = "/dvceCalc")
        @ResponseBody
        public ListResult<CmnDvceCalcVO> dvceCalcList(
                        @ApiParam(value = "디바이스ID") @RequestParam(required = true) String dvceId) throws Exception {

                CmnDvceCalcVO cmnDvceCalcVO = new CmnDvceCalcVO();

                cmnDvceCalcVO.setDvceId(dvceId);

                return responseService.getListResult(cmnDvceService.dvceCalcList(cmnDvceCalcVO));

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "디바이스 계산식 단건 등록", notes = "단일 디바이스 계산식을 등록한다")
        @PostMapping(value = "/dvceCalc")
        @ResponseBody
        public CommonResult dvceCalcInsert(@RequestBody @Valid List<CmnDvceCalcInsert> cmnDvceCalcInsert)
                        throws Exception {
                String userSeq = jwtTokenProvider.resolveTokenUser();
                cmnDvceService.dvceCalcInsert(cmnDvceCalcInsert, userSeq);
                return responseService.getSuccessResult();

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "디바이스 계산식 단건 삭제", notes = "단일 디바이스 계산식을 삭제한다")
        @PostMapping(value = "/dvceCalc/{dvceId}/{calcSeq}")
        @ResponseBody
        public CommonResult dvceCalcDel(@PathVariable String dvceId, @PathVariable String calcSeq) throws Exception {
                CmnDvceCalcVO cmnDvceCalcVO = new CmnDvceCalcVO();
                String userSeq = jwtTokenProvider.resolveTokenUser();

                cmnDvceCalcVO.setDvceId(dvceId);
                cmnDvceCalcVO.setCalcSeq(calcSeq);
                cmnDvceCalcVO.setUserSeq(userSeq);

                cmnDvceService.dvceCalcDelete(cmnDvceCalcVO);

                return responseService.getSuccessResult();

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "디바이스 계산식 단건 수정", notes = "단일 디바이스 계산식을 수정한다")
        @PostMapping(value = "/uDvceCalc")
        @ResponseBody
        public CommonResult dvceCalcUpdate(@RequestBody @Valid CmnDvceCalcVO cmnDvceCalcVO) throws Exception {
                String userSeq = jwtTokenProvider.resolveTokenUser();
                cmnDvceCalcVO.setUserSeq(userSeq);

                cmnDvceService.dvceCalcUpdate(cmnDvceCalcVO);
                return responseService.getSuccessResult();

        }

        // @ApiImplicitParams(value = {
        // @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token",
        // required = true, dataType = "String", paramType = "header")
        // })
        // @ApiOperation(value = "디바이스 단건 등록", notes = "단일 디바이스를 등록한다")
        // @PostMapping(value ="/dvce")
        // @ResponseBody
        // public CommonResult dvceInsert(@RequestBody @Valid CmnDvceInert cmnDvceInert)
        // throws Exception {
        // cmnDvceService.dvceInsert(cmnDvceInert);
        // return responseService.getSuccessResult();
        //
        // }

        // @ApiImplicitParams(value = {
        // @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token",
        // required = true, dataType = "String", paramType = "header")
        // })
        // @ApiOperation(value = "디바이스 단건 삭제", notes = "단일 디바이스를 삭제한다")
        // @DeleteMapping(value ="/dvce/{dvceId}")
        // @ResponseBody
        // public CommonResult dvceDel(@PathVariable String dvceId) throws Exception {
        //
        // return responseService.getSuccessResult();
        //
        // }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "디바이스 단건 수정", notes = "단일 디바이스를 수정한다")
        @PostMapping(value = "/uDvce")
        @ResponseBody
        public CommonResult dvceUpdate(@RequestBody @Valid List<CmnDvceUpdate> cmnDvceUpdate) throws Exception {

                String userSeq = jwtTokenProvider.resolveTokenUser();
                cmnDvceService.dvceUpdate(cmnDvceUpdate, userSeq);

                return responseService.getSuccessResult();

        }

        // 디바이스 종료

        // 디바이스알람 시작

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "디바이스알람 리스트 조회", notes = "모든 디바이스알람을 조회한다")
        @GetMapping(value = "/dvceAlrms")
        @ResponseBody
        public ListResult<CmnDvceAlrmVO> dvceAlrmList(
                        @ApiParam(value = "알람유형코드") @RequestParam(required = false) String alrtTypCd,
                        @ApiParam(value = "디바이스ID") @RequestParam(required = false) String dvceId) throws Exception {

                CmnDvceAlrmVO cmnDvceAlrmVO = new CmnDvceAlrmVO();

                cmnDvceAlrmVO.setAlrtTypCd(alrtTypCd);
                cmnDvceAlrmVO.setDvceId(dvceId);

                return responseService.getListResult(cmnDvceService.dvceAlrmsList(cmnDvceAlrmVO));

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "디바이스알람 계산식 리스트 조회", notes = "디바이스알람의 모든 계산식을 조회한다")
        @GetMapping(value = "/dvalCalc")
        @ResponseBody
        public ListResult<CmnDvalCalcVO> dvalCalcList(
                        @ApiParam(value = "알람코드") @RequestParam(required = true) String alrtCd) throws Exception {

                CmnDvalCalcVO cmnDvalCalcVO = new CmnDvalCalcVO();

                cmnDvalCalcVO.setAlrtCd(alrtCd);

                return responseService.getListResult(cmnDvceService.dvalCalcList(cmnDvalCalcVO));

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "디바이스알람 계산식 등록", notes = "디바이스알람 계산식을 등록한다")
        @PostMapping(value = "/dvalCalc")
        @ResponseBody
        public CommonResult dvalCalcInsert(@RequestBody @Valid List<CmnDvalCalcInsert> cmnDvalCalcInsert)
                        throws Exception {
                String userSeq = jwtTokenProvider.resolveTokenUser();
                cmnDvceService.dvalCalcInsert(cmnDvalCalcInsert, userSeq);
                return responseService.getSuccessResult();

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "디바이스알람 계산식 단건 삭제", notes = "단일 디바이스알람 계산식을 삭제한다")
        @PostMapping(value = "/dvalCalc/{alrtCd}/{calcSeq}")
        @ResponseBody
        public CommonResult dvalCalcDel(@PathVariable String alrtCd, @PathVariable String calcSeq) throws Exception {
                CmnDvalCalcVO cmnDvalCalcVO = new CmnDvalCalcVO();
                String userSeq = jwtTokenProvider.resolveTokenUser();

                cmnDvalCalcVO.setAlrtCd(alrtCd);
                cmnDvalCalcVO.setCalcSeq(calcSeq);
                cmnDvalCalcVO.setUserSeq(userSeq);

                cmnDvceService.dvalCalcDelete(cmnDvalCalcVO);

                return responseService.getSuccessResult();

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "디바이스알람 계산식 수정", notes = "단일 디바이스알람 계산식을 수정한다")
        @PostMapping(value = "/uDvceAlrmCalc")
        @ResponseBody
        public CommonResult dvalCalcUpdate(@RequestBody @Valid List<CmnDvalCalcVO> cmnDvalCalcVO) throws Exception {
                String userSeq = jwtTokenProvider.resolveTokenUser();

                cmnDvceService.dvalCalcUpdate(cmnDvalCalcVO, userSeq);
                return responseService.getSuccessResult();

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "디바이스알람 수정", notes = "디바이스알람을 수정한다")
        @PostMapping(value = "/uDvceAlrm")
        @ResponseBody
        public CommonResult dvceAlrmUpdate(@RequestBody @Valid List<CmnDvceAlrmVO> cmnDvceAlrmVO) throws Exception {

                String userSeq = jwtTokenProvider.resolveTokenUser();

                cmnDvceService.dvceAlrmUpdate(cmnDvceAlrmVO, userSeq);

                return responseService.getSuccessResult();

        }
        // 디바이스알람 종료

        // 조회권한 시작

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "조회권한 리스트 조회", notes = "모든 조회권한을 조회한다")
        @GetMapping(value = "/inqRole")
        @ResponseBody
        public ListResult<CmnInqRoleVO> inqRoleList() throws Exception {

                return responseService.getListResult(cmnInqService.inqRoleList());

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "조회권한 그룹 단건 등록", notes = "단일 조회권한 그룹을 등록한다")
        @PostMapping(value = "/inqRole")
        @ResponseBody
        public CommonResult inqRoleInsert(@RequestBody @Valid CmnInqRoleInsert cmnInqRoleInsert) throws Exception {
                String userSeq = jwtTokenProvider.resolveTokenUser();
                cmnInqRoleInsert.setLastChngUseq(userSeq);
                cmnInqService.inqRoleInsert(cmnInqRoleInsert);
                return responseService.getSuccessResult();

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "조회권한 그룹 단건 삭제", notes = "단일 조회권한 그룹을 삭제한다")
        @PostMapping(value = "/inqRole/{inqGrpId}")
        @ResponseBody
        public CommonResult inqRoleDelete(@PathVariable String inqGrpId) throws Exception {
                CmnInqRoleInsert cmnInqRoleInsert = new CmnInqRoleInsert();
                String userSeq = jwtTokenProvider.resolveTokenUser();
                cmnInqRoleInsert.setLastChngUseq(userSeq);
                cmnInqRoleInsert.setInqGrpId(inqGrpId);

                boolean deleteYn = cmnInqService.inqRoleDelete(cmnInqRoleInsert);

                if (deleteYn) {
                        return responseService.getSuccessResult();
                } else {
                        return responseService.getFailResult(999, "조회그룹ID가 존해하지 않습니다.");
                }

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "선택된 사이트 리스트 조회", notes = "선택된 모든 사이트를 조회한다")
        @GetMapping(value = "/inrlSite")
        @ResponseBody
        public CommonResult inrlSiteList(@ApiParam(value = "조회그룹ID") @RequestParam(required = true) String inqGrpId)
                        throws Exception {
                CmnInqRoleVO cmnInqRoleVO = new CmnInqRoleVO();

                cmnInqRoleVO.setInqGrpId(inqGrpId);

                return responseService.getListResult(cmnInqService.inrlSiteList(cmnInqRoleVO));

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "선택되지 않은 사이트 리스트 조회", notes = "선택되지 않은 모든 사이트를 조회한다")
        @GetMapping(value = "/prjSite")
        @ResponseBody
        public CommonResult prjSiteList(@ApiParam(value = "조회그룹ID") @RequestParam(required = true) String inqGrpId)
                        throws Exception {
                CmnInqRoleVO cmnInqRoleVO = new CmnInqRoleVO();

                cmnInqRoleVO.setInqGrpId(inqGrpId);

                return responseService.getListResult(cmnInqService.prjSiteList(cmnInqRoleVO));

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "조회권한목록 선택시 조회", notes = "선택한 조회권한의 사이트 리스트를 조회한다")
        @GetMapping(value = "/devOpt")
        @ResponseBody
        public SingleResult<Map> DevOpt(@ApiParam(value = "조회그룹ID") @RequestParam(required = true) String inqGrpId)
                        throws Exception {
                CmnInqRoleVO cmnInqRoleVO = new CmnInqRoleVO();

                cmnInqRoleVO.setInqGrpId(inqGrpId);
                return responseService.getSingleResult(cmnInqService.manageDeveloperOption(cmnInqRoleVO));

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "조회권한 사이트 등록", notes = "등록되어있는 사이트를 삭제한후 등록한다")
        @PostMapping(value = "/inrlSite")
        @ResponseBody
        public CommonResult inrlSiteInsert(@RequestBody @Valid List<CmnInrlSiteInsert> cmnInrlSiteInsertList)
                        throws Exception {

                cmnInqService.inrlSiteInsert(cmnInrlSiteInsertList);

                return responseService.getSuccessResult();

        }

        // 조회권한 종료

        // GW관리 시작

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "GW그룹 리스트 조회", notes = "모든 GW그룹을 조회한다")
        @GetMapping(value = "/gtwyGroup")
        @ResponseBody
        public SingleResult<Map> gtwyGroupList() throws Exception {

                return responseService.getSingleResult(cmnGtwyService.gtwyGroupList());

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "GW그룹 디바이스 리스트 조회", notes = "선택한 GW그룹의 모든 디바이스를 조회한다")
        @GetMapping(value = "/gtwyDvce")
        @ResponseBody
        public ListResult<CmnGtwyDvceVO> gtwyDvceList(
                        @ApiParam(value = "게이트웨이ID") @RequestParam(required = true) String gtwyId,
                        @ApiParam(value = "포인트주소") @RequestParam(required = false) String pntAddr,
                        @ApiParam(value = "포인트주소명") @RequestParam(required = false) String pntAddrName,
                        @ApiParam(value = "시스템태그") @RequestParam(required = false) String sysTag) throws Exception {
                CmnGtwyDvceVO cmnGtwyDvceVO = new CmnGtwyDvceVO();
                cmnGtwyDvceVO.setGtwyId(gtwyId);
                cmnGtwyDvceVO.setPntAddr(pntAddr);
                cmnGtwyDvceVO.setPntAddrName(pntAddrName);
                cmnGtwyDvceVO.setSysTag(sysTag);

                return responseService.getListResult(cmnGtwyService.gtwyDvceList(cmnGtwyDvceVO));

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "GW그룹 등록", notes = "GW그룹 등록한다")
        @PostMapping(value = "/gtwyGroup")
        @ResponseBody
        public SingleResult<Map> gtwyGrpInsert(@RequestBody @Valid CmnGtwyInsert cmnGtwyInsert) throws Exception {

                String userSeq = jwtTokenProvider.resolveTokenUser();
                cmnGtwyInsert.setUserSeq(userSeq);

                return responseService.getSingleResult(cmnGtwyService.gtwyGrpInsert(cmnGtwyInsert));

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "GW그룹 디바이스 수정", notes = "단건 GW 디바이스 수정한다")
        @PostMapping(value = "/uGtwyDvce")
        @ResponseBody
        public CommonResult gtwyDvceUpdate(@RequestBody @Valid CmnGtwyDvceUpdate cmnGtwyDvceUpdate) throws Exception {

                String userSeq = jwtTokenProvider.resolveTokenUser();
                cmnGtwyDvceUpdate.setUserSeq(userSeq);

                cmnGtwyService.gtwyDvceUpdate(cmnGtwyDvceUpdate);

                return responseService.getSuccessResult();

        }

        // @ApiImplicitParams(value = {
        // @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token",
        // required = true, dataType = "String", paramType = "header")
        // })
        // @ApiOperation(value = "포인트맵추가 등록", notes = "선택한 포인트맵의 기기를 등록한다")
        // @PostMapping(value ="/pntMap")
        // @ResponseBody
        // public CommonResult pntMapInsert(@RequestBody @Valid PtnMapInsertVO
        // ptnMapInsertVO) throws Exception {
        // cmnGtwyService.pntMapInsert(ptnMapInsertVO);
        //
        // return responseService.getSuccessResult();
        //
        // }

        // @ApiImplicitParams(value = {
        // @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token",
        // required = true, dataType = "String", paramType = "header")
        // })
        // @ApiOperation(value = "GW디바이스 단건 삭제", notes = "단일 GW디바이스를 삭제한다")
        // @DeleteMapping(value ="/gtwyDvce/{gtwyId}/{dvceId}")
        // @ResponseBody
        // public CommonResult userDel(@PathVariable String gtwyId,@PathVariable String
        // dvceId) throws Exception {
        //
        // CmnGtwyDvceVO cmnGtwyDvceVO = new CmnGtwyDvceVO();
        // cmnGtwyDvceVO.setGtwyId(gtwyId);
        // cmnGtwyDvceVO.setDvceId(dvceId);
        //
        // cmnGtwyService.gtwyDvceDelete(cmnGtwyDvceVO);
        //
        // return responseService.getSuccessResult();
        //
        // }

        // GW관리 종료

        // 사이트별 GW관리 시작

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "사이트 리스트 조회", notes = "모든 사이트를 조회한다")
        @GetMapping(value = "/siteGtwy")
        @ResponseBody
        public SingleResult<Map> siteGtwyList() throws Exception {

                return responseService.getSingleResult(cmnSiteGtwyService.siteGtwyList());
                // PRJ_SITE_CNRT
        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "사이트 정보 조회", notes = "선택한 사이트의 정보를 조회한다")
        @GetMapping(value = "/siteInfo")
        @ResponseBody
        public SingleResult<Map> siteInfo(@ApiParam(value = "사이트ID") @RequestParam(required = true) String siteId)
                        throws Exception {
                CmnSiteGtwyVO cmnSiteGtwyVO = new CmnSiteGtwyVO();
                cmnSiteGtwyVO.setSiteId(siteId);

                return responseService.getSingleResult(cmnSiteGtwyService.siteInfo(cmnSiteGtwyVO));
        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "사이트 G/W 디바이스 리스트 조회", notes = "사이트의 모든  G/W 디바이스를 조회한다")
        @GetMapping(value = "/siteGtwyDvce")
        @ResponseBody
        public ListResult<CmnGtwyDvceVO> siteGtwyDvceList(
                        @ApiParam(value = "사이트ID", required = true) @RequestParam String siteId,
                        @ApiParam(value = "게이트웨이ID", required = true) @RequestParam String gtwyId,
                        @ApiParam(value = "포인트주소") @RequestParam(required = false) String pntAddr,
                        @ApiParam(value = "포인트주소명") @RequestParam(required = false) String pntAddrName,
                        @ApiParam(value = "시스템태그") @RequestParam(required = false) String sysTag) throws Exception {

                CmnGtwyDvceVO cmnGtwyDvceVO = new CmnGtwyDvceVO();
                cmnGtwyDvceVO.setGtwyId(gtwyId);
                cmnGtwyDvceVO.setPntAddr(pntAddr);
                cmnGtwyDvceVO.setPntAddrName(pntAddrName);
                cmnGtwyDvceVO.setSysTag(sysTag);
                cmnGtwyDvceVO.setSiteId(siteId);

                return responseService.getListResult(cmnSiteGtwyService.siteGtwyDvceList(cmnGtwyDvceVO));
        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "사이트별 GW 등록", notes = "사이트별 단건 GW 등록한다")
        @PostMapping(value = "/siteGtwy")
        @ResponseBody
        public CommonResult siteGtwyInsert(@RequestBody @Valid CmnSiteGtwyInsert cmnSiteGtwyInsert) throws Exception {

                String userSeq = jwtTokenProvider.resolveTokenUser();
                cmnSiteGtwyInsert.setUserSeq(userSeq);

                cmnSiteGtwyService.siteGtwyInsert(cmnSiteGtwyInsert);

                return responseService.getSuccessResult();

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "사이트별 GW 수정", notes = "사이트별 단건 GW 수정한다")
        @PostMapping(value = "/uSiteGtwy")
        @ResponseBody
        public CommonResult siteGtwyUpdate(@RequestBody @Valid CmnSiteGtwyUpdate cmnSiteGtwyUpdate) throws Exception {

                String userSeq = jwtTokenProvider.resolveTokenUser();
                cmnSiteGtwyUpdate.setUserSeq(userSeq);

                cmnSiteGtwyService.siteGtwyUpdate(cmnSiteGtwyUpdate);

                return responseService.getSuccessResult();

        }

        // 사이트별 GW관리 종료

        // 메뉴권한관리 시작
        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "메뉴권한 관리 조회", notes = "메뉴권한 관리를 조회한다")
        @GetMapping(value = "/menuRoleMng")
        @ResponseBody
        public ListResult<CmnMenuRoleMngVO> menuRoleMng() throws Exception {

                return responseService.getListResult(cmnMenuService.menuRoleMng());
        }

        /*
         * @ApiImplicitParams(value = {
         * 
         * @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token",
         * required = true, dataType = "String", paramType = "header") })
         * 
         * @ApiOperation(value = "메뉴권한 관리 수정", notes = "메뉴권한 관리를 단건 수정한다")
         * 
         * @PutMapping(value ="/menuRoleMng")
         * 
         * @ResponseBody public CommonResult menuRoleMngUpdate(@RequestBody @Valid
         * CmnMenuRoleMngUpdate cmnMenuRoleMngUpdate) throws Exception {
         * cmnMenuService.menuRoleMngUpdate(cmnMenuRoleMngUpdate);
         * 
         * return responseService.getSuccessResult(); }
         */

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "메뉴권한 단건 등록", notes = "단일 메뉴권한을 등록한다")
        @PostMapping(value = "/menuRoleMng")
        @ResponseBody
        public CommonResult menuRoleMngInsert(@RequestBody @Valid CmnMenuRoleMngInsert cmnMenuRoleMngInsert)
                        throws Exception {
                String userSeq = jwtTokenProvider.resolveTokenUser();
                cmnMenuRoleMngInsert.setLastChngUseq(userSeq);
                cmnMenuService.menuRoleMngInsert(cmnMenuRoleMngInsert);
                return responseService.getSuccessResult();

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "메뉴권한 단건 삭제", notes = "단일 메뉴권한를 삭제한다")
        @PostMapping(value = "/menuRoleMng/{menuRoleId}")
        @ResponseBody
        public CommonResult menuRoleMngDel(@PathVariable String menuRoleId) throws Exception {
                String userSeq = jwtTokenProvider.resolveTokenUser();
                CmnMenuRoleMngVO cmnMenuRoleMngVO = new CmnMenuRoleMngVO();
                cmnMenuRoleMngVO.setLastChngUseq(userSeq);
                cmnMenuRoleMngVO.setMenuRoleId(menuRoleId);
                cmnMenuService.menuRoleMngDelete(cmnMenuRoleMngVO);
                return responseService.getSuccessResult();

        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "메뉴권한 메뉴리스트 조회", notes = "메뉴권한 메뉴리스트 조회한다")
        @GetMapping(value = "/authMenuRole")
        @ResponseBody
        public SingleResult<MenuTreeRoleVO> authMenuRole(
                        @ApiParam(value = "메뉴권한ID") @RequestParam(required = false) String menuRoleId)
                        throws Exception {

                return responseService.getSingleResult(cmnMenuService.authMenuRole(menuRoleId));
        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "메뉴관리 수정", notes = "메뉴관리를 수정한다")
        @PostMapping(value = "/uAuthMenuRole")
        @ResponseBody
        public CommonResult mauthMenuRoleUpdate(@ApiParam(value = "메뉴권한ID") @RequestParam String menuRoleId,
                        @ApiParam(value = "메뉴권한등록리스트") @RequestBody @Valid List<CmnMenuRoleInsert> cmnMenuRoleInsert)
                        throws Exception {
                cmnMenuService.mauthMenuRoleUpdate(menuRoleId, cmnMenuRoleInsert);

                return responseService.getSuccessResult();
        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "SMS/EMAIL 발송이력 조회", notes = "SMS/EMAIL 발송이력 리스트를 조회한다")
        @GetMapping(value = "/sendHists")
        @ResponseBody
        public SingleResult<Map> sendHists(@ApiParam(value = "발송일") @RequestParam(required = false) String sendDt,
                        @ApiParam(value = "발송구분") @RequestParam(required = false) String sendGubn,
                        @ApiParam(value = "알람명") @RequestParam(required = false) String alrmName,
                        @ApiParam(value = "수신자번호") @RequestParam(required = false) String recvSeq,
                        @ApiParam(value = "수신자") @RequestParam(required = false) String userName,
                        @ApiParam(value = "발송결과코드") @RequestParam(required = false) String sendRsltCd,
                        @ApiParam(value="페이지 번호") @RequestParam(required = false) Integer page)
                        throws Exception {
                SendHistVO sendHistVO = new SendHistVO();
                sendHistVO.setSendDt(sendDt);
                sendHistVO.setSendGubn(sendGubn);
                sendHistVO.setAlrmName(alrmName);
                sendHistVO.setUserName(userName);
                sendHistVO.setRecvSeq(recvSeq);
                sendHistVO.setSendRsltCd(sendRsltCd);
                if (page == null) {
                page = 1;
                }
                sendHistVO.setPage(page);

                return responseService.getSingleResult(cmnSendHistService.sendHists(sendHistVO));
        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "SMS/EMAIL 재발송", notes = "SMS/EMAIL 발송이력 내용을 재발송한다")
        @PostMapping(value = "/reSendHist")
        @ResponseBody
        public CommonResult reSendHist(@RequestBody ReSendHistInsert reSendHistInsert) throws Exception {

                commonService.reSendHistInsert(reSendHistInsert);

                return responseService.getSuccessResult();
        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "Noti 등록", notes = "Noti를 등록한다")
        @PostMapping(value = "/iNoti")
        public CommonResult notiInsert(@RequestBody @Valid CmnNotiUpdate cmnNotiUpdate) throws Exception {

                String lastChngUseq = jwtTokenProvider.resolveTokenUser();
                cmnNotiUpdate.setLastChngUseq(lastChngUseq);
                cmnSendHistService.notiInsert(cmnNotiUpdate);

                return responseService.getSuccessResult();
        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "Noti 수정", notes = "Noti를 수정한다")
        @PostMapping(value = "/uNoti")
        public CommonResult notiUpdate(@RequestBody @Valid CmnNotiUpdate cmnNotiUpdate) throws Exception {

                String lastChngUseq = jwtTokenProvider.resolveTokenUser();
                cmnNotiUpdate.setLastChngUseq(lastChngUseq);
                cmnSendHistService.notiUpdate(cmnNotiUpdate);

                return responseService.getSuccessResult();
        }

        @ApiImplicitParams(value = {
                        @ApiImplicitParam(name = "X-AUTH-TOKEN", value = "로그인 성공 후 access_token", required = true, dataType = "String", paramType = "header") })
        @ApiOperation(value = "Notice 삭제", notes = "Notice를 삭제한다")
        @PostMapping(value = "/dNoti/{notiId}")
        @ResponseBody
        public CommonResult notiDelete(@PathVariable String notiId) throws Exception {

                CmnNotiDelete cmnNotiDelete = new CmnNotiDelete();
                cmnNotiDelete.setNotiId(notiId);
                cmnSendHistService.notiDelete(cmnNotiDelete);

                return responseService.getSuccessResult();
        }

}
