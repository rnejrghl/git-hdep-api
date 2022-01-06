<?php


class PlantModel
{
    private $DB;
    function __construct()
    {
        //$this->DB = getTestDB();
        $this->DB = getDB();
    }
    
    public function getSiteList($type = 'IV0001', $facId = 0) { //데이터를 축척할 사이트 가져오기
        $where = '';
        if ($facId > 0) {
            $where = " AND CPF.FAC_ID = $facId " ;
        }
        
        $query = "SELECT CP.PLANT_ID, PSC.SITE_ID, CP.PLANT_KEY, CPF.FAC_KEY, CPF.FAC_ID, CPF.FAC_TYPE, CP.TIMEZONE FROM CMN_PLANT CP
            LEFT JOIN  PRJ_SITE_CNRT PSC ON PSC.SITE_ID = CP.SITE_ID
            LEFT JOIN  CMN_PLANT_FAC CPF ON CP.PLANT_ID = CPF.PLANT_ID
         WHERE IFNULL(PSC.MNG_STRT_DT, '') != '' AND IFNULL(CP.PLANT_ID , 0) > 0 AND CP.PLANT_TYPE = '$type' $where
         ORDER BY CPF.FAC_ID DESC
         ";
        
        $list = $this->DB->query($query);
        return $list;
    }
    
    public function getSiteDeviceList($sumYn = false) {
        $query = " SELECT CD.DVCE_ID, CD.PNT_ADDR, CD.RESC_GUBN FROM CMN_DVCE CD ";
        if ($sumYn) {
            $query .= " WHERE SUM_YN = 'Y' ";
        }
        
        $list = $this->DB->query($query);
        return $list;
    }
    
    public function insertPlantHistory($siteId, $plantId, $deviceId, $facId, $amount, $acc_amount, $points, $time_stamp, $type = 'IV0001') {
        
        
        $points = str_replace('p', '', $points);
        $query = " INSERT INTO CMN_DVCE_HIST
                (SITE_ID, PLANT_ID, DVCE_ID, FAC_ID, PLANT_TYPE, PNT_ADDR, AMOUNT, ACC_AMOUNT, TIME_STAMP )
        VALUE ('$siteId','$plantId','$deviceId','$facId','$type','$points','$amount','$acc_amount', '$time_stamp');";
        
        $this->DB->query($query);
    }
    
    public function updatePlantHistory($hist_id, $amount, $accAmount = 0) {
        
        
        $set = '';
        if (! empty($accAmount)) {
            $set .= " , ACC_AMOUNT = $accAmount ";
        }
        $query = " UPDATE CMN_DVCE_HIST SET AMOUNT = '$amount' $set WHERE HIST_ID = '$hist_id';";
        
        $this->DB->query($query);
    }
    
    public function updatePlantFacOperInfo($p_status, $e_status, $facId, $time_stamp) {
        
        $query = " UPDATE CMN_PLANT_FAC SET FAC_PV_STATUS = '$p_status', FAC_ESS_STATUS = '$e_status', LAST_OPER_DATE = '$time_stamp' WHERE FAC_ID = '$facId' ";;
        $this->DB->query($query);
    }
    
    public function updatePlantFacStatusInfo($status, $facId) {
        $query = " UPDATE CMN_PLANT_FAC SET FAC_STATUS = '$status', LAST_STATUS_DATE = NOW() WHERE FAC_ID = '$facId' ";;
        $this->DB->query($query);
    }
    
    public function insertPlantFailHistory($data,  $facId, $plantId, $siteId, $fault_type) {
        $ps_id = $data['ps_id'];
        $ps_key = $data['ps_key'];
        $fault_code = $data['fault_code'];
        $create_time = $data['create_time'];
        $over_time = $data['over_time'];
        $fault_id = $data['id'];
        $response = json_encode($data);
        
        $query = "INSERT INTO CMN_FAIL_HIST (FAC_ID, PLANT_ID, SITE_ID, PS_ID, PS_KEY, FAULT_CODE,
            FAULT_TYPE, FAULT_RESPONSE, CREATE_TIME, OVER_TIME, FAULT_ID )
        VALUE ('$facId','$plantId','$siteId','$ps_id','$ps_key','$fault_code',
            '$fault_type','$response','$create_time','$over_time', '$fault_id') ";
        
        $this->DB->query($query);
    }
    
    public function getPlantFailHistory($fault_id) {
        $query = " SELECT HIST_ID, FAULT_CODE FROM CMN_FAIL_HIST WHERE FAULT_ID = '$fault_id'";
        $data = $this->DB->query($query);
        
        if (empty($data)) {
            return [];
        }
        return $data[0];
    }
    
    public function updatePlantFailHistory($data, $histId) {
        $fault_code = $data['fault_code'];
        $over_time = $data['over_time'];
        $query = " UPDATE CMN_FAIL_HIST SET FAULT_CODE = '$fault_code', OVER_TIME = '$over_time' WHERE HIST_ID = '$histId' ";
        return $this->DB->single($query);
    }
    
    public function updatePlantStatus($status, $psId, $timeStamp) {
        $query = " UPDATE CMN_PLANT SET PLANT_STATUS = '$status', LAST_STATUS_DATE = '$timeStamp' WHERE PLANT_ID = '$psId' ";;
        $this->DB->query($query);
    }
    
    public function getPlantHistory($type, $dvceList, $facId, $start, $end) {
        $format = $type == 'A' ? '%Y-%m-%d %H:00:00' : '%Y-%m-%d 00:00:00';
        
        $query = " SELECT SITE_ID, PLANT_ID, FAC_ID, DVCE_ID, PNT_ADDR, DATE_FORMAT(TIME_STAMP, '$format') as 'his_date',
                        sum(AMOUNT) as 'amt',  sum(ACC_AMOUNT) as 'acc_amt', max(ACC_AMOUNT) AS 'max_acc_amt'
        FROM CMN_DVCE_HIST
        WHERE TIME_STAMP BETWEEN '$start' AND '$end' and FAC_ID = '$facId'
            AND DVCE_ID IN ($dvceList)
        GROUP BY SITE_ID, PLANT_ID, FAC_ID, DVCE_ID, his_date";
        
        $data = $this->DB->query($query);
        return $data;
    }
    
    public function getPlantHistoryList($d_list, $fac_id , $timeStamp = '') {
        $addWhere = '';
        if (! empty($timeStamp)) {
            $timeStamp = date('Y-m-d H:i:s', strtotime($timeStamp));
            $addWhere = " and TIME_STAMP < '$timeStamp' ";
        }
        $query = "
        SELECT B.*, C.ACC_AMOUNT FROM (
            SELECT SITE_ID, FAC_ID, DVCE_ID, PNT_ADDR, max(TIME_STAMP) as 'TIME' FROM (
                SELECT * FROM CMN_DVCE_HIST
                    WHERE DVCE_ID in ($d_list)
                    AND FAC_ID = $fac_id
                    $addWhere
                    ORDER BY TIME_STAMP
            ) A
            group by SITE_ID, DVCE_ID )
        B LEFT JOIN CMN_DVCE_HIST C ON B.TIME = C.TIME_STAMP AND B.PNT_ADDR = C.PNT_ADDR AND B.SITE_ID = C.SITE_ID
        ";
                    
                    $data = $this->DB->query($query);
                    if (empty($data)) {
                        return [];
                    }
                    $conv = [];
                    foreach ($data as $key => $val) {
                        $conv['p' . $val['PNT_ADDR']] = $val['ACC_AMOUNT'];
                    }
                    
                    
                    return $conv;
    }
    
    public function getPlantHistoryTotalList($d_list, $facId, $s_date, $e_date) {
        $query = "
        SELECT * FROM CMN_DVCE_HIST
            WHERE DVCE_ID in ($d_list) AND TIME_STAMP BETWEEN '$s_date' and '$e_date' and FAC_ID = '$facId'
            ORDER BY TIME_STAMP
        ";
        
        $data = $this->DB->query($query);
        if (empty($data)) {
            return [];
        }
        $pntData = $histData = $amtData = [];
        foreach ($data as $key => $val) {
            $timestamp = date('YmdHis', strtotime($val['TIME_STAMP']));
            $histData[$timestamp]['p' . $val['PNT_ADDR']] = $val['HIST_ID'];
            $pntData[$timestamp]['p' . $val['PNT_ADDR']] = $val['ACC_AMOUNT'];
            $amtData[$timestamp]['p' . $val['PNT_ADDR']] = $val['AMOUNT'];
        }
        
        
        return ['pntData' => $pntData, 'histData' => $histData, 'amtData' => $amtData];
    }
    
    
    public function insertPlantFacSummary($data, $type) {
        $site_id = $data['SITE_ID'];
        $date = $data['his_date'];
        $total_amt = $data['amt'];
        //$total_acc_amt = $data['PNT_ADDR'] == 2 ? $data['max_acc_amt'] : $data['acc_amt'];
        
        if( $data['PNT_ADDR'] == 2 || $data['PNT_ADDR'] == 13134){
            $total_acc_amt = $data['max_acc_amt'] ;
        }else{
            $total_acc_amt = $data['acc_amt'] ;
        }
        
        $plant_id = $data['PLANT_ID'];
        $fac_id = $data['FAC_ID'];
        $dvce_id = $data['DVCE_ID'];
        $pnt_addr = $data['PNT_ADDR'];
        
        $query = " INSERT INTO CMN_HIS_SUM (SUM_TYPE, TIME_STAMP, SITE_ID, PLANT_ID, FAC_ID, DVCE_ID, PNT_ADDR, TOTAL_AMOUNT, TOTAL_ACC_AMOUNT )
        VALUE ('$type','$date','$site_id','$plant_id','$fac_id','$dvce_id', '$pnt_addr', '$total_amt',  '$total_acc_amt') ";
        
        $this->DB->query($query);
    }
    
    public function updatePlantFacSummary($data, $his_id) {
        $date = $data['his_date'];
        $total_amt = $data['amt'];
        //$total_acc_amt = $data['PNT_ADDR'] == 2 ? $data['max_acc_amt'] : $data['acc_amt'];
        
        if( $data['PNT_ADDR'] == 2 || $data['PNT_ADDR'] == 13134){
            $total_acc_amt = $data['max_acc_amt'] ;
        }else{
            $total_acc_amt = $data['acc_amt'] ;
        }
        
        $query = " UPDATE CMN_HIS_SUM SET TOTAL_AMOUNT = '$total_amt', TOTAL_ACC_AMOUNT = '$total_acc_amt' WHERE SUM_ID = '$his_id' and TIME_STAMP = '$date' ";
        
        $this->DB->query($query);
    }
    
    public function checkPlantFacSummary($data, $type) {
        $plant_id = $data['PLANT_ID'];
        $fac_id = $data['FAC_ID'];
        $dvce_id = $data['DVCE_ID'];
        $date = $data['his_date'];
        
        $query = " SELECT SUM_ID FROM CMN_HIS_SUM WHERE
            PLANT_ID = '$plant_id' AND FAC_ID = '$fac_id' AND DVCE_ID = '$dvce_id' AND TIME_STAMP = '$date' AND `SUM_TYPE` = '$type' ";
        
        $his_id = $this->DB->single($query);
        if (empty($his_id)) {
            return 0;
        }
        
        return $his_id;
    }
    
    public function insertDevice($data) {
        $insert = " insert into CMN_DVCE set ";
        foreach ($data as $field => $value) {
            $insert .= " $field = '$value',";
        }
        
        $insert = substr($insert,0, strlen($insert) -1);
        //
        //        echo $insert . ';<Br>';
        ////
        //        $this->DB->query($insert);
    }
    
    public function insertPowerHistory($siteId, $plantId, $facId,$time_stamp, $data) {
        $pw_amt = isset($data['pw_amt']) ? $data['pw_amt'] : 0;
        $ivt_ac = isset($data['ivt_ac']) ? $data['ivt_ac'] : 0;
        $ivt_dc = isset($data['ivt_dc']) ? $data['ivt_dc'] : 0;
        
        
        $bat_power = isset($data['bat_power']) ? $data['bat_power'] : 0;
        $load_power = isset($data['load_power']) ? $data['load_power'] : 0;
        $bat_char = isset($data['bat_char']) ? $data['bat_char'] : 0;
        $bat_disc = isset($data['bat_disc']) ? $data['bat_disc'] : 0;
        $oth_energy = isset($data['oth_energy']) ? $data['oth_energy'] : 0;
        $grid_power = isset($data['grid_power']) ? $data['grid_power'] : 0;
        
        
        $ppa = isset($data['ppa']) ? $data['ppa'] : 0;
        $energy_yield = isset($data['energy_yield']) ? $data['energy_yield'] : 0;
        
        
        $query = "INSERT INTO CMN_PLANT_HIST (SITE_ID, PLANT_ID, FAC_ID, PW_AMT, IVT_AC, IVT_DC, BAT_POWER, LOAD_POWER, BAT_CHAR, BAT_DISC, OTH_ENERGY, GRID_POWER  ,PPA, ENERGY_YIELD, TIME_STAMP)
            VALUE ('$siteId','$plantId','$facId','$pw_amt','$ivt_ac','$ivt_dc','$bat_power','$load_power','$bat_char','$bat_disc','$oth_energy','$grid_power',  '$ppa', '$energy_yield', '$time_stamp') ";
        
        $this->DB->query($query);
    }
    
    
    
    
    
    
    
    
    public function updatePowerHistory($facId, $time_stamp, $data,$preFuncName) {
        $pw_amt = isset($data['pw_amt']) ? $data['pw_amt'] : 0;
        $ppa = isset($data['ppa']) ? $data['ppa'] : 0;
        $time_stamp = date('Y-m-d H:i:s', strtotime($time_stamp));
        $query = " UPDATE CMN_PLANT_HIST SET PW_AMT = '$pw_amt' , PPA = '$ppa' WHERE FAC_ID = '$facId' AND TIME_STAMP = '$time_stamp'";
        // 로그삭제
        // setLog("updatePowerHistory_inputQuery",$preFuncName. "==>". $query);
        $this->DB->query($query);
    }
    
    
    public function checkPlantFacTagSummary($data, $type) {
        $plant_id = $data['PLANT_ID'];
        $fac_id = $data['FAC_ID'];
        $date = $data['his_date'];
        
        $query = " SELECT SUM_ID FROM CMN_PLANT_SUM WHERE
            PLANT_ID = '$plant_id' AND FAC_ID = '$fac_id' AND TIME_STAMP = '$date' AND `SUM_TYPE` = '$type' ";
        
        $his_id = $this->DB->single($query);
        if (empty($his_id)) {
            return 0;
        }
        
        return $his_id;
    }
    
    public function insertPlantFacTagSummary($pInfo, $data, $type) {
        $site_id = $pInfo['SITE_ID'];
        $date = $pInfo['his_date'];
        $plant_id = $pInfo['PLANT_ID'];
        $fac_id = $pInfo['FAC_ID'];
        
        $total_pw_amt = isset($data['pw_amt']) ? $data['pw_amt'] : 0;
        $total_ivt_ac = isset($data['ivt_ac']) ? $data['ivt_ac'] : 0;
        $total_ivt_dc = isset($data['ivt_dc']) ? $data['ivt_dc'] : 0;
        $total_energy_yield = isset($data['energy_yield']) ? $data['energy_yield'] : 0;
        $total_ppa = isset($data['ppa']) ? $data['ppa'] : 0;
        
        $query = " INSERT INTO CMN_PLANT_SUM (SUM_TYPE, TIME_STAMP, SITE_ID, PLANT_ID, FAC_ID, TOTAL_PW_AMT,TOTAL_IVT_AC,TOTAL_IVT_DC,TOTAL_ENERGY_YIELD,TOTAL_PPA)
        VALUE ('$type','$date','$site_id','$plant_id','$fac_id','$total_pw_amt', '$total_ivt_ac', '$total_ivt_dc',  '$total_energy_yield', '$total_ppa') ";
        
        $this->DB->query($query);
    }
    
    public function updatePlantFacTagSummary($data, $sum_id) {
        
        $total_pw_amt = isset($data['pw_amt']) ? $data['pw_amt'] : 0;
        $total_ivt_ac = isset($data['ivt_ac']) ? $data['ivt_ac'] : 0;
        $total_ivt_dc = isset($data['ivt_dc']) ? $data['ivt_dc'] : 0;
        $total_energy_yield = isset($data['energy_yield']) ? $data['energy_yield'] : 0;
        $total_ppa = isset($data['ppa']) ? $data['ppa'] : 0;
        
        $query = " UPDATE CMN_PLANT_SUM SET
                    TOTAL_PW_AMT = '$total_pw_amt', TOTAL_IVT_AC = '$total_ivt_ac', TOTAL_IVT_DC = '$total_ivt_dc', TOTAL_ENERGY_YIELD = '$total_energy_yield', TOTAL_PPA = '$total_ppa'
                   WHERE SUM_ID = '$sum_id' ";
        
        $this->DB->query($query);
    }
    
    public function getFacId() {
        $query = "
        SELECT CPF.FAC_ID, CP.PLANT_TYPE
        FROM CMN_PLANT CP
                    LEFT JOIN  PRJ_SITE_CNRT PSC ON PSC.SITE_ID = CP.SITE_ID
                    LEFT JOIN  CMN_PLANT_FAC CPF ON CP.PLANT_ID = CPF.PLANT_ID
        WHERE IFNULL(PSC.MNG_STRT_DT, '') != '' AND IFNULL(CP.PLANT_ID , 0) > 0
        ORDER BY CPF.FAC_ID DESC
        ";
        
        $data = $this->DB->query($query);
        if (empty($data)) {
            return [];
        }
        return $data;
    }
    
    
    public function getEssFacId() {
        $query = "
        SELECT CPF.FAC_ID, CP.PLANT_TYPE
        FROM CMN_PLANT CP
                    LEFT JOIN  PRJ_SITE_CNRT PSC ON PSC.SITE_ID = CP.SITE_ID
                    LEFT JOIN  CMN_PLANT_FAC CPF ON CP.PLANT_ID = CPF.PLANT_ID
        WHERE IFNULL(PSC.MNG_STRT_DT, '') != '' AND IFNULL(CP.PLANT_ID , 0) > 0
		AND CP.PLANT_TYPE = 'IV0003'
        ORDER BY CPF.FAC_ID DESC
        ";
        
        $data = $this->DB->query($query);
        if (empty($data)) {
            return [];
        }
        return $data;
    }
    
}