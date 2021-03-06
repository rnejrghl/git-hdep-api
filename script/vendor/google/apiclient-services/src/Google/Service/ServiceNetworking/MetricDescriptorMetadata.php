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

class Google_Service_ServiceNetworking_MetricDescriptorMetadata extends Google_Model
{
  public $ingestDelay;
  public $launchStage;
  public $samplePeriod;

  public function getIngestDelay()
  {
    return $this->ingestDelay;
  }

  public function setIngestDelay($ingestDelay)
  {
    $this->ingestDelay = $ingestDelay;
  }

  public function getLaunchStage()
  {
    return $this->launchStage;
  }

  public function setLaunchStage($launchStage)
  {
    $this->launchStage = $launchStage;
  }

  public function getSamplePeriod()
  {
    return $this->samplePeriod;
  }

  public function setSamplePeriod($samplePeriod)
  {
    $this->samplePeriod = $samplePeriod;
  }
}
