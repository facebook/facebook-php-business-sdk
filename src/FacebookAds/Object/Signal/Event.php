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

use FacebookAds\Object\BusinessDataAPI\Event as BusinessDataEvent;
use FacebookAds\Object\ServerSide\Event as ServerSideEvent;


class Event {
   /**
   * Associative array for storing property values for Business Data API
   * @var BusinessDataEvent
   */
  protected $businessDataEvent= null;

  /**
   * Associative array for storing property values for Conversion API
   * @var ServerSideEvent
   */
  protected $serverSideEvent = null;

  /**
   * Constructor
   * @param mixed[] $data Associated array of property value initalizing the model
   */
  public function __construct(array $data = null) {
    $business_data = $data;
    $server_data = $data;
    $business_data['user_data'] = isset($data['user_data']) ? $data['user_data']->getBusinessDataUserData() : null;
    $server_data['user_data'] = isset($data['user_data']) ? $data['user_data']->getServerSideUserData() : null;
    $business_data['custom_data'] = isset($data['custom_data']) ? $data['custom_data']->getBusinessDataCustomData() : null;
    $server_data['custom_data'] = isset($data['custom_data']) ? $data['custom_data']->getServerSideCustomData() : null;

    $this->businessDataEvent = new BusinessDataEvent($business_data);
    $this->serverSideEvent = new ServerSideEvent($server_data);
  }

  /**
   * Sets a Facebook pixel Standard Event or Custom Event name
   * @param string $event_name A Facebook pixel Standard Event or Custom Event name.
   * @return $this
   */
  public function setEventName($event_name) {
    $this->businessDataEvent->setEventName($event_name);
    $this->serverSideEvent->setEventName($event_name);

    return $this;
  }

  /**
   * Sets a Unix timestamp in seconds indicating when the actual event occurred
   * @param int $event_time A Unix timestamp in seconds indicating when the actual event occurred.
   * @return $this
   */
  public function setEventTime($event_time) {
    $this->businessDataEvent->setEventTime($event_time);
    $this->serverSideEvent->setEventTime($event_time);

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
    $this->businessDataEvent->setEventId($event_id);
    $this->serverSideEvent->setEventId($event_id);

    return $this;
  }

  /**
   * Sets UserData object that contains user data.
   * @param FacebookAds\Object\Signal\UserData $user_data
   * @return $this
   */
  public function setUserData($user_data) {
    $this->businessDataEvent->setUserData($user_data->getBusinessDataUserData());
    $this->serverSideEvent->setUserData($user_data->getServerSideUserData());

    return $this;
  }

  /**
   * Sets CustomData object that includes additional business data about the event.
   * @param FacebookAds\Object\Signal\CustomData $custom_data
   * @return $this
   */
  public function setCustomData($custom_data) {
    $this->businessDataEvent->setCustomData($custom_data->getBusinessDataCustomData());
    $this->serverSideEvent->setCustomData($custom_data->getServerSideCustomData());

    return $this;
  }

 /**
   * Sets the browser URL where the event happened
   * @param string $event_source_url The browser URL where the event happened.
   * @return $this
   */
  public function setEventSourceUrl($event_source_url) {
    $this->serverSideEvent->setEventSourceUrl($event_source_url);

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
    $this->serverSideEvent->setOptOut($opt_out);

    return $this;
  }

  /**
   * Sets the processing options you would like to enable for a specific event.
   * For more details see: https://developers.facebook.com/docs/marketing-apis/data-processing-options
   * @param string[], e.g. [] or ['LDU']
   * @return $this
   */
  public function setDataProcessingOptions($data_processing_options) {
    $this->businessDataEvent->setDataProcessingOptions($data_processing_options);
    $this->serverSideEvent->setDataProcessingOptions($data_processing_options);

    return $this;
  }

  /**
   * Sets a country that you want to associate to this data processing option. If you set a country, you must also set a state.
   * For more details see: https://developers.facebook.com/docs/marketing-apis/data-processing-options
   * @param int
   * @return $this
   */
  public function setDataProcessingOptionsCountry($data_processing_options_country) {
    $this->businessDataEvent->setDataProcessingOptionsCountry($data_processing_options_country);
    $this->serverSideEvent->setDataProcessingOptionsCountry($data_processing_options_country);

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
    $this->businessDataEvent->setDataProcessingOptionsState($data_processing_options_state);
    $this->serverSideEvent->setDataProcessingOptionsState($data_processing_options_state);

    return $this;
  }

  /**
   * Gets Facebook pixel Standard Event or Custom Event name.
   * @return array
   */
  public function getEventName() {
    return Util::constructResponse($this->serverSideEvent->getEventName(), $this->businessDataEvent->getEventName());
  }

  /**
   * Gets Unix timestamp in seconds indicating when the actual event occurred.
   * @return array
   */
  public function getEventTime() {
    return Util::constructResponse($this->serverSideEvent->getEventTime(), $this->businessDataEvent->getEventTime());
  }

  /**
   * Gets Event ID can be any string chosen by the advertiser. It is used by Facebook to deduplicate
   * the same event sent from both server and browser.
   *@return array
   */
  public function getEventId() {
    return Util::constructResponse($this->serverSideEvent->getEventId(), $this->businessDataEvent->getEventId());
  }

  /**
   * Gets UserData object that contains user data
   * @return array
   */
  public function getUserData() {
    return Util::constructResponse($this->serverSideEvent->getUserData(), $this->businessDataEvent->getUserData());
  }

  /**
   * Gets customData object that includes additional business data about the event.
   * @return array
   */
  public function getCustomData() {
    return Util::constructResponse($this->serverSideEvent->getCustomData(), $this->businessDataEvent->getCustomData());
  }

  /**
   * Gets DataProcessionOptions value of Processing options you would like to enable for a specific event.
   *@return array
   */
  public function getDataProcessingOptions() {
    return Util::constructResponse($this->serverSideEvent->getDataProcessingOptions(), $this->businessDataEvent->getDataProcessingOptions());
  }

  /**
   * Gets DataProcessionOptionsState value that represents the state that you want to associate with this data processing option.
   *@return array
   */
  public function getDataProcessingOptionsState() {
    return Util::constructResponse($this->serverSideEvent->getDataProcessingOptionsState(), $this->businessDataEvent->getDataProcessingOptionsState());
  }

  /**
   * Gets DataProcessionOptionsCountry value that represents the country that you want to associate to this data processing option.
   *@return array
   */
  public function getDataProcessingOptionsCountry() {
    return Util::constructResponse($this->serverSideEvent->getDataProcessingOptionsCountry(), $this->businessDataEvent->getDataProcessingOptionsCountry());
  }

 /**
   * Gets event for Business Data API
   * @return BusinessDataEvent
   */
  public function getBusinessDataEvent() {
    return $this->businessDataEvent;
  }

  /**
   * Gets event for Conversion API
   * @return ServerSideEvent
   */
  public function getServerSideEvent() {
    return $this->serverSideEvent;
  }

}
