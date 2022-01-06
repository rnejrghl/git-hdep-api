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

class Google_Service_Compute_NodeTemplate extends Google_Model
{
  public $creationTimestamp;
  public $description;
  public $id;
  public $kind;
  public $name;
  public $nodeAffinityLabels;
  public $nodeType;
  public $region;
  public $selfLink;
  public $status;
  public $statusMessage;
  protected $nodeTypeFlexibilityType = 'Google_Service_Compute_NodeTemplateNodeTypeFlexibility';
  protected $nodeTypeFlexibilityDataType = '';

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
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

  public function getNodeAffinityLabels()
  {
    return $this->nodeAffinityLabels;
  }

  public function setNodeAffinityLabels($nodeAffinityLabels)
  {
    $this->nodeAffinityLabels = $nodeAffinityLabels;
  }

  public function getNodeType()
  {
    return $this->nodeType;
  }

  public function setNodeType($nodeType)
  {
    $this->nodeType = $nodeType;
  }

  /**
   * @param Google_Service_Compute_NodeTemplateNodeTypeFlexibility
   */
  public function setNodeTypeFlexibility(Google_Service_Compute_NodeTemplateNodeTypeFlexibility $nodeTypeFlexibility)
  {
    $this->nodeTypeFlexibility = $nodeTypeFlexibility;
  }
  /**
   * @return Google_Service_Compute_NodeTemplateNodeTypeFlexibility
   */
  public function getNodeTypeFlexibility()
  {
    return $this->nodeTypeFlexibility;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatusMessage()
  {
    return $this->statusMessage;
  }

  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
}
