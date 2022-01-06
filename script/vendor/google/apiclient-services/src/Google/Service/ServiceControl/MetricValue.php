<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_ServiceControl_MetricValue extends Google_Model
{
  public $boolValue;
  public $doubleValue;
  public $endTime;
  public $int64Value;
  public $labels;
  public $startTime;
  public $stringValue;
  protected $distributionValueType = 'Google_Service_ServiceControl_Distribution';
  protected $distributionValueDataType = '';
  protected $moneyValueType = 'Google_Service_ServiceControl_Money';
  protected $moneyValueDataType = '';

  public function getBoolValue()
  {
    return $this->boolValue;
  }

  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }

  /**
   * @param Google_Service_ServiceControl_Distribution
   */
  public function setDistributionValue(Google_Service_ServiceControl_Distribution $distributionValue)
  {
    $this->distributionValue = $distributionValue;
  }
  /**
   * @return Google_Service_ServiceControl_Distribution
   */
  public function getDistributionValue()
  {
    return $this->distributionValue;
  }

  public function getDoubleValue()
  {
    return $this->doubleValue;
  }

  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  public function getInt64Value()
  {
    return $this->int64Value;
  }

  public function setInt64Value($int64Value)
  {
    $this->int64Value = $int64Value;
  }

  public function getLabels()
  {
    return $this->labels;
  }

  public function setLabels($labels)
  {
    $this->labels = $labels;
  }

  /**
   * @param Google_Service_ServiceControl_Money
   */
  public function setMoneyValue(Google_Service_ServiceControl_Money $moneyValue)
  {
    $this->moneyValue = $moneyValue;
  }
  /**
   * @return Google_Service_ServiceControl_Money
   */
  public function getMoneyValue()
  {
    return $this->moneyValue;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getStringValue()
  {
    return $this->stringValue;
  }

  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
}
