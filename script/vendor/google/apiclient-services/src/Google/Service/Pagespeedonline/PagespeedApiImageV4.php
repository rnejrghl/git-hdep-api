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

class Google_Service_Pagespeedonline_PagespeedApiImageV4 extends Google_Model
{
  public $data;
  public $height;
  public $key;
  public $mimeType;
  public $width;
  protected $internal_gapi_mappings = array(
        "mimeType" => "mime_type",
        "pageRect" => "page_rect",
  );
  protected $pageRectType = 'Google_Service_Pagespeedonline_PagespeedApiImageV4PageRect';
  protected $pageRectDataType = '';

  public function getData()
  {
    return $this->data;
  }

  public function setData($data)
  {
    $this->data = $data;
  }

  public function getHeight()
  {
    return $this->height;
  }

  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function getKey()
  {
    return $this->key;
  }

  public function setKey($key)
  {
    $this->key = $key;
  }

  public function getMimeType()
  {
    return $this->mimeType;
  }

  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }

  /**
   * @param Google_Service_Pagespeedonline_PagespeedApiImageV4PageRect
   */
  public function setPageRect(Google_Service_Pagespeedonline_PagespeedApiImageV4PageRect $pageRect)
  {
    $this->pageRect = $pageRect;
  }
  /**
   * @return Google_Service_Pagespeedonline_PagespeedApiImageV4PageRect
   */
  public function getPageRect()
  {
    return $this->pageRect;
  }

  public function getWidth()
  {
    return $this->width;
  }

  public function setWidth($width)
  {
    $this->width = $width;
  }
}
