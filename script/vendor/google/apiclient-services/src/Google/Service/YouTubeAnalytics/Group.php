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

class Google_Service_YouTubeAnalytics_Group extends Google_Model
{
  public $etag;
  public $id;
  public $kind;
  protected $contentDetailsType = 'Google_Service_YouTubeAnalytics_GroupContentDetails';
  protected $contentDetailsDataType = '';
  protected $errorsType = 'Google_Service_YouTubeAnalytics_Errors';
  protected $errorsDataType = '';
  protected $snippetType = 'Google_Service_YouTubeAnalytics_GroupSnippet';
  protected $snippetDataType = '';

  /**
   * @param Google_Service_YouTubeAnalytics_GroupContentDetails
   */
  public function setContentDetails(Google_Service_YouTubeAnalytics_GroupContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }
  /**
   * @return Google_Service_YouTubeAnalytics_GroupContentDetails
   */
  public function getContentDetails()
  {
    return $this->contentDetails;
  }
  /**
   * @param Google_Service_YouTubeAnalytics_Errors
   */
  public function setErrors(Google_Service_YouTubeAnalytics_Errors $errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return Google_Service_YouTubeAnalytics_Errors
   */
  public function getErrors()
  {
    return $this->errors;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  /**
   * @param Google_Service_YouTubeAnalytics_GroupSnippet
   */
  public function setSnippet(Google_Service_YouTubeAnalytics_GroupSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /**
   * @return Google_Service_YouTubeAnalytics_GroupSnippet
   */
  public function getSnippet()
  {
    return $this->snippet;
  }
}