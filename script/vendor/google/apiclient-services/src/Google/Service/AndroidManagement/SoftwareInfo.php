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

class Google_Service_AndroidManagement_SoftwareInfo extends Google_Model
{
  public $androidBuildNumber;
  public $androidBuildTime;
  public $androidDevicePolicyVersionCode;
  public $androidDevicePolicyVersionName;
  public $androidVersion;
  public $bootloaderVersion;
  public $deviceBuildSignature;
  public $deviceKernelVersion;
  public $primaryLanguageCode;
  public $securityPatchLevel;

  public function getAndroidBuildNumber()
  {
    return $this->androidBuildNumber;
  }

  public function setAndroidBuildNumber($androidBuildNumber)
  {
    $this->androidBuildNumber = $androidBuildNumber;
  }

  public function getAndroidBuildTime()
  {
    return $this->androidBuildTime;
  }

  public function setAndroidBuildTime($androidBuildTime)
  {
    $this->androidBuildTime = $androidBuildTime;
  }

  public function getAndroidDevicePolicyVersionCode()
  {
    return $this->androidDevicePolicyVersionCode;
  }

  public function setAndroidDevicePolicyVersionCode($androidDevicePolicyVersionCode)
  {
    $this->androidDevicePolicyVersionCode = $androidDevicePolicyVersionCode;
  }

  public function getAndroidDevicePolicyVersionName()
  {
    return $this->androidDevicePolicyVersionName;
  }

  public function setAndroidDevicePolicyVersionName($androidDevicePolicyVersionName)
  {
    $this->androidDevicePolicyVersionName = $androidDevicePolicyVersionName;
  }

  public function getAndroidVersion()
  {
    return $this->androidVersion;
  }

  public function setAndroidVersion($androidVersion)
  {
    $this->androidVersion = $androidVersion;
  }

  public function getBootloaderVersion()
  {
    return $this->bootloaderVersion;
  }

  public function setBootloaderVersion($bootloaderVersion)
  {
    $this->bootloaderVersion = $bootloaderVersion;
  }

  public function getDeviceBuildSignature()
  {
    return $this->deviceBuildSignature;
  }

  public function setDeviceBuildSignature($deviceBuildSignature)
  {
    $this->deviceBuildSignature = $deviceBuildSignature;
  }

  public function getDeviceKernelVersion()
  {
    return $this->deviceKernelVersion;
  }

  public function setDeviceKernelVersion($deviceKernelVersion)
  {
    $this->deviceKernelVersion = $deviceKernelVersion;
  }

  public function getPrimaryLanguageCode()
  {
    return $this->primaryLanguageCode;
  }

  public function setPrimaryLanguageCode($primaryLanguageCode)
  {
    $this->primaryLanguageCode = $primaryLanguageCode;
  }

  public function getSecurityPatchLevel()
  {
    return $this->securityPatchLevel;
  }

  public function setSecurityPatchLevel($securityPatchLevel)
  {
    $this->securityPatchLevel = $securityPatchLevel;
  }
}
