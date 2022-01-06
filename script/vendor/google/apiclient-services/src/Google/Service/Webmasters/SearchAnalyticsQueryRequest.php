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

class Google_Service_Webmasters_SearchAnalyticsQueryRequest extends Google_Collection
{
  public $aggregationType;
  public $dimensions;
  public $endDate;
  public $rowLimit;
  public $searchType;
  public $startDate;
  public $startRow;
  protected $collection_key = 'dimensions';
  protected $dimensionFilterGroupsType = 'Google_Service_Webmasters_ApiDimensionFilterGroup';
  protected $dimensionFilterGroupsDataType = 'array';

  public function getAggregationType()
  {
    return $this->aggregationType;
  }

  public function setAggregationType($aggregationType)
  {
    $this->aggregationType = $aggregationType;
  }

  /**
   * @param Google_Service_Webmasters_ApiDimensionFilterGroup
   */
  public function setDimensionFilterGroups($dimensionFilterGroups)
  {
    $this->dimensionFilterGroups = $dimensionFilterGroups;
  }
  /**
   * @return Google_Service_Webmasters_ApiDimensionFilterGroup
   */
  public function getDimensionFilterGroups()
  {
    return $this->dimensionFilterGroups;
  }

  public function getDimensions()
  {
    return $this->dimensions;
  }

  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }

  public function getEndDate()
  {
    return $this->endDate;
  }

  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }

  public function getRowLimit()
  {
    return $this->rowLimit;
  }

  public function setRowLimit($rowLimit)
  {
    $this->rowLimit = $rowLimit;
  }

  public function getSearchType()
  {
    return $this->searchType;
  }

  public function setSearchType($searchType)
  {
    $this->searchType = $searchType;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }

  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }

  public function getStartRow()
  {
    return $this->startRow;
  }

  public function setStartRow($startRow)
  {
    $this->startRow = $startRow;
  }
}
