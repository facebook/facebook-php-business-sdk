<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Object\CustomAudience;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = '<ACCESS_TOKEN>';
$app_secret = '<APP_SECRET>';
$app_id = '<APP_ID>';
$id = '<CUSTOM_AUDIENCE_ID>';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

$fields = array(
);
$params = array(
  'payload' => array('schema' => array('EMAIL','LOOKALIKE_VALUE'),'data' => array(array('9b431636bd164765d63c573c346708846af4f68fe3701a77a3bdd7e7e5166254',44.5),array('8cc62c145cd0c6dc444168eaeb1b61b351f9b1809a579cc9b4c9e9d7213a39ee',140),array('4eaf70b1f7a797962b9d2a533f122c8039012b31e0a52b34a426729319cb792a',0),array('98df8d46f118f8bef552b0ec0a3d729466a912577830212a844b73960777ac56',0.9))),
);
echo json_encode((new CustomAudience($id))->createUser(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);