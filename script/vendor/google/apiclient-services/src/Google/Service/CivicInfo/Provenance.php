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

class Google_Service_CivicInfo_Provenance extends Google_Model
{
  public $ctclContestUuid;
  public $ctclOfficeUuid;
  public $datasetId;
  public $precinctId;
  public $precinctSplitId;
  public $tsStreetSegmentId;
  public $vip5PrecinctId;
  public $vip5StreetSegmentId;
  public $vipStreetSegmentId;
  protected $collidedSegmentSourceType = 'Google_Service_CivicInfo_StreetSegmentList';
  protected $collidedSegmentSourceDataType = '';

  /**
   * @param Google_Service_CivicInfo_StreetSegmentList
   */
  public function setCollidedSegmentSource(Google_Service_CivicInfo_StreetSegmentList $collidedSegmentSource)
  {
    $this->collidedSegmentSource = $collidedSegmentSource;
  }
  /**
   * @return Google_Service_CivicInfo_StreetSegmentList
   */
  public function getCollidedSegmentSource()
  {
    return $this->collidedSegmentSource;
  }

  public function getCtclContestUuid()
  {
    return $this->ctclContestUuid;
  }

  public function setCtclContestUuid($ctclContestUuid)
  {
    $this->ctclContestUuid = $ctclContestUuid;
  }

  public function getCtclOfficeUuid()
  {
    return $this->ctclOfficeUuid;
  }

  public function setCtclOfficeUuid($ctclOfficeUuid)
  {
    $this->ctclOfficeUuid = $ctclOfficeUuid;
  }

  public function getDatasetId()
  {
    return $this->datasetId;
  }

  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }

  public function getPrecinctId()
  {
    return $this->precinctId;
  }

  public function setPrecinctId($precinctId)
  {
    $this->precinctId = $precinctId;
  }

  public function getPrecinctSplitId()
  {
    return $this->precinctSplitId;
  }

  public function setPrecinctSplitId($precinctSplitId)
  {
    $this->precinctSplitId = $precinctSplitId;
  }

  public function getTsStreetSegmentId()
  {
    return $this->tsStreetSegmentId;
  }

  public function setTsStreetSegmentId($tsStreetSegmentId)
  {
    $this->tsStreetSegmentId = $tsStreetSegmentId;
  }

  public function getVip5PrecinctId()
  {
    return $this->vip5PrecinctId;
  }

  public function setVip5PrecinctId($vip5PrecinctId)
  {
    $this->vip5PrecinctId = $vip5PrecinctId;
  }

  public function getVip5StreetSegmentId()
  {
    return $this->vip5StreetSegmentId;
  }

  public function setVip5StreetSegmentId($vip5StreetSegmentId)
  {
    $this->vip5StreetSegmentId = $vip5StreetSegmentId;
  }

  public function getVipStreetSegmentId()
  {
    return $this->vipStreetSegmentId;
  }

  public function setVipStreetSegmentId($vipStreetSegmentId)
  {
    $this->vipStreetSegmentId = $vipStreetSegmentId;
  }
}
