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

class Google_Service_AdExchangeBuyerII_DayPartTargeting extends Google_Collection
{
  public $timeZoneType;
  protected $collection_key = 'dayParts';
  protected $dayPartsType = 'Google_Service_AdExchangeBuyerII_DayPart';
  protected $dayPartsDataType = 'array';

  /**
   * @param Google_Service_AdExchangeBuyerII_DayPart
   */
  public function setDayParts($dayParts)
  {
    $this->dayParts = $dayParts;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_DayPart
   */
  public function getDayParts()
  {
    return $this->dayParts;
  }

  public function getTimeZoneType()
  {
    return $this->timeZoneType;
  }

  public function setTimeZoneType($timeZoneType)
  {
    $this->timeZoneType = $timeZoneType;
  }
}
