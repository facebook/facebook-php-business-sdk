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
use FacebookAds\Object\AdsPixel;

/**
 * Server-Side Event Request
 *
 * @category    Class
 */
class EventRequest implements ArrayAccess
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $param_types = array(
        'events' => '\FacebookAds\Object\ServerSide\Event[]',
        'test_event_code' => 'string',
        'partner_agent' => 'string'
    );
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'events' => 'events',
        'test_event_code' => 'test_event_code',
        'partner_agent' => 'partner_agent'
    );
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'events' => 'setEvents',
        'test_event_code' => 'setTestEventCode',
        'partner_agent' => 'setPartnerAgent'
    );
    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'events' => 'getEvents',
        'test_event_code' => 'getTestEventCode',
        'partner_agent' => 'getPartnerAgent'
    );
    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param string $pixel_id pixel id
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(string $pixel_id, array $data = null)
    {
        $this->container['pixel_id'] = $pixel_id;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['test_event_code'] = isset($data['test_event_code']) ? $data['test_event_code'] : null;
        $this->container['partner_agent'] = isset($data['partner_agent']) ? $data['partner_agent'] : null;
    }

    public static function paramTypes()
    {
        return self::$param_types;
    }

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['events'] === null) {
            $invalid_properties[] = "'events' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if ($this->container['events'] === null) {
            return false;
        }
        return true;
    }

    /**
     * Sets an array of Server Event objects
     * @param FacebookAds\Object\ServerSide\Event[] $events An array of Server Event objects
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
        return $this;
    }

    /**
     * Gets code used to verify that your server events are received correctly by Facebook. Use this
     * code to test your server events in the Test Events feature in Events Manager.
     * See Test Events Tool
     * (https://developers.facebook.com/docs/marketing-api/facebook-pixel/server-side-api/using-the-api#testEvents)
     * for an example.
     * @return string
     */
    public function getTestEventCode()
    {
        return $this->container['test_event_code'];
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
    public function setTestEventCode($test_event_code)
    {
        $this->container['test_event_code'] = $test_event_code;
        return $this;
    }

    /**
     * Sets Partner Agent, which specifies who is sending the event.
     * @param string $partner_agent The partner agent who is sending the event
     * @return $this
     */
    public function setPartnerAgent($partner_agent)
    {
        $this->container['partner_agent'] = $partner_agent;

        return $this;
    }

    /**
     * Execute the request
     * @return EventResponse
     */
    public function execute()
    {
        $fields = array();
        $normalized_param = $this->normalize();
        $ads_pixel = new AdsPixel($this->container['pixel_id']);
        $response = $ads_pixel->createEvent(
            $fields,
            $normalized_param
        );
        $event_response = new EventResponse($response->exportAllData());
        return $event_response;
    }

    /**
     * Normalize
     * @return array
     */
    private function normalize()
    {
        $normalized_events = array();
        $events = $this->getEvents();
        if (!is_null($events)) {
            foreach ($events as $event) {
                $normalized_event = $event->normalize();
                array_push($normalized_events, $normalized_event);
            }
        }

        $normalized_payload = array(
            'data' => $normalized_events,
            'test_event_code' => $this->container['test_event_code'],
            'partner_agent' => $this->container['partner_agent'],
        );
        $normalized_payload = array_filter($normalized_payload);

        return $normalized_payload;
    }

    /**
     * Gets an array of Server Event objects
     * @return FacebookAds\Object\ServerSide\Event[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Gets Partner Agent, which specifies who is sending the event.
     * @return string
     */
    public function getPartnerAgent()
    {
        return $this->container['partner_agent'];
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param integer $offset Offset
     * @param mixed $value Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }


    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode($this, JSON_PRETTY_PRINT);
        }

        return json_encode($this);
    }
}
