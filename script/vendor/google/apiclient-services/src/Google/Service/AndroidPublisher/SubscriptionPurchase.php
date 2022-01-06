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

class Google_Service_AndroidPublisher_SubscriptionPurchase extends Google_Model
{
  public $autoRenewing;
  public $cancelReason;
  public $countryCode;
  public $developerPayload;
  public $emailAddress;
  public $expiryTimeMillis;
  public $familyName;
  public $givenName;
  public $kind;
  public $linkedPurchaseToken;
  public $orderId;
  public $paymentState;
  public $priceAmountMicros;
  public $priceCurrencyCode;
  public $profileId;
  public $profileName;
  public $purchaseType;
  public $startTimeMillis;
  public $userCancellationTimeMillis;
  protected $cancelSurveyResultType = 'Google_Service_AndroidPublisher_SubscriptionCancelSurveyResult';
  protected $cancelSurveyResultDataType = '';
  protected $priceChangeType = 'Google_Service_AndroidPublisher_SubscriptionPriceChange';
  protected $priceChangeDataType = '';

  public function getAutoRenewing()
  {
    return $this->autoRenewing;
  }

  public function setAutoRenewing($autoRenewing)
  {
    $this->autoRenewing = $autoRenewing;
  }

  public function getCancelReason()
  {
    return $this->cancelReason;
  }

  public function setCancelReason($cancelReason)
  {
    $this->cancelReason = $cancelReason;
  }

  /**
   * @param Google_Service_AndroidPublisher_SubscriptionCancelSurveyResult
   */
  public function setCancelSurveyResult(Google_Service_AndroidPublisher_SubscriptionCancelSurveyResult $cancelSurveyResult)
  {
    $this->cancelSurveyResult = $cancelSurveyResult;
  }
  /**
   * @return Google_Service_AndroidPublisher_SubscriptionCancelSurveyResult
   */
  public function getCancelSurveyResult()
  {
    return $this->cancelSurveyResult;
  }

  public function getCountryCode()
  {
    return $this->countryCode;
  }

  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }

  public function getDeveloperPayload()
  {
    return $this->developerPayload;
  }

  public function setDeveloperPayload($developerPayload)
  {
    $this->developerPayload = $developerPayload;
  }

  public function getEmailAddress()
  {
    return $this->emailAddress;
  }

  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }

  public function getExpiryTimeMillis()
  {
    return $this->expiryTimeMillis;
  }

  public function setExpiryTimeMillis($expiryTimeMillis)
  {
    $this->expiryTimeMillis = $expiryTimeMillis;
  }

  public function getFamilyName()
  {
    return $this->familyName;
  }

  public function setFamilyName($familyName)
  {
    $this->familyName = $familyName;
  }

  public function getGivenName()
  {
    return $this->givenName;
  }

  public function setGivenName($givenName)
  {
    $this->givenName = $givenName;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLinkedPurchaseToken()
  {
    return $this->linkedPurchaseToken;
  }

  public function setLinkedPurchaseToken($linkedPurchaseToken)
  {
    $this->linkedPurchaseToken = $linkedPurchaseToken;
  }

  public function getOrderId()
  {
    return $this->orderId;
  }

  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }

  public function getPaymentState()
  {
    return $this->paymentState;
  }

  public function setPaymentState($paymentState)
  {
    $this->paymentState = $paymentState;
  }

  public function getPriceAmountMicros()
  {
    return $this->priceAmountMicros;
  }

  public function setPriceAmountMicros($priceAmountMicros)
  {
    $this->priceAmountMicros = $priceAmountMicros;
  }

  /**
   * @param Google_Service_AndroidPublisher_SubscriptionPriceChange
   */
  public function setPriceChange(Google_Service_AndroidPublisher_SubscriptionPriceChange $priceChange)
  {
    $this->priceChange = $priceChange;
  }
  /**
   * @return Google_Service_AndroidPublisher_SubscriptionPriceChange
   */
  public function getPriceChange()
  {
    return $this->priceChange;
  }

  public function getPriceCurrencyCode()
  {
    return $this->priceCurrencyCode;
  }

  public function setPriceCurrencyCode($priceCurrencyCode)
  {
    $this->priceCurrencyCode = $priceCurrencyCode;
  }

  public function getProfileId()
  {
    return $this->profileId;
  }

  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }

  public function getProfileName()
  {
    return $this->profileName;
  }

  public function setProfileName($profileName)
  {
    $this->profileName = $profileName;
  }

  public function getPurchaseType()
  {
    return $this->purchaseType;
  }

  public function setPurchaseType($purchaseType)
  {
    $this->purchaseType = $purchaseType;
  }

  public function getStartTimeMillis()
  {
    return $this->startTimeMillis;
  }

  public function setStartTimeMillis($startTimeMillis)
  {
    $this->startTimeMillis = $startTimeMillis;
  }

  public function getUserCancellationTimeMillis()
  {
    return $this->userCancellationTimeMillis;
  }

  public function setUserCancellationTimeMillis($userCancellationTimeMillis)
  {
    $this->userCancellationTimeMillis = $userCancellationTimeMillis;
  }
}
