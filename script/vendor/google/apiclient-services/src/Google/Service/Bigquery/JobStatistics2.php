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

class Google_Service_Bigquery_JobStatistics2 extends Google_Collection
{
  public $billingTier;
  public $cacheHit;
  public $ddlOperationPerformed;
  public $estimatedBytesProcessed;
  public $modelTrainingCurrentIteration;
  public $modelTrainingExpectedTotalIteration;
  public $numDmlAffectedRows;
  public $statementType;
  public $totalBytesBilled;
  public $totalBytesProcessed;
  public $totalPartitionsProcessed;
  public $totalSlotMs;
  protected $collection_key = 'undeclaredQueryParameters';
  protected $ddlTargetTableType = 'Google_Service_Bigquery_TableReference';
  protected $ddlTargetTableDataType = '';
  protected $modelTrainingType = 'Google_Service_Bigquery_BigQueryModelTraining';
  protected $modelTrainingDataType = '';
  protected $queryPlanType = 'Google_Service_Bigquery_ExplainQueryStage';
  protected $queryPlanDataType = 'array';
  protected $referencedTablesType = 'Google_Service_Bigquery_TableReference';
  protected $referencedTablesDataType = 'array';
  protected $reservationUsageType = 'Google_Service_Bigquery_JobStatistics2ReservationUsage';
  protected $reservationUsageDataType = 'array';
  protected $schemaType = 'Google_Service_Bigquery_TableSchema';
  protected $schemaDataType = '';
  protected $timelineType = 'Google_Service_Bigquery_QueryTimelineSample';
  protected $timelineDataType = 'array';
  protected $undeclaredQueryParametersType = 'Google_Service_Bigquery_QueryParameter';
  protected $undeclaredQueryParametersDataType = 'array';

  public function getBillingTier()
  {
    return $this->billingTier;
  }

  public function setBillingTier($billingTier)
  {
    $this->billingTier = $billingTier;
  }

  public function getCacheHit()
  {
    return $this->cacheHit;
  }

  public function setCacheHit($cacheHit)
  {
    $this->cacheHit = $cacheHit;
  }

  public function getDdlOperationPerformed()
  {
    return $this->ddlOperationPerformed;
  }

  public function setDdlOperationPerformed($ddlOperationPerformed)
  {
    $this->ddlOperationPerformed = $ddlOperationPerformed;
  }

  /**
   * @param Google_Service_Bigquery_TableReference
   */
  public function setDdlTargetTable(Google_Service_Bigquery_TableReference $ddlTargetTable)
  {
    $this->ddlTargetTable = $ddlTargetTable;
  }
  /**
   * @return Google_Service_Bigquery_TableReference
   */
  public function getDdlTargetTable()
  {
    return $this->ddlTargetTable;
  }

  public function getEstimatedBytesProcessed()
  {
    return $this->estimatedBytesProcessed;
  }

  public function setEstimatedBytesProcessed($estimatedBytesProcessed)
  {
    $this->estimatedBytesProcessed = $estimatedBytesProcessed;
  }

  /**
   * @param Google_Service_Bigquery_BigQueryModelTraining
   */
  public function setModelTraining(Google_Service_Bigquery_BigQueryModelTraining $modelTraining)
  {
    $this->modelTraining = $modelTraining;
  }
  /**
   * @return Google_Service_Bigquery_BigQueryModelTraining
   */
  public function getModelTraining()
  {
    return $this->modelTraining;
  }

  public function getModelTrainingCurrentIteration()
  {
    return $this->modelTrainingCurrentIteration;
  }

  public function setModelTrainingCurrentIteration($modelTrainingCurrentIteration)
  {
    $this->modelTrainingCurrentIteration = $modelTrainingCurrentIteration;
  }

  public function getModelTrainingExpectedTotalIteration()
  {
    return $this->modelTrainingExpectedTotalIteration;
  }

  public function setModelTrainingExpectedTotalIteration($modelTrainingExpectedTotalIteration)
  {
    $this->modelTrainingExpectedTotalIteration = $modelTrainingExpectedTotalIteration;
  }

  public function getNumDmlAffectedRows()
  {
    return $this->numDmlAffectedRows;
  }

  public function setNumDmlAffectedRows($numDmlAffectedRows)
  {
    $this->numDmlAffectedRows = $numDmlAffectedRows;
  }

  /**
   * @param Google_Service_Bigquery_ExplainQueryStage
   */
  public function setQueryPlan($queryPlan)
  {
    $this->queryPlan = $queryPlan;
  }
  /**
   * @return Google_Service_Bigquery_ExplainQueryStage
   */
  public function getQueryPlan()
  {
    return $this->queryPlan;
  }
  /**
   * @param Google_Service_Bigquery_TableReference
   */
  public function setReferencedTables($referencedTables)
  {
    $this->referencedTables = $referencedTables;
  }
  /**
   * @return Google_Service_Bigquery_TableReference
   */
  public function getReferencedTables()
  {
    return $this->referencedTables;
  }
  /**
   * @param Google_Service_Bigquery_JobStatistics2ReservationUsage
   */
  public function setReservationUsage($reservationUsage)
  {
    $this->reservationUsage = $reservationUsage;
  }
  /**
   * @return Google_Service_Bigquery_JobStatistics2ReservationUsage
   */
  public function getReservationUsage()
  {
    return $this->reservationUsage;
  }
  /**
   * @param Google_Service_Bigquery_TableSchema
   */
  public function setSchema(Google_Service_Bigquery_TableSchema $schema)
  {
    $this->schema = $schema;
  }
  /**
   * @return Google_Service_Bigquery_TableSchema
   */
  public function getSchema()
  {
    return $this->schema;
  }

  public function getStatementType()
  {
    return $this->statementType;
  }

  public function setStatementType($statementType)
  {
    $this->statementType = $statementType;
  }

  /**
   * @param Google_Service_Bigquery_QueryTimelineSample
   */
  public function setTimeline($timeline)
  {
    $this->timeline = $timeline;
  }
  /**
   * @return Google_Service_Bigquery_QueryTimelineSample
   */
  public function getTimeline()
  {
    return $this->timeline;
  }

  public function getTotalBytesBilled()
  {
    return $this->totalBytesBilled;
  }

  public function setTotalBytesBilled($totalBytesBilled)
  {
    $this->totalBytesBilled = $totalBytesBilled;
  }

  public function getTotalBytesProcessed()
  {
    return $this->totalBytesProcessed;
  }

  public function setTotalBytesProcessed($totalBytesProcessed)
  {
    $this->totalBytesProcessed = $totalBytesProcessed;
  }

  public function getTotalPartitionsProcessed()
  {
    return $this->totalPartitionsProcessed;
  }

  public function setTotalPartitionsProcessed($totalPartitionsProcessed)
  {
    $this->totalPartitionsProcessed = $totalPartitionsProcessed;
  }

  public function getTotalSlotMs()
  {
    return $this->totalSlotMs;
  }

  public function setTotalSlotMs($totalSlotMs)
  {
    $this->totalSlotMs = $totalSlotMs;
  }

  /**
   * @param Google_Service_Bigquery_QueryParameter
   */
  public function setUndeclaredQueryParameters($undeclaredQueryParameters)
  {
    $this->undeclaredQueryParameters = $undeclaredQueryParameters;
  }
  /**
   * @return Google_Service_Bigquery_QueryParameter
   */
  public function getUndeclaredQueryParameters()
  {
    return $this->undeclaredQueryParameters;
  }
}
