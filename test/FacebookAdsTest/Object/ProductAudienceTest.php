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
use FacebookAds\Object\AdsPixel;
use FacebookAds\Object\ProductAudience;
use FacebookAds\Object\ProductCatalog;
use FacebookAds\Object\ProductSet;
use FacebookAds\Object\Fields\AdsPixelsFields;
use FacebookAds\Object\Fields\ProductAudienceFields;
use FacebookAds\Object\Fields\ProductCatalogFields;
use FacebookAds\Object\Fields\ProductSetFields;

class ProductAudienceTest extends AbstractCrudObjectTestCase {

  /**
   * @var ProductSet
   */
  protected $productSet;

  /**
   * @var ProductCatalog
   */
  protected $productCatalog;

  /**
   * @var AdAccount
   */
  protected $account;

  /**
   * @var AdsPixel
   */
  protected $adsPixel;

  public function setup() : void {
    parent::setup();

    $this->account = new AdAccount($this->getConfig()->accountId);

    $cursor = $this->account->getAdsPixels();
    $this->adsPixel = $cursor->current();

    $this->productCatalog =
      new ProductCatalog(null, $this->getConfig()->businessId);
    $this->productCatalog->setData(array(
      ProductCatalogFields::NAME => $this->getConfig()->testRunId,
    ));
    $this->productCatalog->create();

    $this->productSet =
      new ProductSet(null, $this->productCatalog->{ProductCatalogFields::ID});
    $this->productSet->setData(array(
      ProductSetFields::NAME => $this->getConfig()->testRunId,
      ProductSetFields::FILTER => array(
        'retailer_id' => array(
          'is_any' => array('pid1', 'pid2')
        )
      )
    ));
    $this->productSet->create();
  }

  public function tearDown() : void {
    if ($this->productSet) {
      $this->productSet->deleteSelf();
      $this->productSet = null;
    }

    if ($this->productCatalog) {
      $this->productCatalog->deleteSelf();
      $this->productCatalog = null;
    }

    parent::tearDown();
  }

  public function testCrudAccess() {
    $audience_name = $this->getConfig()->testRunId;
    $this->adsPixel->{AdsPixelsFields::ID};

    $audience = new ProductAudience(null, $this->getConfig()->accountId);
    $audience->setData(array(
      ProductAudienceFields::NAME => $audience_name,
      ProductAudienceFields::PRODUCT_SET_ID =>
        $this->productSet->{ProductSetFields::ID},
      ProductAudienceFields::PIXEL_ID =>
        $this->adsPixel->{AdsPixelsFields::ID},
      ProductAudienceFields::INCLUSIONS => array(array(
        'retention_seconds' => 86400,
        'rule' => array(
          'and' => array(
            array('event' => array('eq'=>'ViewContent')),
            array('userAgent' => array('i_contains'=>'iPhone'))
          )
        )
      )),
    ));

    $this->assertCanCreate($audience);
    $this->assertCanRead($audience);
    $this->assertCanUpdate($audience, array(
      ProductAudienceFields::NAME => $audience_name.' updated',
    ));
    $this->assertCanDelete($audience);
  }
}
