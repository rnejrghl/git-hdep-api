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

class Google_Service_ShoppingContent_Account extends Google_Collection
{
  public $adultContent;
  public $id;
  public $kind;
  public $name;
  public $reviewsUrl;
  public $sellerId;
  public $websiteUrl;
  protected $collection_key = 'youtubeChannelLinks';
  protected $adwordsLinksType = 'Google_Service_ShoppingContent_AccountAdwordsLink';
  protected $adwordsLinksDataType = 'array';
  protected $businessInformationType = 'Google_Service_ShoppingContent_AccountBusinessInformation';
  protected $businessInformationDataType = '';
  protected $googleMyBusinessLinkType = 'Google_Service_ShoppingContent_AccountGoogleMyBusinessLink';
  protected $googleMyBusinessLinkDataType = '';
  protected $usersType = 'Google_Service_ShoppingContent_AccountUser';
  protected $usersDataType = 'array';
  protected $youtubeChannelLinksType = 'Google_Service_ShoppingContent_AccountYouTubeChannelLink';
  protected $youtubeChannelLinksDataType = 'array';

  public function getAdultContent()
  {
    return $this->adultContent;
  }

  public function setAdultContent($adultContent)
  {
    $this->adultContent = $adultContent;
  }

  /**
   * @param Google_Service_ShoppingContent_AccountAdwordsLink
   */
  public function setAdwordsLinks($adwordsLinks)
  {
    $this->adwordsLinks = $adwordsLinks;
  }
  /**
   * @return Google_Service_ShoppingContent_AccountAdwordsLink
   */
  public function getAdwordsLinks()
  {
    return $this->adwordsLinks;
  }
  /**
   * @param Google_Service_ShoppingContent_AccountBusinessInformation
   */
  public function setBusinessInformation(Google_Service_ShoppingContent_AccountBusinessInformation $businessInformation)
  {
    $this->businessInformation = $businessInformation;
  }
  /**
   * @return Google_Service_ShoppingContent_AccountBusinessInformation
   */
  public function getBusinessInformation()
  {
    return $this->businessInformation;
  }
  /**
   * @param Google_Service_ShoppingContent_AccountGoogleMyBusinessLink
   */
  public function setGoogleMyBusinessLink(Google_Service_ShoppingContent_AccountGoogleMyBusinessLink $googleMyBusinessLink)
  {
    $this->googleMyBusinessLink = $googleMyBusinessLink;
  }
  /**
   * @return Google_Service_ShoppingContent_AccountGoogleMyBusinessLink
   */
  public function getGoogleMyBusinessLink()
  {
    return $this->googleMyBusinessLink;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getReviewsUrl()
  {
    return $this->reviewsUrl;
  }

  public function setReviewsUrl($reviewsUrl)
  {
    $this->reviewsUrl = $reviewsUrl;
  }

  public function getSellerId()
  {
    return $this->sellerId;
  }

  public function setSellerId($sellerId)
  {
    $this->sellerId = $sellerId;
  }

  /**
   * @param Google_Service_ShoppingContent_AccountUser
   */
  public function setUsers($users)
  {
    $this->users = $users;
  }
  /**
   * @return Google_Service_ShoppingContent_AccountUser
   */
  public function getUsers()
  {
    return $this->users;
  }

  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }

  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }

  /**
   * @param Google_Service_ShoppingContent_AccountYouTubeChannelLink
   */
  public function setYoutubeChannelLinks($youtubeChannelLinks)
  {
    $this->youtubeChannelLinks = $youtubeChannelLinks;
  }
  /**
   * @return Google_Service_ShoppingContent_AccountYouTubeChannelLink
   */
  public function getYoutubeChannelLinks()
  {
    return $this->youtubeChannelLinks;
  }
}
