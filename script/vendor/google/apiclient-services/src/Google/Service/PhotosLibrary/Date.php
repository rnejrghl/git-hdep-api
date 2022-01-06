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

class Google_Service_PhotosLibrary_Date extends Google_Model
{
  public $day;
  public $month;
  public $year;

  public function getDay()
  {
    return $this->day;
  }

  public function setDay($day)
  {
    $this->day = $day;
  }

  public function getMonth()
  {
    return $this->month;
  }

  public function setMonth($month)
  {
    $this->month = $month;
  }

  public function getYear()
  {
    return $this->year;
  }

  public function setYear($year)
  {
    $this->year = $year;
  }
}