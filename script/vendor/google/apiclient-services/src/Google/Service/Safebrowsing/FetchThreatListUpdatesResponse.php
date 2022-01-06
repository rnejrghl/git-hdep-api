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

class Google_Service_Safebrowsing_FetchThreatListUpdatesResponse extends Google_Collection
{
  public $minimumWaitDuration;
  protected $collection_key = 'listUpdateResponses';
  protected $listUpdateResponsesType = 'Google_Service_Safebrowsing_ListUpdateResponse';
  protected $listUpdateResponsesDataType = 'array';

  /**
   * @param Google_Service_Safebrowsing_ListUpdateResponse
   */
  public function setListUpdateResponses($listUpdateResponses)
  {
    $this->listUpdateResponses = $listUpdateResponses;
  }
  /**
   * @return Google_Service_Safebrowsing_ListUpdateResponse
   */
  public function getListUpdateResponses()
  {
    return $this->listUpdateResponses;
  }

  public function getMinimumWaitDuration()
  {
    return $this->minimumWaitDuration;
  }

  public function setMinimumWaitDuration($minimumWaitDuration)
  {
    $this->minimumWaitDuration = $minimumWaitDuration;
  }
}