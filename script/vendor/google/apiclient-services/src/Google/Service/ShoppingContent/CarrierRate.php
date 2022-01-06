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

class Google_Service_ShoppingContent_CarrierRate extends Google_Model
{
  public $carrierName;
  public $carrierService;
  public $name;
  public $originPostalCode;
  public $percentageAdjustment;
  protected $flatAdjustmentType = 'Google_Service_ShoppingContent_Price';
  protected $flatAdjustmentDataType = '';

  public function getCarrierName()
  {
    return $this->carrierName;
  }

  public function setCarrierName($carrierName)
  {
    $this->carrierName = $carrierName;
  }

  public function getCarrierService()
  {
    return $this->carrierService;
  }

  public function setCarrierService($carrierService)
  {
    $this->carrierService = $carrierService;
  }

  /**
   * @param Google_Service_ShoppingContent_Price
   */
  public function setFlatAdjustment(Google_Service_ShoppingContent_Price $flatAdjustment)
  {
    $this->flatAdjustment = $flatAdjustment;
  }
  /**
   * @return Google_Service_ShoppingContent_Price
   */
  public function getFlatAdjustment()
  {
    return $this->flatAdjustment;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getOriginPostalCode()
  {
    return $this->originPostalCode;
  }

  public function setOriginPostalCode($originPostalCode)
  {
    $this->originPostalCode = $originPostalCode;
  }

  public function getPercentageAdjustment()
  {
    return $this->percentageAdjustment;
  }

  public function setPercentageAdjustment($percentageAdjustment)
  {
    $this->percentageAdjustment = $percentageAdjustment;
  }
}
