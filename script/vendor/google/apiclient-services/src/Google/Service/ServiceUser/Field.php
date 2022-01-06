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

class Google_Service_ServiceUser_Field extends Google_Collection
{
  public $cardinality;
  public $defaultValue;
  public $jsonName;
  public $kind;
  public $name;
  public $number;
  public $oneofIndex;
  public $packed;
  public $typeUrl;
  protected $collection_key = 'options';
  protected $optionsType = 'Google_Service_ServiceUser_Option';
  protected $optionsDataType = 'array';

  public function getCardinality()
  {
    return $this->cardinality;
  }

  public function setCardinality($cardinality)
  {
    $this->cardinality = $cardinality;
  }

  public function getDefaultValue()
  {
    return $this->defaultValue;
  }

  public function setDefaultValue($defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }

  public function getJsonName()
  {
    return $this->jsonName;
  }

  public function setJsonName($jsonName)
  {
    $this->jsonName = $jsonName;
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

  public function getNumber()
  {
    return $this->number;
  }

  public function setNumber($number)
  {
    $this->number = $number;
  }

  public function getOneofIndex()
  {
    return $this->oneofIndex;
  }

  public function setOneofIndex($oneofIndex)
  {
    $this->oneofIndex = $oneofIndex;
  }

  /**
   * @param Google_Service_ServiceUser_Option
   */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /**
   * @return Google_Service_ServiceUser_Option
   */
  public function getOptions()
  {
    return $this->options;
  }

  public function getPacked()
  {
    return $this->packed;
  }

  public function setPacked($packed)
  {
    $this->packed = $packed;
  }

  public function getTypeUrl()
  {
    return $this->typeUrl;
  }

  public function setTypeUrl($typeUrl)
  {
    $this->typeUrl = $typeUrl;
  }
}
