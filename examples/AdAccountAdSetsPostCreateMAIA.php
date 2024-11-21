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
  'name' => 'Mobile App Installs Ad Set',
  'daily_budget' => '1000',
  'bid_amount' => '2',
  'billing_event' => 'IMPRESSIONS',
  'optimization_goal' => 'APP_INSTALLS',
  'campaign_id' => '<adCampaignAppInstallsID>',
  'promoted_object' => array('application_id' => '<appID>','object_store_url' => '<appLink>'),
  'targeting' => array('device_platforms' => array('mobile'),'facebook_positions' => array('feed'),'geo_locations' => array('countries' => array('US')),'publisher_platforms' => array('facebook','audience_network'),'user_os' => array('IOS')),
  'status' => 'PAUSED',
);
echo json_encode((new AdAccount($id))->createAdSet(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);