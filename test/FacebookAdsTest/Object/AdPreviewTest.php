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

use FacebookAds\Object\AdImage;
use FacebookAds\Object\AdCreative;
use FacebookAds\Object\AdGroup;
use FacebookAds\Object\AdSet;
use FacebookAds\Object\AdCampaign;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdImageFields;
use FacebookAds\Object\TargetingSpecs;
use FacebookAds\Object\Fields\AdPreviewFields;
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Fields\AdGroupFields;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Fields\AdCampaignFields;
use FacebookAds\Object\Fields\TargetingSpecsFields;
use FacebookAds\Object\Values\AdFormats;
use FacebookAds\Object\Fields\AdGroupBidInfoFields;
use FacebookAds\Object\Values\BidTypes;
use FacebookAdsTest\SkippableFeatureTestInterface;

class AdPreviewTest extends AbstractCrudObjectTestCase
  implements SkippableFeatureTestInterface {

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
    $this->adSet->{AdGroupFields::TARGETING} = $targeting;
    $this->adSet->{AdGroupFields::BID_TYPE} = BidTypes::BID_TYPE_CPM;
    $this->adSet->{AdSetFields::BID_INFO}
      = array(AdGroupBidInfoFields::IMPRESSIONS => 2);
    $this->adSet->create();

    $this->adImage = new AdImage(null, $this->getActId());
    $this->adImage->{AdImageFields::FILENAME} = $this->getTestImagePath();
    $this->adImage->save();

    $this->adCreative = new AdCreative(null, $this->getActId());
    $this->adCreative->{AdCreativeFields::TITLE} = 'My Test Ad';
    $this->adCreative->{AdCreativeFields::BODY} = 'My Test Ad Body';
    $this->adCreative->{AdCreativeFields::OBJECT_ID} = $this->getPageId();
    $this->adCreative->{AdCreativeFields::IMAGE_HASH}
      = $this->adImage->{AdImageFields::HASH};
    $this->adCreative->create();

    $this->adGroup = new AdGroup(null, $this->getActId());
    $this->adGroup->{AdGroupFields::ADGROUP_STATUS} = AdGroup::STATUS_PAUSED;
    $this->adGroup->{AdGroupFields::NAME} = $this->getTestRunId();
    $this->adGroup->{AdGroupFields::CAMPAIGN_ID}
      = (int) $this->adSet->{AdSetFields::ID};
    $this->adGroup->{AdGroupFields::CREATIVE}
      = array('creative_id' => $this->adCreative->{AdCreativeFields::ID});
    $this->adGroup->create();
  }

  public function tearDown() {

    if ($this->adGroup) {
      $this->adGroup->delete();
      $this->adGroup = null;
    }

    if ($this->adSet) {
      $this->adSet->delete();
      $this->adSet = null;
    }

    if ($this->adCampaign) {
      $this->adCampaign->delete();
      $this->adCampaign = null;
    }

    if ($this->adCreative) {
      $this->adCreative->delete();
      $this->adCreative = null;
    }

    if ($this->adImage) {
      $this->adImage->delete();
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
          AdCreativeFields::OBJECT_ID => $this->getPageId(),
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
