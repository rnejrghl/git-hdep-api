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

class Google_Service_Vision_GoogleCloudVisionV1p3beta1Block extends Google_Collection
{
  public $blockType;
  public $confidence;
  protected $collection_key = 'paragraphs';
  protected $boundingBoxType = 'Google_Service_Vision_GoogleCloudVisionV1p3beta1BoundingPoly';
  protected $boundingBoxDataType = '';
  protected $paragraphsType = 'Google_Service_Vision_GoogleCloudVisionV1p3beta1Paragraph';
  protected $paragraphsDataType = 'array';
  protected $propertyType = 'Google_Service_Vision_GoogleCloudVisionV1p3beta1TextAnnotationTextProperty';
  protected $propertyDataType = '';

  public function getBlockType()
  {
    return $this->blockType;
  }

  public function setBlockType($blockType)
  {
    $this->blockType = $blockType;
  }

  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1p3beta1BoundingPoly
   */
  public function setBoundingBox(Google_Service_Vision_GoogleCloudVisionV1p3beta1BoundingPoly $boundingBox)
  {
    $this->boundingBox = $boundingBox;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1p3beta1BoundingPoly
   */
  public function getBoundingBox()
  {
    return $this->boundingBox;
  }

  public function getConfidence()
  {
    return $this->confidence;
  }

  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }

  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1p3beta1Paragraph
   */
  public function setParagraphs($paragraphs)
  {
    $this->paragraphs = $paragraphs;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1p3beta1Paragraph
   */
  public function getParagraphs()
  {
    return $this->paragraphs;
  }
  /**
   * @param Google_Service_Vision_GoogleCloudVisionV1p3beta1TextAnnotationTextProperty
   */
  public function setProperty(Google_Service_Vision_GoogleCloudVisionV1p3beta1TextAnnotationTextProperty $property)
  {
    $this->property = $property;
  }
  /**
   * @return Google_Service_Vision_GoogleCloudVisionV1p3beta1TextAnnotationTextProperty
   */
  public function getProperty()
  {
    return $this->property;
  }
}