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

namespace FacebookAds;

use \Facebook\FacebookSession;
use \Facebook\FacebookRequest;
use \Facebook\FacebookResponse;
use \Psr\Log\LoggerInterface;
use \Psr\Log\NullLogger;

class Api {

  /**
   * @var string
   */
  const VERSION = '0.0.1';

  /**
   * @var string
   */
  const HTTP_METHOD_POST = 'POST';

  /**
   * @var string
   */
  const HTTP_METHOD_GET = 'GET';

  /**
   * @var string
   */
  const HTTP_METHOD_DELETE = 'DELETE';

  /**
   * @var Api
   */
  private static $instance;

  /**
   * @var FacebookSession
   */
  private $session;

  /**
   * @var LoggerInterface
   */
  private $logger;

  /**
   * @var HttpClient
   */
  protected $httpClient;

  /**
   * @param FacebookSession $session A Facebook API session
   * @param LoggerInterface $logger A PSR-3 compatible logger
   */
  public function __construct(
    FacebookSession $session,
    LoggerInterface $logger = null) {

    $this->session = $session;
    $this->logger = $logger ?: new NullLogger();

    if (static::instance() === null) {
      static::setInstance($this);
    }
  }

  /**
   * @return Api|null
   */
  public static function instance() {
    return static::$instance;
  }

  /**
   * @param Api $instance
   */
  public static function setInstance(Api $instance) {
    static::$instance = $instance;
  }

  /**
   * Make graph api calls
   *
   * @param string $path Ads API endpoint
   * @param string $method Ads API request type
   * @param array $params Assoc of request parameters
   * @return FacebookResponse Graph API responses
   */
  public function call(
    $path,
    $method = self::HTTP_METHOD_GET,
    array $params = null) {
    // json_encode all params values that are not primitives
    if ($params !== null) {
      foreach ($params as $key => $value) {
        if (!is_scalar($value) && !is_a($value, '\CURLFile', true)) {
          $params[$key] = json_encode($value);
        }
      }
    }

    $this->logger->debug(
      "HTTP/1.1 {$method} {$path} ".($params ? json_encode($params) : null));

    $client = FacebookRequest::getHttpClientHandler();
    FacebookRequest::setHttpClientHandler($this->getHttpClient());

    $request = new FacebookRequest($this->session, $method, $path, $params);
    $response = $request->execute();

    FacebookRequest::setHttpClientHandler($client);

    return $response;
  }

  /**
   * @return FacebookSession
   */
  public function getSession() {
    return $this->session;
  }

  /**
   * @return LoggerInterface
   */
  public function getLogger() {
    return $this->logger;
  }

  /**
   * @return HttpClient
   */
  public function getHttpClient() {
    if ($this->httpClient === null) {
      $this->httpClient = new HttpClient();
    }

    return $this->httpClient;
  }
}
