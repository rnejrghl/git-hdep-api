<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

include_once __DIR__ . '/../include.inc.php';

//$facId = $argv[1];


echo "
<head>
    <meta charset='utf-8'>
</head>
";


$plant_m = new PlantModel();

//해당 facId 및 type 을 조회
$facIdList = $plant_m->getFacId();

$now = date('YmdHi00');


// 반복문을 돌면서 5분데이터 조회 서로 통신이 될수있으니 시간차를 둠
foreach($facIdList as $key => $value)
{
    $facId = $facIdList[$key]['FAC_ID'];
    $facType =  $facIdList[$key]['PLANT_TYPE'];
    
    if(isset($facId, $facType)){
        
        $plant = new PlantController($facType);
        $result = $plant->getSungrowHistory($facId,$now);
        if ($result['status']) {
            $result = $plant->getSungrowPlantStatus($result['timeData']);
        }
    }
}


//if($facId==2||$facId==3){
//    $plant = new PlantController('IV0001');
//}
//else if($facId==4 || $facId==5 || $facId==6 || $facId==7 || $facId==8 || $facId==9 || $facId==10){
//    $plant = new PlantController('IV0003');
//}

//$result = $plant->getSungrowHistory($facId);

// print_r($result);

//if ($result['status']) {
//    $result = $plant->getSungrowPlantStatus($result['timeData']);
//}

