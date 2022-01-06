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

class Google_Service_Container_NodePool extends Google_Collection
{
  public $initialNodeCount;
  public $instanceGroupUrls;
  public $name;
  public $selfLink;
  public $status;
  public $statusMessage;
  public $version;
  protected $collection_key = 'instanceGroupUrls';
  protected $autoscalingType = 'Google_Service_Container_NodePoolAutoscaling';
  protected $autoscalingDataType = '';
  protected $configType = 'Google_Service_Container_NodeConfig';
  protected $configDataType = '';
  protected $managementType = 'Google_Service_Container_NodeManagement';
  protected $managementDataType = '';

  /**
   * @param Google_Service_Container_NodePoolAutoscaling
   */
  public function setAutoscaling(Google_Service_Container_NodePoolAutoscaling $autoscaling)
  {
    $this->autoscaling = $autoscaling;
  }
  /**
   * @return Google_Service_Container_NodePoolAutoscaling
   */
  public function getAutoscaling()
  {
    return $this->autoscaling;
  }
  /**
   * @param Google_Service_Container_NodeConfig
   */
  public function setConfig(Google_Service_Container_NodeConfig $config)
  {
    $this->config = $config;
  }
  /**
   * @return Google_Service_Container_NodeConfig
   */
  public function getConfig()
  {
    return $this->config;
  }

  public function getInitialNodeCount()
  {
    return $this->initialNodeCount;
  }

  public function setInitialNodeCount($initialNodeCount)
  {
    $this->initialNodeCount = $initialNodeCount;
  }

  public function getInstanceGroupUrls()
  {
    return $this->instanceGroupUrls;
  }

  public function setInstanceGroupUrls($instanceGroupUrls)
  {
    $this->instanceGroupUrls = $instanceGroupUrls;
  }

  /**
   * @param Google_Service_Container_NodeManagement
   */
  public function setManagement(Google_Service_Container_NodeManagement $management)
  {
    $this->management = $management;
  }
  /**
   * @return Google_Service_Container_NodeManagement
   */
  public function getManagement()
  {
    return $this->management;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatusMessage()
  {
    return $this->statusMessage;
  }

  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }

  public function getVersion()
  {
    return $this->version;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }
}
