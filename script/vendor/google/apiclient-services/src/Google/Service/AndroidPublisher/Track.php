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

class Google_Service_AndroidPublisher_Track extends Google_Collection
{
  public $track;
  protected $collection_key = 'releases';
  protected $releasesType = 'Google_Service_AndroidPublisher_TrackRelease';
  protected $releasesDataType = 'array';

  /**
   * @param Google_Service_AndroidPublisher_TrackRelease
   */
  public function setReleases($releases)
  {
    $this->releases = $releases;
  }
  /**
   * @return Google_Service_AndroidPublisher_TrackRelease
   */
  public function getReleases()
  {
    return $this->releases;
  }

  public function getTrack()
  {
    return $this->track;
  }

  public function setTrack($track)
  {
    $this->track = $track;
  }
}
