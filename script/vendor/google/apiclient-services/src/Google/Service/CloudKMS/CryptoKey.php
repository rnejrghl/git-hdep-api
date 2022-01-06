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

class Google_Service_CloudKMS_CryptoKey extends Google_Model
{
  public $createTime;
  public $labels;
  public $name;
  public $nextRotationTime;
  public $purpose;
  public $rotationPeriod;
  protected $primaryType = 'Google_Service_CloudKMS_CryptoKeyVersion';
  protected $primaryDataType = '';
  protected $versionTemplateType = 'Google_Service_CloudKMS_CryptoKeyVersionTemplate';
  protected $versionTemplateDataType = '';

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  public function getLabels()
  {
    return $this->labels;
  }

  public function setLabels($labels)
  {
    $this->labels = $labels;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getNextRotationTime()
  {
    return $this->nextRotationTime;
  }

  public function setNextRotationTime($nextRotationTime)
  {
    $this->nextRotationTime = $nextRotationTime;
  }

  /**
   * @param Google_Service_CloudKMS_CryptoKeyVersion
   */
  public function setPrimary(Google_Service_CloudKMS_CryptoKeyVersion $primary)
  {
    $this->primary = $primary;
  }
  /**
   * @return Google_Service_CloudKMS_CryptoKeyVersion
   */
  public function getPrimary()
  {
    return $this->primary;
  }

  public function getPurpose()
  {
    return $this->purpose;
  }

  public function setPurpose($purpose)
  {
    $this->purpose = $purpose;
  }

  public function getRotationPeriod()
  {
    return $this->rotationPeriod;
  }

  public function setRotationPeriod($rotationPeriod)
  {
    $this->rotationPeriod = $rotationPeriod;
  }

  /**
   * @param Google_Service_CloudKMS_CryptoKeyVersionTemplate
   */
  public function setVersionTemplate(Google_Service_CloudKMS_CryptoKeyVersionTemplate $versionTemplate)
  {
    $this->versionTemplate = $versionTemplate;
  }
  /**
   * @return Google_Service_CloudKMS_CryptoKeyVersionTemplate
   */
  public function getVersionTemplate()
  {
    return $this->versionTemplate;
  }
}
