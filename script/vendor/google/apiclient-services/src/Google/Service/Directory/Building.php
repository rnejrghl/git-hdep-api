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

class Google_Service_Directory_Building extends Google_Collection
{
  public $buildingId;
  public $buildingName;
  public $description;
  public $etags;
  public $floorNames;
  public $kind;
  protected $collection_key = 'floorNames';
  protected $coordinatesType = 'Google_Service_Directory_BuildingCoordinates';
  protected $coordinatesDataType = '';

  public function getBuildingId()
  {
    return $this->buildingId;
  }

  public function setBuildingId($buildingId)
  {
    $this->buildingId = $buildingId;
  }

  public function getBuildingName()
  {
    return $this->buildingName;
  }

  public function setBuildingName($buildingName)
  {
    $this->buildingName = $buildingName;
  }

  /**
   * @param Google_Service_Directory_BuildingCoordinates
   */
  public function setCoordinates(Google_Service_Directory_BuildingCoordinates $coordinates)
  {
    $this->coordinates = $coordinates;
  }
  /**
   * @return Google_Service_Directory_BuildingCoordinates
   */
  public function getCoordinates()
  {
    return $this->coordinates;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getEtags()
  {
    return $this->etags;
  }

  public function setEtags($etags)
  {
    $this->etags = $etags;
  }

  public function getFloorNames()
  {
    return $this->floorNames;
  }

  public function setFloorNames($floorNames)
  {
    $this->floorNames = $floorNames;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
}
