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

class Google_Service_Urlshortener_Url extends Google_Model
{
  public $created;
  public $id;
  public $kind;
  public $longUrl;
  public $status;
  protected $analyticsType = 'Google_Service_Urlshortener_AnalyticsSummary';
  protected $analyticsDataType = '';

  /**
   * @param Google_Service_Urlshortener_AnalyticsSummary
   */
  public function setAnalytics(Google_Service_Urlshortener_AnalyticsSummary $analytics)
  {
    $this->analytics = $analytics;
  }
  /**
   * @return Google_Service_Urlshortener_AnalyticsSummary
   */
  public function getAnalytics()
  {
    return $this->analytics;
  }

  public function getCreated()
  {
    return $this->created;
  }

  public function setCreated($created)
  {
    $this->created = $created;
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

  public function getLongUrl()
  {
    return $this->longUrl;
  }

  public function setLongUrl($longUrl)
  {
    $this->longUrl = $longUrl;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }
}
