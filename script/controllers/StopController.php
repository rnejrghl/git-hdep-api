<?php


class StopController
{

    private $control;
    private $sApi;

    function __construct()
    {
        $this->control = new ControlModel();
        $this->sApi = new SungrowController();

    }

    public function stopStart($facId){
       
        date_default_timezone_set('Australia/Sydney');
        $currentDate = date('Y-m-d H:i:s', time());

        $status = $this->control->getControlState($facId);
        $taskId = $status['TASK_ID'];
        //현재시간
        $currentDateTimestamp = strtotime($currentDate);
        $status['START'] = $currentDate;

        //시작시간
        $startDate = $status['TIME_STAMP'];
        $startDateTimestamp = strtotime($startDate);

        $calTime =$status['CAL_TIME']; 
        $pastTime = $currentDateTimestamp - $startDateTimestamp;

        $remainTime = $calTime - $pastTime;
        if( $remainTime < 0 ){
            $remainTime = 0;
        }

        $status['remainTime'] = $remainTime;

        //3분 이상의 시간이 남아 있으면 패스. 다음 CORN에 실행.. 
        if($remainTime > 60*3){
            $result = ['remainTime' => $remainTime,'msg' => 'wating for next cron.'];
            return $result;
        }

        //남은시간 만큼 기다리기
        sleep($remainTime);

        
        //read new
        $recentStatus = $this->control->getControlStateByTaskId($taskId);
        if($recentStatus['IS_STOP'] == 0){

            $status['FIRE'] = 'SUCCESS';

            $this->control->updateControlStateByTaskId($taskId);//update IS_STOP == 1
            $result = $this->sApi->set_ess_stop($status);
            if(isset($status)){
                $status['TASK_ID'] = $result['data']['task_id'] ;
                $this->control->insertEssStop($status);
            }
        }

        
      
        return $status;


    }



 
}