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

class Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1GetConfigResponse extends Google_Model
{
  public $serviceAccount;
  public $serviceAccountProject;
  protected $configType = 'Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Config';
  protected $configDataType = '';

  /**
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Config
   */
  public function setConfig(Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Config $config)
  {
    $this->config = $config;
  }
  /**
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Config
   */
  public function getConfig()
  {
    return $this->config;
  }

  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }

  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }

  public function getServiceAccountProject()
  {
    return $this->serviceAccountProject;
  }

  public function setServiceAccountProject($serviceAccountProject)
  {
    $this->serviceAccountProject = $serviceAccountProject;
  }
}
