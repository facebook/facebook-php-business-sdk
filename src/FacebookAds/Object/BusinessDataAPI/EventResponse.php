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

/**
 *  event response.
 *
 * @category    Class
 */
class EventResponse {

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
    $this->container['events_dropped'] = isset($data['events_dropped']) ? $data['events_dropped'] : null;
    $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
   * Gets number of events dropped.
   * @return int
   */
  public function getEventsDropped() {
    return $this->container['events_dropped'];
  }

  /**
   * Sets number of events dropped.
   * @param int $events_dropped number of events dropped.
   * @return $this
   */
  public function setEventsDropped($events_dropped) {
    $this->container['events_dropped'] = $events_dropped;

    return $this;
  }

  /**
   * Gets response message.
   * @return array
   */
  public function getMessage() {
    return $this->container['message'];
  }

  /**
   * Sets response message.
   * @param array $message response message.
   * @return $this
   */
  public function setMessage($message) {
    $this->container['message'] = $message;

    return $this;
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
