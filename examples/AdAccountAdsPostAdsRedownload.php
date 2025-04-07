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
use FacebookAds\Object\Ad;
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
  'name' => 'My AdGroup with Redownload',
  'adset_id' => '<adSetID>',
  'creative' => array('creative_id' => '<adCreativeID>'),
  'redownload' => '1',
  'status' => 'PAUSED',
);
echo json_encode((new AdAccount($id))->createAd(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);