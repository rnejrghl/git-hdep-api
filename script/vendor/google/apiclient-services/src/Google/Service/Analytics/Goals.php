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

class Google_Service_Analytics_Goals extends Google_Collection
{
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  public $startIndex;
  public $totalResults;
  public $username;
  protected $collection_key = 'items';
  protected $itemsType = 'Google_Service_Analytics_Goal';
  protected $itemsDataType = 'array';

  /**
   * @param Google_Service_Analytics_Goal
   */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /**
   * @return Google_Service_Analytics_Goal
   */
  public function getItems()
  {
    return $this->items;
  }

  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
  }

  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getNextLink()
  {
    return $this->nextLink;
  }

  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }

  public function getPreviousLink()
  {
    return $this->previousLink;
  }

  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }

  public function getStartIndex()
  {
    return $this->startIndex;
  }

  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }

  public function getTotalResults()
  {
    return $this->totalResults;
  }

  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function setUsername($username)
  {
    $this->username = $username;
  }
}
