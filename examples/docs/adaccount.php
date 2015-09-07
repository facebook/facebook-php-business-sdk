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

use FacebookAds\Http\RequestInterface;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\AdCampaign;
use FacebookAds\Object\AdGroup;
use FacebookAds\Object\AdLabel;
use FacebookAds\Object\AdSet;
use FacebookAds\Object\Fields\AdAccountFields;
use FacebookAds\Object\Fields\AdCampaignFields;
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Fields\AdGroupFields;
use FacebookAds\Object\Fields\AdLabelFields;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Fields\AdUserFields;
use FacebookAds\Object\Fields\ConnectionObjectFields;
use FacebookAds\Object\Fields\InsightsFields;
use FacebookAds\Object\Fields\TargetingSpecsFields;
use FacebookAds\Object\TargetingSpecs;
use FacebookAds\Object\Values\InsightsActionBreakdowns;
use FacebookAds\Object\Values\InsightsPresets;
use FacebookAds\Object\Fields\AdPreviewFields;
use FacebookAds\Object\Values\AdFormats;
use FacebookAdsTest\Config\Config;

/** @var Config $config */

$ad_account_id = $config->accountId;
$page_id = $config->pageId;

$account = new AdAccount($ad_account_id);
$data = $account->getApi()->call(
  '/'.$page_id.'/promotable_posts',
  RequestInterface::METHOD_GET)->getContent();
if (is_null($data)
  || !is_array($data['data'])
  || count($data['data']) === 0) {
  throw new \RuntimeException(
    "no promotable posts available for page ".$page_id);
}
$post_id = $data['data'][0]['id'];

// _DOC open [ADACCOUNT_READ]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\AdAccountFields;

$account = new AdAccount($ad_account_id);
$fields = array(
  AdAccountFields::NAME,
  AdAccountFields::BALANCE,
);

$params = array(
  AdCampaignFields::STATUS => array(AdCampaign::STATUS_PAUSED),
);

$account->read($fields);

// Output account name
echo $account->{AdAccountFields::NAME}.PHP_EOL;

// Output account balance
echo $account->{AdAccountFields::BALANCE}.PHP_EOL;
// _DOC close [ADACCOUNT_READ]

$account_name = $account->{AdAccountFields::NAME};
unset($account);

// _DOC open [ADACCOUNT_UPDATE]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\AdAccountFields;

$account = new AdAccount($ad_account_id);
$account->{AdAccountFields::NAME} = "New Name";
$account->update();
// _DOC close [ADACCOUNT_UPDATE]

$account->{AdAccountFields::NAME} = $account_name;
$account->update();
unset($account);

// _DOC open [ADACCOUNT_GET_ADCAMPAIGNS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\AdCampaignFields;

$account = new AdAccount($ad_account_id);
$campaigns = $account->getAdCampaigns(array(
  AdCampaignFields::NAME,
));

foreach ($campaigns as $campaign) {
  echo $campaign->{AdCampaignFields::NAME}.PHP_EOL;
}
// _DOC close [ADACCOUNT_GET_ADCAMPAIGNS]

$label = new AdLabel(null, $ad_account_id);
$label->{AdLabelFields::NAME} = 'ADACCOUNT_GET_ADCAMPAIGNS_LABEL';
$label->create();

$ad_label_id = $label->{AdLabelFields::ID};

// _DOC open [ADACCOUNT_GET_ADLABELS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;

$account = new AdAccount($ad_account_id);
$account->getAdLabels();
// _DOC close [ADACCOUNT_GET_ADLABELS]

// _DOC open [ADACCOUNT_GET_ADCAMPAIGNS_ADLABEL]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;

$account = new AdAccount($ad_account_id);
$campaigns = $account->getAdCampaignsByLabel(array(), array(
  'ad_label_ids' => array($ad_label_id),
));
// _DOC close [ADACCOUNT_GET_ADCAMPAIGNS_ADLABEL]

// _DOC open [ADACCOUNT_GET_ADSETS_ADLABEL]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;

$account = new AdAccount($ad_account_id);
$campaigns = $account->getAdSetsByLabel(array(), array(
  'ad_label_ids' => array($ad_label_id),
));
// _DOC close [ADACCOUNT_GET_ADSETS_ADLABEL]

// _DOC open [ADACCOUNT_GET_ADGROUPS_ADLABEL]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;

$account = new AdAccount($ad_account_id);
$campaigns = $account->getAdGroupsByLabel(array(), array(
  'ad_label_ids' => array($ad_label_id),
));
// _DOC close [ADACCOUNT_GET_ADGROUPS_ADLABEL]

unset($account);
unset($campaigns);

$spend_cap = (new AdAccount($ad_account_id))->read(array(
  AdAccountFields::SPEND_CAP,
))->{AdAccountFields::SPEND_CAP};

// _DOC open [ADACCOUNT_UPDATE_SPENDCAP]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\AdAccountFields;

$account = new AdAccount($ad_account_id);
$account->{AdAccountFields::SPEND_CAP} = 1000;
$account->update();
// _DOC close [ADACCOUNT_UPDATE_SPENDCAP]

// Do not restore spend cap (limited number of allowed updates per day)
unset($account);

// _DOC open [ADACCOUNT_GET_ADSETS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\AdSetFields;

$account = new AdAccount($ad_account_id);
$adsets = $account->getAdSets(array(
  AdSetFields::NAME,
  AdSetFields::CAMPAIGN_STATUS,
));

// Output name of ad sets.
foreach ($adsets as $adset) {
  echo $adset->{AdSetFields::NAME}.PHP_EOL;
}
// _DOC close [ADACCOUNT_GET_ADSETS]

unset($account);
unset($adsets);

// _DOC open [ADACCOUNT_GET_CONNECTIONOBJECTS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\ConnectionObjectFields;

$account = new AdAccount($ad_account_id);
$objects = $account->getConnectionObjects();
foreach ($objects as $object) {
  echo $object->{ConnectionObjectFields::NAME}.PHP_EOL;
}
// _DOC close [ADACCOUNT_GET_CONNECTIONOBJECTS]

unset($account);
unset($objects);

// _DOC open [ADACCOUNT_GET_ADUSERS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\AdUserFields;

$account = new AdAccount($ad_account_id);
$users = $account->getAdUsers();
foreach ($users as $user) {
  echo $user->{AdUserFields::ID}.PHP_EOL;
}
// _DOC close [ADACCOUNT_GET_ADUSERS]
unset($account);
unset($users);

// _DOC open [ADACCOUNT_READ_TOS_ACCEPTED]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\AdAccountFields

$account = new AdAccount($ad_account_id);
$account->read(array(
  AdAccountFields::TOS_ACCEPTED,
));

// Dump TOS Accepted info.
var_dump($account->{AdAccountFields::TOS_ACCEPTED});
// _DOC close [ADACCOUNT_READ_TOS_ACCEPTED]

unset($account);

// _DOC open [ADACCOUNT_GET_PAUSED_ADSETS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdSetFields;

$account = new AdAccount($ad_account_id);
$adsets = $account->getAdSets(
  array(),
  array(
    AdSetFields::CAMPAIGN_STATUS => array(
      AdSet::STATUS_PAUSED,
    ),
  ));

// Output adset names
foreach ($adsets as $adset) {
  echo $adset->{AdSetFields::NAME}.PHP_EOL;
}
// _DOC close [ADACCOUNT_GET_PAUSED_ADSETS]

unset($account);
unset($adsets);

// _DOC open [ADACCOUNT_GET_ADIMAGES]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;

$account = new AdAccount($ad_account_id);
$images = $account->getAdImages();
// _DOC close [ADACCOUNT_GET_ADIMAGES]

unset($account);
unset($images);

// _DOC open [ADACCOUNT_GET_ADCREATIVES]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\AdAccountFields;
// use FacebookAds\Object\Fields\AdCreativeFields;

$account = (new AdAccount($ad_account_id))->read(array(
  AdAccountFields::ID,
  AdAccountFields::NAME,
  AdAccountFields::ACCOUNT_STATUS,
));

$adcreatives = $account->getAdCreatives(array(AdCreativeFields::NAME));
// _DOC close [ADACCOUNT_GET_ADCREATIVES]

unset($account);
unset($adcreatives);

// _DOC open [ADACCOUNT_GET_ADGROUPS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\AdGroupFields;

$account = new AdAccount($ad_account_id);
$adgroups = $account->getAdGroups(array(
  AdGroupFields::NAME,
));

// Outputs names of Ad Groups.
foreach ($adgroups as $adgroup) {
  echo $adgroup->{AdGroupFields::NAME}.PHP_EOL;
}
// _DOC close [ADACCOUNT_GET_ADGROUPS]
unset($account);
unset($adgroups);

// _DOC open [ADACCOUNT_GET_ADGROUPS_WITH_STATUS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\AdGroup;
// use FacebookAds\Object\Fields\AdGroupFields;

$account = new AdAccount($ad_account_id);
$params = array(
  AdGroupFields::ADGROUP_STATUS => array(
    AdGroup::STATUS_ACTIVE,
    AdGroup::STATUS_PAUSED,
    AdGroup::STATUS_CAMPAIGN_PAUSED,
    AdGroup::STATUS_CAMPAIGN_GROUP_PAUSED,
    AdGroup::STATUS_PENDING_REVIEW,
    AdGroup::STATUS_DISAPPROVED,
    AdGroup::STATUS_PREAPPROVED,
    AdGroup::STATUS_PENDING_BILLING_INFO,
    AdGroup::STATUS_ARCHIVED,
  ),
);

$adgroups = $account->getAdGroups(array(
  AdGroupFields::NAME,
), $params);

// Outputs names of Ad Groups.
foreach ($adgroups as $adgroup) {
  echo $adgroup->{AdGroupFields::NAME}.PHP_EOL;
}
// _DOC close [ADACCOUNT_GET_ADGROUPS_WITH_STATUS]
unset($account);
unset($adgroups);

// _DOC open [ADACCOUNT_GET_ADSPIXELS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;

$account = new AdAccount($ad_account_id);
$pixels = $account->getAdsPixels();
// _DOC close [ADACCOUNT_GET_ADSPIXELS]

// _DOC open [ADACCOUNT_GET_CUSTOMAUDIENCES]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;

$account = new AdAccount($ad_account_id);
$audiences = $account->getCustomAudiences();
// _DOC close [ADACCOUNT_GET_CUSTOMAUDIENCES]

// _DOC open [ADACCOUNT_GET_RATECARDS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;

$account = new AdAccount($ad_account_id);
$ratecards = $account->getRateCards();
// _DOC close [ADACCOUNT_GET_RATECARDS]

// _DOC open [ADACCOUNT_GET_INSIGHTS_VIDEO_VIEWS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\InsightsFields;
// use FacebookAds\Object\Values\InsightsActionBreakdowns;
// use FacebookAds\Object\Values\InsightsPresets;

$account = new AdAccount($ad_account_id);

$params = array(
  'action_breakdowns' => InsightsActionBreakdowns::ACTION_VIDEO_TYPE,
  'date_preset' => InsightsPresets::LAST_30_DAYS,
);

$fields = array(
  InsightsFields::ACTIONS,
  InsightsFields::VIDEO_AVG_PCT_WATCHED_ACTIONS,
  InsightsFields::VIDEO_COMPLETE_WATCHED_ACTIONS,
);

$stats = $account->getInsights($fields, $params);
// _DOC close [ADACCOUNT_GET_INSIGHTS_VIDEO_VIEWS]

$label_name = $label->{AdLabelFields::NAME};

// _DOC open [ADACCOUNT_GET_INSIGHTS_ADLABEL]
// _DOC vars [ad_account_id:s, label_name:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\InsightsFields;
// use FacebookAds\Object\Values\InsightsPresets;

$account = new AdAccount($ad_account_id);

$params = array(
  'date_preset' => InsightsPresets::LAST_30_DAYS,
  'filtering' => array(
    array(
      'field' => 'adgroup.adlabels',
      'operator' => 'ANY',
      'value' => array($label_name),
    ),
  ),
);

$fields = array(
  InsightsFields::CLICKS,
  InsightsFields::CPC,
  InsightsFields::TOTAL_ACTIONS,
);

$stats = $account->getInsights($fields, $params);
// _DOC close [ADACCOUNT_GET_INSIGHTS_ADLABEL]

$label->delete();
unset($label);

// _DOC open [ADACCOUNT_GET_TARGETING_DESCRIPTION]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\TargetingSpecsFields;
// use FacebookAds\Object\TargetingSpecs;

$account = new AdAccount($ad_account_id);
$targeting = new TargetingSpecs();
$targeting->setData(array(
  TargetingSpecsFields::GEO_LOCATIONS =>
    array('countries' => array('US', 'JP')),
  TargetingSpecsFields::GENDERS => array(1),
  TargetingSpecsFields::AGE_MIN => 20,
  TargetingSpecsFields::AGE_MAX => 24,
));

$params = array('targeting_spec' => $targeting->exportData());
$targeting_description =
  $account->getTargetingDescription(array(), $params);

// Output targeting description
foreach ($targeting_description->targetingsentencelines as $description) {
  echo $description['content'].PHP_EOL;
  foreach ($description['children'] as $child) {
    echo "\t".$child.PHP_EOL;
  }
}
// _DOC close [ADACCOUNT_GET_TARGETING_DESCRIPTION]
unset($account);

$creative_spec = array(AdCreativeFields::OBJECT_STORY_ID => $post_id);
$format = AdFormats::DESKTOP_FEED_STANDARD;
// _DOC open [ADACCOUNT_GET_PREVIEWS]
// _DOC vars [ad_account_id:s, creative_spec, format:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\AdPreviewFields;

$account = new AdAccount($ad_account_id);
$account->getAdPreviews(array(), array(
  AdPreviewFields::CREATIVE => $creative_spec,
  AdPreviewFields::AD_FORMAT => $format,
));
// _DOC close [ADACCOUNT_GET_PREVIEWS]

// _DOC open [ADACCOUNT_GET_PREVIEWS_WITH_OBJECT_STORY_ID]
// _DOC vars [ad_account_id:s, post_id:s, format:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\AdPreviewFields;
// use FacebookAds\Object\Fields\AdCreativeFields;

$account = new AdAccount($ad_account_id);
$account->getAdPreviews(array(), array(
  AdPreviewFields::CREATIVE => array(
    AdCreativeFields::OBJECT_STORY_ID => $post_id,
  ),
  AdPreviewFields::AD_FORMAT => $format,
));
// _DOC close [ADACCOUNT_GET_PREVIEWS_WITH_OBJECT_STORY_ID]

// _DOC open [ADACCOUNT_GET_PREVIEWS_DESKTOP_WITH_STORY_ID]
// _DOC vars [ad_account_id:s, post_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\AdPreviewFields;
// use FacebookAds\Object\Fields\AdCreativeFields;
// use FacebookAds\Object\Values\AdFormats;

$account = new AdAccount($ad_account_id);
$account->getAdPreviews(array(), array(
  AdPreviewFields::CREATIVE => array(
    AdCreativeFields::OBJECT_STORY_ID => $post_id,
  ),
  AdPreviewFields::AD_FORMAT => AdFormats::DESKTOP_FEED_STANDARD,
));
// _DOC close [ADACCOUNT_GET_PREVIEWS_DESKTOP_WITH_STORY_ID]

// _DOC open [ADACCOUNT_GET_PREVIEWS_RHS_WITH_STORY_ID]
// _DOC vars [ad_account_id:s, post_id:s]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\Fields\AdPreviewFields;
// use FacebookAds\Object\Fields\AdCreativeFields;
// use FacebookAds\Object\Values\AdFormats;

$account = new AdAccount($ad_account_id);
$account->getAdPreviews(array(), array(
  AdPreviewFields::CREATIVE => array(
    AdCreativeFields::OBJECT_STORY_ID => $post_id,
  ),
  AdPreviewFields::AD_FORMAT => AdFormats::RIGHT_COLUMN_STANDARD,
));
// _DOC close [ADACCOUNT_GET_PREVIEWS_RHS_WITH_STORY_ID]
