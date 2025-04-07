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
  'object_story_spec' => array('page_id' => '<pageID>','template_data' => array('format_option' => 'collection_video','link' => '<canvasURI>','name' => 'English Creative title','message' => 'English Creative message','call_to_action' => array('type' => 'LEARN_MORE'),'retailer_item_ids' => array(0,0,0,0),'customization_rules_spec' => array(array('customization_spec' => array('language' => 'en_XX')),array('customization_spec' => array('language' => 'fr_XX'),'link' => '<canvasURIFR>','name' => 'French Creative title','message' => 'French Creative message')))),
  'product_set_id' => '<productSetID>',
);
echo json_encode((new AdAccount($id))->createAdCreative(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);