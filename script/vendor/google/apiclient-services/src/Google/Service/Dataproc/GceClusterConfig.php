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

class Google_Service_Dataproc_GceClusterConfig extends Google_Collection
{
  public $internalIpOnly;
  public $metadata;
  public $networkUri;
  public $serviceAccount;
  public $serviceAccountScopes;
  public $subnetworkUri;
  public $tags;
  public $zoneUri;
  protected $collection_key = 'tags';

  public function getInternalIpOnly()
  {
    return $this->internalIpOnly;
  }

  public function setInternalIpOnly($internalIpOnly)
  {
    $this->internalIpOnly = $internalIpOnly;
  }

  public function getMetadata()
  {
    return $this->metadata;
  }

  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }

  public function getNetworkUri()
  {
    return $this->networkUri;
  }

  public function setNetworkUri($networkUri)
  {
    $this->networkUri = $networkUri;
  }

  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }

  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }

  public function getServiceAccountScopes()
  {
    return $this->serviceAccountScopes;
  }

  public function setServiceAccountScopes($serviceAccountScopes)
  {
    $this->serviceAccountScopes = $serviceAccountScopes;
  }

  public function getSubnetworkUri()
  {
    return $this->subnetworkUri;
  }

  public function setSubnetworkUri($subnetworkUri)
  {
    $this->subnetworkUri = $subnetworkUri;
  }

  public function getTags()
  {
    return $this->tags;
  }

  public function setTags($tags)
  {
    $this->tags = $tags;
  }

  public function getZoneUri()
  {
    return $this->zoneUri;
  }

  public function setZoneUri($zoneUri)
  {
    $this->zoneUri = $zoneUri;
  }
}
