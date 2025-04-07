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
  'start_time' => '2024-07-29T17:54:57-0700',
  'end_time' => '2024-08-08T17:54:57-0700',
  'campaign_id' => '<adCampaignLinkClicksID>',
  'bid_amount' => '100',
  'billing_event' => 'LINK_CLICKS',
  'optimization_goal' => 'LINK_CLICKS',
  'targeting' => array('facebook_positions' => array('feed'),'geo_locations' => array('countries' => array('US')),'publisher_platforms' => array('facebook','audience_network')),
  'status' => 'PAUSED',
);
echo json_encode((new AdAccount($id))->createAdSet(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);