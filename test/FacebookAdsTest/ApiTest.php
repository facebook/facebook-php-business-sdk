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

namespace FacebookAdsTest;

use Facebook\FacebookResponse;
use FacebookAds\Api;
use Psr\Log\NullLogger;

class ApiTest extends AbstractTestCase {

  public function testInstance() {
    $this->assertTrue($this->getApi() === Api::instance());

    $newApi = new Api($this->getSession());
    Api::setInstance($newApi);

    $this->assertTrue($newApi === Api::instance());
    $this->assertFalse($this->getApi() === Api::instance());

    // Restore default for future tests
    Api::setInstance($this->getApi());
  }

  public function testGetters() {
    $this->assertTrue($this->getApi()->getSession() === $this->getSession());
    $this->assertTrue($this->getApi()->getLogger() === $this->getLogger());
  }

  public function testNullableLogger() {
    $api = new Api($this->getSession(), null);
    $this->assertTrue($api->getLogger() instanceof NullLogger);
  }

  public function testCall() {
    $response = $this->getApi()->call(
      '/'.$this->getActId(),
      Api::HTTP_METHOD_GET,
      array('fields' => 'name'));

    $this->assertTrue($response instanceof FacebookResponse);
    $this->assertArrayHasKey('name', (array) $response->getResponse());
  }
}
