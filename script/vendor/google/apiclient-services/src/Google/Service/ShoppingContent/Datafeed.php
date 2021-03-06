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

class Google_Service_ShoppingContent_Datafeed extends Google_Collection
{
  public $attributeLanguage;
  public $contentLanguage;
  public $contentType;
  public $fileName;
  public $id;
  public $intendedDestinations;
  public $kind;
  public $name;
  public $targetCountry;
  protected $collection_key = 'targets';
  protected $fetchScheduleType = 'Google_Service_ShoppingContent_DatafeedFetchSchedule';
  protected $fetchScheduleDataType = '';
  protected $formatType = 'Google_Service_ShoppingContent_DatafeedFormat';
  protected $formatDataType = '';
  protected $targetsType = 'Google_Service_ShoppingContent_DatafeedTarget';
  protected $targetsDataType = 'array';

  public function getAttributeLanguage()
  {
    return $this->attributeLanguage;
  }

  public function setAttributeLanguage($attributeLanguage)
  {
    $this->attributeLanguage = $attributeLanguage;
  }

  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }

  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }

  public function getContentType()
  {
    return $this->contentType;
  }

  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }

  /**
   * @param Google_Service_ShoppingContent_DatafeedFetchSchedule
   */
  public function setFetchSchedule(Google_Service_ShoppingContent_DatafeedFetchSchedule $fetchSchedule)
  {
    $this->fetchSchedule = $fetchSchedule;
  }
  /**
   * @return Google_Service_ShoppingContent_DatafeedFetchSchedule
   */
  public function getFetchSchedule()
  {
    return $this->fetchSchedule;
  }

  public function getFileName()
  {
    return $this->fileName;
  }

  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }

  /**
   * @param Google_Service_ShoppingContent_DatafeedFormat
   */
  public function setFormat(Google_Service_ShoppingContent_DatafeedFormat $format)
  {
    $this->format = $format;
  }
  /**
   * @return Google_Service_ShoppingContent_DatafeedFormat
   */
  public function getFormat()
  {
    return $this->format;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getIntendedDestinations()
  {
    return $this->intendedDestinations;
  }

  public function setIntendedDestinations($intendedDestinations)
  {
    $this->intendedDestinations = $intendedDestinations;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getTargetCountry()
  {
    return $this->targetCountry;
  }

  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }

  /**
   * @param Google_Service_ShoppingContent_DatafeedTarget
   */
  public function setTargets($targets)
  {
    $this->targets = $targets;
  }
  /**
   * @return Google_Service_ShoppingContent_DatafeedTarget
   */
  public function getTargets()
  {
    return $this->targets;
  }
}
