<?php


class PlantController
{
    private $plant;
    private $testPlant;
    private $sApi;
    private $plant_type;
    function __construct($plant_type)
    {
        $this->plant = new PlantModel();
        $this->testPlant = new PlantTestModel();
        $this->sApi = new SungrowController();
        
        $this->plant_type = $plant_type;
    }
    
    public function getSungrowHistory($facId,$now) {
        $site = $this->plant->getSiteList($this->plant_type, $facId);
        
        if (empty($site)) {
            return ['status' => false];
        }
        
        $device = $this->plant->getSiteDeviceList();
        if (empty($device)) {
            return ['status' => false];
        }
        
        $point_set = $points = [];
        foreach ($device as $val) {
            if (! empty($val['PNT_ADDR'])) {
                $point = 'p' . $val['PNT_ADDR'];
                $point_set[$point] = $val['DVCE_ID'];
                $points[$val['RESC_GUBN']][] = $point;
            }
        }
        
        // 이전 sg_history 에서 시간을 줌으로 삭제
        //$now = date('YmdHi00' );
        
        $date = date('YmdHi00', strtotime($now . '-3 minute'));
        $d_list = implode(',', array_column($device, 'DVCE_ID'));
        
        $timeData = [];
        foreach ($site as $key => $val) {
            $ps_key = $val['FAC_KEY'];
            $siteId = $val['SITE_ID'];
            $facId = $val['FAC_ID'];
            $facType = $val['FAC_TYPE'];
            $plantId = $val['PLANT_ID'];
            
            $plantInfo = [
                'siteId' => $siteId,
                'facId' => $facId,
                'plantId' => $plantId,
            ];
            
            $timeZone = $val['TIMEZONE'];
            $s_date = convert_date_timezone($date, 'UTC', $timeZone, 'YmdHi00');
            
            
            //날짜가 변경되는건 현지시간 기준으로 세팅한다.
            $pointList = implode(',', $points[$facType]);
            
            $b_data = $this->plant->getPlantHistoryList($d_list, $facId);
            $device_info = $this->sApi->get_sungrow_query_history_data($ps_key, $pointList, $s_date);
            
            
            //setLog("5 min device_info===>","device_info==>" .json_encode($device_info) ."//s_date==>" .$s_date ."//facId==>" .$facId);
            
            
            if ($device_info['status']) {
                $u_data = $device_info['data'];
                if (empty($u_data)) {
                    $this->checkPlantFacOperStatus([], $facType, $facId, $s_date);
                    continue;
                }
                //가져온 데이터로 insert
                foreach ($u_data as $info) {
                    $time_stamp = $info['time_stamp'];
                    $plantInfo['time_stamp'] = $time_stamp;
                    
                    $this->insertPointHistory($points[$facType], $info, $b_data, $point_set, $plantInfo);
                    $this->checkPlantFacOperStatus($info, $facType, $facId, $time_stamp);
                    
                }
                
                $timeData[$plantId] = $s_date;
            }
        }
        return ['status' => true, 'timeData' => $timeData , 'device_info' => $device_info];
    }
    
    private function checkPlantFacOperStatus($data, $type, $facId, $time_stamp) {
        $p_status = 'OPP002';//Idle
        $e_status = 'OPE001';//대기
        
        if ($type == 'A') {
            if ( isset($data['p14']) && $data['p14'] > 0) {
                $p_status = 'OPP001'; //발전RUN
            }else{
                $p_status = 'OPP002'; //Idle
            }
        }
        
        if ($type == 'B') {
            if ( isset($data['p13011']) && $data['p13011'] > 0) {
                $p_status = 'OPP001'; //발전RUN
            }else{
                $p_status = 'OPP002'; //Idle
            }
            
            if ( isset($data['p13126']) && $data['p13126'] > 0) {//Battery charging power
                $e_status = 'OPE002'; //충전
            } else if ( isset($data['p13150']) && $data['p13150'] > 0) {//Batty discherging power
                $e_status = 'OPE003'; //방전
            }
            
        }
        
        //insertDebugData($data,$facId,$p_status);
        
        $this->plant->updatePlantFacOperInfo($p_status, $e_status, $facId, $time_stamp);
        
        
    }
    
    
    public function getSungrowFailHistory() {
        $site = $this->plant->getSiteList($this->plant_type);
        
        if (empty($site)) {
            return false;
        }
        
        //$dd = [];
        $date = date('YmdHi');
        foreach ($site as $key => $val) {
            
            $ps_id = $val['PLANT_KEY'];
            $ps_key = $val['FAC_KEY'];
            $facId = $val['FAC_ID'];
            $plantId = $val['PLANT_ID'];
            $site_id = $val['SITE_ID'];
            
            $timeZone = $val['TIMEZONE'];
            $s_date = convert_date_timezone($date, 'UTC', $timeZone, 'Ymd0000');
            $e_date = convert_date_timezone($date, 'UTC', $timeZone, 'Ymd2359');
            
            $data = $this->sApi->get_sungrow_fault_list($ps_id, $ps_key, $s_date, $e_date);
            //insertFailData($data, $facId, $s_date) ;
            //array_push($dd, $data);
            
            
            if (!empty($data['data'])) {
                $failData = $data['data'];
                foreach ($failData as $fail) {
                    $failHist = $this->plant->getPlantFailHistory($fail['id']);
                    
                    if (! empty($failHist)) {
                        if ($failHist['FAULT_CODE'] != $fail['fault_code']) {
                            $this->plant->updatePlantFailHistory($fail, $failHist['HIST_ID']);
                        }
                    } else {
                        $fault_type = $this->convertFailType($fail['fault_type']);
                        $this->plant->insertPlantFailHistory($fail, $facId, $plantId, $site_id, $fault_type);
                    }
                    
                }
            }
            
            
        }
        
        //return $dd;
        return true;
    }
    
    private function convertFailType($fault_type) {
        switch ($fault_type) {
            case 1:
                $convType = 'OPF0001';
                break;
            case 2:
                $convType = 'OPF0002';
                break;
            case 3:
                $convType = 'OPF0003';
                break;
            case 4:
                $convType = 'OPF0004';
                break;
            default:
                $convType = 'OPF0005';
                break;
        }
        
        return $convType;
    }
    
    public function getSungrowPlantStatus($timeData) {
        $site = $this->plant->getSiteList($this->plant_type);
        
        if (empty($site)) {
            return false;
        }
        
        $psList = [];
        foreach ($site as $key => $val) {
            $psList[$val['PLANT_ID']]['ps_id'] = $val['PLANT_KEY'];
            $psList[$val['PLANT_ID']]['ps_key_list'][] = $val['FAC_KEY'];
            $psList[$val['PLANT_ID']]['fac_id'][] = $val['FAC_ID'];
        }
        
        foreach ($psList as $plantId => $info) {
            if (! isset($timeData[$plantId])) {
                continue;
            }
            $psId = $info['ps_id'];
            $psKey = $info['ps_key_list'];
            $facIds = $info['fac_id'];
            $data = $this->sApi->get_sungrow_real_time_data($psId, $psKey);
            if ($data['status']) {
                $u_data = $data['data'];
                //현재 발전소 정보 업데이트
                $ps_status = 'AL0001'; //normal
                foreach ($u_data as $val) {
                    $ps_key = $val['ps_key'];
                    $fac_index = array_search($ps_key, $psKey);
                    if ($fac_index >= 0) {
                        $facId = $facIds[$fac_index];
                        $dev_status = $this->checkPlantFacStatus($val, $facId);
                        
                        if ($dev_status == 'AL0003') {
                            //디바이스 정보가 offline 일 때 무조건 offline
                            $ps_status = 'AL0003'; //offline
                        } else if ($dev_status == 'AL0002') {
                            //디바이스 정보가 fault 일 때 offline 가 아니면 false
                            if ($ps_status != 'AL0003') {
                                $ps_status = 'AL0002'; //fault
                            }
                        }
                    }
                }
                
                $this->plant->updatePlantStatus($ps_status, $plantId, $timeData[$plantId]);
            }
        }
        
        
        return true;
    }
    
    private function checkPlantFacStatus($data, $facId) {
        $status = 'AL0003'; // offline
        if ( $data['dev_status'] == 0) {
            if ($data['dev_fault_status'] == 1) {
                $status = 'AL0002'; //fault
            }
        } else if ($data['dev_status'] == 1) {
            if ($data['dev_fault_status'] == 2 || $data['dev_fault_status'] == 4) {
                $status = 'AL0001'; //normal
            }
        }
        
        $this->plant->updatePlantFacStatusInfo($status, $facId);
        
        return $status;
        
    }
    
    public function checkSungrowHistory() {
        
        
        $site = $this->plant->getSiteList($this->plant_type);
        if (empty($site)) {
            return ['status' => false];
        }
        
        $device = $this->plant->getSiteDeviceList();
        if (empty($device)) {
            return ['status' => false];
        }
        
        $point_set = $points = [];
        foreach ($device as $val) {
            if (! empty($val['PNT_ADDR'])) {
                $point = 'p' . $val['PNT_ADDR'];
                $point_set[$point] = $val['DVCE_ID'];
                $points[$val['RESC_GUBN']][] = $point;
            }
        }
        
        $now = date('YmdH0000');
        
        $c_start_date = date('YmdH0000', strtotime($now . '-2 hour'));
        $c_end_date = date('YmdH0000', strtotime($now . '-1 hour'));
        
        $d_list = implode(',', array_column($device, 'DVCE_ID'));
        $changeList = [];
        
        foreach ($site as $key => $val) {
            $ps_key = $val['FAC_KEY'];
            $siteId = $val['SITE_ID'];
            $facId = $val['FAC_ID'];
            $facType = $val['FAC_TYPE'];
            $plantId = $val['PLANT_ID'];
            
            $timeZone = $val['TIMEZONE'];
            $s_date = convert_date_timezone($c_start_date, 'UTC', $timeZone, 'YmdHi00');
            $e_date = convert_date_timezone($c_end_date, 'UTC', $timeZone, 'YmdHi00');
            
            //날짜가 변경되는건 현지시간 기준으로 세팅한다.
            $pointList = implode(',', $points[$facType]);
            $device_info = $this->sApi->get_sungrow_query_history_data($ps_key, $pointList, $s_date, $e_date);
            
            if ($device_info['status']) {
                $u_data = $device_info['data'];
                if (empty($u_data)) {
                    continue;
                }
                
                $b_list = $this->plant->getPlantHistoryTotalList($d_list, $facId, $s_date, $e_date);
                $pntData = isset($b_list['pntData']) ? $b_list['pntData'] : [];
                $ub_data = $b_data = $this->plant->getPlantHistoryList($d_list, $facId, $s_date);
                
                
                $plantInfo = [
                    'siteId' => $siteId,
                    'facId' => $facId,
                    'plantId' => $plantId,
                ];
                
                $newCnt = $change_cnt = 0;
                foreach ($u_data as $info) {
                    $time_stamp =  $info['time_stamp'];
                    
                    if (! isset($pntData[$time_stamp]) || empty($pntData[$time_stamp])) {
                        $plantInfo['time_stamp'] = $time_stamp;
                        $this->insertPointHistory($points[$facType], $info, $b_data, $point_set, $plantInfo);
                        
                        $b_data = $info;
                        $newCnt ++;
                    }
                }
                
                if ($newCnt > 0) {
                    $n_date = convert_date_timezone($now, 'UTC', $timeZone, 'YmdHi00');
                    $u_list = $this->plant->getPlantHistoryTotalList($d_list, $facId, $s_date, $n_date);
                    $uHistData = isset($u_list['histData']) ? $u_list['histData'] : [];
                    $uPntData = isset($u_list['pntData']) ? $u_list['pntData'] : [];
                    $uAmtData = isset($u_list['amtData']) ? $u_list['amtData'] : [];
                    foreach ($uPntData as $time => $data) {
                        $convData = [];
                        foreach ($points[$facType] as $point) {
                            if (isset($data[$point]) && ! empty($data[$point])) {
                                $accAmount = $amount = floatval($data[$point]);
                                if (gettype($amount) == 'string') {
                                    continue;
                                }
                                
                                if (isset($ub_data[$point])) {
                                    $b_amount = $ub_data[$point];
                                    $amount = $amount - $b_amount;
                                    
                                    // if (! isset($uAmtData[$time][$point]) || $amount != $uAmtData[$time][$point]) {
                                    // 위에 if문은 $amount 와 $uAmtData[$time][$point] 값이 달라도 실행 안됨 아래와같이 비교해줘야 맞음
                                    if (! isset($uAmtData[$time][$point]) || round($amount,2) !== round($uAmtData[$time][$point],2)) {
                                        $hist_id = $uHistData[$time][$point];
                                        $this->plant->updatePlantHistory($hist_id, $amount);
                                        $convData = $this->matchPointData($convData, $point, $amount, $accAmount) ;
                                        $change_cnt ++;
                                    }
                                    
                                    $ub_data[$point] = $accAmount;
                                }
                            }
                        }
                        
                        if (! empty($convData) && isset($convData['pw_amt'])) {
                            //update
                            //                            $this->testPlant->updatePowerHistory($facId, $time, $convData);
                            $this->plant->updatePowerHistory($facId, $time, $convData,"checkSungrowHistory");
                        }
                    }
                }
                
                $changeList[] = ['fac_id' => $facId , 'cStatus' => ($change_cnt > 0 ? true : false) , 'time_stamp' => $c_start_date ];
            }
        }
        return ['status' => true, 'change' => $changeList];
    }
    
    
    
    public function checkSungrowAmount($facId) {
        $site = $this->plant->getSiteList($this->plant_type, $facId);
        
        if (empty($site)) {
            return ['status' => false];
        }
        
        $device = $this->plant->getSiteDeviceList();
        
        if (empty($device)) {
            return ['status' => false];
        }
        
        $point_set = $points = [];
        foreach ($device as $val) {
            if (! empty($val['PNT_ADDR'])) {
                $point = 'p' . $val['PNT_ADDR'];
                $point_set[$point] = $val['DVCE_ID'];
                $points[$val['RESC_GUBN']][] = $point;
            }
        }
        
        $s_date = date('Ymd000000');
        $e_date = date('Ymd230000');
        
        $d_list = implode(',', array_column($device, 'DVCE_ID'));
        
        $changeList = [];
        foreach ($site as $key => $val) {
            $ps_key = $val['FAC_KEY'];
            $siteId = $val['SITE_ID'];
            $facId = $val['FAC_ID'];
            $facType = $val['FAC_TYPE'];
            $plantId = $val['PLANT_ID'];
            
            
            $pointList = implode(',', $points[$facType]);
            $device_info = $this->sApi->get_sungrow_query_history_data($ps_key, $pointList, $s_date, $e_date);
            
            
            //setLog("checkSungrowAmount===>","device_info==>" .json_encode($device_info) ."///siteId===>" .$siteId);
            
            
            if ($device_info['status']) {
                $u_data = $device_info['data'];
                
                if (empty($u_data)) {
                    continue;
                }
                
                
                $s_date = date('Y-m-d H:i:s', strtotime($s_date));
                $e_date = date('Y-m-d H:i:s', strtotime($e_date));
                $b_list = $this->plant->getPlantHistoryTotalList($d_list, $facId, $s_date, $e_date);
                
                $pntData = isset($b_list['pntData']) ? $b_list['pntData'] : [];
                $histData = isset($b_list['histData']) ? $b_list['histData'] : [];
                $amtData = isset($b_list['amtData']) ? $b_list['amtData'] : [];
                
                $ub_data = $b_data = $this->plant->getPlantHistoryList($d_list, $facId, $s_date);
                
                $plantInfo = [
                    'siteId' => $siteId,
                    'facId' => $facId,
                    'plantId' => $plantId,
                ];
                
                $newCnt = $change_cnt = $upCnt = 0;
                foreach ($u_data as $info) {
                    $time_stamp =  $info['time_stamp'];
                    if (! isset($pntData[$time_stamp]) || empty($pntData[$time_stamp])) {
                        $plantInfo['time_stamp'] = $time_stamp;
                        $this->insertPointHistory($points[$facType], $info, $b_data, $point_set, $plantInfo);
                        
                        $b_data = $info;
                        $newCnt ++;
                        
                    } else {
                        foreach ($points[$facType] as $point) {
                            if (! isset($pntData[$time_stamp][$point]) || ! isset($info[$point])) {
                                continue;
                            }
                            
                            if ($info[$point] != $pntData[$time_stamp][$point]) {
                                $hist_id = $histData[$time_stamp][$point];
                                $this->plant->updatePlantHistory($hist_id,$amtData[$time_stamp][$point], $info[$point]);
                                
                                $upCnt ++;
                            }
                        }
                        
                    }
                }
                
                if (($newCnt + $upCnt) > 0) {
                    $u_list = $this->plant->getPlantHistoryTotalList($d_list, $facId, $s_date, $e_date);
                    
                    $uHistData = isset($u_list['histData']) ? $u_list['histData'] : [];
                    $uPntData = isset($u_list['pntData']) ? $u_list['pntData'] : [];
                    $uAmtData = isset($u_list['amtData']) ? $u_list['amtData'] : [];
                    
                    foreach ($uPntData as $time => $data) {
                        $convData = [];
                        foreach ($points[$facType] as $point) {
                            if (isset($data[$point]) && ! empty($data[$point])) {
                                $accAmount = $amount = floatval($data[$point]);
                                
                                if (gettype($amount) == 'string') {
                                    continue;
                                }
                                
                                
                                if (isset($ub_data[$point])) {
                                    
                                    $b_amount = $ub_data[$point];
                                    
                                    $amount = $amount - $b_amount;
                                    
                                    //if (! isset($uAmtData[$time][$point]) || $amount != $uAmtData[$time][$point]) {
                                    // 위에 if문은 $amount 와 $uAmtData[$time][$point] 값이 달라도 실행 안됨 아래와같이 비교해줘야 맞음
                                    if (! isset($uAmtData[$time][$point]) || round($amount,2) !== round($uAmtData[$time][$point],2)) {
                                        $hist_id = $uHistData[$time][$point];
                                        $this->plant->updatePlantHistory($hist_id, $amount);
                                        $convData = $this->matchPointData($convData, $point, $amount, $accAmount) ;
                                        $change_cnt ++;
                                    }
                                    
                                    $ub_data[$point] = $accAmount;
                                }
                            }
                        }
                        
                        // pw_amt 가없을경우도있어 pw_amt key 값이 있을때만 수행
                        if (! empty($convData) && isset($convData['pw_amt'])) {
                            //update
                            //                            $this->testPlant->updatePowerHistory($facId, $time, $convData);
                            $this->plant->updatePowerHistory($facId, $time, $convData,"checkSungrowAmount");
                        }
                        
                        $changeList[] = ['fac_id' => $facId , 'cStatus' => ($change_cnt > 0 ? true : false) , 'time_stamp' => $time ];
                    }
                    
                    
                }
                
                
            }
        }
        
        return ['status' => true, 'change' => $changeList];
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    private function insertPointHistory($points, $info, $b_data, $point_set, $ectInfo) {
        $siteId = $ectInfo['siteId'];
        $facId = $ectInfo['facId'];
        $plantId = $ectInfo['plantId'];
        $time_stamp = $ectInfo['time_stamp'];
        
        $convData = [];
        foreach ($points as $point) {
            if (isset($info[$point]) && ! empty($info[$point])) {
                $acc_amount = $amount = floatval($info[$point]);
                if (gettype($amount) == 'string') {
                    continue;
                }
                
                if (isset($b_data[$point])) {
                    $b_amount = $b_data[$point];
                    $amount = $amount - $b_amount;
                }
                
                $deviceId = $point_set[$point];
                
                $this->plant->insertPlantHistory($siteId, $plantId, $deviceId, $facId, $amount, $acc_amount,
                    $point, $time_stamp, $this->plant_type);
                
                $convData = $this->matchPointData($convData, $point, $amount, $acc_amount) ;
            }
        }
        
        
        
        
        
        //HERE
        
        
        
        
        
        $this->plant->insertPowerHistory($siteId, $plantId, $facId, $time_stamp,$convData);
    }
    
    private function insertTestPointHistory($points, $info, $b_data, $point_set, $ectInfo, $time_stamp) {
        $convData = [];
        foreach ($points as $point) {
            if (isset($info[$point]) && ! empty($info[$point])) {
                $acc_amount = $amount = floatval($info[$point]);
                if (gettype($amount) == 'string') {
                    continue;
                }
                
                if (isset($b_data[$point])) {
                    $b_amount = $b_data[$point];
                    $amount = $amount - $b_amount;
                }
                
                $deviceId = $point_set[$point];
                
                foreach ($ectInfo as $etc) {
                    $siteId = $etc['SITE_ID'];
                    $facId = $etc['FAC_ID'];
                    $plantId = $etc['PLANT_ID'];
                    
                    $this->testPlant->insertPlantHistory($siteId, $plantId, $deviceId, $facId, $amount, $acc_amount,
                        $point, $time_stamp, $this->plant_type);
                    
                }
                
                $convData = $this->matchPointData($convData, $point, $amount, $acc_amount) ;
            }
        }
        
        foreach ($ectInfo as $etc) {
            $siteId = $etc['SITE_ID'];
            $facId = $etc['FAC_ID'];
            $plantId = $etc['PLANT_ID'];
            //TEST
            $this->testPlant->insertPowerHistory($siteId, $plantId, $facId, $time_stamp, $convData);
        }
    }
    
    
    private function matchPointData($data, $point, $amount, $accAmount) {
        $point = str_replace('p', '', $point);
        switch ($point) {
            
            //pv
            case '2' :  // 썬그로우 PV Prdoction (kWh)
                $data['pw_amt'] = $amount;
                break;
            case '13134' :  // 썬그로우 PV+ESS Prdoction (kWh)
                $data['pw_amt'] = $amount;
                break;
                
                //pv
            case '1' :  // 썬그로우 PV Energy Yield (kWh)
                $data['energy_yield'] = $accAmount;
                break;
            case '13112' :  // 썬그로우 PV+ESS Energy Yield (kWh)
                $data['energy_yield'] = $accAmount;
                break;
                
                //inverter
            case '24' : // 썬그로우 PV IVT Efficiency (%)
                $data['ivt_ac'] = $accAmount;
                break;
            case '13011' :  // 썬그로우 PV IVT Efficiency (%)  //PV
                $data['ivt_ac'] = $accAmount;
                break;
                
                //pv
            case '14' :
                $data['ivt_dc'] = $accAmount;
                break;
            case '13003' :
                $data['ivt_dc'] = $accAmount;
                break;
                
                //other
            case '13116' :  // 썬그로우 PV+ESS PPA (KWh)
                $data['ppa'] = $amount;
                break;
                
                
                //2021-03-19
                //LOAD
                
                
            case '13141' :  // Battery Power
                $data['bat_power'] = $accAmount;
                break;
                
                
            case '13119' :  // Total Load Active Power //Load
                $data['load_power'] = $amount;
                break;
                
                //Battery
            case '13126' :  // 썬그로우 PV+ESS Battery charging power //CharBat
                $data['bat_char'] = $amount;
                break;
                
                //Battery
            case '13150' :  // Battery discharging power //DiscBat
                $data['bat_disc'] = $amount;
                break;
                
                //other
            case '13149' :  // 썬그로우 PV+ESS P-energy get from grid //FromGRID
                $data['oth_energy'] = $amount;
                break;
                
                //grid
            case '13121' :  // 썬그로우 PV+ESS Feed power //ToGRID
                $data['grid_power'] = $amount;
                break;
            default:
                break;
        }
        
        return $data;
    }
    
    
    function convertSungrowHist($sDate, $eDate) {
        $site = $this->plant->getSiteList($this->plant_type);
        if (empty($site)) {
            return ['status' => false];
        }
        
        foreach ($site as $key => $val) {
            $ps_key = $val['FAC_KEY'];
            $siteId = $val['SITE_ID'];
            $facId = $val['FAC_ID'];
            $facType = $val['FAC_TYPE'];
            $plantId = $val['PLANT_ID'];
            
            $s_date = date('Y-m-d H:i:00', strtotime($sDate));
            $e_date = date('Y-m-d H:i:00', strtotime($eDate));
            
            
            
            //            $d_list = implode(',', array_column($device, 'DVCE_ID'));
            $d_list = "60,61,62,66";
            $b_list = $this->plant->getPlantHistoryTotalList($d_list, $facId, $s_date, $e_date);
            $pntData = $b_list['pntData'];
            $amtData = $b_list['amtData'];
            foreach ($pntData as $time => $data) {
                
                $convData = [];
                foreach ($data as $point => $acc_amount) {
                    $amount = isset($amtData[$time][$point]) ? $amtData[$time][$point] : 0;
                    $convData = $this->matchPointData($convData, $point, $amount, $acc_amount) ;
                }
                
                $time = date('Y-m-d H:i:00', strtotime($time));
                $this->plant->insertPowerHistory($siteId, $plantId, $facId, $time,$convData);
            }
        }
        
        return true;
        
    }
}



//$plantData = $this->sApi->get_sungrow_fault_list('708883_14_1_1');
//echo '<xmp>';
//print_r($plantData);
//echo '</xmp>';
//exit;