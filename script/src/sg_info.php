<?php
include_once __DIR__ . '/../include.inc.php';

$sApi = new SungrowController();

$psId = $_POST['psId'] ? $_POST['psId'] : 0;

//$psId = '708883';

if ($psId <= 0) {
    $result = ['status' => false];
    echo json_encode($result);
    exit;
}

$plant = $sApi->get_sungrow_station_information($psId);

$device = $sApi->get_sungrow_device_information_list($psId);


$result = ['status' => true, 'timeZone' => $plant['data']['timeZone'], 'device' => $device['data']];

echo json_encode($result);
exit;