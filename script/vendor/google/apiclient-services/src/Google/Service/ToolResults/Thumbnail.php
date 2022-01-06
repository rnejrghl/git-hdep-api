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

class Google_Service_ToolResults_Thumbnail extends Google_Model
{
  public $contentType;
  public $data;
  public $heightPx;
  public $widthPx;

  public function getContentType()
  {
    return $this->contentType;
  }

  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setData($data)
  {
    $this->data = $data;
  }

  public function getHeightPx()
  {
    return $this->heightPx;
  }

  public function setHeightPx($heightPx)
  {
    $this->heightPx = $heightPx;
  }

  public function getWidthPx()
  {
    return $this->widthPx;
  }

  public function setWidthPx($widthPx)
  {
    $this->widthPx = $widthPx;
  }
}