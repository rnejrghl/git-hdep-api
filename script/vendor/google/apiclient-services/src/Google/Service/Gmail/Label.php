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

class Google_Service_Gmail_Label extends Google_Model
{
  public $id;
  public $labelListVisibility;
  public $messageListVisibility;
  public $messagesTotal;
  public $messagesUnread;
  public $name;
  public $threadsTotal;
  public $threadsUnread;
  public $type;
  protected $colorType = 'Google_Service_Gmail_LabelColor';
  protected $colorDataType = '';

  /**
   * @param Google_Service_Gmail_LabelColor
   */
  public function setColor(Google_Service_Gmail_LabelColor $color)
  {
    $this->color = $color;
  }
  /**
   * @return Google_Service_Gmail_LabelColor
   */
  public function getColor()
  {
    return $this->color;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getLabelListVisibility()
  {
    return $this->labelListVisibility;
  }

  public function setLabelListVisibility($labelListVisibility)
  {
    $this->labelListVisibility = $labelListVisibility;
  }

  public function getMessageListVisibility()
  {
    return $this->messageListVisibility;
  }

  public function setMessageListVisibility($messageListVisibility)
  {
    $this->messageListVisibility = $messageListVisibility;
  }

  public function getMessagesTotal()
  {
    return $this->messagesTotal;
  }

  public function setMessagesTotal($messagesTotal)
  {
    $this->messagesTotal = $messagesTotal;
  }

  public function getMessagesUnread()
  {
    return $this->messagesUnread;
  }

  public function setMessagesUnread($messagesUnread)
  {
    $this->messagesUnread = $messagesUnread;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getThreadsTotal()
  {
    return $this->threadsTotal;
  }

  public function setThreadsTotal($threadsTotal)
  {
    $this->threadsTotal = $threadsTotal;
  }

  public function getThreadsUnread()
  {
    return $this->threadsUnread;
  }

  public function setThreadsUnread($threadsUnread)
  {
    $this->threadsUnread = $threadsUnread;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }
}
