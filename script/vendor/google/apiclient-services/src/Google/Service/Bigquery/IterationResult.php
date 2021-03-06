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

class Google_Service_Bigquery_IterationResult extends Google_Model
{
  public $durationMs;
  public $evalLoss;
  public $index;
  public $learnRate;
  public $trainingLoss;

  public function getDurationMs()
  {
    return $this->durationMs;
  }

  public function setDurationMs($durationMs)
  {
    $this->durationMs = $durationMs;
  }

  public function getEvalLoss()
  {
    return $this->evalLoss;
  }

  public function setEvalLoss($evalLoss)
  {
    $this->evalLoss = $evalLoss;
  }

  public function getIndex()
  {
    return $this->index;
  }

  public function setIndex($index)
  {
    $this->index = $index;
  }

  public function getLearnRate()
  {
    return $this->learnRate;
  }

  public function setLearnRate($learnRate)
  {
    $this->learnRate = $learnRate;
  }

  public function getTrainingLoss()
  {
    return $this->trainingLoss;
  }

  public function setTrainingLoss($trainingLoss)
  {
    $this->trainingLoss = $trainingLoss;
  }
}
