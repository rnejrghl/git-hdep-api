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

class Google_Service_Compute_SslPoliciesList extends Google_Collection
{
  public $id;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  protected $collection_key = 'items';
  protected $itemsType = 'Google_Service_Compute_SslPolicy';
  protected $itemsDataType = 'array';
  protected $warningType = 'Google_Service_Compute_SslPoliciesListWarning';
  protected $warningDataType = '';

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  /**
   * @param Google_Service_Compute_SslPolicy
   */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /**
   * @return Google_Service_Compute_SslPolicy
   */
  public function getItems()
  {
    return $this->items;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  /**
   * @param Google_Service_Compute_SslPoliciesListWarning
   */
  public function setWarning(Google_Service_Compute_SslPoliciesListWarning $warning)
  {
    $this->warning = $warning;
  }
  /**
   * @return Google_Service_Compute_SslPoliciesListWarning
   */
  public function getWarning()
  {
    return $this->warning;
  }
}
