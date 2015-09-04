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
use FacebookAds\Object\Fields\AdAccountFields;
use FacebookAds\Object\Values\AdAccountRoles;
use FacebookAds\Object\Fields\TargetingSpecsFields;
use FacebookAds\Object\TargetingSpecs;

class AdAccountTest extends AbstractCrudObjectTestCase {

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

    $this->assertCanFetchConnection($account, 'getActivities');
    $this->assertCanFetchConnection($account, 'getAdUsers');
    $this->assertCanFetchConnection($account, 'getAdCampaigns');
    $this->assertCanFetchConnection($account, 'getAdSets');
    $this->assertCanFetchConnection($account, 'getAdGroups');
    $this->assertCanFetchConnection($account, 'getAdCreatives');
    $this->assertCanFetchConnection($account, 'getAdImages');
    $this->assertCanFetchConnection($account, 'getAdsPixels');
    $this->assertCanFetchConnection($account, 'getAdVideos');
    $this->assertCanFetchConnection($account, 'getBroadCategoryTargeting');
    $this->assertCanFetchConnection($account, 'getConnectionObjects');
    $this->assertCanFetchConnection($account, 'getCustomAudiences');
    $this->assertCanFetchConnection($account, 'getConversionPixels');
    $this->assertCanFetchConnection($account, 'getRateCards');
    $this->assertCanFetchConnection($account, 'getAdCreativesByLabel');

    if (!$this->shouldSkipTest('no_reach_and_frequency')) {
      $this->assertCanFetchConnection($account, 'getReachEstimate',
        array(),
        array('targeting_spec' =>
          array('geo_locations' =>
            array('countries' => array('US')))));
    }

    $targeting = new TargetingSpecs();
    $targeting->setData(array(
      TargetingSpecsFields::GEO_LOCATIONS =>
        array('countries' => array('US', 'JP')),
      TargetingSpecsFields::GENDERS => array(1),
      TargetingSpecsFields::AGE_MIN => 20,
      TargetingSpecsFields::AGE_MAX => 24,
    ));
    $params = array('targeting_spec' => $targeting->exportData());
    $this->assertCanFetchConnection(
      $account, 'getTargetingDescription', array(), $params);

    $this->assertCanFetchConnection($account, 'getTransactions');
    $this->assertCanFetchConnection($account, 'getAgencies');
    $this->assertCanFetchConnection($account, 'getInsights');
    $this->assertCanFetchConnection($account, 'getInsightsAsync');

    if (!$this->getSkippableFeaturesManager()
      ->isSkipKey('no_business_manager')) {

      $account->grantAgencyAcccess(
        $this->getConfig()->secondaryBusinessId,
        array(AdAccountRoles::GENERAL_USER));

      $account->revokeAgencyAccess($this->getConfig()->secondaryBusinessId);
    }
  }
}
