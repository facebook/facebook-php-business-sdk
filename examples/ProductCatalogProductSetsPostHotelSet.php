<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Object\ProductCatalog;
use FacebookAds\Object\ProductSet;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = '<ACCESS_TOKEN>';
$app_secret = '<APP_SECRET>';
$app_id = '<APP_ID>';
$id = '<PRODUCT_CATALOG_ID>';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

$fields = array(
);
$params = array(
  'name' => 'Test Hotel Set',
  'filter' => array('brand' => array('i_contains' => 'sample brand')),
);
echo json_encode((new ProductCatalog($id))->createProductSet(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);