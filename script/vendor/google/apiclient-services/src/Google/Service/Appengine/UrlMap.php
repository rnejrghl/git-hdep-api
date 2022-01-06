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

class Google_Service_Appengine_UrlMap extends Google_Model
{
  public $authFailAction;
  public $login;
  public $redirectHttpResponseCode;
  public $securityLevel;
  public $urlRegex;
  protected $apiEndpointType = 'Google_Service_Appengine_ApiEndpointHandler';
  protected $apiEndpointDataType = '';
  protected $scriptType = 'Google_Service_Appengine_ScriptHandler';
  protected $scriptDataType = '';
  protected $staticFilesType = 'Google_Service_Appengine_StaticFilesHandler';
  protected $staticFilesDataType = '';

  /**
   * @param Google_Service_Appengine_ApiEndpointHandler
   */
  public function setApiEndpoint(Google_Service_Appengine_ApiEndpointHandler $apiEndpoint)
  {
    $this->apiEndpoint = $apiEndpoint;
  }
  /**
   * @return Google_Service_Appengine_ApiEndpointHandler
   */
  public function getApiEndpoint()
  {
    return $this->apiEndpoint;
  }

  public function getAuthFailAction()
  {
    return $this->authFailAction;
  }

  public function setAuthFailAction($authFailAction)
  {
    $this->authFailAction = $authFailAction;
  }

  public function getLogin()
  {
    return $this->login;
  }

  public function setLogin($login)
  {
    $this->login = $login;
  }

  public function getRedirectHttpResponseCode()
  {
    return $this->redirectHttpResponseCode;
  }

  public function setRedirectHttpResponseCode($redirectHttpResponseCode)
  {
    $this->redirectHttpResponseCode = $redirectHttpResponseCode;
  }

  /**
   * @param Google_Service_Appengine_ScriptHandler
   */
  public function setScript(Google_Service_Appengine_ScriptHandler $script)
  {
    $this->script = $script;
  }
  /**
   * @return Google_Service_Appengine_ScriptHandler
   */
  public function getScript()
  {
    return $this->script;
  }

  public function getSecurityLevel()
  {
    return $this->securityLevel;
  }

  public function setSecurityLevel($securityLevel)
  {
    $this->securityLevel = $securityLevel;
  }

  /**
   * @param Google_Service_Appengine_StaticFilesHandler
   */
  public function setStaticFiles(Google_Service_Appengine_StaticFilesHandler $staticFiles)
  {
    $this->staticFiles = $staticFiles;
  }
  /**
   * @return Google_Service_Appengine_StaticFilesHandler
   */
  public function getStaticFiles()
  {
    return $this->staticFiles;
  }

  public function getUrlRegex()
  {
    return $this->urlRegex;
  }

  public function setUrlRegex($urlRegex)
  {
    $this->urlRegex = $urlRegex;
  }
}
