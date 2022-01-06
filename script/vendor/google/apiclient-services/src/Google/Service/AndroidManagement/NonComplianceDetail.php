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

class Google_Service_AndroidManagement_NonComplianceDetail extends Google_Model
{
  public $currentValue;
  public $fieldPath;
  public $installationFailureReason;
  public $nonComplianceReason;
  public $packageName;
  public $settingName;

  public function getCurrentValue()
  {
    return $this->currentValue;
  }

  public function setCurrentValue($currentValue)
  {
    $this->currentValue = $currentValue;
  }

  public function getFieldPath()
  {
    return $this->fieldPath;
  }

  public function setFieldPath($fieldPath)
  {
    $this->fieldPath = $fieldPath;
  }

  public function getInstallationFailureReason()
  {
    return $this->installationFailureReason;
  }

  public function setInstallationFailureReason($installationFailureReason)
  {
    $this->installationFailureReason = $installationFailureReason;
  }

  public function getNonComplianceReason()
  {
    return $this->nonComplianceReason;
  }

  public function setNonComplianceReason($nonComplianceReason)
  {
    $this->nonComplianceReason = $nonComplianceReason;
  }

  public function getPackageName()
  {
    return $this->packageName;
  }

  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }

  public function getSettingName()
  {
    return $this->settingName;
  }

  public function setSettingName($settingName)
  {
    $this->settingName = $settingName;
  }
}
