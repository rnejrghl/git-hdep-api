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

class Google_Service_Spectrum_SpectrumMessage extends Google_Collection
{
  public $bandwidth;
  protected $collection_key = 'frequencyRanges';
  protected $frequencyRangesType = 'Google_Service_Spectrum_FrequencyRange';
  protected $frequencyRangesDataType = 'array';

  public function getBandwidth()
  {
    return $this->bandwidth;
  }

  public function setBandwidth($bandwidth)
  {
    $this->bandwidth = $bandwidth;
  }

  /**
   * @param Google_Service_Spectrum_FrequencyRange
   */
  public function setFrequencyRanges($frequencyRanges)
  {
    $this->frequencyRanges = $frequencyRanges;
  }
  /**
   * @return Google_Service_Spectrum_FrequencyRange
   */
  public function getFrequencyRanges()
  {
    return $this->frequencyRanges;
  }
}
