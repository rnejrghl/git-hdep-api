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

class Google_Service_Safebrowsing_ListUpdateRequest extends Google_Model
{
  public $platformType;
  public $state;
  public $threatEntryType;
  public $threatType;
  protected $constraintsType = 'Google_Service_Safebrowsing_Constraints';
  protected $constraintsDataType = '';

  /**
   * @param Google_Service_Safebrowsing_Constraints
   */
  public function setConstraints(Google_Service_Safebrowsing_Constraints $constraints)
  {
    $this->constraints = $constraints;
  }
  /**
   * @return Google_Service_Safebrowsing_Constraints
   */
  public function getConstraints()
  {
    return $this->constraints;
  }

  public function getPlatformType()
  {
    return $this->platformType;
  }

  public function setPlatformType($platformType)
  {
    $this->platformType = $platformType;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getThreatEntryType()
  {
    return $this->threatEntryType;
  }

  public function setThreatEntryType($threatEntryType)
  {
    $this->threatEntryType = $threatEntryType;
  }

  public function getThreatType()
  {
    return $this->threatType;
  }

  public function setThreatType($threatType)
  {
    $this->threatType = $threatType;
  }
}
