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

class Google_Service_PlusDomains_Audience extends Google_Model
{
  public $etag;
  public $kind;
  public $memberCount;
  public $visibility;
  protected $itemType = 'Google_Service_PlusDomains_PlusDomainsAclentryResource';
  protected $itemDataType = '';

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  /**
   * @param Google_Service_PlusDomains_PlusDomainsAclentryResource
   */
  public function setItem(Google_Service_PlusDomains_PlusDomainsAclentryResource $item)
  {
    $this->item = $item;
  }
  /**
   * @return Google_Service_PlusDomains_PlusDomainsAclentryResource
   */
  public function getItem()
  {
    return $this->item;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getMemberCount()
  {
    return $this->memberCount;
  }

  public function setMemberCount($memberCount)
  {
    $this->memberCount = $memberCount;
  }

  public function getVisibility()
  {
    return $this->visibility;
  }

  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
}
