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

class Google_Service_PlusDomains_Person extends Google_Collection
{
  public $aboutMe;
  public $birthday;
  public $braggingRights;
  public $circledByCount;
  public $currentLocation;
  public $displayName;
  public $domain;
  public $etag;
  public $gender;
  public $id;
  public $isPlusUser;
  public $kind;
  public $nickname;
  public $objectType;
  public $occupation;
  public $plusOneCount;
  public $relationshipStatus;
  public $skills;
  public $tagline;
  public $url;
  public $verified;
  protected $collection_key = 'urls';
  protected $coverType = 'Google_Service_PlusDomains_PersonCover';
  protected $coverDataType = '';
  protected $emailsType = 'Google_Service_PlusDomains_PersonEmails';
  protected $emailsDataType = 'array';
  protected $imageType = 'Google_Service_PlusDomains_PersonImage';
  protected $imageDataType = '';
  protected $nameType = 'Google_Service_PlusDomains_PersonName';
  protected $nameDataType = '';
  protected $organizationsType = 'Google_Service_PlusDomains_PersonOrganizations';
  protected $organizationsDataType = 'array';
  protected $placesLivedType = 'Google_Service_PlusDomains_PersonPlacesLived';
  protected $placesLivedDataType = 'array';
  protected $urlsType = 'Google_Service_PlusDomains_PersonUrls';
  protected $urlsDataType = 'array';

  public function getAboutMe()
  {
    return $this->aboutMe;
  }

  public function setAboutMe($aboutMe)
  {
    $this->aboutMe = $aboutMe;
  }

  public function getBirthday()
  {
    return $this->birthday;
  }

  public function setBirthday($birthday)
  {
    $this->birthday = $birthday;
  }

  public function getBraggingRights()
  {
    return $this->braggingRights;
  }

  public function setBraggingRights($braggingRights)
  {
    $this->braggingRights = $braggingRights;
  }

  public function getCircledByCount()
  {
    return $this->circledByCount;
  }

  public function setCircledByCount($circledByCount)
  {
    $this->circledByCount = $circledByCount;
  }

  /**
   * @param Google_Service_PlusDomains_PersonCover
   */
  public function setCover(Google_Service_PlusDomains_PersonCover $cover)
  {
    $this->cover = $cover;
  }
  /**
   * @return Google_Service_PlusDomains_PersonCover
   */
  public function getCover()
  {
    return $this->cover;
  }

  public function getCurrentLocation()
  {
    return $this->currentLocation;
  }

  public function setCurrentLocation($currentLocation)
  {
    $this->currentLocation = $currentLocation;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDomain()
  {
    return $this->domain;
  }

  public function setDomain($domain)
  {
    $this->domain = $domain;
  }

  /**
   * @param Google_Service_PlusDomains_PersonEmails
   */
  public function setEmails($emails)
  {
    $this->emails = $emails;
  }
  /**
   * @return Google_Service_PlusDomains_PersonEmails
   */
  public function getEmails()
  {
    return $this->emails;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getGender()
  {
    return $this->gender;
  }

  public function setGender($gender)
  {
    $this->gender = $gender;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  /**
   * @param Google_Service_PlusDomains_PersonImage
   */
  public function setImage(Google_Service_PlusDomains_PersonImage $image)
  {
    $this->image = $image;
  }
  /**
   * @return Google_Service_PlusDomains_PersonImage
   */
  public function getImage()
  {
    return $this->image;
  }

  public function getIsPlusUser()
  {
    return $this->isPlusUser;
  }

  public function setIsPlusUser($isPlusUser)
  {
    $this->isPlusUser = $isPlusUser;
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
   * @param Google_Service_PlusDomains_PersonName
   */
  public function setName(Google_Service_PlusDomains_PersonName $name)
  {
    $this->name = $name;
  }
  /**
   * @return Google_Service_PlusDomains_PersonName
   */
  public function getName()
  {
    return $this->name;
  }

  public function getNickname()
  {
    return $this->nickname;
  }

  public function setNickname($nickname)
  {
    $this->nickname = $nickname;
  }

  public function getObjectType()
  {
    return $this->objectType;
  }

  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }

  public function getOccupation()
  {
    return $this->occupation;
  }

  public function setOccupation($occupation)
  {
    $this->occupation = $occupation;
  }

  /**
   * @param Google_Service_PlusDomains_PersonOrganizations
   */
  public function setOrganizations($organizations)
  {
    $this->organizations = $organizations;
  }
  /**
   * @return Google_Service_PlusDomains_PersonOrganizations
   */
  public function getOrganizations()
  {
    return $this->organizations;
  }
  /**
   * @param Google_Service_PlusDomains_PersonPlacesLived
   */
  public function setPlacesLived($placesLived)
  {
    $this->placesLived = $placesLived;
  }
  /**
   * @return Google_Service_PlusDomains_PersonPlacesLived
   */
  public function getPlacesLived()
  {
    return $this->placesLived;
  }

  public function getPlusOneCount()
  {
    return $this->plusOneCount;
  }

  public function setPlusOneCount($plusOneCount)
  {
    $this->plusOneCount = $plusOneCount;
  }

  public function getRelationshipStatus()
  {
    return $this->relationshipStatus;
  }

  public function setRelationshipStatus($relationshipStatus)
  {
    $this->relationshipStatus = $relationshipStatus;
  }

  public function getSkills()
  {
    return $this->skills;
  }

  public function setSkills($skills)
  {
    $this->skills = $skills;
  }

  public function getTagline()
  {
    return $this->tagline;
  }

  public function setTagline($tagline)
  {
    $this->tagline = $tagline;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }

  /**
   * @param Google_Service_PlusDomains_PersonUrls
   */
  public function setUrls($urls)
  {
    $this->urls = $urls;
  }
  /**
   * @return Google_Service_PlusDomains_PersonUrls
   */
  public function getUrls()
  {
    return $this->urls;
  }

  public function getVerified()
  {
    return $this->verified;
  }

  public function setVerified($verified)
  {
    $this->verified = $verified;
  }
}
