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

class Google_Service_Directory_ChromeOsDevice extends Google_Collection
{
  public $annotatedAssetId;
  public $annotatedLocation;
  public $annotatedUser;
  public $bootMode;
  public $deviceId;
  public $etag;
  public $ethernetMacAddress;
  public $firmwareVersion;
  public $kind;
  public $lastEnrollmentTime;
  public $lastSync;
  public $macAddress;
  public $meid;
  public $model;
  public $notes;
  public $orderNumber;
  public $orgUnitPath;
  public $osVersion;
  public $platformVersion;
  public $serialNumber;
  public $status;
  public $supportEndDate;
  public $systemRamTotal;
  public $willAutoRenew;
  protected $collection_key = 'systemRamFreeReports';
  protected $activeTimeRangesType = 'Google_Service_Directory_ChromeOsDeviceActiveTimeRanges';
  protected $activeTimeRangesDataType = 'array';
  protected $cpuStatusReportsType = 'Google_Service_Directory_ChromeOsDeviceCpuStatusReports';
  protected $cpuStatusReportsDataType = 'array';
  protected $deviceFilesType = 'Google_Service_Directory_ChromeOsDeviceDeviceFiles';
  protected $deviceFilesDataType = 'array';
  protected $diskVolumeReportsType = 'Google_Service_Directory_ChromeOsDeviceDiskVolumeReports';
  protected $diskVolumeReportsDataType = 'array';
  protected $recentUsersType = 'Google_Service_Directory_ChromeOsDeviceRecentUsers';
  protected $recentUsersDataType = 'array';
  protected $systemRamFreeReportsType = 'Google_Service_Directory_ChromeOsDeviceSystemRamFreeReports';
  protected $systemRamFreeReportsDataType = 'array';
  protected $tpmVersionInfoType = 'Google_Service_Directory_ChromeOsDeviceTpmVersionInfo';
  protected $tpmVersionInfoDataType = '';

  /**
   * @param Google_Service_Directory_ChromeOsDeviceActiveTimeRanges
   */
  public function setActiveTimeRanges($activeTimeRanges)
  {
    $this->activeTimeRanges = $activeTimeRanges;
  }
  /**
   * @return Google_Service_Directory_ChromeOsDeviceActiveTimeRanges
   */
  public function getActiveTimeRanges()
  {
    return $this->activeTimeRanges;
  }

  public function getAnnotatedAssetId()
  {
    return $this->annotatedAssetId;
  }

  public function setAnnotatedAssetId($annotatedAssetId)
  {
    $this->annotatedAssetId = $annotatedAssetId;
  }

  public function getAnnotatedLocation()
  {
    return $this->annotatedLocation;
  }

  public function setAnnotatedLocation($annotatedLocation)
  {
    $this->annotatedLocation = $annotatedLocation;
  }

  public function getAnnotatedUser()
  {
    return $this->annotatedUser;
  }

  public function setAnnotatedUser($annotatedUser)
  {
    $this->annotatedUser = $annotatedUser;
  }

  public function getBootMode()
  {
    return $this->bootMode;
  }

  public function setBootMode($bootMode)
  {
    $this->bootMode = $bootMode;
  }

  /**
   * @param Google_Service_Directory_ChromeOsDeviceCpuStatusReports
   */
  public function setCpuStatusReports($cpuStatusReports)
  {
    $this->cpuStatusReports = $cpuStatusReports;
  }
  /**
   * @return Google_Service_Directory_ChromeOsDeviceCpuStatusReports
   */
  public function getCpuStatusReports()
  {
    return $this->cpuStatusReports;
  }
  /**
   * @param Google_Service_Directory_ChromeOsDeviceDeviceFiles
   */
  public function setDeviceFiles($deviceFiles)
  {
    $this->deviceFiles = $deviceFiles;
  }
  /**
   * @return Google_Service_Directory_ChromeOsDeviceDeviceFiles
   */
  public function getDeviceFiles()
  {
    return $this->deviceFiles;
  }

  public function getDeviceId()
  {
    return $this->deviceId;
  }

  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }

  /**
   * @param Google_Service_Directory_ChromeOsDeviceDiskVolumeReports
   */
  public function setDiskVolumeReports($diskVolumeReports)
  {
    $this->diskVolumeReports = $diskVolumeReports;
  }
  /**
   * @return Google_Service_Directory_ChromeOsDeviceDiskVolumeReports
   */
  public function getDiskVolumeReports()
  {
    return $this->diskVolumeReports;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEthernetMacAddress()
  {
    return $this->ethernetMacAddress;
  }

  public function setEthernetMacAddress($ethernetMacAddress)
  {
    $this->ethernetMacAddress = $ethernetMacAddress;
  }

  public function getFirmwareVersion()
  {
    return $this->firmwareVersion;
  }

  public function setFirmwareVersion($firmwareVersion)
  {
    $this->firmwareVersion = $firmwareVersion;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLastEnrollmentTime()
  {
    return $this->lastEnrollmentTime;
  }

  public function setLastEnrollmentTime($lastEnrollmentTime)
  {
    $this->lastEnrollmentTime = $lastEnrollmentTime;
  }

  public function getLastSync()
  {
    return $this->lastSync;
  }

  public function setLastSync($lastSync)
  {
    $this->lastSync = $lastSync;
  }

  public function getMacAddress()
  {
    return $this->macAddress;
  }

  public function setMacAddress($macAddress)
  {
    $this->macAddress = $macAddress;
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

  public function getNotes()
  {
    return $this->notes;
  }

  public function setNotes($notes)
  {
    $this->notes = $notes;
  }

  public function getOrderNumber()
  {
    return $this->orderNumber;
  }

  public function setOrderNumber($orderNumber)
  {
    $this->orderNumber = $orderNumber;
  }

  public function getOrgUnitPath()
  {
    return $this->orgUnitPath;
  }

  public function setOrgUnitPath($orgUnitPath)
  {
    $this->orgUnitPath = $orgUnitPath;
  }

  public function getOsVersion()
  {
    return $this->osVersion;
  }

  public function setOsVersion($osVersion)
  {
    $this->osVersion = $osVersion;
  }

  public function getPlatformVersion()
  {
    return $this->platformVersion;
  }

  public function setPlatformVersion($platformVersion)
  {
    $this->platformVersion = $platformVersion;
  }

  /**
   * @param Google_Service_Directory_ChromeOsDeviceRecentUsers
   */
  public function setRecentUsers($recentUsers)
  {
    $this->recentUsers = $recentUsers;
  }
  /**
   * @return Google_Service_Directory_ChromeOsDeviceRecentUsers
   */
  public function getRecentUsers()
  {
    return $this->recentUsers;
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

  public function getSupportEndDate()
  {
    return $this->supportEndDate;
  }

  public function setSupportEndDate($supportEndDate)
  {
    $this->supportEndDate = $supportEndDate;
  }

  /**
   * @param Google_Service_Directory_ChromeOsDeviceSystemRamFreeReports
   */
  public function setSystemRamFreeReports($systemRamFreeReports)
  {
    $this->systemRamFreeReports = $systemRamFreeReports;
  }
  /**
   * @return Google_Service_Directory_ChromeOsDeviceSystemRamFreeReports
   */
  public function getSystemRamFreeReports()
  {
    return $this->systemRamFreeReports;
  }

  public function getSystemRamTotal()
  {
    return $this->systemRamTotal;
  }

  public function setSystemRamTotal($systemRamTotal)
  {
    $this->systemRamTotal = $systemRamTotal;
  }

  /**
   * @param Google_Service_Directory_ChromeOsDeviceTpmVersionInfo
   */
  public function setTpmVersionInfo(Google_Service_Directory_ChromeOsDeviceTpmVersionInfo $tpmVersionInfo)
  {
    $this->tpmVersionInfo = $tpmVersionInfo;
  }
  /**
   * @return Google_Service_Directory_ChromeOsDeviceTpmVersionInfo
   */
  public function getTpmVersionInfo()
  {
    return $this->tpmVersionInfo;
  }

  public function getWillAutoRenew()
  {
    return $this->willAutoRenew;
  }

  public function setWillAutoRenew($willAutoRenew)
  {
    $this->willAutoRenew = $willAutoRenew;
  }
}
