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

class Google_Service_ServiceUsage_Usage extends Google_Collection
{
  public $producerNotificationChannel;
  public $requirements;
  protected $collection_key = 'rules';
  protected $rulesType = 'Google_Service_ServiceUsage_UsageRule';
  protected $rulesDataType = 'array';

  public function getProducerNotificationChannel()
  {
    return $this->producerNotificationChannel;
  }

  public function setProducerNotificationChannel($producerNotificationChannel)
  {
    $this->producerNotificationChannel = $producerNotificationChannel;
  }

  public function getRequirements()
  {
    return $this->requirements;
  }

  public function setRequirements($requirements)
  {
    $this->requirements = $requirements;
  }

  /**
   * @param Google_Service_ServiceUsage_UsageRule
   */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /**
   * @return Google_Service_ServiceUsage_UsageRule
   */
  public function getRules()
  {
    return $this->rules;
  }
}
