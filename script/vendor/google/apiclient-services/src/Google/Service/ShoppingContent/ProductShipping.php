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

class Google_Service_ShoppingContent_ProductShipping extends Google_Model
{
  public $country;
  public $locationGroupName;
  public $locationId;
  public $postalCode;
  public $region;
  public $service;
  protected $priceType = 'Google_Service_ShoppingContent_Price';
  protected $priceDataType = '';

  public function getCountry()
  {
    return $this->country;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getLocationGroupName()
  {
    return $this->locationGroupName;
  }

  public function setLocationGroupName($locationGroupName)
  {
    $this->locationGroupName = $locationGroupName;
  }

  public function getLocationId()
  {
    return $this->locationId;
  }

  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }

  public function getPostalCode()
  {
    return $this->postalCode;
  }

  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }

  /**
   * @param Google_Service_ShoppingContent_Price
   */
  public function setPrice(Google_Service_ShoppingContent_Price $price)
  {
    $this->price = $price;
  }
  /**
   * @return Google_Service_ShoppingContent_Price
   */
  public function getPrice()
  {
    return $this->price;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getService()
  {
    return $this->service;
  }

  public function setService($service)
  {
    $this->service = $service;
  }
}
