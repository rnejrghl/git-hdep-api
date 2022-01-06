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

class Google_Service_AdExchangeBuyerII_Product extends Google_Collection
{
  public $availableEndTime;
  public $availableStartTime;
  public $createTime;
  public $displayName;
  public $hasCreatorSignedOff;
  public $productId;
  public $productRevision;
  public $publisherProfileId;
  public $syndicationProduct;
  public $updateTime;
  public $webPropertyCode;
  protected $collection_key = 'targetingCriterion';
  protected $creatorContactsType = 'Google_Service_AdExchangeBuyerII_ContactInformation';
  protected $creatorContactsDataType = 'array';
  protected $sellerType = 'Google_Service_AdExchangeBuyerII_Seller';
  protected $sellerDataType = '';
  protected $targetingCriterionType = 'Google_Service_AdExchangeBuyerII_TargetingCriteria';
  protected $targetingCriterionDataType = 'array';
  protected $termsType = 'Google_Service_AdExchangeBuyerII_DealTerms';
  protected $termsDataType = '';

  public function getAvailableEndTime()
  {
    return $this->availableEndTime;
  }

  public function setAvailableEndTime($availableEndTime)
  {
    $this->availableEndTime = $availableEndTime;
  }

  public function getAvailableStartTime()
  {
    return $this->availableStartTime;
  }

  public function setAvailableStartTime($availableStartTime)
  {
    $this->availableStartTime = $availableStartTime;
  }

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  /**
   * @param Google_Service_AdExchangeBuyerII_ContactInformation
   */
  public function setCreatorContacts($creatorContacts)
  {
    $this->creatorContacts = $creatorContacts;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_ContactInformation
   */
  public function getCreatorContacts()
  {
    return $this->creatorContacts;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getHasCreatorSignedOff()
  {
    return $this->hasCreatorSignedOff;
  }

  public function setHasCreatorSignedOff($hasCreatorSignedOff)
  {
    $this->hasCreatorSignedOff = $hasCreatorSignedOff;
  }

  public function getProductId()
  {
    return $this->productId;
  }

  public function setProductId($productId)
  {
    $this->productId = $productId;
  }

  public function getProductRevision()
  {
    return $this->productRevision;
  }

  public function setProductRevision($productRevision)
  {
    $this->productRevision = $productRevision;
  }

  public function getPublisherProfileId()
  {
    return $this->publisherProfileId;
  }

  public function setPublisherProfileId($publisherProfileId)
  {
    $this->publisherProfileId = $publisherProfileId;
  }

  /**
   * @param Google_Service_AdExchangeBuyerII_Seller
   */
  public function setSeller(Google_Service_AdExchangeBuyerII_Seller $seller)
  {
    $this->seller = $seller;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_Seller
   */
  public function getSeller()
  {
    return $this->seller;
  }

  public function getSyndicationProduct()
  {
    return $this->syndicationProduct;
  }

  public function setSyndicationProduct($syndicationProduct)
  {
    $this->syndicationProduct = $syndicationProduct;
  }

  /**
   * @param Google_Service_AdExchangeBuyerII_TargetingCriteria
   */
  public function setTargetingCriterion($targetingCriterion)
  {
    $this->targetingCriterion = $targetingCriterion;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_TargetingCriteria
   */
  public function getTargetingCriterion()
  {
    return $this->targetingCriterion;
  }
  /**
   * @param Google_Service_AdExchangeBuyerII_DealTerms
   */
  public function setTerms(Google_Service_AdExchangeBuyerII_DealTerms $terms)
  {
    $this->terms = $terms;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_DealTerms
   */
  public function getTerms()
  {
    return $this->terms;
  }

  public function getUpdateTime()
  {
    return $this->updateTime;
  }

  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }

  public function getWebPropertyCode()
  {
    return $this->webPropertyCode;
  }

  public function setWebPropertyCode($webPropertyCode)
  {
    $this->webPropertyCode = $webPropertyCode;
  }
}
