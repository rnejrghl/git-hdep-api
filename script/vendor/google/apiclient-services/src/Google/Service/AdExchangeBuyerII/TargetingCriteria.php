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

class Google_Service_AdExchangeBuyerII_TargetingCriteria extends Google_Collection
{
  public $key;
  protected $collection_key = 'inclusions';
  protected $exclusionsType = 'Google_Service_AdExchangeBuyerII_TargetingValue';
  protected $exclusionsDataType = 'array';
  protected $inclusionsType = 'Google_Service_AdExchangeBuyerII_TargetingValue';
  protected $inclusionsDataType = 'array';

  /**
   * @param Google_Service_AdExchangeBuyerII_TargetingValue
   */
  public function setExclusions($exclusions)
  {
    $this->exclusions = $exclusions;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_TargetingValue
   */
  public function getExclusions()
  {
    return $this->exclusions;
  }
  /**
   * @param Google_Service_AdExchangeBuyerII_TargetingValue
   */
  public function setInclusions($inclusions)
  {
    $this->inclusions = $inclusions;
  }
  /**
   * @return Google_Service_AdExchangeBuyerII_TargetingValue
   */
  public function getInclusions()
  {
    return $this->inclusions;
  }

  public function getKey()
  {
    return $this->key;
  }

  public function setKey($key)
  {
    $this->key = $key;
  }
}
