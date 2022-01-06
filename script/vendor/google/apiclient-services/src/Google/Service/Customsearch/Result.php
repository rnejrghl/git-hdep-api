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

class Google_Service_Customsearch_Result extends Google_Collection
{
  public $cacheId;
  public $displayLink;
  public $fileFormat;
  public $formattedUrl;
  public $htmlFormattedUrl;
  public $htmlSnippet;
  public $htmlTitle;
  public $kind;
  public $link;
  public $mime;
  public $pagemap;
  public $snippet;
  public $title;
  protected $collection_key = 'labels';
  protected $imageType = 'Google_Service_Customsearch_ResultImage';
  protected $imageDataType = '';
  protected $labelsType = 'Google_Service_Customsearch_ResultLabels';
  protected $labelsDataType = 'array';

  public function getCacheId()
  {
    return $this->cacheId;
  }

  public function setCacheId($cacheId)
  {
    $this->cacheId = $cacheId;
  }

  public function getDisplayLink()
  {
    return $this->displayLink;
  }

  public function setDisplayLink($displayLink)
  {
    $this->displayLink = $displayLink;
  }

  public function getFileFormat()
  {
    return $this->fileFormat;
  }

  public function setFileFormat($fileFormat)
  {
    $this->fileFormat = $fileFormat;
  }

  public function getFormattedUrl()
  {
    return $this->formattedUrl;
  }

  public function setFormattedUrl($formattedUrl)
  {
    $this->formattedUrl = $formattedUrl;
  }

  public function getHtmlFormattedUrl()
  {
    return $this->htmlFormattedUrl;
  }

  public function setHtmlFormattedUrl($htmlFormattedUrl)
  {
    $this->htmlFormattedUrl = $htmlFormattedUrl;
  }

  public function getHtmlSnippet()
  {
    return $this->htmlSnippet;
  }

  public function setHtmlSnippet($htmlSnippet)
  {
    $this->htmlSnippet = $htmlSnippet;
  }

  public function getHtmlTitle()
  {
    return $this->htmlTitle;
  }

  public function setHtmlTitle($htmlTitle)
  {
    $this->htmlTitle = $htmlTitle;
  }

  /**
   * @param Google_Service_Customsearch_ResultImage
   */
  public function setImage(Google_Service_Customsearch_ResultImage $image)
  {
    $this->image = $image;
  }
  /**
   * @return Google_Service_Customsearch_ResultImage
   */
  public function getImage()
  {
    return $this->image;
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
   * @param Google_Service_Customsearch_ResultLabels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return Google_Service_Customsearch_ResultLabels
   */
  public function getLabels()
  {
    return $this->labels;
  }

  public function getLink()
  {
    return $this->link;
  }

  public function setLink($link)
  {
    $this->link = $link;
  }

  public function getMime()
  {
    return $this->mime;
  }

  public function setMime($mime)
  {
    $this->mime = $mime;
  }

  public function getPagemap()
  {
    return $this->pagemap;
  }

  public function setPagemap($pagemap)
  {
    $this->pagemap = $pagemap;
  }

  public function getSnippet()
  {
    return $this->snippet;
  }

  public function setSnippet($snippet)
  {
    $this->snippet = $snippet;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }
}
