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

class Google_Service_Directory_User extends Google_Collection
{
  public $addresses;
  public $agreedToTerms;
  public $aliases;
  public $archived;
  public $changePasswordAtNextLogin;
  public $creationTime;
  public $customSchemas;
  public $customerId;
  public $deletionTime;
  public $emails;
  public $etag;
  public $externalIds;
  public $gender;
  public $hashFunction;
  public $id;
  public $ims;
  public $includeInGlobalAddressList;
  public $ipWhitelisted;
  public $isAdmin;
  public $isDelegatedAdmin;
  public $isEnforcedIn2Sv;
  public $isEnrolledIn2Sv;
  public $isMailboxSetup;
  public $keywords;
  public $kind;
  public $languages;
  public $lastLoginTime;
  public $locations;
  public $nonEditableAliases;
  public $notes;
  public $orgUnitPath;
  public $organizations;
  public $password;
  public $phones;
  public $posixAccounts;
  public $primaryEmail;
  public $relations;
  public $sshPublicKeys;
  public $suspended;
  public $suspensionReason;
  public $thumbnailPhotoEtag;
  public $thumbnailPhotoUrl;
  public $websites;
  protected $collection_key = 'nonEditableAliases';
  protected $nameType = 'Google_Service_Directory_UserName';
  protected $nameDataType = '';

  public function getAddresses()
  {
    return $this->addresses;
  }

  public function setAddresses($addresses)
  {
    $this->addresses = $addresses;
  }

  public function getAgreedToTerms()
  {
    return $this->agreedToTerms;
  }

  public function setAgreedToTerms($agreedToTerms)
  {
    $this->agreedToTerms = $agreedToTerms;
  }

  public function getAliases()
  {
    return $this->aliases;
  }

  public function setAliases($aliases)
  {
    $this->aliases = $aliases;
  }

  public function getArchived()
  {
    return $this->archived;
  }

  public function setArchived($archived)
  {
    $this->archived = $archived;
  }

  public function getChangePasswordAtNextLogin()
  {
    return $this->changePasswordAtNextLogin;
  }

  public function setChangePasswordAtNextLogin($changePasswordAtNextLogin)
  {
    $this->changePasswordAtNextLogin = $changePasswordAtNextLogin;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCustomSchemas()
  {
    return $this->customSchemas;
  }

  public function setCustomSchemas($customSchemas)
  {
    $this->customSchemas = $customSchemas;
  }

  public function getCustomerId()
  {
    return $this->customerId;
  }

  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }

  public function getDeletionTime()
  {
    return $this->deletionTime;
  }

  public function setDeletionTime($deletionTime)
  {
    $this->deletionTime = $deletionTime;
  }

  public function getEmails()
  {
    return $this->emails;
  }

  public function setEmails($emails)
  {
    $this->emails = $emails;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getExternalIds()
  {
    return $this->externalIds;
  }

  public function setExternalIds($externalIds)
  {
    $this->externalIds = $externalIds;
  }

  public function getGender()
  {
    return $this->gender;
  }

  public function setGender($gender)
  {
    $this->gender = $gender;
  }

  public function getHashFunction()
  {
    return $this->hashFunction;
  }

  public function setHashFunction($hashFunction)
  {
    $this->hashFunction = $hashFunction;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getIms()
  {
    return $this->ims;
  }

  public function setIms($ims)
  {
    $this->ims = $ims;
  }

  public function getIncludeInGlobalAddressList()
  {
    return $this->includeInGlobalAddressList;
  }

  public function setIncludeInGlobalAddressList($includeInGlobalAddressList)
  {
    $this->includeInGlobalAddressList = $includeInGlobalAddressList;
  }

  public function getIpWhitelisted()
  {
    return $this->ipWhitelisted;
  }

  public function setIpWhitelisted($ipWhitelisted)
  {
    $this->ipWhitelisted = $ipWhitelisted;
  }

  public function getIsAdmin()
  {
    return $this->isAdmin;
  }

  public function setIsAdmin($isAdmin)
  {
    $this->isAdmin = $isAdmin;
  }

  public function getIsDelegatedAdmin()
  {
    return $this->isDelegatedAdmin;
  }

  public function setIsDelegatedAdmin($isDelegatedAdmin)
  {
    $this->isDelegatedAdmin = $isDelegatedAdmin;
  }

  public function getIsEnforcedIn2Sv()
  {
    return $this->isEnforcedIn2Sv;
  }

  public function setIsEnforcedIn2Sv($isEnforcedIn2Sv)
  {
    $this->isEnforcedIn2Sv = $isEnforcedIn2Sv;
  }

  public function getIsEnrolledIn2Sv()
  {
    return $this->isEnrolledIn2Sv;
  }

  public function setIsEnrolledIn2Sv($isEnrolledIn2Sv)
  {
    $this->isEnrolledIn2Sv = $isEnrolledIn2Sv;
  }

  public function getIsMailboxSetup()
  {
    return $this->isMailboxSetup;
  }

  public function setIsMailboxSetup($isMailboxSetup)
  {
    $this->isMailboxSetup = $isMailboxSetup;
  }

  public function getKeywords()
  {
    return $this->keywords;
  }

  public function setKeywords($keywords)
  {
    $this->keywords = $keywords;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLanguages()
  {
    return $this->languages;
  }

  public function setLanguages($languages)
  {
    $this->languages = $languages;
  }

  public function getLastLoginTime()
  {
    return $this->lastLoginTime;
  }

  public function setLastLoginTime($lastLoginTime)
  {
    $this->lastLoginTime = $lastLoginTime;
  }

  public function getLocations()
  {
    return $this->locations;
  }

  public function setLocations($locations)
  {
    $this->locations = $locations;
  }

  /**
   * @param Google_Service_Directory_UserName
   */
  public function setName(Google_Service_Directory_UserName $name)
  {
    $this->name = $name;
  }
  /**
   * @return Google_Service_Directory_UserName
   */
  public function getName()
  {
    return $this->name;
  }

  public function getNonEditableAliases()
  {
    return $this->nonEditableAliases;
  }

  public function setNonEditableAliases($nonEditableAliases)
  {
    $this->nonEditableAliases = $nonEditableAliases;
  }

  public function getNotes()
  {
    return $this->notes;
  }

  public function setNotes($notes)
  {
    $this->notes = $notes;
  }

  public function getOrgUnitPath()
  {
    return $this->orgUnitPath;
  }

  public function setOrgUnitPath($orgUnitPath)
  {
    $this->orgUnitPath = $orgUnitPath;
  }

  public function getOrganizations()
  {
    return $this->organizations;
  }

  public function setOrganizations($organizations)
  {
    $this->organizations = $organizations;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getPhones()
  {
    return $this->phones;
  }

  public function setPhones($phones)
  {
    $this->phones = $phones;
  }

  public function getPosixAccounts()
  {
    return $this->posixAccounts;
  }

  public function setPosixAccounts($posixAccounts)
  {
    $this->posixAccounts = $posixAccounts;
  }

  public function getPrimaryEmail()
  {
    return $this->primaryEmail;
  }

  public function setPrimaryEmail($primaryEmail)
  {
    $this->primaryEmail = $primaryEmail;
  }

  public function getRelations()
  {
    return $this->relations;
  }

  public function setRelations($relations)
  {
    $this->relations = $relations;
  }

  public function getSshPublicKeys()
  {
    return $this->sshPublicKeys;
  }

  public function setSshPublicKeys($sshPublicKeys)
  {
    $this->sshPublicKeys = $sshPublicKeys;
  }

  public function getSuspended()
  {
    return $this->suspended;
  }

  public function setSuspended($suspended)
  {
    $this->suspended = $suspended;
  }

  public function getSuspensionReason()
  {
    return $this->suspensionReason;
  }

  public function setSuspensionReason($suspensionReason)
  {
    $this->suspensionReason = $suspensionReason;
  }

  public function getThumbnailPhotoEtag()
  {
    return $this->thumbnailPhotoEtag;
  }

  public function setThumbnailPhotoEtag($thumbnailPhotoEtag)
  {
    $this->thumbnailPhotoEtag = $thumbnailPhotoEtag;
  }

  public function getThumbnailPhotoUrl()
  {
    return $this->thumbnailPhotoUrl;
  }

  public function setThumbnailPhotoUrl($thumbnailPhotoUrl)
  {
    $this->thumbnailPhotoUrl = $thumbnailPhotoUrl;
  }

  public function getWebsites()
  {
    return $this->websites;
  }

  public function setWebsites($websites)
  {
    $this->websites = $websites;
  }
}
