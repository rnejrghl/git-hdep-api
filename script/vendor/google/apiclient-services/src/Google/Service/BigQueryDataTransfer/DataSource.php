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

class Google_Service_BigQueryDataTransfer_DataSource extends Google_Collection
{
  public $authorizationType;
  public $clientId;
  public $dataRefreshType;
  public $dataSourceId;
  public $defaultDataRefreshWindowDays;
  public $defaultSchedule;
  public $description;
  public $displayName;
  public $helpUrl;
  public $manualRunsDisabled;
  public $minimumScheduleInterval;
  public $name;
  public $scopes;
  public $supportsCustomSchedule;
  public $supportsMultipleTransfers;
  public $transferType;
  public $updateDeadlineSeconds;
  protected $collection_key = 'scopes';
  protected $parametersType = 'Google_Service_BigQueryDataTransfer_DataSourceParameter';
  protected $parametersDataType = 'array';

  public function getAuthorizationType()
  {
    return $this->authorizationType;
  }

  public function setAuthorizationType($authorizationType)
  {
    $this->authorizationType = $authorizationType;
  }

  public function getClientId()
  {
    return $this->clientId;
  }

  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }

  public function getDataRefreshType()
  {
    return $this->dataRefreshType;
  }

  public function setDataRefreshType($dataRefreshType)
  {
    $this->dataRefreshType = $dataRefreshType;
  }

  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }

  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }

  public function getDefaultDataRefreshWindowDays()
  {
    return $this->defaultDataRefreshWindowDays;
  }

  public function setDefaultDataRefreshWindowDays($defaultDataRefreshWindowDays)
  {
    $this->defaultDataRefreshWindowDays = $defaultDataRefreshWindowDays;
  }

  public function getDefaultSchedule()
  {
    return $this->defaultSchedule;
  }

  public function setDefaultSchedule($defaultSchedule)
  {
    $this->defaultSchedule = $defaultSchedule;
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

  public function getHelpUrl()
  {
    return $this->helpUrl;
  }

  public function setHelpUrl($helpUrl)
  {
    $this->helpUrl = $helpUrl;
  }

  public function getManualRunsDisabled()
  {
    return $this->manualRunsDisabled;
  }

  public function setManualRunsDisabled($manualRunsDisabled)
  {
    $this->manualRunsDisabled = $manualRunsDisabled;
  }

  public function getMinimumScheduleInterval()
  {
    return $this->minimumScheduleInterval;
  }

  public function setMinimumScheduleInterval($minimumScheduleInterval)
  {
    $this->minimumScheduleInterval = $minimumScheduleInterval;
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
   * @param Google_Service_BigQueryDataTransfer_DataSourceParameter
   */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return Google_Service_BigQueryDataTransfer_DataSourceParameter
   */
  public function getParameters()
  {
    return $this->parameters;
  }

  public function getScopes()
  {
    return $this->scopes;
  }

  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }

  public function getSupportsCustomSchedule()
  {
    return $this->supportsCustomSchedule;
  }

  public function setSupportsCustomSchedule($supportsCustomSchedule)
  {
    $this->supportsCustomSchedule = $supportsCustomSchedule;
  }

  public function getSupportsMultipleTransfers()
  {
    return $this->supportsMultipleTransfers;
  }

  public function setSupportsMultipleTransfers($supportsMultipleTransfers)
  {
    $this->supportsMultipleTransfers = $supportsMultipleTransfers;
  }

  public function getTransferType()
  {
    return $this->transferType;
  }

  public function setTransferType($transferType)
  {
    $this->transferType = $transferType;
  }

  public function getUpdateDeadlineSeconds()
  {
    return $this->updateDeadlineSeconds;
  }

  public function setUpdateDeadlineSeconds($updateDeadlineSeconds)
  {
    $this->updateDeadlineSeconds = $updateDeadlineSeconds;
  }
}
