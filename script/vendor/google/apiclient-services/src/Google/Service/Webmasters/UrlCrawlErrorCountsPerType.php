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

class Google_Service_Webmasters_UrlCrawlErrorCountsPerType extends Google_Collection
{
  public $category;
  public $platform;
  protected $collection_key = 'entries';
  protected $entriesType = 'Google_Service_Webmasters_UrlCrawlErrorCount';
  protected $entriesDataType = 'array';

  public function getCategory()
  {
    return $this->category;
  }

  public function setCategory($category)
  {
    $this->category = $category;
  }

  /**
   * @param Google_Service_Webmasters_UrlCrawlErrorCount
   */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /**
   * @return Google_Service_Webmasters_UrlCrawlErrorCount
   */
  public function getEntries()
  {
    return $this->entries;
  }

  public function getPlatform()
  {
    return $this->platform;
  }

  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
}
