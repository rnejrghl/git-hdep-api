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

class Google_Service_ShoppingContent_OrderLegacyPromotion extends Google_Collection
{
  public $effectiveDates;
  public $genericRedemptionCode;
  public $id;
  public $longTitle;
  public $productApplicability;
  public $redemptionChannel;
  protected $collection_key = 'benefits';
  protected $benefitsType = 'Google_Service_ShoppingContent_OrderLegacyPromotionBenefit';
  protected $benefitsDataType = 'array';

  /**
   * @param Google_Service_ShoppingContent_OrderLegacyPromotionBenefit
   */
  public function setBenefits($benefits)
  {
    $this->benefits = $benefits;
  }
  /**
   * @return Google_Service_ShoppingContent_OrderLegacyPromotionBenefit
   */
  public function getBenefits()
  {
    return $this->benefits;
  }

  public function getEffectiveDates()
  {
    return $this->effectiveDates;
  }

  public function setEffectiveDates($effectiveDates)
  {
    $this->effectiveDates = $effectiveDates;
  }

  public function getGenericRedemptionCode()
  {
    return $this->genericRedemptionCode;
  }

  public function setGenericRedemptionCode($genericRedemptionCode)
  {
    $this->genericRedemptionCode = $genericRedemptionCode;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getLongTitle()
  {
    return $this->longTitle;
  }

  public function setLongTitle($longTitle)
  {
    $this->longTitle = $longTitle;
  }

  public function getProductApplicability()
  {
    return $this->productApplicability;
  }

  public function setProductApplicability($productApplicability)
  {
    $this->productApplicability = $productApplicability;
  }

  public function getRedemptionChannel()
  {
    return $this->redemptionChannel;
  }

  public function setRedemptionChannel($redemptionChannel)
  {
    $this->redemptionChannel = $redemptionChannel;
  }
}