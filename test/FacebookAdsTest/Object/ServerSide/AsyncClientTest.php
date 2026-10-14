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

namespace FacebookAdsTest\Object\ServerSide;

use FacebookAdsTest\AbstractUnitTestCase;
use FacebookAds\Object\ServerSide\AsyncClient;
use FacebookAds\Api;

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\CurlHandler;

Api::init(null, null, 'access-token', false);

class AsyncClientTest extends AbstractUnitTestCase {
  public function testSingleton() {
    $client1 = AsyncClient::getInstance()->getClient();
    $client2 = AsyncClient::getInstance()->getClient();

    $this->assertEquals($client1, $client2);
  }

  public function testClientOptions() {
    $async_client = AsyncClient::getInstance()->getClient();
    $config = $async_client->getConfig();

    $this->assertEquals(
      HandlerStack::create(new CurlHandler()),
      $config['handler']
    );
    $this->assertEquals(10, $config['connect_timeout']);
    $this->assertEquals(60, $config['timeout']);
    $this->assertEquals(
      Api::instance()->getHttpClient()->getCaBundlePath(),
      $config['verify']
    );
  }
}
