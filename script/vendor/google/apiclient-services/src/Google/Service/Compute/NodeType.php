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

class Google_Service_Compute_NodeType extends Google_Model
{
  public $cpuPlatform;
  public $creationTimestamp;
  public $description;
  public $guestCpus;
  public $id;
  public $kind;
  public $localSsdGb;
  public $memoryMb;
  public $name;
  public $selfLink;
  public $zone;
  protected $deprecatedType = 'Google_Service_Compute_DeprecationStatus';
  protected $deprecatedDataType = '';

  public function getCpuPlatform()
  {
    return $this->cpuPlatform;
  }

  public function setCpuPlatform($cpuPlatform)
  {
    $this->cpuPlatform = $cpuPlatform;
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
   * @param Google_Service_Compute_DeprecationStatus
   */
  public function setDeprecated(Google_Service_Compute_DeprecationStatus $deprecated)
  {
    $this->deprecated = $deprecated;
  }
  /**
   * @return Google_Service_Compute_DeprecationStatus
   */
  public function getDeprecated()
  {
    return $this->deprecated;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getGuestCpus()
  {
    return $this->guestCpus;
  }

  public function setGuestCpus($guestCpus)
  {
    $this->guestCpus = $guestCpus;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLocalSsdGb()
  {
    return $this->localSsdGb;
  }

  public function setLocalSsdGb($localSsdGb)
  {
    $this->localSsdGb = $localSsdGb;
  }

  public function getMemoryMb()
  {
    return $this->memoryMb;
  }

  public function setMemoryMb($memoryMb)
  {
    $this->memoryMb = $memoryMb;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
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
