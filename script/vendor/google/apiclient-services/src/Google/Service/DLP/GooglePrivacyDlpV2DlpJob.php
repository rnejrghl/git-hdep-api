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

class Google_Service_DLP_GooglePrivacyDlpV2DlpJob extends Google_Collection
{
  public $createTime;
  public $endTime;
  public $jobTriggerName;
  public $name;
  public $startTime;
  public $state;
  public $type;
  protected $collection_key = 'errors';
  protected $errorsType = 'Google_Service_DLP_GooglePrivacyDlpV2Error';
  protected $errorsDataType = 'array';
  protected $inspectDetailsType = 'Google_Service_DLP_GooglePrivacyDlpV2InspectDataSourceDetails';
  protected $inspectDetailsDataType = '';
  protected $riskDetailsType = 'Google_Service_DLP_GooglePrivacyDlpV2AnalyzeDataSourceRiskDetails';
  protected $riskDetailsDataType = '';

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
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
   * @param Google_Service_DLP_GooglePrivacyDlpV2InspectDataSourceDetails
   */
  public function setInspectDetails(Google_Service_DLP_GooglePrivacyDlpV2InspectDataSourceDetails $inspectDetails)
  {
    $this->inspectDetails = $inspectDetails;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2InspectDataSourceDetails
   */
  public function getInspectDetails()
  {
    return $this->inspectDetails;
  }

  public function getJobTriggerName()
  {
    return $this->jobTriggerName;
  }

  public function setJobTriggerName($jobTriggerName)
  {
    $this->jobTriggerName = $jobTriggerName;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2AnalyzeDataSourceRiskDetails
   */
  public function setRiskDetails(Google_Service_DLP_GooglePrivacyDlpV2AnalyzeDataSourceRiskDetails $riskDetails)
  {
    $this->riskDetails = $riskDetails;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2AnalyzeDataSourceRiskDetails
   */
  public function getRiskDetails()
  {
    return $this->riskDetails;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }
}