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

class Google_Service_JobService_SearchJobsRequest extends Google_Model
{
  public $disableRelevanceThresholding;
  public $enableBroadening;
  public $enablePreciseResultSize;
  public $jobView;
  public $mode;
  public $offset;
  public $orderBy;
  public $pageSize;
  public $pageToken;
  public $sortBy;
  protected $filtersType = 'Google_Service_JobService_JobFilters';
  protected $filtersDataType = '';
  protected $histogramFacetsType = 'Google_Service_JobService_HistogramFacets';
  protected $histogramFacetsDataType = '';
  protected $queryType = 'Google_Service_JobService_JobQuery';
  protected $queryDataType = '';
  protected $requestMetadataType = 'Google_Service_JobService_RequestMetadata';
  protected $requestMetadataDataType = '';

  public function getDisableRelevanceThresholding()
  {
    return $this->disableRelevanceThresholding;
  }

  public function setDisableRelevanceThresholding($disableRelevanceThresholding)
  {
    $this->disableRelevanceThresholding = $disableRelevanceThresholding;
  }

  public function getEnableBroadening()
  {
    return $this->enableBroadening;
  }

  public function setEnableBroadening($enableBroadening)
  {
    $this->enableBroadening = $enableBroadening;
  }

  public function getEnablePreciseResultSize()
  {
    return $this->enablePreciseResultSize;
  }

  public function setEnablePreciseResultSize($enablePreciseResultSize)
  {
    $this->enablePreciseResultSize = $enablePreciseResultSize;
  }

  /**
   * @param Google_Service_JobService_JobFilters
   */
  public function setFilters(Google_Service_JobService_JobFilters $filters)
  {
    $this->filters = $filters;
  }
  /**
   * @return Google_Service_JobService_JobFilters
   */
  public function getFilters()
  {
    return $this->filters;
  }
  /**
   * @param Google_Service_JobService_HistogramFacets
   */
  public function setHistogramFacets(Google_Service_JobService_HistogramFacets $histogramFacets)
  {
    $this->histogramFacets = $histogramFacets;
  }
  /**
   * @return Google_Service_JobService_HistogramFacets
   */
  public function getHistogramFacets()
  {
    return $this->histogramFacets;
  }

  public function getJobView()
  {
    return $this->jobView;
  }

  public function setJobView($jobView)
  {
    $this->jobView = $jobView;
  }

  public function getMode()
  {
    return $this->mode;
  }

  public function setMode($mode)
  {
    $this->mode = $mode;
  }

  public function getOffset()
  {
    return $this->offset;
  }

  public function setOffset($offset)
  {
    $this->offset = $offset;
  }

  public function getOrderBy()
  {
    return $this->orderBy;
  }

  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
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

  /**
   * @param Google_Service_JobService_JobQuery
   */
  public function setQuery(Google_Service_JobService_JobQuery $query)
  {
    $this->query = $query;
  }
  /**
   * @return Google_Service_JobService_JobQuery
   */
  public function getQuery()
  {
    return $this->query;
  }
  /**
   * @param Google_Service_JobService_RequestMetadata
   */
  public function setRequestMetadata(Google_Service_JobService_RequestMetadata $requestMetadata)
  {
    $this->requestMetadata = $requestMetadata;
  }
  /**
   * @return Google_Service_JobService_RequestMetadata
   */
  public function getRequestMetadata()
  {
    return $this->requestMetadata;
  }

  public function getSortBy()
  {
    return $this->sortBy;
  }

  public function setSortBy($sortBy)
  {
    $this->sortBy = $sortBy;
  }
}
