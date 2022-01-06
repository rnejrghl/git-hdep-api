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

class Google_Service_FlightAvailability_FlightavailabilityPartnerAvailQuestionsSegment extends Google_Model
{
  public $bookingCode;
  public $carrier;
  public $destination;
  public $flightNumber;
  public $origin;
  public $passiveSegment;
  protected $departureDateType = 'Google_Service_FlightAvailability_FlightavailabilityDate';
  protected $departureDateDataType = '';

  public function getBookingCode()
  {
    return $this->bookingCode;
  }

  public function setBookingCode($bookingCode)
  {
    $this->bookingCode = $bookingCode;
  }

  public function getCarrier()
  {
    return $this->carrier;
  }

  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }

  /**
   * @param Google_Service_FlightAvailability_FlightavailabilityDate
   */
  public function setDepartureDate(Google_Service_FlightAvailability_FlightavailabilityDate $departureDate)
  {
    $this->departureDate = $departureDate;
  }
  /**
   * @return Google_Service_FlightAvailability_FlightavailabilityDate
   */
  public function getDepartureDate()
  {
    return $this->departureDate;
  }

  public function getDestination()
  {
    return $this->destination;
  }

  public function setDestination($destination)
  {
    $this->destination = $destination;
  }

  public function getFlightNumber()
  {
    return $this->flightNumber;
  }

  public function setFlightNumber($flightNumber)
  {
    $this->flightNumber = $flightNumber;
  }

  public function getOrigin()
  {
    return $this->origin;
  }

  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }

  public function getPassiveSegment()
  {
    return $this->passiveSegment;
  }

  public function setPassiveSegment($passiveSegment)
  {
    $this->passiveSegment = $passiveSegment;
  }
}
