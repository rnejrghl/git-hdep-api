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

class Google_Service_Storagetransfer_TransferOptions extends Google_Model
{
  public $deleteObjectsFromSourceAfterTransfer;
  public $deleteObjectsUniqueInSink;
  public $overwriteObjectsAlreadyExistingInSink;

  public function getDeleteObjectsFromSourceAfterTransfer()
  {
    return $this->deleteObjectsFromSourceAfterTransfer;
  }

  public function setDeleteObjectsFromSourceAfterTransfer($deleteObjectsFromSourceAfterTransfer)
  {
    $this->deleteObjectsFromSourceAfterTransfer = $deleteObjectsFromSourceAfterTransfer;
  }

  public function getDeleteObjectsUniqueInSink()
  {
    return $this->deleteObjectsUniqueInSink;
  }

  public function setDeleteObjectsUniqueInSink($deleteObjectsUniqueInSink)
  {
    $this->deleteObjectsUniqueInSink = $deleteObjectsUniqueInSink;
  }

  public function getOverwriteObjectsAlreadyExistingInSink()
  {
    return $this->overwriteObjectsAlreadyExistingInSink;
  }

  public function setOverwriteObjectsAlreadyExistingInSink($overwriteObjectsAlreadyExistingInSink)
  {
    $this->overwriteObjectsAlreadyExistingInSink = $overwriteObjectsAlreadyExistingInSink;
  }
}
