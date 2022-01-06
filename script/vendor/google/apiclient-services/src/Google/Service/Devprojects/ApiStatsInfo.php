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

class Google_Service_Devprojects_ApiStatsInfo extends Google_Collection
{
  public $apiId;
  public $apiName;
  public $kind;
  public $supportsReferers;
  protected $collection_key = 'statsInfo';
  protected $statsInfoType = 'Google_Service_Devprojects_StatsInfo';
  protected $statsInfoDataType = 'array';

  public function getApiId()
  {
    return $this->apiId;
  }

  public function setApiId($apiId)
  {
    $this->apiId = $apiId;
  }

  public function getApiName()
  {
    return $this->apiName;
  }

  public function setApiName($apiName)
  {
    $this->apiName = $apiName;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setStatsInfo($statsInfo)
  {
    $this->statsInfo = $statsInfo;
  }
  public function getStatsInfo()
  {
    return $this->statsInfo;
  }

  public function getSupportsReferers()
  {
    return $this->supportsReferers;
  }

  public function setSupportsReferers($supportsReferers)
  {
    $this->supportsReferers = $supportsReferers;
  }
}
