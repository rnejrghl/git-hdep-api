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

class Google_Service_Storagetransfer_AwsS3Data extends Google_Model
{
  public $bucketName;
  protected $awsAccessKeyType = 'Google_Service_Storagetransfer_AwsAccessKey';
  protected $awsAccessKeyDataType = '';

  /**
   * @param Google_Service_Storagetransfer_AwsAccessKey
   */
  public function setAwsAccessKey(Google_Service_Storagetransfer_AwsAccessKey $awsAccessKey)
  {
    $this->awsAccessKey = $awsAccessKey;
  }
  /**
   * @return Google_Service_Storagetransfer_AwsAccessKey
   */
  public function getAwsAccessKey()
  {
    return $this->awsAccessKey;
  }

  public function getBucketName()
  {
    return $this->bucketName;
  }

  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }
}
