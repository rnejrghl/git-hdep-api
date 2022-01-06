<?php


class SummaryController
{
    private $type;
    private $plant;
    private $testPlant;
    private $plant_type;

    function __construct($plant_type, $type)
    {

        $this->type = $type;
        $this->plant = new PlantModel();
        $this->testPlant = new PlantTestModel();

        $this->plant_type = $plant_type;
    }

    public function sumPlantData($setDate = '', $setFacId = '', $isConv = true) {
        $site = $this->plant->getSiteList($this->plant_type,$setFacId);
        $sumDvce = $this->plant->getSiteDeviceList(true);
        if (empty($sumDvce)) {
            return false;
        }
        $dvceList = implode(',', array_column($sumDvce, 'DVCE_ID'));

        $interval = $this->type == 'A' ?  '-1 hour' : '-1 day';
        if (! empty($setDate)) {
            $now = $setDate;
        } else {
            $now = date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . $interval));
        }
        if ($this->type == 'A') {
            $s_format = 'Y-m-d H:00:00';
            $e_format = 'Y-m-d H:59:59';
        } else {
            $s_format = 'Y-m-d 00:00:00';
            $e_format = 'Y-m-d 23:59:59';
        }


        foreach ($site as $key => $val) {
            $facId = $val['FAC_ID'];
            if (! empty($setFacId) && $setFacId != $facId) {
                continue;
            }
            $timeZone = $val['TIMEZONE'];

            if ($isConv) {
                $s_date = convert_date_timezone($now, 'UTC', $timeZone, $s_format);
                $e_date = convert_date_timezone($now, 'UTC', $timeZone, $e_format);
            } else {
                $s_date = date($s_format, strtotime($now));
                $e_date = date($e_format, strtotime($now));
            }


            $data = $this->plant->getPlantHistory($this->type, $dvceList, $facId, $s_date, $e_date);

            if (empty($data)) {
                continue;
            }
            foreach ($data as $idx => $info) {
                $his_id = $this->plant->checkPlantFacSummary($info, $this->type);
                if ($his_id > 0) {
                    $this->plant->updatePlantFacSummary($info, $his_id);
                } else {
                    $this->plant->insertPlantFacSummary($info, $this->type);
                }
            }
        }


        return true;
    }


    public function sumPlantTagData($setDate = '', $setFacId = '', $isConv = true) {
        $site = $this->plant->getSiteList($this->plant_type,$setFacId);
        $sumDvce = $this->plant->getSiteDeviceList();
        if (empty($sumDvce)) {
            return false;
        }
        $dvceList = implode(',', array_column($sumDvce, 'DVCE_ID'));

        $interval = $this->type == 'A' ?  '-1 hour' : '-1 day';
        if (! empty($setDate)) {
            $now = $setDate;
        } else {
            $now = date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . $interval));
        }
        if ($this->type == 'A') {
            $s_format = 'Y-m-d H:00:00';
            $e_format = 'Y-m-d H:59:59';
        } else {
            $s_format = 'Y-m-d 00:00:00';
            $e_format = 'Y-m-d 23:59:59';
        }

        foreach ($site as $key => $val) {
            $facId = $val['FAC_ID'];
            if (! empty($setFacId) && $setFacId != $facId) {
                continue;
            }
            $timeZone = $val['TIMEZONE'];

            if ($isConv) {
                $s_date = convert_date_timezone($now, 'UTC', $timeZone, $s_format);
                $e_date = convert_date_timezone($now, 'UTC', $timeZone, $e_format);
            } else {
                $s_date = date($s_format, strtotime($now));
                $e_date = date($e_format, strtotime($now));
            }

//            echo $s_date . ' : ' . $e_date;

            $data = $this->plant->getPlantHistory($this->type, $dvceList, $facId, $s_date, $e_date);

            if (empty($data)) {
                continue;
            }
            $plantInfo = $convData = [];
            foreach ($data as $idx => $info) {
                if ($idx == 0) {
                    $plantInfo = $info;
                }

                $convData = $this->matchSumPointData($info, $convData);



            }


//            $his_id = $this->testPlant->checkPlantFacTagSummary($plantInfo, $this->type);
            $his_id = $this->plant->checkPlantFacTagSummary($plantInfo, $this->type);
            if ($his_id > 0) {
                $this->plant->updatePlantFacTagSummary($convData, $his_id);
//                $this->plant->updatePlantFacTagSummary($convData, $his_id);
            } else {
                $this->plant->insertPlantFacTagSummary($plantInfo, $convData, $this->type);
//                $this->plant->insertPlantFacTagSummary($plantInfo, $convData, $this->type);
            }
        }


        return true;
    }

    private function matchSumPointData($param, $data)  {
        $point = str_replace('p', '', $param['PNT_ADDR']);
        switch ($point) {
                
            case '2' :  // 썬그로우 PV Prdoction (kWh)
                $data['pw_amt'] = $param['amt'];
                break;
            case '13134' :  // 썬그로우 PV+ESS Prdoction (kWh)
                $data['pw_amt'] = $param['amt'];
                break;
                
            case '1' :  // 썬그로우 PV Energy Yield (kWh)
                $data['energy_yield'] = $param['max_acc_amt'];
                break;
            case '13112' :  // 썬그로우 PV+ESS Energy Yield (kWh)
                $data['energy_yield'] = $param['max_acc_amt'];
                break;
                
            case '24' : // 썬그로우 PV IVT Efficiency (%)
                $data['ivt_ac'] = $param['acc_amt']; 
                break;
            case '13011' :  // 썬그로우 PV IVT Efficiency (%)
                $data['ivt_ac'] = $param['acc_amt'];
                break;
                
            case '14' :
                $data['ivt_dc'] = $param['acc_amt'];
                break;
            case '13003' :
                $data['ivt_dc'] = $param['acc_amt'];
                break;
                
            case '13116' :  // 썬그로우 PV+ESS PPA (KWh)
                $data['ppa'] = $param['amt'];
                break;
                
            default:
                break;
        }

        return $data;
    }

    function convertSummary($sDate, $eDate) {
        $site = $this->plant->getSiteList();

        foreach ($site as $key => $val) {
            $facId = $val['FAC_ID'];
            if (! empty($setFacId) && $setFacId != $facId) {
                continue;
            }
            $dvceList = "60,61,62,66";
            $data = $this->plant->getPlantHistory($this->type, $dvceList, $facId, $sDate, $eDate);

            if (empty($data)) {
                continue;
            }

            $cData = [];
            foreach ($data as $dk => $dv) {
                $time = date('YmdHis', strtotime($dv['his_date']));

                $cData[$time][] = $dv;
            }


            foreach ($cData as $time => $info) {
//                if ($idx == 0) {
//                    $plantInfo = $info;
//                }

                $plantInfo = $convData = [];
                foreach ( $info as $point => $iv) {
                    $plantInfo = $iv;
                    $convData = $this->matchSumPointData($iv, $convData);
                }


                $this->plant->insertPlantFacTagSummary($plantInfo, $convData, $this->type);

            }

//            }
        }

    }
}