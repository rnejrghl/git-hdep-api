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

class Google_Service_Cloudbilling_PricingExpression extends Google_Collection
{
  public $baseUnit;
  public $baseUnitConversionFactor;
  public $baseUnitDescription;
  public $displayQuantity;
  public $usageUnit;
  public $usageUnitDescription;
  protected $collection_key = 'tieredRates';
  protected $tieredRatesType = 'Google_Service_Cloudbilling_TierRate';
  protected $tieredRatesDataType = 'array';

  public function getBaseUnit()
  {
    return $this->baseUnit;
  }

  public function setBaseUnit($baseUnit)
  {
    $this->baseUnit = $baseUnit;
  }

  public function getBaseUnitConversionFactor()
  {
    return $this->baseUnitConversionFactor;
  }

  public function setBaseUnitConversionFactor($baseUnitConversionFactor)
  {
    $this->baseUnitConversionFactor = $baseUnitConversionFactor;
  }

  public function getBaseUnitDescription()
  {
    return $this->baseUnitDescription;
  }

  public function setBaseUnitDescription($baseUnitDescription)
  {
    $this->baseUnitDescription = $baseUnitDescription;
  }

  public function getDisplayQuantity()
  {
    return $this->displayQuantity;
  }

  public function setDisplayQuantity($displayQuantity)
  {
    $this->displayQuantity = $displayQuantity;
  }

  /**
   * @param Google_Service_Cloudbilling_TierRate
   */
  public function setTieredRates($tieredRates)
  {
    $this->tieredRates = $tieredRates;
  }
  /**
   * @return Google_Service_Cloudbilling_TierRate
   */
  public function getTieredRates()
  {
    return $this->tieredRates;
  }

  public function getUsageUnit()
  {
    return $this->usageUnit;
  }

  public function setUsageUnit($usageUnit)
  {
    $this->usageUnit = $usageUnit;
  }

  public function getUsageUnitDescription()
  {
    return $this->usageUnitDescription;
  }

  public function setUsageUnitDescription($usageUnitDescription)
  {
    $this->usageUnitDescription = $usageUnitDescription;
  }
}
