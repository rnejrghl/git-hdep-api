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

class Google_Service_Testing_AndroidModel extends Google_Collection
{
  public $brand;
  public $codename;
  public $form;
  public $formFactor;
  public $id;
  public $lowFpsVideoRecording;
  public $manufacturer;
  public $name;
  public $screenDensity;
  public $screenX;
  public $screenY;
  public $supportedAbis;
  public $supportedVersionIds;
  public $tags;
  public $videoRecordingNotSupported;
  protected $collection_key = 'tags';

  public function getBrand()
  {
    return $this->brand;
  }

  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  public function getCodename()
  {
    return $this->codename;
  }

  public function setCodename($codename)
  {
    $this->codename = $codename;
  }

  public function getForm()
  {
    return $this->form;
  }

  public function setForm($form)
  {
    $this->form = $form;
  }

  public function getFormFactor()
  {
    return $this->formFactor;
  }

  public function setFormFactor($formFactor)
  {
    $this->formFactor = $formFactor;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getLowFpsVideoRecording()
  {
    return $this->lowFpsVideoRecording;
  }

  public function setLowFpsVideoRecording($lowFpsVideoRecording)
  {
    $this->lowFpsVideoRecording = $lowFpsVideoRecording;
  }

  public function getManufacturer()
  {
    return $this->manufacturer;
  }

  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getScreenDensity()
  {
    return $this->screenDensity;
  }

  public function setScreenDensity($screenDensity)
  {
    $this->screenDensity = $screenDensity;
  }

  public function getScreenX()
  {
    return $this->screenX;
  }

  public function setScreenX($screenX)
  {
    $this->screenX = $screenX;
  }

  public function getScreenY()
  {
    return $this->screenY;
  }

  public function setScreenY($screenY)
  {
    $this->screenY = $screenY;
  }

  public function getSupportedAbis()
  {
    return $this->supportedAbis;
  }

  public function setSupportedAbis($supportedAbis)
  {
    $this->supportedAbis = $supportedAbis;
  }

  public function getSupportedVersionIds()
  {
    return $this->supportedVersionIds;
  }

  public function setSupportedVersionIds($supportedVersionIds)
  {
    $this->supportedVersionIds = $supportedVersionIds;
  }

  public function getTags()
  {
    return $this->tags;
  }

  public function setTags($tags)
  {
    $this->tags = $tags;
  }

  public function getVideoRecordingNotSupported()
  {
    return $this->videoRecordingNotSupported;
  }

  public function setVideoRecordingNotSupported($videoRecordingNotSupported)
  {
    $this->videoRecordingNotSupported = $videoRecordingNotSupported;
  }
}
