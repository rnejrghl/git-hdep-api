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

class Google_Service_Slides_ReplaceAllShapesWithImageRequest extends Google_Collection
{
  public $imageReplaceMethod;
  public $imageUrl;
  public $pageObjectIds;
  public $replaceMethod;
  protected $collection_key = 'pageObjectIds';
  protected $containsTextType = 'Google_Service_Slides_SubstringMatchCriteria';
  protected $containsTextDataType = '';

  /**
   * @param Google_Service_Slides_SubstringMatchCriteria
   */
  public function setContainsText(Google_Service_Slides_SubstringMatchCriteria $containsText)
  {
    $this->containsText = $containsText;
  }
  /**
   * @return Google_Service_Slides_SubstringMatchCriteria
   */
  public function getContainsText()
  {
    return $this->containsText;
  }

  public function getImageReplaceMethod()
  {
    return $this->imageReplaceMethod;
  }

  public function setImageReplaceMethod($imageReplaceMethod)
  {
    $this->imageReplaceMethod = $imageReplaceMethod;
  }

  public function getImageUrl()
  {
    return $this->imageUrl;
  }

  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }

  public function getPageObjectIds()
  {
    return $this->pageObjectIds;
  }

  public function setPageObjectIds($pageObjectIds)
  {
    $this->pageObjectIds = $pageObjectIds;
  }

  public function getReplaceMethod()
  {
    return $this->replaceMethod;
  }

  public function setReplaceMethod($replaceMethod)
  {
    $this->replaceMethod = $replaceMethod;
  }
}
