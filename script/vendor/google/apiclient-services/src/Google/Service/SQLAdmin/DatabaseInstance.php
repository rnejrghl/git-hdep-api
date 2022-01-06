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

class Google_Service_SQLAdmin_DatabaseInstance extends Google_Collection
{
  public $backendType;
  public $connectionName;
  public $currentDiskSize;
  public $databaseVersion;
  public $etag;
  public $gceZone;
  public $instanceType;
  public $ipv6Address;
  public $kind;
  public $masterInstanceName;
  public $maxDiskSize;
  public $name;
  public $project;
  public $region;
  public $replicaNames;
  public $selfLink;
  public $serviceAccountEmailAddress;
  public $state;
  public $suspensionReason;
  protected $collection_key = 'suspensionReason';
  protected $failoverReplicaType = 'Google_Service_SQLAdmin_DatabaseInstanceFailoverReplica';
  protected $failoverReplicaDataType = '';
  protected $ipAddressesType = 'Google_Service_SQLAdmin_IpMapping';
  protected $ipAddressesDataType = 'array';
  protected $onPremisesConfigurationType = 'Google_Service_SQLAdmin_OnPremisesConfiguration';
  protected $onPremisesConfigurationDataType = '';
  protected $replicaConfigurationType = 'Google_Service_SQLAdmin_ReplicaConfiguration';
  protected $replicaConfigurationDataType = '';
  protected $serverCaCertType = 'Google_Service_SQLAdmin_SslCert';
  protected $serverCaCertDataType = '';
  protected $settingsType = 'Google_Service_SQLAdmin_Settings';
  protected $settingsDataType = '';

  public function getBackendType()
  {
    return $this->backendType;
  }

  public function setBackendType($backendType)
  {
    $this->backendType = $backendType;
  }

  public function getConnectionName()
  {
    return $this->connectionName;
  }

  public function setConnectionName($connectionName)
  {
    $this->connectionName = $connectionName;
  }

  public function getCurrentDiskSize()
  {
    return $this->currentDiskSize;
  }

  public function setCurrentDiskSize($currentDiskSize)
  {
    $this->currentDiskSize = $currentDiskSize;
  }

  public function getDatabaseVersion()
  {
    return $this->databaseVersion;
  }

  public function setDatabaseVersion($databaseVersion)
  {
    $this->databaseVersion = $databaseVersion;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  /**
   * @param Google_Service_SQLAdmin_DatabaseInstanceFailoverReplica
   */
  public function setFailoverReplica(Google_Service_SQLAdmin_DatabaseInstanceFailoverReplica $failoverReplica)
  {
    $this->failoverReplica = $failoverReplica;
  }
  /**
   * @return Google_Service_SQLAdmin_DatabaseInstanceFailoverReplica
   */
  public function getFailoverReplica()
  {
    return $this->failoverReplica;
  }

  public function getGceZone()
  {
    return $this->gceZone;
  }

  public function setGceZone($gceZone)
  {
    $this->gceZone = $gceZone;
  }

  public function getInstanceType()
  {
    return $this->instanceType;
  }

  public function setInstanceType($instanceType)
  {
    $this->instanceType = $instanceType;
  }

  /**
   * @param Google_Service_SQLAdmin_IpMapping
   */
  public function setIpAddresses($ipAddresses)
  {
    $this->ipAddresses = $ipAddresses;
  }
  /**
   * @return Google_Service_SQLAdmin_IpMapping
   */
  public function getIpAddresses()
  {
    return $this->ipAddresses;
  }

  public function getIpv6Address()
  {
    return $this->ipv6Address;
  }

  public function setIpv6Address($ipv6Address)
  {
    $this->ipv6Address = $ipv6Address;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getMasterInstanceName()
  {
    return $this->masterInstanceName;
  }

  public function setMasterInstanceName($masterInstanceName)
  {
    $this->masterInstanceName = $masterInstanceName;
  }

  public function getMaxDiskSize()
  {
    return $this->maxDiskSize;
  }

  public function setMaxDiskSize($maxDiskSize)
  {
    $this->maxDiskSize = $maxDiskSize;
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
   * @param Google_Service_SQLAdmin_OnPremisesConfiguration
   */
  public function setOnPremisesConfiguration(Google_Service_SQLAdmin_OnPremisesConfiguration $onPremisesConfiguration)
  {
    $this->onPremisesConfiguration = $onPremisesConfiguration;
  }
  /**
   * @return Google_Service_SQLAdmin_OnPremisesConfiguration
   */
  public function getOnPremisesConfiguration()
  {
    return $this->onPremisesConfiguration;
  }

  public function getProject()
  {
    return $this->project;
  }

  public function setProject($project)
  {
    $this->project = $project;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  /**
   * @param Google_Service_SQLAdmin_ReplicaConfiguration
   */
  public function setReplicaConfiguration(Google_Service_SQLAdmin_ReplicaConfiguration $replicaConfiguration)
  {
    $this->replicaConfiguration = $replicaConfiguration;
  }
  /**
   * @return Google_Service_SQLAdmin_ReplicaConfiguration
   */
  public function getReplicaConfiguration()
  {
    return $this->replicaConfiguration;
  }

  public function getReplicaNames()
  {
    return $this->replicaNames;
  }

  public function setReplicaNames($replicaNames)
  {
    $this->replicaNames = $replicaNames;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  /**
   * @param Google_Service_SQLAdmin_SslCert
   */
  public function setServerCaCert(Google_Service_SQLAdmin_SslCert $serverCaCert)
  {
    $this->serverCaCert = $serverCaCert;
  }
  /**
   * @return Google_Service_SQLAdmin_SslCert
   */
  public function getServerCaCert()
  {
    return $this->serverCaCert;
  }

  public function getServiceAccountEmailAddress()
  {
    return $this->serviceAccountEmailAddress;
  }

  public function setServiceAccountEmailAddress($serviceAccountEmailAddress)
  {
    $this->serviceAccountEmailAddress = $serviceAccountEmailAddress;
  }

  /**
   * @param Google_Service_SQLAdmin_Settings
   */
  public function setSettings(Google_Service_SQLAdmin_Settings $settings)
  {
    $this->settings = $settings;
  }
  /**
   * @return Google_Service_SQLAdmin_Settings
   */
  public function getSettings()
  {
    return $this->settings;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getSuspensionReason()
  {
    return $this->suspensionReason;
  }

  public function setSuspensionReason($suspensionReason)
  {
    $this->suspensionReason = $suspensionReason;
  }
}
