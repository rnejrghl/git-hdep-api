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

class Google_Service_AndroidEnterprise_ProductPolicy extends Google_Collection
{
  public $productId;
  public $trackIds;
  public $tracks;
  protected $collection_key = 'tracks';

  public function getProductId()
  {
    return $this->productId;
  }

  public function setProductId($productId)
  {
    $this->productId = $productId;
  }

  public function getTrackIds()
  {
    return $this->trackIds;
  }

  public function setTrackIds($trackIds)
  {
    $this->trackIds = $trackIds;
  }

  public function getTracks()
  {
    return $this->tracks;
  }

  public function setTracks($tracks)
  {
    $this->tracks = $tracks;
  }
}
