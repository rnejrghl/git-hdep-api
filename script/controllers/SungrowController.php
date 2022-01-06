<?php
class SungrowController
{
    private $login ;
    function __construct() {
        $this->login = $this->get_sungrow_login();
    }
    
    private function getLogin() {
        $loginData = get_json_data('sungrowLogin');
        if (empty($lognData)) {
            $loginData = $this->setLogin();
        }
        
        $this->login = $loginData;
    }
    
    private function setLogin() {
        $loginData = $this->get_sungrow_login();
        set_json_data('sungrowLogin', $loginData);
        
        return $loginData;
    }
    
    private function curl_execute($data, $url = SUNGROW_API_URL) {
        
        $sendData = json_encode($data);
        $ch    = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $sendData);
        $response = curl_exec($ch);
        curl_close($ch);
        
        $response = json_decode($response, 1);
        //        if ($response['result_code'] == 'E00003') {
        //            $this->login = $this->setLogin();
        //        }
        return $response;
    }
    
    // header부분 type 설정으로인한오류로 curl_execute2 추가로만들어 진행
    private function curl_execute2($data, $url = SUNGROW_API_URL) {
        
        $sendData = json_encode($data);
        $headers[] = 'Content-Type: application/json';
        $ch    = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $sendData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        curl_close($ch);
        
        $response = json_decode($response, 1);
        
        return $response;
    }
    
    
    
    public function get_sungrow_login() {
        
        $data = [
            'appkey' =>  SUNGROW_API_KEY,
            
            'lang' => '_en_US',
            'user_account' => SUNGROW_ACCESS_ID,
            'user_password' => SUNGROW_ACCESS_PASSWORD,
            'sys_code' => '901',
            'login_type' => '1'
        ];
        
        
        $url = 'https://augateway.isolarcloud.com/v1/userService/login';
        
        $result = $this->curl_execute2($data,$url);
        
        
        $data = [
            'token' => $result['result_data']['token'],
            'user_id' => $result['result_data']['user_id']
        ];
        
        
        
        return $data; //필요한 데이터만 반환
    }
    
    
    public function get_sungrow_plant_list() {// 사용 안함
        $data = [
            'appkey' =>  SUNGROW_API_KEY,
            'service' => 'getPsList',
            'lang' => '_en_US',
            'share_type' => 1,
            'user_id' => $this->login['user_id'],//로그인 시 받아온 user_id,
            'token' => $this->login['token'],//로그인 시 받아온 token,
        ];
        
        $result = $this->curl_execute($data);
        
        if ($result['result_code'] <= 0) {
            return ['status' => false];
        }
        
        $list = $result['result_data']['pageList'];
        $data = [];
        foreach ($list as $key => $val) {
            $data[] = [
                'ps_id' => $val['ps_id'],
                'ps_status' => $val['ps_status'],
                'ps_fault_status' => $val['ps_false_status']
            ];
        }
        
        return ['status' => true, 'data' => $data];
    }
    
    
    public function get_sungrow_device_information_list($ps_id) {//이것도 안쓰는듯?
        $data = [
            'appkey' =>  SUNGROW_API_KEY,
            'lang' => '_en_US',
            'user_id' => $this->login['user_id'],//로그인 시 받아온 user_id,
            'token' => $this->login['token'],//로그인 시 받아온 token,
            
            'ps_id' => $ps_id,
            'device_type_list' => ["1", "14"],
            'sys_code' => '901'
            
        ];
        
        $url = 'https://augateway.isolarcloud.com/v1/devService/getDeviceList';
        $result = $this->curl_execute($data,$url);
        
        
        if ($result['result_code'] <= 0) {
            return ['status' => false];
        }
        
        $list = $result['result_data']['pageList'];
        $data = [];
        if (! empty($list)) {
            foreach ($list as $key => $val) {
                $data[] = [
                    'device_type' => $val['device_type'],
                    'ps_key' => $val['ps_key'],
                    'uuid' => $val['uuid'],
                    'device_pro_sn' => $val['device_pro_sn'],
                    'sn' => $val['sn'],
                ];
            }
        }
        
        return ['status' => true, 'data' => $data];
    }
    
    public function get_sungrow_station_information($ps_id) {//이것도 안쓰는듯?
        $data = [
            'appkey' =>  SUNGROW_API_KEY,
            'lang' => '_en_US',
            'user_id' => $this->login['user_id'],//로그인 시 받아온 user_id,
            'token' => $this->login['token'],//로그인 시 받아온 user_id,
            
            'ps_id' => $ps_id,
            'sys_code' => '901'
        ];
        
        $url = 'https://augateway.isolarcloud.com/v1/powerStationService/getPowerStationForHousehold';
        $result = $this->curl_execute($data,$url);
        
        if ($result['result_code'] <= 0) {
            return ['status' => false];
        }
        
        $list = $result['result_data'];
        
        if (! empty($list)) {
            $data = [
                'ps_id' => $list['ps_id'],
                'timeZone' => $list['timezone']
            ];
            
        } else {
            $data = [
                'ps_id' => 0,
                'timeZone' => ''
            ];
        }
        
        return ['status' => true, 'data' => $data];
    }
    
    
    public function get_sungrow_real_time_data($ps_id, $ps_key_list) {
        $data = [
            'appkey' =>  SUNGROW_API_KEY,
            'lang' => '_en_US',
            'ps_id' => $ps_id,
            'token' => $this->login['token'],//로그인 시 받아온 token,
            
            'ps_key_list' => $ps_key_list,
            'sys_code' => '901'
        ];
        
        $url = 'https://augateway.isolarcloud.com/v1/devService/queryDeviceRealTimeDataByPsKeys';
        $result = $this->curl_execute2($data,$url);
        
        
        if ($result['result_code'] <= 0) {
            return ['status' => false];
        }
        
        $list = $result['result_data']['device_point_list'];
        
        $data = [];
        foreach ($list as $key => $val) {
            $info = $val['device_point'];
            $data[] = [
                'device_time' => isset($info['device_time']) ? $info['device_time'] : 0,
                'dev_status' => isset($info['dev_status']) ? $info['dev_status'] : '',
                'dev_fault_status' => isset($info['dev_fault_status']) ? $info['dev_fault_status'] : '',
                'ps_key' => $info['ps_key'],
            ];
        }
        
        return ['status' => true, 'data' => $data];
    }
    
    public function get_sungrow_query_history_data($ps_key, $points, $s_date, $e_date = '') {
        
        $points_array = explode(',',$points);
        $except = ['p13138','p13139','p13162','p13163','p13146','p13160','p13161','p13164','p13165','p13166','p13167','p13168','p13171','p13147','p13012'];
        
        $result = array_diff($points_array, $except);
        $points = implode(',',$result);
        
        $e_date = empty($e_date) ? $s_date : $e_date;
        
        
        
        $data = [
            'appkey' =>  SUNGROW_API_KEY,
            'lang' => '_en_US',
            'user_id' => $this->login['user_id'],//로그인 시 받아온 user_id,
            'token' => $this->login['token'],//로그인 시 받아온 token,
            
            'ps_key' => $ps_key,
            'points' => $points,
            'start_time_stamp' => $s_date,//'20210401215000'
            'end_time_stamp' => $e_date,
            'sys_code' => '901'
        ];
        
        //setLog("5 min device_info_1===>","data==>" .json_encode($data));
        
        $url = 'https://augateway.isolarcloud.com/v1/commonService/queryDevicePointMinuteDataList';
        $result = $this->curl_execute2($data,$url);
        // 로그삭제
        // setLog("get_sungrow_query_history_data_outPutData",json_encode($result));
        //        slack_webhook(print_r($data, 1));
        
        //        insertHistoryData($result, $data, $ps_key);
        if ($result['result_code'] <= 0) {
            return ['status' => false];
        }
        
        
        $list = $result['result_data'];
        
        // error_log ("test", 3, "/var/log/debug.log");
        return ['status' => true, 'data' => $list];
    }
    
    
    public function get_sungrow_fault_list($ps_id,$ps_key, $sDate, $eDate) {
        
        $data = [
            'appkey' =>  SUNGROW_API_KEY,
            'lang' => '_en_US',
            'user_id' => $this->login['user_id'],//로그인 시 받아온 user_id,
            'token' => $this->login['token'],//로그인 시 받아온 token,
            
            'ps_key' => $ps_key,
            'ps_id' => $ps_id,
            'process_status' => '9',
            'fault_type' => "1",
            "sys_code" => "901",
            'startTime' => $sDate,
            'endTime' => $eDate,
            'curPage' => "1",
            'size' => "50"
        ];
        
        $url = 'https://augateway.isolarcloud.com/v1/faultService/queryFaultList';
        $result = $this->curl_execute($data,$url);
        
        
        print_r($result);
        
        if ($result['result_code'] <= 0) {
            return ['status' => false];
        }
        
        
        $list = $result['result_data']['pageList'];
        
        
        return ['status' => true, 'data' => $list];
    }
    
    
    
    
    
    public function set_ess_heart_beat($req) {
        $taskId = $req['TASK_ID'];
        $status = $req['STATUS'];
        $power = $req['POWER']*1000;
        $lmtUSoc = $req['LMT_U_SOC']*10;
        $lmtLSoc = $req['LMT_L_SOC']*10;
        $goal = $req['GOAL'];
        $calTime = $req['CAL_TIME'];
        
        $uuid = $req['UUID'];
        
        
        $data = [
            'appkey' =>  SUNGROW_API_KEY,
            'task_name' => 'heartbeat cron',
            'lang' => '_en_US',
            'token' => $this->login['token'],//로그인 시 받아온 token,
            'expire_second' => '1800',
            'uuid' => $uuid,
            'set_type' => '0',
            'sys_code' => '901',
            'param_list' => [
                [
                    'param_code' => '10017',
                    'set_value' => '1000'
                ]
            ]
            
        ];
        
        $url = 'https://augateway.isolarcloud.com/v1/devService/paramSettingNova';
        $result = $this->curl_execute2($data,$url);
        
        
        if ($result['result_code'] <= 0) {
            return ['status' => false];
        }
        
        $list = $result['result_data']['dev_result_list'][0];
        return ['status' => true, 'data' => $list];
    }
    
    
    public function set_ess_stop($req) {
        $taskId = $req['TASK_ID'];
        $status = '204';
        $power = $req['POWER']*1000;
        $lmtUSoc = $req['LMT_U_SOC']*10;
        $lmtLSoc = $req['LMT_L_SOC']*10;
        $goal = $req['GOAL'];
        $calTime = $req['CAL_TIME'];
        
        $uuid = $req['UUID'];
        
        $data = [
            'appkey' =>  SUNGROW_API_KEY,
            'task_name' => 'stop cron',
            'lang' => '_en_US',
            'token' => $this->login['token'],//로그인 시 받아온 token,
            'expire_second' => '1800',
            'uuid' => $uuid,
            'set_type' => '0',
            'sys_code' => '901',
            'param_list' => [
                [
                    'param_code' => '10003',
                    'set_value' => '4'
                ],
                [
                    'param_code' => '10004',
                    'set_value' => $status
                ]
            ]
            
        ];
        
        
        $url = 'https://augateway.isolarcloud.com/v1/devService/paramSettingNova';
        $result = $this->curl_execute2($data,$url);
        
        if ($result['result_code'] <= 0) {
            return ['status' => false];
        }
        
        $list = $result['result_data']['dev_result_list'][0];
        return ['status' => true, 'data' => $list];
    }
    
    
    
    
}
