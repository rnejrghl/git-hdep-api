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

class Google_Service_PlayMovies_Avail extends Google_Collection
{
  public $altId;
  public $availId;
  public $captionExemption;
  public $captionIncluded;
  public $contentId;
  public $displayName;
  public $encodeId;
  public $end;
  public $episodeAltId;
  public $episodeNumber;
  public $episodeTitleInternalAlias;
  public $formatProfile;
  public $licenseType;
  public $pphNames;
  public $priceType;
  public $priceValue;
  public $productId;
  public $ratingReason;
  public $ratingSystem;
  public $ratingValue;
  public $releaseDate;
  public $seasonAltId;
  public $seasonNumber;
  public $seasonTitleInternalAlias;
  public $seriesAltId;
  public $seriesTitleInternalAlias;
  public $start;
  public $storeLanguage;
  public $suppressionLiftDate;
  public $territory;
  public $titleInternalAlias;
  public $videoId;
  public $workType;
  protected $collection_key = 'pphNames';

  public function getAltId()
  {
    return $this->altId;
  }

  public function setAltId($altId)
  {
    $this->altId = $altId;
  }

  public function getAvailId()
  {
    return $this->availId;
  }

  public function setAvailId($availId)
  {
    $this->availId = $availId;
  }

  public function getCaptionExemption()
  {
    return $this->captionExemption;
  }

  public function setCaptionExemption($captionExemption)
  {
    $this->captionExemption = $captionExemption;
  }

  public function getCaptionIncluded()
  {
    return $this->captionIncluded;
  }

  public function setCaptionIncluded($captionIncluded)
  {
    $this->captionIncluded = $captionIncluded;
  }

  public function getContentId()
  {
    return $this->contentId;
  }

  public function setContentId($contentId)
  {
    $this->contentId = $contentId;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getEncodeId()
  {
    return $this->encodeId;
  }

  public function setEncodeId($encodeId)
  {
    $this->encodeId = $encodeId;
  }

  public function getEnd()
  {
    return $this->end;
  }

  public function setEnd($end)
  {
    $this->end = $end;
  }

  public function getEpisodeAltId()
  {
    return $this->episodeAltId;
  }

  public function setEpisodeAltId($episodeAltId)
  {
    $this->episodeAltId = $episodeAltId;
  }

  public function getEpisodeNumber()
  {
    return $this->episodeNumber;
  }

  public function setEpisodeNumber($episodeNumber)
  {
    $this->episodeNumber = $episodeNumber;
  }

  public function getEpisodeTitleInternalAlias()
  {
    return $this->episodeTitleInternalAlias;
  }

  public function setEpisodeTitleInternalAlias($episodeTitleInternalAlias)
  {
    $this->episodeTitleInternalAlias = $episodeTitleInternalAlias;
  }

  public function getFormatProfile()
  {
    return $this->formatProfile;
  }

  public function setFormatProfile($formatProfile)
  {
    $this->formatProfile = $formatProfile;
  }

  public function getLicenseType()
  {
    return $this->licenseType;
  }

  public function setLicenseType($licenseType)
  {
    $this->licenseType = $licenseType;
  }

  public function getPphNames()
  {
    return $this->pphNames;
  }

  public function setPphNames($pphNames)
  {
    $this->pphNames = $pphNames;
  }

  public function getPriceType()
  {
    return $this->priceType;
  }

  public function setPriceType($priceType)
  {
    $this->priceType = $priceType;
  }

  public function getPriceValue()
  {
    return $this->priceValue;
  }

  public function setPriceValue($priceValue)
  {
    $this->priceValue = $priceValue;
  }

  public function getProductId()
  {
    return $this->productId;
  }

  public function setProductId($productId)
  {
    $this->productId = $productId;
  }

  public function getRatingReason()
  {
    return $this->ratingReason;
  }

  public function setRatingReason($ratingReason)
  {
    $this->ratingReason = $ratingReason;
  }

  public function getRatingSystem()
  {
    return $this->ratingSystem;
  }

  public function setRatingSystem($ratingSystem)
  {
    $this->ratingSystem = $ratingSystem;
  }

  public function getRatingValue()
  {
    return $this->ratingValue;
  }

  public function setRatingValue($ratingValue)
  {
    $this->ratingValue = $ratingValue;
  }

  public function getReleaseDate()
  {
    return $this->releaseDate;
  }

  public function setReleaseDate($releaseDate)
  {
    $this->releaseDate = $releaseDate;
  }

  public function getSeasonAltId()
  {
    return $this->seasonAltId;
  }

  public function setSeasonAltId($seasonAltId)
  {
    $this->seasonAltId = $seasonAltId;
  }

  public function getSeasonNumber()
  {
    return $this->seasonNumber;
  }

  public function setSeasonNumber($seasonNumber)
  {
    $this->seasonNumber = $seasonNumber;
  }

  public function getSeasonTitleInternalAlias()
  {
    return $this->seasonTitleInternalAlias;
  }

  public function setSeasonTitleInternalAlias($seasonTitleInternalAlias)
  {
    $this->seasonTitleInternalAlias = $seasonTitleInternalAlias;
  }

  public function getSeriesAltId()
  {
    return $this->seriesAltId;
  }

  public function setSeriesAltId($seriesAltId)
  {
    $this->seriesAltId = $seriesAltId;
  }

  public function getSeriesTitleInternalAlias()
  {
    return $this->seriesTitleInternalAlias;
  }

  public function setSeriesTitleInternalAlias($seriesTitleInternalAlias)
  {
    $this->seriesTitleInternalAlias = $seriesTitleInternalAlias;
  }

  public function getStart()
  {
    return $this->start;
  }

  public function setStart($start)
  {
    $this->start = $start;
  }

  public function getStoreLanguage()
  {
    return $this->storeLanguage;
  }

  public function setStoreLanguage($storeLanguage)
  {
    $this->storeLanguage = $storeLanguage;
  }

  public function getSuppressionLiftDate()
  {
    return $this->suppressionLiftDate;
  }

  public function setSuppressionLiftDate($suppressionLiftDate)
  {
    $this->suppressionLiftDate = $suppressionLiftDate;
  }

  public function getTerritory()
  {
    return $this->territory;
  }

  public function setTerritory($territory)
  {
    $this->territory = $territory;
  }

  public function getTitleInternalAlias()
  {
    return $this->titleInternalAlias;
  }

  public function setTitleInternalAlias($titleInternalAlias)
  {
    $this->titleInternalAlias = $titleInternalAlias;
  }

  public function getVideoId()
  {
    return $this->videoId;
  }

  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }

  public function getWorkType()
  {
    return $this->workType;
  }

  public function setWorkType($workType)
  {
    $this->workType = $workType;
  }
}
