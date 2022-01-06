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

class Google_Service_ShoppingContent_DatafeedStatusError extends Google_Collection
{
  public $code;
  public $count;
  public $message;
  protected $collection_key = 'examples';
  protected $examplesType = 'Google_Service_ShoppingContent_DatafeedStatusExample';
  protected $examplesDataType = 'array';

  public function getCode()
  {
    return $this->code;
  }

  public function setCode($code)
  {
    $this->code = $code;
  }

  public function getCount()
  {
    return $this->count;
  }

  public function setCount($count)
  {
    $this->count = $count;
  }

  /**
   * @param Google_Service_ShoppingContent_DatafeedStatusExample
   */
  public function setExamples($examples)
  {
    $this->examples = $examples;
  }
  /**
   * @return Google_Service_ShoppingContent_DatafeedStatusExample
   */
  public function getExamples()
  {
    return $this->examples;
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
