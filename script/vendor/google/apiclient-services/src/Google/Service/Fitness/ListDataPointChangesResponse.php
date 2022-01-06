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

class Google_Service_Fitness_ListDataPointChangesResponse extends Google_Collection
{
  public $dataSourceId;
  public $nextPageToken;
  protected $collection_key = 'insertedDataPoint';
  protected $deletedDataPointType = 'Google_Service_Fitness_DataPoint';
  protected $deletedDataPointDataType = 'array';
  protected $insertedDataPointType = 'Google_Service_Fitness_DataPoint';
  protected $insertedDataPointDataType = 'array';

  public function getDataSourceId()
  {
    return $this->dataSourceId;
  }

  public function setDataSourceId($dataSourceId)
  {
    $this->dataSourceId = $dataSourceId;
  }

  /**
   * @param Google_Service_Fitness_DataPoint
   */
  public function setDeletedDataPoint($deletedDataPoint)
  {
    $this->deletedDataPoint = $deletedDataPoint;
  }
  /**
   * @return Google_Service_Fitness_DataPoint
   */
  public function getDeletedDataPoint()
  {
    return $this->deletedDataPoint;
  }
  /**
   * @param Google_Service_Fitness_DataPoint
   */
  public function setInsertedDataPoint($insertedDataPoint)
  {
    $this->insertedDataPoint = $insertedDataPoint;
  }
  /**
   * @return Google_Service_Fitness_DataPoint
   */
  public function getInsertedDataPoint()
  {
    return $this->insertedDataPoint;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
}
