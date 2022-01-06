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

class Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1PredictionInput extends Google_Collection
{
  public $batchSize;
  public $dataFormat;
  public $inputPaths;
  public $maxWorkerCount;
  public $modelName;
  public $outputDataFormat;
  public $outputPath;
  public $region;
  public $runtimeVersion;
  public $signatureName;
  public $uri;
  public $versionName;
  protected $collection_key = 'inputPaths';
  protected $acceleratorType = 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AcceleratorConfig';
  protected $acceleratorDataType = '';

  /**
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AcceleratorConfig
   */
  public function setAccelerator(Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AcceleratorConfig $accelerator)
  {
    $this->accelerator = $accelerator;
  }
  /**
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AcceleratorConfig
   */
  public function getAccelerator()
  {
    return $this->accelerator;
  }

  public function getBatchSize()
  {
    return $this->batchSize;
  }

  public function setBatchSize($batchSize)
  {
    $this->batchSize = $batchSize;
  }

  public function getDataFormat()
  {
    return $this->dataFormat;
  }

  public function setDataFormat($dataFormat)
  {
    $this->dataFormat = $dataFormat;
  }

  public function getInputPaths()
  {
    return $this->inputPaths;
  }

  public function setInputPaths($inputPaths)
  {
    $this->inputPaths = $inputPaths;
  }

  public function getMaxWorkerCount()
  {
    return $this->maxWorkerCount;
  }

  public function setMaxWorkerCount($maxWorkerCount)
  {
    $this->maxWorkerCount = $maxWorkerCount;
  }

  public function getModelName()
  {
    return $this->modelName;
  }

  public function setModelName($modelName)
  {
    $this->modelName = $modelName;
  }

  public function getOutputDataFormat()
  {
    return $this->outputDataFormat;
  }

  public function setOutputDataFormat($outputDataFormat)
  {
    $this->outputDataFormat = $outputDataFormat;
  }

  public function getOutputPath()
  {
    return $this->outputPath;
  }

  public function setOutputPath($outputPath)
  {
    $this->outputPath = $outputPath;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getRuntimeVersion()
  {
    return $this->runtimeVersion;
  }

  public function setRuntimeVersion($runtimeVersion)
  {
    $this->runtimeVersion = $runtimeVersion;
  }

  public function getSignatureName()
  {
    return $this->signatureName;
  }

  public function setSignatureName($signatureName)
  {
    $this->signatureName = $signatureName;
  }

  public function getUri()
  {
    return $this->uri;
  }

  public function setUri($uri)
  {
    $this->uri = $uri;
  }

  public function getVersionName()
  {
    return $this->versionName;
  }

  public function setVersionName($versionName)
  {
    $this->versionName = $versionName;
  }
}
