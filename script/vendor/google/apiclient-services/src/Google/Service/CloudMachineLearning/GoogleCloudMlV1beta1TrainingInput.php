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

class Google_Service_CloudMachineLearning_GoogleCloudMlV1beta1TrainingInput extends Google_Collection
{
  public $args;
  public $masterType;
  public $packageUris;
  public $parameterServerCount;
  public $parameterServerType;
  public $pythonModule;
  public $region;
  public $scaleTier;
  public $workerCount;
  public $workerType;
  protected $collection_key = 'packageUris';
  protected $hyperparametersType = 'Google_Service_CloudMachineLearning_GoogleCloudMlV1beta1HyperparameterSpec';
  protected $hyperparametersDataType = '';

  public function getArgs()
  {
    return $this->args;
  }

  public function setArgs($args)
  {
    $this->args = $args;
  }

  public function setHyperparameters(Google_Service_CloudMachineLearning_GoogleCloudMlV1beta1HyperparameterSpec $hyperparameters)
  {
    $this->hyperparameters = $hyperparameters;
  }
  public function getHyperparameters()
  {
    return $this->hyperparameters;
  }

  public function getMasterType()
  {
    return $this->masterType;
  }

  public function setMasterType($masterType)
  {
    $this->masterType = $masterType;
  }

  public function getPackageUris()
  {
    return $this->packageUris;
  }

  public function setPackageUris($packageUris)
  {
    $this->packageUris = $packageUris;
  }

  public function getParameterServerCount()
  {
    return $this->parameterServerCount;
  }

  public function setParameterServerCount($parameterServerCount)
  {
    $this->parameterServerCount = $parameterServerCount;
  }

  public function getParameterServerType()
  {
    return $this->parameterServerType;
  }

  public function setParameterServerType($parameterServerType)
  {
    $this->parameterServerType = $parameterServerType;
  }

  public function getPythonModule()
  {
    return $this->pythonModule;
  }

  public function setPythonModule($pythonModule)
  {
    $this->pythonModule = $pythonModule;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getScaleTier()
  {
    return $this->scaleTier;
  }

  public function setScaleTier($scaleTier)
  {
    $this->scaleTier = $scaleTier;
  }

  public function getWorkerCount()
  {
    return $this->workerCount;
  }

  public function setWorkerCount($workerCount)
  {
    $this->workerCount = $workerCount;
  }

  public function getWorkerType()
  {
    return $this->workerType;
  }

  public function setWorkerType($workerType)
  {
    $this->workerType = $workerType;
  }
}
