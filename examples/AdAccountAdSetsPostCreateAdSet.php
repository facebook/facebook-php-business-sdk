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
  'name' => 'My First AdSet',
  'lifetime_budget' => '20000',
  'start_time' => '2024-07-27T00:46:29-0700',
  'end_time' => '2024-08-03T00:46:29-0700',
  'campaign_id' => '<adCampaignLinkClicksID>',
  'bid_amount' => '500',
  'billing_event' => 'IMPRESSIONS',
  'optimization_goal' => 'POST_ENGAGEMENT',
  'targeting' => array('age_min' => 20,'age_max' => 24,'behaviors' => array(array('id' => 6002714895372,'name' => 'All travelers')),'genders' => array(1),'geo_locations' => array('countries' => array('US'),'regions' => array(array('key' => '4081')),'cities' => array(array('key' => '777934','radius' => 10,'distance_unit' => 'mile'))),'interests' => array(array('id' => '<adsInterestID>','name' => '<adsInterestName>')),'life_events' => array(array('id' => 6002714398172,'name' => 'Newlywed (1 year)')),'facebook_positions' => array('feed'),'publisher_platforms' => array('facebook','audience_network')),
  'status' => 'PAUSED',
);
echo json_encode((new AdAccount($id))->createAdSet(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);