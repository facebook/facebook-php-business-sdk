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

use FacebookAds\Object\ProductCatalog;
use FacebookAds\Object\ProductFeed;
use FacebookAds\Object\Fields\ProductCatalogFields;
use FacebookAds\Object\Fields\ProductFeedFields;

class ProductFeedTest extends AbstractCrudObjectTestCase {

  /**
   * @var ProductCatalog
   */
  protected $productCatalog;

  public function setup() {
    parent::setup();

    $this->productCatalog
      = new ProductCatalog(null, $this->getConfig()->businessId);
    $this->productCatalog->setData(array(
      ProductCatalogFields::NAME => $this->getConfig()->testRunId,
    ));
    $this->productCatalog->create();
  }

  public function tearDown() {
    if ($this->productCatalog) {
      $this->productCatalog->deleteSelf();
      $this->productCatalog = null;
    }

    parent::tearDown();
  }

  public function testCrudAccess() {
    $feed_name = $this->getConfig()->testRunId;
    $feed = new ProductFeed(null, $this->productCatalog->id);
    $feed->setData(array(
      ProductFeedFields::FILE_NAME => 'my_product_feed.tsv',
      ProductFeedFields::NAME => $feed_name,
    ));

    $this->assertCanCreate($feed);
    $this->assertCanRead($feed);
    $this->assertCanUpdate($feed, array(
      ProductFeedFields::NAME => $feed_name.' updated',
    ));
    $this->assertCanFetchConnection($feed, 'getProducts');
    $this->assertCanFetchConnection($feed, 'getUploads');
    $this->assertCanDelete($feed);
  }
}
