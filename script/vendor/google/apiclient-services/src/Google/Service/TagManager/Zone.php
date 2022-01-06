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

class Google_Service_TagManager_Zone extends Google_Collection
{
  public $accountId;
  public $containerId;
  public $fingerprint;
  public $name;
  public $notes;
  public $path;
  public $tagManagerUrl;
  public $workspaceId;
  public $zoneId;
  protected $collection_key = 'childContainer';
  protected $boundaryType = 'Google_Service_TagManager_ZoneBoundary';
  protected $boundaryDataType = '';
  protected $childContainerType = 'Google_Service_TagManager_ZoneChildContainer';
  protected $childContainerDataType = 'array';
  protected $typeRestrictionType = 'Google_Service_TagManager_ZoneTypeRestriction';
  protected $typeRestrictionDataType = '';

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  /**
   * @param Google_Service_TagManager_ZoneBoundary
   */
  public function setBoundary(Google_Service_TagManager_ZoneBoundary $boundary)
  {
    $this->boundary = $boundary;
  }
  /**
   * @return Google_Service_TagManager_ZoneBoundary
   */
  public function getBoundary()
  {
    return $this->boundary;
  }
  /**
   * @param Google_Service_TagManager_ZoneChildContainer
   */
  public function setChildContainer($childContainer)
  {
    $this->childContainer = $childContainer;
  }
  /**
   * @return Google_Service_TagManager_ZoneChildContainer
   */
  public function getChildContainer()
  {
    return $this->childContainer;
  }

  public function getContainerId()
  {
    return $this->containerId;
  }

  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }

  public function getFingerprint()
  {
    return $this->fingerprint;
  }

  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
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

  public function getPath()
  {
    return $this->path;
  }

  public function setPath($path)
  {
    $this->path = $path;
  }

  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
  }

  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }

  /**
   * @param Google_Service_TagManager_ZoneTypeRestriction
   */
  public function setTypeRestriction(Google_Service_TagManager_ZoneTypeRestriction $typeRestriction)
  {
    $this->typeRestriction = $typeRestriction;
  }
  /**
   * @return Google_Service_TagManager_ZoneTypeRestriction
   */
  public function getTypeRestriction()
  {
    return $this->typeRestriction;
  }

  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }

  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }

  public function getZoneId()
  {
    return $this->zoneId;
  }

  public function setZoneId($zoneId)
  {
    $this->zoneId = $zoneId;
  }
}
