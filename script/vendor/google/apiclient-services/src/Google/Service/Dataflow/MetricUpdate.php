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

class Google_Service_Dataflow_MetricUpdate extends Google_Model
{
  public $cumulative;
  public $distribution;
  public $gauge;
  public $internal;
  public $kind;
  public $meanCount;
  public $meanSum;
  public $scalar;
  public $set;
  public $updateTime;
  protected $nameType = 'Google_Service_Dataflow_MetricStructuredName';
  protected $nameDataType = '';

  public function getCumulative()
  {
    return $this->cumulative;
  }

  public function setCumulative($cumulative)
  {
    $this->cumulative = $cumulative;
  }

  public function getDistribution()
  {
    return $this->distribution;
  }

  public function setDistribution($distribution)
  {
    $this->distribution = $distribution;
  }

  public function getGauge()
  {
    return $this->gauge;
  }

  public function setGauge($gauge)
  {
    $this->gauge = $gauge;
  }

  public function getInternal()
  {
    return $this->internal;
  }

  public function setInternal($internal)
  {
    $this->internal = $internal;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getMeanCount()
  {
    return $this->meanCount;
  }

  public function setMeanCount($meanCount)
  {
    $this->meanCount = $meanCount;
  }

  public function getMeanSum()
  {
    return $this->meanSum;
  }

  public function setMeanSum($meanSum)
  {
    $this->meanSum = $meanSum;
  }

  /**
   * @param Google_Service_Dataflow_MetricStructuredName
   */
  public function setName(Google_Service_Dataflow_MetricStructuredName $name)
  {
    $this->name = $name;
  }
  /**
   * @return Google_Service_Dataflow_MetricStructuredName
   */
  public function getName()
  {
    return $this->name;
  }

  public function getScalar()
  {
    return $this->scalar;
  }

  public function setScalar($scalar)
  {
    $this->scalar = $scalar;
  }

  public function getSet()
  {
    return $this->set;
  }

  public function setSet($set)
  {
    $this->set = $set;
  }

  public function getUpdateTime()
  {
    return $this->updateTime;
  }

  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
}
