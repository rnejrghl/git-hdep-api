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

class Google_Service_ShoppingContent_AccounttaxCustomBatchRequestEntry extends Google_Model
{
  public $accountId;
  public $batchId;
  public $merchantId;
  public $method;
  protected $accountTaxType = 'Google_Service_ShoppingContent_AccountTax';
  protected $accountTaxDataType = '';

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  /**
   * @param Google_Service_ShoppingContent_AccountTax
   */
  public function setAccountTax(Google_Service_ShoppingContent_AccountTax $accountTax)
  {
    $this->accountTax = $accountTax;
  }
  /**
   * @return Google_Service_ShoppingContent_AccountTax
   */
  public function getAccountTax()
  {
    return $this->accountTax;
  }

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setMethod($method)
  {
    $this->method = $method;
  }
}
