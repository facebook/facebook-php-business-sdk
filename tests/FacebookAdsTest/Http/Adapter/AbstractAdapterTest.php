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

namespace FacebookAdsTest\Http\Adapter;

use FacebookAds\Http\Adapter\AdapterInterface;
use FacebookAds\Http\Client;
use FacebookAdsTest\AbstractUnitTestCase;

abstract class AbstractAdapterTest extends AbstractUnitTestCase {

  /**
   * @param Client $client
   * @return AdapterInterface
   */
  abstract protected function createAdapter($client = null);

  public function testGetters() {
    $client = new Client();
    $adapter = $this->createAdapter($client);
    $this->assertTrue($client === $adapter->getClient());
    $this->assertEquals(
      $client->getCaBundlePath(), $adapter->getCaBundlePath());
  }

  public function testOpts() {
    $adapter = $this->createAdapter();
    $opts = new \ArrayObject();
    $adapter->setOpts($opts);
    $this->assertTrue($opts === $adapter->getOpts());

    // Default initialization
    $adapter = $this->createAdapter();
    $this->assertTrue($adapter->getOpts() instanceof \ArrayObject);
  }

  abstract public function testRequest();
}
