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
  'name' => 'My Adset with bid multiplier',
  'campaign_id' => '<adCampaignLinkClicksID>',
  'daily_budget' => '3000',
  'billing_event' => 'IMPRESSIONS',
  'optimization_goal' => 'OFFSITE_CONVERSIONS',
  'bid_amount' => '500',
  'bid_adjustments' => array('user_groups' => array('gender' => array('male' => 0.8,'female' => 1))),
  'promoted_object' => array('product_set_id' => '<productSetID>','custom_event_type' => 'ADD_TO_CART'),
  'targeting' => array('facebook_positions' => array('feed'),'geo_locations' => array('countries' => array('US'))),
  'status' => 'PAUSED',
);
echo json_encode((new AdAccount($id))->createAdSet(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);