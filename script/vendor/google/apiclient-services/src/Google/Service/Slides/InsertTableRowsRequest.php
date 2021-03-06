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

class Google_Service_Slides_InsertTableRowsRequest extends Google_Model
{
  public $insertBelow;
  public $number;
  public $tableObjectId;
  protected $cellLocationType = 'Google_Service_Slides_TableCellLocation';
  protected $cellLocationDataType = '';

  /**
   * @param Google_Service_Slides_TableCellLocation
   */
  public function setCellLocation(Google_Service_Slides_TableCellLocation $cellLocation)
  {
    $this->cellLocation = $cellLocation;
  }
  /**
   * @return Google_Service_Slides_TableCellLocation
   */
  public function getCellLocation()
  {
    return $this->cellLocation;
  }

  public function getInsertBelow()
  {
    return $this->insertBelow;
  }

  public function setInsertBelow($insertBelow)
  {
    $this->insertBelow = $insertBelow;
  }

  public function getNumber()
  {
    return $this->number;
  }

  public function setNumber($number)
  {
    $this->number = $number;
  }

  public function getTableObjectId()
  {
    return $this->tableObjectId;
  }

  public function setTableObjectId($tableObjectId)
  {
    $this->tableObjectId = $tableObjectId;
  }
}
