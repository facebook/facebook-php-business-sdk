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

use FacebookAdsTest\AbstractUnitTestCase;
use FacebookAds\Object\ServerSide\AttributionData;
use FacebookAds\Object\ServerSide\AttributionSetting;

class AttributionDataTest extends AbstractUnitTestCase {
  public function testBuilderAndConstructor() {
    $attribution_setting = (new AttributionSetting())
      ->setInactivityWindowHours(24)
      ->setReattributionWindowHours(48);

    $expected = array(
      'scope' => 'click',
      'visit_time' => 123456,
      'ad_id' => '123',
      'adset_id' => '234',
      'campaign_id' => '345',
      'attr_window' => 7,
      'attribution_share' => 0.5,
      'attribution_model' => 'last_touch',
      'attribution_value' => 3.45,
      'attribution_source' => 'AMM',
      'touchpoint_type' => 'click',
      'touchpoint_ts' => 1234567890,
      'attribution_method' => 'ARD',
      'decline_reason' => 'lookback',
      'auditing_token' => 'token123',
      'linkage_key' => 'key123',
      'attribution_setting' => array(
        'inactivity_window_hours' => 24,
        'reattribution_window_hours' => 48
      )
    );
    $builder = (new AttributionData())
      ->setScope($expected['scope'])
      ->setVisitTime($expected['visit_time'])
      ->setAdId($expected['ad_id'])
      ->setAdsetId($expected['adset_id'])
      ->setCampaignId($expected['campaign_id'])
      ->setAttrWindow($expected['attr_window'])
      ->setAttributionShare($expected['attribution_share'])
      ->setAttributionModel($expected['attribution_model'])
      ->setAttributionValue($expected['attribution_value'])
      ->setAttributionSource($expected['attribution_source'])
      ->setTouchpointType($expected['touchpoint_type'])
      ->setTouchpointTs($expected['touchpoint_ts'])
      ->setAttributionMethod($expected['attribution_method'])
      ->setDeclineReason($expected['decline_reason'])
      ->setAuditingToken($expected['auditing_token'])
      ->setLinkageKey($expected['linkage_key'])
      ->setAttributionSetting($attribution_setting);
    $this->assertEquals($expected, $builder->normalize());

    $constructor = new AttributionData(array(
      'scope' => $expected['scope'],
      'visit_time' => $expected['visit_time'],
      'ad_id' => $expected['ad_id'],
      'adset_id' => $expected['adset_id'],
      'campaign_id' => $expected['campaign_id'],
      'attr_window' => $expected['attr_window'],
      'attribution_share' => $expected['attribution_share'],
      'attribution_model' => $expected['attribution_model'],
      'attribution_value' => $expected['attribution_value'],
      'attribution_source' => $expected['attribution_source'],
      'touchpoint_type' => $expected['touchpoint_type'],
      'touchpoint_ts' => $expected['touchpoint_ts'],
      'attribution_method' => $expected['attribution_method'],
      'decline_reason' => $expected['decline_reason'],
      'auditing_token' => $expected['auditing_token'],
      'linkage_key' => $expected['linkage_key'],
      'attribution_setting' => $attribution_setting
    ));
    $this->assertEquals($expected, $constructor->normalize());
  }
}
