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

use FacebookAds\Object\AdCreative;
use FacebookAds\Object\Fields\AdCreativeFields;

class AdCreativeTest extends AbstractCrudObjectTestCase {

  public function testCrud() {
    $creative = new AdCreative(null, $this->getActId());
    $creative->{AdCreativeFields::TITLE} = 'My Test Ad';
    $creative->{AdCreativeFields::NAME} = 'My Test Ad';
    $creative->{AdCreativeFields::BODY} = 'My Test Ad Body';
    $creative->{AdCreativeFields::OBJECT_ID} = $this->getPageId();
    $this->assertCanCreate($creative);
    $this->assertCanRead($creative);
    $this->assertCanUpdate(
      $creative,
      array(AdCreativeFields::NAME => 'My Test Ad '. $this->getTestRunId()));
    $this->assertCanDelete($creative);
  }
}
