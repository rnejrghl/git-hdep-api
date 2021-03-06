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

class Google_Service_CloudBuild_BuildOptions extends Google_Collection
{
  public $diskSizeGb;
  public $env;
  public $logStreamingOption;
  public $logging;
  public $machineType;
  public $requestedVerifyOption;
  public $secretEnv;
  public $sourceProvenanceHash;
  public $substitutionOption;
  public $workerPool;
  protected $collection_key = 'volumes';
  protected $volumesType = 'Google_Service_CloudBuild_Volume';
  protected $volumesDataType = 'array';

  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
  }

  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }

  public function getEnv()
  {
    return $this->env;
  }

  public function setEnv($env)
  {
    $this->env = $env;
  }

  public function getLogStreamingOption()
  {
    return $this->logStreamingOption;
  }

  public function setLogStreamingOption($logStreamingOption)
  {
    $this->logStreamingOption = $logStreamingOption;
  }

  public function getLogging()
  {
    return $this->logging;
  }

  public function setLogging($logging)
  {
    $this->logging = $logging;
  }

  public function getMachineType()
  {
    return $this->machineType;
  }

  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }

  public function getRequestedVerifyOption()
  {
    return $this->requestedVerifyOption;
  }

  public function setRequestedVerifyOption($requestedVerifyOption)
  {
    $this->requestedVerifyOption = $requestedVerifyOption;
  }

  public function getSecretEnv()
  {
    return $this->secretEnv;
  }

  public function setSecretEnv($secretEnv)
  {
    $this->secretEnv = $secretEnv;
  }

  public function getSourceProvenanceHash()
  {
    return $this->sourceProvenanceHash;
  }

  public function setSourceProvenanceHash($sourceProvenanceHash)
  {
    $this->sourceProvenanceHash = $sourceProvenanceHash;
  }

  public function getSubstitutionOption()
  {
    return $this->substitutionOption;
  }

  public function setSubstitutionOption($substitutionOption)
  {
    $this->substitutionOption = $substitutionOption;
  }

  /**
   * @param Google_Service_CloudBuild_Volume
   */
  public function setVolumes($volumes)
  {
    $this->volumes = $volumes;
  }
  /**
   * @return Google_Service_CloudBuild_Volume
   */
  public function getVolumes()
  {
    return $this->volumes;
  }

  public function getWorkerPool()
  {
    return $this->workerPool;
  }

  public function setWorkerPool($workerPool)
  {
    $this->workerPool = $workerPool;
  }
}
