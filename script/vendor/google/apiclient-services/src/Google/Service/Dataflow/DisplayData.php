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

class Google_Service_Dataflow_DisplayData extends Google_Model
{
  public $boolValue;
  public $durationValue;
  public $floatValue;
  public $int64Value;
  public $javaClassValue;
  public $key;
  public $label;
  public $namespace;
  public $shortStrValue;
  public $strValue;
  public $timestampValue;
  public $url;

  public function getBoolValue()
  {
    return $this->boolValue;
  }

  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }

  public function getDurationValue()
  {
    return $this->durationValue;
  }

  public function setDurationValue($durationValue)
  {
    $this->durationValue = $durationValue;
  }

  public function getFloatValue()
  {
    return $this->floatValue;
  }

  public function setFloatValue($floatValue)
  {
    $this->floatValue = $floatValue;
  }

  public function getInt64Value()
  {
    return $this->int64Value;
  }

  public function setInt64Value($int64Value)
  {
    $this->int64Value = $int64Value;
  }

  public function getJavaClassValue()
  {
    return $this->javaClassValue;
  }

  public function setJavaClassValue($javaClassValue)
  {
    $this->javaClassValue = $javaClassValue;
  }

  public function getKey()
  {
    return $this->key;
  }

  public function setKey($key)
  {
    $this->key = $key;
  }

  public function getLabel()
  {
    return $this->label;
  }

  public function setLabel($label)
  {
    $this->label = $label;
  }

  public function getNamespace()
  {
    return $this->namespace;
  }

  public function setNamespace($namespace)
  {
    $this->namespace = $namespace;
  }

  public function getShortStrValue()
  {
    return $this->shortStrValue;
  }

  public function setShortStrValue($shortStrValue)
  {
    $this->shortStrValue = $shortStrValue;
  }

  public function getStrValue()
  {
    return $this->strValue;
  }

  public function setStrValue($strValue)
  {
    $this->strValue = $strValue;
  }

  public function getTimestampValue()
  {
    return $this->timestampValue;
  }

  public function setTimestampValue($timestampValue)
  {
    $this->timestampValue = $timestampValue;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }
}
