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

class Google_Service_Fusiontables_Task extends Google_Model
{
  public $kind;
  public $progress;
  public $started;
  public $taskId;
  public $type;

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getProgress()
  {
    return $this->progress;
  }

  public function setProgress($progress)
  {
    $this->progress = $progress;
  }

  public function getStarted()
  {
    return $this->started;
  }

  public function setStarted($started)
  {
    $this->started = $started;
  }

  public function getTaskId()
  {
    return $this->taskId;
  }

  public function setTaskId($taskId)
  {
    $this->taskId = $taskId;
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
