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

use Facebook\FacebookRequest;
use FacebookAds\Api;
use FacebookAds\Object\CustomAudience;
use FacebookAds\Object\Fields\CustomAudienceFields;

class CustomAudienceTest extends AbstractCrudObjectTestCase {

  public function testCustomAudiences() {
    $ca = new CustomAudience(null, $this->getActId());
    $ca->{CustomAudienceFields::NAME} = $this->getTestRunId();

    $this->assertCanCreate($ca);
    $this->assertCanRead($ca);
    $this->assertCanUpdate(
      $ca,
      array(CustomAudienceFields::NAME => $this->getTestRunId().' updated'));

    $me = (new FacebookRequest(
      $this->getSession(),
      Api::HTTP_METHOD_GET,
      '/me'))->execute()->getResponse();

    $uid = $me->{'id'};

    $has_throw_exception = false;
    $users = array(
      array(
        'id' => $uid,
      ),
    );
    try {
      $this->assertTrue($ca->addUsers($users));
      $this->assertTrue($ca->removeUsers($users));
    } catch (\Exception $e) {
      $has_throw_exception = true;
    }
    $this->assertFalse($has_throw_exception);

    $this->assertCanDelete($ca);
  }
}
