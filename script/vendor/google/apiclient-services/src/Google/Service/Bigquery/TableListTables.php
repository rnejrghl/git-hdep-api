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

class Google_Service_Bigquery_TableListTables extends Google_Model
{
  public $creationTime;
  public $expirationTime;
  public $friendlyName;
  public $id;
  public $kind;
  public $labels;
  public $type;
  protected $clusteringType = 'Google_Service_Bigquery_Clustering';
  protected $clusteringDataType = '';
  protected $tableReferenceType = 'Google_Service_Bigquery_TableReference';
  protected $tableReferenceDataType = '';
  protected $timePartitioningType = 'Google_Service_Bigquery_TimePartitioning';
  protected $timePartitioningDataType = '';
  protected $viewType = 'Google_Service_Bigquery_TableListTablesView';
  protected $viewDataType = '';

  /**
   * @param Google_Service_Bigquery_Clustering
   */
  public function setClustering(Google_Service_Bigquery_Clustering $clustering)
  {
    $this->clustering = $clustering;
  }
  /**
   * @return Google_Service_Bigquery_Clustering
   */
  public function getClustering()
  {
    return $this->clustering;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getExpirationTime()
  {
    return $this->expirationTime;
  }

  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }

  public function getFriendlyName()
  {
    return $this->friendlyName;
  }

  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
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
   * @param Google_Service_Bigquery_TableReference
   */
  public function setTableReference(Google_Service_Bigquery_TableReference $tableReference)
  {
    $this->tableReference = $tableReference;
  }
  /**
   * @return Google_Service_Bigquery_TableReference
   */
  public function getTableReference()
  {
    return $this->tableReference;
  }
  /**
   * @param Google_Service_Bigquery_TimePartitioning
   */
  public function setTimePartitioning(Google_Service_Bigquery_TimePartitioning $timePartitioning)
  {
    $this->timePartitioning = $timePartitioning;
  }
  /**
   * @return Google_Service_Bigquery_TimePartitioning
   */
  public function getTimePartitioning()
  {
    return $this->timePartitioning;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  /**
   * @param Google_Service_Bigquery_TableListTablesView
   */
  public function setView(Google_Service_Bigquery_TableListTablesView $view)
  {
    $this->view = $view;
  }
  /**
   * @return Google_Service_Bigquery_TableListTablesView
   */
  public function getView()
  {
    return $this->view;
  }
}
