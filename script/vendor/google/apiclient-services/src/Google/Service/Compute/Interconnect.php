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

class Google_Service_Compute_Interconnect extends Google_Collection
{
  public $adminEnabled;
  public $creationTimestamp;
  public $customerName;
  public $description;
  public $googleIpAddress;
  public $googleReferenceId;
  public $id;
  public $interconnectAttachments;
  public $interconnectType;
  public $kind;
  public $linkType;
  public $location;
  public $name;
  public $nocContactEmail;
  public $operationalStatus;
  public $peerIpAddress;
  public $provisionedLinkCount;
  public $requestedLinkCount;
  public $selfLink;
  public $state;
  protected $collection_key = 'interconnectAttachments';
  protected $circuitInfosType = 'Google_Service_Compute_InterconnectCircuitInfo';
  protected $circuitInfosDataType = 'array';
  protected $expectedOutagesType = 'Google_Service_Compute_InterconnectOutageNotification';
  protected $expectedOutagesDataType = 'array';

  public function getAdminEnabled()
  {
    return $this->adminEnabled;
  }

  public function setAdminEnabled($adminEnabled)
  {
    $this->adminEnabled = $adminEnabled;
  }

  /**
   * @param Google_Service_Compute_InterconnectCircuitInfo
   */
  public function setCircuitInfos($circuitInfos)
  {
    $this->circuitInfos = $circuitInfos;
  }
  /**
   * @return Google_Service_Compute_InterconnectCircuitInfo
   */
  public function getCircuitInfos()
  {
    return $this->circuitInfos;
  }

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getCustomerName()
  {
    return $this->customerName;
  }

  public function setCustomerName($customerName)
  {
    $this->customerName = $customerName;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  /**
   * @param Google_Service_Compute_InterconnectOutageNotification
   */
  public function setExpectedOutages($expectedOutages)
  {
    $this->expectedOutages = $expectedOutages;
  }
  /**
   * @return Google_Service_Compute_InterconnectOutageNotification
   */
  public function getExpectedOutages()
  {
    return $this->expectedOutages;
  }

  public function getGoogleIpAddress()
  {
    return $this->googleIpAddress;
  }

  public function setGoogleIpAddress($googleIpAddress)
  {
    $this->googleIpAddress = $googleIpAddress;
  }

  public function getGoogleReferenceId()
  {
    return $this->googleReferenceId;
  }

  public function setGoogleReferenceId($googleReferenceId)
  {
    $this->googleReferenceId = $googleReferenceId;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getInterconnectAttachments()
  {
    return $this->interconnectAttachments;
  }

  public function setInterconnectAttachments($interconnectAttachments)
  {
    $this->interconnectAttachments = $interconnectAttachments;
  }

  public function getInterconnectType()
  {
    return $this->interconnectType;
  }

  public function setInterconnectType($interconnectType)
  {
    $this->interconnectType = $interconnectType;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLinkType()
  {
    return $this->linkType;
  }

  public function setLinkType($linkType)
  {
    $this->linkType = $linkType;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getNocContactEmail()
  {
    return $this->nocContactEmail;
  }

  public function setNocContactEmail($nocContactEmail)
  {
    $this->nocContactEmail = $nocContactEmail;
  }

  public function getOperationalStatus()
  {
    return $this->operationalStatus;
  }

  public function setOperationalStatus($operationalStatus)
  {
    $this->operationalStatus = $operationalStatus;
  }

  public function getPeerIpAddress()
  {
    return $this->peerIpAddress;
  }

  public function setPeerIpAddress($peerIpAddress)
  {
    $this->peerIpAddress = $peerIpAddress;
  }

  public function getProvisionedLinkCount()
  {
    return $this->provisionedLinkCount;
  }

  public function setProvisionedLinkCount($provisionedLinkCount)
  {
    $this->provisionedLinkCount = $provisionedLinkCount;
  }

  public function getRequestedLinkCount()
  {
    return $this->requestedLinkCount;
  }

  public function setRequestedLinkCount($requestedLinkCount)
  {
    $this->requestedLinkCount = $requestedLinkCount;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }
}
