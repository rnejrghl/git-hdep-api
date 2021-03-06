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

class Google_Service_Script_Deployment extends Google_Collection
{
  public $deploymentId;
  public $updateTime;
  protected $collection_key = 'entryPoints';
  protected $deploymentConfigType = 'Google_Service_Script_DeploymentConfig';
  protected $deploymentConfigDataType = '';
  protected $entryPointsType = 'Google_Service_Script_EntryPoint';
  protected $entryPointsDataType = 'array';

  /**
   * @param Google_Service_Script_DeploymentConfig
   */
  public function setDeploymentConfig(Google_Service_Script_DeploymentConfig $deploymentConfig)
  {
    $this->deploymentConfig = $deploymentConfig;
  }
  /**
   * @return Google_Service_Script_DeploymentConfig
   */
  public function getDeploymentConfig()
  {
    return $this->deploymentConfig;
  }

  public function getDeploymentId()
  {
    return $this->deploymentId;
  }

  public function setDeploymentId($deploymentId)
  {
    $this->deploymentId = $deploymentId;
  }

  /**
   * @param Google_Service_Script_EntryPoint
   */
  public function setEntryPoints($entryPoints)
  {
    $this->entryPoints = $entryPoints;
  }
  /**
   * @return Google_Service_Script_EntryPoint
   */
  public function getEntryPoints()
  {
    return $this->entryPoints;
  }

  public function getUpdateTime()
  {
    return $this->updateTime;
  }

  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
}
