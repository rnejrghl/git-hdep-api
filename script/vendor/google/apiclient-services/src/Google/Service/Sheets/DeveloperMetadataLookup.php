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

class Google_Service_Sheets_DeveloperMetadataLookup extends Google_Model
{
  public $locationMatchingStrategy;
  public $locationType;
  public $metadataId;
  public $metadataKey;
  public $metadataValue;
  public $visibility;
  protected $metadataLocationType = 'Google_Service_Sheets_DeveloperMetadataLocation';
  protected $metadataLocationDataType = '';

  public function getLocationMatchingStrategy()
  {
    return $this->locationMatchingStrategy;
  }

  public function setLocationMatchingStrategy($locationMatchingStrategy)
  {
    $this->locationMatchingStrategy = $locationMatchingStrategy;
  }

  public function getLocationType()
  {
    return $this->locationType;
  }

  public function setLocationType($locationType)
  {
    $this->locationType = $locationType;
  }

  public function getMetadataId()
  {
    return $this->metadataId;
  }

  public function setMetadataId($metadataId)
  {
    $this->metadataId = $metadataId;
  }

  public function getMetadataKey()
  {
    return $this->metadataKey;
  }

  public function setMetadataKey($metadataKey)
  {
    $this->metadataKey = $metadataKey;
  }

  /**
   * @param Google_Service_Sheets_DeveloperMetadataLocation
   */
  public function setMetadataLocation(Google_Service_Sheets_DeveloperMetadataLocation $metadataLocation)
  {
    $this->metadataLocation = $metadataLocation;
  }
  /**
   * @return Google_Service_Sheets_DeveloperMetadataLocation
   */
  public function getMetadataLocation()
  {
    return $this->metadataLocation;
  }

  public function getMetadataValue()
  {
    return $this->metadataValue;
  }

  public function setMetadataValue($metadataValue)
  {
    $this->metadataValue = $metadataValue;
  }

  public function getVisibility()
  {
    return $this->visibility;
  }

  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
}
