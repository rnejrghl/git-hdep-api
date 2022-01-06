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

class Google_Service_PolyService_Asset extends Google_Collection
{
  public $authorName;
  public $createTime;
  public $description;
  public $displayName;
  public $isCurated;
  public $license;
  public $metadata;
  public $name;
  public $updateTime;
  public $visibility;
  protected $collection_key = 'formats';
  protected $formatsType = 'Google_Service_PolyService_Format';
  protected $formatsDataType = 'array';
  protected $presentationParamsType = 'Google_Service_PolyService_PresentationParams';
  protected $presentationParamsDataType = '';
  protected $remixInfoType = 'Google_Service_PolyService_RemixInfo';
  protected $remixInfoDataType = '';
  protected $thumbnailType = 'Google_Service_PolyService_PolyFile';
  protected $thumbnailDataType = '';

  public function getAuthorName()
  {
    return $this->authorName;
  }

  public function setAuthorName($authorName)
  {
    $this->authorName = $authorName;
  }

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  /**
   * @param Google_Service_PolyService_Format
   */
  public function setFormats($formats)
  {
    $this->formats = $formats;
  }
  /**
   * @return Google_Service_PolyService_Format
   */
  public function getFormats()
  {
    return $this->formats;
  }

  public function getIsCurated()
  {
    return $this->isCurated;
  }

  public function setIsCurated($isCurated)
  {
    $this->isCurated = $isCurated;
  }

  public function getLicense()
  {
    return $this->license;
  }

  public function setLicense($license)
  {
    $this->license = $license;
  }

  public function getMetadata()
  {
    return $this->metadata;
  }

  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @param Google_Service_PolyService_PresentationParams
   */
  public function setPresentationParams(Google_Service_PolyService_PresentationParams $presentationParams)
  {
    $this->presentationParams = $presentationParams;
  }
  /**
   * @return Google_Service_PolyService_PresentationParams
   */
  public function getPresentationParams()
  {
    return $this->presentationParams;
  }
  /**
   * @param Google_Service_PolyService_RemixInfo
   */
  public function setRemixInfo(Google_Service_PolyService_RemixInfo $remixInfo)
  {
    $this->remixInfo = $remixInfo;
  }
  /**
   * @return Google_Service_PolyService_RemixInfo
   */
  public function getRemixInfo()
  {
    return $this->remixInfo;
  }
  /**
   * @param Google_Service_PolyService_PolyFile
   */
  public function setThumbnail(Google_Service_PolyService_PolyFile $thumbnail)
  {
    $this->thumbnail = $thumbnail;
  }
  /**
   * @return Google_Service_PolyService_PolyFile
   */
  public function getThumbnail()
  {
    return $this->thumbnail;
  }

  public function getUpdateTime()
  {
    return $this->updateTime;
  }

  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }

  public function getVisibility()
  {
    return $this->visibility;
  }

  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
}
