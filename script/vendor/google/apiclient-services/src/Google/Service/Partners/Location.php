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

class Google_Service_Partners_Location extends Google_Collection
{
  public $address;
  public $addressLine;
  public $administrativeArea;
  public $dependentLocality;
  public $languageCode;
  public $locality;
  public $postalCode;
  public $regionCode;
  public $sortingCode;
  protected $collection_key = 'addressLine';
  protected $latLngType = 'Google_Service_Partners_LatLng';
  protected $latLngDataType = '';

  public function getAddress()
  {
    return $this->address;
  }

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getAddressLine()
  {
    return $this->addressLine;
  }

  public function setAddressLine($addressLine)
  {
    $this->addressLine = $addressLine;
  }

  public function getAdministrativeArea()
  {
    return $this->administrativeArea;
  }

  public function setAdministrativeArea($administrativeArea)
  {
    $this->administrativeArea = $administrativeArea;
  }

  public function getDependentLocality()
  {
    return $this->dependentLocality;
  }

  public function setDependentLocality($dependentLocality)
  {
    $this->dependentLocality = $dependentLocality;
  }

  public function getLanguageCode()
  {
    return $this->languageCode;
  }

  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }

  /**
   * @param Google_Service_Partners_LatLng
   */
  public function setLatLng(Google_Service_Partners_LatLng $latLng)
  {
    $this->latLng = $latLng;
  }
  /**
   * @return Google_Service_Partners_LatLng
   */
  public function getLatLng()
  {
    return $this->latLng;
  }

  public function getLocality()
  {
    return $this->locality;
  }

  public function setLocality($locality)
  {
    $this->locality = $locality;
  }

  public function getPostalCode()
  {
    return $this->postalCode;
  }

  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }

  public function getRegionCode()
  {
    return $this->regionCode;
  }

  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }

  public function getSortingCode()
  {
    return $this->sortingCode;
  }

  public function setSortingCode($sortingCode)
  {
    $this->sortingCode = $sortingCode;
  }
}
