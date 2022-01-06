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

class Google_Service_PhotosLibrary_SearchMediaItemsRequest extends Google_Model
{
  public $albumId;
  public $pageSize;
  public $pageToken;
  protected $filtersType = 'Google_Service_PhotosLibrary_Filters';
  protected $filtersDataType = '';

  public function getAlbumId()
  {
    return $this->albumId;
  }

  public function setAlbumId($albumId)
  {
    $this->albumId = $albumId;
  }

  /**
   * @param Google_Service_PhotosLibrary_Filters
   */
  public function setFilters(Google_Service_PhotosLibrary_Filters $filters)
  {
    $this->filters = $filters;
  }
  /**
   * @return Google_Service_PhotosLibrary_Filters
   */
  public function getFilters()
  {
    return $this->filters;
  }

  public function getPageSize()
  {
    return $this->pageSize;
  }

  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }

  public function getPageToken()
  {
    return $this->pageToken;
  }

  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
}