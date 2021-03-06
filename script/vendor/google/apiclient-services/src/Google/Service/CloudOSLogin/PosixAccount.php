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

class Google_Service_CloudOSLogin_PosixAccount extends Google_Model
{
  public $accountId;
  public $gecos;
  public $gid;
  public $homeDirectory;
  public $operatingSystemType;
  public $primary;
  public $shell;
  public $systemId;
  public $uid;
  public $username;

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getGecos()
  {
    return $this->gecos;
  }

  public function setGecos($gecos)
  {
    $this->gecos = $gecos;
  }

  public function getGid()
  {
    return $this->gid;
  }

  public function setGid($gid)
  {
    $this->gid = $gid;
  }

  public function getHomeDirectory()
  {
    return $this->homeDirectory;
  }

  public function setHomeDirectory($homeDirectory)
  {
    $this->homeDirectory = $homeDirectory;
  }

  public function getOperatingSystemType()
  {
    return $this->operatingSystemType;
  }

  public function setOperatingSystemType($operatingSystemType)
  {
    $this->operatingSystemType = $operatingSystemType;
  }

  public function getPrimary()
  {
    return $this->primary;
  }

  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }

  public function getShell()
  {
    return $this->shell;
  }

  public function setShell($shell)
  {
    $this->shell = $shell;
  }

  public function getSystemId()
  {
    return $this->systemId;
  }

  public function setSystemId($systemId)
  {
    $this->systemId = $systemId;
  }

  public function getUid()
  {
    return $this->uid;
  }

  public function setUid($uid)
  {
    $this->uid = $uid;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function setUsername($username)
  {
    $this->username = $username;
  }
}
