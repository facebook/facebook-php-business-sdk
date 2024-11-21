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
use FacebookAds\Object\Hotel;
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
  'hotel_id' => 'h_1',
  'name' => 'Sample Hotel',
  'description' => 'hotel description',
  'brand' => 'hotel brand',
  'url' => 'http://www.example.com/samplehotel',
  'images' => array(array('image_url' => 'https://www.example.com/pic1.jpg','tags' => array('front view','balcony')),array('image_url' => 'http://www.example.com/pic2.jpg','tags' => array('lobby view'))),
  'address' => array('street_address' => '1 Hacker Way','city' => 'Menlo Park','region' => 'California','country' => 'United States','postal_code' => '94025','neighborhoods' => array('Palo Alto','Menlo Park'),'latitude' => 37.484116,'longitude' => -122.148244),
  'guest_ratings' => array(array('score' => 7.8,'max_score' => 10,'rating_system' => 'sample_rating','number_of_raters' => 780)),
  'star_rating' => '4',
  'phone' => '+351234123456',
);
echo json_encode((new ProductCatalog($id))->createHotel(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);