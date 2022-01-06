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

class Google_Service_Prediction_Insert extends Google_Collection
{
  public $id;
  public $modelType;
  public $sourceModel;
  public $storageDataLocation;
  public $storagePMMLLocation;
  public $storagePMMLModelLocation;
  public $utility;
  protected $collection_key = 'utility';
  protected $trainingInstancesType = 'Google_Service_Prediction_InsertTrainingInstances';
  protected $trainingInstancesDataType = 'array';

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getModelType()
  {
    return $this->modelType;
  }

  public function setModelType($modelType)
  {
    $this->modelType = $modelType;
  }

  public function getSourceModel()
  {
    return $this->sourceModel;
  }

  public function setSourceModel($sourceModel)
  {
    $this->sourceModel = $sourceModel;
  }

  public function getStorageDataLocation()
  {
    return $this->storageDataLocation;
  }

  public function setStorageDataLocation($storageDataLocation)
  {
    $this->storageDataLocation = $storageDataLocation;
  }

  public function getStoragePMMLLocation()
  {
    return $this->storagePMMLLocation;
  }

  public function setStoragePMMLLocation($storagePMMLLocation)
  {
    $this->storagePMMLLocation = $storagePMMLLocation;
  }

  public function getStoragePMMLModelLocation()
  {
    return $this->storagePMMLModelLocation;
  }

  public function setStoragePMMLModelLocation($storagePMMLModelLocation)
  {
    $this->storagePMMLModelLocation = $storagePMMLModelLocation;
  }

  /**
   * @param Google_Service_Prediction_InsertTrainingInstances
   */
  public function setTrainingInstances($trainingInstances)
  {
    $this->trainingInstances = $trainingInstances;
  }
  /**
   * @return Google_Service_Prediction_InsertTrainingInstances
   */
  public function getTrainingInstances()
  {
    return $this->trainingInstances;
  }

  public function getUtility()
  {
    return $this->utility;
  }

  public function setUtility($utility)
  {
    $this->utility = $utility;
  }
}
