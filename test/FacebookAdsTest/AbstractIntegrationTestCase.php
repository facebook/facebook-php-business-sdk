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
use FacebookAds\Http\Adapter\CurlAdapter;
use FacebookAds\Http\Client;
use FacebookAds\Http\Exception\RequestException;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Logger\LoggerInterface;
use FacebookAds\Logger\NullLogger;
use FacebookAds\Session;
use FacebookAdsTest\Exception\PHPUnitRequestExceptionWrapper;

/**
 * Base class for the integration test cases.
 * Provide Network services.
 */
class AbstractIntegrationTestCase extends AbstractTestCase {

  /**
   * @var LoggerInterface
   */
  protected $logger;

  /**
   * @var Client
   */
  protected $httpClient;

  /**
   * @var Session
   */
  protected $session;

  /**
   * @var Api
   */
  protected $api;

  /**
   * @return LoggerInterface
   */
  public function getLogger() {
    return $this->logger;
  }

  /**
   * @return Session
   */
  public function getSession() {
    return $this->session;
  }

  /**
   * @return Client
   */
  public function getHttpClient() {
    return $this->httpClient;
  }

  /**
   * @return Api
   */
  public function getApi() {
    return $this->api;
  }

  protected function setupSession() {
    $this->session = new Session(
      $this->getConfig()->appId,
      $this->getConfig()->appSecret,
      $this->getConfig()->accessToken);
  }

  protected function setupHttpClient() {
    $this->httpClient = new Client();
    if ($this->getConfig()->graphBaseDomain) {
      $this->httpClient->setDefaultGraphBaseDomain(
        $this->getConfig()->graphBaseDomain);
    }
    if ($this->getConfig()->skipSslVerification) {
      /** @var CurlAdapter $adapter */
      $adapter = $this->httpClient->getAdapter();
      $adapter->getOpts()->offsetSet(CURLOPT_SSL_VERIFYHOST, false);
      $adapter->getOpts()->offsetSet(CURLOPT_SSL_VERIFYPEER, false);
    }
  }

  protected function setupLogger() {
    $this->logger = $this->getConfig()->curlLogger
      ? new CurlLogger(fopen($this->getConfig()->curlLogger, "a"))
      : new NullLogger();
  }

  protected function setupApi() {
    $this->api = new Api(
      $this->getHttpClient(),
      $this->getSession());

    $this->api->setLogger($this->getLogger());

    Api::setInstance($this->api);
  }

  public function setup() : void {
    parent::setup();

    $this->getSkippableFeaturesManager()->enforceSkipTest($this);

    $this->setupLogger();
    $this->setupSession();
    $this->setupHttpClient();
    $this->setupApi();
  }

  public function tearDown() : void {
    $this->api = null;
    $this->httpClient = null;
    $this->session = null;
    $this->logger = null;

    parent::tearDown();
  }

  /**
   * This method is called when a test method did not execute successfully.
   *
   * @param \Throwable $e
   * @throws \Throwable
   */
  protected function onNotSuccessfulTest(\Throwable $e) : void {
    if ($e instanceof RequestException) {
      throw new PHPUnitRequestExceptionWrapper($e);
    } else {
      throw $e;
    }
  }
}
