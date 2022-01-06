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

class Google_Service_JobService_NumericBucketingOption extends Google_Collection
{
  public $bucketBounds;
  public $requiresMinMax;
  protected $collection_key = 'bucketBounds';

  public function getBucketBounds()
  {
    return $this->bucketBounds;
  }

  public function setBucketBounds($bucketBounds)
  {
    $this->bucketBounds = $bucketBounds;
  }

  public function getRequiresMinMax()
  {
    return $this->requiresMinMax;
  }

  public function setRequiresMinMax($requiresMinMax)
  {
    $this->requiresMinMax = $requiresMinMax;
  }
}
