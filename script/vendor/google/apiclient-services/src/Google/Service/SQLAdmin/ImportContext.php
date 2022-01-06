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

class Google_Service_SQLAdmin_ImportContext extends Google_Model
{
  public $database;
  public $fileType;
  public $importUser;
  public $kind;
  public $uri;
  protected $csvImportOptionsType = 'Google_Service_SQLAdmin_ImportContextCsvImportOptions';
  protected $csvImportOptionsDataType = '';

  /**
   * @param Google_Service_SQLAdmin_ImportContextCsvImportOptions
   */
  public function setCsvImportOptions(Google_Service_SQLAdmin_ImportContextCsvImportOptions $csvImportOptions)
  {
    $this->csvImportOptions = $csvImportOptions;
  }
  /**
   * @return Google_Service_SQLAdmin_ImportContextCsvImportOptions
   */
  public function getCsvImportOptions()
  {
    return $this->csvImportOptions;
  }

  public function getDatabase()
  {
    return $this->database;
  }

  public function setDatabase($database)
  {
    $this->database = $database;
  }

  public function getFileType()
  {
    return $this->fileType;
  }

  public function setFileType($fileType)
  {
    $this->fileType = $fileType;
  }

  public function getImportUser()
  {
    return $this->importUser;
  }

  public function setImportUser($importUser)
  {
    $this->importUser = $importUser;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
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
