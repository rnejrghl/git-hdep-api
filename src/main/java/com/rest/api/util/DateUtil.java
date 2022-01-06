package com.rest.api.util;


import org.apache.ibatis.javassist.compiler.Parser;
import org.springframework.beans.factory.annotation.Configurable;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

@Configurable
public class DateUtil {
    public static void main(String[] args) throws ParseException {

        DateUtil sender = new DateUtil();

        sender.dates("20200101","20200110");

    }

    public static String tomorrow(String baseDate) throws ParseException {

        if(!"".equals(baseDate) && baseDate != null && baseDate.length() == 8){
            SimpleDateFormat sdf = new SimpleDateFormat("yyyyMMdd");
            Date dDate = new Date();
            dDate = sdf.parse(baseDate);
            long lCurTime = dDate.getTime();
            dDate = new Date(lCurTime+(1000*60*60*24*+1));
            String sTomorrow = sdf.format(dDate);
            return sTomorrow;
        }else{
            return baseDate;
        }

    }
    public static List<String> dates(String startDate,String endDate ) throws ParseException {
        List<String> dates = new ArrayList();
        if(!"".equals(startDate) && startDate != null && startDate.length() == 8){

            String baseDt = startDate;
            while(!baseDt.equals(endDate) && Integer.parseInt(baseDt) <= Integer.parseInt(endDate)){
                dates.add(baseDt);
                baseDt = DateUtil.tomorrow(baseDt);
            }
            dates.add(endDate);
            return dates;
        }else{
            return dates;
        }



    }
}



