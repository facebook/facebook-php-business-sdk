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

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\AdCampaign;
use FacebookAds\Object\AdLabel;
use FacebookAds\Object\AdSet;
use FacebookAds\Object\Fields\AdCampaignFields;
use FacebookAds\Object\Fields\AdLabelFields;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Fields\AdGroupFields;
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Fields\ProductAudienceFields;
use FacebookAds\Object\Fields\ProductCatalogFields;
use FacebookAds\Object\Fields\ProductSetFields;
use FacebookAds\Object\Fields\TargetingSpecsFields;
use FacebookAds\Object\ProductAudience;
use FacebookAds\Object\ProductCatalog;
use FacebookAds\Object\ProductSet;
use FacebookAds\Object\TargetingSpecs;
use FacebookAds\Object\Values\AdObjectives;
use FacebookAds\Object\Values\AdBuyingTypes;
use FacebookAds\Object\Values\BillingEvents;
use FacebookAds\Object\Values\OptimizationGoals;
use FacebookAds\Object\Values\PageTypes;
use FacebookAdsTest\Config\Config;

/** @var Config $config */

$ad_account_id = $config->accountId;
$page_id = $config->pageId;
$business_id = $config->businessId;

// Create AdCampaign
$campaign = new AdCampaign(null, $ad_account_id);
$campaign->setData(array(
  AdCampaignFields::NAME => 'My First Campaign',
  AdCampaignFields::OBJECTIVE => AdObjectives::WEBSITE_CLICKS,
  AdCampaignFields::STATUS => AdCampaign::STATUS_PAUSED,
));

$campaign->create();
$campaign_group_id = $campaign->{AdCampaignFields::ID};

// _DOC open [ADSET_CREATE]
// _DOC vars [campaign_group_id, ad_account_id:s]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\TargetingSpecs;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Fields\TargetingSpecsFields;
// use FacebookAds\Object\Values\BillingEvents;
// use FacebookAds\Object\Values\OptimizationGoals;

$adset = new AdSet(null, $ad_account_id);
$adset->setData(array(
  AdSetFields::NAME => 'My Ad Set',
  AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::REACH,
  AdSetFields::BILLING_EVENT => BillingEvents::IMPRESSIONS,
  AdSetFields::BID_AMOUNT => 2,
  AdSetFields::CAMPAIGN_STATUS => AdSet::STATUS_ACTIVE,
  AdSetFields::DAILY_BUDGET => 1000,
  AdSetFields::CAMPAIGN_GROUP_ID => $campaign_group_id,
  AdSetFields::TARGETING => (new TargetingSpecs())->setData(array(
    TargetingSpecsFields::GEO_LOCATIONS => array(
      'countries' => array('US'),
    ),
  )),
));
$adset->create();
// _DOC close [ADSET_CREATE]

$adset_data = $adset->getData();
unset($adset_data[AdSetFields::ID]);

$ad_set_id = $adset->{AdSetFields::ID};

// _DOC open [ADSET_READ]
// _DOC vars [ad_set_id:s]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdSetFields;

$adset = new AdSet($ad_set_id);
$adset->read(array(
  AdSetFields::NAME,
  AdSetFields::CAMPAIGN_STATUS,
));

echo $adset->{AdSetFields::NAME}.PHP_EOL;
echo $adset->{AdSetFields::CAMPAIGN_STATUS}.PHP_EOL;
// _DOC close [ADSET_READ]

// _DOC open [ADSET_READ_WITH_DATE_FORMAT]
// _DOC vars [ad_set_id:s]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdSetFields;

$adset = new AdSet($ad_set_id);
$fields = array(
  AdSetFields::START_TIME,
);
$params = array(
  'date_format' => 'U',
);
$adset->read($fields, $params);

// Print out start time in UNIX timestamp format.
echo $adset->{AdSetFields::START_TIME}.PHP_EOL;
// _DOC close [ADSET_READ_WITH_DATE_FORMAT]

// _DOC open [ADSET_READ_DATA_FORMAT]
// _DOC vars [ad_set_id:s]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdSetFields;

$adset = new AdSet($ad_set_id);
$params = array(
  'date_format' => 'U',
);
$adset->read(array(
  AdSetFields::START_TIME,
  AdSetFields::END_TIME,
  AdSetFields::CAMPAIGN_STATUS,
  AdSetFields::CAMPAIGN_GROUP_ID,
), $params);

echo $adset->{AdSetFields::CAMPAIGN_STATUS}.PHP_EOL;
// _DOC close [ADSET_READ_DATA_FORMAT]

$adset1_id = $ad_set_id;

$adset2 = new AdSet(null, $ad_account_id);
$adset2->setData($adset_data);
$adset2->create();
$adset2_id = $adset2->{AdSetFields::ID};

$adset3 = new AdSet(null, $ad_account_id);
$adset3->setData($adset_data);
$adset3->create();
$adset3_id = $adset3->{AdSetFields::ID};

// _DOC open [ADSET_MULTI_READ]
// _DOC vars [adset1_id, adset2_id, adset3_id]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdSetFields;

$ad_set_ids = array($adset1_id, $adset2_id, $adset3_id);
$fields = array(AdSetFields::NAME, AdSetFields::CAMPAIGN_STATUS);
$adsets = AdSet::readIds($ad_set_ids, $fields);

// This will output the name of all fetched ad sets.
foreach ($adsets as $adset) {
  echo $adset->{AdSetFields::NAME}.PHP_EOL;
}
// _DOC close [ADSET_MULTI_READ]

$adset3->delete();

// _DOC open [ADSET_MULTI_READ_END_TIME]
// _DOC vars [adset1_id, adset2_id]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdSetFields;

$adsets = AdSet::readIds(
  array($adset1_id, $adset2_id),
  array(AdSetFields::END_TIME));

// Output end times.
foreach ($adsets as $adset) {
  echo $adset->{AdSetFields::END_TIME}.PHP_EOL;
}
// _DOC close [ADSET_MULTI_READ_END_TIME]

$adset2->delete();

// _DOC open [ADSET_GET_CONNECTIONS]
// _DOC vars [ad_set_id:s]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdGroupFields;
// use FacebookAds\Object\Fields\AdCreativeFields;

$adset = new AdSet($ad_set_id);
$adgroups = $adset->getAdGroups(array(
  AdGroupFields::NAME,
));
$adcreatives = $adset->getAdCreatives(array(
  AdCreativeFields::TITLE,
));
// _DOC close [ADSET_GET_CONNECTIONS]

// _DOC open [ADSET_GET_ADGROUPS]
// _DOC vars [ad_set_id:s]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdGroupFields;

$adset = new AdSet($ad_set_id);
$adgroups = $adset->getAdGroups(array(
  AdGroupFields::NAME,
));

// Outputs names of Ad Groups.
foreach ($adgroups as $adgroup) {
  echo $adgroup->{AdGroupFields::NAME};
}
// _DOC close [ADSET_GET_ADGROUPS]

// _DOC open [ADSET_GET_ADCREATIVES]
// _DOC vars [ad_set_id:s]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Fields\AdCreativeFields;

$adset = new AdSet($ad_set_id);
$adset->read(array(AdSetFields::NAME));

$adcreatives = $adset->getAdCreatives(array(AdCreativeFields::NAME));
// _DOC close [ADSET_GET_ADCREATIVES]

$label = new AdLabel(null, $ad_account_id);
$label->{AdLabelFields::NAME} = 'ADSET_ADD_LABELS';
$label->create();

$ad_label_id = $label->{AdLabelFields::ID};

// _DOC open [ADSET_ADD_LABELS]
// _DOC vars [ad_set_id]
// use FacebookAds\Object\AdSet;

$campaign = new AdSet($ad_set_id);
$campaign->addAdLabels(array($ad_label_id));
// _DOC close [ADSET_ADD_LABELS]

// _DOC open [ADSET_REMOVE_LABELS]
// _DOC vars [ad_set_id]
// use FacebookAds\Object\AdSet;

$campaign = new AdSet($ad_set_id);
$campaign->removeAdLabels(array($ad_label_id));
// _DOC close [ADSET_REMOVE_LABELS]

$label->delete();

// _DOC open [ADSET_DELETE]
// _DOC vars [ad_set_id:s]
// use FacebookAds\Object\AdSet;

$adset = new AdSet($ad_set_id);
$adset->delete();
// _DOC close [ADSET_DELETE]

// _DOC open [ADSET_CREATE_DAILY_BUDGET]
// _DOC vars [ad_account_id:s, campaign_group_id]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\TargetingSpecs;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Fields\TargetingSpecsFields;
// use FacebookAds\Object\Values\BillingEvents;
// use FacebookAds\Object\Values\OptimizationGoals;

$adset = new AdSet(null, $ad_account_id);
$adset->setData(array(
  AdSetFields::NAME => 'DailyBudgetSet',
  AdSetFields::DAILY_BUDGET => 10000,
  AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::POST_ENGAGEMENT,
  AdSetFields::BILLING_EVENT => BillingEvents::POST_ENGAGEMENT,
  AdSetFields::BID_AMOUNT => 75,
  AdSetFields::TARGETING => (new TargetingSpecs())->setData(array(
    TargetingSpecsFields::GEO_LOCATIONS => array(
      'countries' => array('US'),
    ),
  )),
  AdSetFields::CAMPAIGN_STATUS => AdSet::STATUS_PAUSED,
  AdSetFields::CAMPAIGN_GROUP_ID => $campaign_group_id,
));

$adset->create();
// _DOC close [ADSET_CREATE_DAILY_BUDGET]

$adset->delete();

// _DOC open [ADSET_CREATE_LIFETIME_BUDGET]
// _DOC vars [ad_account_id:s, campaign_group_id]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\TargetingSpecs;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Fields\TargetingSpecsFields;
// use FacebookAds\Object\Values\BillingEvents;
// use FacebookAds\Object\Values\OptimizationGoals;

$adset = new AdSet(null, $ad_account_id);
$adset->setData(array(
  AdSetFields::NAME => 'LifetimeBudgetSet',
  AdSetFields::LIFETIME_BUDGET => 100000,
  AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::POST_ENGAGEMENT,
  AdSetFields::BILLING_EVENT => BillingEvents::POST_ENGAGEMENT,
  AdSetFields::BID_AMOUNT => 1500,
  AdSetFields::TARGETING => (new TargetingSpecs())->setData(array(
    TargetingSpecsFields::GEO_LOCATIONS => array(
      'countries' => array('US'),
    ),
  )),
  AdSetFields::CAMPAIGN_STATUS => AdSet::STATUS_PAUSED,
  AdSetFields::CAMPAIGN_GROUP_ID => $campaign_group_id,
  AdSetFields::END_TIME =>
    (new \DateTime("+1 week"))->format(\DateTime::ISO8601),
));

$adset->create();
// _DOC close [ADSET_CREATE_LIFETIME_BUDGET]

$adset->delete();

$connections_id = $config->pageId;
// _DOC open [ADSET_CREATE_APP_CONNECTIONS_TARGETING]
// _DOC vars [ad_account_id:s, connections_id, campaign_group_id]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\TargetingSpecs;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Fields\TargetingSpecsFields;
// use FacebookAds\Object\Values\BillingEvents;
// use FacebookAds\Object\Values\OptimizationGoals;

$adset = new AdSet(null, $ad_account_id);
$adset->setData(array(
  AdSetFields::NAME => 'Android Connections Targeting - Ad Set',
  AdSetFields::DAILY_BUDGET => 10000,
  AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::POST_ENGAGEMENT,
  AdSetFields::BILLING_EVENT => BillingEvents::POST_ENGAGEMENT,
  AdSetFields::BID_AMOUNT => 1500,
  AdSetFields::TARGETING => (new TargetingSpecs())->setData(array(
    TargetingSpecsFields::GEO_LOCATIONS => array(
      'countries' => array('US'),
    ),
    TargetingSpecsFields::CONNECTIONS => array($connections_id),
    TargetingSpecsFields::USER_OS => array('Android'),
  )),
  AdSetFields::CAMPAIGN_STATUS => AdSet::STATUS_ACTIVE,
  AdSetFields::CAMPAIGN_GROUP_ID => $campaign_group_id,
));

$adset->create();
// _DOC close [ADSET_CREATE_APP_CONNECTIONS_TARGETING]

$adset->delete();
$campaign->delete();

$campaign = new AdCampaign(null, $ad_account_id);
$campaign->setData(array(
  AdCampaignFields::NAME => 'My First Homepage Campaign',
  AdCampaignFields::OBJECTIVE => AdObjectives::NONE,
  AdCampaignFields::BUYING_TYPE => AdBuyingTypes::FIXED_CPM,
  AdCampaignFields::STATUS => AdCampaign::STATUS_PAUSED,
));

$campaign->create();
$campaign_group_id = $campaign->id;

// _DOC open [ADSET_CREATE_HOMEPAGE]
// _DOC vars [ad_account_id:s, campaign_group_id]
// use FacebookAds\Object\AdAccount;
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\TargetingSpecs;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Fields\TargetingSpecsFields;
// use FacebookAds\Object\Values\BillingEvents;
// use FacebookAds\Object\Values\OptimizationGoals;
// use FacebookAds\Object\Values\PageTypes;

$account = new AdAccount($ad_account_id);
$ratecards = $account->getRateCards();
$country = $ratecards->current()->country;
$rate = (int) $ratecards->current()->rate;

$impressions = 5000;
$lifetime_budget = $rate * $impressions;

$adset = new AdSet(null, $ad_account_id);
$adset->setData(array(
  AdSetFields::NAME => 'Adset Homepage Ads',
  AdSetFields::CAMPAIGN_GROUP_ID => $campaign_group_id,
  AdSetFields::CAMPAIGN_STATUS => AdSet::STATUS_ACTIVE,
  AdSetFields::LIFETIME_BUDGET => $lifetime_budget,
  AdSetFields::LIFETIME_IMPS => $impressions,
  AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::REACH,
  AdSetFields::BILLING_EVENT => BillingEvents::IMPRESSIONS,
  AdSetFields::BID_AMOUNT => 100,
  AdSetFields::TARGETING => (new TargetingSpecs())->setData(array(
    TargetingSpecsFields::PAGE_TYPES => array(PageTypes::LOGOUT),
    TargetingSpecsFields::GEO_LOCATIONS => array(
      'countries' => array($country),
    ),
  )),
  AdSetFields::END_TIME =>
    (new \DateTime('+1 week'))->format(\DateTime::ISO8601),
));

$adset->create();
// _DOC close [ADSET_CREATE_HOMEPAGE]

$adset->delete();
$campaign->delete();

$campaign = new AdCampaign(null, $ad_account_id);
$campaign->setData(array(
  AdCampaignFields::NAME => 'My CPC Campaign',
  AdCampaignFields::OBJECTIVE => AdObjectives::PAGE_LIKES,
  AdCampaignFields::BUYING_TYPE => AdBuyingTypes::AUCTION,
  AdCampaignFields::STATUS => AdCampaign::STATUS_PAUSED,
));

$campaign->create();
$campaign_group_id = $campaign->id;

// _DOC open [ADSET_CREATE_CPC_PROMOTING_PAGE]
// _DOC vars [ad_account_id:s, page_id:s, campaign_group_id:s]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\TargetingSpecs;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Values\BidTypes;
// use FacebookAds\Object\Fields\BidInfoFields;
// use FacebookAds\Object\Fields\TargetingSpecsFields;
// use FacebookAds\Object\Fields\PageTypes;

$adset = new AdSet(null, $ad_account_id);
$adset->setData(array(
  AdSetFields::NAME => 'My Adset',
  AdSetFields::CAMPAIGN_STATUS => AdSet::STATUS_PAUSED,
  AdSetFields::DAILY_BUDGET => 10000,
  AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::PAGE_LIKES,
  AdSetFields::BID_AMOUNT => 150,
  AdSetFields::BILLING_EVENT => BillingEvents::PAGE_LIKES,
  AdSetFields::TARGETING => (new TargetingSpecs())->setData(array(
    TargetingSpecsFields::GEO_LOCATIONS => array(
      'countries' => array('US'),
    ),
    TargetingSpecsFields::PAGE_TYPES => array(
      PageTypes::DESKTOP_FEED,
      PageTypes::MOBILE_FEED,
    ),
  )),
  AdSetFields::CAMPAIGN_GROUP_ID => $campaign_group_id,
  AdSetFields::START_TIME =>
    (new \DateTime())->format(\DateTime::ISO8601),
  AdSetFields::PROMOTED_OBJECT => array('page_id' => $page_id),
));

$adset->create();
// _DOC close [ADSET_CREATE_CPC_PROMOTING_PAGE]

$adset->delete();
$campaign->delete();

$campaign = new AdCampaign(null, $ad_account_id);
$campaign->setData(array(
  AdCampaignFields::NAME => 'Local awareness campaign',
  AdCampaignFields::OBJECTIVE => AdObjectives::LOCAL_AWARENESS,
  AdCampaignFields::STATUS => AdCampaign::STATUS_PAUSED,
));

$campaign->create();

$campaign_group_id = $campaign->{AdCampaignFields::ID};

// _DOC open [ADSET_CREATE_LOCAL_AWARENESS]
// _DOC vars [ad_account_id:s, campaign_group_id]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Fields\TargetingSpecsFields;
// use FacebookAds\Object\TargetingSpecs;
// use FacebookAds\Object\Values\BidTypes;
// use FacebookAds\Object\Values\PageTypes;

$adset = new AdSet(null, $ad_account_id);
$adset->setData(array(
  AdSetFields::NAME => 'Local awareness adset',
  AdSetFields::DAILY_BUDGET => 10000,
  AdSetFields::CAMPAIGN_STATUS => AdSet::STATUS_PAUSED,
  AdSetFields::CAMPAIGN_GROUP_ID => $campaign_group_id,
  AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::REACH,
  AdSetFields::BILLING_EVENT => BillingEvents::IMPRESSIONS,
  AdSetFields::BID_AMOUNT => 300,
  AdSetFields::TARGETING => (new TargetingSpecs())->setData(array(
    TargetingSpecsFields::PAGE_TYPES => array(PageTypes::MOBILE_FEED),
    TargetingSpecsFields::GEO_LOCATIONS => array(
      'custom_locations' => array(
        array(
          'latitude' => 37.48327,
          'longitude' => -122.15033,
          'radius' => 10,
          'distance_unit' => 'mile',
          'address_string' => '1601 Willow Road, Menlo Park, CA 94025',
        ),
      ),
      'location_types' => array(
        'home',
        'recent',
      ),
    ),
    TargetingSpecsFields::EXCLUDED_GEO_LOCATIONS => array(
      'zips' => array(
        array(
          'key' => 'US:94040',
        ),
      ),
    ),
  ))
));

$adset->create();
// _DOC close [ADSET_CREATE_LOCAL_AWARENESS]

$adset->delete();
$campaign->delete();

// Create AdCampaign
$campaign = new AdCampaign(null, $ad_account_id);
$campaign->setData(array(
  AdCampaignFields::NAME => 'My First Campaign',
  AdCampaignFields::OBJECTIVE => AdObjectives::WEBSITE_CLICKS,
  AdCampaignFields::STATUS => AdCampaign::STATUS_PAUSED,
));

$campaign->create();
$campaign_group_id = $campaign->{AdCampaignFields::ID};

$product_catalog = new ProductCatalog(null, $business_id);
$product_catalog->setData(array(
  ProductCatalogFields::NAME => 'Test Catalog',
));
$product_catalog->create();
$catalog_id = $product_catalog->{ProductCatalogFields::ID};

$product_set = new ProductSet(null, $catalog_id);
$product_set->setData(array(
  ProductSetFields::NAME => 'Test Catalog Set',
));
$product_set->create();
$product_set_id = $product_set->{ProductSetFields::ID};

$product_audience = new ProductAudience(null, $ad_account_id);
$product_audience->setData(array(
  ProductAudienceFields::NAME => 'Test Custom Audience',
  ProductAudienceFields::PRODUCT_SET_ID => $product_set_id,
  ProductAudienceFields::INCLUSIONS => array(array(
    'retention_seconds' => 86400,
    'rule' => array('event' => array('eq' => 'AddToCart')),
  )),
));
$product_audience->create();
$dynamic_audience_id = $product_audience->{ProductAudienceFields::ID};

// _DOC open [ADSET_CREATE_PRODUCT_CATALOG_SALES]
// _DOC vars [ad_account_id:s, campaign_group_id, dynamic_audience_id, product_set_id]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Fields\TargetingSpecsFields;
$adset = new AdSet(null, $ad_account_id);

$adset->setData(array(
  AdSetFields::NAME => 'Product Catalog Sales Adset',
  AdSetFields::BID_AMOUNT => 3000,
  AdSetFields::BILLING_EVENT => BillingEvents::LINK_CLICKS,
  AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::LINK_CLICKS,
  AdSetFields::CAMPAIGN_STATUS => AdCampaign::STATUS_ACTIVE,
  AdSetFields::DAILY_BUDGET => 15000,
  AdSetFields::CAMPAIGN_GROUP_ID => $campaign_group_id,
  AdSetFields::TARGETING => array(
    TargetingSpecsFields::GEO_LOCATIONS => array(
      'countries' => array('US'),
    ),
    TargetingSpecsFields::DYNAMIC_AUDIENCE_IDS => array($dynamic_audience_id),
  ),
  AdSetFields::PROMOTED_OBJECT => array(
    'product_set_id' => $product_set_id,
    ),
));

$adset->create();
// _DOC close [ADSET_CREATE_PRODUCT_CATALOG_SALES]
$adset->delete();

// _DOC open [ADSET_CREATE_PRODUCT_CATALOG_SALES_VIEWED_DAYS_RETENTION]
// _DOC vars [ad_account_id:s, campaign_group_id, product_set_id]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Fields\TargetingSpecsFields;
$adset = new AdSet(null, $ad_account_id);

$adset->setData(array(
AdSetFields::NAME => 'Product Catalog Sales Adset',
AdSetFields::BID_AMOUNT => 3000,
AdSetFields::BILLING_EVENT => BillingEvents::LINK_CLICKS,
AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::LINK_CLICKS,
AdSetFields::CAMPAIGN_STATUS => AdCampaign::STATUS_ACTIVE,
AdSetFields::DAILY_BUDGET => 15000,
AdSetFields::CAMPAIGN_GROUP_ID => $campaign_group_id,
AdSetFields::TARGETING => array(
  TargetingSpecsFields::GEO_LOCATIONS => array(
    'countries' => array('US'),
  ),
  TargetingSpecsFields::PRODUCT_AUDIENCE_SPECS => array(array(
    'product_set_id' => $product_set_id,
    'inclusions' => array(array(
      'retention_seconds' => 432000,
      'rule' =>  array('event' => array('eq' => 'ViewContent')),
    )),
    'exclusions' => array(array(
      'retention_seconds' => 432000,
      'rule' =>  array('event' => array('eq' => 'Purchase')),
    )),
  )),
  TargetingSpecsFields::EXCLUDED_PRODUCT_AUDIENCE_SPECS => array(array(
    'product_set_id' => $product_set_id,
    'inclusions' => array(array(
      'retention_seconds' => 259200,
      'rule' =>  array('event' => array('eq' => 'ViewContent')),
    )),
  )),
),
AdSetFields::PROMOTED_OBJECT => array(
  'product_set_id' => $product_set_id,
),
AdSetFields::PRODUCT_AD_BEHAVIOR => 'FALL_BACK_TO_FB_RECOMMENDATIONS',
));

$adset->create();
// _DOC close [ADSET_CREATE_PRODUCT_CATALOG_SALES_VIEWED_DAYS_RETENTION]
$adset->delete();

// _DOC open [ADSET_CREATE_DYNAMIC_PROSPECTIING]
// _DOC vars [ad_account_id:s, product_set_id, campaign_group_id]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Fields\TargetingSpecsFields;
$adset = new AdSet(null, $ad_account_id);

$adset->setData(array(
AdSetFields::NAME => 'Case 1 Adset',
AdSetFields::BID_AMOUNT => 3000,
AdSetFields::BILLING_EVENT => BillingEvents::LINK_CLICKS,
AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::LINK_CLICKS,
AdSetFields::CAMPAIGN_STATUS => AdCampaign::STATUS_ACTIVE,
AdSetFields::DAILY_BUDGET => 15000,
AdSetFields::CAMPAIGN_GROUP_ID => $campaign_group_id,
AdSetFields::TARGETING => array(
  TargetingSpecsFields::GEO_LOCATIONS => array(
    'countries' => array('US'),
  ),
  TargetingSpecsFields::INTERESTS => array(
    array('id' => 6003397425735, 'name' => 'Tennis'),
  ),
),
AdSetFields::PROMOTED_OBJECT => array(
  'product_set_id' => $product_set_id,
),
AdSetFields::PRODUCT_AD_BEHAVIOR => 'FALL_BACK_TO_FB_RECOMMENDATIONS',
));

$adset->create();
// _DOC close [ADSET_CREATE_DYNAMIC_PROSPECTIING]
$adset->delete();

// _DOC open [ADSET_CREATE_OCPM]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Values\BillingEvents;
// use FacebookAds\Object\Values\OptimizationGoals;

// Create an Ad Set with bid_type set to oCPM
$adset = new AdSet(null, $account_id);
$adset->setData(array(
  AdSetFields::NAME => 'My Ad Set for oCPM',
  AdSetFields::BILLING_EVENT => BillingEvents::IMPRESSIONS,
  AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::CLICKS,
  AdSetFields::BID_AMOUNT => 150,
  AdSetFields::CAMPAIGN_GROUP_ID => $campaign_id,
  AdSetFields::DAILY_BUDGET => 1000,
  AdSetFields::TARGETING => array(
    'geo_locations' => array(
      'countries' => array(
        'US'
      ),
    ),
  ),
  AdSetFields::CAMPAIGN_STATUS => AdSet::STATUS_PAUSED,
));

$adset->create();
// _DOC close [ADSET_CREATE_OCPM]
$adset->delete();

$product_set_id_1 = $product_set_id;
$product_set_id_2 = $product_set_id;

// _DOC open [ADSET_CREATE_DYNAMIC_RETARGETING]
// _DOC vars [ad_account_id:s, product_set_id_1, product_set_id_2, campaign_group_id]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Fields\TargetingSpecsFields;
$adset = new AdSet(null, $ad_account_id);

$adset->setData(array(
  AdSetFields::NAME => 'My cross sell ad set',
  AdSetFields::BID_AMOUNT => 3000,
  AdSetFields::BILLING_EVENT => BillingEvents::LINK_CLICKS,
  AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::LINK_CLICKS,
  AdSetFields::CAMPAIGN_STATUS => AdCampaign::STATUS_ACTIVE,
  AdSetFields::DAILY_BUDGET => 15000,
  AdSetFields::CAMPAIGN_GROUP_ID => $campaign_group_id,
  AdSetFields::TARGETING => array(
    TargetingSpecsFields::GEO_LOCATIONS => array(
      'countries' => array('US'),
    ),
    TargetingSpecsFields::PRODUCT_AUDIENCE_SPECS => array(array(
      'product_set_id' => $product_set_id_2,
      'inclusions' => array(array(
        'retention_seconds' => 432000,
        'rule' =>  array('event' => array('eq' => 'ViewContent')),
      )),
      'exclusions' => array(array(
        'retention_seconds' => 432000,
        'rule' =>  array('event' => array('eq' => 'Purchase')),
      )),
    )),
    TargetingSpecsFields::EXCLUDED_PRODUCT_AUDIENCE_SPECS => array(array(
      'product_set_id' => $product_set_id_2,
      'inclusions' => array(array(
        'retention_seconds' => 259200,
        'rule' =>  array('event' => array('eq' => 'ViewContent')),
      )),
    )),
  ),
  AdSetFields::PROMOTED_OBJECT => array(
    'product_set_id' => $product_set_id_1,
  ),
  AdSetFields::PRODUCT_AD_BEHAVIOR => 'FALL_BACK_TO_FB_RECOMMENDATIONS',
));

$adset->create();
// _DOC close [ADSET_CREATE_DYNAMIC_RETARGETING]
$adset->delete();
$campaign->delete();
$product_audience->delete();
$product_set->delete();
$product_catalog->delete();

// Create AdCampaign
$campaign = new AdCampaign(null, $ad_account_id);
$campaign->setData(array(
  AdCampaignFields::NAME => 'My First Campaign',
  AdCampaignFields::OBJECTIVE => AdObjectives::WEBSITE_CLICKS,
  AdCampaignFields::STATUS => AdCampaign::STATUS_PAUSED,
));

$campaign->create();
$campaign_group_id = $campaign->{AdCampaignFields::ID};

// _DOC open [ADSET_CREATE_DESKTOP]
// _DOC vars [ad_account_id:s, page_id:s, campaign_group_id]
// use FacebookAds\Object\AdSet;
// use FacebookAds\Object\Values\BillingEvents;
// use FacebookAds\Object\Values\OptimizationGoals;
// use FacebookAds\Object\Fields\AdSetFields;
// use FacebookAds\Object\Fields\TargetingSpecsFields;

$adset = new AdSet(null, $ad_account_id);
$adset->setData(array(
  AdSetFields::NAME => 'Desktop Ad Set',
  AdSetFields::CAMPAIGN_GROUP_ID => $campaign_group_id,
  AdSetFields::CAMPAIGN_STATUS => AdSet::STATUS_PAUSED,
  AdSetFields::DAILY_BUDGET => 10000,
  AdSetFields::TARGETING => (new TargetingSpecs())->setData(array(
    TargetingSpecsFields::PAGE_TYPES => array(
      PageTypes::DESKTOP_FEED
    ),
    TargetingSpecsFields::GEO_LOCATIONS => array(
      'countries' => array('BR'),
    ),
  )),
  AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::POST_ENGAGEMENT,
  AdSetFields::BILLING_EVENT => BillingEvents::POST_ENGAGEMENT,
  AdSetFields::BID_AMOUNT => 1500,
));

$adset->create();
// _DOC close [ADSET_CREATE_DESKTOP]

$adset->delete();
$campaign->delete();
