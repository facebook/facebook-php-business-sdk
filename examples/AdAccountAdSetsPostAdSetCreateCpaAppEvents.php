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
  'name' => 'A CPA Ad Set optimized for App Events',
  'campaign_id' => '<adCampaignAppInstallsID>',
  'daily_budget' => '300',
  'start_time' => '2024-08-05T17:55:15-0700',
  'end_time' => '2024-08-12T17:55:15-0700',
  'billing_event' => 'IMPRESSIONS',
  'optimization_goal' => 'OFFSITE_CONVERSIONS',
  'bid_amount' => '100',
  'status' => 'PAUSED',
  'promoted_object' => array('application_id' => '<appID>','object_store_url' => '<appLink>','custom_event_type' => 'PURCHASE'),
  'targeting' => array('facebook_positions' => array('feed'),'geo_locations' => array('countries' => array('US')),'user_os' => array('iOS')),
);
echo json_encode((new AdAccount($id))->createAdSet(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);