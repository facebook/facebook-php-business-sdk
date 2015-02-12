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

namespace FacebookAdsTest\Logger;

use FacebookAds\Http\RequestInterface;
use FacebookAds\Logger\CurlLogger;

class CurlLoggerTest extends AbstractLoggerTest {

  /**
   * @var resource
   */
  protected $handle;

  public function setup() {
    $this->handle = fopen('php://temp', 'w+');
  }

  public function tearDown() {
    fclose($this->handle);
  }

  /**
   * @return resource
   */
  protected function getHandle() {
    return $this->handle;
  }

  /**
   * @return CurlLogger
   */
  protected function createLogger() {
    return new CurlLogger($this->getHandle());
  }

  protected function createRequestMock() {
    $query = $this->createParametersMock();
    $query->method('export')->willReturn(array(
      'query_field' => 'query_value',
    ));

    $body = $this->createParametersMock();
    $body->method('export')->willReturn(array(
      'body_field' => 'body_value',
    ));

    $files = $this->createParametersMock();
    $files->method('export')->willReturn(array(
      'file_field' => 'filepath',
    ));

    $request = parent::createRequestMock();
    $request->method('getQueryParams')
      ->willReturn($query);
    $request->method('getBodyParams')
      ->willReturn($body);
    $request->method('getFileParams')
      ->willReturn($files);

    return $request;
  }

  public function testLog() {
    $this->createLogger()->log(
      static::VALUE_LOG_LEVEL, static::VALUE_LOG_MESSAGE);
  }

  /**
   * @return array
   */
  public function logRequestProvider() {
    return array(
      array(RequestInterface::METHOD_GET, true),
      array(RequestInterface::METHOD_GET, false),
      array(RequestInterface::METHOD_POST, true),
      array(RequestInterface::METHOD_POST, false),
      array(RequestInterface::METHOD_PUT, true),
      array(RequestInterface::METHOD_PUT, false),
      array(RequestInterface::METHOD_DELETE, true),
      array(RequestInterface::METHOD_DELETE, false),
    );
  }

  /**
   * @dataProvider logRequestProvider
   * @param string $http_method
   * @param bool $show_sensitive_data
   */
  public function testLogRequest($http_method, $show_sensitive_data) {
    $request = $this->createRequestMock();
    $request->method('getMethod')->willReturn($http_method);

    $logger = $this->createLogger();
    $logger->setShowSensitiveData($show_sensitive_data);
    $logger->getSensitiveParametersList()->append('body_field');
    $logger->setEscapeLevels(2);
    $logger->logRequest(
      static::VALUE_LOG_LEVEL, $request);
  }

  public function testLogResponse() {
    $this->createLogger()->logResponse(
      static::VALUE_LOG_LEVEL, $this->createResponseMock());
  }

  public function testSensitiveData() {
    $logger = $this->createLogger();
    $show = (bool) rand(0, 1);
    $logger->setShowSensitiveData($show);
    $this->assertEquals($show, $logger->getShowSensitiveData());

    $logger = $this->createLogger();
    $list = new \ArrayObject();
    $logger->setSensitiveParametersList($list);
    $this->assertTrue($list === $logger->getSensitiveParametersList());

    // Test default
    $logger = $this->createLogger();
    $this->assertTrue(in_array(
      'access_token',
      $logger->getSensitiveParametersList()->getArrayCopy()));
    $this->assertTrue(in_array(
      'appsecret_proof',
      $logger->getSensitiveParametersList()->getArrayCopy()));
  }
}
