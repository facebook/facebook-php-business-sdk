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

use Facebook\FacebookSession;
use FacebookAds\Api;
use Psr\Log\NullLogger;

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
  public static $testRunId;

  /**
   * @var FacebookSession
   */
  protected static $session;

  /**
   * @var NullLogger
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
  public function getTestRunId() {
    return static::$testRunId;
  }

  /**
   * @return FacebookSession
   */
  public function getSession() {
    return static::$session;
  }

  /**
   * @return NullLogger
   */
  public function getLogger() {
    return static::$logger;
  }

  /**
   * @return Api
   */
  public function getApi() {
    return $this->api;
  }

  public static function setupBeforeClass() {
    parent::setupBeforeClass();
    static::$session = new FacebookSession(static::$accessToken);
    static::$logger = new NullLogger();
  }

  public static function tearDownAfterClass() {
    parent::tearDownAfterClass();
    static::$session = null;
  }

  public function setup() {
    parent::setup();
    $this->api = new Api($this->getSession(), $this->getLogger());
  }

  public function tearDown() {
    parent::tearDown();
    $this->api = null;
  }
}
