<?php


class WeatherModel
{
    private $DB;
    function __construct()
    {
        //$this->DB = getTestDB();
        $this->DB = getDB();
    }

    public function getSiteCount() {
        $query = "SELECT COUNT(*) FROM CMN_PLANT CP
            LEFT JOIN  PRJ_SITE_CNRT PSC ON PSC.SITE_ID = CP.SITE_ID
            LEFT JOIN  CMN_PLANT_FAC CPF ON CP.PLANT_ID = CPF.PLANT_ID
         WHERE IFNULL(PSC.MNG_STRT_DT, '') != '' AND IFNULL(CP.PLANT_ID , 0) > 0 AND IFNULL(PSC.TERM_DT, '') = ''
         ORDER BY CPF.FAC_ID DESC
         ";

        return $this->DB->single($query);
    }

    public function getSiteList($page) {
        $start = ($page - 1) * 20;
        $query = "SELECT PSC.SITE_ID, PSC.LATD, PSC.LGTD, PSC.ADDR FROM CMN_PLANT CP
            LEFT JOIN  PRJ_SITE_CNRT PSC ON PSC.SITE_ID = CP.SITE_ID
            LEFT JOIN  CMN_PLANT_FAC CPF ON CP.PLANT_ID = CPF.PLANT_ID
         WHERE IFNULL(PSC.MNG_STRT_DT, '') != '' AND IFNULL(CP.PLANT_ID , 0) > 0 AND IFNULL(PSC.TERM_DT, '') = ''
         ORDER BY CPF.FAC_ID DESC limit $start, 20
         ";

        return $this->DB->query($query);
    }

    public function insertWeatherData($siteId, $data) {

        $id = $data['weatherId'];
        $main = $data['weatherMain'];
        $temp = $data['weatherTemp'];
        $icon = $data['weatherIcon'];

        $timeStamp = date('Y-m-d H:00:00');
        $query = " INSERT INTO CMN_PLANT_WEATHER (SITE_ID, TIME_STAMP, WEATHER_MAIN, WEATHER_ID, WEATHER_TEMP, WEATHER_ICON) 
            VALUE ('$siteId', '$timeStamp', '$main', '$id', '$temp', '$icon')";

        $this->DB->query($query);

    }
}