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

class Google_Service_DLP_GooglePrivacyDlpV2OutputStorageConfig extends Google_Model
{
  public $outputSchema;
  protected $tableType = 'Google_Service_DLP_GooglePrivacyDlpV2BigQueryTable';
  protected $tableDataType = '';

  public function getOutputSchema()
  {
    return $this->outputSchema;
  }

  public function setOutputSchema($outputSchema)
  {
    $this->outputSchema = $outputSchema;
  }

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2BigQueryTable
   */
  public function setTable(Google_Service_DLP_GooglePrivacyDlpV2BigQueryTable $table)
  {
    $this->table = $table;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2BigQueryTable
   */
  public function getTable()
  {
    return $this->table;
  }
}
