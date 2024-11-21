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
use FacebookAds\Object\CustomAudience;
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
  'name' => 'Test Iphone Product Audience',
  'product_set_id' => '<productSetID>',
  'inclusions' => array(array('retention_seconds' => 86400,'rule' => array('and' => array(array('event' => array('eq' => 'AddToCart')),array('userAgent' => array('i_contains' => 'iPhone')))))),
  'exclusions' => array(array('retention_seconds' => 172800,'rule' => array('event' => array('eq' => 'Purchase')))),
);
echo json_encode((new AdAccount($id))->createProductAudience(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);