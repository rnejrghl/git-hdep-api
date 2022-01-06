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

class Google_Service_YouTubeAnalytics_ErrorProto extends Google_Collection
{
  public $argument;
  public $code;
  public $debugInfo;
  public $domain;
  public $externalErrorMessage;
  public $location;
  public $locationType;
  protected $collection_key = 'argument';

  public function getArgument()
  {
    return $this->argument;
  }

  public function setArgument($argument)
  {
    $this->argument = $argument;
  }

  public function getCode()
  {
    return $this->code;
  }

  public function setCode($code)
  {
    $this->code = $code;
  }

  public function getDebugInfo()
  {
    return $this->debugInfo;
  }

  public function setDebugInfo($debugInfo)
  {
    $this->debugInfo = $debugInfo;
  }

  public function getDomain()
  {
    return $this->domain;
  }

  public function setDomain($domain)
  {
    $this->domain = $domain;
  }

  public function getExternalErrorMessage()
  {
    return $this->externalErrorMessage;
  }

  public function setExternalErrorMessage($externalErrorMessage)
  {
    $this->externalErrorMessage = $externalErrorMessage;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getLocationType()
  {
    return $this->locationType;
  }

  public function setLocationType($locationType)
  {
    $this->locationType = $locationType;
  }
}
