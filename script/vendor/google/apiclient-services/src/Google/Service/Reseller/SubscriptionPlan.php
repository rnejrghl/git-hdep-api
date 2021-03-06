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

class Google_Service_Reseller_SubscriptionPlan extends Google_Model
{
  public $isCommitmentPlan;
  public $planName;
  protected $commitmentIntervalType = 'Google_Service_Reseller_SubscriptionPlanCommitmentInterval';
  protected $commitmentIntervalDataType = '';

  /**
   * @param Google_Service_Reseller_SubscriptionPlanCommitmentInterval
   */
  public function setCommitmentInterval(Google_Service_Reseller_SubscriptionPlanCommitmentInterval $commitmentInterval)
  {
    $this->commitmentInterval = $commitmentInterval;
  }
  /**
   * @return Google_Service_Reseller_SubscriptionPlanCommitmentInterval
   */
  public function getCommitmentInterval()
  {
    return $this->commitmentInterval;
  }

  public function getIsCommitmentPlan()
  {
    return $this->isCommitmentPlan;
  }

  public function setIsCommitmentPlan($isCommitmentPlan)
  {
    $this->isCommitmentPlan = $isCommitmentPlan;
  }

  public function getPlanName()
  {
    return $this->planName;
  }

  public function setPlanName($planName)
  {
    $this->planName = $planName;
  }
}
