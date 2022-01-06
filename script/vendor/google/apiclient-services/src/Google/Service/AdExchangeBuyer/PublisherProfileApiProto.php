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

class Google_Service_AdExchangeBuyer_PublisherProfileApiProto extends Google_Collection
{
  public $audience;
  public $buyerPitchStatement;
  public $directContact;
  public $exchange;
  public $googlePlusLink;
  public $isParent;
  public $isPublished;
  public $kind;
  public $logoUrl;
  public $mediaKitLink;
  public $name;
  public $overview;
  public $profileId;
  public $programmaticContact;
  public $publisherDomains;
  public $publisherProfileId;
  public $rateCardInfoLink;
  public $samplePageLink;
  public $state;
  public $topHeadlines;
  protected $collection_key = 'topHeadlines';
  protected $publisherProvidedForecastType = 'Google_Service_AdExchangeBuyer_PublisherProvidedForecast';
  protected $publisherProvidedForecastDataType = '';
  protected $sellerType = 'Google_Service_AdExchangeBuyer_Seller';
  protected $sellerDataType = '';

  public function getAudience()
  {
    return $this->audience;
  }

  public function setAudience($audience)
  {
    $this->audience = $audience;
  }

  public function getBuyerPitchStatement()
  {
    return $this->buyerPitchStatement;
  }

  public function setBuyerPitchStatement($buyerPitchStatement)
  {
    $this->buyerPitchStatement = $buyerPitchStatement;
  }

  public function getDirectContact()
  {
    return $this->directContact;
  }

  public function setDirectContact($directContact)
  {
    $this->directContact = $directContact;
  }

  public function getExchange()
  {
    return $this->exchange;
  }

  public function setExchange($exchange)
  {
    $this->exchange = $exchange;
  }

  public function getGooglePlusLink()
  {
    return $this->googlePlusLink;
  }

  public function setGooglePlusLink($googlePlusLink)
  {
    $this->googlePlusLink = $googlePlusLink;
  }

  public function getIsParent()
  {
    return $this->isParent;
  }

  public function setIsParent($isParent)
  {
    $this->isParent = $isParent;
  }

  public function getIsPublished()
  {
    return $this->isPublished;
  }

  public function setIsPublished($isPublished)
  {
    $this->isPublished = $isPublished;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLogoUrl()
  {
    return $this->logoUrl;
  }

  public function setLogoUrl($logoUrl)
  {
    $this->logoUrl = $logoUrl;
  }

  public function getMediaKitLink()
  {
    return $this->mediaKitLink;
  }

  public function setMediaKitLink($mediaKitLink)
  {
    $this->mediaKitLink = $mediaKitLink;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getOverview()
  {
    return $this->overview;
  }

  public function setOverview($overview)
  {
    $this->overview = $overview;
  }

  public function getProfileId()
  {
    return $this->profileId;
  }

  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }

  public function getProgrammaticContact()
  {
    return $this->programmaticContact;
  }

  public function setProgrammaticContact($programmaticContact)
  {
    $this->programmaticContact = $programmaticContact;
  }

  public function getPublisherDomains()
  {
    return $this->publisherDomains;
  }

  public function setPublisherDomains($publisherDomains)
  {
    $this->publisherDomains = $publisherDomains;
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
   * @param Google_Service_AdExchangeBuyer_PublisherProvidedForecast
   */
  public function setPublisherProvidedForecast(Google_Service_AdExchangeBuyer_PublisherProvidedForecast $publisherProvidedForecast)
  {
    $this->publisherProvidedForecast = $publisherProvidedForecast;
  }
  /**
   * @return Google_Service_AdExchangeBuyer_PublisherProvidedForecast
   */
  public function getPublisherProvidedForecast()
  {
    return $this->publisherProvidedForecast;
  }

  public function getRateCardInfoLink()
  {
    return $this->rateCardInfoLink;
  }

  public function setRateCardInfoLink($rateCardInfoLink)
  {
    $this->rateCardInfoLink = $rateCardInfoLink;
  }

  public function getSamplePageLink()
  {
    return $this->samplePageLink;
  }

  public function setSamplePageLink($samplePageLink)
  {
    $this->samplePageLink = $samplePageLink;
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

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getTopHeadlines()
  {
    return $this->topHeadlines;
  }

  public function setTopHeadlines($topHeadlines)
  {
    $this->topHeadlines = $topHeadlines;
  }
}
