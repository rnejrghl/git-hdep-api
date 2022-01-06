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

class Google_Service_TagManager_Tag extends Google_Collection
{
  public $accountId;
  public $blockingRuleId;
  public $blockingTriggerId;
  public $containerId;
  public $fingerprint;
  public $firingRuleId;
  public $firingTriggerId;
  public $liveOnly;
  public $name;
  public $notes;
  public $parentFolderId;
  public $path;
  public $paused;
  public $scheduleEndMs;
  public $scheduleStartMs;
  public $tagFiringOption;
  public $tagId;
  public $tagManagerUrl;
  public $type;
  public $workspaceId;
  protected $collection_key = 'teardownTag';
  protected $parameterType = 'Google_Service_TagManager_Parameter';
  protected $parameterDataType = 'array';
  protected $priorityType = 'Google_Service_TagManager_Parameter';
  protected $priorityDataType = '';
  protected $setupTagType = 'Google_Service_TagManager_SetupTag';
  protected $setupTagDataType = 'array';
  protected $teardownTagType = 'Google_Service_TagManager_TeardownTag';
  protected $teardownTagDataType = 'array';

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getBlockingRuleId()
  {
    return $this->blockingRuleId;
  }

  public function setBlockingRuleId($blockingRuleId)
  {
    $this->blockingRuleId = $blockingRuleId;
  }

  public function getBlockingTriggerId()
  {
    return $this->blockingTriggerId;
  }

  public function setBlockingTriggerId($blockingTriggerId)
  {
    $this->blockingTriggerId = $blockingTriggerId;
  }

  public function getContainerId()
  {
    return $this->containerId;
  }

  public function setContainerId($containerId)
  {
    $this->containerId = $containerId;
  }

  public function getFingerprint()
  {
    return $this->fingerprint;
  }

  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }

  public function getFiringRuleId()
  {
    return $this->firingRuleId;
  }

  public function setFiringRuleId($firingRuleId)
  {
    $this->firingRuleId = $firingRuleId;
  }

  public function getFiringTriggerId()
  {
    return $this->firingTriggerId;
  }

  public function setFiringTriggerId($firingTriggerId)
  {
    $this->firingTriggerId = $firingTriggerId;
  }

  public function getLiveOnly()
  {
    return $this->liveOnly;
  }

  public function setLiveOnly($liveOnly)
  {
    $this->liveOnly = $liveOnly;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getNotes()
  {
    return $this->notes;
  }

  public function setNotes($notes)
  {
    $this->notes = $notes;
  }

  /**
   * @param Google_Service_TagManager_Parameter
   */
  public function setParameter($parameter)
  {
    $this->parameter = $parameter;
  }
  /**
   * @return Google_Service_TagManager_Parameter
   */
  public function getParameter()
  {
    return $this->parameter;
  }

  public function getParentFolderId()
  {
    return $this->parentFolderId;
  }

  public function setParentFolderId($parentFolderId)
  {
    $this->parentFolderId = $parentFolderId;
  }

  public function getPath()
  {
    return $this->path;
  }

  public function setPath($path)
  {
    $this->path = $path;
  }

  public function getPaused()
  {
    return $this->paused;
  }

  public function setPaused($paused)
  {
    $this->paused = $paused;
  }

  /**
   * @param Google_Service_TagManager_Parameter
   */
  public function setPriority(Google_Service_TagManager_Parameter $priority)
  {
    $this->priority = $priority;
  }
  /**
   * @return Google_Service_TagManager_Parameter
   */
  public function getPriority()
  {
    return $this->priority;
  }

  public function getScheduleEndMs()
  {
    return $this->scheduleEndMs;
  }

  public function setScheduleEndMs($scheduleEndMs)
  {
    $this->scheduleEndMs = $scheduleEndMs;
  }

  public function getScheduleStartMs()
  {
    return $this->scheduleStartMs;
  }

  public function setScheduleStartMs($scheduleStartMs)
  {
    $this->scheduleStartMs = $scheduleStartMs;
  }

  /**
   * @param Google_Service_TagManager_SetupTag
   */
  public function setSetupTag($setupTag)
  {
    $this->setupTag = $setupTag;
  }
  /**
   * @return Google_Service_TagManager_SetupTag
   */
  public function getSetupTag()
  {
    return $this->setupTag;
  }

  public function getTagFiringOption()
  {
    return $this->tagFiringOption;
  }

  public function setTagFiringOption($tagFiringOption)
  {
    $this->tagFiringOption = $tagFiringOption;
  }

  public function getTagId()
  {
    return $this->tagId;
  }

  public function setTagId($tagId)
  {
    $this->tagId = $tagId;
  }

  public function getTagManagerUrl()
  {
    return $this->tagManagerUrl;
  }

  public function setTagManagerUrl($tagManagerUrl)
  {
    $this->tagManagerUrl = $tagManagerUrl;
  }

  /**
   * @param Google_Service_TagManager_TeardownTag
   */
  public function setTeardownTag($teardownTag)
  {
    $this->teardownTag = $teardownTag;
  }
  /**
   * @return Google_Service_TagManager_TeardownTag
   */
  public function getTeardownTag()
  {
    return $this->teardownTag;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getWorkspaceId()
  {
    return $this->workspaceId;
  }

  public function setWorkspaceId($workspaceId)
  {
    $this->workspaceId = $workspaceId;
  }
}
