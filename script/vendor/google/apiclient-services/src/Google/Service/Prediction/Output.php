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

class Google_Service_Prediction_Output extends Google_Collection
{
  public $id;
  public $kind;
  public $outputLabel;
  public $outputValue;
  public $selfLink;
  protected $collection_key = 'outputMulti';
  protected $outputMultiType = 'Google_Service_Prediction_OutputOutputMulti';
  protected $outputMultiDataType = 'array';

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

  public function getOutputLabel()
  {
    return $this->outputLabel;
  }

  public function setOutputLabel($outputLabel)
  {
    $this->outputLabel = $outputLabel;
  }

  /**
   * @param Google_Service_Prediction_OutputOutputMulti
   */
  public function setOutputMulti($outputMulti)
  {
    $this->outputMulti = $outputMulti;
  }
  /**
   * @return Google_Service_Prediction_OutputOutputMulti
   */
  public function getOutputMulti()
  {
    return $this->outputMulti;
  }

  public function getOutputValue()
  {
    return $this->outputValue;
  }

  public function setOutputValue($outputValue)
  {
    $this->outputValue = $outputValue;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
}
