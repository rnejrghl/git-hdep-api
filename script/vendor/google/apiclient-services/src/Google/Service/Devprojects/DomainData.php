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

class Google_Service_Devprojects_DomainData extends Google_Collection
{
  public $contract;
  public $domainAccountCurrencyCode;
  public $domainName;
  public $kind;
  public $projects;
  public $provisionable;
  public $reactivatable;
  public $respayState;
  public $suspendable;
  protected $collection_key = 'projects';

  public function getContract()
  {
    return $this->contract;
  }

  public function setContract($contract)
  {
    $this->contract = $contract;
  }

  public function getDomainAccountCurrencyCode()
  {
    return $this->domainAccountCurrencyCode;
  }

  public function setDomainAccountCurrencyCode($domainAccountCurrencyCode)
  {
    $this->domainAccountCurrencyCode = $domainAccountCurrencyCode;
  }

  public function getDomainName()
  {
    return $this->domainName;
  }

  public function setDomainName($domainName)
  {
    $this->domainName = $domainName;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getProjects()
  {
    return $this->projects;
  }

  public function setProjects($projects)
  {
    $this->projects = $projects;
  }

  public function getProvisionable()
  {
    return $this->provisionable;
  }

  public function setProvisionable($provisionable)
  {
    $this->provisionable = $provisionable;
  }

  public function getReactivatable()
  {
    return $this->reactivatable;
  }

  public function setReactivatable($reactivatable)
  {
    $this->reactivatable = $reactivatable;
  }

  public function getRespayState()
  {
    return $this->respayState;
  }

  public function setRespayState($respayState)
  {
    $this->respayState = $respayState;
  }

  public function getSuspendable()
  {
    return $this->suspendable;
  }

  public function setSuspendable($suspendable)
  {
    $this->suspendable = $suspendable;
  }
}
