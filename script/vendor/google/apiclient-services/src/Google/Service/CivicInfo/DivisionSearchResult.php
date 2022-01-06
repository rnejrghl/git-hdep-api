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

class Google_Service_CivicInfo_DivisionSearchResult extends Google_Collection
{
  public $aliases;
  public $name;
  public $ocdId;
  protected $collection_key = 'aliases';

  public function getAliases()
  {
    return $this->aliases;
  }

  public function setAliases($aliases)
  {
    $this->aliases = $aliases;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getOcdId()
  {
    return $this->ocdId;
  }

  public function setOcdId($ocdId)
  {
    $this->ocdId = $ocdId;
  }
}
