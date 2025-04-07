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
  'message' => 'Browse our latest products',
  'published' => '0',
  'child_attachments' => array(array('link' => '<link>','name' => 'Product 1','description' => '$4.99','image_hash' => '<imageHash>'),array('link' => '<link>','name' => 'Product 2','description' => '$4.99','image_hash' => '<imageHash>'),array('link' => '<link>','name' => 'Product 3','description' => '$4.99','image_hash' => '<imageHash>'),array('link' => '<link>','name' => 'Product 4','description' => '$4.99','image_hash' => '<imageHash>')),
  'caption' => 'WWW.EXAMPLE.COM',
  'link' => 'http://www.example.com/products',
);
echo json_encode((new Page($id))->getPosts(
  $fields,
  $params
)->getResponse()->getContent(), JSON_PRETTY_PRINT);