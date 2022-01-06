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

class Google_Service_CloudDebugger_Breakpoint extends Google_Collection
{
  public $action;
  public $condition;
  public $createTime;
  public $expressions;
  public $finalTime;
  public $id;
  public $isFinalState;
  public $labels;
  public $logLevel;
  public $logMessageFormat;
  public $userEmail;
  protected $collection_key = 'variableTable';
  protected $evaluatedExpressionsType = 'Google_Service_CloudDebugger_Variable';
  protected $evaluatedExpressionsDataType = 'array';
  protected $locationType = 'Google_Service_CloudDebugger_SourceLocation';
  protected $locationDataType = '';
  protected $stackFramesType = 'Google_Service_CloudDebugger_StackFrame';
  protected $stackFramesDataType = 'array';
  protected $statusType = 'Google_Service_CloudDebugger_StatusMessage';
  protected $statusDataType = '';
  protected $variableTableType = 'Google_Service_CloudDebugger_Variable';
  protected $variableTableDataType = 'array';

  public function getAction()
  {
    return $this->action;
  }

  public function setAction($action)
  {
    $this->action = $action;
  }

  public function getCondition()
  {
    return $this->condition;
  }

  public function setCondition($condition)
  {
    $this->condition = $condition;
  }

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  /**
   * @param Google_Service_CloudDebugger_Variable
   */
  public function setEvaluatedExpressions($evaluatedExpressions)
  {
    $this->evaluatedExpressions = $evaluatedExpressions;
  }
  /**
   * @return Google_Service_CloudDebugger_Variable
   */
  public function getEvaluatedExpressions()
  {
    return $this->evaluatedExpressions;
  }

  public function getExpressions()
  {
    return $this->expressions;
  }

  public function setExpressions($expressions)
  {
    $this->expressions = $expressions;
  }

  public function getFinalTime()
  {
    return $this->finalTime;
  }

  public function setFinalTime($finalTime)
  {
    $this->finalTime = $finalTime;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getIsFinalState()
  {
    return $this->isFinalState;
  }

  public function setIsFinalState($isFinalState)
  {
    $this->isFinalState = $isFinalState;
  }

  public function getLabels()
  {
    return $this->labels;
  }

  public function setLabels($labels)
  {
    $this->labels = $labels;
  }

  /**
   * @param Google_Service_CloudDebugger_SourceLocation
   */
  public function setLocation(Google_Service_CloudDebugger_SourceLocation $location)
  {
    $this->location = $location;
  }
  /**
   * @return Google_Service_CloudDebugger_SourceLocation
   */
  public function getLocation()
  {
    return $this->location;
  }

  public function getLogLevel()
  {
    return $this->logLevel;
  }

  public function setLogLevel($logLevel)
  {
    $this->logLevel = $logLevel;
  }

  public function getLogMessageFormat()
  {
    return $this->logMessageFormat;
  }

  public function setLogMessageFormat($logMessageFormat)
  {
    $this->logMessageFormat = $logMessageFormat;
  }

  /**
   * @param Google_Service_CloudDebugger_StackFrame
   */
  public function setStackFrames($stackFrames)
  {
    $this->stackFrames = $stackFrames;
  }
  /**
   * @return Google_Service_CloudDebugger_StackFrame
   */
  public function getStackFrames()
  {
    return $this->stackFrames;
  }
  /**
   * @param Google_Service_CloudDebugger_StatusMessage
   */
  public function setStatus(Google_Service_CloudDebugger_StatusMessage $status)
  {
    $this->status = $status;
  }
  /**
   * @return Google_Service_CloudDebugger_StatusMessage
   */
  public function getStatus()
  {
    return $this->status;
  }

  public function getUserEmail()
  {
    return $this->userEmail;
  }

  public function setUserEmail($userEmail)
  {
    $this->userEmail = $userEmail;
  }

  /**
   * @param Google_Service_CloudDebugger_Variable
   */
  public function setVariableTable($variableTable)
  {
    $this->variableTable = $variableTable;
  }
  /**
   * @return Google_Service_CloudDebugger_Variable
   */
  public function getVariableTable()
  {
    return $this->variableTable;
  }
}
