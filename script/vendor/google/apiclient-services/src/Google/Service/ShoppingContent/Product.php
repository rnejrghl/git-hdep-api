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

class Google_Service_ShoppingContent_Product extends Google_Collection
{
  public $additionalImageLinks;
  public $additionalProductTypes;
  public $adult;
  public $adwordsGrouping;
  public $adwordsLabels;
  public $adwordsRedirect;
  public $ageGroup;
  public $availability;
  public $availabilityDate;
  public $brand;
  public $channel;
  public $color;
  public $condition;
  public $contentLanguage;
  public $customLabel0;
  public $customLabel1;
  public $customLabel2;
  public $customLabel3;
  public $customLabel4;
  public $description;
  public $displayAdsId;
  public $displayAdsLink;
  public $displayAdsSimilarIds;
  public $displayAdsTitle;
  public $displayAdsValue;
  public $energyEfficiencyClass;
  public $expirationDate;
  public $gender;
  public $googleProductCategory;
  public $gtin;
  public $id;
  public $identifierExists;
  public $imageLink;
  public $isBundle;
  public $itemGroupId;
  public $kind;
  public $link;
  public $material;
  public $maxEnergyEfficiencyClass;
  public $maxHandlingTime;
  public $minEnergyEfficiencyClass;
  public $minHandlingTime;
  public $mobileLink;
  public $mpn;
  public $multipack;
  public $offerId;
  public $onlineOnly;
  public $pattern;
  public $productType;
  public $promotionIds;
  public $salePriceEffectiveDate;
  public $sellOnGoogleQuantity;
  public $shippingLabel;
  public $sizeSystem;
  public $sizeType;
  public $sizes;
  public $source;
  public $targetCountry;
  public $title;
  public $validatedDestinations;
  protected $collection_key = 'warnings';
  protected $aspectsType = 'Google_Service_ShoppingContent_ProductAspect';
  protected $aspectsDataType = 'array';
  protected $costOfGoodsSoldType = 'Google_Service_ShoppingContent_Price';
  protected $costOfGoodsSoldDataType = '';
  protected $customAttributesType = 'Google_Service_ShoppingContent_CustomAttribute';
  protected $customAttributesDataType = 'array';
  protected $customGroupsType = 'Google_Service_ShoppingContent_CustomGroup';
  protected $customGroupsDataType = 'array';
  protected $destinationsType = 'Google_Service_ShoppingContent_ProductDestination';
  protected $destinationsDataType = 'array';
  protected $installmentType = 'Google_Service_ShoppingContent_Installment';
  protected $installmentDataType = '';
  protected $loyaltyPointsType = 'Google_Service_ShoppingContent_LoyaltyPoints';
  protected $loyaltyPointsDataType = '';
  protected $priceType = 'Google_Service_ShoppingContent_Price';
  protected $priceDataType = '';
  protected $salePriceType = 'Google_Service_ShoppingContent_Price';
  protected $salePriceDataType = '';
  protected $shippingType = 'Google_Service_ShoppingContent_ProductShipping';
  protected $shippingDataType = 'array';
  protected $shippingHeightType = 'Google_Service_ShoppingContent_ProductShippingDimension';
  protected $shippingHeightDataType = '';
  protected $shippingLengthType = 'Google_Service_ShoppingContent_ProductShippingDimension';
  protected $shippingLengthDataType = '';
  protected $shippingWeightType = 'Google_Service_ShoppingContent_ProductShippingWeight';
  protected $shippingWeightDataType = '';
  protected $shippingWidthType = 'Google_Service_ShoppingContent_ProductShippingDimension';
  protected $shippingWidthDataType = '';
  protected $taxesType = 'Google_Service_ShoppingContent_ProductTax';
  protected $taxesDataType = 'array';
  protected $unitPricingBaseMeasureType = 'Google_Service_ShoppingContent_ProductUnitPricingBaseMeasure';
  protected $unitPricingBaseMeasureDataType = '';
  protected $unitPricingMeasureType = 'Google_Service_ShoppingContent_ProductUnitPricingMeasure';
  protected $unitPricingMeasureDataType = '';
  protected $warningsType = 'Google_Service_ShoppingContent_Error';
  protected $warningsDataType = 'array';

  public function getAdditionalImageLinks()
  {
    return $this->additionalImageLinks;
  }

  public function setAdditionalImageLinks($additionalImageLinks)
  {
    $this->additionalImageLinks = $additionalImageLinks;
  }

  public function getAdditionalProductTypes()
  {
    return $this->additionalProductTypes;
  }

  public function setAdditionalProductTypes($additionalProductTypes)
  {
    $this->additionalProductTypes = $additionalProductTypes;
  }

  public function getAdult()
  {
    return $this->adult;
  }

  public function setAdult($adult)
  {
    $this->adult = $adult;
  }

  public function getAdwordsGrouping()
  {
    return $this->adwordsGrouping;
  }

  public function setAdwordsGrouping($adwordsGrouping)
  {
    $this->adwordsGrouping = $adwordsGrouping;
  }

  public function getAdwordsLabels()
  {
    return $this->adwordsLabels;
  }

  public function setAdwordsLabels($adwordsLabels)
  {
    $this->adwordsLabels = $adwordsLabels;
  }

  public function getAdwordsRedirect()
  {
    return $this->adwordsRedirect;
  }

  public function setAdwordsRedirect($adwordsRedirect)
  {
    $this->adwordsRedirect = $adwordsRedirect;
  }

  public function getAgeGroup()
  {
    return $this->ageGroup;
  }

  public function setAgeGroup($ageGroup)
  {
    $this->ageGroup = $ageGroup;
  }

  /**
   * @param Google_Service_ShoppingContent_ProductAspect
   */
  public function setAspects($aspects)
  {
    $this->aspects = $aspects;
  }
  /**
   * @return Google_Service_ShoppingContent_ProductAspect
   */
  public function getAspects()
  {
    return $this->aspects;
  }

  public function getAvailability()
  {
    return $this->availability;
  }

  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }

  public function getAvailabilityDate()
  {
    return $this->availabilityDate;
  }

  public function setAvailabilityDate($availabilityDate)
  {
    $this->availabilityDate = $availabilityDate;
  }

  public function getBrand()
  {
    return $this->brand;
  }

  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  public function getChannel()
  {
    return $this->channel;
  }

  public function setChannel($channel)
  {
    $this->channel = $channel;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function setColor($color)
  {
    $this->color = $color;
  }

  public function getCondition()
  {
    return $this->condition;
  }

  public function setCondition($condition)
  {
    $this->condition = $condition;
  }

  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }

  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }

  /**
   * @param Google_Service_ShoppingContent_Price
   */
  public function setCostOfGoodsSold(Google_Service_ShoppingContent_Price $costOfGoodsSold)
  {
    $this->costOfGoodsSold = $costOfGoodsSold;
  }
  /**
   * @return Google_Service_ShoppingContent_Price
   */
  public function getCostOfGoodsSold()
  {
    return $this->costOfGoodsSold;
  }
  /**
   * @param Google_Service_ShoppingContent_CustomAttribute
   */
  public function setCustomAttributes($customAttributes)
  {
    $this->customAttributes = $customAttributes;
  }
  /**
   * @return Google_Service_ShoppingContent_CustomAttribute
   */
  public function getCustomAttributes()
  {
    return $this->customAttributes;
  }
  /**
   * @param Google_Service_ShoppingContent_CustomGroup
   */
  public function setCustomGroups($customGroups)
  {
    $this->customGroups = $customGroups;
  }
  /**
   * @return Google_Service_ShoppingContent_CustomGroup
   */
  public function getCustomGroups()
  {
    return $this->customGroups;
  }

  public function getCustomLabel0()
  {
    return $this->customLabel0;
  }

  public function setCustomLabel0($customLabel0)
  {
    $this->customLabel0 = $customLabel0;
  }

  public function getCustomLabel1()
  {
    return $this->customLabel1;
  }

  public function setCustomLabel1($customLabel1)
  {
    $this->customLabel1 = $customLabel1;
  }

  public function getCustomLabel2()
  {
    return $this->customLabel2;
  }

  public function setCustomLabel2($customLabel2)
  {
    $this->customLabel2 = $customLabel2;
  }

  public function getCustomLabel3()
  {
    return $this->customLabel3;
  }

  public function setCustomLabel3($customLabel3)
  {
    $this->customLabel3 = $customLabel3;
  }

  public function getCustomLabel4()
  {
    return $this->customLabel4;
  }

  public function setCustomLabel4($customLabel4)
  {
    $this->customLabel4 = $customLabel4;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  /**
   * @param Google_Service_ShoppingContent_ProductDestination
   */
  public function setDestinations($destinations)
  {
    $this->destinations = $destinations;
  }
  /**
   * @return Google_Service_ShoppingContent_ProductDestination
   */
  public function getDestinations()
  {
    return $this->destinations;
  }

  public function getDisplayAdsId()
  {
    return $this->displayAdsId;
  }

  public function setDisplayAdsId($displayAdsId)
  {
    $this->displayAdsId = $displayAdsId;
  }

  public function getDisplayAdsLink()
  {
    return $this->displayAdsLink;
  }

  public function setDisplayAdsLink($displayAdsLink)
  {
    $this->displayAdsLink = $displayAdsLink;
  }

  public function getDisplayAdsSimilarIds()
  {
    return $this->displayAdsSimilarIds;
  }

  public function setDisplayAdsSimilarIds($displayAdsSimilarIds)
  {
    $this->displayAdsSimilarIds = $displayAdsSimilarIds;
  }

  public function getDisplayAdsTitle()
  {
    return $this->displayAdsTitle;
  }

  public function setDisplayAdsTitle($displayAdsTitle)
  {
    $this->displayAdsTitle = $displayAdsTitle;
  }

  public function getDisplayAdsValue()
  {
    return $this->displayAdsValue;
  }

  public function setDisplayAdsValue($displayAdsValue)
  {
    $this->displayAdsValue = $displayAdsValue;
  }

  public function getEnergyEfficiencyClass()
  {
    return $this->energyEfficiencyClass;
  }

  public function setEnergyEfficiencyClass($energyEfficiencyClass)
  {
    $this->energyEfficiencyClass = $energyEfficiencyClass;
  }

  public function getExpirationDate()
  {
    return $this->expirationDate;
  }

  public function setExpirationDate($expirationDate)
  {
    $this->expirationDate = $expirationDate;
  }

  public function getGender()
  {
    return $this->gender;
  }

  public function setGender($gender)
  {
    $this->gender = $gender;
  }

  public function getGoogleProductCategory()
  {
    return $this->googleProductCategory;
  }

  public function setGoogleProductCategory($googleProductCategory)
  {
    $this->googleProductCategory = $googleProductCategory;
  }

  public function getGtin()
  {
    return $this->gtin;
  }

  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getIdentifierExists()
  {
    return $this->identifierExists;
  }

  public function setIdentifierExists($identifierExists)
  {
    $this->identifierExists = $identifierExists;
  }

  public function getImageLink()
  {
    return $this->imageLink;
  }

  public function setImageLink($imageLink)
  {
    $this->imageLink = $imageLink;
  }

  /**
   * @param Google_Service_ShoppingContent_Installment
   */
  public function setInstallment(Google_Service_ShoppingContent_Installment $installment)
  {
    $this->installment = $installment;
  }
  /**
   * @return Google_Service_ShoppingContent_Installment
   */
  public function getInstallment()
  {
    return $this->installment;
  }

  public function getIsBundle()
  {
    return $this->isBundle;
  }

  public function setIsBundle($isBundle)
  {
    $this->isBundle = $isBundle;
  }

  public function getItemGroupId()
  {
    return $this->itemGroupId;
  }

  public function setItemGroupId($itemGroupId)
  {
    $this->itemGroupId = $itemGroupId;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getLink()
  {
    return $this->link;
  }

  public function setLink($link)
  {
    $this->link = $link;
  }

  /**
   * @param Google_Service_ShoppingContent_LoyaltyPoints
   */
  public function setLoyaltyPoints(Google_Service_ShoppingContent_LoyaltyPoints $loyaltyPoints)
  {
    $this->loyaltyPoints = $loyaltyPoints;
  }
  /**
   * @return Google_Service_ShoppingContent_LoyaltyPoints
   */
  public function getLoyaltyPoints()
  {
    return $this->loyaltyPoints;
  }

  public function getMaterial()
  {
    return $this->material;
  }

  public function setMaterial($material)
  {
    $this->material = $material;
  }

  public function getMaxEnergyEfficiencyClass()
  {
    return $this->maxEnergyEfficiencyClass;
  }

  public function setMaxEnergyEfficiencyClass($maxEnergyEfficiencyClass)
  {
    $this->maxEnergyEfficiencyClass = $maxEnergyEfficiencyClass;
  }

  public function getMaxHandlingTime()
  {
    return $this->maxHandlingTime;
  }

  public function setMaxHandlingTime($maxHandlingTime)
  {
    $this->maxHandlingTime = $maxHandlingTime;
  }

  public function getMinEnergyEfficiencyClass()
  {
    return $this->minEnergyEfficiencyClass;
  }

  public function setMinEnergyEfficiencyClass($minEnergyEfficiencyClass)
  {
    $this->minEnergyEfficiencyClass = $minEnergyEfficiencyClass;
  }

  public function getMinHandlingTime()
  {
    return $this->minHandlingTime;
  }

  public function setMinHandlingTime($minHandlingTime)
  {
    $this->minHandlingTime = $minHandlingTime;
  }

  public function getMobileLink()
  {
    return $this->mobileLink;
  }

  public function setMobileLink($mobileLink)
  {
    $this->mobileLink = $mobileLink;
  }

  public function getMpn()
  {
    return $this->mpn;
  }

  public function setMpn($mpn)
  {
    $this->mpn = $mpn;
  }

  public function getMultipack()
  {
    return $this->multipack;
  }

  public function setMultipack($multipack)
  {
    $this->multipack = $multipack;
  }

  public function getOfferId()
  {
    return $this->offerId;
  }

  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }

  public function getOnlineOnly()
  {
    return $this->onlineOnly;
  }

  public function setOnlineOnly($onlineOnly)
  {
    $this->onlineOnly = $onlineOnly;
  }

  public function getPattern()
  {
    return $this->pattern;
  }

  public function setPattern($pattern)
  {
    $this->pattern = $pattern;
  }

  /**
   * @param Google_Service_ShoppingContent_Price
   */
  public function setPrice(Google_Service_ShoppingContent_Price $price)
  {
    $this->price = $price;
  }
  /**
   * @return Google_Service_ShoppingContent_Price
   */
  public function getPrice()
  {
    return $this->price;
  }

  public function getProductType()
  {
    return $this->productType;
  }

  public function setProductType($productType)
  {
    $this->productType = $productType;
  }

  public function getPromotionIds()
  {
    return $this->promotionIds;
  }

  public function setPromotionIds($promotionIds)
  {
    $this->promotionIds = $promotionIds;
  }

  /**
   * @param Google_Service_ShoppingContent_Price
   */
  public function setSalePrice(Google_Service_ShoppingContent_Price $salePrice)
  {
    $this->salePrice = $salePrice;
  }
  /**
   * @return Google_Service_ShoppingContent_Price
   */
  public function getSalePrice()
  {
    return $this->salePrice;
  }

  public function getSalePriceEffectiveDate()
  {
    return $this->salePriceEffectiveDate;
  }

  public function setSalePriceEffectiveDate($salePriceEffectiveDate)
  {
    $this->salePriceEffectiveDate = $salePriceEffectiveDate;
  }

  public function getSellOnGoogleQuantity()
  {
    return $this->sellOnGoogleQuantity;
  }

  public function setSellOnGoogleQuantity($sellOnGoogleQuantity)
  {
    $this->sellOnGoogleQuantity = $sellOnGoogleQuantity;
  }

  /**
   * @param Google_Service_ShoppingContent_ProductShipping
   */
  public function setShipping($shipping)
  {
    $this->shipping = $shipping;
  }
  /**
   * @return Google_Service_ShoppingContent_ProductShipping
   */
  public function getShipping()
  {
    return $this->shipping;
  }
  /**
   * @param Google_Service_ShoppingContent_ProductShippingDimension
   */
  public function setShippingHeight(Google_Service_ShoppingContent_ProductShippingDimension $shippingHeight)
  {
    $this->shippingHeight = $shippingHeight;
  }
  /**
   * @return Google_Service_ShoppingContent_ProductShippingDimension
   */
  public function getShippingHeight()
  {
    return $this->shippingHeight;
  }

  public function getShippingLabel()
  {
    return $this->shippingLabel;
  }

  public function setShippingLabel($shippingLabel)
  {
    $this->shippingLabel = $shippingLabel;
  }

  /**
   * @param Google_Service_ShoppingContent_ProductShippingDimension
   */
  public function setShippingLength(Google_Service_ShoppingContent_ProductShippingDimension $shippingLength)
  {
    $this->shippingLength = $shippingLength;
  }
  /**
   * @return Google_Service_ShoppingContent_ProductShippingDimension
   */
  public function getShippingLength()
  {
    return $this->shippingLength;
  }
  /**
   * @param Google_Service_ShoppingContent_ProductShippingWeight
   */
  public function setShippingWeight(Google_Service_ShoppingContent_ProductShippingWeight $shippingWeight)
  {
    $this->shippingWeight = $shippingWeight;
  }
  /**
   * @return Google_Service_ShoppingContent_ProductShippingWeight
   */
  public function getShippingWeight()
  {
    return $this->shippingWeight;
  }
  /**
   * @param Google_Service_ShoppingContent_ProductShippingDimension
   */
  public function setShippingWidth(Google_Service_ShoppingContent_ProductShippingDimension $shippingWidth)
  {
    $this->shippingWidth = $shippingWidth;
  }
  /**
   * @return Google_Service_ShoppingContent_ProductShippingDimension
   */
  public function getShippingWidth()
  {
    return $this->shippingWidth;
  }

  public function getSizeSystem()
  {
    return $this->sizeSystem;
  }

  public function setSizeSystem($sizeSystem)
  {
    $this->sizeSystem = $sizeSystem;
  }

  public function getSizeType()
  {
    return $this->sizeType;
  }

  public function setSizeType($sizeType)
  {
    $this->sizeType = $sizeType;
  }

  public function getSizes()
  {
    return $this->sizes;
  }

  public function setSizes($sizes)
  {
    $this->sizes = $sizes;
  }

  public function getSource()
  {
    return $this->source;
  }

  public function setSource($source)
  {
    $this->source = $source;
  }

  public function getTargetCountry()
  {
    return $this->targetCountry;
  }

  public function setTargetCountry($targetCountry)
  {
    $this->targetCountry = $targetCountry;
  }

  /**
   * @param Google_Service_ShoppingContent_ProductTax
   */
  public function setTaxes($taxes)
  {
    $this->taxes = $taxes;
  }
  /**
   * @return Google_Service_ShoppingContent_ProductTax
   */
  public function getTaxes()
  {
    return $this->taxes;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  /**
   * @param Google_Service_ShoppingContent_ProductUnitPricingBaseMeasure
   */
  public function setUnitPricingBaseMeasure(Google_Service_ShoppingContent_ProductUnitPricingBaseMeasure $unitPricingBaseMeasure)
  {
    $this->unitPricingBaseMeasure = $unitPricingBaseMeasure;
  }
  /**
   * @return Google_Service_ShoppingContent_ProductUnitPricingBaseMeasure
   */
  public function getUnitPricingBaseMeasure()
  {
    return $this->unitPricingBaseMeasure;
  }
  /**
   * @param Google_Service_ShoppingContent_ProductUnitPricingMeasure
   */
  public function setUnitPricingMeasure(Google_Service_ShoppingContent_ProductUnitPricingMeasure $unitPricingMeasure)
  {
    $this->unitPricingMeasure = $unitPricingMeasure;
  }
  /**
   * @return Google_Service_ShoppingContent_ProductUnitPricingMeasure
   */
  public function getUnitPricingMeasure()
  {
    return $this->unitPricingMeasure;
  }

  public function getValidatedDestinations()
  {
    return $this->validatedDestinations;
  }

  public function setValidatedDestinations($validatedDestinations)
  {
    $this->validatedDestinations = $validatedDestinations;
  }

  /**
   * @param Google_Service_ShoppingContent_Error
   */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /**
   * @return Google_Service_ShoppingContent_Error
   */
  public function getWarnings()
  {
    return $this->warnings;
  }
}
