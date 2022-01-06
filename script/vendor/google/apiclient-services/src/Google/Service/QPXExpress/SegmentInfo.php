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

class Google_Service_QPXExpress_SegmentInfo extends Google_Collection
{
  public $bookingCode;
  public $bookingCodeCount;
  public $cabin;
  public $connectionDuration;
  public $duration;
  public $id;
  public $kind;
  public $marriedSegmentGroup;
  public $subjectToGovernmentApproval;
  protected $collection_key = 'leg';
  protected $flightType = 'Google_Service_QPXExpress_FlightInfo';
  protected $flightDataType = '';
  protected $legType = 'Google_Service_QPXExpress_LegInfo';
  protected $legDataType = 'array';

  public function getBookingCode()
  {
    return $this->bookingCode;
  }

  public function setBookingCode($bookingCode)
  {
    $this->bookingCode = $bookingCode;
  }

  public function getBookingCodeCount()
  {
    return $this->bookingCodeCount;
  }

  public function setBookingCodeCount($bookingCodeCount)
  {
    $this->bookingCodeCount = $bookingCodeCount;
  }

  public function getCabin()
  {
    return $this->cabin;
  }

  public function setCabin($cabin)
  {
    $this->cabin = $cabin;
  }

  public function getConnectionDuration()
  {
    return $this->connectionDuration;
  }

  public function setConnectionDuration($connectionDuration)
  {
    $this->connectionDuration = $connectionDuration;
  }

  public function getDuration()
  {
    return $this->duration;
  }

  public function setDuration($duration)
  {
    $this->duration = $duration;
  }

  /**
   * @param Google_Service_QPXExpress_FlightInfo
   */
  public function setFlight(Google_Service_QPXExpress_FlightInfo $flight)
  {
    $this->flight = $flight;
  }
  /**
   * @return Google_Service_QPXExpress_FlightInfo
   */
  public function getFlight()
  {
    return $this->flight;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  /**
   * @param Google_Service_QPXExpress_LegInfo
   */
  public function setLeg($leg)
  {
    $this->leg = $leg;
  }
  /**
   * @return Google_Service_QPXExpress_LegInfo
   */
  public function getLeg()
  {
    return $this->leg;
  }

  public function getMarriedSegmentGroup()
  {
    return $this->marriedSegmentGroup;
  }

  public function setMarriedSegmentGroup($marriedSegmentGroup)
  {
    $this->marriedSegmentGroup = $marriedSegmentGroup;
  }

  public function getSubjectToGovernmentApproval()
  {
    return $this->subjectToGovernmentApproval;
  }

  public function setSubjectToGovernmentApproval($subjectToGovernmentApproval)
  {
    $this->subjectToGovernmentApproval = $subjectToGovernmentApproval;
  }
}
