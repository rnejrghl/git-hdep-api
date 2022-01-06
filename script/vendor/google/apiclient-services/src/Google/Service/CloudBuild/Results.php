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

class Google_Service_CloudBuild_Results extends Google_Collection
{
  public $artifactManifest;
  public $buildStepImages;
  public $buildStepOutputs;
  public $numArtifacts;
  protected $collection_key = 'images';
  protected $imagesType = 'Google_Service_CloudBuild_BuiltImage';
  protected $imagesDataType = 'array';

  public function getArtifactManifest()
  {
    return $this->artifactManifest;
  }

  public function setArtifactManifest($artifactManifest)
  {
    $this->artifactManifest = $artifactManifest;
  }

  public function getBuildStepImages()
  {
    return $this->buildStepImages;
  }

  public function setBuildStepImages($buildStepImages)
  {
    $this->buildStepImages = $buildStepImages;
  }

  public function getBuildStepOutputs()
  {
    return $this->buildStepOutputs;
  }

  public function setBuildStepOutputs($buildStepOutputs)
  {
    $this->buildStepOutputs = $buildStepOutputs;
  }

  /**
   * @param Google_Service_CloudBuild_BuiltImage
   */
  public function setImages($images)
  {
    $this->images = $images;
  }
  /**
   * @return Google_Service_CloudBuild_BuiltImage
   */
  public function getImages()
  {
    return $this->images;
  }

  public function getNumArtifacts()
  {
    return $this->numArtifacts;
  }

  public function setNumArtifacts($numArtifacts)
  {
    $this->numArtifacts = $numArtifacts;
  }
}
