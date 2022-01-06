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

class Google_Service_ShoppingContent_TestOrder extends Google_Collection
{
  public $enableOrderinvoices;
  public $kind;
  public $notificationMode;
  public $predefinedDeliveryAddress;
  public $shippingOption;
  protected $collection_key = 'promotions';
  protected $customerType = 'Google_Service_ShoppingContent_TestOrderCustomer';
  protected $customerDataType = '';
  protected $lineItemsType = 'Google_Service_ShoppingContent_TestOrderLineItem';
  protected $lineItemsDataType = 'array';
  protected $paymentMethodType = 'Google_Service_ShoppingContent_TestOrderPaymentMethod';
  protected $paymentMethodDataType = '';
  protected $promotionsType = 'Google_Service_ShoppingContent_OrderLegacyPromotion';
  protected $promotionsDataType = 'array';
  protected $shippingCostType = 'Google_Service_ShoppingContent_Price';
  protected $shippingCostDataType = '';
  protected $shippingCostTaxType = 'Google_Service_ShoppingContent_Price';
  protected $shippingCostTaxDataType = '';

  /**
   * @param Google_Service_ShoppingContent_TestOrderCustomer
   */
  public function setCustomer(Google_Service_ShoppingContent_TestOrderCustomer $customer)
  {
    $this->customer = $customer;
  }
  /**
   * @return Google_Service_ShoppingContent_TestOrderCustomer
   */
  public function getCustomer()
  {
    return $this->customer;
  }

  public function getEnableOrderinvoices()
  {
    return $this->enableOrderinvoices;
  }

  public function setEnableOrderinvoices($enableOrderinvoices)
  {
    $this->enableOrderinvoices = $enableOrderinvoices;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  /**
   * @param Google_Service_ShoppingContent_TestOrderLineItem
   */
  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  /**
   * @return Google_Service_ShoppingContent_TestOrderLineItem
   */
  public function getLineItems()
  {
    return $this->lineItems;
  }

  public function getNotificationMode()
  {
    return $this->notificationMode;
  }

  public function setNotificationMode($notificationMode)
  {
    $this->notificationMode = $notificationMode;
  }

  /**
   * @param Google_Service_ShoppingContent_TestOrderPaymentMethod
   */
  public function setPaymentMethod(Google_Service_ShoppingContent_TestOrderPaymentMethod $paymentMethod)
  {
    $this->paymentMethod = $paymentMethod;
  }
  /**
   * @return Google_Service_ShoppingContent_TestOrderPaymentMethod
   */
  public function getPaymentMethod()
  {
    return $this->paymentMethod;
  }

  public function getPredefinedDeliveryAddress()
  {
    return $this->predefinedDeliveryAddress;
  }

  public function setPredefinedDeliveryAddress($predefinedDeliveryAddress)
  {
    $this->predefinedDeliveryAddress = $predefinedDeliveryAddress;
  }

  /**
   * @param Google_Service_ShoppingContent_OrderLegacyPromotion
   */
  public function setPromotions($promotions)
  {
    $this->promotions = $promotions;
  }
  /**
   * @return Google_Service_ShoppingContent_OrderLegacyPromotion
   */
  public function getPromotions()
  {
    return $this->promotions;
  }
  /**
   * @param Google_Service_ShoppingContent_Price
   */
  public function setShippingCost(Google_Service_ShoppingContent_Price $shippingCost)
  {
    $this->shippingCost = $shippingCost;
  }
  /**
   * @return Google_Service_ShoppingContent_Price
   */
  public function getShippingCost()
  {
    return $this->shippingCost;
  }
  /**
   * @param Google_Service_ShoppingContent_Price
   */
  public function setShippingCostTax(Google_Service_ShoppingContent_Price $shippingCostTax)
  {
    $this->shippingCostTax = $shippingCostTax;
  }
  /**
   * @return Google_Service_ShoppingContent_Price
   */
  public function getShippingCostTax()
  {
    return $this->shippingCostTax;
  }

  public function getShippingOption()
  {
    return $this->shippingOption;
  }

  public function setShippingOption($shippingOption)
  {
    $this->shippingOption = $shippingOption;
  }
}
