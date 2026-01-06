<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\ServerSide\ActionSource;
use FacebookAds\Object\ServerSide\CustomData;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\EventRequest;
use FacebookAds\Object\ServerSide\UserData;

$access_token = '<ACCESS_TOKEN>';
$pixel_id = '<ADS_PIXEL_ID>';

$api = Api::init(null, null, $access_token);
$api->setLogger(new CurlLogger());

$user_data = (new UserData())
    ->setEmails(array('joe@eg.com'))
    ->setLeadId('525645896321548');

$custom_data = (new CustomData())
    ->setCustomProperties(array('lead_event_source' => 'Salesforce');

$event = (new Event())
    ->setEventName('QualifiedLead')
    ->setEventTime(time())
    ->setUserData($user_data)
    ->setCustomData($custom_data)
    ->setActionSource(ActionSource::SYSTEM_GENERATED);

$events = array();
array_push($events, $event);

$request = (new EventRequest($pixel_id))
    ->setEvents($events);
$response = $request->execute();
print_r($response);