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

class Google_Service_AndroidEnterprise_Product extends Google_Collection
{
  public $authorName;
  public $availableCountries;
  public $availableTracks;
  public $category;
  public $contentRating;
  public $description;
  public $detailsUrl;
  public $distributionChannel;
  public $iconUrl;
  public $kind;
  public $lastUpdatedTimestampMillis;
  public $minAndroidSdkVersion;
  public $productId;
  public $productPricing;
  public $recentChanges;
  public $requiresContainerApp;
  public $screenshotUrls;
  public $smallIconUrl;
  public $title;
  public $workDetailsUrl;
  protected $collection_key = 'screenshotUrls';
  protected $appTracksType = 'Google_Service_AndroidEnterprise_TrackInfo';
  protected $appTracksDataType = 'array';
  protected $appVersionType = 'Google_Service_AndroidEnterprise_AppVersion';
  protected $appVersionDataType = 'array';
  protected $permissionsType = 'Google_Service_AndroidEnterprise_ProductPermission';
  protected $permissionsDataType = 'array';
  protected $signingCertificateType = 'Google_Service_AndroidEnterprise_ProductSigningCertificate';
  protected $signingCertificateDataType = '';

  /**
   * @param Google_Service_AndroidEnterprise_TrackInfo
   */
  public function setAppTracks($appTracks)
  {
    $this->appTracks = $appTracks;
  }
  /**
   * @return Google_Service_AndroidEnterprise_TrackInfo
   */
  public function getAppTracks()
  {
    return $this->appTracks;
  }
  /**
   * @param Google_Service_AndroidEnterprise_AppVersion
   */
  public function setAppVersion($appVersion)
  {
    $this->appVersion = $appVersion;
  }
  /**
   * @return Google_Service_AndroidEnterprise_AppVersion
   */
  public function getAppVersion()
  {
    return $this->appVersion;
  }

  public function getAuthorName()
  {
    return $this->authorName;
  }

  public function setAuthorName($authorName)
  {
    $this->authorName = $authorName;
  }

  public function getAvailableCountries()
  {
    return $this->availableCountries;
  }

  public function setAvailableCountries($availableCountries)
  {
    $this->availableCountries = $availableCountries;
  }

  public function getAvailableTracks()
  {
    return $this->availableTracks;
  }

  public function setAvailableTracks($availableTracks)
  {
    $this->availableTracks = $availableTracks;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function setCategory($category)
  {
    $this->category = $category;
  }

  public function getContentRating()
  {
    return $this->contentRating;
  }

  public function setContentRating($contentRating)
  {
    $this->contentRating = $contentRating;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDetailsUrl()
  {
    return $this->detailsUrl;
  }

  public function setDetailsUrl($detailsUrl)
  {
    $this->detailsUrl = $detailsUrl;
  }

  public function getDistributionChannel()
  {
    return $this->distributionChannel;
  }

  public function setDistributionChannel($distributionChannel)
  {
    $this->distributionChannel = $distributionChannel;
  }

  public function getIconUrl()
  {
    return $this->iconUrl;
  }

  public function setIconUrl($iconUrl)
  {
    $this->iconUrl = $iconUrl;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLastUpdatedTimestampMillis()
  {
    return $this->lastUpdatedTimestampMillis;
  }

  public function setLastUpdatedTimestampMillis($lastUpdatedTimestampMillis)
  {
    $this->lastUpdatedTimestampMillis = $lastUpdatedTimestampMillis;
  }

  public function getMinAndroidSdkVersion()
  {
    return $this->minAndroidSdkVersion;
  }

  public function setMinAndroidSdkVersion($minAndroidSdkVersion)
  {
    $this->minAndroidSdkVersion = $minAndroidSdkVersion;
  }

  /**
   * @param Google_Service_AndroidEnterprise_ProductPermission
   */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /**
   * @return Google_Service_AndroidEnterprise_ProductPermission
   */
  public function getPermissions()
  {
    return $this->permissions;
  }

  public function getProductId()
  {
    return $this->productId;
  }

  public function setProductId($productId)
  {
    $this->productId = $productId;
  }

  public function getProductPricing()
  {
    return $this->productPricing;
  }

  public function setProductPricing($productPricing)
  {
    $this->productPricing = $productPricing;
  }

  public function getRecentChanges()
  {
    return $this->recentChanges;
  }

  public function setRecentChanges($recentChanges)
  {
    $this->recentChanges = $recentChanges;
  }

  public function getRequiresContainerApp()
  {
    return $this->requiresContainerApp;
  }

  public function setRequiresContainerApp($requiresContainerApp)
  {
    $this->requiresContainerApp = $requiresContainerApp;
  }

  public function getScreenshotUrls()
  {
    return $this->screenshotUrls;
  }

  public function setScreenshotUrls($screenshotUrls)
  {
    $this->screenshotUrls = $screenshotUrls;
  }

  /**
   * @param Google_Service_AndroidEnterprise_ProductSigningCertificate
   */
  public function setSigningCertificate(Google_Service_AndroidEnterprise_ProductSigningCertificate $signingCertificate)
  {
    $this->signingCertificate = $signingCertificate;
  }
  /**
   * @return Google_Service_AndroidEnterprise_ProductSigningCertificate
   */
  public function getSigningCertificate()
  {
    return $this->signingCertificate;
  }

  public function getSmallIconUrl()
  {
    return $this->smallIconUrl;
  }

  public function setSmallIconUrl($smallIconUrl)
  {
    $this->smallIconUrl = $smallIconUrl;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getWorkDetailsUrl()
  {
    return $this->workDetailsUrl;
  }

  public function setWorkDetailsUrl($workDetailsUrl)
  {
    $this->workDetailsUrl = $workDetailsUrl;
  }
}
