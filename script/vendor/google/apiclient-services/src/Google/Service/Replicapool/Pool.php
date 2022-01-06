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

class Google_Service_Replicapool_Pool extends Google_Collection
{
  public $autoRestart;
  public $baseInstanceName;
  public $currentNumReplicas;
  public $description;
  public $initialNumReplicas;
  public $name;
  public $numReplicas;
  public $resourceViews;
  public $selfLink;
  public $targetPool;
  public $targetPools;
  public $type;
  protected $collection_key = 'targetPools';
  protected $healthChecksType = 'Google_Service_Replicapool_HealthCheck';
  protected $healthChecksDataType = 'array';
  protected $labelsType = 'Google_Service_Replicapool_Label';
  protected $labelsDataType = 'array';
  protected $templateType = 'Google_Service_Replicapool_Template';
  protected $templateDataType = '';

  public function getAutoRestart()
  {
    return $this->autoRestart;
  }

  public function setAutoRestart($autoRestart)
  {
    $this->autoRestart = $autoRestart;
  }

  public function getBaseInstanceName()
  {
    return $this->baseInstanceName;
  }

  public function setBaseInstanceName($baseInstanceName)
  {
    $this->baseInstanceName = $baseInstanceName;
  }

  public function getCurrentNumReplicas()
  {
    return $this->currentNumReplicas;
  }

  public function setCurrentNumReplicas($currentNumReplicas)
  {
    $this->currentNumReplicas = $currentNumReplicas;
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
   * @param Google_Service_Replicapool_HealthCheck
   */
  public function setHealthChecks($healthChecks)
  {
    $this->healthChecks = $healthChecks;
  }
  /**
   * @return Google_Service_Replicapool_HealthCheck
   */
  public function getHealthChecks()
  {
    return $this->healthChecks;
  }

  public function getInitialNumReplicas()
  {
    return $this->initialNumReplicas;
  }

  public function setInitialNumReplicas($initialNumReplicas)
  {
    $this->initialNumReplicas = $initialNumReplicas;
  }

  /**
   * @param Google_Service_Replicapool_Label
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return Google_Service_Replicapool_Label
   */
  public function getLabels()
  {
    return $this->labels;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getNumReplicas()
  {
    return $this->numReplicas;
  }

  public function setNumReplicas($numReplicas)
  {
    $this->numReplicas = $numReplicas;
  }

  public function getResourceViews()
  {
    return $this->resourceViews;
  }

  public function setResourceViews($resourceViews)
  {
    $this->resourceViews = $resourceViews;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getTargetPool()
  {
    return $this->targetPool;
  }

  public function setTargetPool($targetPool)
  {
    $this->targetPool = $targetPool;
  }

  public function getTargetPools()
  {
    return $this->targetPools;
  }

  public function setTargetPools($targetPools)
  {
    $this->targetPools = $targetPools;
  }

  /**
   * @param Google_Service_Replicapool_Template
   */
  public function setTemplate(Google_Service_Replicapool_Template $template)
  {
    $this->template = $template;
  }
  /**
   * @return Google_Service_Replicapool_Template
   */
  public function getTemplate()
  {
    return $this->template;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }
}
