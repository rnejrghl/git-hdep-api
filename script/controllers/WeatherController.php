<?php


class WeatherController
{
    private $cityList;
    private $weather;
    private $sData;

    function __construct()
    {
        $this->weather = new WeatherModel();
        $this->sData = [];
        $cityList = file_get_contents(__DIR__ . '/../src/json/city.list.json');
        $this->cityList = json_decode($cityList, 1);
    }

    public function getWeatherData() {
        $siteCnt = $this->weather->getSiteCount();

        if (empty($siteCnt) || $siteCnt == 0) {
            return false;
        }

        $maxPage = ceil($siteCnt / 20);
        for ($i = 1 ; $i <= $maxPage ; $i ++) {
            $sites = $this->weather->getSiteList($i);
            if (empty($sites)) {
                continue;
            }

            $gAddrId = $addrIds = $data = [];
            foreach ($sites as $key => $site) {
                $addrId = $this->getSiteAddrId($site['ADDR']);
                if (empty($addrId)) {
                    continue;
                }

               $check =  $this->checkOverlayLocation($addrId);
//
                $siteId = $site['SITE_ID'];
                if ($check['status']) {
                    $gAddrId[$addrId][] = $siteId;
                    $addrIds[] = $addrId;
                } else {
                    $data[$siteId] = $check['data'];
                    $addrIds[] = $addrId;
                }
            }

            if (! empty($addrIds)) {
                
                // $addrIds = implode(',', array_unique($addrIds));
                    $addrIds = implode(',', $addrIds);
                    
                $wData = $this->curl_execute($addrIds);
                if (empty($wData)) {
                    continue;
                }

                foreach ($wData['list'] as $weather) {
                    $wId = $weather['id'];
                    if (! isset($gAddrId[$wId])) {
                        continue;
                    }
                    $conSite = $gAddrId[$wId];

                    foreach ($conSite as $cSiteId) {
                        $data[$cSiteId] = $weather;
                    }

                    $this->sData[] = $weather;
                }
            }

            if (! empty($data)) {
                foreach ($data as $site_id => $wInfo) {
                    $wParam = [
                        'weatherId' => $wInfo['weather'][0]['id'],
                        'weatherMain' => $wInfo['weather'][0]['main'],
                        'weatherIcon' => $wInfo['weather'][0]['icon'],
                        'weatherTemp' => $wInfo['main']['temp'],
                    ];

                    $this->weather->insertWeatherData($site_id, $wParam);
                }
            }

        }
        return true;

    }

    private function checkOverlayLocation($addrId) {
        if (empty($this->sData)) {
            return ['status' => true];
        }

        $oldData=[];
        foreach ($this->sData as $data) {
            if ($data['addrId'] == $addrId) {
                $oldData = $data;
                break;
            }
        }

        if (empty($oldData)) {
            return ['status' => true];
        } else {
            return ['status' => false, 'data' => $oldData];
        }
    }

    private function getSiteAddrId($addr) {
        $addrs = explode(',', $addr);
        if (empty($addrs[1])) {
            // return '';
            //city.json.list 에  City of Sydney 로 Default설정
              return 6619279;
        }


        $nsw = explode(' ', trim($addrs[1]));
        $unitNum = array_search('NSW', $nsw);

        if ($unitNum == -1) {
            // return '';
            //city.json.list 에  City of Sydney 로 Default설정
              return 6619279;
        }
        $city = '';
        foreach ($nsw as $key => $text) {
            if ($unitNum == $key) {
                break;
            }
            $city .= $text;
            $city .= " ";
        }

        $city = trim($city);


        $addrId = '';
        foreach ($this->cityList as $cVal) {
            if ($cVal['name'] == $city) {
                $addrId = $cVal['id'];
                break;
            }else{
                //city.json.list 에  City of Sydney 로 Default설정
                $addrId = 6619279;
            }
        }

        return $addrId;
    }



    private function curl_execute($data) {

        $fullUrl = WEATHER_API_URL . "?id=" .$data. "&appid=" . WEATHER_API_KEY;

        $ch    = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_URL, $fullUrl);
        curl_setopt($ch, CURLOPT_POST, FALSE);
        $response = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($response, 1);
        return $response;
    }


}