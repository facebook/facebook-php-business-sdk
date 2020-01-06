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

use FacebookAds\Http\Adapter\AdapterInterface;
use FacebookAds\Http\Adapter\Curl\CurlInterface;
use FacebookAds\Http\Client;
use FacebookAds\Http\Headers;
use FacebookAds\Http\Parameters;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\ResponseInterface;
use FacebookAds\Logger\LoggerInterface;
use FacebookAds\Session;
use PHPUnit_Framework_MockObject_Builder_InvocationMocker as Mocker;
use PHPUnit_Framework_MockObject_MockObject as Mock;

/**
 * @method Mocker|Mock getMock($fqn, $methods = array(), $arguments = array())
 */
abstract class AbstractUnitTestCase extends AbstractTestCase {

  /**
   * @var string
   */
  const FQN_ADAPTER_INTERFACE = '\FacebookAds\Http\Adapter\AdapterInterface';

  /**
   * @var string
   */
  const FQN_CLIENT = '\FacebookAds\Http\Client';

  /**
   * @var string
   */
  const FQN_CURL_INTERFACE = '\FacebookAds\Http\Adapter\Curl\CurlInterface';

  /**
   * @var string
   */
  const FQN_HEADERS = '\FacebookAds\Http\Headers';

  /**
   * @var string
   */
  const FQN_LOGGER_INTERFACE = '\FacebookAds\Logger\LoggerInterface';

  /**
   * @var string
   */
  const FQN_PARAMETERS = '\FacebookAds\Http\Parameters';

  /**
   * @var string
   */
  const FQN_JSON_AWARE_PARAMETERS
    = '\FacebookAds\Logger\CurlLogger\JsonAwareParameters';

  /**
   * @var string
   */
  const FQN_REQUEST_INTERFACE = '\FacebookAds\Http\RequestInterface';

  /**
   * @var string
   */
  const FQN_RESPONSE_INTERFACE = '\FacebookAds\Http\ResponseInterface';

  /**
   * @var string
   */
  const FQN_SESSION = '\FacebookAds\Session';

  /**
   * @var string
   */
  const VALUE_SESSION_APP_ID = '<APP_ID>';

  /**
   * @var string
   */
  const VALUE_SESSION_APP_SECRET = '<APP_SECRET>';

  /**
   * @var string
   */
  const VALUE_SESSION_ACCESS_TOKEN = '<ACCESS_TOKEN>';

  /**
   * @return Mocker|Mock|ResponseInterface
   */
  protected function createResponseMock() {
    return $this->createMock(static::FQN_RESPONSE_INTERFACE);
  }

  /**
   * @return Mocker|Mock|Client
   */
  protected function createClientMock() {
    return $this->createMock(static::FQN_CLIENT);
  }

  /**
   * @return Mocker|Mock|CurlInterface
   */
  protected function createCurlMock() {
    return $this->createMock(static::FQN_CURL_INTERFACE);
  }

  /**
   * @return Mocker|Mock|Headers
   */
  protected function createHeadersMock() {
    return $this->createMock(static::FQN_HEADERS);
  }

  /**
   * @return Mocker|Mock|LoggerInterface
   */
  protected function createLoggerMock() {
    return $this->createMock(static::FQN_LOGGER_INTERFACE);
  }

  /**
   * @return Mocker|Mock|Parameters
   */
  protected function createParametersMock() {
    return $this->createMock(static::FQN_PARAMETERS);
  }

  /**
   * @return Mocker|Mock|Parameters
   */
  protected function createJsonAwareParametersMock() {
    return $this->createMock(static::FQN_JSON_AWARE_PARAMETERS);
  }

  /**
   * @return Mocker|Mock|RequestInterface
   */
  protected function createRequestMock() {
    return $this->createMock(static::FQN_REQUEST_INTERFACE);
  }

  /**
   * @return Mocker|Mock|AdapterInterface
   */
  protected function createAdapterMock() {
    return $this->createMock(static::FQN_ADAPTER_INTERFACE);
  }

  /**
   * @return Mocker|Mock|Session
   */
  protected function createSessionMock() {
    return $this->getMockBuilder(static::FQN_SESSION)
                ->setConstructorArgs(array(
                  static::VALUE_SESSION_APP_ID,
                  static::VALUE_SESSION_APP_SECRET,
                  static::VALUE_SESSION_ACCESS_TOKEN,
                ))
                ->getMock();
  }
}
