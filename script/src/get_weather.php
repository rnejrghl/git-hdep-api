<?php

include_once __DIR__ . '/../include.inc.php';
//
echo "
<head>
    <meta charset='utf-8'>
</head>
";

$weather = new WeatherController();

$weather->getWeatherData();