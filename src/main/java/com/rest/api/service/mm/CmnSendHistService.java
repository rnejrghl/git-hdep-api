package com.rest.api.service.mm;

import com.rest.api.advice.exception.CResourceNotExistException;
import com.rest.api.model.common.NoticeVO;
import com.rest.api.model.mm.*;
import com.rest.api.service.common.CommonMapper;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import javax.validation.Valid;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class CmnSendHistService {

    @Autowired
    private CmnSendHistMapper mapper;

    @Autowired
    private CommonMapper commonMapper;

    public Map sendHists(@Valid SendHistVO sendHistVO) throws Exception {
        HashMap map = new HashMap();

        SendHistCntVO sendHistPage = mapper.sendHistsCnt(sendHistVO);
        sendHistPage.setPage(sendHistVO.getPage());

        Integer pagePer = 10;
        Integer start = (sendHistVO.getPage() -1) * pagePer;
        sendHistVO.setPageStart(start);
        sendHistVO.setPagePer(pagePer);

        List<SendHistVO> sendHistList = mapper.sendHists(sendHistVO);

        map.put("mainData", sendHistList);
        map.put("mainDataPage", sendHistPage);

        NoticeVO noticeVO = new NoticeVO();
        List<NoticeVO> notice = commonMapper.notice(noticeVO);
        map.put("noticeData", notice);
        return map;
    }

    public boolean notiInsert(@Valid CmnNotiUpdate cmnNotiUpdate) throws Exception {

        mapper.notiInsert(cmnNotiUpdate);
        return true;
    }

    public boolean notiUpdate(@Valid CmnNotiUpdate cmnNotiUpdate) throws Exception {

        mapper.notiUpdate(cmnNotiUpdate);
        return true;
    }

    public boolean notiDelete(@Valid CmnNotiDelete cmnNotiDelete) throws Exception {

        mapper.notiDelete(cmnNotiDelete);

        return true;
    }
    // public List<CmnDvceCalcVO> dvceCalcList(@Valid CmnDvceCalcVO cmnDvceClacVO)
    // throws Exception {
    //
    // List<CmnDvceCalcVO> dvceCalcList = mapper.dvceCalcList(cmnDvceClacVO);
    // if(dvceCalcList.size() == 0){
    // throw new CResourceNotExistException();
    // }
    //
    // return dvceCalcList;
    // }
    //
    // public boolean dvceUpdate(@Valid CmnDvceUpdate cmnDvceUpdate) throws
    // Exception {
    // // 로직처리
    // int cnt = mapper.dvceUpdate(cmnDvceUpdate);
    // if(cnt == 0){
    // throw new Exception();
    // }
    // return true;
    // }

}
