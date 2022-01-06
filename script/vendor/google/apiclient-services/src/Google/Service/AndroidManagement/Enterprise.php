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

class Google_Service_AndroidManagement_Enterprise extends Google_Collection
{
  public $appAutoApprovalEnabled;
  public $enabledNotificationTypes;
  public $enterpriseDisplayName;
  public $name;
  public $primaryColor;
  public $pubsubTopic;
  protected $collection_key = 'termsAndConditions';
  protected $logoType = 'Google_Service_AndroidManagement_ExternalData';
  protected $logoDataType = '';
  protected $signinDetailsType = 'Google_Service_AndroidManagement_SigninDetail';
  protected $signinDetailsDataType = 'array';
  protected $termsAndConditionsType = 'Google_Service_AndroidManagement_TermsAndConditions';
  protected $termsAndConditionsDataType = 'array';

  public function getAppAutoApprovalEnabled()
  {
    return $this->appAutoApprovalEnabled;
  }

  public function setAppAutoApprovalEnabled($appAutoApprovalEnabled)
  {
    $this->appAutoApprovalEnabled = $appAutoApprovalEnabled;
  }

  public function getEnabledNotificationTypes()
  {
    return $this->enabledNotificationTypes;
  }

  public function setEnabledNotificationTypes($enabledNotificationTypes)
  {
    $this->enabledNotificationTypes = $enabledNotificationTypes;
  }

  public function getEnterpriseDisplayName()
  {
    return $this->enterpriseDisplayName;
  }

  public function setEnterpriseDisplayName($enterpriseDisplayName)
  {
    $this->enterpriseDisplayName = $enterpriseDisplayName;
  }

  /**
   * @param Google_Service_AndroidManagement_ExternalData
   */
  public function setLogo(Google_Service_AndroidManagement_ExternalData $logo)
  {
    $this->logo = $logo;
  }
  /**
   * @return Google_Service_AndroidManagement_ExternalData
   */
  public function getLogo()
  {
    return $this->logo;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPrimaryColor()
  {
    return $this->primaryColor;
  }

  public function setPrimaryColor($primaryColor)
  {
    $this->primaryColor = $primaryColor;
  }

  public function getPubsubTopic()
  {
    return $this->pubsubTopic;
  }

  public function setPubsubTopic($pubsubTopic)
  {
    $this->pubsubTopic = $pubsubTopic;
  }

  /**
   * @param Google_Service_AndroidManagement_SigninDetail
   */
  public function setSigninDetails($signinDetails)
  {
    $this->signinDetails = $signinDetails;
  }
  /**
   * @return Google_Service_AndroidManagement_SigninDetail
   */
  public function getSigninDetails()
  {
    return $this->signinDetails;
  }
  /**
   * @param Google_Service_AndroidManagement_TermsAndConditions
   */
  public function setTermsAndConditions($termsAndConditions)
  {
    $this->termsAndConditions = $termsAndConditions;
  }
  /**
   * @return Google_Service_AndroidManagement_TermsAndConditions
   */
  public function getTermsAndConditions()
  {
    return $this->termsAndConditions;
  }
}
