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

class Google_Service_DLP_GooglePrivacyDlpV2JobTrigger extends Google_Collection
{
  public $createTime;
  public $description;
  public $displayName;
  public $lastRunTime;
  public $name;
  public $status;
  public $updateTime;
  protected $collection_key = 'triggers';
  protected $errorsType = 'Google_Service_DLP_GooglePrivacyDlpV2Error';
  protected $errorsDataType = 'array';
  protected $inspectJobType = 'Google_Service_DLP_GooglePrivacyDlpV2InspectJobConfig';
  protected $inspectJobDataType = '';
  protected $triggersType = 'Google_Service_DLP_GooglePrivacyDlpV2Trigger';
  protected $triggersDataType = 'array';

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2Error
   */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2Error
   */
  public function getErrors()
  {
    return $this->errors;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2InspectJobConfig
   */
  public function setInspectJob(Google_Service_DLP_GooglePrivacyDlpV2InspectJobConfig $inspectJob)
  {
    $this->inspectJob = $inspectJob;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2InspectJobConfig
   */
  public function getInspectJob()
  {
    return $this->inspectJob;
  }

  public function getLastRunTime()
  {
    return $this->lastRunTime;
  }

  public function setLastRunTime($lastRunTime)
  {
    $this->lastRunTime = $lastRunTime;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2Trigger
   */
  public function setTriggers($triggers)
  {
    $this->triggers = $triggers;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2Trigger
   */
  public function getTriggers()
  {
    return $this->triggers;
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
