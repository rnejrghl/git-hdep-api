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

class Google_Service_Compute_Subnetwork extends Google_Collection
{
  public $creationTimestamp;
  public $description;
  public $enableFlowLogs;
  public $fingerprint;
  public $gatewayAddress;
  public $id;
  public $ipCidrRange;
  public $kind;
  public $name;
  public $network;
  public $privateIpGoogleAccess;
  public $region;
  public $selfLink;
  protected $collection_key = 'secondaryIpRanges';
  protected $secondaryIpRangesType = 'Google_Service_Compute_SubnetworkSecondaryRange';
  protected $secondaryIpRangesDataType = 'array';

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getEnableFlowLogs()
  {
    return $this->enableFlowLogs;
  }

  public function setEnableFlowLogs($enableFlowLogs)
  {
    $this->enableFlowLogs = $enableFlowLogs;
  }

  public function getFingerprint()
  {
    return $this->fingerprint;
  }

  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }

  public function getGatewayAddress()
  {
    return $this->gatewayAddress;
  }

  public function setGatewayAddress($gatewayAddress)
  {
    $this->gatewayAddress = $gatewayAddress;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getIpCidrRange()
  {
    return $this->ipCidrRange;
  }

  public function setIpCidrRange($ipCidrRange)
  {
    $this->ipCidrRange = $ipCidrRange;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
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

  public function getPrivateIpGoogleAccess()
  {
    return $this->privateIpGoogleAccess;
  }

  public function setPrivateIpGoogleAccess($privateIpGoogleAccess)
  {
    $this->privateIpGoogleAccess = $privateIpGoogleAccess;
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
   * @param Google_Service_Compute_SubnetworkSecondaryRange
   */
  public function setSecondaryIpRanges($secondaryIpRanges)
  {
    $this->secondaryIpRanges = $secondaryIpRanges;
  }
  /**
   * @return Google_Service_Compute_SubnetworkSecondaryRange
   */
  public function getSecondaryIpRanges()
  {
    return $this->secondaryIpRanges;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
}
