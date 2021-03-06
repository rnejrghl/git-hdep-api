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

class Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p1beta1VideoAnnotationProgress extends Google_Model
{
  public $inputUri;
  public $progressPercent;
  public $startTime;
  public $updateTime;

  public function getInputUri()
  {
    return $this->inputUri;
  }

  public function setInputUri($inputUri)
  {
    $this->inputUri = $inputUri;
  }

  public function getProgressPercent()
  {
    return $this->progressPercent;
  }

  public function setProgressPercent($progressPercent)
  {
    $this->progressPercent = $progressPercent;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getUpdateTime()
  {
    return $this->updateTime;
  }

  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
}
