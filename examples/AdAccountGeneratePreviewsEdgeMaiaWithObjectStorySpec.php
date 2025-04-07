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
use FacebookAds\Object\AdPreview;
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
  'creative' => array('object_story_spec' => array('link_data' => array('call_to_action' => array('type' => 'USE_APP','value' => array('link' => '<url>')),'description' => 'Description','link' => '<url>','message' => 'Message','name' => 'Name','picture' => '<imageURL>'),'page_id' => '<pageID>')),
  'ad_format' => 'MOBILE_FEED_STANDARD',
);
echo json_encode((new AdAccount($id))->getGeneratePreviews(
  $fields,
  $params
)->getResponse()->getContent(), JSON_PRETTY_PRINT);