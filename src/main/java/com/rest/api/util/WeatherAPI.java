package com.rest.api.util;


import com.fasterxml.jackson.databind.ObjectMapper;

import org.springframework.beans.factory.annotation.Configurable;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLConnection;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

@Configurable
public class WeatherAPI {



    public static void main(String[] args) throws IOException {


        WeatherAPI weatherAPI = new WeatherAPI();

        HashMap<String, String> returnValue = (HashMap<String, String>) weatherAPI.weather("35","139");
        System.out.println(returnValue.get("weatherMain"));
    }


    public static Map weather( String lat,String lon) {

        StringBuffer sbuf = new StringBuffer();

        HashMap<String, String> returnValue = null;
        try {

            // URL 객체 생성
            URL url = new URL("http://api.openweathermap.org/data/2.5/weather?lat=" + lat + "&lon=" + lon + "&appid=193e6e78a55ae2aff7d11d57eaed7119");

            // URLConnection 생성
            URLConnection urlConn = url.openConnection();


            InputStream is = urlConn.getInputStream();
            InputStreamReader isr = new InputStreamReader(is, "UTF-8");
            BufferedReader br = new BufferedReader(isr);

            String str;
            while ((str = br.readLine()) != null) {

                sbuf.append(str + "\r\n");

            }


            // 콘솔에 출력하기
            //   System.out.println(sbuf.toString());

            returnValue = new HashMap<String, String>();

            try {
                HashMap<String, Object> rs = new ObjectMapper().readValue(sbuf.toString(), HashMap.class);

                HashMap<String, Object> name = (HashMap) rs.get("main");

                List<HashMap<String, Object>> weather = (List<HashMap<String, Object>>) rs.get("weather");

                String main = "";
                String id = "";
            //    System.out.println(weather.get(0).keySet());
                for (String key : weather.get(0).keySet()) {
                    if ("main".equals(key)) {
                        main = weather.get(0).get(key) + "";
                    }
                    if ("id".equals(key)) {
                        id = weather.get(0).get(key) + "";
                    }

                }

                returnValue.put("weatherId", id);
                returnValue.put("weatherMain", main);
                returnValue.put("weatherTemp", (Math.round((Float.parseFloat(name.get("temp") + "") - Float.parseFloat("273.15")) * 100) / 100.0) + "");

             //   System.out.println(main);
             //   System.out.println(Math.round((Float.parseFloat(name.get("temp") + "") - Float.parseFloat("273.15")) * 100) / 100.0);
            } catch (IOException e) {

            }


        } catch (MalformedURLException e) {

        } catch (IOException e) {

        }
        return returnValue;
    }
}




