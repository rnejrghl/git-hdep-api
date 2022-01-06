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

class Google_Service_Classroom_Registration extends Google_Model
{
  public $expiryTime;
  public $registrationId;
  protected $cloudPubsubTopicType = 'Google_Service_Classroom_CloudPubsubTopic';
  protected $cloudPubsubTopicDataType = '';
  protected $feedType = 'Google_Service_Classroom_Feed';
  protected $feedDataType = '';

  /**
   * @param Google_Service_Classroom_CloudPubsubTopic
   */
  public function setCloudPubsubTopic(Google_Service_Classroom_CloudPubsubTopic $cloudPubsubTopic)
  {
    $this->cloudPubsubTopic = $cloudPubsubTopic;
  }
  /**
   * @return Google_Service_Classroom_CloudPubsubTopic
   */
  public function getCloudPubsubTopic()
  {
    return $this->cloudPubsubTopic;
  }

  public function getExpiryTime()
  {
    return $this->expiryTime;
  }

  public function setExpiryTime($expiryTime)
  {
    $this->expiryTime = $expiryTime;
  }

  /**
   * @param Google_Service_Classroom_Feed
   */
  public function setFeed(Google_Service_Classroom_Feed $feed)
  {
    $this->feed = $feed;
  }
  /**
   * @return Google_Service_Classroom_Feed
   */
  public function getFeed()
  {
    return $this->feed;
  }

  public function getRegistrationId()
  {
    return $this->registrationId;
  }

  public function setRegistrationId($registrationId)
  {
    $this->registrationId = $registrationId;
  }
}
