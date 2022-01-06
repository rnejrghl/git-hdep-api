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

class Google_Service_Partners_CountryOfferInfo extends Google_Model
{
  public $getYAmount;
  public $offerCountryCode;
  public $offerType;
  public $spendXAmount;

  public function getGetYAmount()
  {
    return $this->getYAmount;
  }

  public function setGetYAmount($getYAmount)
  {
    $this->getYAmount = $getYAmount;
  }

  public function getOfferCountryCode()
  {
    return $this->offerCountryCode;
  }

  public function setOfferCountryCode($offerCountryCode)
  {
    $this->offerCountryCode = $offerCountryCode;
  }

  public function getOfferType()
  {
    return $this->offerType;
  }

  public function setOfferType($offerType)
  {
    $this->offerType = $offerType;
  }

  public function getSpendXAmount()
  {
    return $this->spendXAmount;
  }

  public function setSpendXAmount($spendXAmount)
  {
    $this->spendXAmount = $spendXAmount;
  }
}
