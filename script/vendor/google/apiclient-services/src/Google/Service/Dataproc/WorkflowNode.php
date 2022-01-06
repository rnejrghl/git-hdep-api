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

class Google_Service_Dataproc_WorkflowNode extends Google_Collection
{
  public $error;
  public $jobId;
  public $prerequisiteStepIds;
  public $state;
  public $stepId;
  protected $collection_key = 'prerequisiteStepIds';

  public function getError()
  {
    return $this->error;
  }

  public function setError($error)
  {
    $this->error = $error;
  }

  public function getJobId()
  {
    return $this->jobId;
  }

  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }

  public function getPrerequisiteStepIds()
  {
    return $this->prerequisiteStepIds;
  }

  public function setPrerequisiteStepIds($prerequisiteStepIds)
  {
    $this->prerequisiteStepIds = $prerequisiteStepIds;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getStepId()
  {
    return $this->stepId;
  }

  public function setStepId($stepId)
  {
    $this->stepId = $stepId;
  }
}
