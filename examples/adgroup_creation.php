<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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
 *
 */

// Configurations
$access_token = null;
$app_id = null;
$app_secret = null;
// should begin with "act_" (eg: $account_id = 'act_1234567890';)
$account_id = null;
define('SDK_DIR', __DIR__ . '/..'); // Path to the SDK directory
$loader = include SDK_DIR.'/vendor/autoload.php';
date_default_timezone_set('America/Los_Angeles');
// Configurations - End

if(is_null($access_token) || is_null($app_id) || is_null($app_secret)) {
  throw new \Exception(
    'You must set your access token, app id and app secret before executing'
  );
}

if (is_null($account_id)) {
  throw new \Exception(
    'You must set your account id before executing');
}

use FacebookAds\Api;

Api::init($app_id, $app_secret, $access_token);


/**
 * Step 1 Read the AdAccount (optional)
 */
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdAccountFields;


$account = (new AdAccount($account_id))->read(array(
  AdAccountFields::ID,
  AdAccountFields::NAME,
  AdAccountFields::ACCOUNT_STATUS,
));

echo "\nUsing this account: ";
echo $account->id."\n";

// Check the account is active
if($account->{AdAccountFields::ACCOUNT_STATUS} !== 1) {
  throw new \Exception(
    'This account is not active');
}

/**
 * Step 2 Create the Campaign
 */
use FacebookAds\Object\Campaign;
use FacebookAds\Object\Fields\CampaignFields;
try{
    $campaign  = new Campaign(null, $account->id);
    $campaign->setData(array(
        CampaignFields::NAME => 'My First Campaign',
        CampaignFields::OBJECTIVE => 'LINK_CLICKS',
    ));

    $campaign->validate()->create(array(
        Campaign::STATUS_PARAM_NAME => Campaign::STATUS_PAUSED,
    ));
    echo "Campaign ID:" . $campaign->id . "\n";
}
catch (Exception $e) {
    echo 'Error message: ' .$e->getMessage() ."\n" . "<br/>";
    echo 'Error Code: ' .$e->getCode() ."<br/>";
}
/**
 * Step 3 Search Targeting
 */
use FacebookAds\Object\Targeting;
use FacebookAds\Object\Fields\TargetingFields;


$targeting = new Targeting();
$targeting->setData(array(
    TargetingFields::GEO_LOCATIONS => array(
        'countries' => array('JP'),
        'regions' => array(array('key' => '3886')),
        'cities' => array(
            array(
                'key' => '2420605',
                'radius' => 10,
                'distance_unit' => 'mile',
            ),
        ),
    ),
));


/**
 * Step 4 Create the AdSet
 */
use FacebookAds\Object\AdSet;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Values\AdSetBillingEventValues;
use FacebookAds\Object\Values\AdSetOptimizationGoalValues;

try{
    $adset = new AdSet(null, $account->id);
    $adset->setData(array(
        AdSetFields::NAME => 'My First AdSet',
        AdSetFields::CAMPAIGN_ID => $campaign->id,
        AdSetFields::DAILY_BUDGET => '150',
        AdSetFields::TARGETING => $targeting,
        AdSetFields::OPTIMIZATION_GOAL => AdSetOptimizationGoalValues::REACH,
        AdSetFields::BILLING_EVENT => AdSetBillingEventValues::IMPRESSIONS,
        AdSetFields::BID_AMOUNT => 100,
        AdSetFields::START_TIME =>
            (new \DateTime("+1 week"))->format(\DateTime::ISO8601),
        AdSetFields::END_TIME =>
            (new \DateTime("+2 week"))->format(\DateTime::ISO8601),
    ));

    $adset->validate()->create(array(
        AdSet::STATUS_PARAM_NAME => AdSet::STATUS_ACTIVE,
    ));

    echo 'AdSet  ID: '. $adset->id . "\n";
}
catch (Exception $e) {
    echo 'Error message: ' .$e->getMessage() ."\n" . "<br/>";
    echo 'Error Code: ' .$e->getCode() ."<br/>";
}
/**
 * Step 5 Create an AdImage
 */
use FacebookAds\Object\AdImage;
use FacebookAds\Object\Fields\AdImageFields;
try {
    $image = new AdImage(null, $account->id);
    $image->{AdImageFields::FILENAME}
        = SDK_DIR.'/test/misc/image.png';

    $image->create();
    echo 'Image Hash: '.$image->hash . "\n";
}
catch (Exception $e) {
    echo 'Error message: ' .$e->getMessage() ."\n" . "<br/>";
    echo 'Error Code: ' .$e->getCode() ."<br/>";
}
/**
 * Step 6 Create an AdCreative
 */
use FacebookAds\Object\AdCreative;
use FacebookAds\Object\Fields\AdCreativeFields;

try{
    $creative = new AdCreative(null, $account->id);
    $creative->setData(array(
        AdCreativeFields::NAME => 'Sample Creative',
        AdCreativeFields::TITLE => 'Welcome to the Jungle',
        AdCreativeFields::BODY => 'We\'ve got fun \'n\' games',
        AdCreativeFields::IMAGE_HASH => $image->hash,
        AdCreativeFields::OBJECT_URL => 'http://www.example.com/',
    ));

    $creative->create();
    echo 'Creative ID: '.$creative->id . "\n";
}
catch (Exception $e) {
    echo 'Error message: ' .$e->getMessage() ."\n" . "<br/>";
    echo 'Error Code: ' .$e->getCode() ."<br/>";
}
/**
 * Step 7 Create an Ad
 */
use FacebookAds\Object\Ad;
use FacebookAds\Object\Fields\AdFields;

try {
    $ad = new Ad(null, $account->id);
    $ad->setData(array(
        AdFields::CREATIVE =>
            array('creative_id' => $creative->id),
        AdFields::NAME => 'My First Ad',
        AdFields::ADSET_ID => $adset->id,
    ));

    $ad->create();
    echo 'Ad ID:' . $ad->id . "\n";
}
catch (Exception $e) {
    echo 'Error message: ' .$e->getMessage() ."\n" . "<br/>";
    echo 'Error Code: ' .$e->getCode() ."<br/>";
}