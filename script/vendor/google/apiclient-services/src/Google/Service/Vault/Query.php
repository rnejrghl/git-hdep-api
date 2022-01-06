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

class Google_Service_Vault_Query extends Google_Model
{
  public $corpus;
  public $dataScope;
  public $endTime;
  public $searchMethod;
  public $startTime;
  public $terms;
  public $timeZone;
  protected $accountInfoType = 'Google_Service_Vault_AccountInfo';
  protected $accountInfoDataType = '';
  protected $driveOptionsType = 'Google_Service_Vault_DriveOptions';
  protected $driveOptionsDataType = '';
  protected $hangoutsChatInfoType = 'Google_Service_Vault_HangoutsChatInfo';
  protected $hangoutsChatInfoDataType = '';
  protected $hangoutsChatOptionsType = 'Google_Service_Vault_HangoutsChatOptions';
  protected $hangoutsChatOptionsDataType = '';
  protected $mailOptionsType = 'Google_Service_Vault_MailOptions';
  protected $mailOptionsDataType = '';
  protected $orgUnitInfoType = 'Google_Service_Vault_OrgUnitInfo';
  protected $orgUnitInfoDataType = '';
  protected $teamDriveInfoType = 'Google_Service_Vault_TeamDriveInfo';
  protected $teamDriveInfoDataType = '';

  /**
   * @param Google_Service_Vault_AccountInfo
   */
  public function setAccountInfo(Google_Service_Vault_AccountInfo $accountInfo)
  {
    $this->accountInfo = $accountInfo;
  }
  /**
   * @return Google_Service_Vault_AccountInfo
   */
  public function getAccountInfo()
  {
    return $this->accountInfo;
  }

  public function getCorpus()
  {
    return $this->corpus;
  }

  public function setCorpus($corpus)
  {
    $this->corpus = $corpus;
  }

  public function getDataScope()
  {
    return $this->dataScope;
  }

  public function setDataScope($dataScope)
  {
    $this->dataScope = $dataScope;
  }

  /**
   * @param Google_Service_Vault_DriveOptions
   */
  public function setDriveOptions(Google_Service_Vault_DriveOptions $driveOptions)
  {
    $this->driveOptions = $driveOptions;
  }
  /**
   * @return Google_Service_Vault_DriveOptions
   */
  public function getDriveOptions()
  {
    return $this->driveOptions;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  /**
   * @param Google_Service_Vault_HangoutsChatInfo
   */
  public function setHangoutsChatInfo(Google_Service_Vault_HangoutsChatInfo $hangoutsChatInfo)
  {
    $this->hangoutsChatInfo = $hangoutsChatInfo;
  }
  /**
   * @return Google_Service_Vault_HangoutsChatInfo
   */
  public function getHangoutsChatInfo()
  {
    return $this->hangoutsChatInfo;
  }
  /**
   * @param Google_Service_Vault_HangoutsChatOptions
   */
  public function setHangoutsChatOptions(Google_Service_Vault_HangoutsChatOptions $hangoutsChatOptions)
  {
    $this->hangoutsChatOptions = $hangoutsChatOptions;
  }
  /**
   * @return Google_Service_Vault_HangoutsChatOptions
   */
  public function getHangoutsChatOptions()
  {
    return $this->hangoutsChatOptions;
  }
  /**
   * @param Google_Service_Vault_MailOptions
   */
  public function setMailOptions(Google_Service_Vault_MailOptions $mailOptions)
  {
    $this->mailOptions = $mailOptions;
  }
  /**
   * @return Google_Service_Vault_MailOptions
   */
  public function getMailOptions()
  {
    return $this->mailOptions;
  }
  /**
   * @param Google_Service_Vault_OrgUnitInfo
   */
  public function setOrgUnitInfo(Google_Service_Vault_OrgUnitInfo $orgUnitInfo)
  {
    $this->orgUnitInfo = $orgUnitInfo;
  }
  /**
   * @return Google_Service_Vault_OrgUnitInfo
   */
  public function getOrgUnitInfo()
  {
    return $this->orgUnitInfo;
  }

  public function getSearchMethod()
  {
    return $this->searchMethod;
  }

  public function setSearchMethod($searchMethod)
  {
    $this->searchMethod = $searchMethod;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  /**
   * @param Google_Service_Vault_TeamDriveInfo
   */
  public function setTeamDriveInfo(Google_Service_Vault_TeamDriveInfo $teamDriveInfo)
  {
    $this->teamDriveInfo = $teamDriveInfo;
  }
  /**
   * @return Google_Service_Vault_TeamDriveInfo
   */
  public function getTeamDriveInfo()
  {
    return $this->teamDriveInfo;
  }

  public function getTerms()
  {
    return $this->terms;
  }

  public function setTerms($terms)
  {
    $this->terms = $terms;
  }

  public function getTimeZone()
  {
    return $this->timeZone;
  }

  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
}
