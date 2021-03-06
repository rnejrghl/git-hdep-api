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

class Google_Service_Directory_Domains2 extends Google_Collection
{
  public $etag;
  public $kind;
  protected $collection_key = 'domains';
  protected $domainsType = 'Google_Service_Directory_Domains';
  protected $domainsDataType = 'array';

  /**
   * @param Google_Service_Directory_Domains
   */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /**
   * @return Google_Service_Directory_Domains
   */
  public function getDomains()
  {
    return $this->domains;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}
