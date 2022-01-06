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

class Google_Service_SQLAdmin_ExportContext extends Google_Collection
{
  public $databases;
  public $fileType;
  public $kind;
  public $uri;
  protected $collection_key = 'databases';
  protected $csvExportOptionsType = 'Google_Service_SQLAdmin_ExportContextCsvExportOptions';
  protected $csvExportOptionsDataType = '';
  protected $sqlExportOptionsType = 'Google_Service_SQLAdmin_ExportContextSqlExportOptions';
  protected $sqlExportOptionsDataType = '';

  /**
   * @param Google_Service_SQLAdmin_ExportContextCsvExportOptions
   */
  public function setCsvExportOptions(Google_Service_SQLAdmin_ExportContextCsvExportOptions $csvExportOptions)
  {
    $this->csvExportOptions = $csvExportOptions;
  }
  /**
   * @return Google_Service_SQLAdmin_ExportContextCsvExportOptions
   */
  public function getCsvExportOptions()
  {
    return $this->csvExportOptions;
  }

  public function getDatabases()
  {
    return $this->databases;
  }

  public function setDatabases($databases)
  {
    $this->databases = $databases;
  }

  public function getFileType()
  {
    return $this->fileType;
  }

  public function setFileType($fileType)
  {
    $this->fileType = $fileType;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  /**
   * @param Google_Service_SQLAdmin_ExportContextSqlExportOptions
   */
  public function setSqlExportOptions(Google_Service_SQLAdmin_ExportContextSqlExportOptions $sqlExportOptions)
  {
    $this->sqlExportOptions = $sqlExportOptions;
  }
  /**
   * @return Google_Service_SQLAdmin_ExportContextSqlExportOptions
   */
  public function getSqlExportOptions()
  {
    return $this->sqlExportOptions;
  }

  public function getUri()
  {
    return $this->uri;
  }

  public function setUri($uri)
  {
    $this->uri = $uri;
  }
}
