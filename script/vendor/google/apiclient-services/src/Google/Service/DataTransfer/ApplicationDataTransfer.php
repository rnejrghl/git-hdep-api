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

class Google_Service_DataTransfer_ApplicationDataTransfer extends Google_Collection
{
  public $applicationId;
  public $applicationTransferStatus;
  protected $collection_key = 'applicationTransferParams';
  protected $applicationTransferParamsType = 'Google_Service_DataTransfer_ApplicationTransferParam';
  protected $applicationTransferParamsDataType = 'array';

  public function getApplicationId()
  {
    return $this->applicationId;
  }

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }

  /**
   * @param Google_Service_DataTransfer_ApplicationTransferParam
   */
  public function setApplicationTransferParams($applicationTransferParams)
  {
    $this->applicationTransferParams = $applicationTransferParams;
  }
  /**
   * @return Google_Service_DataTransfer_ApplicationTransferParam
   */
  public function getApplicationTransferParams()
  {
    return $this->applicationTransferParams;
  }

  public function getApplicationTransferStatus()
  {
    return $this->applicationTransferStatus;
  }

  public function setApplicationTransferStatus($applicationTransferStatus)
  {
    $this->applicationTransferStatus = $applicationTransferStatus;
  }
}
