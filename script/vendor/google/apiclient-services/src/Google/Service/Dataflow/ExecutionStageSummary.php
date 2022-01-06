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

class Google_Service_Dataflow_ExecutionStageSummary extends Google_Collection
{
  public $id;
  public $kind;
  public $name;
  protected $collection_key = 'outputSource';
  protected $componentSourceType = 'Google_Service_Dataflow_ComponentSource';
  protected $componentSourceDataType = 'array';
  protected $componentTransformType = 'Google_Service_Dataflow_ComponentTransform';
  protected $componentTransformDataType = 'array';
  protected $inputSourceType = 'Google_Service_Dataflow_StageSource';
  protected $inputSourceDataType = 'array';
  protected $outputSourceType = 'Google_Service_Dataflow_StageSource';
  protected $outputSourceDataType = 'array';

  /**
   * @param Google_Service_Dataflow_ComponentSource
   */
  public function setComponentSource($componentSource)
  {
    $this->componentSource = $componentSource;
  }
  /**
   * @return Google_Service_Dataflow_ComponentSource
   */
  public function getComponentSource()
  {
    return $this->componentSource;
  }
  /**
   * @param Google_Service_Dataflow_ComponentTransform
   */
  public function setComponentTransform($componentTransform)
  {
    $this->componentTransform = $componentTransform;
  }
  /**
   * @return Google_Service_Dataflow_ComponentTransform
   */
  public function getComponentTransform()
  {
    return $this->componentTransform;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  /**
   * @param Google_Service_Dataflow_StageSource
   */
  public function setInputSource($inputSource)
  {
    $this->inputSource = $inputSource;
  }
  /**
   * @return Google_Service_Dataflow_StageSource
   */
  public function getInputSource()
  {
    return $this->inputSource;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @param Google_Service_Dataflow_StageSource
   */
  public function setOutputSource($outputSource)
  {
    $this->outputSource = $outputSource;
  }
  /**
   * @return Google_Service_Dataflow_StageSource
   */
  public function getOutputSource()
  {
    return $this->outputSource;
  }
}
