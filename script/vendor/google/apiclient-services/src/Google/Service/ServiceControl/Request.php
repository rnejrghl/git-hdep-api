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

class Google_Service_ServiceControl_Request extends Google_Model
{
  public $fragment;
  public $headers;
  public $host;
  public $id;
  public $method;
  public $path;
  public $protocol;
  public $query;
  public $reason;
  public $scheme;
  public $size;
  public $time;
  protected $authType = 'Google_Service_ServiceControl_Auth';
  protected $authDataType = '';

  /**
   * @param Google_Service_ServiceControl_Auth
   */
  public function setAuth(Google_Service_ServiceControl_Auth $auth)
  {
    $this->auth = $auth;
  }
  /**
   * @return Google_Service_ServiceControl_Auth
   */
  public function getAuth()
  {
    return $this->auth;
  }

  public function getFragment()
  {
    return $this->fragment;
  }

  public function setFragment($fragment)
  {
    $this->fragment = $fragment;
  }

  public function getHeaders()
  {
    return $this->headers;
  }

  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }

  public function getHost()
  {
    return $this->host;
  }

  public function setHost($host)
  {
    $this->host = $host;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setMethod($method)
  {
    $this->method = $method;
  }

  public function getPath()
  {
    return $this->path;
  }

  public function setPath($path)
  {
    $this->path = $path;
  }

  public function getProtocol()
  {
    return $this->protocol;
  }

  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }

  public function getQuery()
  {
    return $this->query;
  }

  public function setQuery($query)
  {
    $this->query = $query;
  }

  public function getReason()
  {
    return $this->reason;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getScheme()
  {
    return $this->scheme;
  }

  public function setScheme($scheme)
  {
    $this->scheme = $scheme;
  }

  public function getSize()
  {
    return $this->size;
  }

  public function setSize($size)
  {
    $this->size = $size;
  }

  public function getTime()
  {
    return $this->time;
  }

  public function setTime($time)
  {
    $this->time = $time;
  }
}
