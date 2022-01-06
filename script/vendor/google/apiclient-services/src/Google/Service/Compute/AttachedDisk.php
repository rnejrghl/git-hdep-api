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

class Google_Service_Compute_AttachedDisk extends Google_Collection
{
  public $autoDelete;
  public $boot;
  public $deviceName;
  public $index;
  public $interface;
  public $kind;
  public $licenses;
  public $mode;
  public $source;
  public $type;
  protected $collection_key = 'licenses';
  protected $diskEncryptionKeyType = 'Google_Service_Compute_CustomerEncryptionKey';
  protected $diskEncryptionKeyDataType = '';
  protected $guestOsFeaturesType = 'Google_Service_Compute_GuestOsFeature';
  protected $guestOsFeaturesDataType = 'array';
  protected $initializeParamsType = 'Google_Service_Compute_AttachedDiskInitializeParams';
  protected $initializeParamsDataType = '';

  public function getAutoDelete()
  {
    return $this->autoDelete;
  }

  public function setAutoDelete($autoDelete)
  {
    $this->autoDelete = $autoDelete;
  }

  public function getBoot()
  {
    return $this->boot;
  }

  public function setBoot($boot)
  {
    $this->boot = $boot;
  }

  public function getDeviceName()
  {
    return $this->deviceName;
  }

  public function setDeviceName($deviceName)
  {
    $this->deviceName = $deviceName;
  }

  /**
   * @param Google_Service_Compute_CustomerEncryptionKey
   */
  public function setDiskEncryptionKey(Google_Service_Compute_CustomerEncryptionKey $diskEncryptionKey)
  {
    $this->diskEncryptionKey = $diskEncryptionKey;
  }
  /**
   * @return Google_Service_Compute_CustomerEncryptionKey
   */
  public function getDiskEncryptionKey()
  {
    return $this->diskEncryptionKey;
  }
  /**
   * @param Google_Service_Compute_GuestOsFeature
   */
  public function setGuestOsFeatures($guestOsFeatures)
  {
    $this->guestOsFeatures = $guestOsFeatures;
  }
  /**
   * @return Google_Service_Compute_GuestOsFeature
   */
  public function getGuestOsFeatures()
  {
    return $this->guestOsFeatures;
  }

  public function getIndex()
  {
    return $this->index;
  }

  public function setIndex($index)
  {
    $this->index = $index;
  }

  /**
   * @param Google_Service_Compute_AttachedDiskInitializeParams
   */
  public function setInitializeParams(Google_Service_Compute_AttachedDiskInitializeParams $initializeParams)
  {
    $this->initializeParams = $initializeParams;
  }
  /**
   * @return Google_Service_Compute_AttachedDiskInitializeParams
   */
  public function getInitializeParams()
  {
    return $this->initializeParams;
  }

  public function getInterface()
  {
    return $this->interface;
  }

  public function setInterface($interface)
  {
    $this->interface = $interface;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLicenses()
  {
    return $this->licenses;
  }

  public function setLicenses($licenses)
  {
    $this->licenses = $licenses;
  }

  public function getMode()
  {
    return $this->mode;
  }

  public function setMode($mode)
  {
    $this->mode = $mode;
  }

  public function getSource()
  {
    return $this->source;
  }

  public function setSource($source)
  {
    $this->source = $source;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }
}
