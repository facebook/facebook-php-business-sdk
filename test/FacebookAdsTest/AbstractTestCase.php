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

use FacebookAds\Logger\CurlLogger;
use FacebookAds\Logger\LoggerInterface;
use FacebookAds\Logger\NullLogger;
use \PHPUnit_Framework_MockObject_Builder_InvocationMocker as Mock;

/**
 * Base class for the unit test cases, providing the functions for AdsAPI
 * initialization etc.
 */
class AbstractTestCase extends \PHPUnit_Framework_TestCase {

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
   * @var LoggerInterface
   */
  protected static $logger;

  /**
   * @return string
   */
  public function getTestRunId() {
    return static::$testRunId;
  }

  /**
   * @return LoggerInterface
   */
  public function getLogger() {
    return static::$logger;
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
    static::$logger = self::$curlLoggerResource
      ? new CurlLogger(self::$curlLoggerResource)
      : new NullLogger();
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
  }

  /**
   * @param \PHPUnit_Framework_MockObject_MockObject|Mock $mock
   * @param array $data
   */
  protected function makeMockIterable(
    \PHPUnit_Framework_MockObject_MockObject $mock, array $data = array()) {

    /** @var Mock $mock */
    $mock->method('count')->willReturn(count($data));
    $mock->method('getIterator')->willReturn(new \ArrayIterator($data));
    $mock->method('getArrayCopy')->willReturn($data);
    $mock->method('export')->willReturn($data);
  }
}
