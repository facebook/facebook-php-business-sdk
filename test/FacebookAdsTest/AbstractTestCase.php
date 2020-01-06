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

use FacebookAdsTest\Config\Config;
use FacebookAdsTest\Config\SkippableFeaturesManager;
use \PHPUnit_Framework_MockObject_Builder_InvocationMocker as Mock;
use PHPUnit\Framework\TestCase;

/**
 * Base class for the unit test cases, providing the functions for AdsAPI
 * initialization etc.
 */
class AbstractTestCase extends TestCase {

  /**
   * @return SkippableFeaturesManager
   */
  public function getSkippableFeaturesManager() {
    return SkippableFeaturesManager::instance();
  }

  /**
   * @param string $key
   * @return bool
   */
  public function shouldSkipTest($key) {
    return $this->getSkippableFeaturesManager()->isSkipKey($key);
  }

  public function skipIf($key) {
    if ($this->shouldSkipTest($key)) {
      $this->markTestSkipped();
    }
  }

  /**
   * @return Config
   */
  public function getConfig() {
    return Config::instance();
  }

  /**
   * @return string
   * @deprecated use getConfig()
   */
  public function getTestRunId() {
    return $this->getConfig()->testRunId;
  }

  /**
   * @return string
   * @deprecated use getConfig()
   */
  public function getTestImagePath() {
    return $this->getConfig()->testImagePath;
  }

  /**
   * @return string
   * @deprecated use getConfig()
   */
  public function getTestZippedImagesPath() {
    return $this->getConfig()->testZippedImagesPath;
  }

  /**
   * @return string
   * @deprecated use getConfig()
   */
  public function getTestVideoPath() {
    return $this->getConfig()->testVideoPath;
  }

  /**
   * @param mixed $mock
   * @param array $data
   */
  protected function makeMockIterable(
    $mock, array $data = array()) {

    /** @var Mock $mock */
    $mock->method('count')->willReturn(count($data));
    $mock->method('getIterator')->willReturn(new \ArrayIterator($data));
    $mock->method('getArrayCopy')->willReturn($data);
    $mock->method('export')->willReturn($data);
  }

  /**
   * @param \Closure $closure
   * @param string $fqn
   */
  protected function assertWillThrow(
    \Closure $closure,
    $fqn = 'Exception') {

    try {
      call_user_func($closure);
    } catch (\Exception $e) {
      $this->assertTrue(
        is_a($e, $fqn),
        'Expected exception of type '.$fqn.': '.get_class($e).' received');

      return;
    }

    $this->fail('Expected exception didn\'t throw: '.$fqn);
  }
}
