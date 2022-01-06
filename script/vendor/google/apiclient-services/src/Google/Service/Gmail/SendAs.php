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

class Google_Service_Gmail_SendAs extends Google_Model
{
  public $displayName;
  public $isDefault;
  public $isPrimary;
  public $replyToAddress;
  public $sendAsEmail;
  public $signature;
  public $treatAsAlias;
  public $verificationStatus;
  protected $smtpMsaType = 'Google_Service_Gmail_SmtpMsa';
  protected $smtpMsaDataType = '';

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getIsDefault()
  {
    return $this->isDefault;
  }

  public function setIsDefault($isDefault)
  {
    $this->isDefault = $isDefault;
  }

  public function getIsPrimary()
  {
    return $this->isPrimary;
  }

  public function setIsPrimary($isPrimary)
  {
    $this->isPrimary = $isPrimary;
  }

  public function getReplyToAddress()
  {
    return $this->replyToAddress;
  }

  public function setReplyToAddress($replyToAddress)
  {
    $this->replyToAddress = $replyToAddress;
  }

  public function getSendAsEmail()
  {
    return $this->sendAsEmail;
  }

  public function setSendAsEmail($sendAsEmail)
  {
    $this->sendAsEmail = $sendAsEmail;
  }

  public function getSignature()
  {
    return $this->signature;
  }

  public function setSignature($signature)
  {
    $this->signature = $signature;
  }

  /**
   * @param Google_Service_Gmail_SmtpMsa
   */
  public function setSmtpMsa(Google_Service_Gmail_SmtpMsa $smtpMsa)
  {
    $this->smtpMsa = $smtpMsa;
  }
  /**
   * @return Google_Service_Gmail_SmtpMsa
   */
  public function getSmtpMsa()
  {
    return $this->smtpMsa;
  }

  public function getTreatAsAlias()
  {
    return $this->treatAsAlias;
  }

  public function setTreatAsAlias($treatAsAlias)
  {
    $this->treatAsAlias = $treatAsAlias;
  }

  public function getVerificationStatus()
  {
    return $this->verificationStatus;
  }

  public function setVerificationStatus($verificationStatus)
  {
    $this->verificationStatus = $verificationStatus;
  }
}
