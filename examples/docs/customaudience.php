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

namespace FacebookAdsDocs;

use FacebookAds\Api;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\CustomAudience;
use FacebookAds\Object\Fields\CustomAudienceFields;
use FacebookAds\Object\Values\CustomAudienceSubtypes;
use FacebookAds\Object\Values\CustomAudienceTypes;
use FacebookAds\Object\AdsPixel;
use FacebookAds\Object\Fields\AdsPixelsFields;
use FacebookAds\Session;
use FacebookAdsTest\Config\Config;

/** @var Config $config */

$ad_account_id = $config->accountId;
$application_id = $config->appId;
$page_id = $config->pageId;
$video_path = $config->testVideoPath;

// _DOC open [CUSTOM_AUDIENCE_CREATE]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\CustomAudience;
// use FacebookAds\Object\Fields\CustomAudienceFields;
// use FacebookAds\Object\Values\CustomAudienceSubtypes;

$audience = new CustomAudience(null, $ad_account_id);
$audience->setData(array(
  CustomAudienceFields::NAME => 'My new CA',
  CustomAudienceFields::SUBTYPE => CustomAudienceSubtypes::CUSTOM,
  CustomAUdienceFields::DESCRIPTION => 'People who bought from my website',
));

$audience->create();
// _DOC close [CUSTOM_AUDIENCE_CREATE]

$custom_audience_id = $audience->{CustomAudienceFields::ID};

// _DOC open [CUSTOM_AUDIENCE_USERS_ADD_EMAILS]
// _DOC vars [custom_audience_id:s]
// use FacebookAds\Object\CustomAudience;
// use FacebookAds\Object\Values\CustomAudienceTypes;
$emails = array(
  'test1@example.com',
  'test2@example.com',
  'test3@example.com',
);

$audience = new CustomAudience($custom_audience_id);

$audience->addUsers($emails, CustomAudienceTypes::EMAIL);
// _DOC close [CUSTOM_AUDIENCE_USERS_ADD_EMAILS]

// _DOC open [CUSTOM_AUDIENCE_USERS_REMOVE_EMAILS]
// _DOC vars [custom_audience_id:s]
// use FacebookAds\Object\CustomAudience;
// use FacebookAds\Object\Values\CustomAudienceTypes;
$emails = array(
  'test1@example.com',
  'test2@example.com',
  'test3@example.com',
);

$audience = new CustomAudience($custom_audience_id);

$audience->removeUsers($emails, CustomAudienceTypes::EMAIL);
// _DOC close [CUSTOM_AUDIENCE_USERS_REMOVE_EMAILS]

// _DOC open [CUSTOM_AUDIENCE_UPDATE_NAME]
// _DOC vars [custom_audience_id:s]
// use FacebookAds\Object\CustomAudience;
// use FacebookAds\Object\Values\CustomAudienceFields;
$audience = new CustomAudience($custom_audience_id);

$audience->setData(array(
  CustomAudienceFields::NAME => 'Updated Name for CA',
));

$audience->update();

echo $audience->{CustomAudienceFields::NAME}.PHP_EOL;
// _DOC close [CUSTOM_AUDIENCE_UPDATE_NAME]

// _DOC open [CUSTOM_AUDIENCE_UPDATE_OPTOUT]
// _DOC vars [custom_audience_id:s]
// use FacebookAds\Object\CustomAudience;
// use FacebookAds\Object\Values\CustomAudienceFields;
$audience = new CustomAudience($custom_audience_id);
$audience->setData(array(
  CustomAudienceFields::OPT_OUT_LINK => 'http://www.yourdomain.com/optout',
));

$audience->update();

echo $audience->{CustomAudienceFields::OPT_OUT_LINK}.PHP_EOL;
// _DOC close [CUSTOM_AUDIENCE_UPDATE_OPTOUT]

$audience->delete();


$audience = new CustomAudience(null, $ad_account_id);
$audience->setData(array(
  CustomAudienceFields::NAME => 'My new CA',
  CustomAUdienceFields::DESCRIPTION => 'Docsmith',
  CustomAudienceFields::SUBTYPE => CustomAudienceSubtypes::CUSTOM,
));

$audience->create();
$custom_audience_id = $audience->{CustomAudienceFields::ID};
$user_id_1 = 1234;
$user_id_2 = 12345;

// _DOC open [CUSTOM_AUDIENCE_USERS_ADD_ID]
// _DOC vars [custom_audience_id:s, application_id, user_id_1, user_id_2]
// use FacebookAds\Object\CustomAudience;
// use FacebookAds\Object\Fields\CustomAudienceFields;
// use FacebookAds\Object\Values\CustomAudienceTypes;

// Add Facebook IDs of users of certain applications
$audience = new CustomAudience($custom_audience_id);
$audience->addUsers(
  array($user_id_1, $user_id_2),
  CustomAudienceTypes::ID,
  array($application_id));
// _DOC close [CUSTOM_AUDIENCE_USERS_ADD_ID]
$audience->delete();

$account = new AdAccount($ad_account_id);
$pixels = $account->getAdsPixels(array(AdsPixelsFields::CODE));

if (!$pixels->count()) {
  $pixel = new AdsPixel(null, $ad_account_id);
  $pixel->{AdsPixelsFields::NAME} = 'My WCA Pixel';
  $pixel->create();
} else {
  $pixel = $pixels->current();
}

$pixel_id = $pixel->{AdsPixelsFields::ID};

// _DOC open [CUSTOM_AUDIENCE_CREATE_WCA]
// _DOC vars [ad_account_id:s, pixel_id]
// use FacebookAds\Object\CustomAudience;
// use FacebookAds\Object\Fields\CustomAudienceFields;
// use FacebookAds\Object\Values\CustomAudienceSubtypes;

$custom_audience = new CustomAudience(null, $ad_account_id);
$custom_audience->setData(array(
  CustomAudienceFields::PIXEL_ID => $pixel_id,
  CustomAudienceFields::NAME => 'My New Website Custom Audience',
  CustomAudienceFields::SUBTYPE => CustomAudienceSubtypes::WEBSITE,
  CustomAudienceFields::RETENTION_DAYS => 15,
  CustomAudienceFields::RULE => array('url' => array('i_contains' => 'shoes')),
  CustomAudienceFields::PREFILL => true,
));
$custom_audience->create();
// _DOC close [CUSTOM_AUDIENCE_CREATE_WCA]

$custom_audience_id = $custom_audience->{CustomAudienceFields::ID};

// _DOC open [CUSTOM_AUDIENCE_READ]
// _DOC vars [custom_audience_id]
// use FacebookAds\Object\CustomAudience;
// use FacebookAds\Object\Fields\CustomAudienceFields;

$custom_audience = new CustomAudience($custom_audience_id);
$custom_audience->read();
// _DOC close [CUSTOM_AUDIENCE_READ]

// _DOC open [CUSTOM_AUDIENCE_READ_RULE]
// _DOC vars [custom_audience_id]
// use FacebookAds\Object\CustomAudience;
// use FacebookAds\Object\Fields\CustomAudienceFields;

$custom_audience = new CustomAudience($custom_audience_id);
$custom_audience->read(array(
  CustomAudienceFields::NAME,
  CustomAudienceFields::RULE,
));
// _DOC close [CUSTOM_AUDIENCE_READ_RULE]

// _DOC open [CUSTOM_AUDIENCE_DELETE]
// _DOC vars [custom_audience_id]
// use FacebookAds\Object\CustomAudience;

$custom_audience = new CustomAudience($custom_audience_id);
$custom_audience->delete();
// _DOC close [CUSTOM_AUDIENCE_DELETE]

$api = Api::instance();

$response = $api->call('/me/accounts');
$data = $response->getContent();

$page_token = '';
foreach ($data['data'] as $page) {
  if ($page['id'] == $page_id) {
    $page_token = $page['access_token'];
    break;
  }
}
if ($page_token === '') {
  throw new \InvalidArgumentException(
    'Page access token for the page id ' . $page_id . ' cannot be found.'
  );
}

$page_session = new Session($config->appId, $config->appSecret, $page_token);
$page_api = new Api($api->getHttpClient(), $page_session);
$page_api->setLogger($api->getLogger());

$request = $page_api->prepareRequest(
  '/'.$page_id.'/videos',
  RequestInterface::METHOD_POST);

$request->setLastLevelDomain('graph-video');
$request->getFileParams()->offsetSet('source', $video_path);
$response = $page_api->executeRequest($request);

$data = $response->getContent();
$video_id = is_string($data) ? $data : (string) $data['id'];

// _DOC open [CUSTOM_AUDIENCE_CREATE_VIDEO_VIEWS_RETARGET]
// _DOC vars [ad_account_id:s, video_id]
// use FacebookAds\Object\CustomAudience;
// use FacebookAds\Object\Fields\CustomAudienceFields;
// use FacebookAds\Object\Values\CustomAudienceSubtypes;

$lookalike = new CustomAudience(null, $ad_account_id);
$lookalike->setData(array(
  CustomAudienceFields::SUBTYPE => CustomAudienceSubtypes::LOOKALIKE,
  CustomAudienceFields::LOOKALIKE_SPEC => array(
    'ratio' => 0.01,
    'country' => 'US',
    'engagement_specs' => array(
      array(
        'action.type' => 'video_view',
        'post' => $video_id,
      ),
    ),
    'conversion_type' => 'dynamic_rule',
  )
));

$lookalike->create();
// _DOC close [CUSTOM_AUDIENCE_CREATE_VIDEO_VIEWS_RETARGET]

$lookalike->delete();
