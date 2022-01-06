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

class Google_Service_Dns_Quota extends Google_Collection
{
  public $dnsKeysPerManagedZone;
  public $kind;
  public $managedZones;
  public $resourceRecordsPerRrset;
  public $rrsetAdditionsPerChange;
  public $rrsetDeletionsPerChange;
  public $rrsetsPerManagedZone;
  public $totalRrdataSizePerChange;
  protected $collection_key = 'whitelistedKeySpecs';
  protected $whitelistedKeySpecsType = 'Google_Service_Dns_DnsKeySpec';
  protected $whitelistedKeySpecsDataType = 'array';

  public function getDnsKeysPerManagedZone()
  {
    return $this->dnsKeysPerManagedZone;
  }

  public function setDnsKeysPerManagedZone($dnsKeysPerManagedZone)
  {
    $this->dnsKeysPerManagedZone = $dnsKeysPerManagedZone;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getManagedZones()
  {
    return $this->managedZones;
  }

  public function setManagedZones($managedZones)
  {
    $this->managedZones = $managedZones;
  }

  public function getResourceRecordsPerRrset()
  {
    return $this->resourceRecordsPerRrset;
  }

  public function setResourceRecordsPerRrset($resourceRecordsPerRrset)
  {
    $this->resourceRecordsPerRrset = $resourceRecordsPerRrset;
  }

  public function getRrsetAdditionsPerChange()
  {
    return $this->rrsetAdditionsPerChange;
  }

  public function setRrsetAdditionsPerChange($rrsetAdditionsPerChange)
  {
    $this->rrsetAdditionsPerChange = $rrsetAdditionsPerChange;
  }

  public function getRrsetDeletionsPerChange()
  {
    return $this->rrsetDeletionsPerChange;
  }

  public function setRrsetDeletionsPerChange($rrsetDeletionsPerChange)
  {
    $this->rrsetDeletionsPerChange = $rrsetDeletionsPerChange;
  }

  public function getRrsetsPerManagedZone()
  {
    return $this->rrsetsPerManagedZone;
  }

  public function setRrsetsPerManagedZone($rrsetsPerManagedZone)
  {
    $this->rrsetsPerManagedZone = $rrsetsPerManagedZone;
  }

  public function getTotalRrdataSizePerChange()
  {
    return $this->totalRrdataSizePerChange;
  }

  public function setTotalRrdataSizePerChange($totalRrdataSizePerChange)
  {
    $this->totalRrdataSizePerChange = $totalRrdataSizePerChange;
  }

  /**
   * @param Google_Service_Dns_DnsKeySpec
   */
  public function setWhitelistedKeySpecs($whitelistedKeySpecs)
  {
    $this->whitelistedKeySpecs = $whitelistedKeySpecs;
  }
  /**
   * @return Google_Service_Dns_DnsKeySpec
   */
  public function getWhitelistedKeySpecs()
  {
    return $this->whitelistedKeySpecs;
  }
}
