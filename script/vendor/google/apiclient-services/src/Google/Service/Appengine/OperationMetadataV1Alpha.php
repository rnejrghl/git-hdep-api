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

class Google_Service_Appengine_OperationMetadataV1Alpha extends Google_Collection
{
  public $endTime;
  public $ephemeralMessage;
  public $insertTime;
  public $method;
  public $target;
  public $user;
  public $warning;
  protected $collection_key = 'warning';
  protected $createVersionMetadataType = 'Google_Service_Appengine_CreateVersionMetadataV1Alpha';
  protected $createVersionMetadataDataType = '';

  /**
   * @param Google_Service_Appengine_CreateVersionMetadataV1Alpha
   */
  public function setCreateVersionMetadata(Google_Service_Appengine_CreateVersionMetadataV1Alpha $createVersionMetadata)
  {
    $this->createVersionMetadata = $createVersionMetadata;
  }
  /**
   * @return Google_Service_Appengine_CreateVersionMetadataV1Alpha
   */
  public function getCreateVersionMetadata()
  {
    return $this->createVersionMetadata;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  public function getEphemeralMessage()
  {
    return $this->ephemeralMessage;
  }

  public function setEphemeralMessage($ephemeralMessage)
  {
    $this->ephemeralMessage = $ephemeralMessage;
  }

  public function getInsertTime()
  {
    return $this->insertTime;
  }

  public function setInsertTime($insertTime)
  {
    $this->insertTime = $insertTime;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setMethod($method)
  {
    $this->method = $method;
  }

  public function getTarget()
  {
    return $this->target;
  }

  public function setTarget($target)
  {
    $this->target = $target;
  }

  public function getUser()
  {
    return $this->user;
  }

  public function setUser($user)
  {
    $this->user = $user;
  }

  public function getWarning()
  {
    return $this->warning;
  }

  public function setWarning($warning)
  {
    $this->warning = $warning;
  }
}
