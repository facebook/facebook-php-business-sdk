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

abstract class Bootstrap {

  /**
   * @string
   */
  const DEFAULT_TIMEZONE = 'UTC';

  private static $loader;

  /**
   * @var array
   */
  private static $config = array();

  /**
   * Simplifies the common pattern of checking for an index in an array
   * and selecting a default value if it does not exist
   *
   * @param array $array
   * @param string|int $key
   * @param mixed $default
   * @return mixed
   */
  private static function idx(array $array, $key, $default = null) {
    return array_key_exists($key, $array) && $array[$key] !== ''
      ? $array[$key]
      : $default;
  }

  /**
   * Simplifies the common pattern of checking for an index in an array
   * and throw an exception if not
   *
   * @param array $array
   * @param $key
   * @return mixed
   * @throws \Exception
   */
  private static function idxt(array $array, $key) {
    if (!array_key_exists($key, $array) || !$array[$key]) {
      throw new \Exception("Missing mandatory config '{$key}'");
    }

    return $array[$key];
  }

  /**
   * @param string|int $key
   * @param mixed $default
   * @return mixed
   */
  private static function confx($key, $default = null) {
    return self::idx(self::$config, $key, $default);
  }

  /**
   * @param $key
   * @return mixed
   * @throws \Exception
   */
  private static function confxt($key) {
    return self::idxt(self::$config, $key);
  }

  /**
   * @throws \RuntimeException
   */
  public static function initAutoloader() {
    $vendor_path = static::findParentPath('vendor');
    if (!$vendor_path || !is_readable($vendor_path . '/autoload.php')) {
      throw new \RuntimeException("Could not read autoload.php");
    }
    self::$loader = include $vendor_path . '/autoload.php';
    self::$loader->addPsr4(
      'FacebookAdsTest\\', __DIR__.'/');
  }

  /**
   * @throws \RuntimeException
   */
  public static function initConfig() {
    $config_path = dirname(__DIR__).'/config.php';
    if (!is_readable($config_path)) {
      throw new \RuntimeException("Could not read config.php");
    }

    self::$config = include $config_path;
    AbstractIntegrationTestCase::$appId = self::confxt('app_id');
    AbstractIntegrationTestCase::$appSecret = self::confxt('app_secret');
    AbstractIntegrationTestCase::$accessToken = self::confxt('access_token');
    AbstractIntegrationTestCase::$actId = self::confxt('act_id');
    AbstractIntegrationTestCase::$pageId = self::confxt('page_id');
    AbstractIntegrationTestCase::$appUrl = self::confxt('app_url');
    AbstractIntegrationTestCase::$graphBaseDomain
      = self::confx('graph_base_domain');
    AbstractIntegrationTestCase::$skipSslVerification
      = self::confx('skip_ssl_verification');
    AbstractTestCase::$skipIf = self::confx('skip_if', array());
    AbstractIntegrationTestCase::$testRunId = md5(
      (isset($_SERVER['LOGNAME']) ? $_SERVER['LOGNAME'] : uniqid(true))
      . microtime(true));

    if (!date_default_timezone_set(
      self::confx(
        'act_timezone',
        date_default_timezone_get() ?: self::DEFAULT_TIMEZONE))
    ) {

      throw new \Exception("Invalid timezone");
    }

    if ($curl_logger = self::confx('curl_logger')) {
      AbstractTestCase::$curlLoggerResource = fopen($curl_logger, "w+");
    }
  }

  /**
   * @param string $path
   * @return string
   */
  protected static function findParentPath($path) {
    $dir = __DIR__;
    $previous = '.';
    while (!is_dir($dir.'/'.$path)) {
      $dir = dirname($dir);
      if ($previous === $dir) {
        return false;
      }
      $previous = $dir;
    }
    return $dir.'/'.$path;
  }
}
