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

class Google_Service_ServiceManagement_Rollout extends Google_Model
{
  public $createTime;
  public $createdBy;
  public $rolloutId;
  public $serviceName;
  public $status;
  protected $deleteServiceStrategyType = 'Google_Service_ServiceManagement_DeleteServiceStrategy';
  protected $deleteServiceStrategyDataType = '';
  protected $trafficPercentStrategyType = 'Google_Service_ServiceManagement_TrafficPercentStrategy';
  protected $trafficPercentStrategyDataType = '';

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  public function getCreatedBy()
  {
    return $this->createdBy;
  }

  public function setCreatedBy($createdBy)
  {
    $this->createdBy = $createdBy;
  }

  /**
   * @param Google_Service_ServiceManagement_DeleteServiceStrategy
   */
  public function setDeleteServiceStrategy(Google_Service_ServiceManagement_DeleteServiceStrategy $deleteServiceStrategy)
  {
    $this->deleteServiceStrategy = $deleteServiceStrategy;
  }
  /**
   * @return Google_Service_ServiceManagement_DeleteServiceStrategy
   */
  public function getDeleteServiceStrategy()
  {
    return $this->deleteServiceStrategy;
  }

  public function getRolloutId()
  {
    return $this->rolloutId;
  }

  public function setRolloutId($rolloutId)
  {
    $this->rolloutId = $rolloutId;
  }

  public function getServiceName()
  {
    return $this->serviceName;
  }

  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  /**
   * @param Google_Service_ServiceManagement_TrafficPercentStrategy
   */
  public function setTrafficPercentStrategy(Google_Service_ServiceManagement_TrafficPercentStrategy $trafficPercentStrategy)
  {
    $this->trafficPercentStrategy = $trafficPercentStrategy;
  }
  /**
   * @return Google_Service_ServiceManagement_TrafficPercentStrategy
   */
  public function getTrafficPercentStrategy()
  {
    return $this->trafficPercentStrategy;
  }
}
