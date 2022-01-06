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

class Google_Service_PlusDomains_Place extends Google_Model
{
  public $displayName;
  public $id;
  public $kind;
  protected $addressType = 'Google_Service_PlusDomains_PlaceAddress';
  protected $addressDataType = '';
  protected $positionType = 'Google_Service_PlusDomains_PlacePosition';
  protected $positionDataType = '';

  /**
   * @param Google_Service_PlusDomains_PlaceAddress
   */
  public function setAddress(Google_Service_PlusDomains_PlaceAddress $address)
  {
    $this->address = $address;
  }
  /**
   * @return Google_Service_PlusDomains_PlaceAddress
   */
  public function getAddress()
  {
    return $this->address;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
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
   * @param Google_Service_PlusDomains_PlacePosition
   */
  public function setPosition(Google_Service_PlusDomains_PlacePosition $position)
  {
    $this->position = $position;
  }
  /**
   * @return Google_Service_PlusDomains_PlacePosition
   */
  public function getPosition()
  {
    return $this->position;
  }
}
