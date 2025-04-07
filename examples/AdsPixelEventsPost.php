<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Object\AdsPixel;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = '<ACCESS_TOKEN>';
$app_secret = '<APP_SECRET>';
$app_id = '<APP_ID>';
$id = '<ADS_PIXEL_ID>';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

$fields = array(
);
$params = array(
  'data' => array(array('event_name' => 'PageView','event_time' => 1721461428,'user_data' => array('fbc' => 'fb.1.1554763741205.AbCdEfGhIjKlMnOpQrStUvWxYz1234567890','fbp' => 'fb.1.1558571054389.1098115397','em' => '309a0a5c3e211326ae75ca18196d301a9bdbd1a882a4d2569511033da23f0abd'))),
);
echo json_encode((new AdsPixel($id))->createEvent(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);