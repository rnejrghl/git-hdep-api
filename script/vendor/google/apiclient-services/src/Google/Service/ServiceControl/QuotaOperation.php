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

class Google_Service_ServiceControl_QuotaOperation extends Google_Collection
{
  public $consumerId;
  public $labels;
  public $methodName;
  public $operationId;
  public $quotaMode;
  protected $collection_key = 'quotaMetrics';
  protected $quotaMetricsType = 'Google_Service_ServiceControl_MetricValueSet';
  protected $quotaMetricsDataType = 'array';

  public function getConsumerId()
  {
    return $this->consumerId;
  }

  public function setConsumerId($consumerId)
  {
    $this->consumerId = $consumerId;
  }

  public function getLabels()
  {
    return $this->labels;
  }

  public function setLabels($labels)
  {
    $this->labels = $labels;
  }

  public function getMethodName()
  {
    return $this->methodName;
  }

  public function setMethodName($methodName)
  {
    $this->methodName = $methodName;
  }

  public function getOperationId()
  {
    return $this->operationId;
  }

  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }

  /**
   * @param Google_Service_ServiceControl_MetricValueSet
   */
  public function setQuotaMetrics($quotaMetrics)
  {
    $this->quotaMetrics = $quotaMetrics;
  }
  /**
   * @return Google_Service_ServiceControl_MetricValueSet
   */
  public function getQuotaMetrics()
  {
    return $this->quotaMetrics;
  }

  public function getQuotaMode()
  {
    return $this->quotaMode;
  }

  public function setQuotaMode($quotaMode)
  {
    $this->quotaMode = $quotaMode;
  }
}
