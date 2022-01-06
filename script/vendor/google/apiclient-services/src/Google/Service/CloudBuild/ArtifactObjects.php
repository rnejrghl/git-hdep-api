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

class Google_Service_CloudBuild_ArtifactObjects extends Google_Collection
{
  public $location;
  public $paths;
  protected $collection_key = 'paths';
  protected $timingType = 'Google_Service_CloudBuild_TimeSpan';
  protected $timingDataType = '';

  public function getLocation()
  {
    return $this->location;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getPaths()
  {
    return $this->paths;
  }

  public function setPaths($paths)
  {
    $this->paths = $paths;
  }

  /**
   * @param Google_Service_CloudBuild_TimeSpan
   */
  public function setTiming(Google_Service_CloudBuild_TimeSpan $timing)
  {
    $this->timing = $timing;
  }
  /**
   * @return Google_Service_CloudBuild_TimeSpan
   */
  public function getTiming()
  {
    return $this->timing;
  }
}