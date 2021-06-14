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

use FacebookAds\Api;
use FacebookAds\Object\AdsPixel;
use FacebookAds\Object\Page;
use FacebookAds\Object\BusinessDataAPI\EventRequest as BusinessDataEventRequest;
use FacebookAds\Object\ServerSide\EventRequest as ServerSideEventRequest;

/**
 * Event Request
 *
 * @category    Class
 */
class EventRequest {
  /**
   * Associative array for storing property values for Business Data API
   * @var BusinessDataEventRequest
   */
  protected $businessDataEventRequest = null;

  /**
   * Associative array for storing property values for Conversion API
   * @var ServerSideEventRequest
   */
  protected $serverSideEventRequest = null;

  /**
   * Constructor
   * @param string $pixel_id pixel id
   * @param string $page_id page id
   * @param mixed[] $data Associated array of property value initializing the model
   */
  public function __construct(string $pixel_id, string $page_id, array $data = null) {
    $business_data = $data;
    $server_data = $data;

    $business_events = array();
    $server_events = array();
    if(isset($data['events'])){
        foreach ($events as $event) {
            array_push($business_events, $event->getBusinessDataEvent());
            array_push($server_events, $event->getServerSideEvent());
        }
    }
    $business_data['events'] = $business_events;
    $server_data['events'] =  $server_data;

    $this->serverSideEventRequest = new ServerSideEventRequest($pixel_id, $server_data);
    $this->businessDataEventRequest = new BusinessDataEventRequest($page_id, $business_data);
  }

  /**
   * Sets an array of Signal Event objects
   * @param FacebookAds\Object\Signal\Event[] $events An array of Signal Event objects
   * @return $this
   */
  public function setEvents($events) {
    $business_events = array();
    $server_events = array();
    foreach ($events as $event) {
        array_push($business_events, $event->getBusinessDataEvent());
        array_push($server_events, $event->getServerSideEvent());
    }
    $this->businessDataEventRequest->setEvents($business_events);
    $this->serverSideEventRequest->setEvents($server_events);

    return $this;
  }

  /**
   * Sets code used to verify that your server events are received correctly by Facebook. Use this
   * code to test your server events in the Test Events feature in Events Manager.
   * See Test Events Tool
   * (https://developers.facebook.com/docs/marketing-api/facebook-pixel/server-side-api/using-the-api#testEvents)
   * for an example.
   * @param string $test_event_code Code used to verify that your server events are received correctly by Facebook.
   * Use this code to test your server events in the Test Events feature in Events Manager. See Test Events Tool
   * (https://developers.facebook.com/docs/marketing-api/facebook-pixel/server-side-api/using-the-api#testEvents)
   * for an example.
   * @return $this
   */
  public function setTestEventCode($test_event_code) {
    $this->serverSideEventRequest->setTestEventCode($test_event_code);
    return $this;
  }

  /**
   * Sets Partner Agent, which specifies who is sending the event.
   * @param string $partner_agent The partner agent who is sending the event
   * @return $this
   */
  public function setPartnerAgent($partner_agent) {
    $this->businessDataEventRequest->setPartnerAgent($partner_agent);
    $this->serverSideEventRequest->setPartnerAgent($partner_agent);

    return $this;
  }

   /**
   * Sets namespace_id, a scope used to resolve extern_id or Third-party ID.
   * Can be another data set or data partner ID.
   * @return $this
   */
  public function setNamespaceId($namespace_id) {
    $this->serverSideEventRequest->setNamespaceId($namespace_id);
    return $this;
  }

    /**
   * Sets upload_tag, a tag string added to track your Offline event uploads.
   * @return $this
   */
  public function setUploadTag($upload_tag) {
    $this->serverSideEventRequest->setUploadTag($upload_tag);
    return $this;
  }

  /**
   * Sets upload_id, a unique id used to denote the current set being uploaded.
   * @return $this
   */
  public function setUploadId($upload_id) {
    $this->serverSideEventRequest->setUploadId($upload_id);
    return $this;
  }

  /**
   * Sets upload_source, the origin/source of data for the dataset to be uploaded.
   * @return $this
   */
  public function setUploadSource($upload_source) {
    $this->serverSideEventRequest->setUploadSource($upload_source);
    return $this;
  }

  /**
   * Execute the request
   * @return array
   */
  public function execute() {
      return Util::constructResponse(
          $this->serverSideEventRequest->execute(),
          $this->businessDataEventRequest->execute()
        );
  }

  /**
   * Gets an array of Server Event objects
   * @return array
   */
  public function getEvents() {
    return Util::constructResponse($this->serverSideEvent->getEvents(), $this->businessDataEventRequest->getEvents());
  }

  /**
   * Gets Partner Agent, which specifies who is sending the event.
   * @return array
   */
  public function getPartnerAgent() {
    return Util::constructResponse($this->serverSideEvent->getPartnerAgent(), $this->businessDataEventRequest->getPartnerAgent());
  }

  /**
   * Gets namespace_id, a scope used to resolve extern_id or Third-party ID.
   * Can be another data set or data partner ID.
   * @return array
   */
  public function getNamespaceId() {
    return Util::constructResponse($this->serverSideEvent->getNamespaceId(), null);
  }

  /**
   * Gets upload_id, a unique id used to denote the current set being uploaded.
   * @return array
   */
  public function getUploadId() {
    return Util::constructResponse($this->serverSideEvent->getUploadId(), null);
  }

 /**
   * Gets code used to verify that your server events are received correctly by Facebook. Use this
   * code to test your server events in the Test Events feature in Events Manager.
   * See Test Events Tool
   * (https://developers.facebook.com/docs/marketing-api/facebook-pixel/server-side-api/using-the-api#testEvents)
   * for an example.
   * @return array
   */
  public function getTestEventCode() {
    return Util::constructResponse($this->serverSideEvent->getTestEventCode(), null);
  }


  /**
   * Gets upload_tag, a tag string added to track your Offline event uploads.
   * @return array
   */
  public function getUploadTag() {
    return Util::constructResponse($this->serverSideEvent->getUploadTag(), null);
  }

  /**
   * Gets upload_source, the origin/source of data for the dataset to be uploaded.
   * @return array
   */
  public function getUploadSource() {
    return Util::constructResponse($this->serverSideEvent->getUploadSource(), null);
  }

}
