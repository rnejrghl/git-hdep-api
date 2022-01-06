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

class Google_Service_AdExchangeBuyer_AccountBidderLocation extends Google_Model
{
  public $bidProtocol;
  public $maximumQps;
  public $region;
  public $url;

  public function getBidProtocol()
  {
    return $this->bidProtocol;
  }

  public function setBidProtocol($bidProtocol)
  {
    $this->bidProtocol = $bidProtocol;
  }

  public function getMaximumQps()
  {
    return $this->maximumQps;
  }

  public function setMaximumQps($maximumQps)
  {
    $this->maximumQps = $maximumQps;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }
}