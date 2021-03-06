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

class Google_Service_JobService_CompensationFilter extends Google_Collection
{
  public $includeJobsWithUnspecifiedCompensationRange;
  public $type;
  public $units;
  protected $collection_key = 'units';
  protected $rangeType = 'Google_Service_JobService_CompensationRange';
  protected $rangeDataType = '';

  public function getIncludeJobsWithUnspecifiedCompensationRange()
  {
    return $this->includeJobsWithUnspecifiedCompensationRange;
  }

  public function setIncludeJobsWithUnspecifiedCompensationRange($includeJobsWithUnspecifiedCompensationRange)
  {
    $this->includeJobsWithUnspecifiedCompensationRange = $includeJobsWithUnspecifiedCompensationRange;
  }

  /**
   * @param Google_Service_JobService_CompensationRange
   */
  public function setRange(Google_Service_JobService_CompensationRange $range)
  {
    $this->range = $range;
  }
  /**
   * @return Google_Service_JobService_CompensationRange
   */
  public function getRange()
  {
    return $this->range;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getUnits()
  {
    return $this->units;
  }

  public function setUnits($units)
  {
    $this->units = $units;
  }
}
