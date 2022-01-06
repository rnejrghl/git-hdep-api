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

class Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySetAccountInfoRequest extends Google_Collection
{
  public $captchaChallenge;
  public $captchaResponse;
  public $createdAt;
  public $customAttributes;
  public $delegatedProjectNumber;
  public $deleteAttribute;
  public $deleteProvider;
  public $disableUser;
  public $displayName;
  public $email;
  public $emailVerified;
  public $idToken;
  public $instanceId;
  public $lastLoginAt;
  public $localId;
  public $oobCode;
  public $password;
  public $phoneNumber;
  public $photoUrl;
  public $provider;
  public $returnSecureToken;
  public $upgradeToFederatedLogin;
  public $validSince;
  protected $collection_key = 'provider';

  public function getCaptchaChallenge()
  {
    return $this->captchaChallenge;
  }

  public function setCaptchaChallenge($captchaChallenge)
  {
    $this->captchaChallenge = $captchaChallenge;
  }

  public function getCaptchaResponse()
  {
    return $this->captchaResponse;
  }

  public function setCaptchaResponse($captchaResponse)
  {
    $this->captchaResponse = $captchaResponse;
  }

  public function getCreatedAt()
  {
    return $this->createdAt;
  }

  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }

  public function getCustomAttributes()
  {
    return $this->customAttributes;
  }

  public function setCustomAttributes($customAttributes)
  {
    $this->customAttributes = $customAttributes;
  }

  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }

  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }

  public function getDeleteAttribute()
  {
    return $this->deleteAttribute;
  }

  public function setDeleteAttribute($deleteAttribute)
  {
    $this->deleteAttribute = $deleteAttribute;
  }

  public function getDeleteProvider()
  {
    return $this->deleteProvider;
  }

  public function setDeleteProvider($deleteProvider)
  {
    $this->deleteProvider = $deleteProvider;
  }

  public function getDisableUser()
  {
    return $this->disableUser;
  }

  public function setDisableUser($disableUser)
  {
    $this->disableUser = $disableUser;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmailVerified()
  {
    return $this->emailVerified;
  }

  public function setEmailVerified($emailVerified)
  {
    $this->emailVerified = $emailVerified;
  }

  public function getIdToken()
  {
    return $this->idToken;
  }

  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }

  public function getInstanceId()
  {
    return $this->instanceId;
  }

  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }

  public function getLastLoginAt()
  {
    return $this->lastLoginAt;
  }

  public function setLastLoginAt($lastLoginAt)
  {
    $this->lastLoginAt = $lastLoginAt;
  }

  public function getLocalId()
  {
    return $this->localId;
  }

  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }

  public function getOobCode()
  {
    return $this->oobCode;
  }

  public function setOobCode($oobCode)
  {
    $this->oobCode = $oobCode;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }

  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }

  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }

  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }

  public function getProvider()
  {
    return $this->provider;
  }

  public function setProvider($provider)
  {
    $this->provider = $provider;
  }

  public function getReturnSecureToken()
  {
    return $this->returnSecureToken;
  }

  public function setReturnSecureToken($returnSecureToken)
  {
    $this->returnSecureToken = $returnSecureToken;
  }

  public function getUpgradeToFederatedLogin()
  {
    return $this->upgradeToFederatedLogin;
  }

  public function setUpgradeToFederatedLogin($upgradeToFederatedLogin)
  {
    $this->upgradeToFederatedLogin = $upgradeToFederatedLogin;
  }

  public function getValidSince()
  {
    return $this->validSince;
  }

  public function setValidSince($validSince)
  {
    $this->validSince = $validSince;
  }
}
