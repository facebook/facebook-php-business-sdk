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

use FacebookAdsTest\AbstractTestCase;
use FacebookAds\Object\ReachEstimate;
use FacebookAds\Object\Fields\ReachEstimateFields;

class ReachEstimateTest extends AbstractTestCase {

  public function testOnlyInnerData() {
    $reach_estimate = new ReachEstimate();
    $reach_estimate->setData(array(
      'data' => array(
        ReachEstimateFields::ESTIMATE_READY => true,
      ),
    ));
    $this->assertTrue($reach_estimate->{ReachEstimateFields::ESTIMATE_READY});
  }

  public function testOnlyOuterData() {
    $reach_estimate = new ReachEstimate();
    $reach_estimate->setData(array(
      ReachEstimateFields::ESTIMATE_READY => true,
    ));
    $this->assertTrue($reach_estimate->{ReachEstimateFields::ESTIMATE_READY});
  }

  public function testInnerDataTakesPrecedenceOverOuterData() {
    $reach_estimate = new ReachEstimate();
    $reach_estimate->setData(array(
      ReachEstimateFields::ESTIMATE_READY => false,
      'data' => array(
        ReachEstimateFields::ESTIMATE_READY => true,
      ),
     ));
    $this->assertTrue($reach_estimate->{ReachEstimateFields::ESTIMATE_READY});
  }
}
