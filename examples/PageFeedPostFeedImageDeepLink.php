<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Object\Page;
use FacebookAds\Object\PagePost;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = '<ACCESS_TOKEN>';
$app_secret = '<APP_SECRET>';
$app_id = '<APP_ID>';
$id = '<PAGE_ID>';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

$fields = array(
);
$params = array(
  'message' => 'This is a test message',
  'call_to_action' => array('type' => 'BUY_NOW','value' => array('link' => '<appLink>','app_link' => '<deepLinkURL>')),
);
echo json_encode((new Page($id))->createFeed(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);