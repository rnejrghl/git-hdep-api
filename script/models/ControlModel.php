<?php



class ControlModel
{
    private $DB;
    function __construct()
    {
        //$this->DB = getTestDB();
        $this->DB = getDB();
    }
    
    
    public function insertEssHeartBeat($req) {
        
        $taskId = $req['TASK_ID'];
        $status = 'heartbeat';
        $power = $req['POWER'];
        $lmtUSoc = $req['LMT_U_SOC'];
        $lmtLSoc = $req['LMT_L_SOC'];
        $goal = $req['GOAL'];
        $calTime = $req['CAL_TIME'];
        
        $siteId = $req['SITE_ID'];
        $uuid = $req['UUID'];
        $facId = $req['FAC_ID'];
        
        $query = " INSERT INTO CMN_CONTROL_HIST (TASK_ID,TASK_FROM, STATUS,POWER, LMT_U_SOC, LMT_L_SOC, GOAL, CAL_TIME,SITE_ID, UUID,FAC_ID)
        VALUE ('$taskId','cron','$status','$power','$lmtUSoc','$lmtLSoc','$goal','$calTime','$siteId','$uuid','$facId') ";
        
        $this->DB->query($query);
    }
    
    public function insertEssStop($req) {
        $taskId = $req['TASK_ID'];
        $status = 'stop';
        $power = $req['POWER'];
        $lmtUSoc = $req['LMT_U_SOC'];
        $lmtLSoc = $req['LMT_L_SOC'];
        $goal = $req['GOAL'];
        $calTime = 0;
        
        $siteId = $req['SITE_ID'];
        $uuid = $req['UUID'];
        $facId = $req['FAC_ID'];
        
        $query = " INSERT INTO CMN_CONTROL_HIST (TASK_ID,TASK_FROM, STATUS,POWER, LMT_U_SOC, LMT_L_SOC, GOAL, CAL_TIME,SITE_ID, UUID, FAC_ID)
        VALUE ('$taskId', 'cron','$status','$power','$lmtUSoc','$lmtLSoc','$goal','$calTime','$siteId','$uuid','$facId') ";
        
        $this->DB->query($query);
    }
    
    
    public function getControlState($facId) {
        
        
        // $query = " SELECT TASK_ID,TASK_FROM, STATUS,POWER, LMT_U_SOC, LMT_L_SOC, GOAL, CAL_TIME, IS_STOP, TIME_STAMP  FROM CMN_CONTROL_HIST WHERE STATUS='charging' OR  STATUS='discharging' ORDER BY TIME_STAMP DESC LIMIT 1";
        $query = "
        SELECT TASK_ID,TASK_FROM, STATUS,POWER, LMT_U_SOC, LMT_L_SOC, GOAL, CAL_TIME, IS_STOP, TIME_STAMP, SITE_ID, UUID ,FAC_ID
        FROM CMN_CONTROL_HIST
        WHERE (STATUS='charging' OR  STATUS='discharging')
        AND FAC_ID = '$facId'
        ORDER BY TIME_STAMP DESC LIMIT 1"
        ;
        $data = $this->DB->query($query);
        
        if (empty($data)) {
            return [];
        }
        
        
        return $data[0];
        
    }
    
    
    public function getControlStateByTaskId($taskId) {
        
        
        $query = " SELECT TASK_ID,TASK_FROM, STATUS,POWER, LMT_U_SOC, LMT_L_SOC, GOAL, CAL_TIME, IS_STOP, TIME_STAMP  FROM CMN_CONTROL_HIST WHERE TASK_ID='$taskId'";
        $data = $this->DB->query($query);
        
        if (empty($data)) {
            return [];
        }
        
        
        return $data[0];
        
    }
    
    
    public function updateControlStateByTaskId($taskId) {
        
        $query = " UPDATE CMN_CONTROL_HIST SET IS_STOP = 1 WHERE TASK_ID = '$taskId' ";
        
        $this->DB->query($query);
        
    }
    
    
    
}