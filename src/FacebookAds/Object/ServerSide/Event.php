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
 * Server-Side Event
 *
 * @category    Class
 * @package     FacebookAds\Object\ServerSide
 */
class Event implements ArrayAccess {
  /**
   * Array of property to type mappings. Used for (de)serialization
   * @var string[]
   */
  protected static $param_types = array(
    'event_name' => 'string',
    'event_time' => 'int',
    'event_source_url' => 'string',
    'opt_out' => 'bool',
    'event_id' => 'string',
    'user_data' => 'FacebookAds\Object\ServerSide\UserData',
    'custom_data' => 'FacebookAds\Object\ServerSide\CustomData',
    'data_processing_options' => 'string[]',
    'data_processing_options_country' => 'int',
    'data_processing_options_state' => 'int',
    'action_source' => 'string',
  );
  /**
   * Array of attributes where the key is the local name, and the value is the original name
   * @var string[]
   */
  protected static $attributeMap = array(
    'event_name' => 'event_name',
    'event_time' => 'event_time',
    'event_source_url' => 'event_source_url',
    'opt_out' => 'opt_out',
    'event_id' => 'event_id',
    'user_data' => 'user_data',
    'custom_data' => 'custom_data',
    'data_processing_options' => 'data_processing_options',
    'data_processing_options_country' => 'data_processing_options_country',
    'data_processing_options_state' => 'data_processing_options_state',
    'action_source' => 'action_source',
  );

  /**
   * Array of attributes to setter functions (for deserialization of responses)
   * @var string[]
   */
  protected static $setters = array(
    'event_name' => 'setEventName',
    'event_time' => 'setEventTime',
    'event_source_url' => 'setEventSourceUrl',
    'opt_out' => 'setOptOut',
    'event_id' => 'setEventId',
    'user_data' => 'setUserData',
    'custom_data' => 'setCustomData',
    'data_processing_options' => 'setDataProcessingOptions',
    'data_processing_options_country' => 'setDataProcessingOptionsCountry',
    'data_processing_options_state' => 'setDataProcessingOptionsState',
    'action_source' => 'setActionSource',
  );
  /**
   * Array of attributes to getter functions (for serialization of requests)
   * @var string[]
   */
  protected static $getters = array(
    'event_name' => 'getEventName',
    'event_time' => 'getEventTime',
    'event_source_url' => 'getEventSourceUrl',
    'opt_out' => 'getOptOut',
    'event_id' => 'getEventId',
    'user_data' => 'getUserData',
    'custom_data' => 'getCustomData',
    'data_processing_options' => 'getDataProcessingOptions',
    'data_processing_options_country' => 'getDataProcessingOptionsCountry',
    'data_processing_options_state' => 'getDataProcessingOptionsState',
    'action_source' => 'getActionSource',
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
    $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
    $this->container['event_time'] = isset($data['event_time']) ? $data['event_time'] : null;
    $this->container['event_source_url'] = isset($data['event_source_url']) ? $data['event_source_url'] : null;
    $this->container['opt_out'] = isset($data['opt_out']) ? $data['opt_out'] : null;
    $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
    $this->container['user_data'] = isset($data['user_data']) ? $data['user_data'] : null;
    $this->container['custom_data'] = isset($data['custom_data']) ? $data['custom_data'] : null;
    $this->container['data_processing_options'] = isset($data['data_processing_options']) ? $data['data_processing_options'] : null;
    $this->container['data_processing_options_country'] = isset($data['data_processing_options_country']) ? $data['data_processing_options_country'] : null;
    $this->container['data_processing_options_state'] = isset($data['data_processing_options_state']) ? $data['data_processing_options_state'] : null;
    $this->container['action_source'] = isset($data['action_source']) ? $data['action_source'] : null;
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
    if ($this->container['event_name'] === null) {
      $invalid_properties[] = "'event_name' can't be null";
    }
    if ($this->container['event_time'] === null) {
      $invalid_properties[] = "'event_time' can't be null";
    }
    if ($this->container['user_data'] === null) {
      $invalid_properties[] = "'user_data' can't be null";
    }
    return $invalid_properties;
  }

  /**
   * validate all the properties in the model
   * return true if all passed
   *
   * @return bool True if all properteis are valid
   */
  public function valid() {
    if ($this->container['event_name'] === null) {
      return false;
    }
    if ($this->container['event_time'] === null) {
      return false;
    }
    if ($this->container['user_data'] === null) {
      return false;
    }
    return true;
  }

  /**
   * Sets a Facebook pixel Standard Event or Custom Event name
   * @param string $event_name A Facebook pixel Standard Event or Custom Event name.
   * @return $this
   */
  public function setEventName($event_name) {
    $this->container['event_name'] = $event_name;

    return $this;
  }

  /**
   * Sets a Unix timestamp in seconds indicating when the actual event occurred
   * @param int $event_time A Unix timestamp in seconds indicating when the actual event occurred.
   * @return $this
   */
  public function setEventTime($event_time) {
    $this->container['event_time'] = $event_time;

    return $this;
  }

  /**
   * Sets the browser URL where the event happened
   * @param string $event_source_url The browser URL where the event happened.
   * @return $this
   */
  public function setEventSourceUrl($event_source_url) {
    $this->container['event_source_url'] = $event_source_url;

    return $this;
  }

  /**
   * Sets a flag that indicates Facebook should or should not use this event for ads delivery optimization
   * @param bool $opt_out A flag that indicates Facebook should or should not
   *      use this event for ads delivery optimization.
   *      If set to true, Facebook only use the event for attribution.
   * @return $this
   */
  public function setOptOut($opt_out) {
    $this->container['opt_out'] = $opt_out;

    return $this;
  }

  /**
   * Sets an ID used by Facebook to deduplicate the same event sent from both server and browser.
   * @param string $event_id This ID can be any unique string chosen by the advertiser.
   * event_id is used to deduplicate events sent by both Facebook Pixel and Server-Side API.
   * event_name is also used in the deduplication process.
   * For deduplication, the eventID from Facebook pixel must match the
   * event_id in the corresponding Server-Side API event.
   * @return $this
   */
  public function setEventId($event_id) {
    $this->container['event_id'] = $event_id;

    return $this;
  }

  /**
   * Sets UserData object that contains user data.
   * @param FacebookAds\Object\ServerSide\UserData $user_data
   * @return $this
   */
  public function setUserData($user_data) {
    $this->container['user_data'] = $user_data;

    return $this;
  }

  /**
   * Sets CustomData object that includes additional business data about the event.
   * @param FacebookAds\Object\ServerSide\CustomData $custom_data
   * @return $this
   */
  public function setCustomData($custom_data) {
    $this->container['custom_data'] = $custom_data;

    return $this;
  }

  /**
   * Sets the processing options you would like to enable for a specific event.
   * For more details see: https://developers.facebook.com/docs/marketing-apis/data-processing-options
   * @param string[], e.g. [] or ['LDU']
   * @return $this
   */
  public function setDataProcessingOptions($data_processing_options) {
    $this->container['data_processing_options'] = $data_processing_options;

    return $this;
  }

  /**
   * Sets a country that you want to associate to this data processing option. If you set a country, you must also set a state.
   * For more details see: https://developers.facebook.com/docs/marketing-apis/data-processing-options
   * @param int
   * @return $this
   */
  public function setDataProcessingOptionsCountry($data_processing_options_country) {
    $this->container['data_processing_options_country'] = $data_processing_options_country;

    return $this;
  }

  /**
   * Sets a state that you want to associate with this data processing option.
   * For more details see: https://developers.facebook.com/docs/marketing-apis/data-processing-options
   * @param int
   * @return $this
   *
   */
  public function setDataProcessingOptionsState($data_processing_options_state) {
    $this->container['data_processing_options_state'] = $data_processing_options_state;

    return $this;
  }

  /**
   * Gets action_source, this is where the Conversion occurred.
   * @return string
   */
  public function getActionSource() {
    return $this->container['action_source'];
  }

  /**
   * Sets action_source, this is where the Conversion occurred.
   * @return $this
   */
  public function setActionSource($action_source) {
    $this->container['action_source'] = $action_source;
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
   * Normalize
   * @return array
   */
  public function normalize() {
    $normalized_payload = array();

    $normalized_payload['event_name'] = $this->getEventName();
    $normalized_payload['event_time'] = $this->getEventTime();
    $normalized_payload['event_source_url'] = $this->getEventSourceUrl();
    $normalized_payload['opt_out'] = $this->getOptOut();
    $normalized_payload['event_id'] = $this->getEventId();
    $normalized_payload['user_data'] = isset($this->container['user_data']) ? $this->getUserData()->normalize() : null;
    $normalized_payload['custom_data'] = isset($this->container['custom_data']) ? $this->getCustomData()
      ->normalize() : null;

    $normalized_payload['data_processing_options'] = $this->getDataProcessingOptions();
    $normalized_payload['data_processing_options_country'] = $this->getDataProcessingOptionsCountry();
    $normalized_payload['data_processing_options_state'] = $this->getDataProcessingOptionsState();
    $normalized_payload['action_source'] = Normalizer::normalize(
      'action_source',
      $this->container['action_source']
    );
    $normalized_payload = array_filter($normalized_payload, function($val) { if(is_array($val)) { return true; } else { return strlen($val); }});
    // Add the opt_out value back in if it was filtered out
    if ($this->getOptOut() === false) {
      $normalized_payload['opt_out'] = $this->getOptOut();
    }

    return $normalized_payload;
  }

  /**
   * Gets Facebook pixel Standard Event or Custom Event name.
   * @return string
   */
  public function getEventName() {
    return $this->container['event_name'];
  }

  /**
   * Gets Unix timestamp in seconds indicating when the actual event occurred.
   * @return int
   */
  public function getEventTime() {
    return $this->container['event_time'];
  }

  /**
   * Gets browser URL where the event happened.
   * @return string
   */
  public function getEventSourceUrl() {
    return $this->container['event_source_url'];
  }

  /**
   * Gets flag that indicates Facebook should or should not use this event for ads delivery optimization.
   * If set to true, we only use the event for attribution.
   * @return bool
   */
  public function getOptOut() {
    return $this->container['opt_out'];
  }

  /**
   * Gets Event ID can be any string chosen by the advertiser. It is used by Facebook to deduplicate
   * the same event sent from both server and browser.
   * @return string
   */
  public function getEventId() {
    return $this->container['event_id'];
  }

  /**
   * Gets UserData object that contains user data
   * @return FacebookAds\Object\ServerSide\UserData
   */
  public function getUserData() {
    return $this->container['user_data'];
  }

  /**
   * Gets customData object that includes additional business data about the event.
   * @return FacebookAds\Object\ServerSide\CustomData
   */
  public function getCustomData() {
    return $this->container['custom_data'];
  }

  /**
   * Gets DataProcessionOptions value of Processing options you would like to enable for a specific event.
   * @return string[]
   */
  public function getDataProcessingOptions() {
    return $this->container['data_processing_options'];
  }

  /**
   * Gets DataProcessionOptionsState value that represents the state that you want to associate with this data processing option.
   * @return int
   */
  public function getDataProcessingOptionsState() {
    return $this->container['data_processing_options_state'];
  }

  /**
   * Gets DataProcessionOptionsCountry value that represents the country that you want to associate to this data processing option.
   * @return int
   */
  public function getDataProcessingOptionsCountry() {
    return $this->container['data_processing_options_country'];
  }

  /**
   * Gets the string representation of the object
   * @return string
   */
  public function __toString() {
    if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
      return json_encode($this, JSON_PRETTY_PRINT);
    }

    return json_encode($this);
  }
}
