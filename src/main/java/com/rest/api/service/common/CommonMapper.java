package com.rest.api.service.common;

import com.rest.api.model.common.*;
import com.rest.api.model.common.SearchSite.SearchDTO;
import com.rest.api.model.pp.SiteFileVO;

import org.apache.ibatis.annotations.Mapper;

import java.util.List;
import java.util.Map;

import javax.validation.Valid;

@Mapper
public interface CommonMapper {
    List<CommonVO> codeList(CommonVO commonVO) throws Exception;

    List<CmnCmcdVO> codeMainList(CmnCmcdVO cmnCmcdVO) throws Exception;

    List<CmnCmcdSubVO> codeSubList(CmnCmcdVO cmnCmcdVO) throws Exception;

    CommonVO codeDtl(CommonVO commonVO) throws Exception;

    List<NoticeVO> notice(NoticeVO noticeVO) throws Exception;

    List<WoNoticeVO> woNotice() throws Exception;

    int fileInsert(FileInsert fileInsert) throws Exception;

    int newFileInsert(FileInsert fileInsert) throws Exception;

    int fileDelete(SiteFileVO siteFileVO) throws Exception;
    
    int siteFileDelete(SiteFileVO siteFileVO) throws Exception;
    
    SiteFileVO selectFileId(SiteFileVO siteFileVO) throws Exception;

    int cmnSendHistInsert(SendHistInsert sendHistInsert) throws Exception;

    int codeInsert(CommonInsert commonInsert) throws Exception;

    int codeUpdate(CommonUpdate commonUpdate) throws Exception;

    int codeDelete(CommonVO commonVO) throws Exception;

    String[] siteAuthList(String userSeq) throws Exception;

    String adminChk(String userSeq) throws Exception;

    String[] siteAuthAdminList() throws Exception;

    int codePpUpdate(CommonPpUpdate commonPpUpdate) throws Exception;

    int codePpInsert(CommonPpInsert commonPpInsert) throws Exception;

    List<CommonPpVO> codePpList() throws Exception;

    CommonPpVO codePpNow() throws Exception;

    CommonCountryVO country() throws Exception;

    List<CommonCityVO> cityList() throws Exception;

    int cityInsert(CommonCityInsert commonCityInsert) throws Exception;

    int cityUpdate(CommonCityUpdate commonCityUpdate) throws Exception;

    int cityChk(String cd) throws Exception;

    List<CmnMsgVO> fileInfo(String fileId) throws Exception;

    int langInsert(LangInsert langInsert) throws Exception;

    int langUpdate(LangUpdate langUpdate) throws Exception;

    int newPassword(CmnPswdUpdate cmnPswdUpdate) throws Exception;

    List<LangVO> langList() throws Exception;

    List<SearchSite.Res> searchSiteList(SearchDTO searchDTO) throws Exception;

    /**
     * OTP 관련 메소드 정의
     */
    int insertOtp(CmnOtp cmnOtp) throws Exception;

    int updateOtp(CmnOtp cmnOtp) throws Exception;

    CmnOtp selectOtp(CmnOtp cmnOtp) throws Exception;

    List<EssControlVO> essControlList(String siteId) throws Exception;

    List<EssControlVO> essControlHistoryList(PageCountVO pageCountVO) throws Exception;

    PageCountVO essControlHistoryCnt(PageCountVO pageCountVO) throws Exception;

    void essControlInsert(EssControlVO essControlVO) throws Exception;

    void essControlUpdate(EssControlVO essControlVO) throws Exception;

}
