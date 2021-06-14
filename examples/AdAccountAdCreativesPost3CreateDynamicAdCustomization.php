<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
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
  'name' => 'Dynamic Ad Template Creative Sample',
  'object_story_spec' => array('page_id' => '<pageID>','template_data' => array('message' => 'English Test array(array(product.name | titleize))','link' => 'http://www.example.com/englishurl','name' => 'English Headline array(array(product.price))','description' => 'English Description array(array(product.description))','customization_rules_spec' => array(array('customization_spec' => array('language' => 'en_XX')),array('customization_spec' => array('language' => 'fr_XX'),'message' => 'French Test array(array(product.name | titleize))','link' => 'http://www.example.com/frenchurl','name' => 'French Headline array(array(product.price))','description' => 'French Description array(array(product.description))','template_url_spec' => array('web' => array('url' => 'http://www.example.com/frenchdeeplink')))))),
  'product_set_id' => '<productSetID>',
  'template_url_spec' => array('web' => array('url' => 'http://www.example.com/englishdeeplink')),
);
echo json_encode((new AdAccount($id))->createAdCreative(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);