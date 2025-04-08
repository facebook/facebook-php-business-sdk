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

use FacebookAds\Object\Fields\LeadFields;
use FacebookAds\Object\Fields\LeadgenFormFields;
use FacebookAds\Object\Lead;
use FacebookAds\Object\LeadgenForm;
use FacebookAds\Object\Page;

class LeadTest extends AbstractCrudObjectTestCase {

  /**
   * @var int
   */
  protected $leadId;

  public function setup() : void {
    parent::setup();

    $limit = 25;
    $page = new Page($this->getConfig()->pageId);
    $forms = $page->getLeadgenForms(
      array(LeadgenFormFields::ID),
      array('limit' => $limit));

    $forms->setUseImplicitFetch(false); // Force-disable pagination

    /** @var LeadgenForm $form */
    foreach ($forms as $form) {
      $leads = $form->getLeads();
      if ($leads->count() > 0) {
        $this->leadId = $leads->current()->{LeadFields::ID};
        break;
      }
    }

    if ($this->leadId === null) {
      $this->markTestSkipped(sprintf(
        'Leads can\'t be created through the API.'
          .' The first %d leadgen forms of Page %s have no leads',
        $limit,
        (string)$this->getConfig()->pageId));
    }
  }

  public function tearDown() : void {
    $this->leadId = null;

    parent::tearDown();
  }

  public function testCrud() {
    $lead = new Lead($this->leadId);

    $this->assertCannotCreate($lead);
    $this->assertCanRead($lead);
    $this->assertCannotUpdate($lead);
    $this->assertCannotDelete($lead);
  }
}
