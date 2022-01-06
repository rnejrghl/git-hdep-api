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

class Google_Service_Webfonts_Webfont extends Google_Collection
{
  public $category;
  public $family;
  public $files;
  public $kind;
  public $lastModified;
  public $subsets;
  public $variants;
  public $version;
  protected $collection_key = 'variants';

  public function getCategory()
  {
    return $this->category;
  }

  public function setCategory($category)
  {
    $this->category = $category;
  }

  public function getFamily()
  {
    return $this->family;
  }

  public function setFamily($family)
  {
    $this->family = $family;
  }

  public function getFiles()
  {
    return $this->files;
  }

  public function setFiles($files)
  {
    $this->files = $files;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLastModified()
  {
    return $this->lastModified;
  }

  public function setLastModified($lastModified)
  {
    $this->lastModified = $lastModified;
  }

  public function getSubsets()
  {
    return $this->subsets;
  }

  public function setSubsets($subsets)
  {
    $this->subsets = $subsets;
  }

  public function getVariants()
  {
    return $this->variants;
  }

  public function setVariants($variants)
  {
    $this->variants = $variants;
  }

  public function getVersion()
  {
    return $this->version;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }
}
