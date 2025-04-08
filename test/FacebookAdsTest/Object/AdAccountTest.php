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

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\AdCreative;
use FacebookAds\Object\AdLabel;
use FacebookAds\Object\Fields\AdAccountFields;
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Fields\AdLabelFields;
use FacebookAds\Object\Values\AdAccountRoles;
use FacebookAds\Object\Fields\TargetingSpecsFields;
use FacebookAds\Object\TargetingSpecs;
use FacebookAds\Object\Values\AdFormats;
use FacebookAds\Object\Values\OptimizationGoals;

class AdAccountTest extends AbstractCrudObjectTestCase {

  /**
   * @var AdLabel
   */
  protected $adLabel;

  public function setup() : void {
    parent::setup();

    $this->adLabel = new AdLabel(null, $this->getConfig()->accountId);
    $this->adLabel->{AdLabelFields::NAME} = $this->getConfig()->testRunId;
    $this->adLabel->create();
  }

  public function tearDown() : void {
    if ($this->adLabel !== null) {
      $this->adLabel->deleteSelf();
      $this->adLabel = null;
    }

    parent::tearDown();
  }

  public function testCrud() {
    $account = new AdAccount($this->getConfig()->accountId);

    $this->assertCanRead($account);
    $name = $account->read(array(AdAccountFields::NAME))
      ->{AdAccountFields::NAME};
    $this->assertCanUpdate(
      $account,
      array(AdAccountFields::NAME => $this->getConfig()->testRunId));

    // Restore original account name
    $account->{AdAccountFields::NAME} = $name;
    $account->save();

    $this->assertCannotDelete($account);

    $targeting = new TargetingSpecs();
    $targeting->setData(array(
      TargetingSpecsFields::GEO_LOCATIONS =>
        array('countries' => array('US', 'JP')),
      TargetingSpecsFields::GENDERS => array(1),
      TargetingSpecsFields::AGE_MIN => 20,
      TargetingSpecsFields::AGE_MAX => 24,
    ));

    $creative = (new AdCreative())->setData(array(
      AdCreativeFields::TITLE => 'My Test Creative',
      AdCreativeFields::BODY => 'My Test Ad Creative Body',
      AdCreativeFields::OBJECT_URL => 'https://www.facebook.com/facebook',
    ));

    $targeting_params = array(
      'targeting_spec' => $targeting->exportData(),
    );

    $label_params = array(
      'ad_label_ids' => array(
        $this->adLabel->{AdLabelFields::ID},
      ),
    );

    $this->assertCanFetchConnection($account, 'getActivities');
    $this->assertCanFetchConnection($account, 'getAdUsers');
    $this->assertCanFetchConnection($account, 'getCampaigns');
    $this->assertCanFetchConnection($account, 'getAdSets');
    $this->assertCanFetchConnection($account, 'getAds');
    $this->assertCanFetchConnection($account, 'getAdCreatives');
    $this->assertCanFetchConnection($account, 'getAdImages');
    $this->assertCanFetchConnection($account, 'getAdsPixels');
    $this->assertCanFetchConnection($account, 'getAdVideos');
    $this->assertCanFetchConnection($account, 'getBroadCategoryTargeting');
    $this->assertCanFetchConnection($account, 'getCustomAudiences');
    $this->assertCanFetchConnection($account, 'getConversionPixels');
    $this->assertCanFetchConnection($account, 'getPartnerCategories');
    $this->assertCanFetchConnection($account, 'getRateCards');
    $this->assertCanFetchConnection(
      $account,
      'getReachEstimate',
      array(),
      array_merge(
        $targeting_params,
        array(
          'optimize_for' => OptimizationGoals::OFFSITE_CONVERSIONS,
        )));

    if (!$this->shouldSkipTest('no_reach_and_frequency')) {
      $this->assertCanFetchConnection($account, 'getReachFrequencyPredictions');
    }

    $this->assertCanFetchConnection(
      $account, 'getTargetingDescription', array(), $targeting_params);

    $this->assertCanFetchConnection($account, 'getTransactions');
    $this->assertCanFetchConnection($account, 'getAdPreviews', array(), array(
      'ad_format' => AdFormats::DESKTOP_FEED_STANDARD,
      'creative' => $creative->exportData(),
    ));
    $this->assertCanFetchConnection($account, 'getInsights');
    $this->assertCanFetchConnection($account, 'getInsightsAsync');
    $this->assertCanFetchConnection($account, 'getAgencies');
    $this->assertCanFetchConnection($account, 'getMinimumBudgets');
    $this->assertCanFetchConnection($account, 'getAdLabels');
    $this->assertCanFetchConnection(
      $account, 'getCampaignsByLabel', array(), $label_params);
    $this->assertCanFetchConnection(
      $account, 'getAdSetsByLabel', array(), $label_params);
    $this->assertCanFetchConnection(
      $account, 'getAdsByLabel', array(), $label_params);
    $this->assertCanFetchConnection(
      $account, 'getAdCreativesByLabel', array(), $label_params);


    if (!$this->getSkippableFeaturesManager()
      ->isSkipKey('no_business_manager')) {

      $account->grantAgencyAcccess(
        $this->getConfig()->secondaryBusinessId,
        array(AdAccountRoles::GENERAL_USER));

      $account->revokeAgencyAccess($this->getConfig()->secondaryBusinessId);
    }
  }
}
