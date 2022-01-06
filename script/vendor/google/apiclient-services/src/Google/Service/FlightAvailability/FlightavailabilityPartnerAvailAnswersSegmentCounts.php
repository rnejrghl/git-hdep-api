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

class Google_Service_FlightAvailability_FlightavailabilityPartnerAvailAnswersSegmentCounts extends Google_Collection
{
  public $narrative;
  public $segmentIndex;
  protected $collection_key = 'seatCounts';
  protected $seatCountsType = 'Google_Service_FlightAvailability_FlightavailabilityPartnerAvailAnswersSeatCount';
  protected $seatCountsDataType = 'array';

  public function getNarrative()
  {
    return $this->narrative;
  }

  public function setNarrative($narrative)
  {
    $this->narrative = $narrative;
  }

  /**
   * @param Google_Service_FlightAvailability_FlightavailabilityPartnerAvailAnswersSeatCount
   */
  public function setSeatCounts($seatCounts)
  {
    $this->seatCounts = $seatCounts;
  }
  /**
   * @return Google_Service_FlightAvailability_FlightavailabilityPartnerAvailAnswersSeatCount
   */
  public function getSeatCounts()
  {
    return $this->seatCounts;
  }

  public function getSegmentIndex()
  {
    return $this->segmentIndex;
  }

  public function setSegmentIndex($segmentIndex)
  {
    $this->segmentIndex = $segmentIndex;
  }
}