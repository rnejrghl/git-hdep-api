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

class Google_Service_Compute_HttpHealthCheck extends Google_Model
{
  public $checkIntervalSec;
  public $creationTimestamp;
  public $description;
  public $healthyThreshold;
  public $host;
  public $id;
  public $kind;
  public $name;
  public $port;
  public $requestPath;
  public $selfLink;
  public $timeoutSec;
  public $unhealthyThreshold;

  public function getCheckIntervalSec()
  {
    return $this->checkIntervalSec;
  }

  public function setCheckIntervalSec($checkIntervalSec)
  {
    $this->checkIntervalSec = $checkIntervalSec;
  }

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

  public function getHealthyThreshold()
  {
    return $this->healthyThreshold;
  }

  public function setHealthyThreshold($healthyThreshold)
  {
    $this->healthyThreshold = $healthyThreshold;
  }

  public function getHost()
  {
    return $this->host;
  }

  public function setHost($host)
  {
    $this->host = $host;
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

  public function getPort()
  {
    return $this->port;
  }

  public function setPort($port)
  {
    $this->port = $port;
  }

  public function getRequestPath()
  {
    return $this->requestPath;
  }

  public function setRequestPath($requestPath)
  {
    $this->requestPath = $requestPath;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getTimeoutSec()
  {
    return $this->timeoutSec;
  }

  public function setTimeoutSec($timeoutSec)
  {
    $this->timeoutSec = $timeoutSec;
  }

  public function getUnhealthyThreshold()
  {
    return $this->unhealthyThreshold;
  }

  public function setUnhealthyThreshold($unhealthyThreshold)
  {
    $this->unhealthyThreshold = $unhealthyThreshold;
  }
}
