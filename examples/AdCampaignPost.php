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
  'bid_adjustments' => array('user_groups' => array('user_bucket' => array('event_sources' => array('<pixelID>','<appID>'),'1' => 0.1,'2' => 0.2,'3' => 0.3,'default' => array('gender' => array('male' => 0.99,'female' => 0.12))))),
);
echo json_encode((new AdSet($id))->updateSelf(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);