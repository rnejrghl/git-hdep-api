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

class Google_Service_AdExchangeBuyerII_Note extends Google_Model
{
  public $createTime;
  public $creatorRole;
  public $note;
  public $noteId;
  public $proposalRevision;

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  public function getCreatorRole()
  {
    return $this->creatorRole;
  }

  public function setCreatorRole($creatorRole)
  {
    $this->creatorRole = $creatorRole;
  }

  public function getNote()
  {
    return $this->note;
  }

  public function setNote($note)
  {
    $this->note = $note;
  }

  public function getNoteId()
  {
    return $this->noteId;
  }

  public function setNoteId($noteId)
  {
    $this->noteId = $noteId;
  }

  public function getProposalRevision()
  {
    return $this->proposalRevision;
  }

  public function setProposalRevision($proposalRevision)
  {
    $this->proposalRevision = $proposalRevision;
  }
}
