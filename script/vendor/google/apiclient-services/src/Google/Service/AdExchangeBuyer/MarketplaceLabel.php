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

class Google_Service_AdExchangeBuyer_MarketplaceLabel extends Google_Model
{
  public $accountId;
  public $createTimeMs;
  public $label;
  protected $deprecatedMarketplaceDealPartyType = 'Google_Service_AdExchangeBuyer_MarketplaceDealParty';
  protected $deprecatedMarketplaceDealPartyDataType = '';

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getCreateTimeMs()
  {
    return $this->createTimeMs;
  }

  public function setCreateTimeMs($createTimeMs)
  {
    $this->createTimeMs = $createTimeMs;
  }

  /**
   * @param Google_Service_AdExchangeBuyer_MarketplaceDealParty
   */
  public function setDeprecatedMarketplaceDealParty(Google_Service_AdExchangeBuyer_MarketplaceDealParty $deprecatedMarketplaceDealParty)
  {
    $this->deprecatedMarketplaceDealParty = $deprecatedMarketplaceDealParty;
  }
  /**
   * @return Google_Service_AdExchangeBuyer_MarketplaceDealParty
   */
  public function getDeprecatedMarketplaceDealParty()
  {
    return $this->deprecatedMarketplaceDealParty;
  }

  public function getLabel()
  {
    return $this->label;
  }

  public function setLabel($label)
  {
    $this->label = $label;
  }
}
