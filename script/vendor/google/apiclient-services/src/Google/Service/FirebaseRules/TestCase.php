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

class Google_Service_FirebaseRules_TestCase extends Google_Collection
{
  public $expectation;
  public $request;
  public $resource;
  protected $collection_key = 'functionMocks';
  protected $functionMocksType = 'Google_Service_FirebaseRules_FunctionMock';
  protected $functionMocksDataType = 'array';

  public function getExpectation()
  {
    return $this->expectation;
  }

  public function setExpectation($expectation)
  {
    $this->expectation = $expectation;
  }

  /**
   * @param Google_Service_FirebaseRules_FunctionMock
   */
  public function setFunctionMocks($functionMocks)
  {
    $this->functionMocks = $functionMocks;
  }
  /**
   * @return Google_Service_FirebaseRules_FunctionMock
   */
  public function getFunctionMocks()
  {
    return $this->functionMocks;
  }

  public function getRequest()
  {
    return $this->request;
  }

  public function setRequest($request)
  {
    $this->request = $request;
  }

  public function getResource()
  {
    return $this->resource;
  }

  public function setResource($resource)
  {
    $this->resource = $resource;
  }
}
