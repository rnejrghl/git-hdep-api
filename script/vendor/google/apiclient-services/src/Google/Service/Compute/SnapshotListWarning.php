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

class Google_Service_Compute_SnapshotListWarning extends Google_Collection
{
  public $code;
  public $message;
  protected $collection_key = 'data';
  protected $dataType = 'Google_Service_Compute_SnapshotListWarningData';
  protected $dataDataType = 'array';

  public function getCode()
  {
    return $this->code;
  }

  public function setCode($code)
  {
    $this->code = $code;
  }

  /**
   * @param Google_Service_Compute_SnapshotListWarningData
   */
  public function setData($data)
  {
    $this->data = $data;
  }
  /**
   * @return Google_Service_Compute_SnapshotListWarningData
   */
  public function getData()
  {
    return $this->data;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setMessage($message)
  {
    $this->message = $message;
  }
}
