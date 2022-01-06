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

class Google_Service_Partners_Company extends Google_Collection
{
  public $additionalWebsites;
  public $autoApprovalEmailDomains;
  public $badgeAuthorityInAwn;
  public $badgeTier;
  public $companyTypes;
  public $id;
  public $industries;
  public $name;
  public $primaryAdwordsManagerAccountId;
  public $primaryLanguageCode;
  public $profileStatus;
  public $services;
  public $websiteUrl;
  protected $collection_key = 'specializationStatus';
  protected $certificationStatusesType = 'Google_Service_Partners_CertificationStatus';
  protected $certificationStatusesDataType = 'array';
  protected $convertedMinMonthlyBudgetType = 'Google_Service_Partners_Money';
  protected $convertedMinMonthlyBudgetDataType = '';
  protected $localizedInfosType = 'Google_Service_Partners_LocalizedCompanyInfo';
  protected $localizedInfosDataType = 'array';
  protected $locationsType = 'Google_Service_Partners_Location';
  protected $locationsDataType = 'array';
  protected $originalMinMonthlyBudgetType = 'Google_Service_Partners_Money';
  protected $originalMinMonthlyBudgetDataType = '';
  protected $primaryLocationType = 'Google_Service_Partners_Location';
  protected $primaryLocationDataType = '';
  protected $publicProfileType = 'Google_Service_Partners_PublicProfile';
  protected $publicProfileDataType = '';
  protected $ranksType = 'Google_Service_Partners_Rank';
  protected $ranksDataType = 'array';
  protected $specializationStatusType = 'Google_Service_Partners_SpecializationStatus';
  protected $specializationStatusDataType = 'array';

  public function getAdditionalWebsites()
  {
    return $this->additionalWebsites;
  }

  public function setAdditionalWebsites($additionalWebsites)
  {
    $this->additionalWebsites = $additionalWebsites;
  }

  public function getAutoApprovalEmailDomains()
  {
    return $this->autoApprovalEmailDomains;
  }

  public function setAutoApprovalEmailDomains($autoApprovalEmailDomains)
  {
    $this->autoApprovalEmailDomains = $autoApprovalEmailDomains;
  }

  public function getBadgeAuthorityInAwn()
  {
    return $this->badgeAuthorityInAwn;
  }

  public function setBadgeAuthorityInAwn($badgeAuthorityInAwn)
  {
    $this->badgeAuthorityInAwn = $badgeAuthorityInAwn;
  }

  public function getBadgeTier()
  {
    return $this->badgeTier;
  }

  public function setBadgeTier($badgeTier)
  {
    $this->badgeTier = $badgeTier;
  }

  /**
   * @param Google_Service_Partners_CertificationStatus
   */
  public function setCertificationStatuses($certificationStatuses)
  {
    $this->certificationStatuses = $certificationStatuses;
  }
  /**
   * @return Google_Service_Partners_CertificationStatus
   */
  public function getCertificationStatuses()
  {
    return $this->certificationStatuses;
  }

  public function getCompanyTypes()
  {
    return $this->companyTypes;
  }

  public function setCompanyTypes($companyTypes)
  {
    $this->companyTypes = $companyTypes;
  }

  /**
   * @param Google_Service_Partners_Money
   */
  public function setConvertedMinMonthlyBudget(Google_Service_Partners_Money $convertedMinMonthlyBudget)
  {
    $this->convertedMinMonthlyBudget = $convertedMinMonthlyBudget;
  }
  /**
   * @return Google_Service_Partners_Money
   */
  public function getConvertedMinMonthlyBudget()
  {
    return $this->convertedMinMonthlyBudget;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getIndustries()
  {
    return $this->industries;
  }

  public function setIndustries($industries)
  {
    $this->industries = $industries;
  }

  /**
   * @param Google_Service_Partners_LocalizedCompanyInfo
   */
  public function setLocalizedInfos($localizedInfos)
  {
    $this->localizedInfos = $localizedInfos;
  }
  /**
   * @return Google_Service_Partners_LocalizedCompanyInfo
   */
  public function getLocalizedInfos()
  {
    return $this->localizedInfos;
  }
  /**
   * @param Google_Service_Partners_Location
   */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /**
   * @return Google_Service_Partners_Location
   */
  public function getLocations()
  {
    return $this->locations;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @param Google_Service_Partners_Money
   */
  public function setOriginalMinMonthlyBudget(Google_Service_Partners_Money $originalMinMonthlyBudget)
  {
    $this->originalMinMonthlyBudget = $originalMinMonthlyBudget;
  }
  /**
   * @return Google_Service_Partners_Money
   */
  public function getOriginalMinMonthlyBudget()
  {
    return $this->originalMinMonthlyBudget;
  }

  public function getPrimaryAdwordsManagerAccountId()
  {
    return $this->primaryAdwordsManagerAccountId;
  }

  public function setPrimaryAdwordsManagerAccountId($primaryAdwordsManagerAccountId)
  {
    $this->primaryAdwordsManagerAccountId = $primaryAdwordsManagerAccountId;
  }

  public function getPrimaryLanguageCode()
  {
    return $this->primaryLanguageCode;
  }

  public function setPrimaryLanguageCode($primaryLanguageCode)
  {
    $this->primaryLanguageCode = $primaryLanguageCode;
  }

  /**
   * @param Google_Service_Partners_Location
   */
  public function setPrimaryLocation(Google_Service_Partners_Location $primaryLocation)
  {
    $this->primaryLocation = $primaryLocation;
  }
  /**
   * @return Google_Service_Partners_Location
   */
  public function getPrimaryLocation()
  {
    return $this->primaryLocation;
  }

  public function getProfileStatus()
  {
    return $this->profileStatus;
  }

  public function setProfileStatus($profileStatus)
  {
    $this->profileStatus = $profileStatus;
  }

  /**
   * @param Google_Service_Partners_PublicProfile
   */
  public function setPublicProfile(Google_Service_Partners_PublicProfile $publicProfile)
  {
    $this->publicProfile = $publicProfile;
  }
  /**
   * @return Google_Service_Partners_PublicProfile
   */
  public function getPublicProfile()
  {
    return $this->publicProfile;
  }
  /**
   * @param Google_Service_Partners_Rank
   */
  public function setRanks($ranks)
  {
    $this->ranks = $ranks;
  }
  /**
   * @return Google_Service_Partners_Rank
   */
  public function getRanks()
  {
    return $this->ranks;
  }

  public function getServices()
  {
    return $this->services;
  }

  public function setServices($services)
  {
    $this->services = $services;
  }

  /**
   * @param Google_Service_Partners_SpecializationStatus
   */
  public function setSpecializationStatus($specializationStatus)
  {
    $this->specializationStatus = $specializationStatus;
  }
  /**
   * @return Google_Service_Partners_SpecializationStatus
   */
  public function getSpecializationStatus()
  {
    return $this->specializationStatus;
  }

  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }

  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
}
