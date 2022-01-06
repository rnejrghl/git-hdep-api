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

class Google_Service_ShoppingContent_DatafeedStatus extends Google_Collection
{
  public $country;
  public $datafeedId;
  public $itemsTotal;
  public $itemsValid;
  public $kind;
  public $language;
  public $lastUploadDate;
  public $processingStatus;
  protected $collection_key = 'warnings';
  protected $errorsType = 'Google_Service_ShoppingContent_DatafeedStatusError';
  protected $errorsDataType = 'array';
  protected $warningsType = 'Google_Service_ShoppingContent_DatafeedStatusError';
  protected $warningsDataType = 'array';

  public function getCountry()
  {
    return $this->country;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getDatafeedId()
  {
    return $this->datafeedId;
  }

  public function setDatafeedId($datafeedId)
  {
    $this->datafeedId = $datafeedId;
  }

  /**
   * @param Google_Service_ShoppingContent_DatafeedStatusError
   */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return Google_Service_ShoppingContent_DatafeedStatusError
   */
  public function getErrors()
  {
    return $this->errors;
  }

  public function getItemsTotal()
  {
    return $this->itemsTotal;
  }

  public function setItemsTotal($itemsTotal)
  {
    $this->itemsTotal = $itemsTotal;
  }

  public function getItemsValid()
  {
    return $this->itemsValid;
  }

  public function setItemsValid($itemsValid)
  {
    $this->itemsValid = $itemsValid;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLanguage()
  {
    return $this->language;
  }

  public function setLanguage($language)
  {
    $this->language = $language;
  }

  public function getLastUploadDate()
  {
    return $this->lastUploadDate;
  }

  public function setLastUploadDate($lastUploadDate)
  {
    $this->lastUploadDate = $lastUploadDate;
  }

  public function getProcessingStatus()
  {
    return $this->processingStatus;
  }

  public function setProcessingStatus($processingStatus)
  {
    $this->processingStatus = $processingStatus;
  }

  /**
   * @param Google_Service_ShoppingContent_DatafeedStatusError
   */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /**
   * @return Google_Service_ShoppingContent_DatafeedStatusError
   */
  public function getWarnings()
  {
    return $this->warnings;
  }
}
