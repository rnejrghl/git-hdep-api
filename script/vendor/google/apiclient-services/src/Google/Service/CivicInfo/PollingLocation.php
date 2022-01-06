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

class Google_Service_CivicInfo_PollingLocation extends Google_Collection
{
  public $endDate;
  public $id;
  public $latitude;
  public $longitude;
  public $name;
  public $notes;
  public $pollingHours;
  public $startDate;
  public $voterServices;
  protected $collection_key = 'sources';
  protected $addressType = 'Google_Service_CivicInfo_SimpleAddressType';
  protected $addressDataType = '';
  protected $sourcesType = 'Google_Service_CivicInfo_Source';
  protected $sourcesDataType = 'array';

  /**
   * @param Google_Service_CivicInfo_SimpleAddressType
   */
  public function setAddress(Google_Service_CivicInfo_SimpleAddressType $address)
  {
    $this->address = $address;
  }
  /**
   * @return Google_Service_CivicInfo_SimpleAddressType
   */
  public function getAddress()
  {
    return $this->address;
  }

  public function getEndDate()
  {
    return $this->endDate;
  }

  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getLatitude()
  {
    return $this->latitude;
  }

  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }

  public function getLongitude()
  {
    return $this->longitude;
  }

  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getNotes()
  {
    return $this->notes;
  }

  public function setNotes($notes)
  {
    $this->notes = $notes;
  }

  public function getPollingHours()
  {
    return $this->pollingHours;
  }

  public function setPollingHours($pollingHours)
  {
    $this->pollingHours = $pollingHours;
  }

  /**
   * @param Google_Service_CivicInfo_Source
   */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /**
   * @return Google_Service_CivicInfo_Source
   */
  public function getSources()
  {
    return $this->sources;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }

  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }

  public function getVoterServices()
  {
    return $this->voterServices;
  }

  public function setVoterServices($voterServices)
  {
    $this->voterServices = $voterServices;
  }
}
