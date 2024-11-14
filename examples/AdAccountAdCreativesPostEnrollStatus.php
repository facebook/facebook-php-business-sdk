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
  'name' => 'Sample Promoted',
  'object_story_spec' => array('page_id' => '<pageID>','link_data' => array('image_hash' => '<imageHash>','link' => '<imageURL>','message' => 'try it out')),
  'degrees_of_freedom_spec' => array('creative_features_spec' => 'array(\'standard_enhancements\' => \'array(\\\'enroll_status\\\' => \\\'OPT_IN\\\')\')'),
  'special_ad_categories' => array(),
);
echo json_encode((new AdAccount($id))->createAdCreative(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);