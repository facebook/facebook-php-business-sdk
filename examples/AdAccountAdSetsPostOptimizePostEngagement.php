<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\AdSet;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = '<ACCESS_TOKEN>';
$app_secret = '<APP_SECRET>';
$app_id = '<APP_ID>';
$id = '<AD_ACCOUNT_ID>';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

$fields = array(
);
$params = array(
  'name' => 'My First Adset',
  'lifetime_budget' => '20000',
  'start_time' => '2024-07-29T17:55:06-0700',
  'end_time' => '2024-08-08T17:55:06-0700',
  'campaign_id' => '<adCampaignLinkClicksID>',
  'bid_amount' => '500',
  'billing_event' => 'IMPRESSIONS',
  'optimization_goal' => 'POST_ENGAGEMENT',
  'targeting' => array('facebook_positions' => array('feed'),'geo_locations' => array('countries' => array('US'),'regions' => array(array('key' => '4081')),'cities' => array(array('key' => 777934,'radius' => 10,'distance_unit' => 'mile'))),'genders' => array(1),'age_max' => 24,'age_min' => 20,'behaviors' => array(array('id' => 6002714895372,'name' => 'All travelers')),'life_events' => array(array('id' => 6002714398172,'name' => 'Newlywed (1 year)')),'publisher_platforms' => array('facebook'),'device_platforms' => array('desktop')),
  'status' => 'PAUSED',
);
echo json_encode((new AdAccount($id))->createAdSet(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);