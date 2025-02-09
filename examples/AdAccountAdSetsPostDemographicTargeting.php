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
  'daily_budget' => '10000',
  'bid_amount' => '300',
  'billing_event' => 'IMPRESSIONS',
  'optimization_goal' => 'REACH',
  'campaign_id' => '<adCampaignLinkClicksID>',
  'promoted_object' => array('page_id' => '<pageID>'),
  'targeting' => array('facebook_positions' => array('feed'),'age_max' => 24,'age_min' => 20,'behaviors' => array(array('id' => 6002714895372,'name' => 'All travelers')),'device_platforms' => array('mobile'),'genders' => array(1),'geo_locations' => array('countries' => array('US'),'regions' => array(array('key' => '4081')),'cities' => array(array('key' => 777934,'radius' => 10,'distance_unit' => 'mile'))),'interests' => array(array('id' => '<adsInterestID>','name' => '<adsInterestName>')),'life_events' => array(array('id' => 6002714398172,'name' => 'Newlywed (1 year)')),'publisher_platforms' => array('facebook','audience_network')),
  'status' => 'PAUSED',
);
echo json_encode((new AdAccount($id))->createAdSet(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);