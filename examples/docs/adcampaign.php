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
use FacebookAds\Object\AdGroup;
use FacebookAds\Object\AdLabel;
use FacebookAds\Object\Fields\AdCampaignFields;
use FacebookAds\Object\Fields\AdLabelFields;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Fields\AdGroupFields;
use FacebookAds\Object\Fields\ProductCatalogFields;
use FacebookAds\Object\ProductCatalog;
use FacebookAds\Object\Values\AdObjectives;
use FacebookAds\Object\Values\AdBuyingTypes;
use FacebookAdsTest\Config\Config;

/** @var Config $config */

$ad_account_id = $config->accountId;
$business_id = $config->businessId;

// _DOC open [ADCAMPAIGN_CREATE]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdCampaign;
// use FacebookAds\Object\Fields\AdCampaignFields;

$campaign = new AdCampaign(null, $ad_account_id);
$campaign->setData(array(
  AdCampaignFields::NAME => 'My campaign',
  AdCampaignFields::STATUS => AdCampaign::STATUS_PAUSED,
  AdCampaignFields::OBJECTIVE => 'NONE',
));

$campaign->create();
// _DOC close [ADCAMPAIGN_CREATE]

$campaign_group_id = $campaign->{AdCampaignFields::ID};

// _DOC open [ADCAMPAIGN_READ]
// _DOC vars [campaign_group_id]
// use FacebookAds\Object\AdCampaign;
// use FacebookAds\Object\Fields\AdCampaignFields;

$campaign = new AdCampaign($campaign_group_id);
$campaign->read(array(
  AdCampaignFields::ID,
  AdCampaignFields::NAME,
  AdCampaignFields::OBJECTIVE,
));
// _DOC close [ADCAMPAIGN_READ]

// _DOC open [ADCAMPAIGN_UPDATE]
// _DOC vars [campaign_group_id]
// use FacebookAds\Object\AdCampaign;
// use FacebookAds\Object\Fields\AdCampaignFields;

$campaign = new AdCampaign($campaign_group_id);
$campaign->{AdCampaignFields::NAME} = 'My new campaign name';
$campaign->update();
// _DOC close [ADCAMPAIGN_UPDATE]

// _DOC open [ADCAMPAIGN_VALIDATE]
// _DOC vars [campaign_group_id]
// use FacebookAds\Object\AdCampaign;
// use FacebookAds\Object\Fields\AdCampaignFields;

$campaign = new AdCampaign($campaign_group_id);
$campaign->{AdCampaignFields::NAME} = 'My new campaign name';
$campaign->validate();
$campaign->update();
// _DOC close [ADCAMPAIGN_VALIDATE]

// _DOC open [ADCAMPAIGN_GET_ADSETS]
// _DOC vars [campaign_group_id]
// use FacebookAds\Object\AdCampaign;
// use FacebookAds\Object\Fields\AdSetFields;

$campaign = new AdCampaign($campaign_group_id);
$adsets = $campaign->getAdSets(array(
  AdSetFields::NAME,
  AdSetFields::CAMPAIGN_STATUS,
));

// This will output the name of all fetched ad sets.
foreach ($adsets as $adset) {
  echo $adset->{AdSetFields::NAME}.PHP_EOL;
}
// _DOC close [ADCAMPAIGN_GET_ADSETS]

$label = new AdLabel(null, $ad_account_id);
$label->{AdLabelFields::NAME} = 'ADCAMPAIGN_ADD_LABELS';
$label->create();

$ad_label_id = $label->{AdLabelFields::ID};

// _DOC open [ADCAMPAIGN_ADD_LABELS]
// _DOC vars [campaign_group_id]
// use FacebookAds\Object\AdCampaign;

$campaign = new AdCampaign($campaign_group_id);
$campaign->addAdLabels(array($ad_label_id));
// _DOC close [ADCAMPAIGN_ADD_LABELS]

// _DOC open [ADCAMPAIGN_REMOVE_LABELS]
// _DOC vars [campaign_group_id]
// use FacebookAds\Object\AdCampaign;

$campaign = new AdCampaign($campaign_group_id);
$campaign->removeAdLabels(array($ad_label_id));
// _DOC close [ADCAMPAIGN_REMOVE_LABELS]

$label->delete();

// _DOC open [ADCAMPAIGN_DELETE]
// _DOC vars [campaign_group_id]
// use FacebookAds\Object\AdCampaign;

$campaign = new AdCampaign($campaign_group_id);
$campaign->delete();
// _DOC close [ADCAMPAIGN_DELETE]


// _DOC open [ADCAMPAIGN_CREATE_HOMEPAGE]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdCampaign;
// use FacebookAds\Object\AdCampaignFields;
// use FacebookAds\Object\Values\AdBuyingTypes;
// use FacebookAds\Object\Values\AdObjectives;

$campaign = new AdCampaign(null, $ad_account_id);
$campaign->setData(array(
  AdCampaignFields::NAME => 'Homepage Campaign',
  AdCampaignFields::OBJECTIVE => AdObjectives::NONE,
  AdCampaignFields::BUYING_TYPE => AdBuyingTypes::FIXED_CPM,
  AdCampaignFields::STATUS => AdCampaign::STATUS_ACTIVE,
));

$campaign->create();
// _DOC close [ADCAMPAIGN_CREATE_HOMEPAGE]

// _DOC open [ADCAMPAIGN_GET_ADGROUPS]
// _DOC vars [campaign_group_id]
// use FacebookAds\Object\AdCampaign;
// use FacebookAds\Object\Fields\AdGroupFields;

$adcampaign = new AdCampaign($campaign_group_id);
$adgroups = $adcampaign->getAdGroups(array(
  AdGroupFields::NAME,
));

// Outputs names of Ad Groups.
foreach ($adgroups as $adgroup) {
  echo $adgroup->{AdGroupFields::NAME}.PHP_EOL;
}
// _DOC close [ADCAMPAIGN_GET_ADGROUPS]

// _DOC open [ADCAMPAIGN_GET_ADGROUPS_WITH_STATUS_ARCHIVED]
// _DOC vars [campaign_group_id]
// use FacebookAds\Object\AdCampaign;
// use FacebookAds\Object\Fields\AdGroupFields;
// use FacebookAds\Object\AdGroup;

$adcampaign = new AdCampaign($campaign_group_id);
$params = array(
   AdGroupFields::ADGROUP_STATUS => array(
     AdGroup::STATUS_ARCHIVED,
   ),
);
$adgroups = $adcampaign->getAdGroups(
  array(AdGroupFields::NAME),
  $params);

// Outputs names of Ads.
foreach ($adgroups as $adgroup) {
  echo $adgroup->{AdGroupFields::NAME}.PHP_EOL;
}
// _DOC close [ADCAMPAIGN_GET_ADGROUPS_WITH_STATUS_ARCHIVED]

$campaign->delete();

// _DOC open [ADCAMPAIGN_CREATE_WEBSITE_CONVERSIONS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdCampaign;
// use FacebookAds\Object\Fields\AdCampaignFields;
// use FacebookAds\Object\Values\AdObjectives;

$campaign = new AdCampaign(null, $ad_account_id);
$campaign->setData(array(
  AdCampaignFields::NAME => 'My First Campaign',
  AdCampaignFields::STATUS => AdCampaign::STATUS_PAUSED,
  AdCampaignFields::OBJECTIVE => AdObjectives::WEBSITE_CONVERSIONS,
));

$campaign->create();
// _DOC close [ADCAMPAIGN_CREATE_WEBSITE_CONVERSIONS]
$campaign->delete();

// _DOC open [ADCAMPAIGN_CREATE_VIDEO_VIEWS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdCampaign;
// use FacebookAds\Object\AdCampaignFields;
// use FacebookAds\Object\Values\AdObjectives;

$campaign = new AdCampaign(null, $ad_account_id);
$campaign->setData(array(
  AdCampaignFields::NAME => 'Video Views Campaign',
  AdCampaignFields::OBJECTIVE => AdObjectives::VIDEO_VIEWS,
  AdCampaignFields::STATUS => AdCampaign::STATUS_PAUSED,
));

$campaign->create();
// _DOC close [ADCAMPAIGN_CREATE_VIDEO_VIEWS]

$campaign->delete();

// _DOC open [ADCAMPAIGN_CREATE_LOCAL_AWARENESS]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdCampaign;
// use FacebookAds\Object\AdCampaignFields;
// use FacebookAds\Object\Values\AdObjectives;

$campaign = new AdCampaign(null, $ad_account_id);
$campaign->setData(array(
  AdCampaignFields::NAME => 'Local awareness campaign',
  AdCampaignFields::OBJECTIVE => AdObjectives::LOCAL_AWARENESS,
  AdCampaignFields::STATUS => AdCampaign::STATUS_PAUSED,
));

$campaign->create();
// _DOC close [ADCAMPAIGN_CREATE_LOCAL_AWARENESS]

$campaign->delete();

$product_catalog = new ProductCatalog(null, $business_id);
$product_catalog->setData(array(
  ProductCatalogFields::NAME => 'Test Catalog',
));
$product_catalog->create();
$product_catalog_id = $product_catalog->{ProductCatalogFields::ID};

// _DOC open [ADCAMPAIGN_CREATE_OBJECTIVE_PRODUCT_CATELOG_SALES]
// _DOC vars [ad_account_id:s, product_catalog_id]
// use FacebookAds\Object\AdCampaign;
// use FacebookAds\Object\Fields\AdCampaignFields;
// use FacebookAds\Object\Values\AdObjectives;

$campaign = new AdCampaign(null, $ad_account_id);
$campaign->setData(array(
  AdCampaignFields::NAME => 'Product Catalog Sales Campaign Group',
  AdCampaignFields::OBJECTIVE => AdObjectives::PRODUCT_CATALOG_SALES,
  AdCampaignFields::STATUS => AdCampaign::STATUS_PAUSED,
  AdCampaignFields::PROMOTED_OBJECT => array(
    'product_catalog_id' => $product_catalog_id,
  ),
));

$campaign->create();
// _DOC close [ADCAMPAIGN_CREATE_OBJECTIVE_PRODUCT_CATELOG_SALES]
$campaign->delete();
$product_catalog->delete();
