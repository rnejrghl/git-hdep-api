<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include_once __DIR__ . '/../include.inc.php';

echo "
<head>
    <meta charset='utf-8'>
</head>
";


$plant = new PlantController('IV0001');
$result = $plant->getSungrowFailHistory();



$plant = new PlantController('IV0003');
$result = $plant->getSungrowFailHistory();


