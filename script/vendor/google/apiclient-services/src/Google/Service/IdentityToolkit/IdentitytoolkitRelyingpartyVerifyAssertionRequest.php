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

class Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyAssertionRequest extends Google_Model
{
  public $autoCreate;
  public $delegatedProjectNumber;
  public $idToken;
  public $instanceId;
  public $pendingIdToken;
  public $postBody;
  public $requestUri;
  public $returnIdpCredential;
  public $returnRefreshToken;
  public $returnSecureToken;
  public $sessionId;
  public $tenantId;
  public $tenantProjectNumber;

  public function getAutoCreate()
  {
    return $this->autoCreate;
  }

  public function setAutoCreate($autoCreate)
  {
    $this->autoCreate = $autoCreate;
  }

  public function getDelegatedProjectNumber()
  {
    return $this->delegatedProjectNumber;
  }

  public function setDelegatedProjectNumber($delegatedProjectNumber)
  {
    $this->delegatedProjectNumber = $delegatedProjectNumber;
  }

  public function getIdToken()
  {
    return $this->idToken;
  }

  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }

  public function getInstanceId()
  {
    return $this->instanceId;
  }

  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }

  public function getPendingIdToken()
  {
    return $this->pendingIdToken;
  }

  public function setPendingIdToken($pendingIdToken)
  {
    $this->pendingIdToken = $pendingIdToken;
  }

  public function getPostBody()
  {
    return $this->postBody;
  }

  public function setPostBody($postBody)
  {
    $this->postBody = $postBody;
  }

  public function getRequestUri()
  {
    return $this->requestUri;
  }

  public function setRequestUri($requestUri)
  {
    $this->requestUri = $requestUri;
  }

  public function getReturnIdpCredential()
  {
    return $this->returnIdpCredential;
  }

  public function setReturnIdpCredential($returnIdpCredential)
  {
    $this->returnIdpCredential = $returnIdpCredential;
  }

  public function getReturnRefreshToken()
  {
    return $this->returnRefreshToken;
  }

  public function setReturnRefreshToken($returnRefreshToken)
  {
    $this->returnRefreshToken = $returnRefreshToken;
  }

  public function getReturnSecureToken()
  {
    return $this->returnSecureToken;
  }

  public function setReturnSecureToken($returnSecureToken)
  {
    $this->returnSecureToken = $returnSecureToken;
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
