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

class Google_Service_Container_NodeConfig extends Google_Collection
{
  public $diskSizeGb;
  public $diskType;
  public $imageType;
  public $labels;
  public $localSsdCount;
  public $machineType;
  public $metadata;
  public $minCpuPlatform;
  public $oauthScopes;
  public $preemptible;
  public $serviceAccount;
  public $tags;
  protected $collection_key = 'tags';
  protected $acceleratorsType = 'Google_Service_Container_AcceleratorConfig';
  protected $acceleratorsDataType = 'array';

  /**
   * @param Google_Service_Container_AcceleratorConfig
   */
  public function setAccelerators($accelerators)
  {
    $this->accelerators = $accelerators;
  }
  /**
   * @return Google_Service_Container_AcceleratorConfig
   */
  public function getAccelerators()
  {
    return $this->accelerators;
  }

  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
  }

  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }

  public function getDiskType()
  {
    return $this->diskType;
  }

  public function setDiskType($diskType)
  {
    $this->diskType = $diskType;
  }

  public function getImageType()
  {
    return $this->imageType;
  }

  public function setImageType($imageType)
  {
    $this->imageType = $imageType;
  }

  public function getLabels()
  {
    return $this->labels;
  }

  public function setLabels($labels)
  {
    $this->labels = $labels;
  }

  public function getLocalSsdCount()
  {
    return $this->localSsdCount;
  }

  public function setLocalSsdCount($localSsdCount)
  {
    $this->localSsdCount = $localSsdCount;
  }

  public function getMachineType()
  {
    return $this->machineType;
  }

  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }

  public function getMetadata()
  {
    return $this->metadata;
  }

  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }

  public function getMinCpuPlatform()
  {
    return $this->minCpuPlatform;
  }

  public function setMinCpuPlatform($minCpuPlatform)
  {
    $this->minCpuPlatform = $minCpuPlatform;
  }

  public function getOauthScopes()
  {
    return $this->oauthScopes;
  }

  public function setOauthScopes($oauthScopes)
  {
    $this->oauthScopes = $oauthScopes;
  }

  public function getPreemptible()
  {
    return $this->preemptible;
  }

  public function setPreemptible($preemptible)
  {
    $this->preemptible = $preemptible;
  }

  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }

  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }

  public function getTags()
  {
    return $this->tags;
  }

  public function setTags($tags)
  {
    $this->tags = $tags;
  }
}
