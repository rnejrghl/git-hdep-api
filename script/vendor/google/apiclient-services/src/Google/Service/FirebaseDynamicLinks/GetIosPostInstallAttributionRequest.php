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

class Google_Service_FirebaseDynamicLinks_GetIosPostInstallAttributionRequest extends Google_Model
{
  public $appInstallationTime;
  public $bundleId;
  public $iosVersion;
  public $retrievalMethod;
  public $sdkVersion;
  public $uniqueMatchLinkToCheck;
  public $visualStyle;
  protected $deviceType = 'Google_Service_FirebaseDynamicLinks_DeviceInfo';
  protected $deviceDataType = '';

  public function getAppInstallationTime()
  {
    return $this->appInstallationTime;
  }

  public function setAppInstallationTime($appInstallationTime)
  {
    $this->appInstallationTime = $appInstallationTime;
  }

  public function getBundleId()
  {
    return $this->bundleId;
  }

  public function setBundleId($bundleId)
  {
    $this->bundleId = $bundleId;
  }

  /**
   * @param Google_Service_FirebaseDynamicLinks_DeviceInfo
   */
  public function setDevice(Google_Service_FirebaseDynamicLinks_DeviceInfo $device)
  {
    $this->device = $device;
  }
  /**
   * @return Google_Service_FirebaseDynamicLinks_DeviceInfo
   */
  public function getDevice()
  {
    return $this->device;
  }

  public function getIosVersion()
  {
    return $this->iosVersion;
  }

  public function setIosVersion($iosVersion)
  {
    $this->iosVersion = $iosVersion;
  }

  public function getRetrievalMethod()
  {
    return $this->retrievalMethod;
  }

  public function setRetrievalMethod($retrievalMethod)
  {
    $this->retrievalMethod = $retrievalMethod;
  }

  public function getSdkVersion()
  {
    return $this->sdkVersion;
  }

  public function setSdkVersion($sdkVersion)
  {
    $this->sdkVersion = $sdkVersion;
  }

  public function getUniqueMatchLinkToCheck()
  {
    return $this->uniqueMatchLinkToCheck;
  }

  public function setUniqueMatchLinkToCheck($uniqueMatchLinkToCheck)
  {
    $this->uniqueMatchLinkToCheck = $uniqueMatchLinkToCheck;
  }

  public function getVisualStyle()
  {
    return $this->visualStyle;
  }

  public function setVisualStyle($visualStyle)
  {
    $this->visualStyle = $visualStyle;
  }
}
