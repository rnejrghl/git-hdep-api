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

class Google_Service_Datastore_GoogleDatastoreAdminV1Index extends Google_Collection
{
  public $ancestor;
  public $indexId;
  public $kind;
  public $projectId;
  public $state;
  protected $collection_key = 'properties';
  protected $propertiesType = 'Google_Service_Datastore_GoogleDatastoreAdminV1IndexedProperty';
  protected $propertiesDataType = 'array';

  public function getAncestor()
  {
    return $this->ancestor;
  }

  public function setAncestor($ancestor)
  {
    $this->ancestor = $ancestor;
  }

  public function getIndexId()
  {
    return $this->indexId;
  }

  public function setIndexId($indexId)
  {
    $this->indexId = $indexId;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getProjectId()
  {
    return $this->projectId;
  }

  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }

  /**
   * @param Google_Service_Datastore_GoogleDatastoreAdminV1IndexedProperty
   */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return Google_Service_Datastore_GoogleDatastoreAdminV1IndexedProperty
   */
  public function getProperties()
  {
    return $this->properties;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }
}
