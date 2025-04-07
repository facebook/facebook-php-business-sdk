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
  'name' => 'My AdSet',
  'optimization_goal' => 'REACH',
  'billing_event' => 'IMPRESSIONS',
  'bid_amount' => '2',
  'daily_budget' => '1000',
  'campaign_id' => '<adCampaignConversionsID>',
  'targeting' => array('facebook_positions' => array('feed'),'geo_locations' => array('countries' => array('US')),'behaviors' => array(array('id' => 6007101597783,'name' => 'Business Travelers'),array('id' => 6004386044572,'name' => 'Android Owners (All)'))),
);
echo json_encode((new AdAccount($id))->createAdSet(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);