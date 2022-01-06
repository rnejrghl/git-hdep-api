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

class Google_Service_Dataflow_TopologyConfig extends Google_Collection
{
  public $forwardingKeyBits;
  public $persistentStateVersion;
  public $userStageToComputationNameMap;
  protected $collection_key = 'dataDiskAssignments';
  protected $computationsType = 'Google_Service_Dataflow_ComputationTopology';
  protected $computationsDataType = 'array';
  protected $dataDiskAssignmentsType = 'Google_Service_Dataflow_DataDiskAssignment';
  protected $dataDiskAssignmentsDataType = 'array';

  /**
   * @param Google_Service_Dataflow_ComputationTopology
   */
  public function setComputations($computations)
  {
    $this->computations = $computations;
  }
  /**
   * @return Google_Service_Dataflow_ComputationTopology
   */
  public function getComputations()
  {
    return $this->computations;
  }
  /**
   * @param Google_Service_Dataflow_DataDiskAssignment
   */
  public function setDataDiskAssignments($dataDiskAssignments)
  {
    $this->dataDiskAssignments = $dataDiskAssignments;
  }
  /**
   * @return Google_Service_Dataflow_DataDiskAssignment
   */
  public function getDataDiskAssignments()
  {
    return $this->dataDiskAssignments;
  }

  public function getForwardingKeyBits()
  {
    return $this->forwardingKeyBits;
  }

  public function setForwardingKeyBits($forwardingKeyBits)
  {
    $this->forwardingKeyBits = $forwardingKeyBits;
  }

  public function getPersistentStateVersion()
  {
    return $this->persistentStateVersion;
  }

  public function setPersistentStateVersion($persistentStateVersion)
  {
    $this->persistentStateVersion = $persistentStateVersion;
  }

  public function getUserStageToComputationNameMap()
  {
    return $this->userStageToComputationNameMap;
  }

  public function setUserStageToComputationNameMap($userStageToComputationNameMap)
  {
    $this->userStageToComputationNameMap = $userStageToComputationNameMap;
  }
}
