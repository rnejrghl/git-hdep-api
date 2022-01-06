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

class Google_Service_QPXExpress_TripOption extends Google_Collection
{
  public $id;
  public $kind;
  public $saleTotal;
  protected $collection_key = 'slice';
  protected $pricingType = 'Google_Service_QPXExpress_PricingInfo';
  protected $pricingDataType = 'array';
  protected $sliceType = 'Google_Service_QPXExpress_SliceInfo';
  protected $sliceDataType = 'array';

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
   * @param Google_Service_QPXExpress_PricingInfo
   */
  public function setPricing($pricing)
  {
    $this->pricing = $pricing;
  }
  /**
   * @return Google_Service_QPXExpress_PricingInfo
   */
  public function getPricing()
  {
    return $this->pricing;
  }

  public function getSaleTotal()
  {
    return $this->saleTotal;
  }

  public function setSaleTotal($saleTotal)
  {
    $this->saleTotal = $saleTotal;
  }

  /**
   * @param Google_Service_QPXExpress_SliceInfo
   */
  public function setSlice($slice)
  {
    $this->slice = $slice;
  }
  /**
   * @return Google_Service_QPXExpress_SliceInfo
   */
  public function getSlice()
  {
    return $this->slice;
  }
}
