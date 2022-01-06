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

class Google_Service_Sheets_UpdateValuesByDataFilterResponse extends Google_Model
{
  public $updatedCells;
  public $updatedColumns;
  public $updatedRange;
  public $updatedRows;
  protected $dataFilterType = 'Google_Service_Sheets_DataFilter';
  protected $dataFilterDataType = '';
  protected $updatedDataType = 'Google_Service_Sheets_ValueRange';
  protected $updatedDataDataType = '';

  /**
   * @param Google_Service_Sheets_DataFilter
   */
  public function setDataFilter(Google_Service_Sheets_DataFilter $dataFilter)
  {
    $this->dataFilter = $dataFilter;
  }
  /**
   * @return Google_Service_Sheets_DataFilter
   */
  public function getDataFilter()
  {
    return $this->dataFilter;
  }

  public function getUpdatedCells()
  {
    return $this->updatedCells;
  }

  public function setUpdatedCells($updatedCells)
  {
    $this->updatedCells = $updatedCells;
  }

  public function getUpdatedColumns()
  {
    return $this->updatedColumns;
  }

  public function setUpdatedColumns($updatedColumns)
  {
    $this->updatedColumns = $updatedColumns;
  }

  /**
   * @param Google_Service_Sheets_ValueRange
   */
  public function setUpdatedData(Google_Service_Sheets_ValueRange $updatedData)
  {
    $this->updatedData = $updatedData;
  }
  /**
   * @return Google_Service_Sheets_ValueRange
   */
  public function getUpdatedData()
  {
    return $this->updatedData;
  }

  public function getUpdatedRange()
  {
    return $this->updatedRange;
  }

  public function setUpdatedRange($updatedRange)
  {
    $this->updatedRange = $updatedRange;
  }

  public function getUpdatedRows()
  {
    return $this->updatedRows;
  }

  public function setUpdatedRows($updatedRows)
  {
    $this->updatedRows = $updatedRows;
  }
}
