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

class Google_Service_AndroidManagement_EnrollmentToken extends Google_Model
{
  public $additionalData;
  public $duration;
  public $expirationTimestamp;
  public $name;
  public $oneTimeOnly;
  public $policyName;
  public $qrCode;
  public $value;
  protected $userType = 'Google_Service_AndroidManagement_User';
  protected $userDataType = '';

  public function getAdditionalData()
  {
    return $this->additionalData;
  }

  public function setAdditionalData($additionalData)
  {
    $this->additionalData = $additionalData;
  }

  public function getDuration()
  {
    return $this->duration;
  }

  public function setDuration($duration)
  {
    $this->duration = $duration;
  }

  public function getExpirationTimestamp()
  {
    return $this->expirationTimestamp;
  }

  public function setExpirationTimestamp($expirationTimestamp)
  {
    $this->expirationTimestamp = $expirationTimestamp;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getOneTimeOnly()
  {
    return $this->oneTimeOnly;
  }

  public function setOneTimeOnly($oneTimeOnly)
  {
    $this->oneTimeOnly = $oneTimeOnly;
  }

  public function getPolicyName()
  {
    return $this->policyName;
  }

  public function setPolicyName($policyName)
  {
    $this->policyName = $policyName;
  }

  public function getQrCode()
  {
    return $this->qrCode;
  }

  public function setQrCode($qrCode)
  {
    $this->qrCode = $qrCode;
  }

  /**
   * @param Google_Service_AndroidManagement_User
   */
  public function setUser(Google_Service_AndroidManagement_User $user)
  {
    $this->user = $user;
  }
  /**
   * @return Google_Service_AndroidManagement_User
   */
  public function getUser()
  {
    return $this->user;
  }

  public function getValue()
  {
    return $this->value;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }
}
