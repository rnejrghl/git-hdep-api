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

class Google_Service_Directory_Group extends Google_Collection
{
  public $adminCreated;
  public $aliases;
  public $description;
  public $directMembersCount;
  public $email;
  public $etag;
  public $id;
  public $kind;
  public $name;
  public $nonEditableAliases;
  protected $collection_key = 'nonEditableAliases';

  public function getAdminCreated()
  {
    return $this->adminCreated;
  }

  public function setAdminCreated($adminCreated)
  {
    $this->adminCreated = $adminCreated;
  }

  public function getAliases()
  {
    return $this->aliases;
  }

  public function setAliases($aliases)
  {
    $this->aliases = $aliases;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDirectMembersCount()
  {
    return $this->directMembersCount;
  }

  public function setDirectMembersCount($directMembersCount)
  {
    $this->directMembersCount = $directMembersCount;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getNonEditableAliases()
  {
    return $this->nonEditableAliases;
  }

  public function setNonEditableAliases($nonEditableAliases)
  {
    $this->nonEditableAliases = $nonEditableAliases;
  }
}
