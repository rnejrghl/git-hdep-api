package com.rest.api.config.scheduer;

import java.text.SimpleDateFormat;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.Calendar;
import java.util.Date;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.select.Elements;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.scheduling.annotation.EnableScheduling;
import org.springframework.scheduling.annotation.Scheduled;
import org.springframework.stereotype.Component;

import com.rest.api.service.ext.PdService;


@Component
@EnableScheduling
public class SpotPriceScheduler {
	
	@Autowired
	private PdService pdService; 
	
		@Scheduled(cron = "20 */2 * * * *")	// 5분마다 (5분정각에 업데이트 안되기때문에 주기 짧게잡음)
		public void download( ) throws Throwable {
				
				// crawling 으로 데이터 파일 목록들만 추출
				String URL = "https://nemweb.com.au/Reports/Current/Dispatch_Reports/"; 
				Document doc = Jsoup.connect(URL).get(); 
				Elements els = doc.select("pre a"); 
				
				pdService.extractDataSave(URL,els, "5MIN");  
		}
		
		@Scheduled(cron = "0 6/30 * * * *")	// 30분마다 (30분정각에 업데이트 안되기때문에 6분늦게 잡음)
		public void downloadf( ) throws Throwable { 
			
			// crawling 으로 데이터 파일 목록들만 추출
			String URL = "https://nemweb.com.au/Reports/Current/Predispatch_Reports/";
			Document doc = Jsoup.connect(URL).get();
			Elements els = doc.select("pre a");
			
			pdService.extractDataSave(URL,els, "30MIN");
		}
		

}