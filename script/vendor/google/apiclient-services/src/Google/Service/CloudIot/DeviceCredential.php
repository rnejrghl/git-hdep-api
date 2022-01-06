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

class Google_Service_CloudIot_DeviceCredential extends Google_Model
{
  public $expirationTime;
  protected $publicKeyType = 'Google_Service_CloudIot_PublicKeyCredential';
  protected $publicKeyDataType = '';

  public function getExpirationTime()
  {
    return $this->expirationTime;
  }

  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }

  /**
   * @param Google_Service_CloudIot_PublicKeyCredential
   */
  public function setPublicKey(Google_Service_CloudIot_PublicKeyCredential $publicKey)
  {
    $this->publicKey = $publicKey;
  }
  /**
   * @return Google_Service_CloudIot_PublicKeyCredential
   */
  public function getPublicKey()
  {
    return $this->publicKey;
  }
}
