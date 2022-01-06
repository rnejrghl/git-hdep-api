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

class Google_Service_ShoppingContent_ProductStatusDataQualityIssue extends Google_Model
{
  public $destination;
  public $detail;
  public $fetchStatus;
  public $id;
  public $location;
  public $severity;
  public $timestamp;
  public $valueOnLandingPage;
  public $valueProvided;

  public function getDestination()
  {
    return $this->destination;
  }

  public function setDestination($destination)
  {
    $this->destination = $destination;
  }

  public function getDetail()
  {
    return $this->detail;
  }

  public function setDetail($detail)
  {
    $this->detail = $detail;
  }

  public function getFetchStatus()
  {
    return $this->fetchStatus;
  }

  public function setFetchStatus($fetchStatus)
  {
    $this->fetchStatus = $fetchStatus;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getSeverity()
  {
    return $this->severity;
  }

  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }

  public function getTimestamp()
  {
    return $this->timestamp;
  }

  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }

  public function getValueOnLandingPage()
  {
    return $this->valueOnLandingPage;
  }

  public function setValueOnLandingPage($valueOnLandingPage)
  {
    $this->valueOnLandingPage = $valueOnLandingPage;
  }

  public function getValueProvided()
  {
    return $this->valueProvided;
  }

  public function setValueProvided($valueProvided)
  {
    $this->valueProvided = $valueProvided;
  }
}