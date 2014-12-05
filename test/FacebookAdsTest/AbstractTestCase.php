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

use FacebookAds\Api;
use FacebookAds\Http\Adapter\CurlAdapter;
use FacebookAds\Http\Client;
use FacebookAds\Http\Exception\RequestException;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Logger\LoggerInterface;
use FacebookAds\Logger\NullLogger;
use FacebookAds\Session;
use FacebookAdsTest\Exception\PHPUnitRequestExceptionWrapper;
use SebastianBergmann\Exporter\Exception;

/**
 * Base class for the unit test cases, providing the functions for AdsAPI
 * initialization etc.
 */
class AbstractTestCase extends \PHPUnit_Framework_TestCase {

  /**
   * @var string
   */
  public static $appId;

  /**
   * @var string
   */
  public static $appSecret;

  /**
   * @var string
   */
  public static $accessToken;

  /**
   * @var string
   */
  public static $actId;

  /**
   * @var string
   */
  public static $pageId;

  /**
   * @var string
   */
  public static $appUrl;

  /**
   * @var string|null
   */
  public static $graphBaseDomain;

  /**
   * @var bool
   */
  public static $skipSslVerification = false;

  /**
   * @var resource|null
   */
  public static $curlLoggerResource;

  /**
   * @var array
   */
  public static $skipIf = array();

  /**
   * @var string
   */
  public static $testRunId;

  /**
   * @var Client
   */
  protected $httpClient;

  /**
   * @var Session
   */
  protected $session;

  /**
   * @var LoggerInterface
   */
  protected static $logger;

  /**
   * @var Api
   */
  protected $api;

  /**
   * @return string
   */
  public function getAppId() {
    return static::$appId;
  }

  /**
   * @return string
   */
  public function getAppSecret() {
    return static::$appSecret;
  }

  /**
   * @return string
   */
  public function getAccessToken() {
    return static::$accessToken;
  }

  /**
   * @return string
   */
  public function getActId() {
    return static::$actId;
  }

  /**
   * @return string
   */
  public function getPageId() {
    return static::$pageId;
  }

  /**
   * @return string
   */
  public function getAppUrl() {
    return static::$appUrl;
  }

  /**
   * @return string
   */
  public function getTestRunId() {
    return static::$testRunId;
  }

  /**
   * @return Session
   */
  public function getSession() {
    return $this->session;
  }

  /**
   * @return LoggerInterface
   */
  public function getLogger() {
    return static::$logger;
  }

  /**
   * @return null|string
   */
  public static function getGraphBaseDomain() {
    return self::$graphBaseDomain;
  }

  /**
   * @return boolean
   */
  public static function getSkipSslVerification() {
    return self::$skipSslVerification;
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

  /**
   * @return string
   */
  public function getTestImagePath() {
    return __DIR__.'/../misc/image.png';
  }

  /**
   * @return string
   */
  public function getTestZippedImagesPath() {
    return __DIR__.'/../misc/images.zip';
  }

  /**
   * @return string
   */
  public function getTestVideoPath() {
    return __DIR__.'/../misc/video.mp4';
  }

  /**
   * @param $config_key
   * @return bool
   */
  public function shouldSkipTest($config_key) {
    return array_key_exists($config_key, static::$skipIf)
      && static::$skipIf[$config_key];
  }

  public static function setupBeforeClass() {
    parent::setupBeforeClass();

    static::$logger = static::$curlLoggerResource
      ? new CurlLogger(static::$curlLoggerResource)
      : new NullLogger();
  }

  protected function setupSession() {
    $this->session = new Session(
      static::$appId,
      static::$appSecret,
      static::$accessToken);
  }

  protected function setupHttpClient() {
    $this->httpClient = new Client();
    if ($this->getGraphBaseDomain()) {
      $this->httpClient->setDefaultGraphBaseDomain($this->getGraphBaseDomain());
    }
    if ($this->getSkipSslVerification()) {
      /** @var CurlAdapter $adapter */
      $adapter = $this->httpClient->getAdapter();
      $adapter->getOpts()->offsetSet(CURLOPT_SSL_VERIFYHOST, false);
      $adapter->getOpts()->offsetSet(CURLOPT_SSL_VERIFYPEER, false);
    }
  }

  protected function setupApi() {
    $this->api = new Api(
      $this->getHttpClient(),
      $this->getSession());

    $this->api->setLogger($this->getLogger());

    Api::setInstance($this->api);
  }

  public function setup() {
    if ($this instanceof SkippableFeatureTestInterface) {
      foreach ($this->skipIfAny() as $config_key) {
        /** @var AbstractTestCase $this */
        if ($this->shouldSkipTest($config_key)) {
          $this->markTestSkipped("Reason: skipped by config '{$config_key}'");
        }
      }
    }

    parent::setup();

    $this->setupSession();
    $this->setupHttpClient();
    $this->setupApi();
  }

  public function tearDown() {
    parent::tearDown();
    $this->api = null;
    $this->httpClient = null;
    $this->session = null;
  }

  /**
   * This method is called when a test method did not execute successfully.
   *
   * @param \Exception $e
   * @throws \Exception
   */
  protected function onNotSuccessfulTest(\Exception $e) {
    if ($e instanceof RequestException) {
      throw new PHPUnitRequestExceptionWrapper($e);
    } else {
      throw $e;
    }
  }
}
