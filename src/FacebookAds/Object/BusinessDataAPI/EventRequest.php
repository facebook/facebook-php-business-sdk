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

use FacebookAds\Api;
use FacebookAds\ApiConfig;
use FacebookAds\Object\Page;

/**
 * Business Data API Event Request
 *
 * @category    Class
 */
class EventRequest {

  /**
   * Associative array for storing property values
   * @var mixed[]
   */
  protected $container = array();

  /**
   * Constructor
   * @param string $page_id page id
   * @param mixed[] $data Associated array of property value initializing the model
   */
  public function __construct(string $page_id, array $data = null) {
    $this->container['page_id'] = $page_id;
    $this->container['events'] = isset($data['events']) ? $data['events'] : null;
  }

  /**
   * Sets an array of Business Data Event objects
   * @param FacebookAds\Object\BusinessDataAPI\Event[] $events An array of Business Data Event objects
   * @return $this
   */
  public function setEvents($events) {
    $this->container['events'] = $events;
    return $this;
  }

  /**
   * Sets Partner Agent, which specifies who is sending the event.
   * @param string $partner_agent The partner agent who is sending the event
   * @return $this
   */
  public function setPartnerAgent($partner_agent) {
    $this->container['partner_agent'] = $partner_agent;

    return $this;
  }

  /**
   * Execute the request
   * @return EventResponse
   */
  public function execute() {
    $fields = array();
    $params = $this->toJson();
    $page = new Page($this->container['page_id']);
    $response = $page->createBusinessDatum(
      $fields,
      $params,
    );
    $event_response = new EventResponse($response->exportAllData());
    return $event_response;
  }

  /**
   * convert to JSON
   * @return array
   */
  public function toJson() {
    $data = array();
    $events = $this->getEvents();
    if (!is_null($events)) {
      foreach ($events as $event) {
        $event_data = $event->toJson();
        array_push($data, $event_data);
      }
    }

    $payload = array(
      'data' => $data,
      'partner_agent' => $this->container['partner_agent'],
    );
    $payload = array_filter($payload);

    return $payload;
  }

  /**
   * Gets an array of Event objects
   * @return FacebookAds\Object\BusinessDataAPI\Event[]
   */
  public function getEvents() {
    return $this->container['events'];
  }

  /**
   * Gets Partner Agent, which specifies who is sending the event.
   * @return string
   */
  public function getPartnerAgent() {
    return $this->container['partner_agent'];
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
