<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

set_time_limit ( 0 );

include_once __DIR__ . '/../include.inc.php';


$max  = $_REQUEST['number'] ? $_REQUEST['number'] : 0;

$data = [
    'userName' => '',
    'telNo' => '01011111111',
    'email' => 'test@gmail.com',
    'addr' => '42 Walton St, Blakehurst NSW 2221, Australia',
    'newUserYn' => 'Y',
    'latd' => "-33.985446",
    'lgtd' => '151.1061199',
    'regnGubn' => 'AU001',
    'currUnit' => 'AU',
    'rescGubn' => 'A',
    'instPsnSeq' => '160',
    'cnrtStrtDt' => '20200626',
    'cnrtEndDt' => '20201231',
    'applDudt' => '20200602',
    'apprAprvCmp' => [],
    'apprDudt' => '20200604',
    'btryCapa' => null,
    'btryMnftGubn' => null,
    'comuEqmtGubn' => 'CD0001',
    'comuMthdGubn' => null,
    'contractNote' => null,
    'essInstCapa' => null,
    'expnDt' => '20200601',
    'fileIdCd1' => null,
    'fileIdCd2' => null,
    'insDudt' => '20200626',
    'invtCapa' =>  null,
    'invtMnftGubn' =>  'IV0001',
    'modlCapa' =>  '6.205',
    'modlMnftGubn' =>  'PM0004',
    'mpDudt' =>  '20200625',
    'planNote' =>  null,
    'ppaUnitPrce' =>  null,
    'pvInstCapa' =>  '6.205',
    'siteId' =>  null,
    'spc' =>  null,
    'stc' =>  null,
    'timeZone' =>  null,
    'totlCost' =>  null,
    'userId' =>  null,
    'wkplCmplDt' =>  '20200531',
];


if (isset($_COOKIE['token']) && ! empty($_COOKIE['token'])) {
    $token =  $_COOKIE['token'];

} else {
    $login = login();

    $token = $login['data']['X-AUTH-TOKEN'];

    setcookie('token', $token);
}

$TDB = getTestDB();

$timestamp = date('ymdHi');
$siteIds = [];
for ($i =1 ; $i <= $max ; $i++) {
    $username = 'dummy_' . $timestamp . '_' . $i;
    $data['userName'] = $username;

    $result = insertContractData($data, $token);
    print_r($result);

    if (! $result['success'] && $result['code'] == -1002) {
        $login = login();
        $token = $login['X-AUTH-TOKEN'];

        setcookie('token', $token);
        $i --;
    }

    if ($result['success']) {
        $siteId = $result['data']['siteId'];
        $siteIds[] = $siteId;

        update_site_info($siteId);
    }
}



function insertContractData($data, $token) {
    $sendData = json_encode($data);

    $headers = array("Content-Type: application/json","charset: UTF-8",  "X-AUTH-TOKEN: " . $token);
    $apiUrl = 'https://hdep2.nectr.com.au/api/pp/contractPlan';
//    echo $apiUrl;
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $sendData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $result = curl_exec($ch);

    curl_close($ch);


    return json_decode($result, 1);
}



function login() {

    $headers = array("Content-Type: application/json; charset=UTF-8");
    $apiUrl = 'https://hdep2.nectr.com.au/api/cm/signin';
//    echo $apiUrl;
    $user = [
        'userId' => 'AU20200400002',
        'password' => 'AU20200400002!'
    ];

    $ch=curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $user);

    $result = curl_exec($ch);

    curl_close($ch);



    return json_decode($result, 1);
}

function update_site_info($siteId) {
    global $TDB;
    $query = "UPDATE PRJ_SITE_GRID SET WORK_DUDT = '20200602', WORK_CMDT = '20200602' , APRV_YN  = 'Y' WHERE SITE_ID = '$siteId' AND  WORK_GUBN  =  1  ";
    $TDB->query($query);

    $query = "UPDATE PRJ_SITE_GRID SET WORK_DUDT = '20200604', WORK_CMDT = '20200604' , APRV_YN  = 'Y' WHERE SITE_ID = '$siteId' AND  WORK_GUBN  =  2  ";
    $TDB->query($query);

    $query = "UPDATE PRJ_SITE_GRID SET WORK_DUDT = '20200625', WORK_CMDT = '20200625' , APRV_YN  = 'Y' WHERE SITE_ID = '$siteId' AND  WORK_GUBN  =  3  ";
    $TDB->query($query);

    $query = "UPDATE PRJ_SITE_GRID SET WORK_DUDT = '20200626', WORK_CMDT = '20200626' , APRV_YN  = 'Y' WHERE SITE_ID = '$siteId' AND  WORK_GUBN  =  4  ";
    $TDB->query($query);

    $query = "UPDATE PRJ_SITE_INSP SET CHK_PASS_YN 	= 'Y', CHK_CMPL_DT = '20200706' WHERE SITE_ID = '$siteId'	";
    $TDB->query($query);

    $query = "UPDATE PRJ_SITE_CNRT SET MNG_STRT_DT = '20200626', EXPN_DT = '20200601'  WHERE SITE_ID = '$siteId'";
    $TDB->query($query);
}



echo json_encode(['status' => true, 'siteId' => $siteIds, 'siteCnt' => count($siteIds)]);
exit;