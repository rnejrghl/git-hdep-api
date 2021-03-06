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

class Google_Service_Datastore_GoogleDatastoreAdminV1ImportEntitiesRequest extends Google_Model
{
  public $inputUrl;
  public $labels;
  protected $entityFilterType = 'Google_Service_Datastore_GoogleDatastoreAdminV1EntityFilter';
  protected $entityFilterDataType = '';

  /**
   * @param Google_Service_Datastore_GoogleDatastoreAdminV1EntityFilter
   */
  public function setEntityFilter(Google_Service_Datastore_GoogleDatastoreAdminV1EntityFilter $entityFilter)
  {
    $this->entityFilter = $entityFilter;
  }
  /**
   * @return Google_Service_Datastore_GoogleDatastoreAdminV1EntityFilter
   */
  public function getEntityFilter()
  {
    return $this->entityFilter;
  }

  public function getInputUrl()
  {
    return $this->inputUrl;
  }

  public function setInputUrl($inputUrl)
  {
    $this->inputUrl = $inputUrl;
  }

  public function getLabels()
  {
    return $this->labels;
  }

  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
}
