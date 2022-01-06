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

class Google_Service_CloudComposer_NodeConfig extends Google_Collection
{
  public $diskSizeGb;
  public $location;
  public $machineType;
  public $network;
  public $oauthScopes;
  public $serviceAccount;
  public $subnetwork;
  public $tags;
  protected $collection_key = 'tags';

  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
  }

  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getMachineType()
  {
    return $this->machineType;
  }

  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }

  public function getNetwork()
  {
    return $this->network;
  }

  public function setNetwork($network)
  {
    $this->network = $network;
  }

  public function getOauthScopes()
  {
    return $this->oauthScopes;
  }

  public function setOauthScopes($oauthScopes)
  {
    $this->oauthScopes = $oauthScopes;
  }

  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }

  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }

  public function getSubnetwork()
  {
    return $this->subnetwork;
  }

  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
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
