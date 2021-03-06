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

class Google_Service_JobService_JobFilters extends Google_Collection
{
  public $categories;
  public $companyNames;
  public $companyTitles;
  public $customAttributeFilter;
  public $disableSpellCheck;
  public $employmentTypes;
  public $languageCodes;
  public $publishDateRange;
  public $query;
  public $tenantJobOnly;
  protected $collection_key = 'locationFilters';
  protected $commuteFilterType = 'Google_Service_JobService_CommutePreference';
  protected $commuteFilterDataType = '';
  protected $compensationFilterType = 'Google_Service_JobService_CompensationFilter';
  protected $compensationFilterDataType = '';
  protected $customFieldFiltersType = 'Google_Service_JobService_CustomFieldFilter';
  protected $customFieldFiltersDataType = 'map';
  protected $extendedCompensationFilterType = 'Google_Service_JobService_ExtendedCompensationFilter';
  protected $extendedCompensationFilterDataType = '';
  protected $locationFiltersType = 'Google_Service_JobService_LocationFilter';
  protected $locationFiltersDataType = 'array';

  public function getCategories()
  {
    return $this->categories;
  }

  public function setCategories($categories)
  {
    $this->categories = $categories;
  }

  /**
   * @param Google_Service_JobService_CommutePreference
   */
  public function setCommuteFilter(Google_Service_JobService_CommutePreference $commuteFilter)
  {
    $this->commuteFilter = $commuteFilter;
  }
  /**
   * @return Google_Service_JobService_CommutePreference
   */
  public function getCommuteFilter()
  {
    return $this->commuteFilter;
  }

  public function getCompanyNames()
  {
    return $this->companyNames;
  }

  public function setCompanyNames($companyNames)
  {
    $this->companyNames = $companyNames;
  }

  public function getCompanyTitles()
  {
    return $this->companyTitles;
  }

  public function setCompanyTitles($companyTitles)
  {
    $this->companyTitles = $companyTitles;
  }

  /**
   * @param Google_Service_JobService_CompensationFilter
   */
  public function setCompensationFilter(Google_Service_JobService_CompensationFilter $compensationFilter)
  {
    $this->compensationFilter = $compensationFilter;
  }
  /**
   * @return Google_Service_JobService_CompensationFilter
   */
  public function getCompensationFilter()
  {
    return $this->compensationFilter;
  }

  public function getCustomAttributeFilter()
  {
    return $this->customAttributeFilter;
  }

  public function setCustomAttributeFilter($customAttributeFilter)
  {
    $this->customAttributeFilter = $customAttributeFilter;
  }

  /**
   * @param Google_Service_JobService_CustomFieldFilter
   */
  public function setCustomFieldFilters($customFieldFilters)
  {
    $this->customFieldFilters = $customFieldFilters;
  }
  /**
   * @return Google_Service_JobService_CustomFieldFilter
   */
  public function getCustomFieldFilters()
  {
    return $this->customFieldFilters;
  }

  public function getDisableSpellCheck()
  {
    return $this->disableSpellCheck;
  }

  public function setDisableSpellCheck($disableSpellCheck)
  {
    $this->disableSpellCheck = $disableSpellCheck;
  }

  public function getEmploymentTypes()
  {
    return $this->employmentTypes;
  }

  public function setEmploymentTypes($employmentTypes)
  {
    $this->employmentTypes = $employmentTypes;
  }

  /**
   * @param Google_Service_JobService_ExtendedCompensationFilter
   */
  public function setExtendedCompensationFilter(Google_Service_JobService_ExtendedCompensationFilter $extendedCompensationFilter)
  {
    $this->extendedCompensationFilter = $extendedCompensationFilter;
  }
  /**
   * @return Google_Service_JobService_ExtendedCompensationFilter
   */
  public function getExtendedCompensationFilter()
  {
    return $this->extendedCompensationFilter;
  }

  public function getLanguageCodes()
  {
    return $this->languageCodes;
  }

  public function setLanguageCodes($languageCodes)
  {
    $this->languageCodes = $languageCodes;
  }

  /**
   * @param Google_Service_JobService_LocationFilter
   */
  public function setLocationFilters($locationFilters)
  {
    $this->locationFilters = $locationFilters;
  }
  /**
   * @return Google_Service_JobService_LocationFilter
   */
  public function getLocationFilters()
  {
    return $this->locationFilters;
  }

  public function getPublishDateRange()
  {
    return $this->publishDateRange;
  }

  public function setPublishDateRange($publishDateRange)
  {
    $this->publishDateRange = $publishDateRange;
  }

  public function getQuery()
  {
    return $this->query;
  }

  public function setQuery($query)
  {
    $this->query = $query;
  }

  public function getTenantJobOnly()
  {
    return $this->tenantJobOnly;
  }

  public function setTenantJobOnly($tenantJobOnly)
  {
    $this->tenantJobOnly = $tenantJobOnly;
  }
}
