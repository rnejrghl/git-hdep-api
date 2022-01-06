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

class Google_Service_CloudComposer_EnvironmentConfig extends Google_Model
{
  public $airflowUri;
  public $dagGcsPrefix;
  public $gkeCluster;
  public $nodeCount;
  protected $nodeConfigType = 'Google_Service_CloudComposer_NodeConfig';
  protected $nodeConfigDataType = '';
  protected $softwareConfigType = 'Google_Service_CloudComposer_SoftwareConfig';
  protected $softwareConfigDataType = '';

  public function getAirflowUri()
  {
    return $this->airflowUri;
  }

  public function setAirflowUri($airflowUri)
  {
    $this->airflowUri = $airflowUri;
  }

  public function getDagGcsPrefix()
  {
    return $this->dagGcsPrefix;
  }

  public function setDagGcsPrefix($dagGcsPrefix)
  {
    $this->dagGcsPrefix = $dagGcsPrefix;
  }

  public function getGkeCluster()
  {
    return $this->gkeCluster;
  }

  public function setGkeCluster($gkeCluster)
  {
    $this->gkeCluster = $gkeCluster;
  }

  /**
   * @param Google_Service_CloudComposer_NodeConfig
   */
  public function setNodeConfig(Google_Service_CloudComposer_NodeConfig $nodeConfig)
  {
    $this->nodeConfig = $nodeConfig;
  }
  /**
   * @return Google_Service_CloudComposer_NodeConfig
   */
  public function getNodeConfig()
  {
    return $this->nodeConfig;
  }

  public function getNodeCount()
  {
    return $this->nodeCount;
  }

  public function setNodeCount($nodeCount)
  {
    $this->nodeCount = $nodeCount;
  }

  /**
   * @param Google_Service_CloudComposer_SoftwareConfig
   */
  public function setSoftwareConfig(Google_Service_CloudComposer_SoftwareConfig $softwareConfig)
  {
    $this->softwareConfig = $softwareConfig;
  }
  /**
   * @return Google_Service_CloudComposer_SoftwareConfig
   */
  public function getSoftwareConfig()
  {
    return $this->softwareConfig;
  }
}
