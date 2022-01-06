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

class Google_Service_People_PersonMetadata extends Google_Collection
{
  public $deleted;
  public $linkedPeopleResourceNames;
  public $objectType;
  public $previousResourceNames;
  protected $collection_key = 'sources';
  protected $sourcesType = 'Google_Service_People_Source';
  protected $sourcesDataType = 'array';

  public function getDeleted()
  {
    return $this->deleted;
  }

  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }

  public function getLinkedPeopleResourceNames()
  {
    return $this->linkedPeopleResourceNames;
  }

  public function setLinkedPeopleResourceNames($linkedPeopleResourceNames)
  {
    $this->linkedPeopleResourceNames = $linkedPeopleResourceNames;
  }

  public function getObjectType()
  {
    return $this->objectType;
  }

  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }

  public function getPreviousResourceNames()
  {
    return $this->previousResourceNames;
  }

  public function setPreviousResourceNames($previousResourceNames)
  {
    $this->previousResourceNames = $previousResourceNames;
  }

  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  public function getSources()
  {
    return $this->sources;
  }
}
