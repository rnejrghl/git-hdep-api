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

class Google_Service_Dns_DnsKey extends Google_Collection
{
  public $algorithm;
  public $creationTime;
  public $description;
  public $id;
  public $isActive;
  public $keyLength;
  public $keyTag;
  public $kind;
  public $publicKey;
  public $type;
  protected $collection_key = 'digests';
  protected $digestsType = 'Google_Service_Dns_DnsKeyDigest';
  protected $digestsDataType = 'array';

  public function getAlgorithm()
  {
    return $this->algorithm;
  }

  public function setAlgorithm($algorithm)
  {
    $this->algorithm = $algorithm;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  /**
   * @param Google_Service_Dns_DnsKeyDigest
   */
  public function setDigests($digests)
  {
    $this->digests = $digests;
  }
  /**
   * @return Google_Service_Dns_DnsKeyDigest
   */
  public function getDigests()
  {
    return $this->digests;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getIsActive()
  {
    return $this->isActive;
  }

  public function setIsActive($isActive)
  {
    $this->isActive = $isActive;
  }

  public function getKeyLength()
  {
    return $this->keyLength;
  }

  public function setKeyLength($keyLength)
  {
    $this->keyLength = $keyLength;
  }

  public function getKeyTag()
  {
    return $this->keyTag;
  }

  public function setKeyTag($keyTag)
  {
    $this->keyTag = $keyTag;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getPublicKey()
  {
    return $this->publicKey;
  }

  public function setPublicKey($publicKey)
  {
    $this->publicKey = $publicKey;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }
}
