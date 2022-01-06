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

class Google_Service_Proximitybeacon_Beacon extends Google_Model
{
  public $beaconName;
  public $description;
  public $expectedStability;
  public $placeId;
  public $properties;
  public $provisioningKey;
  public $status;
  protected $advertisedIdType = 'Google_Service_Proximitybeacon_AdvertisedId';
  protected $advertisedIdDataType = '';
  protected $ephemeralIdRegistrationType = 'Google_Service_Proximitybeacon_EphemeralIdRegistration';
  protected $ephemeralIdRegistrationDataType = '';
  protected $indoorLevelType = 'Google_Service_Proximitybeacon_IndoorLevel';
  protected $indoorLevelDataType = '';
  protected $latLngType = 'Google_Service_Proximitybeacon_LatLng';
  protected $latLngDataType = '';

  /**
   * @param Google_Service_Proximitybeacon_AdvertisedId
   */
  public function setAdvertisedId(Google_Service_Proximitybeacon_AdvertisedId $advertisedId)
  {
    $this->advertisedId = $advertisedId;
  }
  /**
   * @return Google_Service_Proximitybeacon_AdvertisedId
   */
  public function getAdvertisedId()
  {
    return $this->advertisedId;
  }

  public function getBeaconName()
  {
    return $this->beaconName;
  }

  public function setBeaconName($beaconName)
  {
    $this->beaconName = $beaconName;
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
   * @param Google_Service_Proximitybeacon_EphemeralIdRegistration
   */
  public function setEphemeralIdRegistration(Google_Service_Proximitybeacon_EphemeralIdRegistration $ephemeralIdRegistration)
  {
    $this->ephemeralIdRegistration = $ephemeralIdRegistration;
  }
  /**
   * @return Google_Service_Proximitybeacon_EphemeralIdRegistration
   */
  public function getEphemeralIdRegistration()
  {
    return $this->ephemeralIdRegistration;
  }

  public function getExpectedStability()
  {
    return $this->expectedStability;
  }

  public function setExpectedStability($expectedStability)
  {
    $this->expectedStability = $expectedStability;
  }

  /**
   * @param Google_Service_Proximitybeacon_IndoorLevel
   */
  public function setIndoorLevel(Google_Service_Proximitybeacon_IndoorLevel $indoorLevel)
  {
    $this->indoorLevel = $indoorLevel;
  }
  /**
   * @return Google_Service_Proximitybeacon_IndoorLevel
   */
  public function getIndoorLevel()
  {
    return $this->indoorLevel;
  }
  /**
   * @param Google_Service_Proximitybeacon_LatLng
   */
  public function setLatLng(Google_Service_Proximitybeacon_LatLng $latLng)
  {
    $this->latLng = $latLng;
  }
  /**
   * @return Google_Service_Proximitybeacon_LatLng
   */
  public function getLatLng()
  {
    return $this->latLng;
  }

  public function getPlaceId()
  {
    return $this->placeId;
  }

  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }

  public function getProperties()
  {
    return $this->properties;
  }

  public function setProperties($properties)
  {
    $this->properties = $properties;
  }

  public function getProvisioningKey()
  {
    return $this->provisioningKey;
  }

  public function setProvisioningKey($provisioningKey)
  {
    $this->provisioningKey = $provisioningKey;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }
}
