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
 * Server-Side pixel event response.
 *
 * @category    Class
 */
class EventResponse implements ArrayAccess {

  /**
   * Array of property to type mappings. Used for (de)serialization
   * @var string[]
   */
  protected static $param_types = array(
    'events_received' => 'int',
    'messages' => 'string[]',
    'fbtrace_id' => 'string'
  );
  /**
   * Array of attributes where the key is the local name, and the value is the original name
   * @var string[]
   */
  protected static $attributeMap = array(
    'events_received' => 'events_received',
    'messages' => 'messages',
    'fbtrace_id' => 'fbtrace_id'
  );
  /**
   * Array of attributes to setter functions (for deserialization of responses)
   * @var string[]
   */
  protected static $setters = array(
    'events_received' => 'setEventsReceived',
    'messages' => 'setMessages',
    'fbtrace_id' => 'setFbTraceId'
  );
  /**
   * Array of attributes to getter functions (for serialization of requests)
   * @var string[]
   */
  protected static $getters = array(
    'events_received' => 'getEventsReceived',
    'messages' => 'getMessages',
    'fbtrace_id' => 'getFbTraceId'
  );
  /**
   * Associative array for storing property values
   * @var mixed[]
   */
  protected $container = array();

  /**
   * Constructor
   * @param mixed[] $data Associated array of property value initalizing the model
   */
  public function __construct(array $data = null) {
    $this->container['events_received'] = isset($data['events_received']) ? $data['events_received'] : null;
    $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
    $this->container['fbtrace_id'] = isset($data['fbtrace_id']) ? $data['fbtrace_id'] : null;
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
   * Gets number of events received.
   * @return int
   */
  public function getEventsReceived() {
    return $this->container['events_received'];
  }

  /**
   * Sets number of events received.
   * @param int $events_received number of events received.
   * @return $this
   */
  public function setEventsReceived($events_received) {
    $this->container['events_received'] = $events_received;

    return $this;
  }

  /**
   * Gets response messages.
   * @return string[]
   */
  public function getMessages() {
    return $this->container['messages'];
  }

  /**
   * Sets response messages.
   * @param string[] $messages response messages.
   * @return $this
   */
  public function setMessages($messages) {
    $this->container['messages'] = $messages;

    return $this;
  }

  /**
   * Gets Facebook trace id
   * @return string
   */
  public function getFbTraceId() {
    return $this->container['fbtrace_id'];
  }

  /**
   * Sets Facebook trace id
   * @param $fbtrace_id Facebook trace id
   * @return $this
   */
  public function setFbTraceId($fbtrace_id) {
    $this->container['fbtrace_id'] = $fbtrace_id;
    return $this;
  }

  /**
   * Returns true if offset exists. False otherwise.
   * @param integer $offset Offset
   * @return boolean
   */
  public function offsetExists($offset) {
    return isset($this->container[$offset]);
  }

  /**
   * Gets offset.
   * @param integer $offset Offset
   * @return mixed
   */
  public function offsetGet($offset) {
    return isset($this->container[$offset]) ? $this->container[$offset] : null;
  }

  /**
   * Sets value based on offset.
   * @param integer $offset Offset
   * @param mixed $value Value to be set
   * @return void
   */
  public function offsetSet($offset, $value) {
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
  public function offsetUnset($offset) {
    unset($this->container[$offset]);
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


