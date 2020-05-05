<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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

define('SDK_DIR', __DIR__ . '/..'); // Path to the SDK directory
$loader = include SDK_DIR . '/vendor/autoload.php';

use FacebookAds\Api;
use FacebookAds\Object\ServerSide\Content;
use FacebookAds\Object\ServerSide\CustomData;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\EventRequest;
use FacebookAds\Object\ServerSide\Gender;
use FacebookAds\Object\ServerSide\UserData;

// Configuration.
// Should fill in value before running this script
$access_token = null;
$pixel_id = null;

if (is_null($access_token) || is_null($pixel_id)) {
  throw new Exception(
    'You must set your access token and pixel id before executing'
  );
}

// Initialize
Api::init(null, null, $access_token);
$api = Api::instance();

// Create Server Side Event Object
$event = new Event();
$event
  ->setEventName('Purchase')
  ->setEventTime(time());

$user_data = new UserData();
$user_data
  ->setEmail('joe@eg.com')
  ->setPhone('16505551212')
  ->setCountryCode('us')
  ->setGender(Gender::FEMALE);

$custom_content = new Content();
$custom_content
  ->setItemPrice(3.5)
  ->setProductId("XYZ789")
  ->setQuantity(4);

$custom_contents = array();
array_push($custom_contents, $custom_content);

$custom_data = new CustomData();
$custom_data
  ->setCurrency('USD')
  ->setValue(14.0)
  ->setContents($custom_contents);

$event->setUserData($user_data);
$event->setCustomData($custom_data);

$events = array();
array_push($events, $event);
array_push($events, $event);

// Create event request
$request = new EventRequest($pixel_id);
$request->setEvents($events);
// Execute the request
$response = $request->execute();

print_r($response);
