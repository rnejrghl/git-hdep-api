package com.rest.api.service.ext;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.URL;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.zip.ZipInputStream;
import org.jsoup.select.Elements;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;
import com.rest.api.model.ext.PdResultVO;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.mo.MoMapper;
import lombok.RequiredArgsConstructor;

@Service
@Transactional
@RequiredArgsConstructor
public class PdService {   

    @Autowired
    private PdMapper pdMapper;
    
    
    	// 크롤링으로 읽은 Elements 에서 CSV 파일을 읽어 저장
		public void extractDataSave(String url ,Elements els , String type ) throws Exception {
			
			List<PdResultVO> pdResultListVO =  new ArrayList<PdResultVO>();
			
			for(int i =0; i < els.size() ; i ++) {
	
				// 마지막 zip 파일만 가져온다.
				if(i == els.size() -1) {
				
				// 파일 위치값 정제
				String[] fileNameArray = els.get(i).getElementsByAttribute("href").attr("href").split("/");
				String fileName = fileNameArray[4];					
				String fileUrl = url + fileName;
				
				// 해당 파일로 파일읽어드림
				InputStream fileZip = new URL(fileUrl ).openStream();
				
				// zip 파일 읽는 stream 생성
				 ZipInputStream zis = new ZipInputStream(fileZip);
				 zis.getNextEntry();
				 
				 String resultLine;
				 
				 BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(zis));
				 
				 int lineCount = 1;
				 
				 if ("5MIN".equals(type)) {
					 
					 String[] columList = null;
					 int index_SETTLEMENTDATE = 0;
					 int index_REGIONID = 0;
					 int index_RRP = 0;
					 int index_CLEAREDSUPPLY = 0;
					 
					 while ( (resultLine=bufferedReader.readLine())!=null ){
						 
						 // 컬럼 위치 찾기
						 if(lineCount == 4) {
							 columList = resultLine.split(",");
							 index_SETTLEMENTDATE = Arrays.asList(columList).indexOf("SETTLEMENTDATE");
							 index_REGIONID = Arrays.asList(columList).indexOf("REGIONID");
							 index_RRP = Arrays.asList(columList).indexOf("RRP");
							 index_CLEAREDSUPPLY = Arrays.asList(columList).indexOf("CLEAREDSUPPLY");
						 }

						 //위의 인덱스값에대해 해당 값 찾기
						 if(lineCount == 5) {
							 String[] columValue = resultLine.split(",");
							 PdResultVO pdResultVO =  new PdResultVO();
							 pdResultVO.setLastChngDtti(columValue[index_SETTLEMENTDATE].replaceAll("\"", ""));
							 pdResultVO.setRegionId(columValue[index_REGIONID]);
							 pdResultVO.setRrp(columValue[index_RRP]);
							 pdResultVO.setDemand(columValue[index_CLEAREDSUPPLY]);
							 
							 pdMapper.insertCurrentData(pdResultVO);
						 }						 
						 lineCount++;
					 }					 
				 }else {
					 
					 String[] columList = null;
					 int index_REGIONID = 0;
					 int index_PERIODID = 0;
					 int index_RRP = 0;
					 int index_CLEAREDSUPPLY = 0;
					 
					 while ( (resultLine=bufferedReader.readLine())!=null ){

						 // 컬럼 위치 찾기
						 if(lineCount == 4) {
							 columList = resultLine.split(",");
							 index_REGIONID = Arrays.asList(columList).indexOf("REGIONID");
							 index_PERIODID = Arrays.asList(columList).indexOf("PERIODID");
							 index_RRP = Arrays.asList(columList).indexOf("RRP");
							 index_CLEAREDSUPPLY = Arrays.asList(columList).indexOf("CLEAREDSUPPLY");
						 }
						 
						 // 위의 인덱스값에대해 해당 값 찾기
						 if(lineCount > 4 ) {
							 String[] columValue = resultLine.split(",");
							 // AEMO 4 이고 NSW1 인것만 추출 ("4".equals( colum[3]) 이부분은 해당 ROW에 컬럼이없기때문에 그대로유지
							 if("4".equals( columValue[3]) &&"NSW1".equals(columValue[index_REGIONID]) ) {
								 PdResultVO pdResultVO = new PdResultVO();
								 pdResultVO.setLastChngDtti(columValue[index_PERIODID].replaceAll("\"", ""));
								 pdResultVO.setRegionId(columValue[index_REGIONID]); 
								 pdResultVO.setRrp(columValue[index_RRP]);
								 pdResultVO.setDemand(columValue[index_CLEAREDSUPPLY]);
								 pdResultListVO.add(pdResultVO);
							 }
							 if(!"NSW1".equals(columValue[index_REGIONID])) break; // G열을을 읽다가 NSW1 아니면 종료시킴 ..  너무 많은데이터도있고 ,아래 빈데이터를 전부 읽게되어 필요없는 시간 소요됨
						 }
						 lineCount++;
					 }
						 pdMapper.insertForcastingData(pdResultListVO);
				 }
				 
					zis.closeEntry();
				    zis.close();
			     
			}
		}
			
	}

}
