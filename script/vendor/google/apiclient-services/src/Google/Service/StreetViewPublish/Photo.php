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

class Google_Service_StreetViewPublish_Photo extends Google_Collection
{
  public $captureTime;
  public $downloadUrl;
  public $shareLink;
  public $thumbnailUrl;
  public $viewCount;
  protected $collection_key = 'places';
  protected $connectionsType = 'Google_Service_StreetViewPublish_Connection';
  protected $connectionsDataType = 'array';
  protected $photoIdType = 'Google_Service_StreetViewPublish_PhotoId';
  protected $photoIdDataType = '';
  protected $placesType = 'Google_Service_StreetViewPublish_Place';
  protected $placesDataType = 'array';
  protected $poseType = 'Google_Service_StreetViewPublish_Pose';
  protected $poseDataType = '';
  protected $uploadReferenceType = 'Google_Service_StreetViewPublish_UploadRef';
  protected $uploadReferenceDataType = '';

  public function getCaptureTime()
  {
    return $this->captureTime;
  }

  public function setCaptureTime($captureTime)
  {
    $this->captureTime = $captureTime;
  }

  /**
   * @param Google_Service_StreetViewPublish_Connection
   */
  public function setConnections($connections)
  {
    $this->connections = $connections;
  }
  /**
   * @return Google_Service_StreetViewPublish_Connection
   */
  public function getConnections()
  {
    return $this->connections;
  }

  public function getDownloadUrl()
  {
    return $this->downloadUrl;
  }

  public function setDownloadUrl($downloadUrl)
  {
    $this->downloadUrl = $downloadUrl;
  }

  /**
   * @param Google_Service_StreetViewPublish_PhotoId
   */
  public function setPhotoId(Google_Service_StreetViewPublish_PhotoId $photoId)
  {
    $this->photoId = $photoId;
  }
  /**
   * @return Google_Service_StreetViewPublish_PhotoId
   */
  public function getPhotoId()
  {
    return $this->photoId;
  }
  /**
   * @param Google_Service_StreetViewPublish_Place
   */
  public function setPlaces($places)
  {
    $this->places = $places;
  }
  /**
   * @return Google_Service_StreetViewPublish_Place
   */
  public function getPlaces()
  {
    return $this->places;
  }
  /**
   * @param Google_Service_StreetViewPublish_Pose
   */
  public function setPose(Google_Service_StreetViewPublish_Pose $pose)
  {
    $this->pose = $pose;
  }
  /**
   * @return Google_Service_StreetViewPublish_Pose
   */
  public function getPose()
  {
    return $this->pose;
  }

  public function getShareLink()
  {
    return $this->shareLink;
  }

  public function setShareLink($shareLink)
  {
    $this->shareLink = $shareLink;
  }

  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
  }

  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }

  /**
   * @param Google_Service_StreetViewPublish_UploadRef
   */
  public function setUploadReference(Google_Service_StreetViewPublish_UploadRef $uploadReference)
  {
    $this->uploadReference = $uploadReference;
  }
  /**
   * @return Google_Service_StreetViewPublish_UploadRef
   */
  public function getUploadReference()
  {
    return $this->uploadReference;
  }

  public function getViewCount()
  {
    return $this->viewCount;
  }

  public function setViewCount($viewCount)
  {
    $this->viewCount = $viewCount;
  }
}
