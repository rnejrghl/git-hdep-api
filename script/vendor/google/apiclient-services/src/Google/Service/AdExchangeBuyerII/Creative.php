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

class Google_Service_AdExchangeBuyerII_Creative extends Google_Collection
{
  public $accountId;
  public $adChoicesDestinationUrl;
  public $advertiserName;
  public $agencyId;
  public $apiUpdateTime;
  public $attributes;
  public $clickThroughUrls;
  public $creativeId;
  public $dealsStatus;
  public $declaredClickThroughUrls;
  public $detectedAdvertiserIds;
  public $detectedDomains;
  public $detectedLanguages;
  public $detectedProductCategories;
  public $detectedSensitiveCategories;
  public $impressionTrackingUrls;
  public $openAuctionStatus;
  public $restrictedCategories;
  public $vendorIds;
  public $version;
  protected $collection_key = 'vendorIds';
  protected $correctionsType = 'Google_Service_AdExchangeBuyerII_Correction';
  protected $correctionsDataType = 'array';
  protected $filteringStatsType = 'Google_Service_AdExchangeBuyerII_FilteringStats';
  protected $filteringStatsDataType = '';
  protected $htmlType = 'Google_Service_AdExchangeBuyerII_HtmlContent';
  protected $htmlDataType = '';
  protected $nativeType = 'Google_Service_AdExchangeBuyerII_NativeContent';
  protected $nativeDataType = '';
  protected $servingRestrictionsType = 'Google_Service_AdExchangeBuyerII_ServingRestriction';
  protected $servingRestrictionsDataType = 'array';
  protected $videoType = 'Google_Service_AdExchangeBuyerII_VideoContent';
  protected $videoDataType = '';

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getAdChoicesDestinationUrl()
  {
    return $this->adChoicesDestinationUrl;
  }

  public function setAdChoicesDestinationUrl($adChoicesDestinationUrl)
  {
    $this->adChoicesDestinationUrl = $adChoicesDestinationUrl;
  }

  public function getAdvertiserName()
  {
    return $this->advertiserName;
  }

  public function setAdvertiserName($advertiserName)
  {
    $this->advertiserName = $advertiserName;
  }

  public function getAgencyId()
  {
    return $this->agencyId;
  }

  public function setAgencyId($agencyId)
  {
    $this->agencyId = $agencyId;
  }

  public function getApiUpdateTime()
  {
    return $this->apiUpdateTime;
  }

  public function setApiUpdateTime($apiUpdateTime)
  {
    $this->apiUpdateTime = $apiUpdateTime;
  }

  public function getAttributes()
  {
    return $this->attributes;
  }

  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }

  public function getClickThroughUrls()
  {
    return $this->clickThroughUrls;
  }

  public function setClickThroughUrls($clickThroughUrls)
  {
    $this->clickThroughUrls = $clickThroughUrls;
  }

  /**
   * @param Google_Service_AdExchangeBuyerII_Correction
   */
  public function setCorrections($corrections)
  {
    $this->corrections = $corrections;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_Correction
   */
  public function getCorrections()
  {
    return $this->corrections;
  }

  public function getCreativeId()
  {
    return $this->creativeId;
  }

  public function setCreativeId($creativeId)
  {
    $this->creativeId = $creativeId;
  }

  public function getDealsStatus()
  {
    return $this->dealsStatus;
  }

  public function setDealsStatus($dealsStatus)
  {
    $this->dealsStatus = $dealsStatus;
  }

  public function getDeclaredClickThroughUrls()
  {
    return $this->declaredClickThroughUrls;
  }

  public function setDeclaredClickThroughUrls($declaredClickThroughUrls)
  {
    $this->declaredClickThroughUrls = $declaredClickThroughUrls;
  }

  public function getDetectedAdvertiserIds()
  {
    return $this->detectedAdvertiserIds;
  }

  public function setDetectedAdvertiserIds($detectedAdvertiserIds)
  {
    $this->detectedAdvertiserIds = $detectedAdvertiserIds;
  }

  public function getDetectedDomains()
  {
    return $this->detectedDomains;
  }

  public function setDetectedDomains($detectedDomains)
  {
    $this->detectedDomains = $detectedDomains;
  }

  public function getDetectedLanguages()
  {
    return $this->detectedLanguages;
  }

  public function setDetectedLanguages($detectedLanguages)
  {
    $this->detectedLanguages = $detectedLanguages;
  }

  public function getDetectedProductCategories()
  {
    return $this->detectedProductCategories;
  }

  public function setDetectedProductCategories($detectedProductCategories)
  {
    $this->detectedProductCategories = $detectedProductCategories;
  }

  public function getDetectedSensitiveCategories()
  {
    return $this->detectedSensitiveCategories;
  }

  public function setDetectedSensitiveCategories($detectedSensitiveCategories)
  {
    $this->detectedSensitiveCategories = $detectedSensitiveCategories;
  }

  /**
   * @param Google_Service_AdExchangeBuyerII_FilteringStats
   */
  public function setFilteringStats(Google_Service_AdExchangeBuyerII_FilteringStats $filteringStats)
  {
    $this->filteringStats = $filteringStats;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_FilteringStats
   */
  public function getFilteringStats()
  {
    return $this->filteringStats;
  }
  /**
   * @param Google_Service_AdExchangeBuyerII_HtmlContent
   */
  public function setHtml(Google_Service_AdExchangeBuyerII_HtmlContent $html)
  {
    $this->html = $html;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_HtmlContent
   */
  public function getHtml()
  {
    return $this->html;
  }

  public function getImpressionTrackingUrls()
  {
    return $this->impressionTrackingUrls;
  }

  public function setImpressionTrackingUrls($impressionTrackingUrls)
  {
    $this->impressionTrackingUrls = $impressionTrackingUrls;
  }

  /**
   * @param Google_Service_AdExchangeBuyerII_NativeContent
   */
  public function setNative(Google_Service_AdExchangeBuyerII_NativeContent $native)
  {
    $this->native = $native;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_NativeContent
   */
  public function getNative()
  {
    return $this->native;
  }

  public function getOpenAuctionStatus()
  {
    return $this->openAuctionStatus;
  }

  public function setOpenAuctionStatus($openAuctionStatus)
  {
    $this->openAuctionStatus = $openAuctionStatus;
  }

  public function getRestrictedCategories()
  {
    return $this->restrictedCategories;
  }

  public function setRestrictedCategories($restrictedCategories)
  {
    $this->restrictedCategories = $restrictedCategories;
  }

  /**
   * @param Google_Service_AdExchangeBuyerII_ServingRestriction
   */
  public function setServingRestrictions($servingRestrictions)
  {
    $this->servingRestrictions = $servingRestrictions;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_ServingRestriction
   */
  public function getServingRestrictions()
  {
    return $this->servingRestrictions;
  }

  public function getVendorIds()
  {
    return $this->vendorIds;
  }

  public function setVendorIds($vendorIds)
  {
    $this->vendorIds = $vendorIds;
  }

  public function getVersion()
  {
    return $this->version;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  /**
   * @param Google_Service_AdExchangeBuyerII_VideoContent
   */
  public function setVideo(Google_Service_AdExchangeBuyerII_VideoContent $video)
  {
    $this->video = $video;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_VideoContent
   */
  public function getVideo()
  {
    return $this->video;
  }
}
