<?php
date_default_timezone_set('UTC');

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/constant.php';
require_once __DIR__ . '/common.php';

require_once(__DIR__.  '/libs/PDO.class.php');
require_once(__DIR__.  '/libs/PDO.Log.class.php');

require_once __DIR__.  '/models/PlantModel.php';
require_once __DIR__.  '/models/WeatherModel.php';
require_once __DIR__.  '/models/ControlModel.php';
require_once __DIR__.  '/models/PlantTestModel.php';

require_once __DIR__.  '/controllers/SungrowController.php';
require_once __DIR__.  '/controllers/PlantController.php';
require_once __DIR__.  '/controllers/SummaryController.php';
require_once __DIR__.  '/controllers/WeatherController.php';
require_once __DIR__.  '/controllers/ControlController.php';
require_once __DIR__.  '/controllers/StopController.php';




function setLog($tag, $str){
 
    //$date = new DateTime();
	$date = new DateTime('now', new DateTimeZone('Australia/Sydney'));

    $fileName = "LOG ".date_format($date, 'Y-m-d');
    $myfile = fopen("/var/www/html/log/[".$tag."]".$fileName.".txt", "a") or die("Unable to open file!");

    $now = date_format($date, 'Y-m-d H:i:s');
	//$now= $now->format('Y-m-d H:i:s T');
    $txt = "[". $now ."]". $str;
    
    fwrite($myfile, "\n". $txt);
    fclose($myfile);

}

?>



