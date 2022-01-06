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

class Google_Service_Monitoring_CollectdPayload extends Google_Collection
{
  public $endTime;
  public $plugin;
  public $pluginInstance;
  public $startTime;
  public $type;
  public $typeInstance;
  protected $collection_key = 'values';
  protected $metadataType = 'Google_Service_Monitoring_TypedValue';
  protected $metadataDataType = 'map';
  protected $valuesType = 'Google_Service_Monitoring_CollectdValue';
  protected $valuesDataType = 'array';

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  /**
   * @param Google_Service_Monitoring_TypedValue
   */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return Google_Service_Monitoring_TypedValue
   */
  public function getMetadata()
  {
    return $this->metadata;
  }

  public function getPlugin()
  {
    return $this->plugin;
  }

  public function setPlugin($plugin)
  {
    $this->plugin = $plugin;
  }

  public function getPluginInstance()
  {
    return $this->pluginInstance;
  }

  public function setPluginInstance($pluginInstance)
  {
    $this->pluginInstance = $pluginInstance;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getTypeInstance()
  {
    return $this->typeInstance;
  }

  public function setTypeInstance($typeInstance)
  {
    $this->typeInstance = $typeInstance;
  }

  /**
   * @param Google_Service_Monitoring_CollectdValue
   */
  public function setValues($values)
  {
    $this->values = $values;
  }
  /**
   * @return Google_Service_Monitoring_CollectdValue
   */
  public function getValues()
  {
    return $this->values;
  }
}
