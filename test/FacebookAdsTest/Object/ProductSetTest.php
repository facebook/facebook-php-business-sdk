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
use FacebookAds\Object\ProductSet;
use FacebookAds\Object\Fields\ProductCatalogFields;
use FacebookAds\Object\Fields\ProductSetFields;

class ProductSetTest extends AbstractCrudObjectTestCase {

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
    $product_set = new ProductSet(null, $this->productCatalog->id);
    $product_set->setData(array(
      ProductSetFields::NAME => $feed_name,
      ProductSetFields::FILTER => array(
        'retailer_id' => array(
          'is_any' => array('pid1', 'pid2')
        )
      )
    ));

    $this->assertCanCreate($product_set);
    $this->assertCanRead($product_set);
    $this->assertCanUpdate($product_set, array(
      ProductSetFields::NAME => $feed_name.' updated',
    ));
    $this->assertCanFetchConnection($product_set, 'getProductGroups');
    $this->assertCanDelete($product_set);
  }
}
