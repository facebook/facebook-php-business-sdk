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

use FacebookAds\Object\Campaign;
use FacebookAds\Object\AdCreative;
use FacebookAds\Object\Ad;
use FacebookAds\Object\AdImage;
use FacebookAds\Object\AdSet;
use FacebookAds\Object\Fields\CampaignFields;
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Fields\AdFields;
use FacebookAds\Object\Fields\AdImageFields;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Fields\ObjectStory\LinkDataFields;
use FacebookAds\Object\Fields\ObjectStorySpecFields;
use FacebookAds\Object\ObjectStory\LinkData;
use FacebookAds\Object\ObjectStorySpec;
use FacebookAds\Object\TargetingSpecs;
use FacebookAds\Object\Fields\TargetingSpecsFields;
use FacebookAds\Object\Values\BillingEvents;
use FacebookAds\Object\Values\OptimizationGoals;
use FacebookAdsTest\Config\SkippableFeatureTestInterface;

class AdTest extends AbstractCrudObjectTestCase
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
   * @var AdCreative
   */
  protected $adCreative;

  /**
   * @var AdImage
   */
  protected $adImage;

  /**
   * @return array
   */
  public function skipIfAny() {
    return array('no_payment_method');
  }

  public function setup() {
    parent::setup();

    $targeting = new TargetingSpecs();
    $targeting->{TargetingSpecsFields::GEO_LOCATIONS} = array(
      'countries' => array('US'),
    );

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
    $this->adSet->{AdSetFields::TARGETING} = $targeting;
    $this->adSet->{AdSetFields::OPTIMIZATION_GOAL} = OptimizationGoals::REACH;
    $this->adSet->{AdSetFields::BILLING_EVENT} = BillingEvents::IMPRESSIONS;
    $this->adSet->{AdSetFields::BID_AMOUNT} = 2;
    $this->adSet->save(array(
      AdSet::STATUS_PARAM_NAME => AdSet::STATUS_PAUSED,
    ));

    $this->adImage = new AdImage(null, $this->getConfig()->accountId);
    $this->adImage->{AdImageFields::FILENAME}
      = $this->getConfig()->testImagePath;
    $this->adImage->save();

    $link = new LinkData();
    $link->{LinkDataFields::MESSAGE} = 'Message';
    $link->{LinkDataFields::IMAGE_HASH} = $this->adImage->{AdImageFields::HASH};
    $link->{LinkDataFields::LINK} = $this->getConfig()->appUrl;

    $story = new ObjectStorySpec();
    $story->{ObjectStorySpecFields::PAGE_ID} = $this->getConfig()->pageId;
    $story->{ObjectStorySpecFields::LINK_DATA} = $link;

    $this->adCreative = new AdCreative(null, $this->getConfig()->accountId);
    $this->adCreative->{AdCreativeFields::OBJECT_STORY_SPEC} = $story;
    $this->adCreative->create();
  }

  public function tearDown() {
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

  public function testCrudAccess() {

    $group = new Ad(null, $this->getConfig()->accountId);
    $group->{AdFields::NAME} = $this->getConfig()->testRunId;
    $group->{AdFields::ADSET_ID}
      = (int) $this->adSet->{AdSetFields::ID};
    $group->{AdFields::CREATIVE}
      = array('creative_id' => $this->adCreative->{AdCreativeFields::ID});

    $this->assertCanCreate($group, array(
      Ad::STATUS_PARAM_NAME => Ad::STATUS_PAUSED,
    ));
    $this->assertCanRead($group);
    $this->assertCanUpdate($group, array(
      AdFields::NAME => $this->getConfig()->testRunId.' updated',
    ));

    $this->assertCanFetchConnection($group, 'getAdCreatives');
    $this->assertCanFetchConnection($group, 'getLeads');
    $this->assertCanFetchConnection($group, 'getTargetingDescription');
    $this->assertCanFetchConnection($group, 'getAdPreviews',
      array(),
      array('ad_format' => 'RIGHT_COLUMN_STANDARD'));

    if (!$this->shouldSkipTest('no_reach_and_frequency')) {
      $this->assertCanFetchConnection($group, 'getReachEstimate');
    }
    $this->assertCanFetchConnection($group, 'getClickTrackingTag');
    $this->assertCanFetchConnection($group, 'getInsights');
    $this->assertCanFetchConnection($group, 'getInsightsAsync');

    $this->assertCanBeLabeled($group);
    $this->assertCanArchive($group);

    $this->assertCanDelete($group);
  }
}
