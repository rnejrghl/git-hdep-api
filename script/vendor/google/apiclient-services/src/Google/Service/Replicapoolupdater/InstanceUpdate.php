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

class Google_Service_Replicapoolupdater_InstanceUpdate extends Google_Model
{
  public $instance;
  public $status;
  protected $errorType = 'Google_Service_Replicapoolupdater_InstanceUpdateError';
  protected $errorDataType = '';

  /**
   * @param Google_Service_Replicapoolupdater_InstanceUpdateError
   */
  public function setError(Google_Service_Replicapoolupdater_InstanceUpdateError $error)
  {
    $this->error = $error;
  }
  /**
   * @return Google_Service_Replicapoolupdater_InstanceUpdateError
   */
  public function getError()
  {
    return $this->error;
  }

  public function getInstance()
  {
    return $this->instance;
  }

  public function setInstance($instance)
  {
    $this->instance = $instance;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }
}
