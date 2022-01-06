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

class Google_Service_ShoppingContent_ReturnShipment extends Google_Collection
{
  public $creationDate;
  public $returnMethodType;
  public $shipmentId;
  protected $collection_key = 'shipmentTrackingInfos';
  protected $shipmentTrackingInfosType = 'Google_Service_ShoppingContent_ShipmentTrackingInfo';
  protected $shipmentTrackingInfosDataType = 'array';

  public function getCreationDate()
  {
    return $this->creationDate;
  }

  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }

  public function getReturnMethodType()
  {
    return $this->returnMethodType;
  }

  public function setReturnMethodType($returnMethodType)
  {
    $this->returnMethodType = $returnMethodType;
  }

  public function getShipmentId()
  {
    return $this->shipmentId;
  }

  public function setShipmentId($shipmentId)
  {
    $this->shipmentId = $shipmentId;
  }

  /**
   * @param Google_Service_ShoppingContent_ShipmentTrackingInfo
   */
  public function setShipmentTrackingInfos($shipmentTrackingInfos)
  {
    $this->shipmentTrackingInfos = $shipmentTrackingInfos;
  }
  /**
   * @return Google_Service_ShoppingContent_ShipmentTrackingInfo
   */
  public function getShipmentTrackingInfos()
  {
    return $this->shipmentTrackingInfos;
  }
}
