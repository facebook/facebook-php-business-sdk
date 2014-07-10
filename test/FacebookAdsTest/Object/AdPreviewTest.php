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

use FacebookAds\Object\AdPreview;
use FacebookAds\Object\AdCreative;
use FacebookAds\Object\AdGroup;
use FacebookAds\Object\AdSet;
use FacebookAds\Object\AdCampaign;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\TargetingSpecs;
use FacebookAds\Object\Fields\AdPreviewFields;
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Fields\AdGroupFields;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Fields\AdCampaignFields;
use FacebookAds\Object\Fields\TargetingSpecsFields;
use FacebookAds\Object\Values\AdFormats;
use FacebookAds\Object\Fields\AdGroupBidInfoFields;

class AdPreviewTest extends AbstractCrudObjectTestCase {

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
  protected $adCreative;

  public function setup() {
    parent::setup();
    $this->adCampaign = new AdCampaign(null, $this->getActId());
    $this->adCampaign->{AdCampaignFields::NAME} = $this->getTestRunId();
    $this->adCampaign->create();

    $this->adSet = new AdSet(null, $this->getActId());
    $this->adSet->{AdSetFields::CAMPAIGN_GROUP_ID}
      = (int) $this->adCampaign->{AdSetFields::ID};
    $this->adSet->{AdSetFields::NAME} = $this->getTestRunId();
    $this->adSet->{AdSetFields::CAMPAIGN_STATUS} = AdSet::STATUS_PAUSED;
    $this->adSet->{AdSetFields::DAILY_BUDGET} = '150';
    $this->adSet->{AdSetFields::START_TIME}
      = (new \DateTime("+1 week"))->format(\DateTime::ISO8601);
    $this->adSet->{AdSetFields::END_TIME}
      = (new \DateTime("+2 week"))->format(\DateTime::ISO8601);
    $this->adSet->create();

    $this->adCreative = new AdCreative(null, $this->getActId());
    $this->adCreative->{AdCreativeFields::TITLE} = 'My Test Ad';
    $this->adCreative->{AdCreativeFields::BODY} = 'My Test Ad Body';
    $this->adCreative->{AdCreativeFields::OBJECT_ID} = 20531316728;
    $this->adCreative->create();

    $targeting = new TargetingSpecs();
    $targeting->{TargetingSpecsFields::GEO_LOCATIONS}
      = array('countries' => array('US'));

    $this->adGroup = new AdGroup(null, $this->getActId());
    $this->adGroup->{AdGroupFields::ADGROUP_STATUS} = AdGroup::STATUS_PAUSED;
    $this->adGroup->{AdGroupFields::NAME} = $this->getTestRunId();
    $this->adGroup->{AdGroupFields::BID_TYPE} = AdGroup::BID_TYPE_CPM;
    $this->adGroup->{AdGroupFields::BID_INFO}
      = array(AdGroupBidInfoFields::IMPRESSIONS => '2');
    $this->adGroup->{AdGroupFields::CAMPAIGN_ID}
      = (int) $this->adSet->{AdSetFields::ID};
    $this->adGroup->{AdGroupFields::TARGETING} = $targeting;
    $this->adGroup->{AdGroupFields::CREATIVE}
      = array('creative_id' => $this->adCreative->{AdCreativeFields::ID});
    $this->adGroup->create();
  }

  public function tearDown() {
    $this->adGroup->delete();
    $this->adGroup = null;
    $this->adCreative->delete();
    $this->adCreative = null;
    $this->adSet->delete();
    $this->adSet = null;
    $this->adCampaign->delete();
    $this->adCampaign = null;
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
    $previews = $this->adGroup->getAdPreviews(
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
    $account = new AdAccount($this->getActId());
    $previews = $account->getAdPreviews(
      array(),
      array(
        AdPreviewFields::CREATIVE => array(
          AdCreativeFields::BODY => 'Testing the creative preview',
          AdCreativeFields::OBJECT_ID => 259481254206516,
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
