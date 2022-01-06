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

class Google_Service_Devprojects_Evaluation extends Google_Collection
{
  public $backend;
  public $comment;
  public $kind;
  public $processTimeMillisecs;
  public $processedMicros;
  public $score;
  public $status;
  public $timestampMicros;
  public $version;
  protected $collection_key = 'region';
  protected $abuseTypeType = 'Google_Service_Devprojects_AbuseType';
  protected $abuseTypeDataType = '';
  protected $featureType = 'Google_Service_Devprojects_Feature';
  protected $featureDataType = 'array';
  protected $miscDataType = 'Google_Service_Devprojects_NameValuePair';
  protected $miscDataDataType = 'array';
  protected $regionType = 'Google_Service_Devprojects_Region';
  protected $regionDataType = 'array';
  protected $targetType = 'Google_Service_Devprojects_Target';
  protected $targetDataType = '';

  public function setAbuseType(Google_Service_Devprojects_AbuseType $abuseType)
  {
    $this->abuseType = $abuseType;
  }
  public function getAbuseType()
  {
    return $this->abuseType;
  }

  public function getBackend()
  {
    return $this->backend;
  }

  public function setBackend($backend)
  {
    $this->backend = $backend;
  }

  public function getComment()
  {
    return $this->comment;
  }

  public function setComment($comment)
  {
    $this->comment = $comment;
  }

  public function setFeature($feature)
  {
    $this->feature = $feature;
  }
  public function getFeature()
  {
    return $this->feature;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function setMiscData($miscData)
  {
    $this->miscData = $miscData;
  }
  public function getMiscData()
  {
    return $this->miscData;
  }

  public function getProcessTimeMillisecs()
  {
    return $this->processTimeMillisecs;
  }

  public function setProcessTimeMillisecs($processTimeMillisecs)
  {
    $this->processTimeMillisecs = $processTimeMillisecs;
  }

  public function getProcessedMicros()
  {
    return $this->processedMicros;
  }

  public function setProcessedMicros($processedMicros)
  {
    $this->processedMicros = $processedMicros;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }
  public function getRegion()
  {
    return $this->region;
  }

  public function getScore()
  {
    return $this->score;
  }

  public function setScore($score)
  {
    $this->score = $score;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function setTarget(Google_Service_Devprojects_Target $target)
  {
    $this->target = $target;
  }
  public function getTarget()
  {
    return $this->target;
  }

  public function getTimestampMicros()
  {
    return $this->timestampMicros;
  }

  public function setTimestampMicros($timestampMicros)
  {
    $this->timestampMicros = $timestampMicros;
  }

  public function getVersion()
  {
    return $this->version;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }
}
