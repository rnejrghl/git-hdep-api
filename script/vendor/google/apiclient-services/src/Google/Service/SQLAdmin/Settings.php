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

class Google_Service_SQLAdmin_Settings extends Google_Collection
{
  public $activationPolicy;
  public $authorizedGaeApplications;
  public $availabilityType;
  public $crashSafeReplicationEnabled;
  public $dataDiskSizeGb;
  public $dataDiskType;
  public $databaseReplicationEnabled;
  public $kind;
  public $pricingPlan;
  public $replicationType;
  public $settingsVersion;
  public $storageAutoResize;
  public $storageAutoResizeLimit;
  public $tier;
  public $userLabels;
  protected $collection_key = 'databaseFlags';
  protected $backupConfigurationType = 'Google_Service_SQLAdmin_BackupConfiguration';
  protected $backupConfigurationDataType = '';
  protected $databaseFlagsType = 'Google_Service_SQLAdmin_DatabaseFlags';
  protected $databaseFlagsDataType = 'array';
  protected $ipConfigurationType = 'Google_Service_SQLAdmin_IpConfiguration';
  protected $ipConfigurationDataType = '';
  protected $locationPreferenceType = 'Google_Service_SQLAdmin_LocationPreference';
  protected $locationPreferenceDataType = '';
  protected $maintenanceWindowType = 'Google_Service_SQLAdmin_MaintenanceWindow';
  protected $maintenanceWindowDataType = '';

  public function getActivationPolicy()
  {
    return $this->activationPolicy;
  }

  public function setActivationPolicy($activationPolicy)
  {
    $this->activationPolicy = $activationPolicy;
  }

  public function getAuthorizedGaeApplications()
  {
    return $this->authorizedGaeApplications;
  }

  public function setAuthorizedGaeApplications($authorizedGaeApplications)
  {
    $this->authorizedGaeApplications = $authorizedGaeApplications;
  }

  public function getAvailabilityType()
  {
    return $this->availabilityType;
  }

  public function setAvailabilityType($availabilityType)
  {
    $this->availabilityType = $availabilityType;
  }

  /**
   * @param Google_Service_SQLAdmin_BackupConfiguration
   */
  public function setBackupConfiguration(Google_Service_SQLAdmin_BackupConfiguration $backupConfiguration)
  {
    $this->backupConfiguration = $backupConfiguration;
  }
  /**
   * @return Google_Service_SQLAdmin_BackupConfiguration
   */
  public function getBackupConfiguration()
  {
    return $this->backupConfiguration;
  }

  public function getCrashSafeReplicationEnabled()
  {
    return $this->crashSafeReplicationEnabled;
  }

  public function setCrashSafeReplicationEnabled($crashSafeReplicationEnabled)
  {
    $this->crashSafeReplicationEnabled = $crashSafeReplicationEnabled;
  }

  public function getDataDiskSizeGb()
  {
    return $this->dataDiskSizeGb;
  }

  public function setDataDiskSizeGb($dataDiskSizeGb)
  {
    $this->dataDiskSizeGb = $dataDiskSizeGb;
  }

  public function getDataDiskType()
  {
    return $this->dataDiskType;
  }

  public function setDataDiskType($dataDiskType)
  {
    $this->dataDiskType = $dataDiskType;
  }

  /**
   * @param Google_Service_SQLAdmin_DatabaseFlags
   */
  public function setDatabaseFlags($databaseFlags)
  {
    $this->databaseFlags = $databaseFlags;
  }
  /**
   * @return Google_Service_SQLAdmin_DatabaseFlags
   */
  public function getDatabaseFlags()
  {
    return $this->databaseFlags;
  }

  public function getDatabaseReplicationEnabled()
  {
    return $this->databaseReplicationEnabled;
  }

  public function setDatabaseReplicationEnabled($databaseReplicationEnabled)
  {
    $this->databaseReplicationEnabled = $databaseReplicationEnabled;
  }

  /**
   * @param Google_Service_SQLAdmin_IpConfiguration
   */
  public function setIpConfiguration(Google_Service_SQLAdmin_IpConfiguration $ipConfiguration)
  {
    $this->ipConfiguration = $ipConfiguration;
  }
  /**
   * @return Google_Service_SQLAdmin_IpConfiguration
   */
  public function getIpConfiguration()
  {
    return $this->ipConfiguration;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  /**
   * @param Google_Service_SQLAdmin_LocationPreference
   */
  public function setLocationPreference(Google_Service_SQLAdmin_LocationPreference $locationPreference)
  {
    $this->locationPreference = $locationPreference;
  }
  /**
   * @return Google_Service_SQLAdmin_LocationPreference
   */
  public function getLocationPreference()
  {
    return $this->locationPreference;
  }
  /**
   * @param Google_Service_SQLAdmin_MaintenanceWindow
   */
  public function setMaintenanceWindow(Google_Service_SQLAdmin_MaintenanceWindow $maintenanceWindow)
  {
    $this->maintenanceWindow = $maintenanceWindow;
  }
  /**
   * @return Google_Service_SQLAdmin_MaintenanceWindow
   */
  public function getMaintenanceWindow()
  {
    return $this->maintenanceWindow;
  }

  public function getPricingPlan()
  {
    return $this->pricingPlan;
  }

  public function setPricingPlan($pricingPlan)
  {
    $this->pricingPlan = $pricingPlan;
  }

  public function getReplicationType()
  {
    return $this->replicationType;
  }

  public function setReplicationType($replicationType)
  {
    $this->replicationType = $replicationType;
  }

  public function getSettingsVersion()
  {
    return $this->settingsVersion;
  }

  public function setSettingsVersion($settingsVersion)
  {
    $this->settingsVersion = $settingsVersion;
  }

  public function getStorageAutoResize()
  {
    return $this->storageAutoResize;
  }

  public function setStorageAutoResize($storageAutoResize)
  {
    $this->storageAutoResize = $storageAutoResize;
  }

  public function getStorageAutoResizeLimit()
  {
    return $this->storageAutoResizeLimit;
  }

  public function setStorageAutoResizeLimit($storageAutoResizeLimit)
  {
    $this->storageAutoResizeLimit = $storageAutoResizeLimit;
  }

  public function getTier()
  {
    return $this->tier;
  }

  public function setTier($tier)
  {
    $this->tier = $tier;
  }

  public function getUserLabels()
  {
    return $this->userLabels;
  }

  public function setUserLabels($userLabels)
  {
    $this->userLabels = $userLabels;
  }
}
