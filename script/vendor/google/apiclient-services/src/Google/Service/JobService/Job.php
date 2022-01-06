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

class Google_Service_JobService_Job extends Google_Collection
{
  public $applicationEmailList;
  public $applicationInstruction;
  public $applicationUrls;
  public $benefits;
  public $companyDisplayName;
  public $companyName;
  public $companyTitle;
  public $createTime;
  public $department;
  public $description;
  public $distributorCompanyId;
  public $educationLevels;
  public $employmentTypes;
  public $expireTime;
  public $incentives;
  public $jobTitle;
  public $languageCode;
  public $level;
  public $locations;
  public $name;
  public $promotionValue;
  public $qualifications;
  public $referenceUrl;
  public $region;
  public $requisitionId;
  public $responsibilities;
  public $updateTime;
  public $visibility;
  protected $collection_key = 'locations';
  protected $compensationInfoType = 'Google_Service_JobService_CompensationInfo';
  protected $compensationInfoDataType = '';
  protected $customAttributesType = 'Google_Service_JobService_CustomAttribute';
  protected $customAttributesDataType = 'map';
  protected $endDateType = 'Google_Service_JobService_Date';
  protected $endDateDataType = '';
  protected $expiryDateType = 'Google_Service_JobService_Date';
  protected $expiryDateDataType = '';
  protected $extendedCompensationInfoType = 'Google_Service_JobService_ExtendedCompensationInfo';
  protected $extendedCompensationInfoDataType = '';
  protected $filterableCustomFieldsType = 'Google_Service_JobService_CustomField';
  protected $filterableCustomFieldsDataType = 'map';
  protected $jobLocationsType = 'Google_Service_JobService_JobLocation';
  protected $jobLocationsDataType = 'array';
  protected $publishDateType = 'Google_Service_JobService_Date';
  protected $publishDateDataType = '';
  protected $startDateType = 'Google_Service_JobService_Date';
  protected $startDateDataType = '';
  protected $unindexedCustomFieldsType = 'Google_Service_JobService_CustomField';
  protected $unindexedCustomFieldsDataType = 'map';

  public function getApplicationEmailList()
  {
    return $this->applicationEmailList;
  }

  public function setApplicationEmailList($applicationEmailList)
  {
    $this->applicationEmailList = $applicationEmailList;
  }

  public function getApplicationInstruction()
  {
    return $this->applicationInstruction;
  }

  public function setApplicationInstruction($applicationInstruction)
  {
    $this->applicationInstruction = $applicationInstruction;
  }

  public function getApplicationUrls()
  {
    return $this->applicationUrls;
  }

  public function setApplicationUrls($applicationUrls)
  {
    $this->applicationUrls = $applicationUrls;
  }

  public function getBenefits()
  {
    return $this->benefits;
  }

  public function setBenefits($benefits)
  {
    $this->benefits = $benefits;
  }

  public function getCompanyDisplayName()
  {
    return $this->companyDisplayName;
  }

  public function setCompanyDisplayName($companyDisplayName)
  {
    $this->companyDisplayName = $companyDisplayName;
  }

  public function getCompanyName()
  {
    return $this->companyName;
  }

  public function setCompanyName($companyName)
  {
    $this->companyName = $companyName;
  }

  public function getCompanyTitle()
  {
    return $this->companyTitle;
  }

  public function setCompanyTitle($companyTitle)
  {
    $this->companyTitle = $companyTitle;
  }

  /**
   * @param Google_Service_JobService_CompensationInfo
   */
  public function setCompensationInfo(Google_Service_JobService_CompensationInfo $compensationInfo)
  {
    $this->compensationInfo = $compensationInfo;
  }
  /**
   * @return Google_Service_JobService_CompensationInfo
   */
  public function getCompensationInfo()
  {
    return $this->compensationInfo;
  }

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  /**
   * @param Google_Service_JobService_CustomAttribute
   */
  public function setCustomAttributes($customAttributes)
  {
    $this->customAttributes = $customAttributes;
  }
  /**
   * @return Google_Service_JobService_CustomAttribute
   */
  public function getCustomAttributes()
  {
    return $this->customAttributes;
  }

  public function getDepartment()
  {
    return $this->department;
  }

  public function setDepartment($department)
  {
    $this->department = $department;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDistributorCompanyId()
  {
    return $this->distributorCompanyId;
  }

  public function setDistributorCompanyId($distributorCompanyId)
  {
    $this->distributorCompanyId = $distributorCompanyId;
  }

  public function getEducationLevels()
  {
    return $this->educationLevels;
  }

  public function setEducationLevels($educationLevels)
  {
    $this->educationLevels = $educationLevels;
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
   * @param Google_Service_JobService_Date
   */
  public function setEndDate(Google_Service_JobService_Date $endDate)
  {
    $this->endDate = $endDate;
  }
  /**
   * @return Google_Service_JobService_Date
   */
  public function getEndDate()
  {
    return $this->endDate;
  }

  public function getExpireTime()
  {
    return $this->expireTime;
  }

  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }

  /**
   * @param Google_Service_JobService_Date
   */
  public function setExpiryDate(Google_Service_JobService_Date $expiryDate)
  {
    $this->expiryDate = $expiryDate;
  }
  /**
   * @return Google_Service_JobService_Date
   */
  public function getExpiryDate()
  {
    return $this->expiryDate;
  }
  /**
   * @param Google_Service_JobService_ExtendedCompensationInfo
   */
  public function setExtendedCompensationInfo(Google_Service_JobService_ExtendedCompensationInfo $extendedCompensationInfo)
  {
    $this->extendedCompensationInfo = $extendedCompensationInfo;
  }
  /**
   * @return Google_Service_JobService_ExtendedCompensationInfo
   */
  public function getExtendedCompensationInfo()
  {
    return $this->extendedCompensationInfo;
  }
  /**
   * @param Google_Service_JobService_CustomField
   */
  public function setFilterableCustomFields($filterableCustomFields)
  {
    $this->filterableCustomFields = $filterableCustomFields;
  }
  /**
   * @return Google_Service_JobService_CustomField
   */
  public function getFilterableCustomFields()
  {
    return $this->filterableCustomFields;
  }

  public function getIncentives()
  {
    return $this->incentives;
  }

  public function setIncentives($incentives)
  {
    $this->incentives = $incentives;
  }

  /**
   * @param Google_Service_JobService_JobLocation
   */
  public function setJobLocations($jobLocations)
  {
    $this->jobLocations = $jobLocations;
  }
  /**
   * @return Google_Service_JobService_JobLocation
   */
  public function getJobLocations()
  {
    return $this->jobLocations;
  }

  public function getJobTitle()
  {
    return $this->jobTitle;
  }

  public function setJobTitle($jobTitle)
  {
    $this->jobTitle = $jobTitle;
  }

  public function getLanguageCode()
  {
    return $this->languageCode;
  }

  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }

  public function getLevel()
  {
    return $this->level;
  }

  public function setLevel($level)
  {
    $this->level = $level;
  }

  public function getLocations()
  {
    return $this->locations;
  }

  public function setLocations($locations)
  {
    $this->locations = $locations;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPromotionValue()
  {
    return $this->promotionValue;
  }

  public function setPromotionValue($promotionValue)
  {
    $this->promotionValue = $promotionValue;
  }

  /**
   * @param Google_Service_JobService_Date
   */
  public function setPublishDate(Google_Service_JobService_Date $publishDate)
  {
    $this->publishDate = $publishDate;
  }
  /**
   * @return Google_Service_JobService_Date
   */
  public function getPublishDate()
  {
    return $this->publishDate;
  }

  public function getQualifications()
  {
    return $this->qualifications;
  }

  public function setQualifications($qualifications)
  {
    $this->qualifications = $qualifications;
  }

  public function getReferenceUrl()
  {
    return $this->referenceUrl;
  }

  public function setReferenceUrl($referenceUrl)
  {
    $this->referenceUrl = $referenceUrl;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getRequisitionId()
  {
    return $this->requisitionId;
  }

  public function setRequisitionId($requisitionId)
  {
    $this->requisitionId = $requisitionId;
  }

  public function getResponsibilities()
  {
    return $this->responsibilities;
  }

  public function setResponsibilities($responsibilities)
  {
    $this->responsibilities = $responsibilities;
  }

  /**
   * @param Google_Service_JobService_Date
   */
  public function setStartDate(Google_Service_JobService_Date $startDate)
  {
    $this->startDate = $startDate;
  }
  /**
   * @return Google_Service_JobService_Date
   */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /**
   * @param Google_Service_JobService_CustomField
   */
  public function setUnindexedCustomFields($unindexedCustomFields)
  {
    $this->unindexedCustomFields = $unindexedCustomFields;
  }
  /**
   * @return Google_Service_JobService_CustomField
   */
  public function getUnindexedCustomFields()
  {
    return $this->unindexedCustomFields;
  }

  public function getUpdateTime()
  {
    return $this->updateTime;
  }

  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }

  public function getVisibility()
  {
    return $this->visibility;
  }

  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }
}
