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

class Google_Service_Devprojects_ApiConsumerId extends Google_Model
{
  public $apiIdToken;
  public $consumerAssignedId;
  public $consumerProjectId;
  public $kind;
  public $producerProjectId;

  public function getApiIdToken()
  {
    return $this->apiIdToken;
  }

  public function setApiIdToken($apiIdToken)
  {
    $this->apiIdToken = $apiIdToken;
  }

  public function getConsumerAssignedId()
  {
    return $this->consumerAssignedId;
  }

  public function setConsumerAssignedId($consumerAssignedId)
  {
    $this->consumerAssignedId = $consumerAssignedId;
  }

  public function getConsumerProjectId()
  {
    return $this->consumerProjectId;
  }

  public function setConsumerProjectId($consumerProjectId)
  {
    $this->consumerProjectId = $consumerProjectId;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getProducerProjectId()
  {
    return $this->producerProjectId;
  }

  public function setProducerProjectId($producerProjectId)
  {
    $this->producerProjectId = $producerProjectId;
  }
}
