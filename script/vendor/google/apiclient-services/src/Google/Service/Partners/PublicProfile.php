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

class Google_Service_Partners_PublicProfile extends Google_Model
{
  public $displayImageUrl;
  public $displayName;
  public $id;
  public $profileImage;
  public $url;

  public function getDisplayImageUrl()
  {
    return $this->displayImageUrl;
  }

  public function setDisplayImageUrl($displayImageUrl)
  {
    $this->displayImageUrl = $displayImageUrl;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getProfileImage()
  {
    return $this->profileImage;
  }

  public function setProfileImage($profileImage)
  {
    $this->profileImage = $profileImage;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }
}