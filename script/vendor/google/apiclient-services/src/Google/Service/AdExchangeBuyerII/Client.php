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

class Google_Service_AdExchangeBuyerII_Client extends Google_Model
{
  public $clientAccountId;
  public $clientName;
  public $entityId;
  public $entityName;
  public $entityType;
  public $partnerClientId;
  public $role;
  public $status;
  public $visibleToSeller;

  public function getClientAccountId()
  {
    return $this->clientAccountId;
  }

  public function setClientAccountId($clientAccountId)
  {
    $this->clientAccountId = $clientAccountId;
  }

  public function getClientName()
  {
    return $this->clientName;
  }

  public function setClientName($clientName)
  {
    $this->clientName = $clientName;
  }

  public function getEntityId()
  {
    return $this->entityId;
  }

  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }

  public function getEntityName()
  {
    return $this->entityName;
  }

  public function setEntityName($entityName)
  {
    $this->entityName = $entityName;
  }

  public function getEntityType()
  {
    return $this->entityType;
  }

  public function setEntityType($entityType)
  {
    $this->entityType = $entityType;
  }

  public function getPartnerClientId()
  {
    return $this->partnerClientId;
  }

  public function setPartnerClientId($partnerClientId)
  {
    $this->partnerClientId = $partnerClientId;
  }

  public function getRole()
  {
    return $this->role;
  }

  public function setRole($role)
  {
    $this->role = $role;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getVisibleToSeller()
  {
    return $this->visibleToSeller;
  }

  public function setVisibleToSeller($visibleToSeller)
  {
    $this->visibleToSeller = $visibleToSeller;
  }
}
