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

class Google_Service_DeploymentManager_Deployment extends Google_Collection
{
  public $description;
  public $fingerprint;
  public $id;
  public $insertTime;
  public $manifest;
  public $name;
  public $selfLink;
  protected $collection_key = 'labels';
  protected $labelsType = 'Google_Service_DeploymentManager_DeploymentLabelEntry';
  protected $labelsDataType = 'array';
  protected $operationType = 'Google_Service_DeploymentManager_Operation';
  protected $operationDataType = '';
  protected $targetType = 'Google_Service_DeploymentManager_TargetConfiguration';
  protected $targetDataType = '';
  protected $updateType = 'Google_Service_DeploymentManager_DeploymentUpdate';
  protected $updateDataType = '';

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getFingerprint()
  {
    return $this->fingerprint;
  }

  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getInsertTime()
  {
    return $this->insertTime;
  }

  public function setInsertTime($insertTime)
  {
    $this->insertTime = $insertTime;
  }

  /**
   * @param Google_Service_DeploymentManager_DeploymentLabelEntry
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return Google_Service_DeploymentManager_DeploymentLabelEntry
   */
  public function getLabels()
  {
    return $this->labels;
  }

  public function getManifest()
  {
    return $this->manifest;
  }

  public function setManifest($manifest)
  {
    $this->manifest = $manifest;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @param Google_Service_DeploymentManager_Operation
   */
  public function setOperation(Google_Service_DeploymentManager_Operation $operation)
  {
    $this->operation = $operation;
  }
  /**
   * @return Google_Service_DeploymentManager_Operation
   */
  public function getOperation()
  {
    return $this->operation;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  /**
   * @param Google_Service_DeploymentManager_TargetConfiguration
   */
  public function setTarget(Google_Service_DeploymentManager_TargetConfiguration $target)
  {
    $this->target = $target;
  }
  /**
   * @return Google_Service_DeploymentManager_TargetConfiguration
   */
  public function getTarget()
  {
    return $this->target;
  }
  /**
   * @param Google_Service_DeploymentManager_DeploymentUpdate
   */
  public function setUpdate(Google_Service_DeploymentManager_DeploymentUpdate $update)
  {
    $this->update = $update;
  }
  /**
   * @return Google_Service_DeploymentManager_DeploymentUpdate
   */
  public function getUpdate()
  {
    return $this->update;
  }
}
