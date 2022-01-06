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

class Google_Service_ServiceUsage_Enum extends Google_Collection
{
  public $name;
  public $syntax;
  protected $collection_key = 'options';
  protected $enumvalueType = 'Google_Service_ServiceUsage_EnumValue';
  protected $enumvalueDataType = 'array';
  protected $optionsType = 'Google_Service_ServiceUsage_Option';
  protected $optionsDataType = 'array';
  protected $sourceContextType = 'Google_Service_ServiceUsage_SourceContext';
  protected $sourceContextDataType = '';

  /**
   * @param Google_Service_ServiceUsage_EnumValue
   */
  public function setEnumvalue($enumvalue)
  {
    $this->enumvalue = $enumvalue;
  }
  /**
   * @return Google_Service_ServiceUsage_EnumValue
   */
  public function getEnumvalue()
  {
    return $this->enumvalue;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @param Google_Service_ServiceUsage_Option
   */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /**
   * @return Google_Service_ServiceUsage_Option
   */
  public function getOptions()
  {
    return $this->options;
  }
  /**
   * @param Google_Service_ServiceUsage_SourceContext
   */
  public function setSourceContext(Google_Service_ServiceUsage_SourceContext $sourceContext)
  {
    $this->sourceContext = $sourceContext;
  }
  /**
   * @return Google_Service_ServiceUsage_SourceContext
   */
  public function getSourceContext()
  {
    return $this->sourceContext;
  }

  public function getSyntax()
  {
    return $this->syntax;
  }

  public function setSyntax($syntax)
  {
    $this->syntax = $syntax;
  }
}
