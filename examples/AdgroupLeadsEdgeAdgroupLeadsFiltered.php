<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Object\Ad;
use FacebookAds\Object\Lead;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = '<ACCESS_TOKEN>';
$app_secret = '<APP_SECRET>';
$app_id = '<APP_ID>';
$id = '<AD_GROUP_ID>';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

$fields = array(
);
$params = array(
  'filtering' => array(array('field' => 'time_created','operator' => 'GREATER_THAN','value' => 1721709809)),
);
echo json_encode((new Ad($id))->getLeads(
  $fields,
  $params
)->getResponse()->getContent(), JSON_PRETTY_PRINT);