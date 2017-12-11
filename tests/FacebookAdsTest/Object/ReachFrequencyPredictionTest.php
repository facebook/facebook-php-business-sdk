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

use FacebookAds\Object\Fields\TargetingFields;
use FacebookAds\Object\ReachFrequencyPrediction;
use FacebookAds\Object\Fields\ReachFrequencyPredictionFields as RF;
use FacebookAds\Object\TargetingSpecs;
use FacebookAds\Object\Values\AdObjectives;
use FacebookAdsTest\Config\SkippableFeatureTestInterface;

class ReachFrequencyPredictionTest extends AbstractCrudObjectTestCase
  implements SkippableFeatureTestInterface {

  /**
   * @return array
   */
  public function skipIfAny() {
    return array('no_reach_and_frequency');
  }

  public function testCrudAccess() {

    $prediction
      = new ReachFrequencyPrediction(null, $this->getConfig()->accountId);

    $targeting = new TargetingSpecs();
    $targeting->{TargetingSpecsFields::GEO_LOCATIONS}
      = array('countries' => array('US'));
    $targeting->{TargetingFields::AGE_MAX} = 35;
    $targeting->{TargetingFields::AGE_MIN} = 20;
    $targeting->{TargetingFields::GENDERS} = array(2);
    $targeting->{TargetingFields::PUBLISHER_PLATFORMS} = array('facebook');
    $targeting->{TargetingFields::DEVICE_PLATFORMS} = array('desktop');
    $targeting->{TargetingFields::FACEBOOK_POSITIONS} = array('feed');

    $prediction->setData(array(
      RF::BUDGET => 3000000,
      RF::TARGET_SPEC => $targeting,
      RF::START_TIME => strtotime('midnight + 2 weeks'),
      RF::END_TIME => strtotime('midnight + 3 weeks'),
      RF::FREQUENCY_CAP => 4,
      RF::DESTINATION_ID => $this->getConfig()->pageId,
      RF::PREDICTION_MODE => ReachFrequencyPrediction::PREDICTION_MODE_REACH,
      RF::OBJECTIVE => AdObjectives::POST_ENGAGEMENT,
      RF::STORY_EVENT_TYPE => 128,
    ));

    $this->assertCanCreate($prediction);
    $this->assertCanDelete($prediction);
  }

}
