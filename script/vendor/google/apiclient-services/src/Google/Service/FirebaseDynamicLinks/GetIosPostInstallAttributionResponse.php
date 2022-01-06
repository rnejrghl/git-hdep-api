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

class Google_Service_FirebaseDynamicLinks_GetIosPostInstallAttributionResponse extends Google_Model
{
  public $appMinimumVersion;
  public $attributionConfidence;
  public $deepLink;
  public $externalBrowserDestinationLink;
  public $fallbackLink;
  public $invitationId;
  public $isStrongMatchExecutable;
  public $matchMessage;
  public $requestIpVersion;
  public $requestedLink;
  public $resolvedLink;
  public $utmCampaign;
  public $utmMedium;
  public $utmSource;

  public function getAppMinimumVersion()
  {
    return $this->appMinimumVersion;
  }

  public function setAppMinimumVersion($appMinimumVersion)
  {
    $this->appMinimumVersion = $appMinimumVersion;
  }

  public function getAttributionConfidence()
  {
    return $this->attributionConfidence;
  }

  public function setAttributionConfidence($attributionConfidence)
  {
    $this->attributionConfidence = $attributionConfidence;
  }

  public function getDeepLink()
  {
    return $this->deepLink;
  }

  public function setDeepLink($deepLink)
  {
    $this->deepLink = $deepLink;
  }

  public function getExternalBrowserDestinationLink()
  {
    return $this->externalBrowserDestinationLink;
  }

  public function setExternalBrowserDestinationLink($externalBrowserDestinationLink)
  {
    $this->externalBrowserDestinationLink = $externalBrowserDestinationLink;
  }

  public function getFallbackLink()
  {
    return $this->fallbackLink;
  }

  public function setFallbackLink($fallbackLink)
  {
    $this->fallbackLink = $fallbackLink;
  }

  public function getInvitationId()
  {
    return $this->invitationId;
  }

  public function setInvitationId($invitationId)
  {
    $this->invitationId = $invitationId;
  }

  public function getIsStrongMatchExecutable()
  {
    return $this->isStrongMatchExecutable;
  }

  public function setIsStrongMatchExecutable($isStrongMatchExecutable)
  {
    $this->isStrongMatchExecutable = $isStrongMatchExecutable;
  }

  public function getMatchMessage()
  {
    return $this->matchMessage;
  }

  public function setMatchMessage($matchMessage)
  {
    $this->matchMessage = $matchMessage;
  }

  public function getRequestIpVersion()
  {
    return $this->requestIpVersion;
  }

  public function setRequestIpVersion($requestIpVersion)
  {
    $this->requestIpVersion = $requestIpVersion;
  }

  public function getRequestedLink()
  {
    return $this->requestedLink;
  }

  public function setRequestedLink($requestedLink)
  {
    $this->requestedLink = $requestedLink;
  }

  public function getResolvedLink()
  {
    return $this->resolvedLink;
  }

  public function setResolvedLink($resolvedLink)
  {
    $this->resolvedLink = $resolvedLink;
  }

  public function getUtmCampaign()
  {
    return $this->utmCampaign;
  }

  public function setUtmCampaign($utmCampaign)
  {
    $this->utmCampaign = $utmCampaign;
  }

  public function getUtmMedium()
  {
    return $this->utmMedium;
  }

  public function setUtmMedium($utmMedium)
  {
    $this->utmMedium = $utmMedium;
  }

  public function getUtmSource()
  {
    return $this->utmSource;
  }

  public function setUtmSource($utmSource)
  {
    $this->utmSource = $utmSource;
  }
}