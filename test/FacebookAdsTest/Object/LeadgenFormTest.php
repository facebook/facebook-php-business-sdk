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

use FacebookAds\Object\Fields\LeadgenFormFields;
use FacebookAds\Object\LeadgenForm;
use FacebookAds\Object\Page;

class LeadgenFormTest extends AbstractCrudObjectTestCase {

  /**
   * @var int
   */
  protected $leadgenFormId;

  public function setup() {
    parent::setup();

    $page = new Page($this->getConfig()->pageId);
    $forms = $page->getLeadgenForms();

    if ($forms->count() === 0) {
      $this->markTestSkipped(sprintf(
        'LeadgenForms can\'t be created through the API.'
          .' Page %s has no leadgen forms',
        (string)$this->getConfig()->pageId));
    }

    $this->leadgenFormId = $forms->current()->{LeadgenFormFields::ID};
  }

  public function tearDown() {
    $this->leadgenFormId = null;

    parent::tearDown();
  }

  public function testCrud() {
    $form = new LeadgenForm($this->leadgenFormId);

    $this->assertCannotCreate($form);
    $this->assertCanRead($form);
    $this->assertCannotUpdate($form);
    $this->assertCanFetchConnection($form, 'getLeads');
    $this->assertCannotDelete($form);
  }
}
