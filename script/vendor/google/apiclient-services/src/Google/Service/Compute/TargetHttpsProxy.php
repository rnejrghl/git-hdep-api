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

class Google_Service_Compute_TargetHttpsProxy extends Google_Collection
{
  public $creationTimestamp;
  public $description;
  public $id;
  public $kind;
  public $name;
  public $quicOverride;
  public $selfLink;
  public $sslCertificates;
  public $sslPolicy;
  public $urlMap;
  protected $collection_key = 'sslCertificates';

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getQuicOverride()
  {
    return $this->quicOverride;
  }

  public function setQuicOverride($quicOverride)
  {
    $this->quicOverride = $quicOverride;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSslCertificates()
  {
    return $this->sslCertificates;
  }

  public function setSslCertificates($sslCertificates)
  {
    $this->sslCertificates = $sslCertificates;
  }

  public function getSslPolicy()
  {
    return $this->sslPolicy;
  }

  public function setSslPolicy($sslPolicy)
  {
    $this->sslPolicy = $sslPolicy;
  }

  public function getUrlMap()
  {
    return $this->urlMap;
  }

  public function setUrlMap($urlMap)
  {
    $this->urlMap = $urlMap;
  }
}
