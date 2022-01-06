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

class Google_Service_ShoppingContent_AccountStatus extends Google_Collection
{
  public $accountId;
  public $kind;
  public $websiteClaimed;
  protected $collection_key = 'products';
  protected $accountLevelIssuesType = 'Google_Service_ShoppingContent_AccountStatusAccountLevelIssue';
  protected $accountLevelIssuesDataType = 'array';
  protected $dataQualityIssuesType = 'Google_Service_ShoppingContent_AccountStatusDataQualityIssue';
  protected $dataQualityIssuesDataType = 'array';
  protected $productsType = 'Google_Service_ShoppingContent_AccountStatusProducts';
  protected $productsDataType = 'array';

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  /**
   * @param Google_Service_ShoppingContent_AccountStatusAccountLevelIssue
   */
  public function setAccountLevelIssues($accountLevelIssues)
  {
    $this->accountLevelIssues = $accountLevelIssues;
  }
  /**
   * @return Google_Service_ShoppingContent_AccountStatusAccountLevelIssue
   */
  public function getAccountLevelIssues()
  {
    return $this->accountLevelIssues;
  }
  /**
   * @param Google_Service_ShoppingContent_AccountStatusDataQualityIssue
   */
  public function setDataQualityIssues($dataQualityIssues)
  {
    $this->dataQualityIssues = $dataQualityIssues;
  }
  /**
   * @return Google_Service_ShoppingContent_AccountStatusDataQualityIssue
   */
  public function getDataQualityIssues()
  {
    return $this->dataQualityIssues;
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
   * @param Google_Service_ShoppingContent_AccountStatusProducts
   */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /**
   * @return Google_Service_ShoppingContent_AccountStatusProducts
   */
  public function getProducts()
  {
    return $this->products;
  }

  public function getWebsiteClaimed()
  {
    return $this->websiteClaimed;
  }

  public function setWebsiteClaimed($websiteClaimed)
  {
    $this->websiteClaimed = $websiteClaimed;
  }
}
