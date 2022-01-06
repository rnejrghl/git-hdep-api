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

class Google_Service_ShoppingContent_OrderLineItemProduct extends Google_Collection
{
  public $brand;
  public $channel;
  public $condition;
  public $contentLanguage;
  public $gtin;
  public $id;
  public $imageLink;
  public $itemGroupId;
  public $mpn;
  public $offerId;
  public $shownImage;
  public $targetCountry;
  public $title;
  protected $collection_key = 'variantAttributes';
  protected $priceType = 'Google_Service_ShoppingContent_Price';
  protected $priceDataType = '';
  protected $variantAttributesType = 'Google_Service_ShoppingContent_OrderLineItemProductVariantAttribute';
  protected $variantAttributesDataType = 'array';

  public function getBrand()
  {
    return $this->brand;
  }

  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  public function getChannel()
  {
    return $this->channel;
  }

  public function setChannel($channel)
  {
    $this->channel = $channel;
  }

  public function getCondition()
  {
    return $this->condition;
  }

  public function setCondition($condition)
  {
    $this->condition = $condition;
  }

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

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getImageLink()
  {
    return $this->imageLink;
  }

  public function setImageLink($imageLink)
  {
    $this->imageLink = $imageLink;
  }

  public function getItemGroupId()
  {
    return $this->itemGroupId;
  }

  public function setItemGroupId($itemGroupId)
  {
    $this->itemGroupId = $itemGroupId;
  }

  public function getMpn()
  {
    return $this->mpn;
  }

  public function setMpn($mpn)
  {
    $this->mpn = $mpn;
  }

  public function getOfferId()
  {
    return $this->offerId;
  }

  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
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

  public function getShownImage()
  {
    return $this->shownImage;
  }

  public function setShownImage($shownImage)
  {
    $this->shownImage = $shownImage;
  }

  public function getTargetCountry()
  {
    return $this->targetCountry;
  }

  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  /**
   * @param Google_Service_ShoppingContent_OrderLineItemProductVariantAttribute
   */
  public function setVariantAttributes($variantAttributes)
  {
    $this->variantAttributes = $variantAttributes;
  }
  /**
   * @return Google_Service_ShoppingContent_OrderLineItemProductVariantAttribute
   */
  public function getVariantAttributes()
  {
    return $this->variantAttributes;
  }
}
