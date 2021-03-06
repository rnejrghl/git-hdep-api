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

class Google_Service_Dataflow_RuntimeEnvironment extends Google_Collection
{
  public $additionalExperiments;
  public $bypassTempDirValidation;
  public $machineType;
  public $maxWorkers;
  public $network;
  public $serviceAccountEmail;
  public $subnetwork;
  public $tempLocation;
  public $zone;
  protected $collection_key = 'additionalExperiments';

  public function getAdditionalExperiments()
  {
    return $this->additionalExperiments;
  }

  public function setAdditionalExperiments($additionalExperiments)
  {
    $this->additionalExperiments = $additionalExperiments;
  }

  public function getBypassTempDirValidation()
  {
    return $this->bypassTempDirValidation;
  }

  public function setBypassTempDirValidation($bypassTempDirValidation)
  {
    $this->bypassTempDirValidation = $bypassTempDirValidation;
  }

  public function getMachineType()
  {
    return $this->machineType;
  }

  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }

  public function getMaxWorkers()
  {
    return $this->maxWorkers;
  }

  public function setMaxWorkers($maxWorkers)
  {
    $this->maxWorkers = $maxWorkers;
  }

  public function getNetwork()
  {
    return $this->network;
  }

  public function setNetwork($network)
  {
    $this->network = $network;
  }

  public function getServiceAccountEmail()
  {
    return $this->serviceAccountEmail;
  }

  public function setServiceAccountEmail($serviceAccountEmail)
  {
    $this->serviceAccountEmail = $serviceAccountEmail;
  }

  public function getSubnetwork()
  {
    return $this->subnetwork;
  }

  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }

  public function getTempLocation()
  {
    return $this->tempLocation;
  }

  public function setTempLocation($tempLocation)
  {
    $this->tempLocation = $tempLocation;
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
