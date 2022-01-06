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

class Google_Service_AndroidEnterprise_Policy extends Google_Collection
{
  public $autoUpdatePolicy;
  public $productAvailabilityPolicy;
  protected $collection_key = 'productPolicy';
  protected $maintenanceWindowType = 'Google_Service_AndroidEnterprise_MaintenanceWindow';
  protected $maintenanceWindowDataType = '';
  protected $productPolicyType = 'Google_Service_AndroidEnterprise_ProductPolicy';
  protected $productPolicyDataType = 'array';

  public function getAutoUpdatePolicy()
  {
    return $this->autoUpdatePolicy;
  }

  public function setAutoUpdatePolicy($autoUpdatePolicy)
  {
    $this->autoUpdatePolicy = $autoUpdatePolicy;
  }

  /**
   * @param Google_Service_AndroidEnterprise_MaintenanceWindow
   */
  public function setMaintenanceWindow(Google_Service_AndroidEnterprise_MaintenanceWindow $maintenanceWindow)
  {
    $this->maintenanceWindow = $maintenanceWindow;
  }
  /**
   * @return Google_Service_AndroidEnterprise_MaintenanceWindow
   */
  public function getMaintenanceWindow()
  {
    return $this->maintenanceWindow;
  }

  public function getProductAvailabilityPolicy()
  {
    return $this->productAvailabilityPolicy;
  }

  public function setProductAvailabilityPolicy($productAvailabilityPolicy)
  {
    $this->productAvailabilityPolicy = $productAvailabilityPolicy;
  }

  /**
   * @param Google_Service_AndroidEnterprise_ProductPolicy
   */
  public function setProductPolicy($productPolicy)
  {
    $this->productPolicy = $productPolicy;
  }
  /**
   * @return Google_Service_AndroidEnterprise_ProductPolicy
   */
  public function getProductPolicy()
  {
    return $this->productPolicy;
  }
}
