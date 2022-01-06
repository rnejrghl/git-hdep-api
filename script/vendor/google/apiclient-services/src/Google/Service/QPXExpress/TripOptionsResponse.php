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

class Google_Service_QPXExpress_TripOptionsResponse extends Google_Collection
{
  public $kind;
  public $requestId;
  protected $collection_key = 'tripOption';
  protected $dataType = 'Google_Service_QPXExpress_Data';
  protected $dataDataType = '';
  protected $tripOptionType = 'Google_Service_QPXExpress_TripOption';
  protected $tripOptionDataType = 'array';

  /**
   * @param Google_Service_QPXExpress_Data
   */
  public function setData(Google_Service_QPXExpress_Data $data)
  {
    $this->data = $data;
  }
  /**
   * @return Google_Service_QPXExpress_Data
   */
  public function getData()
  {
    return $this->data;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getRequestId()
  {
    return $this->requestId;
  }

  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }

  /**
   * @param Google_Service_QPXExpress_TripOption
   */
  public function setTripOption($tripOption)
  {
    $this->tripOption = $tripOption;
  }
  /**
   * @return Google_Service_QPXExpress_TripOption
   */
  public function getTripOption()
  {
    return $this->tripOption;
  }
}