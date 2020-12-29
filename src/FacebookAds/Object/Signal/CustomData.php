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

namespace FacebookAds\Object\Signal;

use FacebookAds\Object\BusinessDataAPI\CustomData as BusinessDataCustomData;
use FacebookAds\Object\ServerSide\CustomData as ServerSideCustomData;

class CustomData {

  /**
   * Associative array for storing property values for Business Data API
   * @var BusinessDataCustomData
   */
  protected $businessDataCustomData= null;

  /**
   * Associative array for storing property values for Conversion API
   * @var ServerSideCustomData
   */
  protected $serverSideCustomData = null;

  /**
   * Constructor
   * @param mixed[] $data Associated array of property value initializing the model
   */
  public function __construct(array $data = null) {
    $business_contents = array();
    $server_contents = array();
    if(isset($data['contents'])){
        foreach ($data['contents'] as $content) {
            array_push($business_contents, $content->getBusinessDataContent());
            array_push($server_contents, $content->getServerSideContent());
        }
    }

    $business_data = $data;
    $server_data = $data;
    $business_data['contents'] =  $business_contents;
    $server_data['contents'] = $server_contents;
    $business_data['billing_contact'] = isset($data['billing_contact']) ? $data['billing_contact']->getBusinessDataUserData() : null;
    $business_data['shipping_contact'] = isset($data['shipping_contact']) ? $data['shipping_contact']->getBusinessDataUserData() : null;
    $this->businessDataCustomData = new BusinessDataCustomData($business_data);
    $this->serverSideCustomData = new ServerSideCustomData($server_data);
  }

  /**
   * Sets value
   * @param float $value A numeric value associated with this event.
   *         This could be a monetary value or a value in some other metric.
   * @return $this
   */
  public function setValue($value) {
    $this->businessDataCustomData->setValue($value);
    $this->serverSideCustomData->setValue($value);

    return $this;
  }

  /**
   * Sets currency
   * @param string $currency The currency for the value specified, if applicable.
   *          Currency must be a valid ISO 4217 three digit currency code.
   * @return $this
   */
  public function setCurrency($currency) {
    $this->businessDataCustomData->setCurrency($currency);
    $this->serverSideCustomData->setCurrency($currency);

    return $this;
  }

  /**
   * Sets contents
   * @param Content[] $contents A list of CustomData objects that contain the product IDs associated with
   *          the event plus information about the products.
   * @return $this
   */
  public function setContents($contents) {
    $business_contents = array();
    $server_contents = array();
    foreach ($contents as $content) {
        array_push($business_contents, $content->getBusinessDataContent());
        array_push($server_contents, $content->getServerSideContent());
    }
    $this->businessDataCustomData->setContents($business_contents);
    $this->serverSideCustomData->setContents($server_contents);
    return $this;
  }

  /**
   * Sets order_id
   * @param string $order_id The order ID for this transaction as a String.
   * @return $this
   */
  public function setOrderId($order_id) {
    $this->businessDataCustomData->setOrderId($order_id);
    $this->serverSideCustomData->setOrderId($order_id);

    return $this;
  }

  /**
   * Sets status
   * @param string status of the order
   *
   * @return $this
   */
  public function setStatus($status) {
    $this->businessDataCustomData->setStatus($status);
    $this->serverSideCustomData->setStatus($status);

    return $this;
  }

  /**
   * Sets billing contact
   * @param UserData billing_contact of the order
   *
   * @return $this
   */
  public function setBillingContact($billing_contact) {
    $this->businessDataCustomData->setBillingContact($billing_contact->getBusinessDataUserData());

    return $this;
  }

  /**
   * Sets shipping contact
   * @param UserData shipping_contact of the order
   *
   * @return $this
   */
  public function setShippingContact($shipping_contact) {
    $this->businessDataCustomData->setShippingContact($shipping_contact->getBusinessDataUserData());

    return $this;
  }

  /**
   * Sets external order id
   * @param string external_order_id unique order id
   *
   * @return $this
   */
  public function setExternalOrderId($external_order_id) {
    $this->businessDataCustomData->setExternalOrderId($external_order_id);

    return $this;
  }

  /**
   * Sets original order id
   * @param string original_order_id for Refund event.
   *
   * @return $this
   */
  public function setOriginalOrderId($original_order_id) {
    $this->businessDataCustomData->setOriginalOrderId($original_order_id);

    return $this;
  }

  /**
   * Sets message for Refund event
   * @param string message for Refund event
   *
   * @return $this
   */
  public function setMessage($message) {
    $this->businessDataCustomData->setMessage($message);

    return $this;
  }

  /**
   * Sets content_name
   * @param string $content_name The name of the page or product associated with the event. Example: 'lettuce'.
   *
   * @return $this
   */
  public function setContentName($content_name) {
    $this->serverSideCustomData->setContentName($content_name);

    return $this;
  }

  /**
   * Sets content_category
   * @param string $content_category The category of the content associated with the event. Example: 'grocery'
   *
   * @return $this
   */
  public function setContentCategory($content_category) {
    $this->serverSideCustomData->setContentCategory($content_category);

    return $this;
  }

  /**
   * Sets content_ids
   * @param string[] $content_ids The content IDs associated with the event,
   *      such as product SKUs for items in an AddToCart event: ['ABC123', 'XYZ789'].
   *      If content_type is a product, then your content IDs must be an array with a single string value.
   *      Otherwise, this array can contain any number of string values.
   *
   * @return $this
   */
  public function setContentIds($content_ids) {
    $this->serverSideCustomData->setContentIds($content_ids);

    return $this;
  }

  /**
   * Sets content_type
   * @param string $content_type A String equal to either 'product' or 'product_group'.
   *      Set to product if the keys you send content_ids or contents represent products.
   *      Set to product_group if the keys you send in content_ids represent product groups.
   *
   * @return $this
   */
  public function setContentType($content_type) {
    $this->serverSideCustomData->setContentType($content_type);

    return $this;
  }

  /**
   * Sets predicted_ltv
   * @param float $predicted_ltv The predicted lifetime value of a conversion event.
   *
   * @return $this
   */
  public function setPredictedLtv($predicted_ltv) {
    $this->serverSideCustomData->setPredictedLtv($predicted_ltv);

    return $this;
  }

  /**
   * Sets num_items
   * @param string $num_items Use only with InitiateCheckout events.
   *      The number of items that a user tries to buy during checkout.
   *
   * @return $this
   */
  public function setNumItems($num_items) {
    $this->serverSideCustomData->setNumItems($num_items);

    return $this;
  }

  /**
   * Sets a search query made by a user. Use only with Search events.
   * @param string $search_string Use only with Search events.
   *      A search query made by a user.
   *
   * @return $this
   */
  public function setSearchString($search_string) {
    $this->serverSideCustomData->setSearchString($search_string);

    return $this;
  }

  /**
   * Sets Type of delivery for a purchase event.
   * @param string $delivery_category Type of delivery for a purchase event.
   *
   * @return $this
   */
  public function setDeliveryCategory($delivery_category) {
    $this->serverSideCustomData->setDeliveryCategory($delivery_category);

    return $this;
  }

  /**
   * Sets the item_number.
   * @param string $item_number The item number.
   *
   * @return $this
   */
  public function setItemNumber($item_number) {
    $this->serverSideCustomData->setItemNumber($item_number);

    return $this;
  }

  /**
   * Sets custom_properties that are not defined as the standard properties list in custom data.
   * @param array custom_properties dictionary to include custom properties that are not defined in custom data.
   *
   * @return $this
   */
  public function setCustomProperties($custom_properties) {
    $this->serverSideCustomData->setCustomProperties($custom_properties);
    return $this;
  }


  /**
   * Gets a numeric value associated with this event.
   * This could be a monetary value or a value in some other metric.
   *
   * @return array
   */
  public function getValue() {
    return Util::constructResponse($this->serverSideCustomData->getValue(), $this->businessDataCustomData->getValue());
  }

  /**
   * Gets currency for the value specified, if applicable.
   * @return array
   */
  public function getCurrency() {
    return Util::constructResponse($this->serverSideCustomData->getCurrency(), $this->businessDataCustomData->getCurrency());
  }

  /**
   * Gets a list of CustomData objects that contain the product IDs associated with
   * the event plus information about the products.
   * @return array
   */
  public function getCustomDatas() {
    return Util::constructResponse($this->serverSideCustomData->getCustomDatas(), $this->businessDataCustomData->getCustomDatas());
  }

  /**
   * Gets the order ID for this transaction as a String.
   * @return array
   */
  public function getOrderId() {
    return Util::constructResponse($this->serverSideCustomData->getOrderId(), $this->businessDataCustomData->getOrderId());
  }

  /**
   * Gets the status of the registration event
   * @return array
   */
  public function getStatus() {
    return Util::constructResponse($this->serverSideCustomData->getStatus(), $this->businessDataCustomData->getStatus());
  }

  /**
   * Gets billing contact
   *
   * @return array
   */
  public function getBillingContact() {
    return Util::constructResponse(null, $this->businessDataCustomData->getBillingContact());
  }

  /**
   * Gets shipping contact
   *
   * @return array
   */
  public function getShippingContact() {
    return Util::constructResponse(null, $this->businessDataCustomData->getShippingContact());
  }

  /**
   * Gets external order id
   *
   * @return array
   */
  public function getExternalOrderId() {
    return Util::constructResponse(null, $this->businessDataCustomData->getExternalOrderId());
  }

  /**
   * Gets original order id
   *
   * @return array
   */
  public function getOriginalOrderId() {
    return Util::constructResponse(null, $this->businessDataCustomData->getOriginalOrderId());
  }

  /**
   * Gets message
   *
   * @return array
   */
  public function getMessage() {
    return Util::constructResponse(null, $this->businessDataCustomData->getMessage());
  }

  /**
   * Gets the value of a custom property from the custom_properties bag
   * @param $key Custom property name
   * @return array
   */
  public function getCustomProperty($key) {
    return Util::constructResponse($this->serverSideCustomData->getCustomProperty($key), null);
  }

   /**
   * Gets content name of the page or product associated with the event. Example: 'lettuce'.
   * @return array
   */
  public function getContentName() {
    return Util::constructResponse($this->serverSideCustomData->getContentName(), null);
  }

  /**
   * Gets the category of the content associated with the event. Example: 'grocery'
   * @return array
   */
  public function getContentCategory() {
    return Util::constructResponse($this->serverSideCustomData->getContentCategory(), null);
  }

  /**
   * Gets the content IDs associated with the event,
   * such as product SKUs for items in an AddToCart event: ['ABC123', 'XYZ789'].
   * @return array
   */
  public function getContentIds() {
    return Util::constructResponse($this->serverSideCustomData->getContentIds(), null);
  }

  /**
   * Gets content type 'product' or 'product_group'
   * @return array
   */
  public function getContentType() {
    return Util::constructResponse($this->serverSideCustomData->getContentType(), null);
  }

  /**
   * Gets the predicted lifetime value of a conversion event.
   * @return array
   */
  public function getPredictedLtv() {
    return Util::constructResponse($this->serverSideCustomData->getPredictedLtv(), null);
  }

  /**
   * Gets the number of items that a user tries to buy during checkout
   * @return array
   */
  public function getNumItems() {
    return Util::constructResponse($this->serverSideCustomData->getNumItems(), null);
  }

  /**
   * Gets a search query made by a user.
   * @return array
   */
  public function getSearchString() {
    return Util::constructResponse($this->serverSideCustomData->getSearchString(), null);
  }

  /**
   * Gets a delivery_category for a purchase order.
   * @return array
   */
  public function getDeliveryCategory() {
    return Util::constructResponse($this->serverSideCustomData->getDeliveryCategory(), null);
  }

  /**
   * Gets the item number.
   * @return array
   */
  public function getItemNumber() {
    return Util::constructResponse($this->serverSideCustomData->getItemNumber(), null);
  }

  /**
   * Gets Custom Properties dictionary to add properties that are not defined as part of the custom data.
   * @return array
   */
  public function getCustomProperties() {
    return Util::constructResponse($this->serverSideCustomData->getCustomProperties(), null);
  }

  /**
   * Gets custom data for Business Data API
   * @return BusinessDataCustomData
   */
  public function getBusinessDataCustomData() {
    return $this->businessDataCustomData;
  }

  /**
   * Gets custom data for Conversion API
   * @return ServerSideCustomData
   */
  public function getServerSideCustomData() {
    return $this->serverSideCustomData;
  }
}
