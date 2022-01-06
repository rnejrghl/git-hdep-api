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

class Google_Service_WebSecurityScanner_OutdatedLibrary extends Google_Collection
{
  public $learnMoreUrls;
  public $libraryName;
  public $version;
  protected $collection_key = 'learnMoreUrls';

  public function getLearnMoreUrls()
  {
    return $this->learnMoreUrls;
  }

  public function setLearnMoreUrls($learnMoreUrls)
  {
    $this->learnMoreUrls = $learnMoreUrls;
  }

  public function getLibraryName()
  {
    return $this->libraryName;
  }

  public function setLibraryName($libraryName)
  {
    $this->libraryName = $libraryName;
  }

  public function getVersion()
  {
    return $this->version;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }
}
