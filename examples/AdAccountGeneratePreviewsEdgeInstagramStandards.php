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
  'creative' => array('instagram_actor_id' => '<instagramActorID>','object_story_spec' => array('link_data' => array('call_to_action' => array('type' => 'LEARN_MORE','value' => array('link' => '<url>')),'caption' => 'www.example.com','image_hash' => '<imageHash>','link' => '<url>','message' => 'Message'),'page_id' => '<pageID>')),
  'ad_format' => 'INSTAGRAM_STANDARD',
);
echo json_encode((new AdAccount($id))->getGeneratePreviews(
  $fields,
  $params
)->getResponse()->getContent(), JSON_PRETTY_PRINT);