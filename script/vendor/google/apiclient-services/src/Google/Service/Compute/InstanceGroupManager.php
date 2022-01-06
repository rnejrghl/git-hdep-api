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

class Google_Service_Compute_InstanceGroupManager extends Google_Collection
{
  public $baseInstanceName;
  public $creationTimestamp;
  public $description;
  public $fingerprint;
  public $id;
  public $instanceGroup;
  public $instanceTemplate;
  public $kind;
  public $name;
  public $region;
  public $selfLink;
  public $targetPools;
  public $targetSize;
  public $zone;
  protected $collection_key = 'targetPools';
  protected $currentActionsType = 'Google_Service_Compute_InstanceGroupManagerActionsSummary';
  protected $currentActionsDataType = '';
  protected $distributionPolicyType = 'Google_Service_Compute_DistributionPolicy';
  protected $distributionPolicyDataType = '';
  protected $namedPortsType = 'Google_Service_Compute_NamedPort';
  protected $namedPortsDataType = 'array';

  public function getBaseInstanceName()
  {
    return $this->baseInstanceName;
  }

  public function setBaseInstanceName($baseInstanceName)
  {
    $this->baseInstanceName = $baseInstanceName;
  }

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  /**
   * @param Google_Service_Compute_InstanceGroupManagerActionsSummary
   */
  public function setCurrentActions(Google_Service_Compute_InstanceGroupManagerActionsSummary $currentActions)
  {
    $this->currentActions = $currentActions;
  }
  /**
   * @return Google_Service_Compute_InstanceGroupManagerActionsSummary
   */
  public function getCurrentActions()
  {
    return $this->currentActions;
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
   * @param Google_Service_Compute_DistributionPolicy
   */
  public function setDistributionPolicy(Google_Service_Compute_DistributionPolicy $distributionPolicy)
  {
    $this->distributionPolicy = $distributionPolicy;
  }
  /**
   * @return Google_Service_Compute_DistributionPolicy
   */
  public function getDistributionPolicy()
  {
    return $this->distributionPolicy;
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

  public function getInstanceGroup()
  {
    return $this->instanceGroup;
  }

  public function setInstanceGroup($instanceGroup)
  {
    $this->instanceGroup = $instanceGroup;
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

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @param Google_Service_Compute_NamedPort
   */
  public function setNamedPorts($namedPorts)
  {
    $this->namedPorts = $namedPorts;
  }
  /**
   * @return Google_Service_Compute_NamedPort
   */
  public function getNamedPorts()
  {
    return $this->namedPorts;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getTargetPools()
  {
    return $this->targetPools;
  }

  public function setTargetPools($targetPools)
  {
    $this->targetPools = $targetPools;
  }

  public function getTargetSize()
  {
    return $this->targetSize;
  }

  public function setTargetSize($targetSize)
  {
    $this->targetSize = $targetSize;
  }

  public function getZone()
  {
    return $this->zone;
  }

  public function setZone($zone)
  {
    $this->zone = $zone;
  }
}
