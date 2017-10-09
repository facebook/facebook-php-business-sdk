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

namespace FacebookAdsTest\Config;

use FacebookAdsTest\AbstractTestCase;

final class SkippableFeaturesManager {

  /**
   * @var SkippableFeaturesManager
   */
  private static $instance;

  /**
   * @var array
   */
  protected $data = array();

  /**
   * @return SkippableFeaturesManager
   */
  public static function instance() {
    return self::$instance ?: (self::$instance = new self());
  }

  /**
   * @param SkippableFeaturesManager $manager
   */
  public static function setInstance(SkippableFeaturesManager $manager) {
    self::$instance = $manager;
  }

  /**
   * @param array $data
   */
  public function __construct(array $data = array()) {
    $this->setData($data);
  }

  public function setData(array $data = array()) {
    $this->data = $data;
  }

  /**
   * @return array
   */
  public function getData() {
    return $this->data;
  }

  /**
   * @param $key
   * @return bool
   */
  public function isSkipKey($key) {
    return array_key_exists($key, $this->data) && $this->data[$key];
  }

  /**
   * @param AbstractTestCase $test
   * @return bool
   */
  public function enforceSkipTest(AbstractTestCase $test) {
    if ($test instanceof SkippableFeatureTestInterface) {
      foreach ($test->skipIfAny() as $key) {
        if ($this->isSkipKey($key)) {
          /** @var AbstractTestCase $test */
          $test->markTestSkipped("Reason: skipped by config '{$key}'");
        }
      }
    }
  }
}
