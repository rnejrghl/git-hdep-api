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

class Google_Service_HangoutsChat_Membership extends Google_Model
{
  public $createTime;
  public $name;
  public $state;
  protected $memberType = 'Google_Service_HangoutsChat_User';
  protected $memberDataType = '';

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  /**
   * @param Google_Service_HangoutsChat_User
   */
  public function setMember(Google_Service_HangoutsChat_User $member)
  {
    $this->member = $member;
  }
  /**
   * @return Google_Service_HangoutsChat_User
   */
  public function getMember()
  {
    return $this->member;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }
}
