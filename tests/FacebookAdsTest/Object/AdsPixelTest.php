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

use FacebookAds\Object\AbstractCrudObject;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\AdsPixel;
use FacebookAds\Object\Business;
use FacebookAds\Object\Fields\AdsPixelsFields;
use FacebookAds\Object\Values\AdsPixelStatAggregations;

class AdsPixelTest extends AbstractCrudObjectTestCase {

  /**
   * AdsPixels can be created but only one per account can exist
   */
  public function testCreate() {
    // make sure there's at least one pixel
    $account = new AdAccount($this->getConfig()->accountId);
    $pixels = $account->getAdsPixels();
    $pixel = null;

    if (!$pixels->count()) {
      $pixel = new AdsPixel(null, $this->getConfig()->accountId);
      $pixel->{AdsPixelsFields::NAME} = 'WCA Pixel';
      $this->assertCanCreate($pixel);
    } else {
      $pixel = $pixels->current();
    }

    $pixel = new AdsPixel(null, $this->getConfig()->accountId);
    $pixel->{AdsPixelsFields::NAME} = $this->getConfig()->testRunId;
    $this->assertCannotCreate($pixel);
  }

  /**
   * @return AdsPixel
   */
  protected function getAccountPixel() {
    $cursor = (new AdAccount($this->getConfig()->accountId))->getAdsPixels();
    $this->assertGreaterThanOrEqual(1, $cursor->count());

    return $cursor->current();
  }

  /**
   * @depends testCreate
   */
  public function testCrud() {
    $pixel = $this->getAccountPixel();

    $this->assertCanRead($pixel, array(
      AdsPixelsFields::NAME,
    ));

    $name = $pixel->{AdsPixelsFields::NAME};

    $this->assertCanUpdate(
      $pixel,
      array(
        AdsPixelsFields::NAME => $this->getConfig()->testRunId.' updated',
      ));

    $pixel->{AdsPixelsFields::NAME} = $name;
    $pixel->update();

    $this->assertCanFetchConnection($pixel, 'getAdAccounts', array(), array(
      'business' => $this->getConfig()->businessId,
    ));
    $this->assertCanFetchConnection($pixel, 'getAgencies');
    $this->assertCanFetchConnection($pixel, 'getStats', array(), array(
      'aggregation' => AdsPixelStatAggregations::EVENT,
    ));

    $this->assertCannotDelete($pixel);
  }

  /**
   * @depends testCreate
   */
  public function testShareWithAdAccount() {
    $this->skipIf('no_business_manager');

    if (!$this->getConfig()->secondaryBusinessId) {
      $this->markTestSkipped('No secondary business provided in config');
    }

    if (!$this->getConfig()->secondaryAccountId) {
      $this->markTestSkipped('No secondary ad account provided in config');
    }

    $account_id_int = (int) substr($this->getConfig()->secondaryAccountId, 4);

    $pixel = $this->getAccountPixel();

    $pixel->sharePixelWithAdAccount(
      $this->getConfig()->secondaryBusinessId,
      $account_id_int);

    $pixel->unsharePixelWithAdAccount(
      $this->getConfig()->secondaryBusinessId,
      $account_id_int);

  }

  /**
   * @depends testCreate
   */
  public function testShareWithAgency() {
    $this->skipIf('no_business_manager');

    if (!$this->getConfig()->secondaryAccountId) {
      $this->markTestSkipped('No secondary business provided in config');
    }

    $pixel = $this->getAccountPixel();

    $business = new Business($this->getConfig()->businessId);
    $cursor = $business->getAgencies();
    $cursor->setUseImplicitFetch(true);

    $agency_id = null;
    foreach ($cursor as $agency) {
      if (
        $agency->{AbstractCrudObject::FIELD_ID}
        == $this->getConfig()->secondaryBusinessId
      ) {
        $agency_id = $agency->{AbstractCrudObject::FIELD_ID};
      }
    }

    if ($agency_id === null) {
      $this->markTestSkipped("Secondary business is not a valid agency");
    }

    $pixel->sharePixelWithAgency(
      $this->getConfig()->businessId,
      $this->getConfig()->secondaryBusinessId);

    $pixel->unsharePixelWithAgency(
      $this->getConfig()->businessId,
      $this->getConfig()->secondaryBusinessId);
  }
}
