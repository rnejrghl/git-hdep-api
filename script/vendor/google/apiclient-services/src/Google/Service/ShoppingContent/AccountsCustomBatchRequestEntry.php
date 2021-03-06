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

class Google_Service_ShoppingContent_AccountsCustomBatchRequestEntry extends Google_Model
{
  public $accountId;
  public $batchId;
  public $force;
  public $merchantId;
  public $method;
  public $overwrite;
  protected $accountType = 'Google_Service_ShoppingContent_Account';
  protected $accountDataType = '';
  protected $linkRequestType = 'Google_Service_ShoppingContent_AccountsCustomBatchRequestEntryLinkRequest';
  protected $linkRequestDataType = '';

  /**
   * @param Google_Service_ShoppingContent_Account
   */
  public function setAccount(Google_Service_ShoppingContent_Account $account)
  {
    $this->account = $account;
  }
  /**
   * @return Google_Service_ShoppingContent_Account
   */
  public function getAccount()
  {
    return $this->account;
  }

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  public function getForce()
  {
    return $this->force;
  }

  public function setForce($force)
  {
    $this->force = $force;
  }

  /**
   * @param Google_Service_ShoppingContent_AccountsCustomBatchRequestEntryLinkRequest
   */
  public function setLinkRequest(Google_Service_ShoppingContent_AccountsCustomBatchRequestEntryLinkRequest $linkRequest)
  {
    $this->linkRequest = $linkRequest;
  }
  /**
   * @return Google_Service_ShoppingContent_AccountsCustomBatchRequestEntryLinkRequest
   */
  public function getLinkRequest()
  {
    return $this->linkRequest;
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

  public function getOverwrite()
  {
    return $this->overwrite;
  }

  public function setOverwrite($overwrite)
  {
    $this->overwrite = $overwrite;
  }
}
