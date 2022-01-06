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

class Google_Service_CloudTrace_AttributeValue extends Google_Model
{
  public $boolValue;
  public $intValue;
  protected $stringValueType = 'Google_Service_CloudTrace_TruncatableString';
  protected $stringValueDataType = '';

  public function getBoolValue()
  {
    return $this->boolValue;
  }

  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }

  public function getIntValue()
  {
    return $this->intValue;
  }

  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }

  /**
   * @param Google_Service_CloudTrace_TruncatableString
   */
  public function setStringValue(Google_Service_CloudTrace_TruncatableString $stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /**
   * @return Google_Service_CloudTrace_TruncatableString
   */
  public function getStringValue()
  {
    return $this->stringValue;
  }
}