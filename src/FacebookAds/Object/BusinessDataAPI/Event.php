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

class Event {

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
    $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
    $this->container['user_data'] = isset($data['user_data']) ? $data['user_data'] : null;
    $this->container['custom_data'] = isset($data['custom_data']) ? $data['custom_data'] : null;
    $this->container['data_processing_options'] = isset($data['data_processing_options']) ? $data['data_processing_options'] : null;
    $this->container['data_processing_options_country'] = isset($data['data_processing_options_country']) ? $data['data_processing_options_country'] : null;
    $this->container['data_processing_options_state'] = isset($data['data_processing_options_state']) ? $data['data_processing_options_state'] : null;
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
   * @param string $event_id This ID can be any unique string chosen by the advertiser.
   * @return $this
   */
  public function setEventId($event_id) {
    $this->container['event_id'] = $event_id;

    return $this;
  }

  /**
   * Sets UserData object that contains user data.
   * @param FacebookAds\Object\BusinessDataAPI\UserData $user_data
   * @return $this
   */
  public function setUserData($user_data) {
    $this->container['user_data'] = $user_data;

    return $this;
  }

  /**
   * Sets CustomData object that includes additional business data about the event.
   * @param FacebookAds\Object\BusinessDataAPI\CustomData $custom_data
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
   * convert to Json
   * @return array
   */
  public function toJson() {
    $request = array();

    $request['event_name'] = $this->getEventName();
    $request['event_time'] = $this->getEventTime();
    $request['event_id'] = $this->getEventId();
    $request['user_data'] = isset($this->container['user_data']) ? $this->getUserData()->toJson() : null;
    $request['custom_data'] = isset($this->container['custom_data']) ? $this->getCustomData()->toJson() : null;

    $request['data_processing_options'] = $this->getDataProcessingOptions();
    $request['data_processing_options_country'] = $this->getDataProcessingOptionsCountry();
    $request['data_processing_options_state'] = $this->getDataProcessingOptionsState();
    $request = array_filter(
      $request, function($val) {
        if(is_array($val)) {
          return true;
        } else {
          return strlen((string) $val);
        }
      });

    return $request;
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
   * Gets Event ID can be any string chosen by the advertiser.
   * @return string
   */
  public function getEventId() {
    return $this->container['event_id'];
  }

  /**
   * Gets UserData object that contains user data
   * @return FacebookAds\Object\BusinessDataAPI\UserData
   */
  public function getUserData() {
    return $this->container['user_data'];
  }

  /**
   * Gets customData object that includes additional business data about the event.
   * @return FacebookAds\Object\BusinessDataAPI\CustomData
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
