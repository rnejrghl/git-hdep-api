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

class Google_Service_Compute_Router extends Google_Collection
{
  public $creationTimestamp;
  public $description;
  public $id;
  public $kind;
  public $name;
  public $network;
  public $region;
  public $selfLink;
  protected $collection_key = 'interfaces';
  protected $bgpType = 'Google_Service_Compute_RouterBgp';
  protected $bgpDataType = '';
  protected $bgpPeersType = 'Google_Service_Compute_RouterBgpPeer';
  protected $bgpPeersDataType = 'array';
  protected $interfacesType = 'Google_Service_Compute_RouterInterface';
  protected $interfacesDataType = 'array';

  /**
   * @param Google_Service_Compute_RouterBgp
   */
  public function setBgp(Google_Service_Compute_RouterBgp $bgp)
  {
    $this->bgp = $bgp;
  }
  /**
   * @return Google_Service_Compute_RouterBgp
   */
  public function getBgp()
  {
    return $this->bgp;
  }
  /**
   * @param Google_Service_Compute_RouterBgpPeer
   */
  public function setBgpPeers($bgpPeers)
  {
    $this->bgpPeers = $bgpPeers;
  }
  /**
   * @return Google_Service_Compute_RouterBgpPeer
   */
  public function getBgpPeers()
  {
    return $this->bgpPeers;
  }

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

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  /**
   * @param Google_Service_Compute_RouterInterface
   */
  public function setInterfaces($interfaces)
  {
    $this->interfaces = $interfaces;
  }
  /**
   * @return Google_Service_Compute_RouterInterface
   */
  public function getInterfaces()
  {
    return $this->interfaces;
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

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
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
