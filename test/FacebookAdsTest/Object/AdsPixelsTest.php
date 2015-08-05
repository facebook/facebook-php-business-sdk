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

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\AdsPixel;
use FacebookAds\Object\Fields\AdsPixelsFields;

class AdsPixelsTest extends AbstractCrudObjectTestCase {

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
   * @depends testCreate
   */
  public function testCrud() {

    $account = new AdAccount($this->getConfig()->accountId);
    $pixel = $account->getAdsPixels()->current();

    $pixelId = $pixel->{AdsPixelsFields::ID};

    $pixel = new AdsPixel($pixelId);

    $this->assertCanRead($pixel);

    $this->assertCanUpdate(
      $pixel,
      array(AdsPixelsFields::NAME => $this->getConfig()->testRunId.' updated'));

    $this->assertCannotDelete($pixel);
  }

  /**
   * @depends testCreate
   */
  public function testShare() {

    $account = new AdAccount($this->getConfig()->accountId);
    $secondaryAccountId = $this->getConfig()->secondaryAccountId;
    $business = new Business($this->getConfig()->businessManagerId);
    $businessId = $this->getConfig()->businessManagerId;
    $secondaryBusinessId = $this->getConfig()->secondaryBusinessId;
    $pixel = $account->getAdsPixels()->current();

    $business->claimAdAccount(
      $this->getConfig()->accountId,
      BusinessRoles::AGENCY,
      array(AdAccountRoles::ADMIN));
    $business->claimAdAccount(
      $this->getConfig()->secondaryAccountId,
      BusinessRoles::AGENCY,
      array(AdAccountRoles::ADMIN));

    $pixelId = $pixel->{AdsPixelsFields::ID};

    $pixel = new AdsPixel($pixelId);

    $responseAccount = $pixel->sharePixel($businessId, $secondaryAccountId);
    $responseBusiness = $pixel->sharePixelAgencies(
      $businessId,
      $secondaryBusinessId);

    $this->assertSuccessResponse($responseAccount);
    $this->assertSuccessResponse($responseBusiness);
  }

  /**
   * @depends testShare
   */
  public function testList() {
    $account = new AdAccount($this->getConfig()->accountId);
    $business = new Business($this->getConfig()->businessManagerId);
    $businessId = $this->getConfig()->businessManagerId;
    $pixel = $account->getAdsPixels()->current();

    $business->claimAdAccount(
      $this->getConfig()->accountId,
      BusinessRoles::AGENCY,
      array(AdAccountRoles::ADMIN));

    $pixelId = $pixel->{AdsPixelsFields::ID};

    $pixel = new AdsPixel($pixelId);

    $accountCursor = $pixel->listAdAccounts($businessId);
    $businessCursor = $pixel->listSharedAgencies();

    $accountList = $accountCursor->current();
    $businessList = $businessCursor->current();

    $this->assertNotEmpty($accountList->key);
    $this->assertNotEmpty($businessList->key);
  }
}
