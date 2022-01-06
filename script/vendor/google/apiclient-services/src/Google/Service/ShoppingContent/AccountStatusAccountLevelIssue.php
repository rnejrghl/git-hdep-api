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

class Google_Service_ShoppingContent_AccountStatusAccountLevelIssue extends Google_Model
{
  public $country;
  public $destination;
  public $detail;
  public $documentation;
  public $id;
  public $severity;
  public $title;

  public function getCountry()
  {
    return $this->country;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

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

  public function getDocumentation()
  {
    return $this->documentation;
  }

  public function setDocumentation($documentation)
  {
    $this->documentation = $documentation;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getSeverity()
  {
    return $this->severity;
  }

  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }
}
