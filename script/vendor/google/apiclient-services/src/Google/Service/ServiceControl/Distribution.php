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

class Google_Service_ServiceControl_Distribution extends Google_Collection
{
  public $bucketCounts;
  public $count;
  public $maximum;
  public $mean;
  public $minimum;
  public $sumOfSquaredDeviation;
  protected $collection_key = 'bucketCounts';
  protected $explicitBucketsType = 'Google_Service_ServiceControl_ExplicitBuckets';
  protected $explicitBucketsDataType = '';
  protected $exponentialBucketsType = 'Google_Service_ServiceControl_ExponentialBuckets';
  protected $exponentialBucketsDataType = '';
  protected $linearBucketsType = 'Google_Service_ServiceControl_LinearBuckets';
  protected $linearBucketsDataType = '';

  public function getBucketCounts()
  {
    return $this->bucketCounts;
  }

  public function setBucketCounts($bucketCounts)
  {
    $this->bucketCounts = $bucketCounts;
  }

  public function getCount()
  {
    return $this->count;
  }

  public function setCount($count)
  {
    $this->count = $count;
  }

  /**
   * @param Google_Service_ServiceControl_ExplicitBuckets
   */
  public function setExplicitBuckets(Google_Service_ServiceControl_ExplicitBuckets $explicitBuckets)
  {
    $this->explicitBuckets = $explicitBuckets;
  }
  /**
   * @return Google_Service_ServiceControl_ExplicitBuckets
   */
  public function getExplicitBuckets()
  {
    return $this->explicitBuckets;
  }
  /**
   * @param Google_Service_ServiceControl_ExponentialBuckets
   */
  public function setExponentialBuckets(Google_Service_ServiceControl_ExponentialBuckets $exponentialBuckets)
  {
    $this->exponentialBuckets = $exponentialBuckets;
  }
  /**
   * @return Google_Service_ServiceControl_ExponentialBuckets
   */
  public function getExponentialBuckets()
  {
    return $this->exponentialBuckets;
  }
  /**
   * @param Google_Service_ServiceControl_LinearBuckets
   */
  public function setLinearBuckets(Google_Service_ServiceControl_LinearBuckets $linearBuckets)
  {
    $this->linearBuckets = $linearBuckets;
  }
  /**
   * @return Google_Service_ServiceControl_LinearBuckets
   */
  public function getLinearBuckets()
  {
    return $this->linearBuckets;
  }

  public function getMaximum()
  {
    return $this->maximum;
  }

  public function setMaximum($maximum)
  {
    $this->maximum = $maximum;
  }

  public function getMean()
  {
    return $this->mean;
  }

  public function setMean($mean)
  {
    $this->mean = $mean;
  }

  public function getMinimum()
  {
    return $this->minimum;
  }

  public function setMinimum($minimum)
  {
    $this->minimum = $minimum;
  }

  public function getSumOfSquaredDeviation()
  {
    return $this->sumOfSquaredDeviation;
  }

  public function setSumOfSquaredDeviation($sumOfSquaredDeviation)
  {
    $this->sumOfSquaredDeviation = $sumOfSquaredDeviation;
  }
}
