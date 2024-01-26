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

namespace FacebookAdsTest\Object;

use FacebookAds\Object\AdImage;
use FacebookAds\Object\AdCreative;
use FacebookAds\Object\Ad;
use FacebookAds\Object\AdSet;
use FacebookAds\Object\Campaign;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdImageFields;
use FacebookAds\Object\TargetingSpecs;
use FacebookAds\Object\Fields\AdPreviewFields;
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Fields\AdFields;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Fields\CampaignFields;
use FacebookAds\Object\Fields\TargetingSpecsFields;
use FacebookAds\Object\Values\AdFormats;
use FacebookAds\Object\Values\BillingEvents;
use FacebookAds\Object\Values\OptimizationGoals;
use FacebookAdsTest\Config\SkippableFeatureTestInterface;

class AdPreviewTest extends AbstractCrudObjectTestCase
  implements SkippableFeatureTestInterface {

  /**
   * @var Campaign
   */
  protected $campaign;

  /**
   * @var AdSet
   */
  protected $adSet;

  /**
   * @var Ad
   */
  protected $ad;

  /**
   * @var AdImage
   */
  protected $adImage;

  /**
   * @var AdCreative
   */
  protected $adCreative;

  /**
   * @return array
   */
  public function skipIfAny() {
    return array('no_payment_method');
  }

  public function setup() {
    parent::setup();

    $targeting = new TargetingSpecs();
    $targeting->{TargetingSpecsFields::GEO_LOCATIONS}
      = array('countries' => array('US'));

    $this->campaign = new Campaign(null, $this->getConfig()->accountId);
    $this->campaign->{CampaignFields::NAME} = $this->getConfig()->testRunId;
    $this->campaign->create();

    $this->adSet = new AdSet(null, $this->getConfig()->accountId);
    $this->adSet->{AdSetFields::CAMPAIGN_ID}
      = (int) $this->campaign->{AdSetFields::ID};
    $this->adSet->{AdSetFields::NAME} = $this->getConfig()->testRunId;
    $this->adSet->{AdSetFields::DAILY_BUDGET} = '150';
    $this->adSet->{AdSetFields::START_TIME}
      = (new \DateTime("+1 week"))->format(\DateTime::ISO8601);
    $this->adSet->{AdSetFields::END_TIME}
      = (new \DateTime("+2 week"))->format(\DateTime::ISO8601);
    $this->adSet->{AdFields::TARGETING} = $targeting;
    $this->adSet->{AdSetFields::OPTIMIZATION_GOAL} = OptimizationGoals::REACH;
    $this->adSet->{AdSetFields::BILLING_EVENT} = BillingEvents::IMPRESSIONS;
    $this->adSet->{AdSetFields::BID_AMOUNT} = 2;
    $this->adSet->create(array(
      AdSet::STATUS_PARAM_NAME => AdSet::STATUS_PAUSED,
    ));

    $this->adImage = new AdImage(null, $this->getConfig()->accountId);
    $this->adImage->{AdImageFields::FILENAME}
      = $this->getConfig()->testImagePath;
    $this->adImage->save();

    $this->adCreative = new AdCreative(null, $this->getConfig()->accountId);
    $this->adCreative->{AdCreativeFields::TITLE} = 'My Test Ad';
    $this->adCreative->{AdCreativeFields::BODY} = 'My Test Ad Body';
    $this->adCreative->{AdCreativeFields::OBJECT_ID}
      = $this->getConfig()->pageId;
    $this->adCreative->{AdCreativeFields::IMAGE_HASH}
      = $this->adImage->{AdImageFields::HASH};
    $this->adCreative->create();

    $this->ad = new Ad(null, $this->getConfig()->accountId);
    $this->ad->{AdFields::NAME} = $this->getConfig()->testRunId;
    $this->ad->{AdFields::ADSET_ID}
      = (int) $this->adSet->{AdSetFields::ID};
    $this->ad->{AdFields::CREATIVE}
      = array('creative_id' => $this->adCreative->{AdCreativeFields::ID});
    $this->ad->create(array(
      Ad::STATUS_PARAM_NAME => Ad::STATUS_PAUSED,
    ));
  }

  public function tearDown() {

    if ($this->ad) {
      $this->ad->deleteSelf();
      $this->ad = null;
    }

    if ($this->adSet) {
      $this->adSet->deleteSelf();
      $this->adSet = null;
    }

    if ($this->campaign) {
      $this->campaign->deleteSelf();
      $this->campaign = null;
    }

    if ($this->adCreative) {
      $this->adCreative->deleteSelf();
      $this->adCreative = null;
    }

    if ($this->adImage) {
      $this->adImage->deleteSelf();
      $this->adImage = null;
    }

    parent::tearDown();
  }

  public function testAdPreviews() {
    // Preview with actual creative
    $previews = $this->adCreative->getAdPreviews(
      array(),
      array(
        AdPreviewFields::AD_FORMAT => AdFormats::RIGHT_COLUMN_STANDARD
      )
    );
    $this->assertNotEquals(0, $previews->count());
    $preview = $previews->offsetGet(0);
    $this->assertRegExp(
      '/iframe/',
      $preview->{AdPreviewFields::BODY}
    );

    // Preview with actual adgroup
    $previews = $this->ad->getAdPreviews(
      array(),
      array(
        AdPreviewFields::AD_FORMAT => AdFormats::RIGHT_COLUMN_STANDARD
      )
    );
    $this->assertNotEquals(0, $previews->count());
    $preview = $previews->offsetGet(0);
    $this->assertRegExp(
      '/iframe/',
      $preview->{AdPreviewFields::BODY}
    );

    // Preview with creative specs
    $account = new AdAccount($this->getConfig()->accountId);
    $previews = $account->getAdPreviews(
      array(),
      array(
        AdPreviewFields::CREATIVE => array(
          AdCreativeFields::BODY => 'Testing the creative preview',
          AdCreativeFields::OBJECT_ID => $this->getConfig()->pageId,
        ),
        AdPreviewFields::AD_FORMAT => AdFormats::RIGHT_COLUMN_STANDARD,
      )
    );
    $this->assertNotEquals(0, $previews->count());
    $preview = $previews->offsetGet(0);
    $this->assertRegExp(
      '/iframe/',
      $preview->{AdPreviewFields::BODY}
    );
  }
}
