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

class Google_Service_AndroidManagement_Command extends Google_Collection
{
  public $createTime;
  public $duration;
  public $errorCode;
  public $newPassword;
  public $resetPasswordFlags;
  public $type;
  public $userName;
  protected $collection_key = 'resetPasswordFlags';

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  public function getDuration()
  {
    return $this->duration;
  }

  public function setDuration($duration)
  {
    $this->duration = $duration;
  }

  public function getErrorCode()
  {
    return $this->errorCode;
  }

  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }

  public function getNewPassword()
  {
    return $this->newPassword;
  }

  public function setNewPassword($newPassword)
  {
    $this->newPassword = $newPassword;
  }

  public function getResetPasswordFlags()
  {
    return $this->resetPasswordFlags;
  }

  public function setResetPasswordFlags($resetPasswordFlags)
  {
    $this->resetPasswordFlags = $resetPasswordFlags;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getUserName()
  {
    return $this->userName;
  }

  public function setUserName($userName)
  {
    $this->userName = $userName;
  }
}
