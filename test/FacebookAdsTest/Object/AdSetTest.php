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
use FacebookAds\Object\AdSet;
use FacebookAds\Object\Fields\CampaignFields;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Fields\TargetingSpecsFields;
use FacebookAds\Object\TargetingSpecs;
use FacebookAds\Object\Values\BillingEvents;
use FacebookAds\Object\Values\OptimizationGoals;

class AdSetTest extends AbstractCrudObjectTestCase {

  /**
   * @var Campaign
   */
  protected $campaign;

  public function setup() {
    parent::setup();
    $this->campaign = new Campaign(null, $this->getConfig()->accountId);
    $this->campaign->{CampaignFields::NAME}
      = $this->getConfig()->testRunId;
    $this->campaign->create();
  }

  public function tearDown() {
    $this->campaign->deleteSelf();
    $this->campaign = null;
    parent::tearDown();
  }

  public function testCrud() {
    $targeting = new TargetingSpecs();
    $targeting->{TargetingSpecsFields::GEO_LOCATIONS}
      = array('countries' => array('US'));

    $set = new AdSet(null, $this->getConfig()->accountId);
    $set->{AdSetFields::CAMPAIGN_ID}
      = $this->campaign->{CampaignFields::ID};
    $set->{AdSetFields::NAME} = $this->getConfig()->testRunId;
    $set->{AdSetFields::OPTIMIZATION_GOAL} = OptimizationGoals::REACH;
    $set->{AdSetFields::BILLING_EVENT} = BillingEvents::IMPRESSIONS;
    $set->{AdSetFields::BID_AMOUNT} = 2;
    $set->{AdSetFields::DAILY_BUDGET} = '150';
    $set->{AdSetFields::TARGETING} = $targeting;
    $set->{AdSetFields::START_TIME}
      = (new \DateTime("+1 week"))->format(\DateTime::ISO8601);
    $set->{AdSetFields::END_TIME}
      = (new \DateTime("+2 week"))->format(\DateTime::ISO8601);

    $this->assertCanCreate($set, array(
      AdSet::STATUS_PARAM_NAME => AdSet::STATUS_PAUSED,
    ));
    $this->assertCanRead($set);
    $this->assertCanUpdate($set, array(
      AdSetFields::NAME => $this->getConfig()->testRunId.' updated',
    ));
    $this->assertCanFetchConnection($set, 'getAds');
    $this->assertCanFetchConnection($set, 'getAdCreatives');
    $this->assertCanFetchConnection($set, 'getInsights');
    $this->assertCanFetchConnection($set, 'getInsightsAsync');

    $this->assertCanBeLabeled($set);
    $this->assertCanArchive($set);

    $this->assertCanDelete($set);
  }
}
