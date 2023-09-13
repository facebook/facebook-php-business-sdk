<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds;

use FacebookAds\Http\Client;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\ResponseInterface;
use FacebookAds\Logger\LoggerInterface;
use FacebookAds\Logger\NullLogger;
use FacebookAds\CrashReporter;

class Api {

  /**
   * @var string
   */
  const VERSION = ApiConfig::APIVersion;

  /**
   * @var Api
   */
  protected static $instance;

  /**
   * @var SessionInterface
   */
  private $session;

  /**
   * @var LoggerInterface
   */
  protected $logger;

  /**
   * @var Client
   */
  protected $httpClient;

  /**
   * @var string
   */
  protected $defaultGraphVersion;

  /**
   * @param Client $http_client
   * @param SessionInterface $session A Facebook API session
   */
  public function __construct(
    Client $http_client,
    SessionInterface $session) {
    $this->httpClient = $http_client;
    $this->session = $session;
  }

  /**
   * @param string $app_id
   * @param string $app_secret
   * @param string $access_token
   * @return static
   */
  public static function init($app_id, $app_secret, $access_token, $log_crash=true) {
    $session = new Session($app_id, $app_secret, $access_token);
    $api = new static(new Client(), $session);
    static::setInstance($api);
    if ($log_crash) {
      CrashReporter::enable();
    }
    return $api;
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
   * @param SessionInterface $session
   * @return Api
   */
  public function getCopyWithSession(SessionInterface $session) {
    $api = new self($this->getHttpClient(), $session);
    $api->setDefaultGraphVersion($this->getDefaultGraphVersion());
    $api->setLogger($this->getLogger());
    return $api;
  }

  /**
   * @param string $string
   * @return string
   */
  public static function base64UrlEncode($string) {
    $str = strtr(base64_encode($string), '+/', '-_');
    $str = str_replace('=', '', $str);
    return $str;
  }

  /**
   * @param string $path
   * @param string $method
   * @param array $params
   * @return RequestInterface
   */
  public function prepareRequest(
    $path,
    $method = RequestInterface::METHOD_GET,
    array $params = array()) {

    $request = $this->getHttpClient()->createRequest();
    $request->setMethod($method);
    $request->setGraphVersion($this->getDefaultGraphVersion());
    $request->setPath($path);

    if ($method === RequestInterface::METHOD_GET) {
      $params_ref = $request->getQueryParams();
    } else {
      $params_ref = $request->getBodyParams();
    }

    if (!empty($params)) {
      $params_ref->enhance($params);
    }

    $params_ref->enhance($this->getSession()->getRequestParameters());

    return $request;
  }

  /**
   * @param RequestInterface $request
   * @return ResponseInterface
   */
  public function executeRequest(RequestInterface $request) {
    $this->getLogger()->logRequest('debug', $request);
    $response = $request->execute();
    $this->getLogger()->logResponse('debug', $response);

    return $response;
  }

  /**
   * @return string
   */
  public function getDefaultGraphVersion() {
    if ($this->defaultGraphVersion === null) {
      $match = array();
      if (preg_match("/^\d+\.\d+/", static::VERSION, $match)) {
        $this->defaultGraphVersion = $match[0];
      }
    }

    return $this->defaultGraphVersion;
  }

  /**
   * @param string $version
   */
  public function setDefaultGraphVersion($version) {
    $this->defaultGraphVersion = $version;
  }

  /**
   * Make graph api calls
   *
   * @param string $path Ads API endpoint
   * @param string $method Ads API request type
   * @param array $params Assoc of request parameters
   * @return ResponseInterface Graph API responses
   */
  public function call(
    $path,
    $method = RequestInterface::METHOD_GET,
    array $params = array(),
    array $file_params = array()) {

    $request = $this->prepareRequest($path, $method, $params);

    if (!empty($file_params)) {
      foreach($file_params as $key => $value) {
        $request->getFileParams()->offsetSet($key, $value);
      }
    }

    return $this->executeRequest($request);
  }

  /**
   * @return SessionInterface
   */
  public function getSession() {
    return $this->session;
  }

  /**
   * @param LoggerInterface $logger
   */
  public function setLogger(LoggerInterface $logger) {
    $this->logger = $logger;
  }

  /**
   * @return LoggerInterface
   */
  public function getLogger() {
    if ($this->logger === null) {
      $this->logger = new NullLogger();
    }
    return $this->logger;
  }

  /**
   * @return Client
   */
  public function getHttpClient() {
    return $this->httpClient;
  }
}
