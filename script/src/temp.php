<?php
include_once __DIR__ . '/../include.inc.php';
echo "
<head>
    <meta charset='utf-8'>
</head>
";

$bData = get_json_data('historyRaw');
echo '<xmp>';
print_r($bData);
echo '</xmp>';