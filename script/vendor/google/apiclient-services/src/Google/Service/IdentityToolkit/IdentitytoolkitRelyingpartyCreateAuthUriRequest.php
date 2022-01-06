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

class Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyCreateAuthUriRequest extends Google_Model
{
  public $appId;
  public $authFlowType;
  public $clientId;
  public $context;
  public $continueUri;
  public $customParameter;
  public $hostedDomain;
  public $identifier;
  public $oauthConsumerKey;
  public $oauthScope;
  public $openidRealm;
  public $otaApp;
  public $providerId;
  public $sessionId;
  public $tenantId;
  public $tenantProjectNumber;

  public function getAppId()
  {
    return $this->appId;
  }

  public function setAppId($appId)
  {
    $this->appId = $appId;
  }

  public function getAuthFlowType()
  {
    return $this->authFlowType;
  }

  public function setAuthFlowType($authFlowType)
  {
    $this->authFlowType = $authFlowType;
  }

  public function getClientId()
  {
    return $this->clientId;
  }

  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }

  public function getContext()
  {
    return $this->context;
  }

  public function setContext($context)
  {
    $this->context = $context;
  }

  public function getContinueUri()
  {
    return $this->continueUri;
  }

  public function setContinueUri($continueUri)
  {
    $this->continueUri = $continueUri;
  }

  public function getCustomParameter()
  {
    return $this->customParameter;
  }

  public function setCustomParameter($customParameter)
  {
    $this->customParameter = $customParameter;
  }

  public function getHostedDomain()
  {
    return $this->hostedDomain;
  }

  public function setHostedDomain($hostedDomain)
  {
    $this->hostedDomain = $hostedDomain;
  }

  public function getIdentifier()
  {
    return $this->identifier;
  }

  public function setIdentifier($identifier)
  {
    $this->identifier = $identifier;
  }

  public function getOauthConsumerKey()
  {
    return $this->oauthConsumerKey;
  }

  public function setOauthConsumerKey($oauthConsumerKey)
  {
    $this->oauthConsumerKey = $oauthConsumerKey;
  }

  public function getOauthScope()
  {
    return $this->oauthScope;
  }

  public function setOauthScope($oauthScope)
  {
    $this->oauthScope = $oauthScope;
  }

  public function getOpenidRealm()
  {
    return $this->openidRealm;
  }

  public function setOpenidRealm($openidRealm)
  {
    $this->openidRealm = $openidRealm;
  }

  public function getOtaApp()
  {
    return $this->otaApp;
  }

  public function setOtaApp($otaApp)
  {
    $this->otaApp = $otaApp;
  }

  public function getProviderId()
  {
    return $this->providerId;
  }

  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }

  public function getTenantId()
  {
    return $this->tenantId;
  }

  public function setTenantId($tenantId)
  {
    $this->tenantId = $tenantId;
  }

  public function getTenantProjectNumber()
  {
    return $this->tenantProjectNumber;
  }

  public function setTenantProjectNumber($tenantProjectNumber)
  {
    $this->tenantProjectNumber = $tenantProjectNumber;
  }
}
