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

class Google_Service_IdentityToolkit_SetAccountInfoResponse extends Google_Collection
{
  public $displayName;
  public $email;
  public $emailVerified;
  public $expiresIn;
  public $idToken;
  public $kind;
  public $localId;
  public $newEmail;
  public $passwordHash;
  public $photoUrl;
  public $refreshToken;
  protected $collection_key = 'providerUserInfo';
  protected $providerUserInfoType = 'Google_Service_IdentityToolkit_SetAccountInfoResponseProviderUserInfo';
  protected $providerUserInfoDataType = 'array';

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

  public function getExpiresIn()
  {
    return $this->expiresIn;
  }

  public function setExpiresIn($expiresIn)
  {
    $this->expiresIn = $expiresIn;
  }

  public function getIdToken()
  {
    return $this->idToken;
  }

  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLocalId()
  {
    return $this->localId;
  }

  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }

  public function getNewEmail()
  {
    return $this->newEmail;
  }

  public function setNewEmail($newEmail)
  {
    $this->newEmail = $newEmail;
  }

  public function getPasswordHash()
  {
    return $this->passwordHash;
  }

  public function setPasswordHash($passwordHash)
  {
    $this->passwordHash = $passwordHash;
  }

  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }

  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }

  /**
   * @param Google_Service_IdentityToolkit_SetAccountInfoResponseProviderUserInfo
   */
  public function setProviderUserInfo($providerUserInfo)
  {
    $this->providerUserInfo = $providerUserInfo;
  }
  /**
   * @return Google_Service_IdentityToolkit_SetAccountInfoResponseProviderUserInfo
   */
  public function getProviderUserInfo()
  {
    return $this->providerUserInfo;
  }

  public function getRefreshToken()
  {
    return $this->refreshToken;
  }

  public function setRefreshToken($refreshToken)
  {
    $this->refreshToken = $refreshToken;
  }
}
