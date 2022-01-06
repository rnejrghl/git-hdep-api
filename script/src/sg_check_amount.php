<?php

include_once __DIR__ . '/../include.inc.php';
//
echo "
<head>
    <meta charset='utf-8'>
</head>
";
//$facId = $argv[1];

$type = "";

$plant_m = new PlantModel();
$facIdList = $plant_m->getFacId();

foreach($facIdList as $key => $value)
{
    
    $facId = $facIdList[$key]['FAC_ID'];
    $facType =  $facIdList[$key]['PLANT_TYPE'];
    
    
    if(isset($facId, $facType)){
        $plant = new PlantController($facType);
        $type =$facType;
        
        $result = $plant->checkSungrowAmount($facId);
        
        if ($result['status'] &&! empty($result['change'])) {
            $summary = new SummaryController($type,'A');
            $checkTime = [];
            foreach ($result['change'] as $data)  {
                $timeStamp = date('Y-m-d H:00:00', strtotime($data['time_stamp']));
                if ($data['cStatus'] && (empty($checkTime) || ! in_array($timeStamp, $checkTime))) {
                    
                    $summary->sumPlantData($timeStamp, $facId, false);
                    $summary->sumPlantTagData($timeStamp, $facId,  false);
                    
                    $checkTime[] = $timeStamp;
                }
            }
        }
    }
    sleep(10);
}


//if($facId==2||$facId==3){
//    $plant = new PlantController('IV0001');
//	$type ="IV0001";
//}
//else if($facId==4 || $facId==5 || $facId==6 || $facId==7 || $facId==8 || $facId==9 || $facId==10){
//    $plant = new PlantController('IV0003');
//	$type ="IV0003";
//}

//$result = $plant->checkSungrowAmount($facId);

//if ($result['status'] &&! empty($result['change'])) {
//    $summary = new SummaryController($type,'A');
//    $checkTime = [];
//    foreach ($result['change'] as $data)  {
//        $timeStamp = date('Y-m-d H:00:00', strtotime($data['time_stamp']));
//        if ($data['cStatus'] && (empty($checkTime) || ! in_array($timeStamp, $checkTime))) {

//            $summary->sumPlantData($timeStamp, $facId, false);
//            $summary->sumPlantTagData($timeStamp, $facId,  false);

//            $checkTime[] = $timeStamp;
//        }
//    }
//}



