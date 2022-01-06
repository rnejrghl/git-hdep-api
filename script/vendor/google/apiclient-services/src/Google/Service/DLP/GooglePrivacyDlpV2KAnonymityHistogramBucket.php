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

class Google_Service_DLP_GooglePrivacyDlpV2KAnonymityHistogramBucket extends Google_Collection
{
  public $bucketSize;
  public $bucketValueCount;
  public $equivalenceClassSizeLowerBound;
  public $equivalenceClassSizeUpperBound;
  protected $collection_key = 'bucketValues';
  protected $bucketValuesType = 'Google_Service_DLP_GooglePrivacyDlpV2KAnonymityEquivalenceClass';
  protected $bucketValuesDataType = 'array';

  public function getBucketSize()
  {
    return $this->bucketSize;
  }

  public function setBucketSize($bucketSize)
  {
    $this->bucketSize = $bucketSize;
  }

  public function getBucketValueCount()
  {
    return $this->bucketValueCount;
  }

  public function setBucketValueCount($bucketValueCount)
  {
    $this->bucketValueCount = $bucketValueCount;
  }

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2KAnonymityEquivalenceClass
   */
  public function setBucketValues($bucketValues)
  {
    $this->bucketValues = $bucketValues;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2KAnonymityEquivalenceClass
   */
  public function getBucketValues()
  {
    return $this->bucketValues;
  }

  public function getEquivalenceClassSizeLowerBound()
  {
    return $this->equivalenceClassSizeLowerBound;
  }

  public function setEquivalenceClassSizeLowerBound($equivalenceClassSizeLowerBound)
  {
    $this->equivalenceClassSizeLowerBound = $equivalenceClassSizeLowerBound;
  }

  public function getEquivalenceClassSizeUpperBound()
  {
    return $this->equivalenceClassSizeUpperBound;
  }

  public function setEquivalenceClassSizeUpperBound($equivalenceClassSizeUpperBound)
  {
    $this->equivalenceClassSizeUpperBound = $equivalenceClassSizeUpperBound;
  }
}
