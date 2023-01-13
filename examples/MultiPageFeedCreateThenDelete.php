<?php
/**
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
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

use FacebookAds\Object\User;
use FacebookAds\Object\Page;
use FacebookAds\Object\PagePost;
use FacebookAds\Object\AbstractObject;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = '<ACCESS_TOKEN>';
$app_secret = '<APP_SECRET>';
$app_id = '<APP_ID>';
$id = '<ID>';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

// Get page access token and page_id
$fields = array(
  'access_token',
);
$params = array(
);
$pages = (new User($id))->getAccounts(
  $fields,
  $params
);
$page_id = $pages[0]->id;
echo 'page_id: ' . $page_id . '\\n\\n';

// Switch access token to page access token
$api = Api::init($app_id, $app_secret, $pages[0]->access_token);
// Page feed create
$fields = array(
);
$params = array(
  'message' => 'This is a test value',
);
$pagepost = (new Page($page_id))->createFeed(
  $fields,
  $params
);
$pagepost_id = $pagepost->id;
echo 'pagepost_id: ' . $pagepost_id . '\\n\\n';

// Pagepost delete
$fields = array(
);
$params = array(
);
echo json_encode((new PagePost($pagepost_id))->deleteSelf(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);