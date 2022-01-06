<?php


class ControlController
{

    private $control;
    private $sApi;

    function __construct()
    {
        $this->control = new ControlModel();
        $this->sApi = new SungrowController();

    }

    public function controlStart($facId){
       
        $status = $this->control->getControlState($facId);
        
        $taskId = $status['TASK_ID'];
        $calTime = $status['CAL_TIME'];
        $orderTime = $status['TIME_STAMP'];
        
        
        $order_dateTime = new DateTime($orderTime, new DateTimeZone('Australia/Sydney'));
        $order_timeStamp = $order_dateTime->getTimeStamp(); 

        $now_dateTime = new DateTime('now', new DateTimeZone('Australia/Sydney'));
        $now_timeStamp = $now_dateTime->getTimeStamp(); 

        $diff = $now_timeStamp - $order_timeStamp;


        
        if($calTime > $diff){
            //heartbeat
            $result = $this->sApi->set_ess_heart_beat($status);
            if(isset($status)){
                $status['TASK_ID'] = $result['data']['task_id'] ;
                $this->control->insertEssHeartBeat($status);
            }
        }else{
			/*
            //stop
            if($diff - $calTime <= 60*10*2 ){
                $result = $this->sApi->set_ess_stop($status);
                if(isset($status)){
                    $status['TASK_ID'] = $result['data']['task_id'] ;
                    //$this->control->insertEssStop($status);
                }
            }else{

                $result = ['status' => 'done'];
            }
			*/

        }

        return $status;


    }

 
}