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

class Google_Service_ShoppingContent_OrdersCustomBatchResponseEntry extends Google_Model
{
  public $batchId;
  public $executionStatus;
  public $kind;
  protected $errorsType = 'Google_Service_ShoppingContent_Errors';
  protected $errorsDataType = '';
  protected $orderType = 'Google_Service_ShoppingContent_Order';
  protected $orderDataType = '';

  public function getBatchId()
  {
    return $this->batchId;
  }

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }

  /**
   * @param Google_Service_ShoppingContent_Errors
   */
  public function setErrors(Google_Service_ShoppingContent_Errors $errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return Google_Service_ShoppingContent_Errors
   */
  public function getErrors()
  {
    return $this->errors;
  }

  public function getExecutionStatus()
  {
    return $this->executionStatus;
  }

  public function setExecutionStatus($executionStatus)
  {
    $this->executionStatus = $executionStatus;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  /**
   * @param Google_Service_ShoppingContent_Order
   */
  public function setOrder(Google_Service_ShoppingContent_Order $order)
  {
    $this->order = $order;
  }
  /**
   * @return Google_Service_ShoppingContent_Order
   */
  public function getOrder()
  {
    return $this->order;
  }
}