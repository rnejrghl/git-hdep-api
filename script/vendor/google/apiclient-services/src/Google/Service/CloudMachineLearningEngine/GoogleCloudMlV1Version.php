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

class Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Version extends Google_Model
{
  public $createTime;
  public $deploymentUri;
  public $description;
  public $errorMessage;
  public $etag;
  public $framework;
  public $isDefault;
  public $labels;
  public $lastUseTime;
  public $machineType;
  public $name;
  public $pythonVersion;
  public $runtimeVersion;
  public $state;
  protected $autoScalingType = 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AutoScaling';
  protected $autoScalingDataType = '';
  protected $manualScalingType = 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ManualScaling';
  protected $manualScalingDataType = '';

  /**
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AutoScaling
   */
  public function setAutoScaling(Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AutoScaling $autoScaling)
  {
    $this->autoScaling = $autoScaling;
  }
  /**
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AutoScaling
   */
  public function getAutoScaling()
  {
    return $this->autoScaling;
  }

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  public function getDeploymentUri()
  {
    return $this->deploymentUri;
  }

  public function setDeploymentUri($deploymentUri)
  {
    $this->deploymentUri = $deploymentUri;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getErrorMessage()
  {
    return $this->errorMessage;
  }

  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getFramework()
  {
    return $this->framework;
  }

  public function setFramework($framework)
  {
    $this->framework = $framework;
  }

  public function getIsDefault()
  {
    return $this->isDefault;
  }

  public function setIsDefault($isDefault)
  {
    $this->isDefault = $isDefault;
  }

  public function getLabels()
  {
    return $this->labels;
  }

  public function setLabels($labels)
  {
    $this->labels = $labels;
  }

  public function getLastUseTime()
  {
    return $this->lastUseTime;
  }

  public function setLastUseTime($lastUseTime)
  {
    $this->lastUseTime = $lastUseTime;
  }

  public function getMachineType()
  {
    return $this->machineType;
  }

  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }

  /**
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ManualScaling
   */
  public function setManualScaling(Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ManualScaling $manualScaling)
  {
    $this->manualScaling = $manualScaling;
  }
  /**
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ManualScaling
   */
  public function getManualScaling()
  {
    return $this->manualScaling;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPythonVersion()
  {
    return $this->pythonVersion;
  }

  public function setPythonVersion($pythonVersion)
  {
    $this->pythonVersion = $pythonVersion;
  }

  public function getRuntimeVersion()
  {
    return $this->runtimeVersion;
  }

  public function setRuntimeVersion($runtimeVersion)
  {
    $this->runtimeVersion = $runtimeVersion;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }
}
