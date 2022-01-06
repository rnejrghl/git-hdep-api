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

class Google_Service_Replicapoolupdater_RollingUpdate extends Google_Model
{
  public $actionType;
  public $creationTimestamp;
  public $description;
  public $id;
  public $instanceGroup;
  public $instanceGroupManager;
  public $instanceTemplate;
  public $kind;
  public $oldInstanceTemplate;
  public $progress;
  public $selfLink;
  public $status;
  public $statusMessage;
  public $user;
  protected $errorType = 'Google_Service_Replicapoolupdater_RollingUpdateError';
  protected $errorDataType = '';
  protected $policyType = 'Google_Service_Replicapoolupdater_RollingUpdatePolicy';
  protected $policyDataType = '';

  public function getActionType()
  {
    return $this->actionType;
  }

  public function setActionType($actionType)
  {
    $this->actionType = $actionType;
  }

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  /**
   * @param Google_Service_Replicapoolupdater_RollingUpdateError
   */
  public function setError(Google_Service_Replicapoolupdater_RollingUpdateError $error)
  {
    $this->error = $error;
  }
  /**
   * @return Google_Service_Replicapoolupdater_RollingUpdateError
   */
  public function getError()
  {
    return $this->error;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getInstanceGroup()
  {
    return $this->instanceGroup;
  }

  public function setInstanceGroup($instanceGroup)
  {
    $this->instanceGroup = $instanceGroup;
  }

  public function getInstanceGroupManager()
  {
    return $this->instanceGroupManager;
  }

  public function setInstanceGroupManager($instanceGroupManager)
  {
    $this->instanceGroupManager = $instanceGroupManager;
  }

  public function getInstanceTemplate()
  {
    return $this->instanceTemplate;
  }

  public function setInstanceTemplate($instanceTemplate)
  {
    $this->instanceTemplate = $instanceTemplate;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getOldInstanceTemplate()
  {
    return $this->oldInstanceTemplate;
  }

  public function setOldInstanceTemplate($oldInstanceTemplate)
  {
    $this->oldInstanceTemplate = $oldInstanceTemplate;
  }

  /**
   * @param Google_Service_Replicapoolupdater_RollingUpdatePolicy
   */
  public function setPolicy(Google_Service_Replicapoolupdater_RollingUpdatePolicy $policy)
  {
    $this->policy = $policy;
  }
  /**
   * @return Google_Service_Replicapoolupdater_RollingUpdatePolicy
   */
  public function getPolicy()
  {
    return $this->policy;
  }

  public function getProgress()
  {
    return $this->progress;
  }

  public function setProgress($progress)
  {
    $this->progress = $progress;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatusMessage()
  {
    return $this->statusMessage;
  }

  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }

  public function getUser()
  {
    return $this->user;
  }

  public function setUser($user)
  {
    $this->user = $user;
  }
}
