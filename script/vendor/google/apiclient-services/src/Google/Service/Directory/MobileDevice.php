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

class Google_Service_Directory_MobileDevice extends Google_Collection
{
  public $adbStatus;
  public $basebandVersion;
  public $bootloaderVersion;
  public $brand;
  public $buildNumber;
  public $defaultLanguage;
  public $developerOptionsStatus;
  public $deviceCompromisedStatus;
  public $deviceId;
  public $devicePasswordStatus;
  public $email;
  public $encryptionStatus;
  public $etag;
  public $firstSync;
  public $hardware;
  public $hardwareId;
  public $imei;
  public $kernelVersion;
  public $kind;
  public $lastSync;
  public $managedAccountIsOnOwnerProfile;
  public $manufacturer;
  public $meid;
  public $model;
  public $name;
  public $networkOperator;
  public $os;
  public $otherAccountsInfo;
  public $privilege;
  public $releaseVersion;
  public $resourceId;
  public $securityPatchLevel;
  public $serialNumber;
  public $status;
  public $supportsWorkProfile;
  public $type;
  public $unknownSourcesStatus;
  public $userAgent;
  public $wifiMacAddress;
  protected $collection_key = 'otherAccountsInfo';
  protected $applicationsType = 'Google_Service_Directory_MobileDeviceApplications';
  protected $applicationsDataType = 'array';

  public function getAdbStatus()
  {
    return $this->adbStatus;
  }

  public function setAdbStatus($adbStatus)
  {
    $this->adbStatus = $adbStatus;
  }

  /**
   * @param Google_Service_Directory_MobileDeviceApplications
   */
  public function setApplications($applications)
  {
    $this->applications = $applications;
  }
  /**
   * @return Google_Service_Directory_MobileDeviceApplications
   */
  public function getApplications()
  {
    return $this->applications;
  }

  public function getBasebandVersion()
  {
    return $this->basebandVersion;
  }

  public function setBasebandVersion($basebandVersion)
  {
    $this->basebandVersion = $basebandVersion;
  }

  public function getBootloaderVersion()
  {
    return $this->bootloaderVersion;
  }

  public function setBootloaderVersion($bootloaderVersion)
  {
    $this->bootloaderVersion = $bootloaderVersion;
  }

  public function getBrand()
  {
    return $this->brand;
  }

  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  public function getBuildNumber()
  {
    return $this->buildNumber;
  }

  public function setBuildNumber($buildNumber)
  {
    $this->buildNumber = $buildNumber;
  }

  public function getDefaultLanguage()
  {
    return $this->defaultLanguage;
  }

  public function setDefaultLanguage($defaultLanguage)
  {
    $this->defaultLanguage = $defaultLanguage;
  }

  public function getDeveloperOptionsStatus()
  {
    return $this->developerOptionsStatus;
  }

  public function setDeveloperOptionsStatus($developerOptionsStatus)
  {
    $this->developerOptionsStatus = $developerOptionsStatus;
  }

  public function getDeviceCompromisedStatus()
  {
    return $this->deviceCompromisedStatus;
  }

  public function setDeviceCompromisedStatus($deviceCompromisedStatus)
  {
    $this->deviceCompromisedStatus = $deviceCompromisedStatus;
  }

  public function getDeviceId()
  {
    return $this->deviceId;
  }

  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }

  public function getDevicePasswordStatus()
  {
    return $this->devicePasswordStatus;
  }

  public function setDevicePasswordStatus($devicePasswordStatus)
  {
    $this->devicePasswordStatus = $devicePasswordStatus;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEncryptionStatus()
  {
    return $this->encryptionStatus;
  }

  public function setEncryptionStatus($encryptionStatus)
  {
    $this->encryptionStatus = $encryptionStatus;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getFirstSync()
  {
    return $this->firstSync;
  }

  public function setFirstSync($firstSync)
  {
    $this->firstSync = $firstSync;
  }

  public function getHardware()
  {
    return $this->hardware;
  }

  public function setHardware($hardware)
  {
    $this->hardware = $hardware;
  }

  public function getHardwareId()
  {
    return $this->hardwareId;
  }

  public function setHardwareId($hardwareId)
  {
    $this->hardwareId = $hardwareId;
  }

  public function getImei()
  {
    return $this->imei;
  }

  public function setImei($imei)
  {
    $this->imei = $imei;
  }

  public function getKernelVersion()
  {
    return $this->kernelVersion;
  }

  public function setKernelVersion($kernelVersion)
  {
    $this->kernelVersion = $kernelVersion;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLastSync()
  {
    return $this->lastSync;
  }

  public function setLastSync($lastSync)
  {
    $this->lastSync = $lastSync;
  }

  public function getManagedAccountIsOnOwnerProfile()
  {
    return $this->managedAccountIsOnOwnerProfile;
  }

  public function setManagedAccountIsOnOwnerProfile($managedAccountIsOnOwnerProfile)
  {
    $this->managedAccountIsOnOwnerProfile = $managedAccountIsOnOwnerProfile;
  }

  public function getManufacturer()
  {
    return $this->manufacturer;
  }

  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }

  public function getMeid()
  {
    return $this->meid;
  }

  public function setMeid($meid)
  {
    $this->meid = $meid;
  }

  public function getModel()
  {
    return $this->model;
  }

  public function setModel($model)
  {
    $this->model = $model;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getNetworkOperator()
  {
    return $this->networkOperator;
  }

  public function setNetworkOperator($networkOperator)
  {
    $this->networkOperator = $networkOperator;
  }

  public function getOs()
  {
    return $this->os;
  }

  public function setOs($os)
  {
    $this->os = $os;
  }

  public function getOtherAccountsInfo()
  {
    return $this->otherAccountsInfo;
  }

  public function setOtherAccountsInfo($otherAccountsInfo)
  {
    $this->otherAccountsInfo = $otherAccountsInfo;
  }

  public function getPrivilege()
  {
    return $this->privilege;
  }

  public function setPrivilege($privilege)
  {
    $this->privilege = $privilege;
  }

  public function getReleaseVersion()
  {
    return $this->releaseVersion;
  }

  public function setReleaseVersion($releaseVersion)
  {
    $this->releaseVersion = $releaseVersion;
  }

  public function getResourceId()
  {
    return $this->resourceId;
  }

  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }

  public function getSecurityPatchLevel()
  {
    return $this->securityPatchLevel;
  }

  public function setSecurityPatchLevel($securityPatchLevel)
  {
    $this->securityPatchLevel = $securityPatchLevel;
  }

  public function getSerialNumber()
  {
    return $this->serialNumber;
  }

  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getSupportsWorkProfile()
  {
    return $this->supportsWorkProfile;
  }

  public function setSupportsWorkProfile($supportsWorkProfile)
  {
    $this->supportsWorkProfile = $supportsWorkProfile;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getUnknownSourcesStatus()
  {
    return $this->unknownSourcesStatus;
  }

  public function setUnknownSourcesStatus($unknownSourcesStatus)
  {
    $this->unknownSourcesStatus = $unknownSourcesStatus;
  }

  public function getUserAgent()
  {
    return $this->userAgent;
  }

  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }

  public function getWifiMacAddress()
  {
    return $this->wifiMacAddress;
  }

  public function setWifiMacAddress($wifiMacAddress)
  {
    $this->wifiMacAddress = $wifiMacAddress;
  }
}
