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

class Google_Service_Container_Cluster extends Google_Collection
{
  public $clusterIpv4Cidr;
  public $createTime;
  public $currentMasterVersion;
  public $currentNodeCount;
  public $currentNodeVersion;
  public $description;
  public $enableKubernetesAlpha;
  public $endpoint;
  public $expireTime;
  public $initialClusterVersion;
  public $initialNodeCount;
  public $instanceGroupUrls;
  public $labelFingerprint;
  public $location;
  public $locations;
  public $loggingService;
  public $monitoringService;
  public $name;
  public $network;
  public $nodeIpv4CidrSize;
  public $resourceLabels;
  public $selfLink;
  public $servicesIpv4Cidr;
  public $status;
  public $statusMessage;
  public $subnetwork;
  public $zone;
  protected $collection_key = 'nodePools';
  protected $addonsConfigType = 'Google_Service_Container_AddonsConfig';
  protected $addonsConfigDataType = '';
  protected $ipAllocationPolicyType = 'Google_Service_Container_IPAllocationPolicy';
  protected $ipAllocationPolicyDataType = '';
  protected $legacyAbacType = 'Google_Service_Container_LegacyAbac';
  protected $legacyAbacDataType = '';
  protected $maintenancePolicyType = 'Google_Service_Container_MaintenancePolicy';
  protected $maintenancePolicyDataType = '';
  protected $masterAuthType = 'Google_Service_Container_MasterAuth';
  protected $masterAuthDataType = '';
  protected $masterAuthorizedNetworksConfigType = 'Google_Service_Container_MasterAuthorizedNetworksConfig';
  protected $masterAuthorizedNetworksConfigDataType = '';
  protected $networkConfigType = 'Google_Service_Container_NetworkConfig';
  protected $networkConfigDataType = '';
  protected $networkPolicyType = 'Google_Service_Container_NetworkPolicy';
  protected $networkPolicyDataType = '';
  protected $nodeConfigType = 'Google_Service_Container_NodeConfig';
  protected $nodeConfigDataType = '';
  protected $nodePoolsType = 'Google_Service_Container_NodePool';
  protected $nodePoolsDataType = 'array';
  protected $privateClusterConfigType = 'Google_Service_Container_PrivateClusterConfig';
  protected $privateClusterConfigDataType = '';

  /**
   * @param Google_Service_Container_AddonsConfig
   */
  public function setAddonsConfig(Google_Service_Container_AddonsConfig $addonsConfig)
  {
    $this->addonsConfig = $addonsConfig;
  }
  /**
   * @return Google_Service_Container_AddonsConfig
   */
  public function getAddonsConfig()
  {
    return $this->addonsConfig;
  }

  public function getClusterIpv4Cidr()
  {
    return $this->clusterIpv4Cidr;
  }

  public function setClusterIpv4Cidr($clusterIpv4Cidr)
  {
    $this->clusterIpv4Cidr = $clusterIpv4Cidr;
  }

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  public function getCurrentMasterVersion()
  {
    return $this->currentMasterVersion;
  }

  public function setCurrentMasterVersion($currentMasterVersion)
  {
    $this->currentMasterVersion = $currentMasterVersion;
  }

  public function getCurrentNodeCount()
  {
    return $this->currentNodeCount;
  }

  public function setCurrentNodeCount($currentNodeCount)
  {
    $this->currentNodeCount = $currentNodeCount;
  }

  public function getCurrentNodeVersion()
  {
    return $this->currentNodeVersion;
  }

  public function setCurrentNodeVersion($currentNodeVersion)
  {
    $this->currentNodeVersion = $currentNodeVersion;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getEnableKubernetesAlpha()
  {
    return $this->enableKubernetesAlpha;
  }

  public function setEnableKubernetesAlpha($enableKubernetesAlpha)
  {
    $this->enableKubernetesAlpha = $enableKubernetesAlpha;
  }

  public function getEndpoint()
  {
    return $this->endpoint;
  }

  public function setEndpoint($endpoint)
  {
    $this->endpoint = $endpoint;
  }

  public function getExpireTime()
  {
    return $this->expireTime;
  }

  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }

  public function getInitialClusterVersion()
  {
    return $this->initialClusterVersion;
  }

  public function setInitialClusterVersion($initialClusterVersion)
  {
    $this->initialClusterVersion = $initialClusterVersion;
  }

  public function getInitialNodeCount()
  {
    return $this->initialNodeCount;
  }

  public function setInitialNodeCount($initialNodeCount)
  {
    $this->initialNodeCount = $initialNodeCount;
  }

  public function getInstanceGroupUrls()
  {
    return $this->instanceGroupUrls;
  }

  public function setInstanceGroupUrls($instanceGroupUrls)
  {
    $this->instanceGroupUrls = $instanceGroupUrls;
  }

  /**
   * @param Google_Service_Container_IPAllocationPolicy
   */
  public function setIpAllocationPolicy(Google_Service_Container_IPAllocationPolicy $ipAllocationPolicy)
  {
    $this->ipAllocationPolicy = $ipAllocationPolicy;
  }
  /**
   * @return Google_Service_Container_IPAllocationPolicy
   */
  public function getIpAllocationPolicy()
  {
    return $this->ipAllocationPolicy;
  }

  public function getLabelFingerprint()
  {
    return $this->labelFingerprint;
  }

  public function setLabelFingerprint($labelFingerprint)
  {
    $this->labelFingerprint = $labelFingerprint;
  }

  /**
   * @param Google_Service_Container_LegacyAbac
   */
  public function setLegacyAbac(Google_Service_Container_LegacyAbac $legacyAbac)
  {
    $this->legacyAbac = $legacyAbac;
  }
  /**
   * @return Google_Service_Container_LegacyAbac
   */
  public function getLegacyAbac()
  {
    return $this->legacyAbac;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getLocations()
  {
    return $this->locations;
  }

  public function setLocations($locations)
  {
    $this->locations = $locations;
  }

  public function getLoggingService()
  {
    return $this->loggingService;
  }

  public function setLoggingService($loggingService)
  {
    $this->loggingService = $loggingService;
  }

  /**
   * @param Google_Service_Container_MaintenancePolicy
   */
  public function setMaintenancePolicy(Google_Service_Container_MaintenancePolicy $maintenancePolicy)
  {
    $this->maintenancePolicy = $maintenancePolicy;
  }
  /**
   * @return Google_Service_Container_MaintenancePolicy
   */
  public function getMaintenancePolicy()
  {
    return $this->maintenancePolicy;
  }
  /**
   * @param Google_Service_Container_MasterAuth
   */
  public function setMasterAuth(Google_Service_Container_MasterAuth $masterAuth)
  {
    $this->masterAuth = $masterAuth;
  }
  /**
   * @return Google_Service_Container_MasterAuth
   */
  public function getMasterAuth()
  {
    return $this->masterAuth;
  }
  /**
   * @param Google_Service_Container_MasterAuthorizedNetworksConfig
   */
  public function setMasterAuthorizedNetworksConfig(Google_Service_Container_MasterAuthorizedNetworksConfig $masterAuthorizedNetworksConfig)
  {
    $this->masterAuthorizedNetworksConfig = $masterAuthorizedNetworksConfig;
  }
  /**
   * @return Google_Service_Container_MasterAuthorizedNetworksConfig
   */
  public function getMasterAuthorizedNetworksConfig()
  {
    return $this->masterAuthorizedNetworksConfig;
  }

  public function getMonitoringService()
  {
    return $this->monitoringService;
  }

  public function setMonitoringService($monitoringService)
  {
    $this->monitoringService = $monitoringService;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getNetwork()
  {
    return $this->network;
  }

  public function setNetwork($network)
  {
    $this->network = $network;
  }

  /**
   * @param Google_Service_Container_NetworkConfig
   */
  public function setNetworkConfig(Google_Service_Container_NetworkConfig $networkConfig)
  {
    $this->networkConfig = $networkConfig;
  }
  /**
   * @return Google_Service_Container_NetworkConfig
   */
  public function getNetworkConfig()
  {
    return $this->networkConfig;
  }
  /**
   * @param Google_Service_Container_NetworkPolicy
   */
  public function setNetworkPolicy(Google_Service_Container_NetworkPolicy $networkPolicy)
  {
    $this->networkPolicy = $networkPolicy;
  }
  /**
   * @return Google_Service_Container_NetworkPolicy
   */
  public function getNetworkPolicy()
  {
    return $this->networkPolicy;
  }
  /**
   * @param Google_Service_Container_NodeConfig
   */
  public function setNodeConfig(Google_Service_Container_NodeConfig $nodeConfig)
  {
    $this->nodeConfig = $nodeConfig;
  }
  /**
   * @return Google_Service_Container_NodeConfig
   */
  public function getNodeConfig()
  {
    return $this->nodeConfig;
  }

  public function getNodeIpv4CidrSize()
  {
    return $this->nodeIpv4CidrSize;
  }

  public function setNodeIpv4CidrSize($nodeIpv4CidrSize)
  {
    $this->nodeIpv4CidrSize = $nodeIpv4CidrSize;
  }

  /**
   * @param Google_Service_Container_NodePool
   */
  public function setNodePools($nodePools)
  {
    $this->nodePools = $nodePools;
  }
  /**
   * @return Google_Service_Container_NodePool
   */
  public function getNodePools()
  {
    return $this->nodePools;
  }
  /**
   * @param Google_Service_Container_PrivateClusterConfig
   */
  public function setPrivateClusterConfig(Google_Service_Container_PrivateClusterConfig $privateClusterConfig)
  {
    $this->privateClusterConfig = $privateClusterConfig;
  }
  /**
   * @return Google_Service_Container_PrivateClusterConfig
   */
  public function getPrivateClusterConfig()
  {
    return $this->privateClusterConfig;
  }

  public function getResourceLabels()
  {
    return $this->resourceLabels;
  }

  public function setResourceLabels($resourceLabels)
  {
    $this->resourceLabels = $resourceLabels;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getServicesIpv4Cidr()
  {
    return $this->servicesIpv4Cidr;
  }

  public function setServicesIpv4Cidr($servicesIpv4Cidr)
  {
    $this->servicesIpv4Cidr = $servicesIpv4Cidr;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatusMessage()
  {
    return $this->statusMessage;
  }

  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }

  public function getSubnetwork()
  {
    return $this->subnetwork;
  }

  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }

  public function getZone()
  {
    return $this->zone;
  }

  public function setZone($zone)
  {
    $this->zone = $zone;
  }
}
