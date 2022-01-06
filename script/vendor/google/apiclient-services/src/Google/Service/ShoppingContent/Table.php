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

class Google_Service_ShoppingContent_Table extends Google_Collection
{
  public $name;
  protected $collection_key = 'rows';
  protected $columnHeadersType = 'Google_Service_ShoppingContent_Headers';
  protected $columnHeadersDataType = '';
  protected $rowHeadersType = 'Google_Service_ShoppingContent_Headers';
  protected $rowHeadersDataType = '';
  protected $rowsType = 'Google_Service_ShoppingContent_Row';
  protected $rowsDataType = 'array';

  /**
   * @param Google_Service_ShoppingContent_Headers
   */
  public function setColumnHeaders(Google_Service_ShoppingContent_Headers $columnHeaders)
  {
    $this->columnHeaders = $columnHeaders;
  }
  /**
   * @return Google_Service_ShoppingContent_Headers
   */
  public function getColumnHeaders()
  {
    return $this->columnHeaders;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @param Google_Service_ShoppingContent_Headers
   */
  public function setRowHeaders(Google_Service_ShoppingContent_Headers $rowHeaders)
  {
    $this->rowHeaders = $rowHeaders;
  }
  /**
   * @return Google_Service_ShoppingContent_Headers
   */
  public function getRowHeaders()
  {
    return $this->rowHeaders;
  }
  /**
   * @param Google_Service_ShoppingContent_Row
   */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /**
   * @return Google_Service_ShoppingContent_Row
   */
  public function getRows()
  {
    return $this->rows;
  }
}