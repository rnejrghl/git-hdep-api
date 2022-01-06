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

class Google_Service_Dataproc_SparkJob extends Google_Collection
{
  public $archiveUris;
  public $args;
  public $fileUris;
  public $jarFileUris;
  public $mainClass;
  public $mainJarFileUri;
  public $properties;
  protected $collection_key = 'jarFileUris';
  protected $loggingConfigType = 'Google_Service_Dataproc_LoggingConfig';
  protected $loggingConfigDataType = '';

  public function getArchiveUris()
  {
    return $this->archiveUris;
  }

  public function setArchiveUris($archiveUris)
  {
    $this->archiveUris = $archiveUris;
  }

  public function getArgs()
  {
    return $this->args;
  }

  public function setArgs($args)
  {
    $this->args = $args;
  }

  public function getFileUris()
  {
    return $this->fileUris;
  }

  public function setFileUris($fileUris)
  {
    $this->fileUris = $fileUris;
  }

  public function getJarFileUris()
  {
    return $this->jarFileUris;
  }

  public function setJarFileUris($jarFileUris)
  {
    $this->jarFileUris = $jarFileUris;
  }

  /**
   * @param Google_Service_Dataproc_LoggingConfig
   */
  public function setLoggingConfig(Google_Service_Dataproc_LoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  /**
   * @return Google_Service_Dataproc_LoggingConfig
   */
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
  }

  public function getMainClass()
  {
    return $this->mainClass;
  }

  public function setMainClass($mainClass)
  {
    $this->mainClass = $mainClass;
  }

  public function getMainJarFileUri()
  {
    return $this->mainJarFileUri;
  }

  public function setMainJarFileUri($mainJarFileUri)
  {
    $this->mainJarFileUri = $mainJarFileUri;
  }

  public function getProperties()
  {
    return $this->properties;
  }

  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
}
