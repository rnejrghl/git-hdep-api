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

class Google_Service_Dataflow_ReportWorkItemStatusRequest extends Google_Collection
{
  public $currentWorkerTime;
  public $location;
  public $workerId;
  protected $collection_key = 'workItemStatuses';
  protected $workItemStatusesType = 'Google_Service_Dataflow_WorkItemStatus';
  protected $workItemStatusesDataType = 'array';

  public function getCurrentWorkerTime()
  {
    return $this->currentWorkerTime;
  }

  public function setCurrentWorkerTime($currentWorkerTime)
  {
    $this->currentWorkerTime = $currentWorkerTime;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  /**
   * @param Google_Service_Dataflow_WorkItemStatus
   */
  public function setWorkItemStatuses($workItemStatuses)
  {
    $this->workItemStatuses = $workItemStatuses;
  }
  /**
   * @return Google_Service_Dataflow_WorkItemStatus
   */
  public function getWorkItemStatuses()
  {
    return $this->workItemStatuses;
  }

  public function getWorkerId()
  {
    return $this->workerId;
  }

  public function setWorkerId($workerId)
  {
    $this->workerId = $workerId;
  }
}
