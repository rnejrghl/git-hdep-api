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

class Google_Service_AdExchangeBuyer_MarketplaceDeal extends Google_Collection
{
  public $creationTimeMs;
  public $creativePreApprovalPolicy;
  public $creativeSafeFrameCompatibility;
  public $dealId;
  public $externalDealId;
  public $flightEndTimeMs;
  public $flightStartTimeMs;
  public $inventoryDescription;
  public $isRfpTemplate;
  public $isSetupComplete;
  public $kind;
  public $lastUpdateTimeMs;
  public $name;
  public $productId;
  public $productRevisionNumber;
  public $programmaticCreativeSource;
  public $proposalId;
  public $syndicationProduct;
  public $webPropertyCode;
  protected $collection_key = 'sharedTargetings';
  protected $buyerPrivateDataType = 'Google_Service_AdExchangeBuyer_PrivateData';
  protected $buyerPrivateDataDataType = '';
  protected $dealServingMetadataType = 'Google_Service_AdExchangeBuyer_DealServingMetadata';
  protected $dealServingMetadataDataType = '';
  protected $deliveryControlType = 'Google_Service_AdExchangeBuyer_DeliveryControl';
  protected $deliveryControlDataType = '';
  protected $sellerContactsType = 'Google_Service_AdExchangeBuyer_ContactInformation';
  protected $sellerContactsDataType = 'array';
  protected $sharedTargetingsType = 'Google_Service_AdExchangeBuyer_SharedTargeting';
  protected $sharedTargetingsDataType = 'array';
  protected $termsType = 'Google_Service_AdExchangeBuyer_DealTerms';
  protected $termsDataType = '';

  /**
   * @param Google_Service_AdExchangeBuyer_PrivateData
   */
  public function setBuyerPrivateData(Google_Service_AdExchangeBuyer_PrivateData $buyerPrivateData)
  {
    $this->buyerPrivateData = $buyerPrivateData;
  }
  /**
   * @return Google_Service_AdExchangeBuyer_PrivateData
   */
  public function getBuyerPrivateData()
  {
    return $this->buyerPrivateData;
  }

  public function getCreationTimeMs()
  {
    return $this->creationTimeMs;
  }

  public function setCreationTimeMs($creationTimeMs)
  {
    $this->creationTimeMs = $creationTimeMs;
  }

  public function getCreativePreApprovalPolicy()
  {
    return $this->creativePreApprovalPolicy;
  }

  public function setCreativePreApprovalPolicy($creativePreApprovalPolicy)
  {
    $this->creativePreApprovalPolicy = $creativePreApprovalPolicy;
  }

  public function getCreativeSafeFrameCompatibility()
  {
    return $this->creativeSafeFrameCompatibility;
  }

  public function setCreativeSafeFrameCompatibility($creativeSafeFrameCompatibility)
  {
    $this->creativeSafeFrameCompatibility = $creativeSafeFrameCompatibility;
  }

  public function getDealId()
  {
    return $this->dealId;
  }

  public function setDealId($dealId)
  {
    $this->dealId = $dealId;
  }

  /**
   * @param Google_Service_AdExchangeBuyer_DealServingMetadata
   */
  public function setDealServingMetadata(Google_Service_AdExchangeBuyer_DealServingMetadata $dealServingMetadata)
  {
    $this->dealServingMetadata = $dealServingMetadata;
  }
  /**
   * @return Google_Service_AdExchangeBuyer_DealServingMetadata
   */
  public function getDealServingMetadata()
  {
    return $this->dealServingMetadata;
  }
  /**
   * @param Google_Service_AdExchangeBuyer_DeliveryControl
   */
  public function setDeliveryControl(Google_Service_AdExchangeBuyer_DeliveryControl $deliveryControl)
  {
    $this->deliveryControl = $deliveryControl;
  }
  /**
   * @return Google_Service_AdExchangeBuyer_DeliveryControl
   */
  public function getDeliveryControl()
  {
    return $this->deliveryControl;
  }

  public function getExternalDealId()
  {
    return $this->externalDealId;
  }

  public function setExternalDealId($externalDealId)
  {
    $this->externalDealId = $externalDealId;
  }

  public function getFlightEndTimeMs()
  {
    return $this->flightEndTimeMs;
  }

  public function setFlightEndTimeMs($flightEndTimeMs)
  {
    $this->flightEndTimeMs = $flightEndTimeMs;
  }

  public function getFlightStartTimeMs()
  {
    return $this->flightStartTimeMs;
  }

  public function setFlightStartTimeMs($flightStartTimeMs)
  {
    $this->flightStartTimeMs = $flightStartTimeMs;
  }

  public function getInventoryDescription()
  {
    return $this->inventoryDescription;
  }

  public function setInventoryDescription($inventoryDescription)
  {
    $this->inventoryDescription = $inventoryDescription;
  }

  public function getIsRfpTemplate()
  {
    return $this->isRfpTemplate;
  }

  public function setIsRfpTemplate($isRfpTemplate)
  {
    $this->isRfpTemplate = $isRfpTemplate;
  }

  public function getIsSetupComplete()
  {
    return $this->isSetupComplete;
  }

  public function setIsSetupComplete($isSetupComplete)
  {
    $this->isSetupComplete = $isSetupComplete;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLastUpdateTimeMs()
  {
    return $this->lastUpdateTimeMs;
  }

  public function setLastUpdateTimeMs($lastUpdateTimeMs)
  {
    $this->lastUpdateTimeMs = $lastUpdateTimeMs;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getProductId()
  {
    return $this->productId;
  }

  public function setProductId($productId)
  {
    $this->productId = $productId;
  }

  public function getProductRevisionNumber()
  {
    return $this->productRevisionNumber;
  }

  public function setProductRevisionNumber($productRevisionNumber)
  {
    $this->productRevisionNumber = $productRevisionNumber;
  }

  public function getProgrammaticCreativeSource()
  {
    return $this->programmaticCreativeSource;
  }

  public function setProgrammaticCreativeSource($programmaticCreativeSource)
  {
    $this->programmaticCreativeSource = $programmaticCreativeSource;
  }

  public function getProposalId()
  {
    return $this->proposalId;
  }

  public function setProposalId($proposalId)
  {
    $this->proposalId = $proposalId;
  }

  /**
   * @param Google_Service_AdExchangeBuyer_ContactInformation
   */
  public function setSellerContacts($sellerContacts)
  {
    $this->sellerContacts = $sellerContacts;
  }
  /**
   * @return Google_Service_AdExchangeBuyer_ContactInformation
   */
  public function getSellerContacts()
  {
    return $this->sellerContacts;
  }
  /**
   * @param Google_Service_AdExchangeBuyer_SharedTargeting
   */
  public function setSharedTargetings($sharedTargetings)
  {
    $this->sharedTargetings = $sharedTargetings;
  }
  /**
   * @return Google_Service_AdExchangeBuyer_SharedTargeting
   */
  public function getSharedTargetings()
  {
    return $this->sharedTargetings;
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
   * @param Google_Service_AdExchangeBuyer_DealTerms
   */
  public function setTerms(Google_Service_AdExchangeBuyer_DealTerms $terms)
  {
    $this->terms = $terms;
  }
  /**
   * @return Google_Service_AdExchangeBuyer_DealTerms
   */
  public function getTerms()
  {
    return $this->terms;
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
