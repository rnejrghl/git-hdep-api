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

class Google_Service_QPXExpress_PricingInfo extends Google_Collection
{
  public $baseFareTotal;
  public $fareCalculation;
  public $kind;
  public $latestTicketingTime;
  public $ptc;
  public $refundable;
  public $saleFareTotal;
  public $saleTaxTotal;
  public $saleTotal;
  protected $collection_key = 'tax';
  protected $fareType = 'Google_Service_QPXExpress_FareInfo';
  protected $fareDataType = 'array';
  protected $passengersType = 'Google_Service_QPXExpress_PassengerCounts';
  protected $passengersDataType = '';
  protected $segmentPricingType = 'Google_Service_QPXExpress_SegmentPricing';
  protected $segmentPricingDataType = 'array';
  protected $taxType = 'Google_Service_QPXExpress_TaxInfo';
  protected $taxDataType = 'array';

  public function getBaseFareTotal()
  {
    return $this->baseFareTotal;
  }

  public function setBaseFareTotal($baseFareTotal)
  {
    $this->baseFareTotal = $baseFareTotal;
  }

  /**
   * @param Google_Service_QPXExpress_FareInfo
   */
  public function setFare($fare)
  {
    $this->fare = $fare;
  }
  /**
   * @return Google_Service_QPXExpress_FareInfo
   */
  public function getFare()
  {
    return $this->fare;
  }

  public function getFareCalculation()
  {
    return $this->fareCalculation;
  }

  public function setFareCalculation($fareCalculation)
  {
    $this->fareCalculation = $fareCalculation;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLatestTicketingTime()
  {
    return $this->latestTicketingTime;
  }

  public function setLatestTicketingTime($latestTicketingTime)
  {
    $this->latestTicketingTime = $latestTicketingTime;
  }

  /**
   * @param Google_Service_QPXExpress_PassengerCounts
   */
  public function setPassengers(Google_Service_QPXExpress_PassengerCounts $passengers)
  {
    $this->passengers = $passengers;
  }
  /**
   * @return Google_Service_QPXExpress_PassengerCounts
   */
  public function getPassengers()
  {
    return $this->passengers;
  }

  public function getPtc()
  {
    return $this->ptc;
  }

  public function setPtc($ptc)
  {
    $this->ptc = $ptc;
  }

  public function getRefundable()
  {
    return $this->refundable;
  }

  public function setRefundable($refundable)
  {
    $this->refundable = $refundable;
  }

  public function getSaleFareTotal()
  {
    return $this->saleFareTotal;
  }

  public function setSaleFareTotal($saleFareTotal)
  {
    $this->saleFareTotal = $saleFareTotal;
  }

  public function getSaleTaxTotal()
  {
    return $this->saleTaxTotal;
  }

  public function setSaleTaxTotal($saleTaxTotal)
  {
    $this->saleTaxTotal = $saleTaxTotal;
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
   * @param Google_Service_QPXExpress_SegmentPricing
   */
  public function setSegmentPricing($segmentPricing)
  {
    $this->segmentPricing = $segmentPricing;
  }
  /**
   * @return Google_Service_QPXExpress_SegmentPricing
   */
  public function getSegmentPricing()
  {
    return $this->segmentPricing;
  }
  /**
   * @param Google_Service_QPXExpress_TaxInfo
   */
  public function setTax($tax)
  {
    $this->tax = $tax;
  }
  /**
   * @return Google_Service_QPXExpress_TaxInfo
   */
  public function getTax()
  {
    return $this->tax;
  }
}
