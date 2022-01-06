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

class Google_Service_AdExchangeBuyer_Proposal extends Google_Collection
{
  public $dbmAdvertiserIds;
  public $hasBuyerSignedOff;
  public $hasSellerSignedOff;
  public $inventorySource;
  public $isRenegotiating;
  public $isSetupComplete;
  public $kind;
  public $lastUpdaterOrCommentorRole;
  public $name;
  public $negotiationId;
  public $originatorRole;
  public $privateAuctionId;
  public $proposalId;
  public $proposalState;
  public $revisionNumber;
  public $revisionTimeMs;
  protected $collection_key = 'sellerContacts';
  protected $billedBuyerType = 'Google_Service_AdExchangeBuyer_Buyer';
  protected $billedBuyerDataType = '';
  protected $buyerType = 'Google_Service_AdExchangeBuyer_Buyer';
  protected $buyerDataType = '';
  protected $buyerContactsType = 'Google_Service_AdExchangeBuyer_ContactInformation';
  protected $buyerContactsDataType = 'array';
  protected $buyerPrivateDataType = 'Google_Service_AdExchangeBuyer_PrivateData';
  protected $buyerPrivateDataDataType = '';
  protected $labelsType = 'Google_Service_AdExchangeBuyer_MarketplaceLabel';
  protected $labelsDataType = 'array';
  protected $sellerType = 'Google_Service_AdExchangeBuyer_Seller';
  protected $sellerDataType = '';
  protected $sellerContactsType = 'Google_Service_AdExchangeBuyer_ContactInformation';
  protected $sellerContactsDataType = 'array';

  /**
   * @param Google_Service_AdExchangeBuyer_Buyer
   */
  public function setBilledBuyer(Google_Service_AdExchangeBuyer_Buyer $billedBuyer)
  {
    $this->billedBuyer = $billedBuyer;
  }
  /**
   * @return Google_Service_AdExchangeBuyer_Buyer
   */
  public function getBilledBuyer()
  {
    return $this->billedBuyer;
  }
  /**
   * @param Google_Service_AdExchangeBuyer_Buyer
   */
  public function setBuyer(Google_Service_AdExchangeBuyer_Buyer $buyer)
  {
    $this->buyer = $buyer;
  }
  /**
   * @return Google_Service_AdExchangeBuyer_Buyer
   */
  public function getBuyer()
  {
    return $this->buyer;
  }
  /**
   * @param Google_Service_AdExchangeBuyer_ContactInformation
   */
  public function setBuyerContacts($buyerContacts)
  {
    $this->buyerContacts = $buyerContacts;
  }
  /**
   * @return Google_Service_AdExchangeBuyer_ContactInformation
   */
  public function getBuyerContacts()
  {
    return $this->buyerContacts;
  }
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

  public function getDbmAdvertiserIds()
  {
    return $this->dbmAdvertiserIds;
  }

  public function setDbmAdvertiserIds($dbmAdvertiserIds)
  {
    $this->dbmAdvertiserIds = $dbmAdvertiserIds;
  }

  public function getHasBuyerSignedOff()
  {
    return $this->hasBuyerSignedOff;
  }

  public function setHasBuyerSignedOff($hasBuyerSignedOff)
  {
    $this->hasBuyerSignedOff = $hasBuyerSignedOff;
  }

  public function getHasSellerSignedOff()
  {
    return $this->hasSellerSignedOff;
  }

  public function setHasSellerSignedOff($hasSellerSignedOff)
  {
    $this->hasSellerSignedOff = $hasSellerSignedOff;
  }

  public function getInventorySource()
  {
    return $this->inventorySource;
  }

  public function setInventorySource($inventorySource)
  {
    $this->inventorySource = $inventorySource;
  }

  public function getIsRenegotiating()
  {
    return $this->isRenegotiating;
  }

  public function setIsRenegotiating($isRenegotiating)
  {
    $this->isRenegotiating = $isRenegotiating;
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

  /**
   * @param Google_Service_AdExchangeBuyer_MarketplaceLabel
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return Google_Service_AdExchangeBuyer_MarketplaceLabel
   */
  public function getLabels()
  {
    return $this->labels;
  }

  public function getLastUpdaterOrCommentorRole()
  {
    return $this->lastUpdaterOrCommentorRole;
  }

  public function setLastUpdaterOrCommentorRole($lastUpdaterOrCommentorRole)
  {
    $this->lastUpdaterOrCommentorRole = $lastUpdaterOrCommentorRole;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getNegotiationId()
  {
    return $this->negotiationId;
  }

  public function setNegotiationId($negotiationId)
  {
    $this->negotiationId = $negotiationId;
  }

  public function getOriginatorRole()
  {
    return $this->originatorRole;
  }

  public function setOriginatorRole($originatorRole)
  {
    $this->originatorRole = $originatorRole;
  }

  public function getPrivateAuctionId()
  {
    return $this->privateAuctionId;
  }

  public function setPrivateAuctionId($privateAuctionId)
  {
    $this->privateAuctionId = $privateAuctionId;
  }

  public function getProposalId()
  {
    return $this->proposalId;
  }

  public function setProposalId($proposalId)
  {
    $this->proposalId = $proposalId;
  }

  public function getProposalState()
  {
    return $this->proposalState;
  }

  public function setProposalState($proposalState)
  {
    $this->proposalState = $proposalState;
  }

  public function getRevisionNumber()
  {
    return $this->revisionNumber;
  }

  public function setRevisionNumber($revisionNumber)
  {
    $this->revisionNumber = $revisionNumber;
  }

  public function getRevisionTimeMs()
  {
    return $this->revisionTimeMs;
  }

  public function setRevisionTimeMs($revisionTimeMs)
  {
    $this->revisionTimeMs = $revisionTimeMs;
  }

  /**
   * @param Google_Service_AdExchangeBuyer_Seller
   */
  public function setSeller(Google_Service_AdExchangeBuyer_Seller $seller)
  {
    $this->seller = $seller;
  }
  /**
   * @return Google_Service_AdExchangeBuyer_Seller
   */
  public function getSeller()
  {
    return $this->seller;
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
}
