<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Object\AdSet;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = '<ACCESS_TOKEN>';
$app_secret = '<APP_SECRET>';
$app_id = '<APP_ID>';
$id = '<AD_SET_ID>';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

$fields = array(
);
$params = array(
  'billing_event' => 'IMPRESSIONS',
  'optimization_goal' => 'LINK_CLICKS',
  'bid_amount' => '200',
  'targeting' => array('geo_locations' => array('countries' => array('US')),'facebook_positions' => array('feed')),
);
echo json_encode((new AdSet($id))->updateSelf(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);