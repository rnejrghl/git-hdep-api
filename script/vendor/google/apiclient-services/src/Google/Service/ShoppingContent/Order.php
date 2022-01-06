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

class Google_Service_ShoppingContent_Order extends Google_Collection
{
  public $acknowledged;
  public $channelType;
  public $id;
  public $kind;
  public $merchantId;
  public $merchantOrderId;
  public $paymentStatus;
  public $placedDate;
  public $shippingOption;
  public $status;
  protected $collection_key = 'shipments';
  protected $customerType = 'Google_Service_ShoppingContent_OrderCustomer';
  protected $customerDataType = '';
  protected $deliveryDetailsType = 'Google_Service_ShoppingContent_OrderDeliveryDetails';
  protected $deliveryDetailsDataType = '';
  protected $lineItemsType = 'Google_Service_ShoppingContent_OrderLineItem';
  protected $lineItemsDataType = 'array';
  protected $netAmountType = 'Google_Service_ShoppingContent_Price';
  protected $netAmountDataType = '';
  protected $paymentMethodType = 'Google_Service_ShoppingContent_OrderPaymentMethod';
  protected $paymentMethodDataType = '';
  protected $promotionsType = 'Google_Service_ShoppingContent_OrderLegacyPromotion';
  protected $promotionsDataType = 'array';
  protected $refundsType = 'Google_Service_ShoppingContent_OrderRefund';
  protected $refundsDataType = 'array';
  protected $shipmentsType = 'Google_Service_ShoppingContent_OrderShipment';
  protected $shipmentsDataType = 'array';
  protected $shippingCostType = 'Google_Service_ShoppingContent_Price';
  protected $shippingCostDataType = '';
  protected $shippingCostTaxType = 'Google_Service_ShoppingContent_Price';
  protected $shippingCostTaxDataType = '';

  public function getAcknowledged()
  {
    return $this->acknowledged;
  }

  public function setAcknowledged($acknowledged)
  {
    $this->acknowledged = $acknowledged;
  }

  public function getChannelType()
  {
    return $this->channelType;
  }

  public function setChannelType($channelType)
  {
    $this->channelType = $channelType;
  }

  /**
   * @param Google_Service_ShoppingContent_OrderCustomer
   */
  public function setCustomer(Google_Service_ShoppingContent_OrderCustomer $customer)
  {
    $this->customer = $customer;
  }
  /**
   * @return Google_Service_ShoppingContent_OrderCustomer
   */
  public function getCustomer()
  {
    return $this->customer;
  }
  /**
   * @param Google_Service_ShoppingContent_OrderDeliveryDetails
   */
  public function setDeliveryDetails(Google_Service_ShoppingContent_OrderDeliveryDetails $deliveryDetails)
  {
    $this->deliveryDetails = $deliveryDetails;
  }
  /**
   * @return Google_Service_ShoppingContent_OrderDeliveryDetails
   */
  public function getDeliveryDetails()
  {
    return $this->deliveryDetails;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
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
   * @param Google_Service_ShoppingContent_OrderLineItem
   */
  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  /**
   * @return Google_Service_ShoppingContent_OrderLineItem
   */
  public function getLineItems()
  {
    return $this->lineItems;
  }

  public function getMerchantId()
  {
    return $this->merchantId;
  }

  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }

  public function getMerchantOrderId()
  {
    return $this->merchantOrderId;
  }

  public function setMerchantOrderId($merchantOrderId)
  {
    $this->merchantOrderId = $merchantOrderId;
  }

  /**
   * @param Google_Service_ShoppingContent_Price
   */
  public function setNetAmount(Google_Service_ShoppingContent_Price $netAmount)
  {
    $this->netAmount = $netAmount;
  }
  /**
   * @return Google_Service_ShoppingContent_Price
   */
  public function getNetAmount()
  {
    return $this->netAmount;
  }
  /**
   * @param Google_Service_ShoppingContent_OrderPaymentMethod
   */
  public function setPaymentMethod(Google_Service_ShoppingContent_OrderPaymentMethod $paymentMethod)
  {
    $this->paymentMethod = $paymentMethod;
  }
  /**
   * @return Google_Service_ShoppingContent_OrderPaymentMethod
   */
  public function getPaymentMethod()
  {
    return $this->paymentMethod;
  }

  public function getPaymentStatus()
  {
    return $this->paymentStatus;
  }

  public function setPaymentStatus($paymentStatus)
  {
    $this->paymentStatus = $paymentStatus;
  }

  public function getPlacedDate()
  {
    return $this->placedDate;
  }

  public function setPlacedDate($placedDate)
  {
    $this->placedDate = $placedDate;
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
   * @param Google_Service_ShoppingContent_OrderRefund
   */
  public function setRefunds($refunds)
  {
    $this->refunds = $refunds;
  }
  /**
   * @return Google_Service_ShoppingContent_OrderRefund
   */
  public function getRefunds()
  {
    return $this->refunds;
  }
  /**
   * @param Google_Service_ShoppingContent_OrderShipment
   */
  public function setShipments($shipments)
  {
    $this->shipments = $shipments;
  }
  /**
   * @return Google_Service_ShoppingContent_OrderShipment
   */
  public function getShipments()
  {
    return $this->shipments;
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

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }
}
