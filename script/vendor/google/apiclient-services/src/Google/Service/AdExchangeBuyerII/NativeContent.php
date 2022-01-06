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

class Google_Service_AdExchangeBuyerII_NativeContent extends Google_Model
{
  public $advertiserName;
  public $body;
  public $callToAction;
  public $clickLinkUrl;
  public $clickTrackingUrl;
  public $headline;
  public $priceDisplayText;
  public $starRating;
  public $storeUrl;
  public $videoUrl;
  protected $appIconType = 'Google_Service_AdExchangeBuyerII_Image';
  protected $appIconDataType = '';
  protected $imageType = 'Google_Service_AdExchangeBuyerII_Image';
  protected $imageDataType = '';
  protected $logoType = 'Google_Service_AdExchangeBuyerII_Image';
  protected $logoDataType = '';

  public function getAdvertiserName()
  {
    return $this->advertiserName;
  }

  public function setAdvertiserName($advertiserName)
  {
    $this->advertiserName = $advertiserName;
  }

  /**
   * @param Google_Service_AdExchangeBuyerII_Image
   */
  public function setAppIcon(Google_Service_AdExchangeBuyerII_Image $appIcon)
  {
    $this->appIcon = $appIcon;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_Image
   */
  public function getAppIcon()
  {
    return $this->appIcon;
  }

  public function getBody()
  {
    return $this->body;
  }

  public function setBody($body)
  {
    $this->body = $body;
  }

  public function getCallToAction()
  {
    return $this->callToAction;
  }

  public function setCallToAction($callToAction)
  {
    $this->callToAction = $callToAction;
  }

  public function getClickLinkUrl()
  {
    return $this->clickLinkUrl;
  }

  public function setClickLinkUrl($clickLinkUrl)
  {
    $this->clickLinkUrl = $clickLinkUrl;
  }

  public function getClickTrackingUrl()
  {
    return $this->clickTrackingUrl;
  }

  public function setClickTrackingUrl($clickTrackingUrl)
  {
    $this->clickTrackingUrl = $clickTrackingUrl;
  }

  public function getHeadline()
  {
    return $this->headline;
  }

  public function setHeadline($headline)
  {
    $this->headline = $headline;
  }

  /**
   * @param Google_Service_AdExchangeBuyerII_Image
   */
  public function setImage(Google_Service_AdExchangeBuyerII_Image $image)
  {
    $this->image = $image;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_Image
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * @param Google_Service_AdExchangeBuyerII_Image
   */
  public function setLogo(Google_Service_AdExchangeBuyerII_Image $logo)
  {
    $this->logo = $logo;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_Image
   */
  public function getLogo()
  {
    return $this->logo;
  }

  public function getPriceDisplayText()
  {
    return $this->priceDisplayText;
  }

  public function setPriceDisplayText($priceDisplayText)
  {
    $this->priceDisplayText = $priceDisplayText;
  }

  public function getStarRating()
  {
    return $this->starRating;
  }

  public function setStarRating($starRating)
  {
    $this->starRating = $starRating;
  }

  public function getStoreUrl()
  {
    return $this->storeUrl;
  }

  public function setStoreUrl($storeUrl)
  {
    $this->storeUrl = $storeUrl;
  }

  public function getVideoUrl()
  {
    return $this->videoUrl;
  }

  public function setVideoUrl($videoUrl)
  {
    $this->videoUrl = $videoUrl;
  }
}
