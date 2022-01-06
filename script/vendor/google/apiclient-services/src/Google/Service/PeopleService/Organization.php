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

class Google_Service_PeopleService_Organization extends Google_Model
{
  public $current;
  public $department;
  public $domain;
  public $formattedType;
  public $jobDescription;
  public $location;
  public $name;
  public $phoneticName;
  public $symbol;
  public $title;
  public $type;
  protected $endDateType = 'Google_Service_PeopleService_Date';
  protected $endDateDataType = '';
  protected $metadataType = 'Google_Service_PeopleService_FieldMetadata';
  protected $metadataDataType = '';
  protected $startDateType = 'Google_Service_PeopleService_Date';
  protected $startDateDataType = '';

  public function getCurrent()
  {
    return $this->current;
  }

  public function setCurrent($current)
  {
    $this->current = $current;
  }

  public function getDepartment()
  {
    return $this->department;
  }

  public function setDepartment($department)
  {
    $this->department = $department;
  }

  public function getDomain()
  {
    return $this->domain;
  }

  public function setDomain($domain)
  {
    $this->domain = $domain;
  }

  /**
   * @param Google_Service_PeopleService_Date
   */
  public function setEndDate(Google_Service_PeopleService_Date $endDate)
  {
    $this->endDate = $endDate;
  }
  /**
   * @return Google_Service_PeopleService_Date
   */
  public function getEndDate()
  {
    return $this->endDate;
  }

  public function getFormattedType()
  {
    return $this->formattedType;
  }

  public function setFormattedType($formattedType)
  {
    $this->formattedType = $formattedType;
  }

  public function getJobDescription()
  {
    return $this->jobDescription;
  }

  public function setJobDescription($jobDescription)
  {
    $this->jobDescription = $jobDescription;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  /**
   * @param Google_Service_PeopleService_FieldMetadata
   */
  public function setMetadata(Google_Service_PeopleService_FieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return Google_Service_PeopleService_FieldMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPhoneticName()
  {
    return $this->phoneticName;
  }

  public function setPhoneticName($phoneticName)
  {
    $this->phoneticName = $phoneticName;
  }

  /**
   * @param Google_Service_PeopleService_Date
   */
  public function setStartDate(Google_Service_PeopleService_Date $startDate)
  {
    $this->startDate = $startDate;
  }
  /**
   * @return Google_Service_PeopleService_Date
   */
  public function getStartDate()
  {
    return $this->startDate;
  }

  public function getSymbol()
  {
    return $this->symbol;
  }

  public function setSymbol($symbol)
  {
    $this->symbol = $symbol;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }
}
