<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAds\Object\BusinessDataAPI;

class CustomData {

  /**
   * Associative array for storing property values
   * @var mixed[]
   */
  protected $container = array();

  /**
   * Constructor
   * @param mixed[] $data Associated array of property value initializing the model
   */
  public function __construct(array $data = null) {
    $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
    $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
    $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
    $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    $this->container['billing_contact'] = isset($data['billing_contact']) ? $data['billing_contact'] : null;
    $this->container['shipping_contact'] = isset($data['shipping_contact']) ? $data['shipping_contact'] : null;
    $this->container['external_order_id'] = isset($data['external_order_id']) ? $data['external_order_id'] : null;
    $this->container['original_order_id'] = isset($data['original_order_id']) ? $data['original_order_id'] : null;
    $this->container['message'] = isset($data['message']) ? $data['message'] : null;
  }

  /**
   * Sets value
   * @param float $value A numeric value associated with this event.
   *         This could be a monetary value or a value in some other metric.
   * @return $this
   */
  public function setValue($value) {
    $this->container['value'] = $value;

    return $this;
  }

  /**
   * Sets currency
   * @param string $currency The currency for the value specified, if applicable.
   *          Currency must be a valid ISO 4217 three digit currency code.
   * @return $this
   */
  public function setCurrency($currency) {
    $this->container['currency'] = $currency;

    return $this;
  }

  /**
   * Sets contents
   * @param Content[] $contents A list of Content objects that contain the product IDs associated with
   *          the event plus information about the products.
   * @return $this
   */
  public function setContents($contents) {
    $this->container['contents'] = $contents;

    return $this;
  }

  /**
   * Sets order_id
   * @param string $order_id The order ID for this transaction as a String.
   * @return $this
   */
  public function setOrderId($order_id) {
    $this->container['order_id'] = $order_id;

    return $this;
  }

  /**
   * Sets status
   * @param status of the order
   *
   * @return $this
   */
  public function setStatus($status) {
    $this->container['status'] = $status;

    return $this;
  }

  /**
   * Sets billing contact
   * @param billing contact of the order
   *
   * @return $this
   */
  public function setBillingContact($billing_contact) {
    $this->container['billing_contact'] = $billing_contact;

    return $this;
  }

  /**
   * Sets shipping contact
   * @param shipping contact of the order
   *
   * @return $this
   */
  public function setShippingContact($shipping_contact) {
    $this->container['shipping_contact'] = $shipping_contact;

    return $this;
  }

  /**
   * Sets external order id
   * @param unique order id
   *
   * @return $this
   */
  public function setExternalOrderId($external_order_id) {
    $this->container['external_order_id'] = $external_order_id;

    return $this;
  }

  /**
   * Sets original order id
   * @param original order id for Refund event.
   *
   * @return $this
   */
  public function setOriginalOrderId($original_order_id) {
    $this->container['original_order_id'] = $original_order_id;

    return $this;
  }

  /**
   * Sets message for Refund event
   * @param message for Refund event
   *
   * @return $this
   */
  public function setMessage($message) {
    $this->container['message'] = $message;

    return $this;
  }

  public function toJson() {
    $request = array();

    $request['value'] = $this->getValue();
    $request['currency'] = $this->getCurrency();
    $request['order_id'] = $this->getOrderId();
    $request['status'] = $this->getStatus();
    $request['billing_contact'] = $this->getBillingContact()->toJson();
    $request['shipping_contact'] = $this->getShippingContact()->toJson();
    $request['original_order_id'] = $this->getOriginalOrderId();
    $request['external_order_id'] = $this->getExternalOrderId();
    $request['message'] = $this->getMessage();

    if (isset($this->container['contents'])) {
      $contents = [];
      foreach ($this->getContents() as $content) {
        array_push($contents, $content->toJson());
      }
      $request['contents'] = $contents;
    }

    $request = array_filter($request, function($val) {
      if (is_array($val)) {
        return true;
      } else {
        return strlen($val);
      }
    });

    return $request;
  }

  /**
   * Gets a numeric value associated with this event.
   * This could be a monetary value or a value in some other metric.
   * @return float
   */
  public function getValue() {
    return $this->container['value'];
  }

  /**
   * Gets currency for the value specified, if applicable.
   * @return string
   */
  public function getCurrency() {
    return $this->container['currency'];
  }

  /**
   * Gets a list of Content objects that contain the product IDs associated with
   * the event plus information about the products.
   * @return Content[]
   */
  public function getContents() {
    return $this->container['contents'];
  }

  /**
   * Gets the order ID for this transaction as a String.
   * @return string
   */
  public function getOrderId() {
    return $this->container['order_id'];
  }

  /**
   * Gets the status of the registration event
   * @return string
   */
  public function getStatus() {
    return $this->container['status'];
  }

  /**
   * Gets billing contact
   *
   * @return UserData
   */
  public function getBillingContact() {
    return $this->container['billing_contact'];
  }

  /**
   * Gets shipping contact
   *
   * @return UserData
   */
  public function getShippingContact() {
    return $this->container['shipping_contact'];
  }

  /**
   * Gets external order id
   *
   * @return string
   */
  public function getExternalOrderId() {
    return $this->container['external_order_id'];
  }

  /**
   * Gets original order id
   *
   * @return string
   */
  public function getOriginalOrderId() {
    return $this->container['original_order_id'];
  }

  /**
   * Gets message
   *
   * @return string
   */
  public function getMessage() {
    return $this->container['message'];
  }

  /**
   * Gets the string presentation of the object
   * @return string
   */
  public function __toString() {
    if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
      return json_encode($this, JSON_PRETTY_PRINT);
    }

    return json_encode($this);
  }
}
