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

class Google_Service_Compute_AttachedDiskInitializeParams extends Google_Model
{
  public $description;
  public $diskName;
  public $diskSizeGb;
  public $diskType;
  public $labels;
  public $sourceImage;
  protected $sourceImageEncryptionKeyType = 'Google_Service_Compute_CustomerEncryptionKey';
  protected $sourceImageEncryptionKeyDataType = '';

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDiskName()
  {
    return $this->diskName;
  }

  public function setDiskName($diskName)
  {
    $this->diskName = $diskName;
  }

  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
  }

  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }

  public function getDiskType()
  {
    return $this->diskType;
  }

  public function setDiskType($diskType)
  {
    $this->diskType = $diskType;
  }

  public function getLabels()
  {
    return $this->labels;
  }

  public function setLabels($labels)
  {
    $this->labels = $labels;
  }

  public function getSourceImage()
  {
    return $this->sourceImage;
  }

  public function setSourceImage($sourceImage)
  {
    $this->sourceImage = $sourceImage;
  }

  /**
   * @param Google_Service_Compute_CustomerEncryptionKey
   */
  public function setSourceImageEncryptionKey(Google_Service_Compute_CustomerEncryptionKey $sourceImageEncryptionKey)
  {
    $this->sourceImageEncryptionKey = $sourceImageEncryptionKey;
  }
  /**
   * @return Google_Service_Compute_CustomerEncryptionKey
   */
  public function getSourceImageEncryptionKey()
  {
    return $this->sourceImageEncryptionKey;
  }
}
