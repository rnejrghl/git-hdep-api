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

class Google_Service_YouTubeAnalytics_GroupItem extends Google_Model
{
  public $etag;
  public $groupId;
  public $id;
  public $kind;
  protected $errorsType = 'Google_Service_YouTubeAnalytics_Errors';
  protected $errorsDataType = '';
  protected $resourceType = 'Google_Service_YouTubeAnalytics_GroupItemResource';
  protected $resourceDataType = '';

  /**
   * @param Google_Service_YouTubeAnalytics_Errors
   */
  public function setErrors(Google_Service_YouTubeAnalytics_Errors $errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return Google_Service_YouTubeAnalytics_Errors
   */
  public function getErrors()
  {
    return $this->errors;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getGroupId()
  {
    return $this->groupId;
  }

  public function setGroupId($groupId)
  {
    $this->groupId = $groupId;
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

  /**
   * @param Google_Service_YouTubeAnalytics_GroupItemResource
   */
  public function setResource(Google_Service_YouTubeAnalytics_GroupItemResource $resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return Google_Service_YouTubeAnalytics_GroupItemResource
   */
  public function getResource()
  {
    return $this->resource;
  }
}
