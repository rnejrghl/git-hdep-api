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

class Google_Service_Datastore_Value extends Google_Model
{
  public $blobValue;
  public $booleanValue;
  public $doubleValue;
  public $excludeFromIndexes;
  public $integerValue;
  public $meaning;
  public $nullValue;
  public $stringValue;
  public $timestampValue;
  protected $arrayValueType = 'Google_Service_Datastore_ArrayValue';
  protected $arrayValueDataType = '';
  protected $entityValueType = 'Google_Service_Datastore_Entity';
  protected $entityValueDataType = '';
  protected $geoPointValueType = 'Google_Service_Datastore_LatLng';
  protected $geoPointValueDataType = '';
  protected $keyValueType = 'Google_Service_Datastore_Key';
  protected $keyValueDataType = '';

  /**
   * @param Google_Service_Datastore_ArrayValue
   */
  public function setArrayValue(Google_Service_Datastore_ArrayValue $arrayValue)
  {
    $this->arrayValue = $arrayValue;
  }
  /**
   * @return Google_Service_Datastore_ArrayValue
   */
  public function getArrayValue()
  {
    return $this->arrayValue;
  }

  public function getBlobValue()
  {
    return $this->blobValue;
  }

  public function setBlobValue($blobValue)
  {
    $this->blobValue = $blobValue;
  }

  public function getBooleanValue()
  {
    return $this->booleanValue;
  }

  public function setBooleanValue($booleanValue)
  {
    $this->booleanValue = $booleanValue;
  }

  public function getDoubleValue()
  {
    return $this->doubleValue;
  }

  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }

  /**
   * @param Google_Service_Datastore_Entity
   */
  public function setEntityValue(Google_Service_Datastore_Entity $entityValue)
  {
    $this->entityValue = $entityValue;
  }
  /**
   * @return Google_Service_Datastore_Entity
   */
  public function getEntityValue()
  {
    return $this->entityValue;
  }

  public function getExcludeFromIndexes()
  {
    return $this->excludeFromIndexes;
  }

  public function setExcludeFromIndexes($excludeFromIndexes)
  {
    $this->excludeFromIndexes = $excludeFromIndexes;
  }

  /**
   * @param Google_Service_Datastore_LatLng
   */
  public function setGeoPointValue(Google_Service_Datastore_LatLng $geoPointValue)
  {
    $this->geoPointValue = $geoPointValue;
  }
  /**
   * @return Google_Service_Datastore_LatLng
   */
  public function getGeoPointValue()
  {
    return $this->geoPointValue;
  }

  public function getIntegerValue()
  {
    return $this->integerValue;
  }

  public function setIntegerValue($integerValue)
  {
    $this->integerValue = $integerValue;
  }

  /**
   * @param Google_Service_Datastore_Key
   */
  public function setKeyValue(Google_Service_Datastore_Key $keyValue)
  {
    $this->keyValue = $keyValue;
  }
  /**
   * @return Google_Service_Datastore_Key
   */
  public function getKeyValue()
  {
    return $this->keyValue;
  }

  public function getMeaning()
  {
    return $this->meaning;
  }

  public function setMeaning($meaning)
  {
    $this->meaning = $meaning;
  }

  public function getNullValue()
  {
    return $this->nullValue;
  }

  public function setNullValue($nullValue)
  {
    $this->nullValue = $nullValue;
  }

  public function getStringValue()
  {
    return $this->stringValue;
  }

  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }

  public function getTimestampValue()
  {
    return $this->timestampValue;
  }

  public function setTimestampValue($timestampValue)
  {
    $this->timestampValue = $timestampValue;
  }
}
