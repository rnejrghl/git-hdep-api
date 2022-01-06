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

class Google_Service_FlightAvailability_FlightavailabilityPartnerAvailAnswersAnswer extends Google_Collection
{
  public $foundNoSolution;
  public $narrative;
  protected $collection_key = 'solutions';
  protected $solutionsType = 'Google_Service_FlightAvailability_FlightavailabilityPartnerAvailAnswersSolution';
  protected $solutionsDataType = 'array';

  public function getFoundNoSolution()
  {
    return $this->foundNoSolution;
  }

  public function setFoundNoSolution($foundNoSolution)
  {
    $this->foundNoSolution = $foundNoSolution;
  }

  public function getNarrative()
  {
    return $this->narrative;
  }

  public function setNarrative($narrative)
  {
    $this->narrative = $narrative;
  }

  /**
   * @param Google_Service_FlightAvailability_FlightavailabilityPartnerAvailAnswersSolution
   */
  public function setSolutions($solutions)
  {
    $this->solutions = $solutions;
  }
  /**
   * @return Google_Service_FlightAvailability_FlightavailabilityPartnerAvailAnswersSolution
   */
  public function getSolutions()
  {
    return $this->solutions;
  }
}
