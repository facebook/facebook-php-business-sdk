<?php
/**
 * Copyright 2014 Facebook, Inc.
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

namespace FacebookAdsTest\Object;

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\AdCampaign;
use FacebookAds\Object\AdCreative;
use FacebookAds\Object\AdGroup;
use FacebookAds\Object\AdSet;
use FacebookAds\Object\AdsPixel;
use FacebookAds\Object\ObjectStorySpec;
use FacebookAds\Object\ProductAudience;
use FacebookAds\Object\ProductCatalog;
use FacebookAds\Object\ProductSet;
use FacebookAds\Object\TargetingSpecs;
use FacebookAds\Object\ObjectStory\TemplateData;
use FacebookAds\Object\Fields\AdCampaignFields;
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Fields\AdGroupFields;
use FacebookAds\Object\Fields\AdGroupBidInfoFields;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Fields\AdsPixelsFields;
use FacebookAds\Object\Fields\ObjectStory\TemplateDataFields;
use FacebookAds\Object\Fields\ObjectStorySpecFields;
use FacebookAds\Object\Fields\ProductAudienceFields;
use FacebookAds\Object\Fields\ProductCatalogFields;
use FacebookAds\Object\Fields\ProductSetFields;
use FacebookAds\Object\Fields\TargetingSpecsFields;
use FacebookAds\Object\Values\AdObjectives;
use FacebookAds\Object\Values\BidTypes;
use FacebookAds\Object\Values\CallToActionTypes;

class DynamicProductAdsAdvertTest extends AbstractCrudObjectTestCase {

  /**
   * @var ProductSet
   */
  protected $productSet;

  /**
   * @var ProductCatalog
   */
  protected $productCatalog;

  /**
   * @var AdsPixel
   */
  protected $adsPixel;

  /**
   * @var ProductAudience
   */
  protected $productAudience;

  /**
   * @var AdCampaign
   */
  protected $adCampaign;

  /**
   * @var AdSet
   */
  protected $adSet;

  /**
   * @var AdGroup
   */
  protected $adGroup;

  /**
   * @var AdCreative
   */
  protected $creative;

  public function setup() {
    parent::setup();

    $account = new AdAccount($this->getConfig()->accountId);
    $this->adsPixel = $account->getAdsPixels()->current();
    if ($this->adsPixel === null) {
      throw new \Exception('Ads Pixel is null');
    }

    $this->productCatalog =
      new ProductCatalog(null, $this->getConfig()->businessManagerId);
    $this->productCatalog->setData(array(
      ProductCatalogFields::NAME => $this->getConfig()->testRunId,
    ));
    $this->productCatalog->create();

    $this->productSet =
      new ProductSet(null, $this->productCatalog->{ProductCatalogFields::ID});
    $this->productSet->setData(array(
      ProductSetFields::NAME => $this->getConfig()->testRunId,
      ProductSetFields::FILTER => array(
        'retailer_id' => array(
          'is_any' => array('pid1', 'pid2')
        )
      )
    ));
    $this->productSet->create();

    $this->productAudience
      = new ProductAudience(null, $this->getConfig()->accountId);
    $this->productAudience->setData(array(
      ProductAudienceFields::NAME => $this->getConfig()->testRunId,
      ProductAudienceFields::PRODUCT_SET_ID =>
        $this->productSet->{ProductSetFields::ID},
      ProductAudienceFields::PIXEL_ID =>
        $this->adsPixel->{AdsPixelsFields::ID},
      ProductAudienceFields::INCLUSIONS => array(array(
        'retention_seconds' => 86400,
        'rule' => array(
          'and' => array(
            array('event' => array('eq'=>'ViewContent')),
            array('userAgent' => array('i_contains'=>'iPhone'))
          )
        )
      )),
    ));

    $this->productAudience->create();
  }

  public function tearDown() {
    if ($this->productSet) {
      $this->productSet->delete();
      $this->productSet = null;
    }

    if ($this->productCatalog) {
      $this->productCatalog->delete();
      $this->productCatalog = null;
    }

    if ($this->productAudience) {
      $this->productAudience->delete();
      $this->productAudience = null;
    }

    if ($this->adCampaign) {
      $this->adCampaign->delete();
      $this->adCampaign = null;
    }

    if ($this->adSet) {
      $this->adSet->delete();
      $this->adSet = null;
    }

    if ($this->adGroup) {
      $this->adGroup->delete();
      $this->adGroup = null;
    }

    if ($this->creative) {
      $this->creative->delete();
      $this->creative = null;
    }

    parent::tearDown();
  }

  public function testDynamicProductAdsCreation() {
    $this->adCampaign = new AdCampaign(null, $this->getConfig()->accountId);
    $this->adCampaign->setData(array(
      AdCampaignFields::NAME => $this->getConfig()->testRunId,
      AdCampaignFields::OBJECTIVE => AdObjectives::PRODUCT_CATALOG_SALES,
      AdCampaignFields::PROMOTED_OBJECT =>
        array('product_catalog_id' =>
          $this->productCatalog->{ProductCatalogFields::ID})
     ));
    $this->assertCanCreate($this->adCampaign);

    $targeting = new TargetingSpecs();
    $targeting->{TargetingSpecsFields::GEO_LOCATIONS} =
      array('countries' => array('US'));
    $targeting->{TargetingSpecsFields::DYNAMIC_AUDIENCE_IDS} =
      array($this->productAudience->{ProductAudienceFields::ID});

    $this->adSet = new AdSet(null, $this->getConfig()->accountId);
    $this->adSet->setData(array(
      AdSetFields::NAME => $this->getConfig()->testRunId,
      AdSetFields::BID_TYPE => BidTypes::BID_TYPE_CPC,
      AdSetFields::BID_INFO =>
        array(AdGroupBidInfoFields::CLICKS => 150),
        AdSetFields::DAILY_BUDGET => 2000,
        AdSetFields::CAMPAIGN_GROUP_ID =>
          $this->adCampaign->{AdCampaignFields::ID},
        AdSetFields::TARGETING => $targeting,
        AdsetFields::PROMOTED_OBJECT =>
          array('product_set_id' => $this->productSet->{ProductSetFields::ID})
      ));
    $this->assertCanCreate($this->adSet);

    $template = new TemplateData();
    $template->setData(array(
      TemplateDataFields::DESCRIPTION => '{{product.description}}',
      TemplateDataFields::LINK => 'http://www.example.com/',
      TemplateDataFields::MESSAGE => 'Test DPA Ad Message',
      TemplateDataFields::NAME => '{{product.name | titleize}}',
      TemplateDataFields::MAX_PRODUCT_COUNT => 3,
      TemplateDataFields::CALL_TO_ACTION => array(
        'type' => CallToActionTypes::SHOP_NOW
      )
    ));

    $story = new ObjectStorySpec();
    $story->setData(array(
      ObjectStorySpecFields::PAGE_ID => $this->getConfig()->pageId,
      ObjectStorySpecFields::TEMPLATE_DATA => $template,
    ));

    $this->creative = new AdCreative(null, $this->getConfig()->accountId);
    $this->creative->setData(array(
      AdCreativeFields::NAME => $this->getConfig()->testRunId,
      AdCreativeFields::OBJECT_STORY_SPEC => $story,
      AdCreativeFields::PRODUCT_SET_ID =>
        $this->productSet->{ProductSetFields::ID},
    ));
    $this->assertCanCreate($this->creative);

    $this->adGroup = new AdGroup(null, $this->getConfig()->accountId);
    $this->adGroup->setData(array(
      AdGroupFields::NAME => 'DPA Test Ad 1 '.$this->getConfig()->testRunId,
      AdGroupFields::CAMPAIGN_ID => $this->adSet->{AdSetFields::ID},
      AdGroupFields::CREATIVE =>
        array('creative_id' => $this->creative->{AdCreativeFields::ID}),
      AdGroupFields::OBJECTIVE => AdObjectives::PRODUCT_CATALOG_SALES
    ));
    $this->assertCanCreate($this->adGroup);
  }
}
