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

class Google_Service_DLP_GooglePrivacyDlpV2DeidentifyContentRequest extends Google_Model
{
  public $deidentifyTemplateName;
  public $inspectTemplateName;
  protected $deidentifyConfigType = 'Google_Service_DLP_GooglePrivacyDlpV2DeidentifyConfig';
  protected $deidentifyConfigDataType = '';
  protected $inspectConfigType = 'Google_Service_DLP_GooglePrivacyDlpV2InspectConfig';
  protected $inspectConfigDataType = '';
  protected $itemType = 'Google_Service_DLP_GooglePrivacyDlpV2ContentItem';
  protected $itemDataType = '';

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2DeidentifyConfig
   */
  public function setDeidentifyConfig(Google_Service_DLP_GooglePrivacyDlpV2DeidentifyConfig $deidentifyConfig)
  {
    $this->deidentifyConfig = $deidentifyConfig;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2DeidentifyConfig
   */
  public function getDeidentifyConfig()
  {
    return $this->deidentifyConfig;
  }

  public function getDeidentifyTemplateName()
  {
    return $this->deidentifyTemplateName;
  }

  public function setDeidentifyTemplateName($deidentifyTemplateName)
  {
    $this->deidentifyTemplateName = $deidentifyTemplateName;
  }

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2InspectConfig
   */
  public function setInspectConfig(Google_Service_DLP_GooglePrivacyDlpV2InspectConfig $inspectConfig)
  {
    $this->inspectConfig = $inspectConfig;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2InspectConfig
   */
  public function getInspectConfig()
  {
    return $this->inspectConfig;
  }

  public function getInspectTemplateName()
  {
    return $this->inspectTemplateName;
  }

  public function setInspectTemplateName($inspectTemplateName)
  {
    $this->inspectTemplateName = $inspectTemplateName;
  }

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2ContentItem
   */
  public function setItem(Google_Service_DLP_GooglePrivacyDlpV2ContentItem $item)
  {
    $this->item = $item;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2ContentItem
   */
  public function getItem()
  {
    return $this->item;
  }
}
