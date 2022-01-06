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

class Google_Service_ServiceUsage_AuthenticationRule extends Google_Collection
{
  public $allowWithoutCredential;
  public $selector;
  protected $collection_key = 'requirements';
  protected $oauthType = 'Google_Service_ServiceUsage_OAuthRequirements';
  protected $oauthDataType = '';
  protected $requirementsType = 'Google_Service_ServiceUsage_AuthRequirement';
  protected $requirementsDataType = 'array';

  public function getAllowWithoutCredential()
  {
    return $this->allowWithoutCredential;
  }

  public function setAllowWithoutCredential($allowWithoutCredential)
  {
    $this->allowWithoutCredential = $allowWithoutCredential;
  }

  /**
   * @param Google_Service_ServiceUsage_OAuthRequirements
   */
  public function setOauth(Google_Service_ServiceUsage_OAuthRequirements $oauth)
  {
    $this->oauth = $oauth;
  }
  /**
   * @return Google_Service_ServiceUsage_OAuthRequirements
   */
  public function getOauth()
  {
    return $this->oauth;
  }
  /**
   * @param Google_Service_ServiceUsage_AuthRequirement
   */
  public function setRequirements($requirements)
  {
    $this->requirements = $requirements;
  }
  /**
   * @return Google_Service_ServiceUsage_AuthRequirement
   */
  public function getRequirements()
  {
    return $this->requirements;
  }

  public function getSelector()
  {
    return $this->selector;
  }

  public function setSelector($selector)
  {
    $this->selector = $selector;
  }
}
