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
  'name' => 'A CPA Ad Set',
  'campaign_id' => '<adCampaignLinkClicksID>',
  'daily_budget' => '5000',
  'start_time' => '2024-07-27T00:47:13-0700',
  'end_time' => '2024-08-03T00:47:13-0700',
  'billing_event' => 'IMPRESSIONS',
  'optimization_goal' => 'REACH',
  'bid_amount' => '1000',
  'promoted_object' => array('page_id' => '<pageID>'),
  'targeting' => array('facebook_positions' => array('feed'),'geo_locations' => array('countries' => array('US'))),
  'user_os' => 'iOS',
  'publisher_platforms' => 'facebook',
  'device_platforms' => 'mobile',
);
echo json_encode((new AdAccount($id))->createAdSet(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);