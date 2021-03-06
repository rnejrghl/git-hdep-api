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

class Google_Service_Storage_Policy extends Google_Collection
{
  public $etag;
  public $kind;
  public $resourceId;
  protected $collection_key = 'bindings';
  protected $bindingsType = 'Google_Service_Storage_PolicyBindings';
  protected $bindingsDataType = 'array';

  /**
   * @param Google_Service_Storage_PolicyBindings
   */
  public function setBindings($bindings)
  {
    $this->bindings = $bindings;
  }
  /**
   * @return Google_Service_Storage_PolicyBindings
   */
  public function getBindings()
  {
    return $this->bindings;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getResourceId()
  {
    return $this->resourceId;
  }

  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
}
