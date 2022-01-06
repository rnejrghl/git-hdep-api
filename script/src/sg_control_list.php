<?php

include_once __DIR__ . '/../include.inc.php';

echo "
<head>
    <meta charset='utf-8'>
</head>
";

$plant_m = new PlantModel();

$facIdList = $plant_m->getEssFacId(); 


foreach($facIdList as $key => $value)
{    
    $facId = $facIdList[$key]['FAC_ID'];
    $facType =  $facIdList[$key]['PLANT_TYPE'];
              
    if(isset($facId, $facType)){            
            exec("php /var/www/html/src/sg_control.php " .$facId);
    }
}



