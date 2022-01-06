<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

//$type = 'A'; //시간별
//$type = 'B'; //일별

$type = $argv[1];

if ($type != 'A' && $type != 'B') {
    exit;
}

include_once __DIR__ . '/../include.inc.php';
//
echo "
<head>
    <meta charset='utf-8'>
</head>
";



$plant = new SummaryController('IV0001',$type);
$result = $plant->sumPlantData(); //his_sum
$result = $plant->sumPlantTagData(); //plant_sum


//ESS
$plant = new SummaryController('IV0003',$type);
$result = $plant->sumPlantData(); //his_sum
$result = $plant->sumPlantTagData(); //plant_sum
//print_r($result);
