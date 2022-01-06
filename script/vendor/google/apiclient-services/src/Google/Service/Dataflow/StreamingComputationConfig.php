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

class Google_Service_Dataflow_StreamingComputationConfig extends Google_Collection
{
  public $computationId;
  public $stageName;
  public $systemName;
  protected $collection_key = 'instructions';
  protected $instructionsType = 'Google_Service_Dataflow_ParallelInstruction';
  protected $instructionsDataType = 'array';

  public function getComputationId()
  {
    return $this->computationId;
  }

  public function setComputationId($computationId)
  {
    $this->computationId = $computationId;
  }

  /**
   * @param Google_Service_Dataflow_ParallelInstruction
   */
  public function setInstructions($instructions)
  {
    $this->instructions = $instructions;
  }
  /**
   * @return Google_Service_Dataflow_ParallelInstruction
   */
  public function getInstructions()
  {
    return $this->instructions;
  }

  public function getStageName()
  {
    return $this->stageName;
  }

  public function setStageName($stageName)
  {
    $this->stageName = $stageName;
  }

  public function getSystemName()
  {
    return $this->systemName;
  }

  public function setSystemName($systemName)
  {
    $this->systemName = $systemName;
  }
}
