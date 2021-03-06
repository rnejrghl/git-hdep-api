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

class Google_Service_Customsearch_SearchSearchInformation extends Google_Model
{
  public $formattedSearchTime;
  public $formattedTotalResults;
  public $searchTime;
  public $totalResults;

  public function getFormattedSearchTime()
  {
    return $this->formattedSearchTime;
  }

  public function setFormattedSearchTime($formattedSearchTime)
  {
    $this->formattedSearchTime = $formattedSearchTime;
  }

  public function getFormattedTotalResults()
  {
    return $this->formattedTotalResults;
  }

  public function setFormattedTotalResults($formattedTotalResults)
  {
    $this->formattedTotalResults = $formattedTotalResults;
  }

  public function getSearchTime()
  {
    return $this->searchTime;
  }

  public function setSearchTime($searchTime)
  {
    $this->searchTime = $searchTime;
  }

  public function getTotalResults()
  {
    return $this->totalResults;
  }

  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
}
