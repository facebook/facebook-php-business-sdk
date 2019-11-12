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

namespace FacebookAdsTest;

use FacebookAds\Api;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\ResponseInterface;
use FacebookAds\Logger\NullLogger;

class ApiTest extends AbstractUnitTestCase {

  /**
   * @return Api
   */
  protected function createApi() {
    return new Api($this->createClientMock(), $this->createSessionMock());
  }

  public function testInstance() {
    $this->assertNull(Api::instance());

    $api = $this->createApi();
    Api::setInstance($api);
    $this->assertTrue($api === Api::instance());

    $newApi = $this->createApi();
    Api::setInstance($newApi);
    $this->assertTrue($newApi === Api::instance());
    $this->assertFalse($api === Api::instance());
  }

  public function testInit() {
    $api = Api::init(
      static::VALUE_SESSION_APP_ID,
      static::VALUE_SESSION_APP_SECRET,
      static::VALUE_SESSION_ACCESS_TOKEN,
      false
    );
    $this->assertTrue($api instanceof Api);
    $this->assertTrue($api === Api::instance());
    $this->assertEquals(
      static::VALUE_SESSION_APP_ID, $api->getSession()->getAppId());
    $this->assertEquals(
      static::VALUE_SESSION_APP_SECRET, $api->getSession()->getAppSecret());
    $this->assertEquals(
      static::VALUE_SESSION_ACCESS_TOKEN, $api->getSession()->getAccessToken());
  }

  public function testGetters() {
    $client = $this->createClientMock();
    $session = $this->createSessionMock();
    $api = new Api($client, $session);
    $this->assertTrue($api->getHttpClient() === $client);
    $this->assertTrue($api->getSession() === $session);
  }

  public function testLogger() {
    $api = $this->createApi();
    $logger = $this->createLoggerMock();
    $api->setLogger($logger);
    $this->assertTrue($logger === $api->getLogger());

    // Test default
    $api = $this->createApi();
    $this->assertTrue($api->getLogger() instanceof NullLogger);
  }

  public function testDefaultGraphVersion() {
    $api = $this->createApi();
    $api->setDefaultGraphVersion('<VERSION>');
    $this->assertEquals('<VERSION>', $api->getDefaultGraphVersion());

    // Test default
    $api = $this->createApi();
    $this->assertTrue(is_string($api->getDefaultGraphVersion()));
    $this->assertRegExp('/^\d+\.\d+$/', $api->getDefaultGraphVersion());
  }

  public function testCall() {
    $request = $this->createRequestMock();
    $request->method('execute')->willReturn($this->createResponseMock());
    $request->method('getQueryParams')
      ->willReturn($this->createParametersMock());
    $request->method('getBodyParams')
      ->willReturn($this->createParametersMock());
    $request->expects($this->exactly(2))->method('setMethod')
      ->with($this->logicalOr(
        RequestInterface::METHOD_GET,
        RequestInterface::METHOD_POST));
    $request->expects($this->exactly(2))->method('setGraphVersion')
      ->with($this->equalTo($this->createApi()->getDefaultGraphVersion()));
    $request->expects($this->exactly(2))->method('setPath')
      ->with($this->equalTo('/<PATH>'));

    $client = $this->createClientMock();
    $client->method('createRequest')->willReturn($request);

    $session = $this->createSessionMock();
    $session->method('getAppSecretProof')->willReturn('<APP_SECRET_PROOF>');
    $session->method('getRequestParameters')->willReturn([]);

    $logger = $this->createLoggerMock();
    $logger->expects($this->exactly(2))->method('logRequest');
    $logger->expects($this->exactly(2))->method('logResponse');

    $api = new Api($client, $session);
    $api->setLogger($logger);

    // HTTP GET request
    $request->expects($this->exactly(1))->method('getQueryParams');

    $response = $api->call('/<PATH>');
    $this->assertTrue($response instanceof ResponseInterface);

    // HTTP POST request
    $request->expects($this->exactly(1))->method('getBodyParams');

    $api->call(
      '/<PATH>', RequestInterface::METHOD_POST, array('param' => 'value'));
    $this->assertTrue($response instanceof ResponseInterface);
  }

  public function testBase64UrlEncode() {
    $this->assertEquals('MTIzNDU', Api::base64UrlEncode('12345'));
  }
}
