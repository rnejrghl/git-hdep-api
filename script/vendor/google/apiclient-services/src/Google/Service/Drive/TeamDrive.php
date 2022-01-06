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

class Google_Service_Drive_TeamDrive extends Google_Model
{
  public $backgroundImageLink;
  public $colorRgb;
  public $createdTime;
  public $id;
  public $kind;
  public $name;
  public $themeId;
  protected $backgroundImageFileType = 'Google_Service_Drive_TeamDriveBackgroundImageFile';
  protected $backgroundImageFileDataType = '';
  protected $capabilitiesType = 'Google_Service_Drive_TeamDriveCapabilities';
  protected $capabilitiesDataType = '';
  protected $restrictionsType = 'Google_Service_Drive_TeamDriveRestrictions';
  protected $restrictionsDataType = '';

  /**
   * @param Google_Service_Drive_TeamDriveBackgroundImageFile
   */
  public function setBackgroundImageFile(Google_Service_Drive_TeamDriveBackgroundImageFile $backgroundImageFile)
  {
    $this->backgroundImageFile = $backgroundImageFile;
  }
  /**
   * @return Google_Service_Drive_TeamDriveBackgroundImageFile
   */
  public function getBackgroundImageFile()
  {
    return $this->backgroundImageFile;
  }

  public function getBackgroundImageLink()
  {
    return $this->backgroundImageLink;
  }

  public function setBackgroundImageLink($backgroundImageLink)
  {
    $this->backgroundImageLink = $backgroundImageLink;
  }

  /**
   * @param Google_Service_Drive_TeamDriveCapabilities
   */
  public function setCapabilities(Google_Service_Drive_TeamDriveCapabilities $capabilities)
  {
    $this->capabilities = $capabilities;
  }
  /**
   * @return Google_Service_Drive_TeamDriveCapabilities
   */
  public function getCapabilities()
  {
    return $this->capabilities;
  }

  public function getColorRgb()
  {
    return $this->colorRgb;
  }

  public function setColorRgb($colorRgb)
  {
    $this->colorRgb = $colorRgb;
  }

  public function getCreatedTime()
  {
    return $this->createdTime;
  }

  public function setCreatedTime($createdTime)
  {
    $this->createdTime = $createdTime;
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

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @param Google_Service_Drive_TeamDriveRestrictions
   */
  public function setRestrictions(Google_Service_Drive_TeamDriveRestrictions $restrictions)
  {
    $this->restrictions = $restrictions;
  }
  /**
   * @return Google_Service_Drive_TeamDriveRestrictions
   */
  public function getRestrictions()
  {
    return $this->restrictions;
  }

  public function getThemeId()
  {
    return $this->themeId;
  }

  public function setThemeId($themeId)
  {
    $this->themeId = $themeId;
  }
}
