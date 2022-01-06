<?php
function get_cache_data($cacheKey) {
    $memcache = new Memcached;
//    $memcache->connect('hanwha-memcached.898efi.cfg.apse2.cache.amazonaws.com:11211');

    return $memcache->get($cacheKey);
}

function set_cache_data($cacheKey, $data) {
    $memcache = new Memcached;
//    $memcache->connect('hanwha-memcached.898efi.cfg.apse2.cache.amazonaws.com:11211');

    return $memcache->set($cacheKey, $data, 30);
}

function get_json_data($filename) {
    $filePath = __dir__ ."/src/json/" . $filename . '.json';

    $data = file_get_contents($filePath);
    return json_decode($data, 1);
}

function set_json_data($filename, $data) {
    $data = json_encode($data);
    $filePath = __dir__ ."/src/json/" . $filename . '.json';

    file_put_contents($filePath, $data);
}

function insertHistoryData($data, $query, $psKey) {
    $bData = get_json_data('historyRaw');
    $bData[] = [
        'ps_key' => $psKey,
        'now' => date('Y-m-d H:i:s'),
        'query' => $query,
        'rawData' => $data,
    ];

    set_json_data('historyRaw', $bData);
}

function convert_date_timezone($time, $notTimeZone, $timezone='UTC', $format='Y-m-d H:i:s') {
    $dt = new DateTime($time, new DateTimeZone($notTimeZone));
    $dt->setTimezone(new DateTimeZone($timezone));
    return $dt->format($format);
}


function slack_webhook($text, $channel = '#alarm_test') {
    $postData = array(
        'channel'    => $channel,
        'text'       => $text
    );


    $url = "https://hooks.slack.com/services/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";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,  'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS,     'payload='.json_encode($postData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);

}