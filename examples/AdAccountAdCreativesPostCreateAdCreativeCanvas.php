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
use FacebookAds\Object\AdCreative;
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
  'image_hash' => '<imageHash>',
  'object_story_spec' => array('page_id' => '<pageID>','link_data' => array('image_hash' => '<imageHash>','link' => '<canvasURI>','name' => 'Creative message','call_to_action' => array('type' => 'LEARN_MORE'))),
);
echo json_encode((new AdAccount($id))->createAdCreative(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);