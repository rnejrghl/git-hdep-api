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

class Google_Service_Speech_RecognitionConfig extends Google_Collection
{
  public $enableAutomaticPunctuation;
  public $enableWordTimeOffsets;
  public $encoding;
  public $languageCode;
  public $maxAlternatives;
  public $model;
  public $profanityFilter;
  public $sampleRateHertz;
  public $useEnhanced;
  protected $collection_key = 'speechContexts';
  protected $speechContextsType = 'Google_Service_Speech_SpeechContext';
  protected $speechContextsDataType = 'array';

  public function getEnableAutomaticPunctuation()
  {
    return $this->enableAutomaticPunctuation;
  }

  public function setEnableAutomaticPunctuation($enableAutomaticPunctuation)
  {
    $this->enableAutomaticPunctuation = $enableAutomaticPunctuation;
  }

  public function getEnableWordTimeOffsets()
  {
    return $this->enableWordTimeOffsets;
  }

  public function setEnableWordTimeOffsets($enableWordTimeOffsets)
  {
    $this->enableWordTimeOffsets = $enableWordTimeOffsets;
  }

  public function getEncoding()
  {
    return $this->encoding;
  }

  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }

  public function getLanguageCode()
  {
    return $this->languageCode;
  }

  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }

  public function getMaxAlternatives()
  {
    return $this->maxAlternatives;
  }

  public function setMaxAlternatives($maxAlternatives)
  {
    $this->maxAlternatives = $maxAlternatives;
  }

  public function getModel()
  {
    return $this->model;
  }

  public function setModel($model)
  {
    $this->model = $model;
  }

  public function getProfanityFilter()
  {
    return $this->profanityFilter;
  }

  public function setProfanityFilter($profanityFilter)
  {
    $this->profanityFilter = $profanityFilter;
  }

  public function getSampleRateHertz()
  {
    return $this->sampleRateHertz;
  }

  public function setSampleRateHertz($sampleRateHertz)
  {
    $this->sampleRateHertz = $sampleRateHertz;
  }

  /**
   * @param Google_Service_Speech_SpeechContext
   */
  public function setSpeechContexts($speechContexts)
  {
    $this->speechContexts = $speechContexts;
  }
  /**
   * @return Google_Service_Speech_SpeechContext
   */
  public function getSpeechContexts()
  {
    return $this->speechContexts;
  }

  public function getUseEnhanced()
  {
    return $this->useEnhanced;
  }

  public function setUseEnhanced($useEnhanced)
  {
    $this->useEnhanced = $useEnhanced;
  }
}
