<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

include_once __DIR__ . '/../include.inc.php';

$facId = $argv[1];

echo "
<head>
    <meta charset='utf-8'>
</head>
";

$control = new StopController();

$control->stopStart($facId);
//print_r($control->stopStart()) ;


