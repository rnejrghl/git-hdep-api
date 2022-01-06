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

class Google_Service_Vision_GoogleCloudVisionV1p2beta1LocalizedObjectAnnotation extends Google_Model
{
  public $languageCode;
  public $mid;
  public $name;
  public $score;
  protected $boundingPolyType = 'Google_Service_Vision_GoogleCloudVisionV1p2beta1BoundingPoly';
  protected $boundingPolyDataType = '';

  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1p2beta1BoundingPoly
   */
  public function setBoundingPoly(Google_Service_Vision_GoogleCloudVisionV1p2beta1BoundingPoly $boundingPoly)
  {
    $this->boundingPoly = $boundingPoly;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1p2beta1BoundingPoly
   */
  public function getBoundingPoly()
  {
    return $this->boundingPoly;
  }

  public function getLanguageCode()
  {
    return $this->languageCode;
  }

  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }

  public function getMid()
  {
    return $this->mid;
  }

  public function setMid($mid)
  {
    $this->mid = $mid;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getScore()
  {
    return $this->score;
  }

  public function setScore($score)
  {
    $this->score = $score;
  }
}
