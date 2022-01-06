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

class Google_Service_PhotosLibrary_Album extends Google_Model
{
  public $coverPhotoBaseUrl;
  public $id;
  public $isWriteable;
  public $productUrl;
  public $title;
  public $totalMediaItems;
  protected $shareInfoType = 'Google_Service_PhotosLibrary_ShareInfo';
  protected $shareInfoDataType = '';

  public function getCoverPhotoBaseUrl()
  {
    return $this->coverPhotoBaseUrl;
  }

  public function setCoverPhotoBaseUrl($coverPhotoBaseUrl)
  {
    $this->coverPhotoBaseUrl = $coverPhotoBaseUrl;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getIsWriteable()
  {
    return $this->isWriteable;
  }

  public function setIsWriteable($isWriteable)
  {
    $this->isWriteable = $isWriteable;
  }

  public function getProductUrl()
  {
    return $this->productUrl;
  }

  public function setProductUrl($productUrl)
  {
    $this->productUrl = $productUrl;
  }

  /**
   * @param Google_Service_PhotosLibrary_ShareInfo
   */
  public function setShareInfo(Google_Service_PhotosLibrary_ShareInfo $shareInfo)
  {
    $this->shareInfo = $shareInfo;
  }
  /**
   * @return Google_Service_PhotosLibrary_ShareInfo
   */
  public function getShareInfo()
  {
    return $this->shareInfo;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTotalMediaItems()
  {
    return $this->totalMediaItems;
  }

  public function setTotalMediaItems($totalMediaItems)
  {
    $this->totalMediaItems = $totalMediaItems;
  }
}
