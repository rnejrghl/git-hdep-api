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

class Google_Service_Directory_MobileDeviceApplications extends Google_Collection
{
  public $displayName;
  public $packageName;
  public $permission;
  public $versionCode;
  public $versionName;
  protected $collection_key = 'permission';

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getPackageName()
  {
    return $this->packageName;
  }

  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }

  public function getPermission()
  {
    return $this->permission;
  }

  public function setPermission($permission)
  {
    $this->permission = $permission;
  }

  public function getVersionCode()
  {
    return $this->versionCode;
  }

  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }

  public function getVersionName()
  {
    return $this->versionName;
  }

  public function setVersionName($versionName)
  {
    $this->versionName = $versionName;
  }
}
