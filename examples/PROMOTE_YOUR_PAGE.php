<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

 /**
  * This class is auto-generated.
  */

require __DIR__ . '/../vendor/autoload.php';

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Campaign;
use FacebookAds\Object\AdSet;
use FacebookAds\Object\AdCreative;
use FacebookAds\Object\Ad;
use FacebookAds\Object\AdPreview;
use FacebookAds\Api;

$access_token = "<ACCESS_TOKEN>";
$app_id = '<APP_ID>';
$account_id = 'act_<ACCOUNT_ID>';
$page_id = '<PAGE_ID>';
$ads_image_hash = '<IMAGE_HASH>';
$page_link = 'https://facebook.com/<PAGE_ID>';
$api = Api::init($app_id, null, $access_token, false);

// Step 1: Create an ad campaign
$fields = array(
);
$params = array(
  'objective' => 'OUTCOME_TRAFFIC',
  'status' => 'PAUSED',
  'buying_type' => 'AUCTION',
  'name' => 'My Campaign',
  'special_ad_categories' => array(),
);
$campaign = (new AdAccount($account_id))->createCampaign(
  $fields,
  $params
);
$campaign_id = $campaign->id;

echo 'Your campaign is: '.$campaign_id. PHP_EOL;


// Step 2: Under the campaign, create an ad set with some buying options
$fields = array(
);
$params = array(
  'status' => 'PAUSED',
  'targeting' => array('geo_locations' =>  array('countries' =>  array('US'))),
  'daily_budget' => '100',
  'billing_event' => 'IMPRESSIONS',
  'bid_amount' => '20',
  'campaign_id' => $campaign_id,
  'optimization_goal' => 'REACH',
  'promoted_object' => array('page_id' =>  $page_id),
  'name' => 'My AdSet',
);
$ad_set = (new AdAccount($account_id))->createAdSet(
  $fields,
  $params
);
$ad_set_id = $ad_set->id;

echo 'Your adset is: '.$ad_set_id. PHP_EOL;


// Step 3: Create an ad creative with your amazing design
//         This ad creative is promoting your page
$fields = array(
);
$params = array(
  'name' => 'Creative',
  'object_story_spec' => array('page_id' => $page_id,'link_data' => array('image_hash' => $ads_image_hash,'link' => $page_link,'message' => 'Creative message','call_to_action' => array('type' => 'LIKE_PAGE','value' => array('page' => $page_id)))),
  'degrees_of_freedom_spec' => array('creative_features_spec' =>  array('standard_enhancements' =>  array('enroll_status' =>  'OPT_IN'))),
);
$creative = (new AdAccount($account_id))->createAdCreative(
  $fields,
  $params
);
$creative_id = $creative->id;

echo 'Your ad creative is: '.$creative_id. PHP_EOL;


// Step 4: Create an ad under your ad set with your ad creative
$fields = array(
);
$params = array(
  'status' => 'PAUSED',
  'adset_id' => $ad_set_id,
  'name' => 'My Ad',
  'creative' => array('creative_id' =>  $creative_id),
  'ad_format' => 'DESKTOP_FEED_STANDARD',
);
$ad = (new AdAccount($account_id))->createAd(
  $fields,
  $params
);
$ad_id = $ad->id;

echo 'Your ad is: '.$ad_id. PHP_EOL;
