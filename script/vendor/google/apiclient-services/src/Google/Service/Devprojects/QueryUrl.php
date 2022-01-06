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

class Google_Service_Devprojects_QueryUrl extends Google_Collection
{
  public $fragment;
  public $kind;
  public $urlBase;
  protected $collection_key = 'queryParameters';
  protected $queryParametersType = 'Google_Service_Devprojects_TypedKeyValuePair';
  protected $queryParametersDataType = 'array';

  public function getFragment()
  {
    return $this->fragment;
  }

  public function setFragment($fragment)
  {
    $this->fragment = $fragment;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setQueryParameters($queryParameters)
  {
    $this->queryParameters = $queryParameters;
  }
  public function getQueryParameters()
  {
    return $this->queryParameters;
  }

  public function getUrlBase()
  {
    return $this->urlBase;
  }

  public function setUrlBase($urlBase)
  {
    $this->urlBase = $urlBase;
  }
}
