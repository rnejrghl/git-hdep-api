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

class Google_Service_SQLAdmin_ExportContextSqlExportOptions extends Google_Collection
{
  public $schemaOnly;
  public $tables;
  protected $collection_key = 'tables';

  public function getSchemaOnly()
  {
    return $this->schemaOnly;
  }

  public function setSchemaOnly($schemaOnly)
  {
    $this->schemaOnly = $schemaOnly;
  }

  public function getTables()
  {
    return $this->tables;
  }

  public function setTables($tables)
  {
    $this->tables = $tables;
  }
}
