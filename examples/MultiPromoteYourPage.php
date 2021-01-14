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

use FacebookAds\Object\User;
use FacebookAds\Object\Page;
use FacebookAds\Object\PagePost;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Campaign;
use FacebookAds\Object\AdSet;
use FacebookAds\Object\AdCreative;
use FacebookAds\Object\Ad;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = '<ACCESS_TOKEN>';
$app_secret = '<APP_SECRET>';
$app_id = '<APP_ID>';
$id = '<ID>';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

// User get
$fields = array(
);
$params = array(
);
$user = (new User($id))->getSelf(
  $fields,
  $params
);
$user_id = $user->id;
echo 'user_id: ' . $user_id . '\\n\\n';

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

// Switch access token back to user access token
$api = Api::init($app_id, $app_secret, $access_token);
// User adaccounts get
$fields = array(
);
$params = array(
);
$adaccounts = (new User($user_id))->getAdAccounts(
  $fields,
  $params
);
$adaccount_id = $adaccounts[0]->id;
echo 'adaccount_id: ' . $adaccount_id . '\\n\\n';

// AdCampaign create
$fields = array(
);
$params = array(
  'name' => 'My campaign',
  'objective' => 'LINK_CLICKS',
  'status' => 'PAUSED',
  'special_ad_categories' => array(),
);
$adcampaign = (new AdAccount($adaccount_id))->createCampaign(
  $fields,
  $params
);
$adcampaign_id = $adcampaign->id;
echo 'adcampaign_id: ' . $adcampaign_id . '\\n\\n';

// AdSet create
$fields = array(
);
$params = array(
  'name' => 'My Reach Ad Set',
  'optimization_goal' => 'REACH',
  'billing_event' => 'IMPRESSIONS',
  'bid_amount' => '2',
  'daily_budget' => '1000',
  'campaign_id' => $adcampaign_id,
  'targeting' => array('geo_locations' => array('countries' => array('US')),'facebook_positions' => array('feed')),
  'status' => 'PAUSED',
  'promoted_object' => array('page_id' => $page_id),
);
$adset = (new AdAccount($adaccount_id))->createAdSet(
  $fields,
  $params
);
$adset_id = $adset->id;
echo 'adset_id: ' . $adset_id . '\\n\\n';

// AdCreative create page post
$fields = array(
);
$params = array(
  'name' => 'Sample Promoted Post',
  'object_story_id' => $page_id.'_'.$pagepost_id,
);
$adcreative = (new AdAccount($adaccount_id))->createAdCreative(
  $fields,
  $params
);
$adcreative_id = $adcreative->id;
echo 'adcreative_id: ' . $adcreative_id . '\\n\\n';

// AdGroup create
$fields = array(
);
$params = array(
  'name' => 'My Ad',
  'adset_id' => $adset_id,
  'creative' => array('creative_id' => $adcreative_id),
  'status' => 'PAUSED',
);
echo json_encode((new AdAccount($adaccount_id))->createAd(
  $fields,
  $params
)->exportAllData(), JSON_PRETTY_PRINT);