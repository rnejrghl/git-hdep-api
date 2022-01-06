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

class Google_Service_CloudMonitoring_ListTimeseriesResponse extends Google_Collection
{
  public $kind;
  public $nextPageToken;
  public $oldest;
  public $youngest;
  protected $collection_key = 'timeseries';
  protected $timeseriesType = 'Google_Service_CloudMonitoring_Timeseries';
  protected $timeseriesDataType = 'array';

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getOldest()
  {
    return $this->oldest;
  }

  public function setOldest($oldest)
  {
    $this->oldest = $oldest;
  }

  /**
   * @param Google_Service_CloudMonitoring_Timeseries
   */
  public function setTimeseries($timeseries)
  {
    $this->timeseries = $timeseries;
  }
  /**
   * @return Google_Service_CloudMonitoring_Timeseries
   */
  public function getTimeseries()
  {
    return $this->timeseries;
  }

  public function getYoungest()
  {
    return $this->youngest;
  }

  public function setYoungest($youngest)
  {
    $this->youngest = $youngest;
  }
}