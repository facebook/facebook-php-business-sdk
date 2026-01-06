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

/**
 * Server-Side OriginalEventData
 *
 * @category    Class
 * @package     FacebookAds\Object\ServerSide
 */
class OriginalEventData implements ArrayAccess {

  private $event_name;
  private $event_time;
  private $order_id;
  private $event_id;

  protected static $param_types = array(
    'event_name' => 'string',
    'event_time' => 'int',
    'order_id' => 'string',
    'event_id' => 'string',
  );

  protected static $attributeMap = array(
    'event_name' => 'event_name',
    'event_time' => 'event_time',
    'order_id' => 'order_id',
    'event_id' => 'event_id',
  );

  protected static $setters = array(
    'event_name' => 'setEventName',
    'event_time' => 'setEventTime',
    'order_id' => 'setOrderID',
    'event_id' => 'setEventID',
  );

  protected static $getters = array(
    'event_name' => 'getEventName',
    'event_time' => 'getEventTime',
    'order_id' => 'getOrderID',
    'event_id' => 'getEventID',
  );

  protected $container = array();

  public function __construct(?array $data = null) {
    $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
    $this->container['event_time'] = isset($data['event_time']) ? $data['event_time'] : null;
    $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
    $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
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

  public function listInvalidProperties() {
    $invalid_properties = array();
    return $invalid_properties;
  }

  public function valid() {
    return true;
  }

  /**
   * Sets a Meta pixel Standard Event or Custom Event name
   * @param string $event_name A Meta pixel Standard Event or Custom Event name.
   * @return $this
   */
  public function setEventName($event_name) {
    $this->container['event_name'] = $event_name;

    return $this;
  }

  /**
   * Sets a Unix timestamp in seconds indicating when the original event occurred
   * @param int $event_time A Unix timestamp in seconds indicating when the original event occurred.
   * @return $this
   */
  public function setEventTime($event_time) {
    $this->container['event_time'] = $event_time;

    return $this;
  }

  /**
   * Sets the order ID
   * @param string $order_id The order ID for this transaction as a string.
   * @return $this
   */
  public function setOrderID($order_id) {
    $this->container['order_id'] = $order_id;

    return $this;
  }

  /**
   * Sets the event ID
   * @param string $event_id A unique string chosen by the advertiser.
   * @return $this
   */
  public function setEventID($event_id) {
    $this->container['event_id'] = $event_id;

    return $this;
  }

  /**
   * Gets Meta pixel Standard Event or Custom Event name.
   * @return string
   */
  public function getEventName() {
    return $this->container['event_name'];
  }

  /**
   * Gets Unix timestamp in seconds indicating when the original event occurred.
   * @return int
   */
  public function getEventTime() {
    return $this->container['event_time'];
  }

  /**
   * Gets order ID of the original event.
   * @return string
   */
  public function getOrderID() {
    return $this->container['order_id'];
  }

  /**
   * Gets event ID of the original event.
   * @return string
   */
  public function getEventID() {
    return $this->container['event_id'];
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

  public function normalize() {
    $normalized_payload = array();

    $normalized_payload['event_name'] = $this->getEventName();
    $normalized_payload['event_time'] = $this->getEventTime();
    $normalized_payload['order_id'] = $this->getOrderID();
    $normalized_payload['event_id'] = $this->getEventID();
    return $normalized_payload;
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
