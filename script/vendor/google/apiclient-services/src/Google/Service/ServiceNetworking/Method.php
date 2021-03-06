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

class Google_Service_ServiceNetworking_Method extends Google_Collection
{
  public $name;
  public $requestStreaming;
  public $requestTypeUrl;
  public $responseStreaming;
  public $responseTypeUrl;
  public $syntax;
  protected $collection_key = 'options';
  protected $optionsType = 'Google_Service_ServiceNetworking_Option';
  protected $optionsDataType = 'array';

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @param Google_Service_ServiceNetworking_Option
   */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /**
   * @return Google_Service_ServiceNetworking_Option
   */
  public function getOptions()
  {
    return $this->options;
  }

  public function getRequestStreaming()
  {
    return $this->requestStreaming;
  }

  public function setRequestStreaming($requestStreaming)
  {
    $this->requestStreaming = $requestStreaming;
  }

  public function getRequestTypeUrl()
  {
    return $this->requestTypeUrl;
  }

  public function setRequestTypeUrl($requestTypeUrl)
  {
    $this->requestTypeUrl = $requestTypeUrl;
  }

  public function getResponseStreaming()
  {
    return $this->responseStreaming;
  }

  public function setResponseStreaming($responseStreaming)
  {
    $this->responseStreaming = $responseStreaming;
  }

  public function getResponseTypeUrl()
  {
    return $this->responseTypeUrl;
  }

  public function setResponseTypeUrl($responseTypeUrl)
  {
    $this->responseTypeUrl = $responseTypeUrl;
  }

  public function getSyntax()
  {
    return $this->syntax;
  }

  public function setSyntax($syntax)
  {
    $this->syntax = $syntax;
  }
}
