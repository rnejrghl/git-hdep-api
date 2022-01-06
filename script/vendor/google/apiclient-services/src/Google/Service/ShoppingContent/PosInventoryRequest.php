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

class Google_Service_ShoppingContent_PosInventoryRequest extends Google_Model
{
  public $contentLanguage;
  public $gtin;
  public $itemId;
  public $quantity;
  public $storeCode;
  public $targetCountry;
  public $timestamp;
  protected $priceType = 'Google_Service_ShoppingContent_Price';
  protected $priceDataType = '';

  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }

  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }

  public function getGtin()
  {
    return $this->gtin;
  }

  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }

  public function getItemId()
  {
    return $this->itemId;
  }

  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
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

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }

  public function getStoreCode()
  {
    return $this->storeCode;
  }

  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }

  public function getTargetCountry()
  {
    return $this->targetCountry;
  }

  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }

  public function getTimestamp()
  {
    return $this->timestamp;
  }

  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
}