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

class Google_Service_Directory_UserOrganization extends Google_Model
{
  public $costCenter;
  public $customType;
  public $department;
  public $description;
  public $domain;
  public $fullTimeEquivalent;
  public $location;
  public $name;
  public $primary;
  public $symbol;
  public $title;
  public $type;

  public function getCostCenter()
  {
    return $this->costCenter;
  }

  public function setCostCenter($costCenter)
  {
    $this->costCenter = $costCenter;
  }

  public function getCustomType()
  {
    return $this->customType;
  }

  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }

  public function getDepartment()
  {
    return $this->department;
  }

  public function setDepartment($department)
  {
    $this->department = $department;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDomain()
  {
    return $this->domain;
  }

  public function setDomain($domain)
  {
    $this->domain = $domain;
  }

  public function getFullTimeEquivalent()
  {
    return $this->fullTimeEquivalent;
  }

  public function setFullTimeEquivalent($fullTimeEquivalent)
  {
    $this->fullTimeEquivalent = $fullTimeEquivalent;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPrimary()
  {
    return $this->primary;
  }

  public function setPrimary($primary)
  {
    $this->primary = $primary;
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
