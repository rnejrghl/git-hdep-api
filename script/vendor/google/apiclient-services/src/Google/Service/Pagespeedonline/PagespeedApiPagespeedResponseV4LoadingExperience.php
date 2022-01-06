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

class Google_Service_Pagespeedonline_PagespeedApiPagespeedResponseV4LoadingExperience extends Google_Model
{
  public $id;
  public $initialUrl;
  public $overallCategory;
  protected $internal_gapi_mappings = array(
        "initialUrl" => "initial_url",
        "overallCategory" => "overall_category",
  );
  protected $metricsType = 'Google_Service_Pagespeedonline_PagespeedApiPagespeedResponseV4LoadingExperienceMetricsElement';
  protected $metricsDataType = 'map';

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getInitialUrl()
  {
    return $this->initialUrl;
  }

  public function setInitialUrl($initialUrl)
  {
    $this->initialUrl = $initialUrl;
  }

  /**
   * @param Google_Service_Pagespeedonline_PagespeedApiPagespeedResponseV4LoadingExperienceMetricsElement
   */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /**
   * @return Google_Service_Pagespeedonline_PagespeedApiPagespeedResponseV4LoadingExperienceMetricsElement
   */
  public function getMetrics()
  {
    return $this->metrics;
  }

  public function getOverallCategory()
  {
    return $this->overallCategory;
  }

  public function setOverallCategory($overallCategory)
  {
    $this->overallCategory = $overallCategory;
  }
}
