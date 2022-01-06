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

class Google_Service_Partners_CompanyRelation extends Google_Collection
{
  public $address;
  public $badgeTier;
  public $companyAdmin;
  public $companyId;
  public $creationTime;
  public $internalCompanyId;
  public $isPending;
  public $logoUrl;
  public $managerAccount;
  public $name;
  public $phoneNumber;
  public $primaryCountryCode;
  public $primaryLanguageCode;
  public $resolvedTimestamp;
  public $segment;
  public $state;
  public $website;
  protected $collection_key = 'specializationStatus';
  protected $primaryAddressType = 'Google_Service_Partners_Location';
  protected $primaryAddressDataType = '';
  protected $specializationStatusType = 'Google_Service_Partners_SpecializationStatus';
  protected $specializationStatusDataType = 'array';

  public function getAddress()
  {
    return $this->address;
  }

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getBadgeTier()
  {
    return $this->badgeTier;
  }

  public function setBadgeTier($badgeTier)
  {
    $this->badgeTier = $badgeTier;
  }

  public function getCompanyAdmin()
  {
    return $this->companyAdmin;
  }

  public function setCompanyAdmin($companyAdmin)
  {
    $this->companyAdmin = $companyAdmin;
  }

  public function getCompanyId()
  {
    return $this->companyId;
  }

  public function setCompanyId($companyId)
  {
    $this->companyId = $companyId;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getInternalCompanyId()
  {
    return $this->internalCompanyId;
  }

  public function setInternalCompanyId($internalCompanyId)
  {
    $this->internalCompanyId = $internalCompanyId;
  }

  public function getIsPending()
  {
    return $this->isPending;
  }

  public function setIsPending($isPending)
  {
    $this->isPending = $isPending;
  }

  public function getLogoUrl()
  {
    return $this->logoUrl;
  }

  public function setLogoUrl($logoUrl)
  {
    $this->logoUrl = $logoUrl;
  }

  public function getManagerAccount()
  {
    return $this->managerAccount;
  }

  public function setManagerAccount($managerAccount)
  {
    $this->managerAccount = $managerAccount;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }

  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }

  /**
   * @param Google_Service_Partners_Location
   */
  public function setPrimaryAddress(Google_Service_Partners_Location $primaryAddress)
  {
    $this->primaryAddress = $primaryAddress;
  }
  /**
   * @return Google_Service_Partners_Location
   */
  public function getPrimaryAddress()
  {
    return $this->primaryAddress;
  }

  public function getPrimaryCountryCode()
  {
    return $this->primaryCountryCode;
  }

  public function setPrimaryCountryCode($primaryCountryCode)
  {
    $this->primaryCountryCode = $primaryCountryCode;
  }

  public function getPrimaryLanguageCode()
  {
    return $this->primaryLanguageCode;
  }

  public function setPrimaryLanguageCode($primaryLanguageCode)
  {
    $this->primaryLanguageCode = $primaryLanguageCode;
  }

  public function getResolvedTimestamp()
  {
    return $this->resolvedTimestamp;
  }

  public function setResolvedTimestamp($resolvedTimestamp)
  {
    $this->resolvedTimestamp = $resolvedTimestamp;
  }

  public function getSegment()
  {
    return $this->segment;
  }

  public function setSegment($segment)
  {
    $this->segment = $segment;
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

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getWebsite()
  {
    return $this->website;
  }

  public function setWebsite($website)
  {
    $this->website = $website;
  }
}
