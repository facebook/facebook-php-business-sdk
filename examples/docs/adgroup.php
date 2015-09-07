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

use FacebookAds\Object\AdCampaign;
use FacebookAds\Object\AdLabel;
use FacebookAds\Object\AdSet;
use FacebookAds\Object\AdGroup;
use FacebookAds\Object\AdCreative;
use FacebookAds\Object\AdImage;
use FacebookAds\Object\Fields\AdCampaignFields;
use FacebookAds\Object\Fields\AdGroupFields;
use FacebookAds\Object\Fields\AdLabelFields;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Fields\AdImageFields;
use FacebookAds\Object\TargetingSpecs;
use FacebookAds\Object\Values\AdObjectives;
use FacebookAds\Object\Values\BillingEvents;
use FacebookAds\Object\Values\OptimizationGoals;
use FacebookAdsTest\Config\Config;

/** @var Config $config */

$ad_account_id = $config->accountId;
$image_path = $config->testImagePath;
$app_url = $config->appUrl;

// Create AdCampaign
$campaign = new AdCampaign(null, $ad_account_id);
$campaign->setData(array(
  AdCampaignFields::NAME => 'My First Campaign',
  AdCampaignFields::OBJECTIVE => AdObjectives::WEBSITE_CLICKS,
  AdCampaignFields::STATUS => AdCampaign::STATUS_PAUSED,
));

$campaign->create();

// Create AdSet
$adset = new AdSet(null, $ad_account_id);
$adset->setData(array(
  AdSetFields::NAME => 'My First AdSet',
  AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::REACH,
  AdSetFields::BILLING_EVENT => BillingEvents::IMPRESSIONS,
  AdSetFields::BID_AMOUNT => 2,
  AdSetFields::TARGETING => (new TargetingSpecs())->setData(array(
    'geo_locations' => array(
      'countries' => array('US'),
    ),
  )),
  AdSetFields::CAMPAIGN_STATUS => AdSet::STATUS_PAUSED,
  AdSetFields::DAILY_BUDGET => '150',
  AdSetFields::CAMPAIGN_GROUP_ID => $campaign->{AdCampaignFields::ID},
));

$adset->create();
$ad_set_id = $adset->{AdSetFields::ID};

// Create AdImage
$image = new AdImage(null, $ad_account_id);
$image->{AdImageFields::FILENAME} = $image_path;
$image->create();

// Create AdCreative
$creative = new AdCreative(null, $ad_account_id);
$creative->setData(array(
  AdCreativeFields::NAME => 'Sample Creative',
  AdCreativeFields::TITLE => 'Welcome to the Jungle',
  AdCreativeFields::BODY => 'We\'ve got fun \'n\' games',
  AdCreativeFields::IMAGE_HASH => $image->{AdImageFields::HASH},
  AdCreativeFields::OBJECT_URL => $app_url,
));

$creative->create();
$creative_id = $creative->{AdCreativeFields::ID};

// _DOC open [ADGROUP_CREATE]
// _DOC vars [ad_set_id:s, creative_id, ad_account_id:s]
// use FacebookAds\Object\AdGroup;
// use FacebookAds\Object\Fields\AdGroupFields;

$fields = array(
  AdGroupFields::NAME => 'My AdGroup',
  AdGroupFields::CAMPAIGN_ID => $ad_set_id,
  AdGroupFields::ADGROUP_STATUS => AdGroup::STATUS_PAUSED,
  AdGroupFields::CREATIVE => array(
    'creative_id' => $creative_id,
  ),
);

$adgroup = new AdGroup(null, $ad_account_id);
$adgroup->create($fields);
// _DOC close [ADGROUP_CREATE]

$ad_group_id = $adgroup->{AdGroupFields::ID};

// _DOC open [ADGROUP_READ]
// _DOC vars [ad_group_id]
// use FacebookAds\Object\AdGroup;
// use FacebookAds\Object\Fields\AdGroupFields;

$adgroup = new AdGroup($ad_group_id);
$adgroup->read(array(
  AdGroupFields::NAME,
));

// Output AdGroup name.
echo $adgroup->{AdGroupFields::NAME}.PHP_EOL;
// _DOC close [ADGROUP_READ]

// _DOC open [ADGROUP_READ_CONVERSION_BID]
// _DOC vars [ad_group_id]
// use FacebookAds\Object\AdGroup;
// use FacebookAds\Object\Fields\AdGroupFields;

$adgroup = new AdGroup($ad_group_id);
$adgroup->read(array(
  AdGroupFields::CONVERSION_SPECS,
  AdGroupFields::BID_AMOUNT,
));
// _DOC close [ADGROUP_READ_CONVERSION_BID]

// _DOC open [ADGROUP_UPDATE]
// _DOC vars [ad_group_id]
// use FacebookAds\Object\AdGroup;
// use FacebookAds\Object\Fields\AdGroupFields;

$adgroup = new AdGroup($ad_group_id);
$adgroup->{AdGroupFields::NAME} = 'New AdGroup Name';
$adgroup->update();
// _DOC close [ADGROUP_UPDATE]

// _DOC open [ADGROUP_UPDATE_WITH_REDOWNLOAD]
// _DOC vars [ad_group_id]
// use FacebookAds\Object\AdGroup;
// use FacebookAds\Object\Fields\AdGroupFields;

$adgroup = new AdGroup($ad_group_id);
$adgroup->setData(array(
  AdGroupFields::NAME => 'New AdGroup Name',
));
$adgroup->update(array(
  'redownload' => true,
));
// _DOC close [ADGROUP_UPDATE_WITH_REDOWNLOAD]

// _DOC open [ADGROUP_UPDATE_STATUS]
// _DOC vars [ad_group_id]
// use FacebookAds\Object\AdGroup;
// use FacebookAds\Object\Fields\AdGroupFields;

$adgroup = new AdGroup($ad_group_id);
$adgroup->update(array(
  AdGroupFields::ADGROUP_STATUS => AdGroup::STATUS_PAUSED,
));
// _DOC close [ADGROUP_UPDATE_STATUS]

$label = new AdLabel(null, $ad_account_id);
$label->{AdLabelFields::NAME} = 'ADGROUP_ADD_LABELS';
$label->create();

$ad_label_id = $label->{AdLabelFields::ID};

// _DOC open [ADGROUP_ADD_LABELS]
// _DOC vars [ad_group_id]
// use FacebookAds\Object\AdGroup;

$campaign = new AdGroup($ad_group_id);
$campaign->addAdLabels(array($ad_label_id));
// _DOC close [ADGROUP_ADD_LABELS]

// _DOC open [ADGROUP_REMOVE_LABELS]
// _DOC vars [ad_group_id]
// use FacebookAds\Object\AdGroup;

$campaign = new AdGroup($ad_group_id);
$campaign->removeAdLabels(array($ad_label_id));
// _DOC close [ADGROUP_REMOVE_LABELS]

$label->delete();

// _DOC open [ADGROUP_ARCHIVE]
// _DOC vars [ad_group_id]
// use FacebookAds\Object\AdGroup;

$adgroup = new AdGroup($ad_group_id);
$adgroup->archive();
// _DOC close [ADGROUP_ARCHIVE]

// _DOC open [ADGROUP_READ_FAILED_DELIVERY_CHECKS]
// _DOC vars [adgroup_id]
// use FacebookAds\Object\AdGroup;
// use FacebookAds\Object\Fields\AdGroupFields;

$adgroup = new AdGroup($ad_group_id);
$adgroup->read(array(
  AdGroupFields::FAILED_DELIVERY_CHECKS,
));

echo $adgroup->{AdGroupFields::FAILED_DELIVERY_CHECKS}.PHP_EOL;
// _DOC close [ADGROUP_READ_FAILED_DELIVERY_CHECKS]

// _DOC open [ADGROUP_DELETE]
// _DOC vars [ad_group_id]
// use FacebookAds\Object\AdGroup;

$adgroup = new AdGroup($ad_group_id);
$adgroup->delete();
// _DOC close [ADGROUP_DELETE]

$creative->delete();
$image->delete();

$image = new AdImage(null, $ad_account_id);
$image->{AdImageFields::FILENAME} = $image_path;
$image->create();
$image_hash = $image->{AdImageFields::HASH};

// _DOC open [ADGROUP_CREATE_INLINE_CREATIVE]
// _DOC vars [ad_account_id:s, image_hash:s, ad_set_id:s]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\AdGroup;
// use FacebookAds\Object\TargetingSpecs;
// use FacebookAds\Object\Fields\AdCreativeFields;
// use FacebookAds\Object\Fields\AdImageFields;
// use FacebookAds\Object\Fields\AdGroupFields;

// First, upload the ad image that you will use in your ad creative
// Please refer to Ad Image Create for details.

// Then, use the image hash returned from above
$creative = new AdCreative(null, $ad_account_id);
$creative->setData(array(
  AdCreativeFields::TITLE => 'My Test Creative',
  AdCreativeFields::BODY => 'My Test Ad Creative Body',
  AdCreativeFields::OBJECT_URL => 'https://www.facebook.com/facebook',
  AdCreativeFields::IMAGE_HASH => $image_hash,
));

// Finally, create your ad along with ad creative.
// Please note that the ad creative is not created independently, rather its
// data structure is appended to the ad group
$adgroup = new AdGroup(null, $ad_account_id);
$adgroup->setData(array(
  AdGroupFields::NAME => 'My Ad',
  AdGroupFields::CAMPAIGN_ID => $ad_set_id,
  AdGroupFields::CREATIVE => $creative,
  AdGroupFields::ADGROUP_STATUS => AdGroup::STATUS_PAUSED,
));
$adgroup->create();
// _DOC close [ADGROUP_CREATE_INLINE_CREATIVE]

// fetch the id of the generated creative
$adgroup->read(array(
  AdGroupFields::CREATIVE,
));
$creative->{AdCreativeFields::ID} = $adgroup->{AdGroupFields::CREATIVE}['id'];

// _DOC open [ADGROUP_GET_TARGETING_DESCRIPTION]
// _DOC vars [ad_group_id]
// use FacebookAds\Object\AdGroup;

$adgroup = new AdGroup($ad_group_id);
$targeting_description = $adgroup->getTargetingDescription();

// Output targeting description
foreach ($targeting_description->targetingsentencelines as $description) {
  echo $description['content'].PHP_EOL;
  foreach ($description['children'] as $child) {
    echo "\t".$child.PHP_EOL;
  }
}
// _DOC close [ADGROUP_GET_TARGETING_DESCRIPTION]

$adgroup->delete();
$adset->delete();
$campaign->delete();
$creative->delete();
$image->delete();
