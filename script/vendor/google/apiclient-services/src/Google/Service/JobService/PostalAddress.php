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

class Google_Service_JobService_PostalAddress extends Google_Collection
{
  public $addressLines;
  public $administrativeArea;
  public $languageCode;
  public $locality;
  public $organization;
  public $postalCode;
  public $recipients;
  public $regionCode;
  public $revision;
  public $sortingCode;
  public $sublocality;
  protected $collection_key = 'recipients';

  public function getAddressLines()
  {
    return $this->addressLines;
  }

  public function setAddressLines($addressLines)
  {
    $this->addressLines = $addressLines;
  }

  public function getAdministrativeArea()
  {
    return $this->administrativeArea;
  }

  public function setAdministrativeArea($administrativeArea)
  {
    $this->administrativeArea = $administrativeArea;
  }

  public function getLanguageCode()
  {
    return $this->languageCode;
  }

  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }

  public function getLocality()
  {
    return $this->locality;
  }

  public function setLocality($locality)
  {
    $this->locality = $locality;
  }

  public function getOrganization()
  {
    return $this->organization;
  }

  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }

  public function getPostalCode()
  {
    return $this->postalCode;
  }

  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }

  public function getRecipients()
  {
    return $this->recipients;
  }

  public function setRecipients($recipients)
  {
    $this->recipients = $recipients;
  }

  public function getRegionCode()
  {
    return $this->regionCode;
  }

  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }

  public function getRevision()
  {
    return $this->revision;
  }

  public function setRevision($revision)
  {
    $this->revision = $revision;
  }

  public function getSortingCode()
  {
    return $this->sortingCode;
  }

  public function setSortingCode($sortingCode)
  {
    $this->sortingCode = $sortingCode;
  }

  public function getSublocality()
  {
    return $this->sublocality;
  }

  public function setSublocality($sublocality)
  {
    $this->sublocality = $sublocality;
  }
}
