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

class Google_Service_AndroidProvisioningPartner_ListVendorsResponse extends Google_Collection
{
  public $nextPageToken;
  public $totalSize;
  protected $collection_key = 'vendors';
  protected $vendorsType = 'Google_Service_AndroidProvisioningPartner_Company';
  protected $vendorsDataType = 'array';

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getTotalSize()
  {
    return $this->totalSize;
  }

  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }

  /**
   * @param Google_Service_AndroidProvisioningPartner_Company
   */
  public function setVendors($vendors)
  {
    $this->vendors = $vendors;
  }
  /**
   * @return Google_Service_AndroidProvisioningPartner_Company
   */
  public function getVendors()
  {
    return $this->vendors;
  }
}
