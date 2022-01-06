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

class Google_Service_AndroidEnterprise_ManagedConfiguration extends Google_Collection
{
  public $kind;
  public $productId;
  protected $collection_key = 'managedProperty';
  protected $configurationVariablesType = 'Google_Service_AndroidEnterprise_ConfigurationVariables';
  protected $configurationVariablesDataType = '';
  protected $managedPropertyType = 'Google_Service_AndroidEnterprise_ManagedProperty';
  protected $managedPropertyDataType = 'array';

  /**
   * @param Google_Service_AndroidEnterprise_ConfigurationVariables
   */
  public function setConfigurationVariables(Google_Service_AndroidEnterprise_ConfigurationVariables $configurationVariables)
  {
    $this->configurationVariables = $configurationVariables;
  }
  /**
   * @return Google_Service_AndroidEnterprise_ConfigurationVariables
   */
  public function getConfigurationVariables()
  {
    return $this->configurationVariables;
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
   * @param Google_Service_AndroidEnterprise_ManagedProperty
   */
  public function setManagedProperty($managedProperty)
  {
    $this->managedProperty = $managedProperty;
  }
  /**
   * @return Google_Service_AndroidEnterprise_ManagedProperty
   */
  public function getManagedProperty()
  {
    return $this->managedProperty;
  }

  public function getProductId()
  {
    return $this->productId;
  }

  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
}
