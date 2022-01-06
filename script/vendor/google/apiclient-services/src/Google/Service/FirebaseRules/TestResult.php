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

class Google_Service_FirebaseRules_TestResult extends Google_Collection
{
  public $debugMessages;
  public $state;
  protected $collection_key = 'visitedExpressions';
  protected $errorPositionType = 'Google_Service_FirebaseRules_SourcePosition';
  protected $errorPositionDataType = '';
  protected $functionCallsType = 'Google_Service_FirebaseRules_FunctionCall';
  protected $functionCallsDataType = 'array';
  protected $visitedExpressionsType = 'Google_Service_FirebaseRules_VisitedExpression';
  protected $visitedExpressionsDataType = 'array';

  public function getDebugMessages()
  {
    return $this->debugMessages;
  }

  public function setDebugMessages($debugMessages)
  {
    $this->debugMessages = $debugMessages;
  }

  /**
   * @param Google_Service_FirebaseRules_SourcePosition
   */
  public function setErrorPosition(Google_Service_FirebaseRules_SourcePosition $errorPosition)
  {
    $this->errorPosition = $errorPosition;
  }
  /**
   * @return Google_Service_FirebaseRules_SourcePosition
   */
  public function getErrorPosition()
  {
    return $this->errorPosition;
  }
  /**
   * @param Google_Service_FirebaseRules_FunctionCall
   */
  public function setFunctionCalls($functionCalls)
  {
    $this->functionCalls = $functionCalls;
  }
  /**
   * @return Google_Service_FirebaseRules_FunctionCall
   */
  public function getFunctionCalls()
  {
    return $this->functionCalls;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  /**
   * @param Google_Service_FirebaseRules_VisitedExpression
   */
  public function setVisitedExpressions($visitedExpressions)
  {
    $this->visitedExpressions = $visitedExpressions;
  }
  /**
   * @return Google_Service_FirebaseRules_VisitedExpression
   */
  public function getVisitedExpressions()
  {
    return $this->visitedExpressions;
  }
}
