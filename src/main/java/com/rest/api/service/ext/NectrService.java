package com.rest.api.service.ext;

import java.util.HashMap;
import java.util.Map;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.rest.api.model.ext.NectrBocResultVO;
import com.rest.api.model.ext.NectrHpcResultVO;
import com.rest.api.model.ext.NectrPfResultVO;
import com.rest.api.model.ext.NectrResultVO;
import com.rest.api.model.mo.KpiSummaryVO;
import com.rest.api.model.mo.OperationsVO;
import com.rest.api.service.common.CommonService;
import com.rest.api.service.mo.MoMapper;

import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;

@Slf4j
@Service
@Transactional
@RequiredArgsConstructor
public class NectrService {   

    @Autowired
    private MoMapper moMapper;
    
    @Autowired
    private NectrMapper nectrMapper;
    
    @Autowired
    private CommonService commonService;

    
    
public boolean checkSite(String siteId) throws Exception {
    	
	   boolean result =false;
    	
    	HashMap<String,String> map = new HashMap<String,String>();
    	
    	int siteCnt = nectrMapper.checkSite(siteId);
        
    	if(siteCnt >0) {
    		result = true;
    	}
        
        return result;
    }
        
	public Map<String,String> getPowerFlow(String siteId) throws Exception {
    	
    	
    	HashMap<String,String> map = new HashMap<String,String>();
    	
    	//기존로직 가지고오기때문에 OperationsVO 객체생성
    	OperationsVO powersVO = new OperationsVO();        
    	powersVO.setSiteId(siteId);
    	
    	// 해당 사이트에대해 전력흐름도를 조회
        KpiSummaryVO rtData = moMapper.realFlow(powersVO);
        
        if (rtData != null) {        	
        	
            map.put("opPower",commonService.convertWToKwLongDec(rtData.getIvtAc(), false));                                                        
            map.put("loadPower",commonService.convertWToKwLongDec(rtData.getLoadPower(), false));                                   
            map.put("gridPower",commonService.convertWToKwLongDec(rtData.getGridPower(), false));                                             
            map.put("othEnergy",commonService.convertWToKwLongDec(rtData.getOthEnergy(), false));                                           
            map.put("batChar",commonService.convertWToKwLongDec(rtData.getBatChar(), false));                                   
            map.put("batDisc",commonService.convertWToKwLongDec(rtData.getBatDisc(), false));                       
            
            // SOC , SOH 값
            map.put("batPower",rtData.getBatPower());                                              
            map.put("batHealth",rtData.getBatHealth());                                 

        }    	              
        
        return map;
    }
    
    
    
    
   public NectrPfResultVO convertData(Map<String,String> pData) throws Exception {
    	
	   NectrPfResultVO nectrResultVO = new NectrPfResultVO();
	   
	   
	   double opPower = Double.parseDouble(pData.get("opPower"));
	   double loadPower = Double.parseDouble(pData.get("loadPower"));
	   double gridPower = Double.parseDouble(pData.get("gridPower"));
	   double batChar =  Double.parseDouble(pData.get("batChar"));
	   double batDisc = Double.parseDouble(pData.get("batDisc"));
	   double othEnergy =  Double.parseDouble(pData.get("othEnergy"));
        	
	   double PV =  opPower;
	   double LOAD =  loadPower;
	   double CharBat = batChar;
	   double DiscBat =  batDisc;
	   double FromGRID =  othEnergy;
	   double ToGRID =  gridPower;
	   
	   
	   String gridStatus = "";
	   double gridValue = 0;
	   
	   if(othEnergy > 0 ) {
		   //수전
		   gridValue = othEnergy;
		   gridStatus = "Transmission";
	   }else if (gridPower > 0 ) {
		 //송전
		    gridValue = gridPower;
		    gridStatus = "Receiving";
	   }else {
		   //정지
		    gridValue = 0;
		    gridStatus ="'OFF";
	   }
	   
	   
	   String btStatus = "";
	   double btValue = 0;
	   
	   if (batChar > 0) {
		    //충전
		    btValue = batChar;
		    btStatus ="Charging";
		  } else if (batDisc > 0) {
		    //방전
		    btValue = batDisc;
		    btStatus = "Discharging";
		  } else {
		    //정지
		    btValue = 0;
		    btStatus = "OFF";
		  }
	   
	   
	   //LINE VALUE	   
	   double FLV_home_solar = 0;
	   double FLV_solar_grid = 0;
	   double FLV_battery_home = 0;
	   double FLV_gird_battery = 0;
	   double FLV_home_gird  = 0;
	   double FLV_solar_battery = 0;
	   
	   //LINE FLOW
	   boolean FL_solarToGrid = false;
	   boolean FL_gridToSolar  = false; 
	   boolean FL_gridToBattery = false;
	   boolean FL_batteryToGrid = false;
	   boolean FL_batteryToHome = false;
	   boolean FL_homeToBattery = false;
	   boolean FL_homeToSolar = false;
	   boolean FL_solarToHome = false;
	   boolean FL_solarToBattery = false;
	   boolean FL_batteryToSolar = false;
	   boolean FL_homeToGrid  = false;
	   boolean FL_gridToHome = false;
	   

	    if ("Transmission".equals(gridStatus)) {
	      if (LOAD > 0) {
	        if (PV > 0) {
	          if ("Charging".equals(btStatus)) {
	            if (PV < CharBat) {
	              FLV_home_solar = 0;
	              FLV_solar_grid = 0;
	              FLV_battery_home = 0;
	              FLV_gird_battery = Math.round((Math.abs(FromGRID - LOAD)*1000)) /1000.0;  
	              FLV_home_gird  = Math.round((Math.abs(LOAD)*1000))/1000.0;
	              FLV_solar_battery =  Math.round((Math.abs(PV)*1000))/1000.0;
	              
	              FL_gridToBattery =true;
	              FL_gridToHome =true;
	              FL_solarToBattery=true;
	            } else {
	              FLV_home_solar = Math.round((Math.abs(PV - CharBat)*1000))/1000.0;
	              FLV_solar_grid = 0;
	              FLV_battery_home = 0;
	              FLV_gird_battery = 0;
	              FLV_home_gird  = Math.round((Math.abs(FromGRID)*1000))/1000.0;
	              FLV_solar_battery = Math.round((Math.abs(CharBat)*1000))/1000.0;

	              FL_solarToHome = true;	              
	              FL_gridToHome = true;
	              FL_solarToBattery = true;
	            }
	          } else if ("Discharging".equals(btStatus)) {
	            FLV_home_solar = Math.round((Math.abs(PV)*1000))/1000.0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = Math.round((Math.abs(FromGRID)*1000))/1000.0;
	            FLV_battery_home = Math.round((Math.abs(DiscBat)*1000))/1000.0;
	            FLV_gird_battery = 0;

	            FL_solarToHome = true;	            
	            FL_gridToHome =true;
	            FL_batteryToHome = true;	            
	          } else {
	            FLV_home_solar = Math.round((Math.abs(PV)*1000))/1000.0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = Math.round((Math.abs(FromGRID)*1000))/1000.0;
	            FLV_battery_home = 0;
	            FLV_gird_battery = 0;

	            FL_solarToHome = true;	            	            
	            FL_gridToHome =true;	            
	          }
	        } else {
	          if ("Charging".equals(btStatus)) {
	            FLV_home_solar = 0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = Math.round((Math.abs(LOAD)*1000))/1000.0;
	            FLV_battery_home = 0;
	            FLV_gird_battery = Math.round((Math.abs(CharBat)*1000))/1000.0;
	            
	            FL_gridToHome =true;	            
	            FL_gridToBattery =true;
	          } else if ("Discharging".equals(btStatus)) {
	            FLV_home_solar = 0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = Math.round((Math.abs(FromGRID)*1000))/1000.0;
	            FLV_battery_home = Math.round((Math.abs(DiscBat)*1000))/1000.0;
	            FLV_gird_battery = 0;
	            
	            FL_gridToHome =true;
	            FL_batteryToHome = true;
	          } else {
	            FLV_home_solar = 0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = Math.round((Math.abs(FromGRID)*1000))/1000.0;
	            FLV_battery_home = 0;
	            FLV_gird_battery = 0;
	            
	            FL_gridToHome =true;	            
	          }
	        }
	      } else {
	        if (PV > 0) {
	          if ("Charging".equals(btStatus)) {
	            FLV_home_solar = 0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = Math.round((Math.abs(PV)*1000))/1000.0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = 0;
	            FLV_gird_battery =Math.round(( Math.abs(FromGRID)*1000))/1000.0;
	            
	            FL_solarToBattery=true;	            
	            FL_gridToBattery =true;
	          }
	        } else {
	          if ("Charging".equals(btStatus)) {
	            FLV_home_solar = 0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = 0;
	            FLV_gird_battery = Math.round((Math.abs(FromGRID)*1000))/1000.0;
	            
	            FL_gridToBattery =true;
	          }
	        }
	      }
	    } else if ("Receiving".equals(gridStatus)) {
	      if (LOAD > 0) {
	        if (PV > 0) {
	          if ("Charging".equals(btStatus)) {
	            FLV_home_solar = Math.round((Math.abs(LOAD)*1000))/1000.0;
	            FLV_solar_grid = Math.round((Math.abs(ToGRID)*1000))/1000.0;
	            FLV_solar_battery = Math.round((Math.abs(CharBat)*1000))/1000.0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = 0;
	            FLV_gird_battery = 0;

	            FL_solarToHome = true;
	            FL_solarToGrid = true;
	            FL_solarToBattery=true;	            
	          } else if ("Discharging".equals(btStatus)) {
	            // if(selfconsumption mode){}
	            if (DiscBat <= LOAD) {
	              FLV_home_solar = Math.round((Math.abs(PV - ToGRID)*1000))/1000.0;
	              FLV_solar_grid = Math.round((Math.abs(ToGRID)*1000))/1000.0;
	              FLV_solar_battery = 0;
	              FLV_home_gird  = 0;
	              FLV_battery_home = Math.round((Math.abs(DiscBat)*1000))/1000.0;
	              FLV_gird_battery = 0;

	              FL_solarToHome = true;
	              FL_solarToGrid = true;	              
	              FL_batteryToHome = true;	              
	            } else {
	              FLV_home_solar = 0;
	              FLV_solar_grid = Math.round((Math.abs(PV)*1000))/1000.0;
	              FLV_solar_battery = 0;
	              FLV_home_gird  = 0;
	              FLV_battery_home = Math.round((Math.abs(LOAD)*1000))/1000.0;
	              FLV_gird_battery = Math.round((Math.abs(DiscBat - LOAD)*1000))/1000.0;

	              
	              FL_solarToGrid = true;	              	             
	              FL_batteryToHome = true;
	              FL_batteryToGrid =true;
	            }
	          } else {
	            FLV_home_solar = Math.round((Math.abs(LOAD)*1000))/1000.0;
	            FLV_solar_grid = Math.round((Math.abs(ToGRID)*1000))/1000.0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = 0;
	            FLV_gird_battery = 0;

	            FL_solarToHome = true;
	            FL_solarToGrid = true;	            
	          }
	        } else {
	          if ("Discharging".equals(btStatus)) {
	            FLV_home_solar = 0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = Math.round((Math.abs(LOAD)*1000))/1000.0;
	            FLV_gird_battery = Math.round((Math.abs(ToGRID)*1000))/1000.0;
	            
	            FL_batteryToHome = true;
	            FL_batteryToGrid =true;
	          }
	        }
	      } else {
	        if (PV > 0) {
	          if ( "Charging".equals(btStatus)) {
	            FLV_home_solar = 0;
	            FLV_solar_grid = Math.round((Math.abs(ToGRID)*1000))/1000.0;
	            FLV_solar_battery = Math.round((Math.abs(CharBat)*1000))/1000.0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = 0;
	            FLV_gird_battery = 0;
	            
	            FL_solarToGrid = true;
	            FL_solarToBattery=true;	            
	          } else if ( "Discharging".equals(btStatus)) {
	            FLV_home_solar = 0;
	            FLV_solar_grid = Math.round((Math.abs(PV)*1000))/1000.0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = 0;
	            FLV_gird_battery = Math.round((Math.abs(DiscBat)*1000))/1000.0;

	            
	            FL_solarToGrid = true;	            	            	          
	            FL_batteryToGrid =true;
	          } else {
	            FLV_home_solar = 0;
	            FLV_solar_grid = Math.round((Math.abs(ToGRID)*1000))/1000.0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = 0;
	            FLV_gird_battery = 0;
	            
	            FL_solarToGrid = true;	            
	          }
	        } else {
	          if ( "Discharging".equals(btStatus)) {
	            FLV_home_solar = 0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = 0;
	            FLV_gird_battery = Math.round((Math.abs(ToGRID)*1000))/1000.0;
	            
	            FL_batteryToGrid =true;
	          }
	        }
	      }
	    } else {
	      if (LOAD > 0) {
	        if (PV > 0) {
	          if ( "Charging".equals(btStatus)) {
	            FLV_home_solar = Math.round((Math.abs(LOAD)*1000))/1000.0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = Math.round((Math.abs(CharBat)*1000))/1000.0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = 0;
	            FLV_gird_battery = 0;

	            FL_solarToHome =true;	            
	            FL_solarToBattery=true;	            
	          } else if ( "Discharging".equals(btStatus)) {
	            FLV_home_solar = Math.round((Math.abs(PV)*1000))/1000.0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = Math.round((Math.abs(DiscBat)*1000))/1000.0;
	            FLV_gird_battery = 0;

	            FL_solarToHome = true;	            
	            FL_batteryToHome = true;	            
	          } else {
	            FLV_home_solar = Math.round((Math.abs(LOAD)*1000))/1000.0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = 0;
	            FLV_gird_battery = 0;

	            FL_solarToHome = true;	            
	          }
	        } else {
	          if ( "Discharging".equals(btStatus)) {
	            FLV_home_solar = 0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = 0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = Math.round((Math.abs(LOAD)*1000))/1000.0;
	            FLV_gird_battery = 0;
	            
	            FL_batteryToHome = true;	           
	          }
	        }
	      } else {
	        if (PV > 0) {
	          if (  "Charging".equals(btStatus)) {
	            FLV_home_solar = 0;
	            FLV_solar_grid = 0;
	            FLV_solar_battery = Math.round((Math.abs(CharBat)*1000))/1000.0;
	            FLV_home_gird  = 0;
	            FLV_battery_home = 0;
	            FLV_gird_battery = 0;
	            
	            FL_solarToBattery=true;	            
	          }
	        } else {
	          FLV_home_solar = 0;
	          FLV_solar_grid = 0;
	          FLV_solar_battery = 0;
	          FLV_home_gird  = 0;
	          FLV_battery_home = 0;
	          FLV_gird_battery = 0;	         
	        }
	      }
	    }
	    
	    
	   
	    
	    //LINE VALUE - SET   (화살표 방향 값)
	    nectrResultVO.setFLV_home_solar( Double.toString(FLV_home_solar) + "kW");
	    nectrResultVO.setFLV_solar_grid( Double.toString(FLV_solar_grid) + "kW");
	    nectrResultVO.setFLV_battery_home( Double.toString(FLV_battery_home) + "kW");
	    nectrResultVO.setFLV_gird_battery( Double.toString(FLV_gird_battery) + "kW");
	    nectrResultVO.setFLV_home_gird( Double.toString(FLV_home_gird) + "kW");
	    nectrResultVO.setFLV_solar_battery( Double.toString(FLV_solar_battery) + "kW");
        
	    //LINE FLOW - SET (화살표 방향)
	    nectrResultVO.setFL_solarToGrid(FL_solarToGrid);
	    nectrResultVO.setFL_gridToSolar(FL_gridToSolar);
	    nectrResultVO.setFL_gridToBattery(FL_gridToBattery);
	    nectrResultVO.setFL_batteryToGrid(FL_batteryToGrid);
	    nectrResultVO.setFL_batteryToHome(FL_batteryToHome);
	    nectrResultVO.setFL_homeToBattery(FL_homeToBattery);
	    nectrResultVO.setFL_homeToSolar(FL_homeToSolar);
	    nectrResultVO.setFL_solarToHome(FL_solarToHome);
	    nectrResultVO.setFL_solarToBattery(FL_solarToBattery);
	    nectrResultVO.setFL_batteryToSolar(FL_batteryToSolar);
	    nectrResultVO.setFL_homeToGrid(FL_homeToGrid);
	    nectrResultVO.setFL_gridToHome(FL_gridToHome);
	    
	    //각 자산의 출력값 	   (Solar , Grid , Battery , Home) - SET
	    nectrResultVO.setP_solarPower(Double.toString(opPower) + "kW");
	    nectrResultVO.setP_gridPower(Double.toString(gridValue) + "kW");
	    nectrResultVO.setP_batterPower(Double.toString(btValue) + "kW");
	    nectrResultVO.setP_homePower(Double.toString(loadPower) + "kW");
	    
	    // Battery SOC , SOH 값 - SET	    	   
	    String batPower = String.format("%.0f",Double.parseDouble(pData.get("batPower")) * 100);
	    String batHealth = String.format("%.0f",Double.parseDouble(pData.get("batHealth")) * 100);	    	    
	    nectrResultVO.setBattery_SOC(batPower + "%");
	    nectrResultVO.setBattery_SOH(batHealth + "%"); 
        
        return nectrResultVO;
    }

   
   
public NectrBocResultVO getBatteryChart(String siteId,String inputDate) throws Exception {

 	
	 NectrBocResultVO nectrBocResultVO = nectrMapper.getBatteryChart(siteId,inputDate);
	 
	 Optional<NectrBocResultVO> opVO = Optional.ofNullable(nectrBocResultVO);
	 
	 if(opVO.isPresent()) {
		   String ivtDc = "0.00";
	       String batChar = "0.00";
	       String batDisc = "0.00";
	       String batPower = "0.00";                                               
	                       
	       if (!"".equals(nectrBocResultVO.getDcPwr() ) && nectrBocResultVO.getDcPwr() != null)
	           ivtDc = commonService.convertWToKw(nectrBocResultVO.getDcPwr(), false);
	       if (!"".equals(nectrBocResultVO.getBatCharPwr()) && nectrBocResultVO.getBatCharPwr() != null)
	           batChar = commonService.convertWToKw(nectrBocResultVO.getBatCharPwr(), false);
	       if (!"".equals(nectrBocResultVO.getBatDiscPwr()) && nectrBocResultVO.getBatDiscPwr() != null)
	           batDisc = commonService.convertWToKw(nectrBocResultVO.getBatDiscPwr(), false);
	       if (!"".equals(nectrBocResultVO.getBatSOC()) && nectrBocResultVO.getBatSOC() != null) {
	    	   batPower = String.format("%.0f",Double.parseDouble(nectrBocResultVO.getBatSOC()) * 100);	    	   
	       }
	           	       
	       nectrBocResultVO.setDcPwr(ivtDc + "kW");
	       nectrBocResultVO.setBatCharPwr(batChar);
	       nectrBocResultVO.setBatDiscPwr(batDisc);
	       nectrBocResultVO.setBatSOC(batPower + "%");        
	 }	 
	
	
	return nectrBocResultVO;
	
}


public NectrHpcResultVO getProductionsChart(String siteId,String inputDate) throws Exception {

 	
	NectrHpcResultVO nectrHpcResultVO = nectrMapper.getProductionsChart(siteId,inputDate);
	 
	 Optional<NectrHpcResultVO> opVO = Optional.ofNullable(nectrHpcResultVO);
	 	 	 
	 if(opVO.isPresent()) {
		 nectrHpcResultVO.setAmount(nectrHpcResultVO.getAmount() + "kWh");
	 }
	
	return nectrHpcResultVO;
	
}

public boolean nectrResult(NectrPfResultVO nectrPfResultVO,NectrBocResultVO nectrBocResultVO,NectrHpcResultVO nectrHpcResultVO,String userSeq,String siteId, String inputDate,String code,String type) throws Exception {

	NectrResultVO nectrResultVO =new NectrResultVO();

	nectrResultVO.setUserSeq(userSeq);
	nectrResultVO.setSiteId(siteId);
	nectrResultVO.setTimeStamp(inputDate);
	nectrResultVO.setCode(code);
	nectrResultVO.setType(type);

	if(nectrBocResultVO!=null){
		nectrResultVO.setDcPwr(nectrBocResultVO.getDcPwr());
		nectrResultVO.setBatCharPwr(nectrBocResultVO.getBatCharPwr());
		nectrResultVO.setBatDiscPwr(nectrBocResultVO.getBatDiscPwr());
		nectrResultVO.setBatSOC(nectrBocResultVO.getBatSOC());
		nectrResultVO.setOutDate(nectrBocResultVO.getOutDate());
	};
	
	if(nectrPfResultVO!=null){
		nectrResultVO.setFLV_home_solar(nectrPfResultVO.getFLV_home_solar());
		nectrResultVO.setFLV_solar_grid(nectrPfResultVO.getFLV_solar_grid());
		nectrResultVO.setFLV_battery_home(nectrPfResultVO.getFLV_battery_home());
		nectrResultVO.setFLV_grid_battery(nectrPfResultVO.getFLV_gird_battery());
		nectrResultVO.setFLV_home_grid(nectrPfResultVO.getFLV_home_gird());
		nectrResultVO.setFLV_solar_battery(nectrPfResultVO.getFLV_solar_battery());
		nectrResultVO.setFL_solarToGrid(nectrPfResultVO.isFL_solarToGrid());
		nectrResultVO.setFL_gridToSolar(nectrPfResultVO.isFL_gridToSolar());
		nectrResultVO.setFL_gridToBattery(nectrPfResultVO.isFL_gridToBattery());
		nectrResultVO.setFL_batteryToGrid(nectrPfResultVO.isFL_batteryToGrid());
		nectrResultVO.setFL_batteryToHome(nectrPfResultVO.isFL_batteryToHome());
		nectrResultVO.setFL_homeToBattery(nectrPfResultVO.isFL_homeToBattery());
		nectrResultVO.setFL_homeToSolar(nectrPfResultVO.isFL_homeToSolar());
		nectrResultVO.setFL_solarToHome(nectrPfResultVO.isFL_solarToHome());
		nectrResultVO.setFL_solarToBattery(nectrPfResultVO.isFL_solarToBattery());
		nectrResultVO.setFL_batteryToSolar(nectrPfResultVO.isFL_batteryToSolar());
		nectrResultVO.setFL_homeToGrid(nectrPfResultVO.isFL_homeToGrid());
		nectrResultVO.setFL_gridToHome(nectrPfResultVO.isFL_gridToHome());
		nectrResultVO.setP_solarPower(nectrPfResultVO.getP_solarPower());
		nectrResultVO.setP_gridPower(nectrPfResultVO.getP_gridPower());
		nectrResultVO.setP_batteryPower(nectrPfResultVO.getP_batterPower());
		nectrResultVO.setP_homePower(nectrPfResultVO.getP_homePower());
		nectrResultVO.setBattery_SOC(nectrPfResultVO.getBattery_SOC());
		nectrResultVO.setBattery_SOH(nectrPfResultVO.getBattery_SOH());
	};

	if(nectrHpcResultVO!=null){
		nectrResultVO.setOutDate(nectrHpcResultVO.getOutDate());
		nectrResultVO.setAmount(nectrHpcResultVO.getAmount());
	};

	nectrMapper.nectrResultInsert(nectrResultVO);

	return true;
	
}

public String getHistId() throws Exception {
    
	String histId = nectrMapper.getHistId();

	int from = Integer.parseInt(histId);
	int amid=from+1;
	String to = Integer.toString(amid);

	return to;
}

}
