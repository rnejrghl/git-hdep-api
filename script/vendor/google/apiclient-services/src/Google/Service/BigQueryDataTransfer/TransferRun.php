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

class Google_Service_BigQueryDataTransfer_TransferRun extends Google_Model
{
  public $dataSourceId;
  public $destinationDatasetId;
  public $endTime;
  public $name;
  public $params;
  public $runTime;
  public $schedule;
  public $scheduleTime;
  public $startTime;
  public $state;
  public $updateTime;
  public $userId;
  protected $errorStatusType = 'Google_Service_BigQueryDataTransfer_Status';
  protected $errorStatusDataType = '';

  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }

  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }

  public function getDestinationDatasetId()
  {
    return $this->destinationDatasetId;
  }

  public function setDestinationDatasetId($destinationDatasetId)
  {
    $this->destinationDatasetId = $destinationDatasetId;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  /**
   * @param Google_Service_BigQueryDataTransfer_Status
   */
  public function setErrorStatus(Google_Service_BigQueryDataTransfer_Status $errorStatus)
  {
    $this->errorStatus = $errorStatus;
  }
  /**
   * @return Google_Service_BigQueryDataTransfer_Status
   */
  public function getErrorStatus()
  {
    return $this->errorStatus;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getParams()
  {
    return $this->params;
  }

  public function setParams($params)
  {
    $this->params = $params;
  }

  public function getRunTime()
  {
    return $this->runTime;
  }

  public function setRunTime($runTime)
  {
    $this->runTime = $runTime;
  }

  public function getSchedule()
  {
    return $this->schedule;
  }

  public function setSchedule($schedule)
  {
    $this->schedule = $schedule;
  }

  public function getScheduleTime()
  {
    return $this->scheduleTime;
  }

  public function setScheduleTime($scheduleTime)
  {
    $this->scheduleTime = $scheduleTime;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getUpdateTime()
  {
    return $this->updateTime;
  }

  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }

  public function getUserId()
  {
    return $this->userId;
  }

  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
}
