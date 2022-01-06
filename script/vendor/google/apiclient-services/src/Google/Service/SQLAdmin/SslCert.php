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

class Google_Service_SQLAdmin_SslCert extends Google_Model
{
  public $cert;
  public $certSerialNumber;
  public $commonName;
  public $createTime;
  public $expirationTime;
  public $instance;
  public $kind;
  public $selfLink;
  public $sha1Fingerprint;

  public function getCert()
  {
    return $this->cert;
  }

  public function setCert($cert)
  {
    $this->cert = $cert;
  }

  public function getCertSerialNumber()
  {
    return $this->certSerialNumber;
  }

  public function setCertSerialNumber($certSerialNumber)
  {
    $this->certSerialNumber = $certSerialNumber;
  }

  public function getCommonName()
  {
    return $this->commonName;
  }

  public function setCommonName($commonName)
  {
    $this->commonName = $commonName;
  }

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  public function getExpirationTime()
  {
    return $this->expirationTime;
  }

  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }

  public function getInstance()
  {
    return $this->instance;
  }

  public function setInstance($instance)
  {
    $this->instance = $instance;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSha1Fingerprint()
  {
    return $this->sha1Fingerprint;
  }

  public function setSha1Fingerprint($sha1Fingerprint)
  {
    $this->sha1Fingerprint = $sha1Fingerprint;
  }
}
