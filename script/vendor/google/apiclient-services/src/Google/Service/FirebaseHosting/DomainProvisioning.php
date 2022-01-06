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

class Google_Service_FirebaseHosting_DomainProvisioning extends Google_Collection
{
  public $certChallengeDiscoveredTxt;
  public $certStatus;
  public $discoveredIps;
  public $dnsFetchTime;
  public $dnsStatus;
  public $expectedIps;
  protected $collection_key = 'expectedIps';
  protected $certChallengeDnsType = 'Google_Service_FirebaseHosting_CertDnsChallenge';
  protected $certChallengeDnsDataType = '';
  protected $certChallengeHttpType = 'Google_Service_FirebaseHosting_CertHttpChallenge';
  protected $certChallengeHttpDataType = '';

  public function getCertChallengeDiscoveredTxt()
  {
    return $this->certChallengeDiscoveredTxt;
  }

  public function setCertChallengeDiscoveredTxt($certChallengeDiscoveredTxt)
  {
    $this->certChallengeDiscoveredTxt = $certChallengeDiscoveredTxt;
  }

  /**
   * @param Google_Service_FirebaseHosting_CertDnsChallenge
   */
  public function setCertChallengeDns(Google_Service_FirebaseHosting_CertDnsChallenge $certChallengeDns)
  {
    $this->certChallengeDns = $certChallengeDns;
  }
  /**
   * @return Google_Service_FirebaseHosting_CertDnsChallenge
   */
  public function getCertChallengeDns()
  {
    return $this->certChallengeDns;
  }
  /**
   * @param Google_Service_FirebaseHosting_CertHttpChallenge
   */
  public function setCertChallengeHttp(Google_Service_FirebaseHosting_CertHttpChallenge $certChallengeHttp)
  {
    $this->certChallengeHttp = $certChallengeHttp;
  }
  /**
   * @return Google_Service_FirebaseHosting_CertHttpChallenge
   */
  public function getCertChallengeHttp()
  {
    return $this->certChallengeHttp;
  }

  public function getCertStatus()
  {
    return $this->certStatus;
  }

  public function setCertStatus($certStatus)
  {
    $this->certStatus = $certStatus;
  }

  public function getDiscoveredIps()
  {
    return $this->discoveredIps;
  }

  public function setDiscoveredIps($discoveredIps)
  {
    $this->discoveredIps = $discoveredIps;
  }

  public function getDnsFetchTime()
  {
    return $this->dnsFetchTime;
  }

  public function setDnsFetchTime($dnsFetchTime)
  {
    $this->dnsFetchTime = $dnsFetchTime;
  }

  public function getDnsStatus()
  {
    return $this->dnsStatus;
  }

  public function setDnsStatus($dnsStatus)
  {
    $this->dnsStatus = $dnsStatus;
  }

  public function getExpectedIps()
  {
    return $this->expectedIps;
  }

  public function setExpectedIps($expectedIps)
  {
    $this->expectedIps = $expectedIps;
  }
}
