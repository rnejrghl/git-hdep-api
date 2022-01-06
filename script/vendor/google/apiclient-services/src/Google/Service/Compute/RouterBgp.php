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

class Google_Service_Compute_RouterBgp extends Google_Collection
{
  public $advertiseMode;
  public $advertisedGroups;
  public $asn;
  protected $collection_key = 'advertisedIpRanges';
  protected $advertisedIpRangesType = 'Google_Service_Compute_RouterAdvertisedIpRange';
  protected $advertisedIpRangesDataType = 'array';

  public function getAdvertiseMode()
  {
    return $this->advertiseMode;
  }

  public function setAdvertiseMode($advertiseMode)
  {
    $this->advertiseMode = $advertiseMode;
  }

  public function getAdvertisedGroups()
  {
    return $this->advertisedGroups;
  }

  public function setAdvertisedGroups($advertisedGroups)
  {
    $this->advertisedGroups = $advertisedGroups;
  }

  /**
   * @param Google_Service_Compute_RouterAdvertisedIpRange
   */
  public function setAdvertisedIpRanges($advertisedIpRanges)
  {
    $this->advertisedIpRanges = $advertisedIpRanges;
  }
  /**
   * @return Google_Service_Compute_RouterAdvertisedIpRange
   */
  public function getAdvertisedIpRanges()
  {
    return $this->advertisedIpRanges;
  }

  public function getAsn()
  {
    return $this->asn;
  }

  public function setAsn($asn)
  {
    $this->asn = $asn;
  }
}
