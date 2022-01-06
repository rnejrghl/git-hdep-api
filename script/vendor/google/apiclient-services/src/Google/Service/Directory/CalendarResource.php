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

class Google_Service_Directory_CalendarResource extends Google_Model
{
  public $buildingId;
  public $capacity;
  public $etags;
  public $featureInstances;
  public $floorName;
  public $floorSection;
  public $generatedResourceName;
  public $kind;
  public $resourceCategory;
  public $resourceDescription;
  public $resourceEmail;
  public $resourceId;
  public $resourceName;
  public $resourceType;
  public $userVisibleDescription;

  public function getBuildingId()
  {
    return $this->buildingId;
  }

  public function setBuildingId($buildingId)
  {
    $this->buildingId = $buildingId;
  }

  public function getCapacity()
  {
    return $this->capacity;
  }

  public function setCapacity($capacity)
  {
    $this->capacity = $capacity;
  }

  public function getEtags()
  {
    return $this->etags;
  }

  public function setEtags($etags)
  {
    $this->etags = $etags;
  }

  public function getFeatureInstances()
  {
    return $this->featureInstances;
  }

  public function setFeatureInstances($featureInstances)
  {
    $this->featureInstances = $featureInstances;
  }

  public function getFloorName()
  {
    return $this->floorName;
  }

  public function setFloorName($floorName)
  {
    $this->floorName = $floorName;
  }

  public function getFloorSection()
  {
    return $this->floorSection;
  }

  public function setFloorSection($floorSection)
  {
    $this->floorSection = $floorSection;
  }

  public function getGeneratedResourceName()
  {
    return $this->generatedResourceName;
  }

  public function setGeneratedResourceName($generatedResourceName)
  {
    $this->generatedResourceName = $generatedResourceName;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getResourceCategory()
  {
    return $this->resourceCategory;
  }

  public function setResourceCategory($resourceCategory)
  {
    $this->resourceCategory = $resourceCategory;
  }

  public function getResourceDescription()
  {
    return $this->resourceDescription;
  }

  public function setResourceDescription($resourceDescription)
  {
    $this->resourceDescription = $resourceDescription;
  }

  public function getResourceEmail()
  {
    return $this->resourceEmail;
  }

  public function setResourceEmail($resourceEmail)
  {
    $this->resourceEmail = $resourceEmail;
  }

  public function getResourceId()
  {
    return $this->resourceId;
  }

  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }

  public function getResourceName()
  {
    return $this->resourceName;
  }

  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }

  public function getResourceType()
  {
    return $this->resourceType;
  }

  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }

  public function getUserVisibleDescription()
  {
    return $this->userVisibleDescription;
  }

  public function setUserVisibleDescription($userVisibleDescription)
  {
    $this->userVisibleDescription = $userVisibleDescription;
  }
}
