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

class Google_Service_AndroidProvisioningPartner_FindDevicesByDeviceIdentifierRequest extends Google_Model
{
  public $limit;
  public $pageToken;
  protected $deviceIdentifierType = 'Google_Service_AndroidProvisioningPartner_DeviceIdentifier';
  protected $deviceIdentifierDataType = '';

  /**
   * @param Google_Service_AndroidProvisioningPartner_DeviceIdentifier
   */
  public function setDeviceIdentifier(Google_Service_AndroidProvisioningPartner_DeviceIdentifier $deviceIdentifier)
  {
    $this->deviceIdentifier = $deviceIdentifier;
  }
  /**
   * @return Google_Service_AndroidProvisioningPartner_DeviceIdentifier
   */
  public function getDeviceIdentifier()
  {
    return $this->deviceIdentifier;
  }

  public function getLimit()
  {
    return $this->limit;
  }

  public function setLimit($limit)
  {
    $this->limit = $limit;
  }

  public function getPageToken()
  {
    return $this->pageToken;
  }

  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
}
