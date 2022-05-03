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
 *
 */

use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\AbstractObject;
use FacebookAds\Object\AbstractCrudObject;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Campaign;
use FacebookAds\Object\Fields\AdAccountFields;
use FacebookAds\Object\Fields\CampaignFields;
use FacebookAds\ApiRequest;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Object\Targeting;
use FacebookAds\Object\Fields\TargetingFields;
use FacebookAds\Object\AdSet;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Values\AdSetBillingEventValues;
use FacebookAds\Object\Values\AdSetOptimizationGoalValues;
use FacebookAds\Object\Ad;
use FacebookAds\Object\Fields\AdFields;
use FacebookAds\Object\AdImage;
use FacebookAds\Object\Fields\AdImageFields;
use FacebookAds\Object\AdCreative;
use FacebookAds\Object\Values\AdCreativeCallToActionTypeValues;
use FacebookAds\Object\AdCreativeLinkData;
use FacebookAds\Object\Fields\AdCreativeLinkDataCallToActionValueFields;
use FacebookAds\Object\Fields\AdCreativeLinkDataFields;
use FacebookAds\Object\AdCreativeObjectStorySpec;
use FacebookAds\Object\Fields\AdCreativeObjectStorySpecFields;
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Values\PageCallToActionWebDestinationTypeValues;

use FacebookAds\Object\Business;
use FacebookAds\Object\Fields\BusinessFields;
use FacebookAds\Object\ExtendedCredit;

// Run with command: php -S localhost:8000

// *** Replace the constants below ***
// Aggregator Info:
$app_id = '';
$app_secret = '';
$aggregator_access_token = '';
$aggregator_bm_id = 0;
$bm_loc_id = 0;
// Clients Info
$page_id = 0;

define('SDK_DIR', __DIR__); // Path to the SDK directory
$loader = include SDK_DIR.'/vendor/autoload.php';
// Configurations - End
if (
  is_null($aggregator_access_token) || is_null($app_id) || is_null($app_secret)
) {
  throw new Exception(
    'You must set your access token, app id and app secret before executing'
  );
}

// Initialize a new Session and instanciate an Api object
Api::init($app_id, $app_secret, $aggregator_access_token);

// The Api object is now available through singleton
$api = Api::instance();
$logger = new CurlLogger();
$api->setLogger($logger);

function getEdges($api, $params, $fields, $node_id, $edge) {
  if ($fields) {
    $fields = implode(',', $fields);
    $params['fields'] = $fields;
  }
  $response =
    $api->call('/'.$node_id.'/'.$edge, RequestInterface::METHOD_GET, $params);
  return $response->getContent();
}

function postEdges($api, $params, $node_id, $edge) {
  $response =
    $api->call('/'.$node_id.'/'.$edge, RequestInterface::METHOD_POST, $params);
  return $response->getContent();
}

function setAccessToken($access_token) {
  global $app_secret, $app_id;
  Api::init($app_id, $app_secret, $access_token);
  $api = Api::instance();
  $logger = new CurlLogger();
  $api->setLogger($logger);
  return $api;
}

function create_client_business($access_token) {
  global
    $app_id,
    $app_secret,
    $aggregator_bm_id,
    $page_id,
    $bm_loc_id,
    $aggregator_access_token;

  $api = setAccessToken($access_token);
  $me = getEdges($api, array(), array(), 'me', '');
  $app_scoped_user_id = $me['id'];

  $api = setAccessToken($aggregator_access_token);
  $child_business = (new Business($aggregator_bm_id))->getOwnedBusinesses(
    array(),
    array(
      'client_user_id' => $app_scoped_user_id,
    ),
  );

  if (!is_null($child_business) && !is_null($child_business[0])) {
    $child_business_id = $child_business[0]->id;
    // A partner can only create one child business manager on behalf
    // of the user. Exit to avoid erroring.
    $accounts =
      (new Business($child_business_id))->getOwnedAdAccounts(array(), array());
    $existing_account = '';
    if (!is_null($accounts) && !is_null($accounts[0])) {
      $existing_account = $accounts[0]->id;
    }
    return $child_business_id.','.$existing_account;
  }

  /**
   * Step 1 Create the child BM under the Aggregator BM
   */
  $child_business = (new Business($aggregator_bm_id))->createOwnedBusiness(
    array(),
    array(
      'id' => $aggregator_bm_id,
      BusinessFields::NAME => 'Advertisers Name Child BM',
      BusinessFields::VERTICAL => 'OTHER',
      'shared_page_id' => $page_id,
      'page_permitted_roles' => ['ADVERTISER'],
      'timezone_id' => 1,
    ),
  );
  $child_business_id = $child_business->id;

  /**
   * Step 2 Share credit line from Aggregator BM to client BM.
   * This uses the Aggregators access token.
   */
  $api = setAccessToken($aggregator_access_token);
  (new ExtendedCredit($bm_loc_id))->createOwningCreditAllocationConfig(
    array(),
    array(
      'receiving_business_id' => $child_business_id,
      'amount' => 10,
    ),
  );

  /**
   * Step 3 Create access token System user under child BM.
   * This uses the Aggregators access token.
   */
  $api = setAccessToken($aggregator_access_token);
  $child_business_token = (new Business($child_business_id))->createAccessToken(
    array(),
    array(
      'id' => $child_business_id,
      'app_id' => $app_id,
      'scope' => 'manage_pages,ads_management,business_management',
    ),
  );
  $child_bm_system_user_access_token = $child_business_token->access_token;

  /**
   * Step 4 Fetch funding source shared with BM
   * This uses the Child BMs access token.
   */
  $api = setAccessToken($child_bm_system_user_access_token);
  $params = array();
  $fields = array();
  $response =
    getEdges($api, $params, $fields, $child_business_id, 'extendedcredits');
  $child_bm_payment_method_id = $response['data'][0]['id'];

  /**
   * Step 5 Create Ad Account
   * This uses the Child BMs access token. The Admin System user for their
   * child BM is the owner of the Ad Account.
   */
  $api = setAccessToken($child_bm_system_user_access_token);
  $account = (new Business($child_business_id))->createAdAccount(
    array(),
    array(
      'name' => 'MyAdAccount',
      'currency' => 'USD',
      'timezone_id' => 1,
      'end_advertiser' => $page_id,
      'media_agency' => 'NONE',
      'partner' => 'NONE',
      'funding_id' => $child_bm_payment_method_id,
    ),
  );
  $account_id = $account->id;

  /**
   * Step 6 Fetch the System user for the client business.
   * This uses the Child BMs access token. This system user id is used in the api calls below.
   */
  $api = setAccessToken($child_bm_system_user_access_token);
  $system_user_id =
    (new Business($child_business_id))->getSystemUsers(array(), array())[0]->id;

  /**
   * Step 7 Add System user as Admin to Ad Account.
   * This uses the Child BMs access token.
   */
  $api = setAccessToken($child_bm_system_user_access_token);
  (new AdAccount($account_id))->createAssignedUser(
    array(),
    array(
      'user' => $system_user_id,
      'role' => 'ADMIN',
      'business' => $child_business_id,
    ),
  );

  return $child_business_id.','.$account_id;
}

function create_click_to_messenger_ad(
  $account_id,
  $bmid,
  $ad_message,
  $page_welcome_message
) {
  global $aggregator_access_token, $app_id, $page_id;
  $api = setAccessToken($aggregator_access_token);
  $child_business_token = (new Business($bmid))->createAccessToken(
    array(),
    array(
      'app_id' => $app_id,
      'scope' => 'manage_pages,ads_management,business_management',
    ),
  );
  $child_bm_system_user_access_token = $child_business_token->access_token;
  $api = setAccessToken($child_bm_system_user_access_token);
  $account = new AdAccount($account_id);
  $campaign = $account->createCampaign(
    array(),
    array(
      CampaignFields::NAME => 'First test Campaign',
      CampaignFields::OBJECTIVE => 'MESSAGES',
    ),
  );

  /**
   * Step 2 Search Targeting
   */
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
   * Step 3 Create the AdSet
   */
  $start_time = (new \DateTime("+1 week"))->format(DateTime::ISO8601);
  $end_time = (new \DateTime("+2 week"))->format(DateTime::ISO8601);
  $fields = array();
  $params = array(
    AdSetFields::NAME => 'First Ad Set',
    AdSetFields::OPTIMIZATION_GOAL => AdSetOptimizationGoalValues::REPLIES,
    AdSetFields::BILLING_EVENT => AdSetBillingEventValues::IMPRESSIONS,
    AdSetFields::BID_AMOUNT => 2,
    AdSetFields::DAILY_BUDGET => 1000,
    AdSetFields::CAMPAIGN_ID => $campaign->id,
    AdSetFields::TARGETING => $targeting,
    AdSetFields::START_TIME => $start_time,
    AdSetFields::END_TIME => $end_time,
  );
  $ad_set = $account->createAdSet($fields, $params);
  $ad_set_id = $ad_set->id;

  /**
   * Step 4 Create an AdImage
   */

  $image = new AdImage();
  $image->setParentId($account->id);
  $image->{AdImageFields::FILENAME} = SDK_DIR.'<YOUR-IMAGE-PATH>';

  $image->create();
  $image_hash = $image->hash;

  /**
   * Step 5 Create an AdCreative
   */

  $link_data = new AdCreativeLinkData();
  $link_data->setData(array(
    AdCreativeLinkDataFields::CALL_TO_ACTION => array(
      'type' => AdCreativeCallToActionTypeValues::LEARN_MORE,
      'value' => array(
        AdCreativeLinkDataCallToActionValueFields::APP_DESTINATION =>
          PageCallToActionWebDestinationTypeValues::MESSENGER,
      ),
    ),
    AdCreativeLinkDataFields::LINK => '<YOUR-LINK>',
    AdCreativeLinkDataFields::IMAGE_HASH => $image->hash,
    AdCreativeLinkDataFields::MESSAGE => $ad_message,
    AdCreativeLinkDataFields::PAGE_WELCOME_MESSAGE => $page_welcome_message,
  ));

  $object_story_spec = new AdCreativeObjectStorySpec();
  $object_story_spec->setData(array(
    AdCreativeObjectStorySpecFields::PAGE_ID => $page_id,
    AdCreativeObjectStorySpecFields::LINK_DATA => $link_data,
  ));

  $creative = $account->createAdCreative(
    array(),
    array(
      AdCreativeFields::NAME => 'Sample Creative',
      AdCreativeFields::OBJECT_STORY_SPEC => $object_story_spec,
    ),
  );

  $ad = $account->createAd(
    array(),
    array(
      'status' => 'ACTIVE',
      'adset_id' => $ad_set_id,
      'name' => 'My Ad',
      'creative' => array('creative_id' => $creative->id),
    ),
  );
  $ad_id = $ad->id;
  return 'Ad ID: '.$ad_id;
}

$possible_url = array("create_client_business", "create_click_to_messenger_ad");

$value = "An error has occurred";

if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url)) {
  switch ($_GET["action"]) {
    case "create_client_business":
      if (isset($_GET["access_token"]))
        $value = create_client_business($_GET["access_token"]);
      else
        $value = "Missing argument";
      break;
    case "create_click_to_messenger_ad":
      if (
        isset($_GET["adaccount"]) &&
        isset($_GET["bmid"]) &&
        isset($_GET["ad_message"]) &&
        isset($_GET["page_welcome_message"])
      )
        $value = create_click_to_messenger_ad(
          $_GET["adaccount"],
          $_GET["bmid"],
          $_GET["ad_message"],
          $_GET["page_welcome_message"],
        );
      else
        $value = "Missing argument";
      break;
  }
}

//return JSON array
exit(json_encode($value));
?>
