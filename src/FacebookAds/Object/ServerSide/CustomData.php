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

namespace FacebookAds\Object\ServerSide;

use ArrayAccess;
use InvalidArgumentException;


class CustomData implements ArrayAccess {

  /**
   * Array of property to type mappings. Used for (de)serialization
   * @var string[]
   */
  protected static $param_types = array(
    'value' => 'float',
    'currency' => 'string',
    'content_name' => 'string',
    'content_category' => 'string',
    'content_ids' => 'string[]',
    'contents' => 'object[]',
    'content_type' => 'string',
    'order_id' => 'string',
    'predicted_ltv' => 'float',
    'num_items' => 'string',
    'status' => 'string',
    'search_string' => 'string',
    'item_number' => 'string',
    'delivery_category' => 'string',
    'custom_properties' => 'array'
  );
  /**
   * Array of attributes where the key is the local name, and the value is the original name
   * @var string[]
   */
  protected static $attributeMap = array(
    'value' => 'value',
    'currency' => 'currency',
    'content_name' => 'content_name',
    'content_category' => 'content_category',
    'content_ids' => 'content_ids',
    'contents' => 'contents',
    'content_type' => 'content_type',
    'order_id' => 'order_id',
    'predicted_ltv' => 'predicted_ltv',
    'num_items' => 'num_items',
    'status' => 'status',
    'search_string' => 'search_string',
    'item_number' => 'item_number',
    'delivery_category' => 'delivery_category',
    'custom_properties' => 'custom_properties'
  );
  /**
   * Array of attributes to setter functions (for deserialization of responses)
   * @var string[]
   */
  protected static $setters = array(
    'value' => 'setValue',
    'currency' => 'setCurrency',
    'content_name' => 'setContentName',
    'content_category' => 'setContentCategory',
    'content_ids' => 'setContentIds',
    'contents' => 'setContents',
    'content_type' => 'setContentType',
    'order_id' => 'setOrderId',
    'predicted_ltv' => 'setPredictedLtv',
    'num_items' => 'setNumItems',
    'status' => 'setStatus',
    'search_string' => 'setSearchString',
    'item_number' => 'setItemNumber',
    'delivery_category' => 'setDeliveryCategory',
    'custom_properties' => 'setCustomProperties'
  );
  /**
   * Array of attributes to getter functions (for serialization of requests)
   * @var string[]
   */
  protected static $getters = array(
    'value' => 'getValue',
    'currency' => 'getCurrency',
    'content_name' => 'getContentName',
    'content_category' => 'getContentCategory',
    'content_ids' => 'getContentIds',
    'contents' => 'getContents',
    'content_type' => 'getContentType',
    'order_id' => 'getOrderId',
    'predicted_ltv' => 'getPredictedLtv',
    'num_items' => 'getNumItems',
    'status' => 'getStatus',
    'search_string' => 'getSearchString',
    'item_number' => 'getItemNumber',
    'delivery_category' => 'getDeliveryCategory',
    'custom_properties' => 'getCustomProperties'
  );
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
    $this->container['content_name'] = isset($data['content_name']) ? $data['content_name'] : null;
    $this->container['content_category'] = isset($data['content_category']) ? $data['content_category'] : null;
    $this->container['content_ids'] = isset($data['content_ids']) ? $data['content_ids'] : null;
    $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
    $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
    $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
    $this->container['predicted_ltv'] = isset($data['predicted_ltv']) ? $data['predicted_ltv'] : null;
    $this->container['num_items'] = isset($data['num_items']) ? $data['num_items'] : null;
    $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    $this->container['search_string'] = isset($data['search_string']) ? $data['search_string'] : null;
    $this->container['item_number'] = isset($data['item_number']) ? $data['item_number'] : null;
    $this->container['delivery_category'] = isset($data['delivery_category']) ? $data['delivery_category'] : null;
    $this->container['custom_properties'] = isset($data['custom_properties']) ? $data['custom_properties'] : null;
  }

  public static function paramTypes() {
    return self::$param_types;
  }

  public static function attributeMap() {
    return self::$attributeMap;
  }

  public static function setters() {
    return self::$setters;
  }

  public static function getters() {
    return self::$getters;
  }

  /**
   * show all the invalid properties with reasons.
   *
   * @return array invalid properties with reasons
   */
  public function listInvalidProperties() {
    $invalid_properties = array();
    return $invalid_properties;
  }

  /**
   * validate all the properties in the model
   * return true if all passed
   *
   * @return bool True if all properteis are valid
   */
  public function valid() {
    return true;
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
   * Sets content_name
   * @param string $content_name The name of the page or product associated with the event. Example: 'lettuce'.
   * @return $this
   */
  public function setContentName($content_name) {
    $this->container['content_name'] = $content_name;

    return $this;
  }

  /**
   * Sets content_category
   * @param string $content_category The category of the content associated with the event. Example: 'grocery'
   * @return $this
   */
  public function setContentCategory($content_category) {
    $this->container['content_category'] = $content_category;

    return $this;
  }

  /**
   * Sets content_ids
   * @param string[] $content_ids The content IDs associated with the event,
   *      such as product SKUs for items in an AddToCart event: ['ABC123', 'XYZ789'].
   *      If content_type is a product, then your content IDs must be an array with a single string value.
   *      Otherwise, this array can contain any number of string values.
   * @return $this
   */
  public function setContentIds($content_ids) {
    $this->container['content_ids'] = $content_ids;

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
   * Sets content_type
   * @param string $content_type A String equal to either 'product' or 'product_group'.
   *      Set to product if the keys you send content_ids or contents represent products.
   *      Set to product_group if the keys you send in content_ids represent product groups.
   * @return $this
   */
  public function setContentType($content_type) {
    $this->container['content_type'] = $content_type;

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
   * Sets predicted_ltv
   * @param float $predicted_ltv The predicted lifetime value of a conversion event.
   * @return $this
   */
  public function setPredictedLtv($predicted_ltv) {
    $this->container['predicted_ltv'] = $predicted_ltv;

    return $this;
  }

  /**
   * Sets num_items
   * @param string $num_items Use only with InitiateCheckout events.
   *      The number of items that a user tries to buy during checkout.
   * @return $this
   */
  public function setNumItems($num_items) {
    $this->container['num_items'] = $num_items;

    return $this;
  }

  /**
   * Sets status
   * @param string $status Use only with CompleteRegistration events.
   *      The status of the registration event.
   * @return $this
   */
  public function setStatus($status) {
    $this->container['status'] = $status;

    return $this;
  }

  /**
   * Sets a search query made by a user. Use only with Search events.
   * @param string $search_string Use only with Search events.
   *      A search query made by a user.
   * @return $this
   */
  public function setSearchString($search_string) {
    $this->container['search_string'] = $search_string;

    return $this;
  }

  /**
   * Sets Type of delivery for a purchase event.
   * @param string $delivery_category Type of delivery for a purchase event.
   * @return $this
   */
  public function setDeliveryCategory($delivery_category) {
    $this->container['delivery_category'] = $delivery_category;

    return $this;
  }

  /**
   * Sets the item_number.
   * @param string $item_number The item number.
   * @return $this
   */
  public function setItemNumber($item_number) {
    $this->container['item_number'] = $item_number;

    return $this;
  }

  /**
   * Sets custom_properties that are not defined as the standard properties list in custom data.
   * @param array custom_properties dictionary to include custom properties that are not defined in custom data.
   * @return $this
   */
  public function setCustomProperties($custom_properties) {
    $this->container['custom_properties'] = $custom_properties;
    return $this;
  }

  /**
   * Returns true if offset exists. False otherwise.
   * @param integer $offset Offset
   * @return boolean
   */
  public function offsetExists($offset) : bool {
    return isset($this->container[$offset]);
  }

  /**
   * Gets offset.
   * @param integer $offset Offset
   * @return mixed
   */
  public function offsetGet($offset) : mixed {
    return isset($this->container[$offset]) ? $this->container[$offset] : null;
  }

  /**
   * Sets value based on offset.
   * @param integer $offset Offset
   * @param mixed $value Value to be set
   * @return void
   */
  public function offsetSet($offset, $value) : void {
    if (is_null($offset)) {
      $this->container[] = $value;
    } else {
      $this->container[$offset] = $value;
    }
  }

  /**
   * Unsets offset.
   * @param integer $offset Offset
   * @return void
   */
  public function offsetUnset($offset) : void {
    unset($this->container[$offset]);
  }

  /**
   * Add a custom property to the custom_properties bag
   * @param $key Custom property name
   * @param $value Custom property value
   * @return void
   */
  public function addCustomProperty($key, $value) {
    $this->container['custom_properties'][$key] = $value;
  }

  /**
   * Gets the value of a custom property from the custom_properties bag
   * @param $key Custom property name
   * @return string
   */
  public function getCustomProperty($key) {
    if (array_key_exists(
      $key, $this->container['custom_properties'])) {
      return $this->container['custom_properties'][$key];
    } else {
      throw new \Exception("Key not found in custom properties:'" . $key . "'");
    }
  }

  public function normalize() {
    $normalized_payload = array();

    $normalized_payload['value'] = $this->getValue();
    $normalized_payload['currency'] =
      Normalizer::normalize('currency', $this->getCurrency());
    $normalized_payload['content_name'] = $this->getContentName();
    $normalized_payload['content_category'] = $this->getContentCategory();
    $normalized_payload['content_ids'] = $this->getContentIds();
    $normalized_payload['content_type'] = $this->getContentType();
    $normalized_payload['order_id'] = $this->getOrderId();
    $normalized_payload['predicted_ltv'] = $this->getPredictedLtv();
    $normalized_payload['num_items'] = $this->getNumItems();
    $normalized_payload['status'] = $this->getStatus();
    $normalized_payload['search_string'] = $this->getSearchString();
    $normalized_payload['item_number'] = $this->getItemNumber();
    $normalized_payload['delivery_category'] =
      Normalizer::normalize('delivery_category', $this->getDeliveryCategory());

    if (isset($this->container['contents'])) {
      $contents = [];
      foreach ($this->getContents() as $content) {
        array_push($contents, $content->normalize());
      }
      $normalized_payload['contents'] = $contents;
    }

    if (isset($this->container['custom_properties'])) {
      foreach ($this->getCustomProperties() as $key => $val) {
        if (array_key_exists($key, $normalized_payload)) {
          throw new \Exception('Duplicate key defined as part of the custom_properties. key: "' . $key . '". Please make sure the keys defined in the custom_properties are not already available in standard custom_data property list.');
        }

        $normalized_payload[$key] = $val;
      }
    }

    $normalized_payload = array_filter($normalized_payload, function($val) {
      if (is_array($val)) {
        return true;
      } else {
        return strlen((string) $val);
      }
    });

    return $normalized_payload;

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
   * Gets content name of the page or product associated with the event. Example: 'lettuce'.
   * @return string
   */
  public function getContentName() {
    return $this->container['content_name'];
  }

  /**
   * Gets the category of the content associated with the event. Example: 'grocery'
   * @return string
   */
  public function getContentCategory() {
    return $this->container['content_category'];
  }

  /**
   * Gets the content IDs associated with the event,
   * such as product SKUs for items in an AddToCart event: ['ABC123', 'XYZ789'].
   * @return string[]
   */
  public function getContentIds() {
    return $this->container['content_ids'];
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
   * Gets content type 'product' or 'product_group'
   * @return string
   */
  public function getContentType() {
    return $this->container['content_type'];
  }

  /**
   * Gets the order ID for this transaction as a String.
   * @return string
   */
  public function getOrderId() {
    return $this->container['order_id'];
  }

  /**
   * Gets the predicted lifetime value of a conversion event.
   * @return float
   */
  public function getPredictedLtv() {
    return $this->container['predicted_ltv'];
  }

  /**
   * Gets the number of items that a user tries to buy during checkout
   * @return string
   */
  public function getNumItems() {
    return $this->container['num_items'];
  }

  /**
   * Gets the status of the registration event
   * @return string
   */
  public function getStatus() {
    return $this->container['status'];
  }

  /**
   * Gets a search query made by a user.
   * @return string
   */
  public function getSearchString() {
    return $this->container['search_string'];
  }

  /**
   * Gets a delivery_category for a purchase order.
   * @return string
   */
  public function getDeliveryCategory() {
    return $this->container['delivery_category'];
  }

  /**
   * Gets the item number.
   * @return string
   */
  public function getItemNumber() {
    return $this->container['item_number'];
  }

  /**
   * Gets Custom Properties dictionary to add properties that are not defined as part of the custom data.
   * @return array
   */
  public function getCustomProperties() {
    return $this->container['custom_properties'];
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
