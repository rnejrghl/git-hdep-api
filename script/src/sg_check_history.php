<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

include_once __DIR__ . '/../include.inc.php';
//
echo "
<head>
    <meta charset='utf-8'>
</head>
";


$plant = new PlantController('IV0001');
$result = $plant->checkSungrowHistory();
if ($result['status'] &&! empty($result['change'])) {
    $summary = new SummaryController('IV0001','A');
    foreach ($result['change'] as $data)  {
        if ($data['cStatus']) {
            $timeStamp = date('Y-m-d H:i:s', $data['time_stamp']);
            $summary->sumPlantData($timeStamp, $data['fac_id']);
            $summary->sumPlantTagData($timeStamp, $data['fac_id']);
        }
    }
}


$plant = new PlantController('IV0003');
$result = $plant->checkSungrowHistory();
if ($result['status'] &&! empty($result['change'])) {
    $summary = new SummaryController('IV0003','A');
    foreach ($result['change'] as $data)  {
        if ($data['cStatus']) {
            $timeStamp = date('Y-m-d H:i:s', $data['time_stamp']);
            $summary->sumPlantData($timeStamp, $data['fac_id']);
            $summary->sumPlantTagData($timeStamp, $data['fac_id']);
        }
    }
}



