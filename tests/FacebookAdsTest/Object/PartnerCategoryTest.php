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
use FacebookAds\Object\PartnerCategory;
use FacebookAdsTest\Config\SkippableFeatureTestInterface;

class PartnerCategoryTest extends AbstractCrudObjectTestCase
  implements SkippableFeatureTestInterface {

  /**
   * @return array
   */
  public function skipIfAny() {
    return array('no_partner_categories');
  }

  public function testCrudAccess() {
    $account = new AdAccount($this->getConfig()->accountId);
    $cursor = $account->getPartnerCategories();
    if (!$cursor->count()) {
      $this->markTestSkipped();
    }

    /* @var $category AbstractCrudObject */
    $category = $cursor->current();

    $this->assertTrue($category instanceof PartnerCategory);
    $this->assertCanRead($category);
    $this->assertCannotUpdate($category);
    $this->assertCannotDelete($category);
    $this->assertCannotCreate(
      new PartnerCategory(null, $this->getConfig()->accountId));
  }
}
